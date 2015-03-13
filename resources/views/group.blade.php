@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
      <h1>{{ $group->contest->name }} > {{ $group->name }}</h1>
			<div class="row col-md-12">
        <ul>
          @foreach( $group->players as $player )
          <li><a href="/player/{{ $player->id }}">{{ $player->name }}</a></li>
          @endforeach
        </ul>
      </div>
		</div>
	</div>
</div>
@endsection
