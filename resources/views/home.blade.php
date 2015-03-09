@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
      <h1>{{ $organization->name }}</h1>
			<div class="row col-md-12">
        <form class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-3 control-label">コンテストを選んでください</label>
            <div class="col-sm-7">
              <select class="form-control">
                @foreach( $organization->contests as $contest )
                  <option value="{{ $contest->id }}">{{ $contest->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-sm-2">
              <button class="btn btn-primary" type="submit">スコアを入力する</button>
            </div>
          </div>
        </form>
			</div>
		</div>
	</div>
</div>
@endsection
