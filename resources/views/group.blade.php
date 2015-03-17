@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
      <h1>
        <a href="/contest/{{ $group->contest->id }}">{{ $group->contest->name }}</a>
        <span> > </span>
        <span>{{ $group->name }}</span>
      </h1>
			<div class="row col-md-12">
        <ul>
          @foreach( $contest->judges as $judge )
          <li><a href="/group/{{ $group->id }}/judge/{{ $judge->id }}">{{ $judge->name }}</a></li>
          @endforeach
        </ul>
      </div>
		</div>
	</div>
</div>
@endsection
