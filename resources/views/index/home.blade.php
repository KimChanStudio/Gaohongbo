

            @extends('index._layouts.default')

            @section('title', '首页')
            @section('main-header-title', '高洪波粉丝团官方网站')
            @section('nav-home-current', 'nav-current')


            @section('main-content')
                <main class="col-md-8 main-content">
                    @foreach ($posts as $post)
                        <article id="{{$post->id}}" class="post">

                            <div class="post-head">
                                <h1 class="post-title"><a href="{{url('post/read?id='.$post->id)}}">{{$post->title}}</a></h1>
                                <div class="post-meta">
                                    <span class="author">来源：{{$post->source}}</span> •
                                    <time class="post-date" datetime="" title="">{{$post->created_at}}</time>
                                </div>
                            </div>
                            <div class="featured-media">
                                <a href="#"><img src="http://image.phpcomposer.com/1/6e/db5b3341b0b013db10affad656fbf.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <p>{{$post->abstract}}</p>
                            </div>
                            <div class="post-permalink">
                                <a href="{{url('post/read?id='.$post->id)}}" class="btn btn-default">阅读全文</a>
                            </div>

                            <footer class="post-footer clearfix">
                                <div class="pull-left tag-list">
                                    <i class="fa fa-folder-open-o"></i>

                                </div>
                                <div class="pull-right share">
                                </div>
                            </footer>
                        </article>

                    @endforeach


                    <nav class="pagination" role="navigation">
                        <span class="page-number">第 1 页 ⁄ 共 5 页</span>
                        <a class="older-posts" href="/page/2/"><i class="fa fa-angle-right"></i></a>
                    </nav>


                </main>
            @endsection


