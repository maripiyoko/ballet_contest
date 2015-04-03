@extends('app')

@section('content')
<div class="container">
	<div class="row">

		<div class="col-md-12">
      <h1>{{ $contest->name }} 結果</h1>
			<div class="row col-md-12">

        <div role="tabpanel">
          <ul class="nav nav-tabs" role="tablist">
            @foreach( $contest->groups as $group )
            <li class="js-tab" role="presentation" role="tab">
              <a href="#group-{{$group->id}}" data-toggle="tab">{{ $group->name }}</a>
            </li>
            @endforeach
          </ul>
        </div>

        <div class="tab-content">
          @foreach( $contest->groups as $group )
          <div role="tabpanel" class="tab-pane fade" id="group-{{ $group->id }}">
          <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>観点</th>
              @foreach ( $contest->viewpoints as $viewpoint )
                <th colspan="{{ count($viewpoint->judges()) }}">{{ $viewpoint->name }}</th>
              @endforeach
            </tr>
            <tr>
              <th>審査員</th>
              @foreach ( $contest->viewpoints as $viewpoint )
                @foreach ( $viewpoint->judges() as $j )
                <th>{{ $j->name }}</th>
                @endforeach
              @endforeach
            </tr>
          </thead>
          @foreach ( $group->players as $player )
            <tr>
              <th rowspan="2">{{ $player->name }}</th>
              @foreach( $contest->viewpoints as $viewpoint)
                @foreach ( $viewpoint->judges() as $j )
                <td class="text-right">
	                {{-- */$score = $contest->score($j->id, $viewpoint->id, $player->id) /* --}}
                  @if( isset($score) )
                  {{ $score->score }}
                  @endif
                </td>
                @endforeach
              @endforeach
            </tr>
            <tr>
              @foreach( $contest->viewpoints as $viewpoint)
              <td class="text-right" colspan="{{ count($viewpoint->judges()) }}">
                {{ intval($viewpoint->sumupScores($player->id)) }}
              </td>
              @endforeach
            </tr>
          @endforeach
          </table>
          </div>
          @endforeach
        </div>

      </div>
		</div>

	</div>
</div>
@endsection
