@extends('index._layouts.default')

@section('title', '关于')
@section('main-header-title', '关于我们')
@section('nav-about-current', 'nav-current')
@section('link-file')
    @@parent

    @include('common._partials.angular2_libraries')

@endsection


@section('main-content')
    <main class="col-md-8 main-content">


        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h1>关于我们 <small>高洪波粉丝团官方网站</small></h1>
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
                    高洪波粉丝团官方网站，是由一群热情追随高洪波高指导的粉丝，筹划并建立的网站。希望以一种体验性更好的方式，为大家讲述高指导的故事，展示高家军的风采，预告高粉的线上&线下活动等等。
                    暂时计划开发的板块有：


                </p>

                <dl class="dl-horizontal">
                    <dt>关于高洪波</dt>
                    <dd>高洪波简介</dd>
                    <dt>数据库</dt>
                    <dd>高洪波球员&教练生涯比赛记录及数据分析</dd>
                    <dt>高吧联赛</dt>
                    <dd>百度高洪波吧每年一度的联赛活动网页版，减轻联赛负责人负担，并方便吧友回复参与，自动化&可视化联赛活动</dd>
                    <dt>粉丝团</dt>
                    <dd>高洪波粉丝团信息，包括各区域负责人联系方式</dd>
                    <dt>最新活动</dt>
                    <dd>高洪波粉丝团最新活动预告</dd>
                    <dt>洪波涌起周边</dt>
                    <dd>首个关于高指导的周边设计&制作组织，提供&销售周边物品，赚取金额用来辅助网站平台建设及有可能的活动赞助</dd>
                </dl>
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


