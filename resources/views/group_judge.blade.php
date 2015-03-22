@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
      <h1>
        <a href="/contest/{{ $group->contest->id }}">{{ $group->contest->name }}</a>
        <span> > </span>
        <a href="/group/{{ $group->id }}">{{ $group->name }}</a>
        <span> > </span>
        <span>{{ $judge->name }}</span>
      </h1>
			<div class="row col-md-12">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>参加者</th>
              <th>エントリーNo</th>
              @foreach( $viewpoints as $vp )
								@if( in_array($vp->id, $viewpoint_ids) )
                	<th>{{ $vp->name }}</th>
								@endif
              @endforeach
            </tr>
          </thead>
          <tbody>
            @foreach( $players as $player )
            <tr>
              <td>{{ $player->name }}</td>
              <td>{{ $player->entry_no }}</td>
              @foreach( $viewpoints as $vp )
								@if( in_array($vp->id, $viewpoint_ids) )
	                {{-- */$score = $player->score($judge->id, $vp->id)/* --}}
	                <td>
	                  @if (isset($score))
	                  {!! Form::model($score, ['method' => 'PATCH', 'route' => ['score.update', $score->id]]) !!}
	                  @else
	                  {!! Form::model(new App\Score, ['route' => ['score.store']]) !!}
	                  @endif
	                    {!! Form::text('score', isset($score) ? $score->score : '',
	                      ['class' => 'js-score form-control input-sm text-right'] ) !!}
	                    {!! Form::hidden('group_id', $group->id) !!}
	                    {!! Form::hidden('judge_id', $judge->id) !!}
	                    {!! Form::hidden('viewpoint_id', $vp->id) !!}
	                    {!! Form::hidden('player_id', $player->id) !!}
	                  {!! Form::close() !!}
	                </td>
								@endif
              @endforeach
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
		</div>
	</div>
</div>
@endsection
