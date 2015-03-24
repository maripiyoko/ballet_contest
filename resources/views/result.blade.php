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
          <table class="table table-hover">
          <thead>
            <tr>
              <th>参加者</th>
            </tr>
          </thead>
          @foreach ( $group->players as $player )
            <tr>
              <th>{{ $player->name }}</th>
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