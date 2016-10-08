@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">モノ一覧</div>
                	<p class="pull-right"><a class="btn btn-success" href="/todo/create">追加</a></p>
						<table class="table table-hover todo-table">
							<thead>
								<tr>
							    	<th>借りれる本</th>
							    	
								</tr>
							</thead>
							
							<tbody>
								<tr>
							    	<td>ハリーポッター</td>
							    	<td><a class="btn btn-info" href="">編集</a></td>
							    	<td><button class="btn btn-danger" type="submit">削除</button></td>
								</tr>
							</tbody>
						</table>
            </div>
        </div>
    </div>
</div>


@endsection