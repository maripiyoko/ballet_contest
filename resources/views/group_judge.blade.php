@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
      <h1>{{ $group->contest->name }} > {{ $group->name }} > {{ $judge->name }}</h1>
			<div class="row col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>参加者</th>
              @foreach( $viewpoints as $vp )
                <th>{{ $vp->name }}</th>
              @endforeach
            </tr>
          </thead>
          <tbody>
            @foreach( $players as $player )
            <tr>
              <td>{{ $player->name }}</td>
              @foreach( $viewpoints as $vp )
                <td><input type="text" class="form-control" value=""></td>
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
