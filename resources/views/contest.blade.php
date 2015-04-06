@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="row col-md-12">
      <h2>
        <span>{{ $contest->name }}</span>
        <a href="/result/{{ $contest->id }}" class="btn btn-default pull-right">
          結果を表示する
        </a>
      </h2>
    </div>

    <div class="row col-md-12">
			<div class="row col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">スコアを入力する部門を選んでください</div>
          <div class="panel-body">
            <ul class="list-group">
              @foreach( $contest->groups as $group )
                <a href="/group/{{ $group->id }}">
                  <li class="list-group-item">
                    <span class="badge">0</span>
                    <span>{{ $group->name }}</span>
                  </li>
                </a>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
		</div>

	</div>
</div>
@endsection
