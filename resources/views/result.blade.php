@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">

      <div class="row col-md-12">
        <h2>
          <a href="/contest/{{ $contest->id }}">{{ $contest->name }}</a> 結果
          <a href="/result/download/{{ $contest->id }}" class="btn btn-default pull-right">
            <span>Excelダウンロード</span>
          </a>
        </h2>
      </div>

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
            @include('result-table', array('contest', $contest) )
          </div>
          @endforeach
        </div>

      </div>
		</div>

	</div>
</div>
@endsection
