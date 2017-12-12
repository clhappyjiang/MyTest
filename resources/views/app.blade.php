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
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="/discussions/create">发布新闻</a></li>
                    <li><a href="/find">搜索新闻</a></li>

                    <li><a href="/logout">退出登录</a></li>
                @else
                <li><a href="/admin">管理员登录</a></li>
                <li><a href="/user/login">普通用户登录</a></li>
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
                        <h2>苏州科技大学新闻发布系统</h2>
                    </div>
                </div>

            </div>
        </div> <!-- .site-banner -->
    </div> <!-- .site-top -->
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
    <!-- MAIN POSTS -->
    <div class="main-posts">
        <div class="container">
            <div class="row">
                <div class="blog-masonry masonry-true">
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/1.jpg" alt="">
                            <div class="title-over">
                                <h4><a href="#">一月内宣布三笔“新零售”投资：朱啸虎自曝投资逻辑</a></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">25 Jan 2017</span>
                                    <h4><a href="#">登录查看新闻详情</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/2.jpg" alt="">
                            <div class="title-over">
                                <h4><a href="#">官媒：共享单车押金应由第三方存管 降低被挪用风险</a></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">24 Jan 2017</span>
                                    <h4><a href="#">登录查看新闻详情</a></h4>

                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/3.jpg" alt="">
                            <div class="title-over">
                                <h4><a href="#">“2017年中国经济潮流人物”榜单将于12月8日公布</a></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">23 Jan 2017</span>
                                    <h4><a href="#">登录查看新闻详情</a></h4>

                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/4.jpg" alt="">
                            <div class="title-over">
                                <h4><a href="#">共享单车各派拒绝停战，新一轮融资把战火燃向大出行</a></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">22 Jan 2017</span>
                                    <h4><a href="#">登录查看新闻详情</a></h4>

                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/5.jpg" alt="">
                            <div class="title-over">
                                <h4><a href="#">新加坡共享单车Obike遭黑客入侵 大量用户信息被泄露</a></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">21 Jan 2017</span>
                                    <h4><a href="#">登录查看新闻详情</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/6.jpg" alt="">
                            <div class="title-over">
                                <h4><a href="#">余额宝单日申购额度调整为2万 超过98%用户不受影响</a></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">20 Jan 2017</span>
                                    <h4><a href="#">登录查看新闻详情</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/7.jpg" alt="">
                            <div class="title-over">
                                <h4><a href="#">库克：每次来中国都得到很多能量 中国的变化太大了</a></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">15 Jan 2017</span>
                                    <h4><a href="#">登录查看新闻详情</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/8.jpg" alt="">
                            <div class="title-over">
                                <h4><a href="#">乌镇物联网大会</a></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">14 Jan 2084</span>
                                    <h4><a href="#">登录查看新闻详情</a></h4>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-masonry -->
                    <div class="post-masonry col-md-4 col-sm-6">
                        <div class="post-thumb">
                            <img src="images/9.jpg" alt="">
                            <div class="title-over">
                                <h4><a href="#">徐小平曝某投资人胁迫创业者接受低价 称是黑恶势力</a></h4>
                            </div>
                            <div class="post-hover text-center">
                                <div class="inside">
                                    <i class="fa fa-plus"></i>
                                    <span class="date">13 Jan 2084</span>
                                    <h4><a href="#">登录查看新闻详情</a></h4>
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