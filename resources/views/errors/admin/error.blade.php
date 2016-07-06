@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">oops,出错啦</div>

                <div class="panel-body">
                    {{session('error_info')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
