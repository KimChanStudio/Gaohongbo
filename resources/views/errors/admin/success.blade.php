@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">成功信息</div>

                <div class="panel-body">
                    {{session('success_info')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
