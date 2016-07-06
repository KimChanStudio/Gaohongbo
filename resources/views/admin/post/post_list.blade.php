

@extends('layouts.admin.app')

@section('title', '文章列表-后台管理')

@section('content')
    <div class="container">
        <div class="row">
            <main class="col-md-12 main-content">
                <div class="panel panel-default">
                    <div class="panel-heading">文章列表</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        <a href="{{ url('admin/post/edit?id='.$post->id) }}" >{{ $post->title }}</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $posts->links() !!}
                    </div>
                </div>


            </main>
        </div>
    </div>
@endsection


