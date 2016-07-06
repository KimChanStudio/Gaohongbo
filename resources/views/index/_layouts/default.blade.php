<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') &mdash; 高洪波粉丝团官方网站</title>

    @section('link-file')
    <!-- 新 Bootstrap 核心 CSS 文件 -->
{{ Html::style('css/bootstrap.css') }}
<!-- index页面组 用 -->
{{ Html::style('css/index/home/common.css') }}
<!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <!-- <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">  -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


        @show



</head>
<body class="home-template">
<!--
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">洪波涌起</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
-->
<!-- start header -->
<header class="main-header" @yield('main-header-style')>
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <h1>@yield('main-header-title')</h1>
            <h2 class="hide">PHP THAT DOESN'T HURT. CODE HAPPY &amp; ENJOY THE FRESH AIR.</h2>

        </div>

        <!---
        <div class="col-sm-12">
            <a href="http://www.golaravel.com/laravel/docs/5.1/" class="btn btn-default btn-doc" target="_blank">5.1 中文文档</a>
            <a href="http://www.golaravel.com/laravel/docs/5.0/" class="btn btn-default btn-doc" target="_blank">5.0 中文文档</a>
            <a href="http://www.golaravel.com/laravel/docs/4.2/" class="btn btn-default btn-doc" target="_blank">4.2 中文文档</a>
            <a href="http://www.golaravel.com/laravel/docs/4.1/" class="btn btn-default btn-doc" target="_blank">4.1 中文文档</a>
            <a href="http://www.golaravel.com/laravel/docs/4.0/" class="btn btn-default btn-doc" target="_blank">4.0 中文文档</a>
            <a href="http://lumen.golaravel.com/docs/" class="btn btn-default btn-doc" target="_blank">Lumen 中文文档</a>
            <a href="http://wenda.golaravel.com" class="btn btn-default btn-doc" target="_blank">问答社区</a>
        </div>
        --->
    </div>
</div>
</header>
<!-- end header -->

<!-- start nav -->
<nav class="main-navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="navbar-header">
                        <span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                        </span>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="menu">
                        <li class=@yield('nav-home-current') role="presentation"><a href="{{url('/home')}}">首页</a></li>
                        <li class=@yield('nav-about-gao-current') role="presentation"><a href="{{url('/about-gao')}}" title="关于高洪波" >关于高洪波</a></li>
                        <li class=@yield('nav-database-current') role="presentation"><a href="{{url('/database')}}" title="数据库" >数据库</a></li>
                        <li class=@yield('nav-league-current') role="presentation"><a href="{{url('/league')}}" title="高吧联赛" target="_blank">高吧联赛</a></li>
                        <li class=@yield('nav-fansclub-current') role="presentation"><a href="{{url('/fans-club')}}" title="粉丝团">粉丝团</a></li>
                        {{--<li class=@yield('nav-activity-current') role="presentation"><a href="{{url('/activity')}}" title="最新活动">最新活动</a></li>--}}
                        <li class=@yield('nav-shop-current') role="presentation"><a href="https://shop108663631.taobao.com/" title="洪波涌起周边" target="_blank">洪波涌起周边</a></li>
                        <li class=@yield('nav-about-current') role="presentation"><a href="{{url('/about')}}" title="关于">关于</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- end nav -->

