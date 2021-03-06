<!doctype html>
<html lang="zh-cn" class=" js_active  vc_mobile  vc_transform  vc_transform ">
<!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-transform">
    <meta http-equiv="cache-control" content="no-siteapp">
    <link rel="shortcut icon"  href="{{url('5dm/img/logo1510.png')}}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--[if lt ie 9]><script src="{{url('5dm/js/html5.js')}}" type="text/javascript"></script><![endif]-->
    <!--[if lte ie 9]><link rel="stylesheet" type="text/css" href="{{url('5dm/css/ie.css')}}/" /><![endif]-->
    <meta property="description" content="">
    <link rel="stylesheet" id="um-css" href="{{url('5dm/css/um.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="wp-pagenavi-css" href="{{url('5dm/css/pagenavi-css.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="ajax-comment-css" href="{{url('5dm/css/app.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="google-font-css" href="https://fonts.cat.net/css?family=Open+Sans" type="text/css" media="all">
    <link rel="stylesheet" id="google-font-css" href="{{url('5dm/css/css.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="colorbox-css" href="{{url('5dm/css/colorbox.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-css" href="{{url('5dm/css/bootstrap.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="tooltipster-css" href="{{url('5dm/css/tooltipster.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="style-css" href="{{url('5dm/css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-css" href="{{url('5dm/css/font-awesome.min.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" id="5moe-icon-blg-css" href="{{url('5dm/css/justVector.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="mashmenu-css-css" href="{{url('5dm/css/mashmenu.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="js_composer_front-css" href="{{url('5dm/css/js_composer.css')}}" type="text/css" media="all">
    <script type="text/javascript" src="{{url('5dm/js/jquery.min.js')}}"></script>
    <!--[if ie 8]><link rel="stylesheet" type="text/css" href="{{url('5dm/css/vc-ie8.css')}}" media="screen"><![endif]-->
    <script src="{{url('5dm/js/jquery.lazyload.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        if (self != top) { location.href = "about:blank" };
    </script>
    <link rel="stylesheet" href="{{url('5dm/css/OwO.min.css')}}">
</head>

<body class="home page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php page page-id-6 full-width custom-background-empty wpb-js-composer js-comp-ver-4.4.3 vc_responsive" style="overflow-x: visible;"><a name="top" style="height:0; position:absolute; top:0;" id="top-anchor"></a>

<div id="body-wrap">
    <script type="text/javascript" src="{{url('5dm/js/ajax-sign-script.min.js')}}"></script>

    <div id="sign">
        <div class="part loginpart" id="sign-go">
            <form id="login"  novalidate="novalidate">
                <div id="register-active" class="switch"><i class="fa fa-toggle-on"></i>切换注册</div>
                <h3>登录<p class="status" id="loginerror"></p></h3>
                <p>
                    <label class="icon" for="username"><i class="fa fa-user"></i></label>
                    {{csrf_field()}}
                    <input class="input-control" id="username" type="text" placeholder="请输入用户名" name="name" required="" aria-required="true">
                </p>
                <p>
                    <label class="icon" for="password"><i class="fa fa-lock"></i></label>
                    <input class="input-control" id="password" type="password" placeholder="请输入密码" name="password" required="" aria-required="true">
                </p><a class="close" id="close-pp"><i class="fa fa-times"></i></a>
                <p class="safe">
                    <label class="remembermetext" for="rememberme"><input name="rememberme" type="checkbox" checked="checked" id="rememberme" class="rememberme" value="forever">记住我的登录</label>
                    {{--<a class="lost" href="{{url('')}}">忘记密码 ?</a>--}}
                    <input class="submit" type="button" value="登录" onclick="login()" name="submit">
                </p>
            </form>
            <script>
                function login(){
                    $("#loginerror").html('');
                    $.ajax({
                        url:'/login',
                        type:'post',
                        dataType:'json',
                        data:$("#login").serialize(),
                        success:function (data) {
                            if (data.status ==200){
                               window.location.href = "{{url('')}}";
                            }else{

                               $("#loginerror").append(data.msg)
                            }
                        }
                    })
                }
            </script>
        </div>

        <div class="part registerpart" id="sign-dowm">
        <form id="register"  novalidate="novalidate">

                <div id="login-active" class="switch"><i class="fa fa-toggle-off"></i>切换登录</div>
                <h3>注册<p class="status" id="registerror"></p></h3>
                <p>
                    {{csrf_field()}}
                    <label class="icon" for="user_name"><i class="fa fa-user"></i></label>
                    <input class="input-control" id="user_name" type="text" name="name" placeholder="输入用户名" required="" aria-required="true">
                </p>
                <p>
                    <label class="icon" for="user_email"><i class="fa fa-envelope"></i></label>
                    <input class="input-control" id="user_email" type="text" name="email" placeholder="输入常用邮箱" required="" aria-required="true">
                </p>
                <p>
                    <label class="icon" for="user_pass"><i class="fa fa-lock"></i></label>
                    <input class="input-control" id="user_pass" type="password" name="password" placeholder="密码最小长度为6" required="" aria-required="true">
                </p>
                <p>
                    <label class="icon" for="user_pass2"><i class="fa fa-retweet"></i></label>
                    <input class="input-control" type="password" id="user_pass2" name="user_pass2" placeholder="再次输入密码" required="" aria-required="true">
                </p>
                <input class="submit" type="button" value="注册" onclick="regist()" > <a class="close"><i class="fa fa-times"></i></a>
                    <script>
                        function regist() {
                            $("#registerror").html('')
                            $.ajax({
                                url:'/regist',
                                type:'post',
                                dataType:'json',
                                data:$("#register").serialize(),
                                success:function (data) {
                                    if (data.status ==200){
                                        window.location.href = "{{url('')}}";
                                    }else{
                                        $("#registerror").append(data.msg)
                                    }
                                }
                            })
                        }
                    </script>
                <input type="hidden" name="_wp_http_referer" value="/">
        </form>
        </div>
    </div>

    <div>
        <header class="dark-div">
            <div id="top-nav" class="topnav-dark layout-2">
                <div class="nav-blur"></div>
                <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                           <a class="logo" href="{{url('')}}"><img src="{{url('5dm/img/logo1510.png')}}" alt="logo"></a>
                        </div>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <div class="user_curent navbar-right">
                                <ul class="nav navbar-nav navbar-right hidden-xs">
                                    <li class="main-menu-item dropdown">
                                        <a class="account_cr" href="#">{{\Illuminate\Support\Facades\Auth::user()->name}}<i class="img-icon expired_member"></i>
                                            @if(empty(\Illuminate\Support\Facades\Auth::user()->avatar))
                                                <img src="/5dm/img/default_avatar.jpg" alt="" height="50" width="50" class="avatar">
                                            @else
                                                <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" alt="" height="50" width="50" class="avatar">
                                            @endif
                                        </a>
                                        <span class="addnew_1"><a href="{{url('')}}/{{\Illuminate\Support\Facades\Auth::user()->id}}/message" title="站内消息">+0</a></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('#')}}/{{\Illuminate\Support\Facades\Auth::user()->id}}">用户中心</a></li>
                                            <li><a href="{{url('#')}}">编辑资料</a></li>
                                            <li><a href="{{url('#')}}">会员信息</a></li>
                                            <li><a href="{{url('logout')}}">退出登录</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        @else
                        <div id="log" style="float:right;">
                            <ul class="nav navbar-nav navbar-right hidden-xs">
                                <div id="login-reg">
                                    <span data-sign="0" id="user-login" class="user-login"> 登录</span>
                                    <span data-sign="1" id="user-reg" class="user-reg">注册</span>
                                </div>
                            </ul>
                        </div>
                        @endif

                        <ul class="nav navbar-nav hidden-xs nav-search-box navbar-right">
                            <li class="main-menu-item">
                                <form class=" dark-form" action="{{url('search/')}}">
                                    <div class="input-group">
                                        <input type="text" name="" id="searchdata" class="form-control" placeholder="发现更♂大的世界" autocomplete="off">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default maincolor1 maincolor1hover" id="searchres" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                            <script>
                                                $("#searchres").click(function(){
                                                   var x = $(" #searchdata").val()
                                                    window.location.href="{{url('search')}}/"+x
                                                });
                                            </script>
                                        </span>
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav hidden-xs">
                            <li id="nav-menu-item-35843" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item"><a href="{{url('')}}" class="menu-link main-menu-link">首页 </a></li>

                            <li id="nav-menu-item-29915" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"><a href="{{url('comictag/meng')}}" class="menu-link main-menu-link">萌系 </a></li>
                            <li id="nav-menu-item-29868" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-taxonomy menu-item-object-category"><a href="{{url('comictag/gaoxiao')}}" class="menu-link main-menu-link">搞笑 </a></li>
                            <li id="nav-menu-item-29868" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-taxonomy menu-item-object-category"><a href="{{url('comictag/huiyuan')}}" class="menu-link main-menu-link">会员的世界 </a></li>
                            <li id="nav-menu-item-38131" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-taxonomy menu-item-object-category"><a href="{{url('page')}}" class="menu-link main-menu-link">动漫资讯 </a></li>
                            {{--<li id="nav-menu-item-29870" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-taxonomy menu-item-object-category"><a href="{{url('video/end')}}" class="menu-link main-menu-link">完结番组 </a></li>--}}
                            {{--<li id="nav-menu-item-29868" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-taxonomy menu-item-object-category"><a href="{{url('video/ova')}}" class="menu-link main-menu-link">剧场•ova </a></li>--}}
                            {{--<li id="nav-menu-item-38132" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children parent dropdown"><a href="{{url('timeline')}}" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown">新番时间表 </a>--}}
                                {{--<ul class="dropdown-menu menu-depth-1">--}}
                                    {{--<li id="nav-menu-item-41030" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a href="{{url('video/movie')}}" class="menu-link sub-menu-link">一月新番 </a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </div>
    <div id="header_bg" style="background-image: url({{$tdk->header_img_url}});">
        <div id="animate" class="animate" style="font-size: 100px;height: 100px;line-height: 230px;text-shadow: 1px 1px 0 #ff3f1a, -1px -1px 0 #00a7e0;color: #ffffff;text-align: center;">
            <span style="left: 408.95px; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);"></span></div>
        <a style=" position: absolute; bottom: 0; left: 0; z-index: 1; font-size: 13px; padding: 0 5px; background-color: rgba(0,0,0,0.37); color: #fff;">一次次的蜕化，只为变得更好</a>
    </div>
    <div id="slider"> </div>

    @yield('content')

    <footer class="dark-div hidden-md hidden-sm hidden-xs">
        <div id="bottom" style="background: #ffffff;padding: 0px 0;margin-bottom: 30px;">
            <div class="container">
                <div class="row hidden-xs"> </div>
            </div>
        </div>
        <div id="bottom-nav">
            <div class="container">
                <div class="row .">
                    <div class="copyright col-md-6">©2014-2018 hentai俱乐部 - hentaiclub.club</div>
                    <nav class="col-md-6 hidden-xs">
                        <ul class="bottom-menu list-inline pull-right">
                            <li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a target="_blank" href="{{url('aboutus.html')}}">联系我们</a></li>
                            <li id="menu-item-29356" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29356"><a target="_blank" href="{{url('duty.html')}}">资源免责声明</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <div class="wrap-overlay"></div>
    
</div>

<script>
    off_canvas_enable = 1;
</script>
<div class="main_nav_bottom hidden-lg">
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container" align="center">
            <ul class="nav nav-tabs nav-tabs-justified">
                <div class="row" align="center">
                    <div class="col-md-6 col-sm-6 col-xs-6" align="center"><li><a href="{{url('')}}"><img src="{{url('5dm/img/manhua.png')}}" alt=""></a></li></div>
                    {{--<div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="{{url('bangumi')}}"><img src="{{url('5dm/img/dongman.png')}}" alt=""></a></li></div>--}}
                    {{--<div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="{{url('video/movie')}}"><img src="{{url('5dm/img/movies.png')}}" alt=""></a></li></div>--}}
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <div class="col-md-6 col-sm-6 col-xs-6" align="center"><li><a href="{{url('u')}}/{{\Illuminate\Support\Facades\Auth::user()->id}}.html"><img src="{{url('5dm/img/me.png')}}" alt=""></a></li></div>
                    @else
                        <div class="col-md-6 col-sm-6 col-xs-6" align="center"><li><a href="{{url('login')}}"><img src="{{url('5dm/img/me.png')}}" alt=""></a></li></div>
                    @endif
                </div>
                <div class="row" align="center">
                    <div class="col-md-6 col-sm-6 col-xs-6" align="center"><li><a href="{{url('')}}">漫画</a></li></div>
                    {{--<div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="{{url('bangumi')}}/">动漫</a></li></div>--}}
                    {{--<div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="{{url('video/movie')}}/">电影</a></li></div>--}}
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <div class="col-md-6 col-sm-6 col-xs-6" align="center"><li><a href="{{url('u')}}/{{\Illuminate\Support\Facades\Auth::user()->id}}.html">我</a></li></div>
                    @else
                        <div class="col-md-6 col-sm-6 col-xs-6" align="center"><li><a href="{{url('login')}}">我</a></li></div>
                    @endif
                </div>
            </ul>
        </div>
    </nav>
    <style>
        #contentoutlink {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }
    </style>
    <div id="contentoutlink">
    @foreach(\Illuminate\Support\Facades\Cache::get($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) as $item)
       <a href="{{$item['url']}}">{{$item['name']}}</a>
    @endforeach
    </div>
</div>
<style>
    .nav-tabs
    {
        background: ghostwhite;
        text-align: center;
        height: 30px;
        line-height: 30px;
    }
</style>
<script type="text/javascript" src="{{url('5dm/js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{url('5dm/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('5dm/js/jquery.caroufredsel-6.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{url('5dm/js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{url('5dm/js/jquery.touchswipe.min.js')}}"></script>
<script type="text/javascript" src="{{url('5dm/js/jquery.hammer.js')}}"></script>
<script type="text/javascript" src="{{url('5dm/js/template.js')}}"></script>
<script type="text/javascript" src="{{url('5dm/js/jquery.colorbox-min.js')}}"></script>
<script type="text/javascript" src="{{url('5dm/js/jquery.tooltipster.js')}}"></script>
<script type="text/javascript" src="{{url('5dm/js/comment-reply.min.js')}}"></script>
<script type="text/javascript" src="{{url('5dm/js/mashmenu.js')}}"></script>
<script type="text/javascript" src="{{url('5dm/js/wp-embed.min.js')}}"></script>
<script type="text/javascript" src="{{url('5dm/js/js_composer_front.js')}}"></script>
<div id="cboxoverlay" style="display: none;"></div>
<div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
    <div id="cboxwrapper">
        <div>
            <div id="cboxtopleft" style="float: left;"></div>
            <div id="cboxtopcenter" style="float: left;"></div>
            <div id="cboxtopright" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxmiddleleft" style="float: left;"></div>
            <div id="cboxcontent" style="float: left;">
                <div id="cboxtitle" style="float: left;"></div>
                <div id="cboxcurrent" style="float: left;"></div>
                <button type="button" id="cboxprevious"></button>
                <button type="button" id="cboxnext"></button>
                <button id="cboxslideshow"></button>
                <div id="cboxloadingoverlay" style="float: left;"></div>
                <div id="cboxloadinggraphic" style="float: left;"></div>
            </div>
            <div id="cboxmiddleright" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxbottomleft" style="float: left;"></div>
            <div id="cboxbottomcenter" style="float: left;"></div>
            <div id="cboxbottomright" style="float: left;"></div>
        </div>
    </div>
    <div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?7947cb8d00af9a26d4ebe68d1ad30216";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        (function(){
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            }
            else {
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
    <script>


        $("#user-login").click(function(){
            $("#sign-go").addClass("#sign loginPart loginpart part sign");
        });


        $(function(){
            $("#register-active").click(function(){
                $("#sign-dowm").addClass("#sign part register registerPart registerpart");

            });
        });
        $(function(){
            $("#user-reg").click(function(){
                $("#sign-dowm").addClass("#sign part register registerPart registerpart");
            });
        });
        $(function(){
            $("#login-active").click(function(){
                $("#sign-go").addClass("#sign loginPart loginpart part sign");
            });
        });

        $(function(){
        var path = "{{ $_SERVER['REQUEST_URI']}}"
        if(path=="/login"){
            $("#user-login").trigger("click");
        }
        });

    </script>
</div>
</body>

</html>