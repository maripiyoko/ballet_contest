@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
      <h1>{{ $group->contest->name }} > {{ $group->name }}</h1>
			<div class="row col-md-12">
        <ul>
          @foreach( $contest->judges as $judge )
          <li><a href="/judge/{{ $group->id }}/{{ $judge->id }}">{{ $judge->name }}</a></li>
          @endforeach
        </ul>
      </div>
		</div>
	</div>
</div>
@endsection
