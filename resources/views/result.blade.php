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
            <tr class="info">
              <th>審査員</th>
              @foreach ( $contest->judges as $judge )
                <th colspan="3" style="text-align:center;">{{ $judge->name }}</th>
              @endforeach
            </tr>
            <tr class="success">
              <th>観点</th>
              @foreach ( $contest->judges as $judge )
                @foreach ( $judgesViewpointsArray[$judge->id] as $vp )
                <th>{{ $vp->name }}</th>
                @endforeach
              @endforeach
            </tr>
          </thead>
          @foreach ( $group->players as $player )
            <tr>
              <th>{{ $player->name }}</th>
              @foreach ( $contest->judges as $judge )
                @foreach ( $judgesViewpointsArray[$judge->id] as $vp )
                  <td>
                    @if( isset($scores[$judge->id][$vp->id][$player->id]) )
                      {{ $scores[$judge->id][$vp->id][$player->id]->score }}
                    @endif
                  </td>
                @endforeach
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
