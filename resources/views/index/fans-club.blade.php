@extends('index._layouts.default')

@section('title', '粉丝团')
@section('main-header-title', '关于粉丝团')
@section('nav-fansclub-current', 'nav-current')
@section('link-file')
    @@parent

    @include('common._partials.angular2_libraries')

@endsection


@section('main-content')
    <main class="col-md-8 main-content">


        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h1>粉丝团 <small>高洪波粉丝团官方网站</small></h1>
                </div>
                <!--
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Project Name</a>
                        </div>
                        <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#fat">@fat</a></li>
                                <li class=""><a href="#mdo">@mdo</a></li>
                                <li class=""><a href="#mdo">@mdo</a></li>
                                <li class=""><a href="#mdo">@mdo</a></li>
                            </ul>
                        </div>
                    </div>
                -->
                <p class="lead">
                    高指导粉丝这么多，自然少不了自行成立的各个团体（聊天群）等，这里尽可能的列举出我们官方组建以及和我们有联系的高粉团体：


                </p>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">官方组建</h3>
                    </div>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>贴吧</dt>
                            <dd>百度高洪波吧</dd>
                            <dt>微信公众号</dt>
                            <dd>高洪波吧</dd>
                            <dt>洪波侠影</dt>
                            <dd>高洪波官方网站</dd>
                            <dt>洪波涌起</dt>
                            <dd>高洪波粉丝团官方网站</dd>
                            <dt>洪波涌起周边店</dt>
                            <dd>制作支持高指导的各类周边</dd>
                        </dl>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">粉丝自建</h3>
                    </div>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>待定</dt>
                            <dd>待定</dd>
                        </dl>
                    </div>
                </div>
                <address>
                    <strong>加入我们</strong><br>
                    <a href="mailto:kimchan@tongjo.com">kimchan@tongjo.com</a><br>
                    <strong>赞助我们</strong><br>
                    <a href="https://shop108663631.taobao.com/" target="_blank">购买洪波涌起周边</a><br>
                    直接打赏支付宝:17302174482
                </address>
            </div>
        </div>


    </main>
    @endsection


