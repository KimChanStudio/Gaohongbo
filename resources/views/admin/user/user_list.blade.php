

@extends('layouts.admin.app')

@section('title', '用户列表-后台管理')

@section('content')
    <div class="container">
        <div class="row">
            <main class="col-md-12 main-content">
                <div class="panel panel-default">
                    <div class="panel-heading">用户列表</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>用户名</th>
                                <th>邮箱</th>
                                <th>用户类型</th>
                                <th>激活状态</th>
                                <th>查看</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ isset($a)? ++$a:$a=1 }}</th>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($user->group_name=='User')
                                            <span class="label label-info">普通用户</span>
                                        @elseif($user->group_name=='Moderator')
                                            <span class="label label-primary">版主</span>
                                        @elseif($user->group_name=='Admin')
                                            <span class="label label-warning">管理员</span>
                                        @elseif($user->group_name=='UltraAdmin')
                                            <span class="label label-default">超级管理员</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($user->activated)
                                            <span class="label label-success">已激活</span>
                                        @else
                                            <span class="label label-danger">未激活</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/user/detail?id='.$user->id) }}" class="btn btn-default" role="button">编辑详情</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $users->links() !!}
                    </div>
                </div>


            </main>
        </div>
    </div>
@endsection