<!-- start site's main content area -->
<section class="content-wrap">
    <div class="container">
        <div class="row">

            @yield('main-content')

            @section('sidebar')
            <aside class="col-md-4 sidebar">
                <!-- start widget -->
                <div class="widget">
                    @if (Auth::check())
                        <h4 class="title"><small>欢迎回来</small> {{Auth::user()->email}} </h4>
                        <div class="content community">
                            <p><a href="{{ url('user/profile') }}">个人资料</a></p>
                            <p><a href="{{ url('auth/logout') }}">注销</a></p>
                        </div>
                    @else
                        <a class="btn btn-default" href="{{url('auth/login')}}" role="button">登陆</a>
                        <a class="btn btn-default" href="{{ url('auth/register') }}" role="button">注册</a>
                    @endif
                </div>
                <!-- end widget -->

                <!-- start tag cloud widget -->
                <div class="widget">
                    <h4 class="title">粉丝团社交账号</h4>
                    <div class="content community">
                        <p>微信公众号：gaohongboba</p>
                        <p>微博：百度高洪波吧</p>
                        <p><a href="http://tieba.baidu.com/f?kw=%B8%DF%BA%E9%B2%A8" title="百度高洪波吧" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '百度高洪波吧'])"><i class="fa fa-comments"></i> 百度高洪波吧</a></p>
                        <p><a href="http://www.gaohongbo.net" title="洪波侠影 - 高洪波官方网站" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '洪波侠影 - 高洪波官方网站'])"><i class="fa fa-comments"></i> 洪波侠影 - 高洪波官方网站</a></p>
                    </div>
                </div>
                <!-- end tag cloud widget -->

                <!-- start widget -->
                <div class="widget">
                    <h4 class="title">高家军比赛视频全纪录</h4>
                    <div class="content download">
                        <a href="http://yun.baidu.com/share/home?view=album&uk=271046208" class="btn btn-default btn-block" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '高家军比赛视频全纪录'])">高家军比赛视频全纪录</a>
                    </div>
                </div>
                <!-- end widget -->


                <!-- start tag cloud widget -->
                <!--
                <div class="widget">
                    <h4 class="title">标签云</h4>
                    <div class="content tag-cloud">
                        <a href="/tag/laravel-5-2/">Laravel 5.2</a>
                        <a href="/tag/spark/">Spark</a>
                        <a href="/tag/jing-xiang/">镜像</a>
                        <a href="/tag/xin-ban-ben-fa-bu/">新版本发布</a>
                        <a href="/tag/lts/">LTS</a>
                        <a href="/tag/wei-kuang-jia/">微框架</a>
                        <a href="/tag/lumen/">Lumen</a>
                        <a href="/tag/ming-ming-kong-jian/">命名空间</a>
                        <a href="/tag/laravel4/">Laravel4</a>
                        <a href="/tag/whoops/">Whoops</a>
                        <a href="/tag/event/">Event</a>
                        <a href="/tag/sheng-ji/">升级</a>
                        <a href="/tag/laravle5/">laravle5</a>
                        <a href="/tag/error-page/">错误页</a>
                        <a href="/tag/laravel-5/">Laravel 5</a>
                        <a href="/tag/artisan/">Artisan</a>
                        <a href="/tag/laravel-5-1/">Laravel 5.1</a>
                        <a href="/tag/lravel/">Lravel</a>


                        <a href="/tag-cloud/">...</a>
                    </div>
                </div>
                -->
                <!-- end tag cloud widget -->

                <!-- start widget -->
                <!-- end widget -->

                <!-- start widget -->
                <!-- end widget -->
                </aside>
                @show

        </div>
    </div>
</section>

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">最新文章</h4>
                    <div class="content recent-post">
                        <div class="recent-single-post">
                            <a href="/post/composer-announces-v1-0/" class="post-title">Composer 终于走到了 v1.0 版本</a>
                            <div class="date">2016年4月6日</div>
                        </div>
                        <div class="recent-single-post">
                            <a href="/post/lumen-5-2-is-released/" class="post-title">Lumen 5.2 正式发布</a>
                            <div class="date">2016年1月8日</div>
                        </div>
                        <div class="recent-single-post">
                            <a href="/post/laravel-5-2-zheng-shi-fa-bu/" class="post-title">Laravel 5.2 正式发布</a>
                            <div class="date">2015年12月22日</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="widget">
                    <!--
                    <h4 class="title">标签云</h4>
                    <div class="content tag-cloud">
                        <a href="/tag/laravel/">Laravel</a>
                        <a href="/tag/getting-started-with-laravel/">Laravel入门教程</a>
                        <a href="/tag/laravel-5/">Laravel 5</a>
                        <a href="/tag/eloquent/">Eloquent</a>
                        <a href="/tag/xin-ban-ben-fa-bu/">新版本发布</a>
                        <a href="/tag/laravel-5-1/">Laravel 5.1</a>
                        <a href="/tag/laravle5/">laravle5</a>
                        <a href="/tag/composer/">Composer</a>
                        <a href="/tag/php/">PHP</a>
                        <a href="/tag/orm/">ORM</a>
                        <a href="/tag/artisan/">Artisan</a>
                        <a href="/tag/lumen/">Lumen</a>
                        <a href="/tag/lts/">LTS</a>
                        <a href="/tag/laravel-5-2/">Laravel 5.2</a>
                        <a href="/tag/installation/">安装</a>

                        <a href="/tag-cloud/">...</a>
                    </div>
                    -->
                </div>
            </div>

            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">合作伙伴</h4>
                    <div class="content tag-cloud friend-links">
                        <a href="http://www.bootcss.com" title="百度高洪波吧"  target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '洪波侠影 - 高洪波官方网站'])">百度高洪波吧</a>
                        <a href="http://www.gaohongbo.net" title="洪波侠影 - 高洪波官方网站" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '洪波侠影 - 高洪波官方网站'])">洪波侠影 - 高洪波官方网站</a>
                        <hr>
                        <a href="https://shop108663631.taobao.com/" title="洪波涌起周边店" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'lodashjscom'])" target="_blank">洪波涌起周边店</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span>Copyright © <a href="http://www.golaravel.com/">Laravel 中文网</a></span> |
                <span><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11008151号</a></span> |
                <span>京公网安备11010802014853</span>
            </div>
        </div>
    </div>
</div>

<a href="#" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
@yield('bottom-link-file')
</body>
</html>
