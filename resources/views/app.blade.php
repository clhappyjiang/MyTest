<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link  rel="stylesheet"  href="css/bootstrap.css">
    <link  rel="stylesheet"  href="css/style.css">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body >
<nav class="navbar  navbar-inverse navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">首页</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                <li><a href="/admin">{{ Auth::user()->name }}</a></li>

                <li><a href="/discussions/create">校友信息注册</a></li>
                <li><a href="/find">搜索校友</a></li>
                <li><a href="/logout">退出登录</a></li>
                @else
                {{--<li><a href="/admin">管理员登录</a></li>--}}
                <li><a href="/user/login">登 录</a></li>
                <li><a href="/user/register">注 册</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>



@if(Auth::check())
    <div class="container">
        <div class="col-md-offset-1 row ">
            <div class="col-md-9" role="main">
                @yield('content')
            </div>
        </div>
    </div>
    @else





    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>

    <div class="content-bg"></div>
    <div class="bg-overlay"></div>

    <!-- SITE TOP -->
    <div class="site-top">
        <div class="site-header clearfix">
            <div class="container">

            </div>
        </div> <!-- .site-header -->
        <div class="site-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2>苏州科技大学校友录数据管理系统</h2>
                    </div>
                </div>

            </div>
        </div> <!-- .site-banner -->
    </div> <!-- .site-top -->

    <!-- MAIN POSTS -->
    <div class="main-posts">
        <div class="container">
            <div class="row">
                <div class="blog-masonry masonry-true">
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/01.png" alt="">
                            <div class="title-over">
                                <h4><a href="#">优秀校友 段毅</a><div class="pull-right">房多多创始人兼CEO</div></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">苏州科技大学毕业</span>

                                    <h4><a href="#">登录查看详情信息</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/02.png" alt="">
                            <div class="title-over">
                                <h4><a href="#">优秀校友 曾熙</a><div class="pull-right">房多多创始人兼COO</div></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">苏州科技大学毕业</span>

                                    <h4><a href="#">登录查看详情信息</a></h4>

                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/03.png" alt="">
                            <div class="title-over">
                                <h4><a href="#">优秀校友 郑国</a><div class="pull-right">崇山科技董事长</div></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">苏州科技大学毕业</span>

                                    <h4><a href="#">登录查看详情信息</a></h4>

                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/04.png" alt="">
                            <div class="title-over">
                                <h4><a href="#">优秀校友 周锡元</a><div class="pull-right">中科院院士</div></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">苏州科技大学毕业</span>

                                    <h4><a href="#">登录查看详情信息</a></h4>

                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/05.png" alt="">
                            <div class="title-over">
                                <h4><a href="#">优秀校友 叶可明</a><div class="pull-right">中国工程院院士</div></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">苏州科技大学毕业</span>

                                    <h4><a href="#">登录查看详情信息</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/06.png" alt="">
                            <div class="title-over">
                                <h4><a href="#">优秀校友 王开忠</a><div class="pull-right">中宣部宣教部副局长</div></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">苏州科技大学毕业</span>

                                    <h4><a href="#">登录查看详情信息</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/07.png" alt="">
                            <div class="title-over">
                                <h4><a href="#">优秀校友 余新忠</a><div class="pull-right">南开大学博士生导师</div></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">苏州科技大学毕业</span>

                                    <h4><a href="#">登录查看详情信息</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/08.png" alt="">
                            <div class="title-over">
                                <h4><a href="#">优秀校友 滔吴</a><div class="pull-right">中山大学历史教授</div></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">苏州科技大学毕业</span>

                                    <h4><a href="#">登录查看详情信息</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/09.png" alt="">
                            <div class="title-over">
                                <h4><a href="#">优秀校友 朱兴良</a><div class="pull-right">金螳螂控股公司董事长</div></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">苏州科技大学毕业</span>

                                    <h4><a href="#">登录查看详情信息</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div style="float:center" >   <p >
                            石湖校区：江苏省苏州市高新区科锐路1号&nbsp;&nbsp;邮编：215009<br />
                            普通高考招生电话：0512-68096117<br />研究生招生电话：0512-68093182<br />
                            苏ICP备：<a href="http://www.miitbeian.gov.cn">11028812</a>&nbsp;&nbsp;<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=32050502000334"><img src="/images/batb.png" width="16" height="16" />苏公网安备 32050502000334号</a><br />Copyright &copy;2016 苏州科技大学.All rights reserved.<br />     </p>
                    </div>

                </div>
            </div>

        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/min/plugins.min.js"></script>
    <script src="js/min/main.min.js"></script>

    <!-- Preloader -->
    <script type="text/javascript">
        //<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $('#loader').fadeOut(); // will first fade out the loading animation
            $('#loader-wrapper').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(350).css({'overflow-y':'visible'});
        })
        //]]>
    </script>
@endif




</body>
</html>