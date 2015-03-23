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
            <li class="js-tab" role="presentation" aria-controls="tab-{{ $group->id }}"
              role="tab" data-toggle="tab">
              <a href="#tab-{{$group->id}}">{{ $group->name }}</a>
            </li>
            @endforeach
          </ul>
        </div>

        <div class="tab-content">
          @foreach( $contest->groups as $group )
          <div role="tabpanel" class="tab-pane" id="tab-{{ $group->id }}">
            tab contents for {{ $group->name }}
          </div>
          @endforeach
        </div>

      </div>
		</div>

	</div>
</div>
@endsection
