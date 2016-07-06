<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>洪波涌起 &mdash; 高洪波粉丝团官方网站 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Webfonts -->
    <link href='http://fonts.useso.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    {{ Html::style('css/animate.css') }}
    <!-- Icomoon Icon Fonts-->
    {{ Html::style('css/icomoon.css') }}
    <!-- Bootstrap Style -->
    {{ Html::style('css/bootstrap.css') }}
    <!-- Theme Style -->
    {{ Html::style('css/style_main.css') }}
    <!-- Modernizr JS -->
    {{ Html::script('js/modernizr-2.6.2.min.js') }}
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    {{ Html::script('js/respond.min.js') }}
    <![endif]-->

</head>
<body>

<div id="fh5co-portrait" style="background-image: url('images/index/index/gaohongbo.jpg') ;" data-minheight="500">
    <div id="fh5co-toggle" class="js-fh5co-toggle to-animate-single"><a href="#fh5co-bio" class="fh5co-active"><i class="icon-align-right"></i></a></div>
    <div id="fh5co-intro">
        <h1><span class="to-animate">我只有人生信条,</span> <span class="to-animate">没有足球信条.</span> <span class="to-animate">做人做事要善良,</span> <span class="to-animate">这是我母亲从小就教导我的.</span></h1>
        <p class="to-animate">有兴趣加入高洪波粉丝团网站? Email me at <a href="mailto:kimchan@tongjo.com" class="to-animate">kimchan@tongjo.com</a></p>
    </div>
    <div id="social-animate" class="fh5co-social">
        <ul>
            <li><a href="#" class="to-animate"><i class="icon-twitter-with-circle"></i></a></li>
            <li><a href="#" class="to-animate"><i class="icon-facebook-with-circle"></i></a></li>
            <li><a href="#" class="to-animate"><i class="icon-instagram-with-circle"></i></a></li>
        </ul>
    </div>
    <div class="overlay"></div>
</div>
<div id="fh5co-bio">
    <div id="fh5co-bio-inner">
        <p class="to-animate">高洪波粉丝团官方网站 <a href="{{url('/home')}}">网页测试</a>, far from the countries Vokalia and <a href="#">Consonantia</a>, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <p class="to-animate">这里是首页 <a href="#">点击首页</a> flows by their place and supplies it with the necessary regelialia. It is a <a href="#">paradisematic</a> country, in which roasted parts of <a href="#">sentences</a> fly into your <a href="#">mouth</a>. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
        <div class="fh5co-copyright to-animate">
            <p><small>&copy; 2015-2016 By Kim Chan</small></p>
        </div>
    </div>

</div>


<!-- jQuery -->
{{ Html::script('js/jquery.min.js') }}
<!-- jQuery Easing -->
{{ Html::script('js/jquery.easing.1.3.js') }}
<!-- Bootstrap -->
{{ Html::script('js/bootstrap.min.js') }}
<!-- Waypoints -->
{{ Html::script('js/jquery.waypoints.min.js') }}
<!-- Main JS -->
{{ Html::script('js/main_index.js') }}


</body>
</html>
