@extends('index._layouts.default')

@section('title', '数据库')
@section('main-header-title', '数据库')
@section('nav-database-current', 'nav-current')
@section('link-file')
    @@parent
    @include('common._partials.angular2_libraries')

    <script>
        System.config({
            "defaultJSExtensions": true,
            packages: {
                app: {
                    format: 'register',
                    defaultExtension: 'js'
                }
            }
        });
        System.import('js/index/boot_database')
                .then(null, console.error.bind(console));
    </script>

@endsection

@section('main-content')
    <main class="col-md-8 main-content">


        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h1>数据库 <small>收录高指导球员&教练生涯数据</small></h1>
                </div>
                <database><i class="icon-spinner icon-spin"></i>loading...</database>



            </div>
        </div>


    </main>
@endsection


