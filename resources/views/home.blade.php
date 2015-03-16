@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
      <h1>{{ $organization->name }}</h1>
        <ul>
        @foreach( $organization->contests as $contest )
          <li><a href="contest/{{ $contest->id }}">{{ $contest->name }}</a></li>
        @endforeach
        </ul>
			</div>
		</div>
	</div>
</div>
@endsection
