@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $organization->name }}</div>
				<div class="panel-body">
          Hello! {{ $currentUser->name }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
