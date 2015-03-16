@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
      <h1>{{ $contest->name }}</h1>
			<div class="row col-md-12">
        <ul>
          @foreach( $contest->groups as $group )
            <li>
              <a href="/group/{{ $group->id }}">{{ $group->name }}</a>
            </li>
          @endforeach
        </ul>
      </div>
		</div>
	</div>
</div>
@endsection
