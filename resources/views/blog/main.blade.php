<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('blog.title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome/css/font-awesome.min.css')}}">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" id="theme-styles">

    <!--[if lt IE 9]>
    <script src="{{URL::asset('js/vendor/google/html5-3.6-respond-1.1.0.min.js')}}"></script>
    <![endif]-->
    <style>
        .f-primary-l {
            font-weight: 300;
            color: #e26228;
        }
        .b-categories-filter ul {
            padding: 0;
            margin: 0;
            list-style-type: none; }
        .b-categories-filter li {
            border-bottom: 1px solid #ececec;
            color: #515151;
            padding: 8px 0 7px; }
        .b-categories-filter i {
            margin-right: 10px;
            font-size: 0.92308em;
            line-height: 1.2; }
        .b-categories-filter a:hover ~ .f-categories-filter_count {
            color: #fff; }
        .b-categories-filter a:hover ~ .b-categories-filter_count {
            background-color: #e26228; }

        .b-categories-filter_count {
            float: right;
            background-color: #dfdfdf;
            padding: 2px 4px;
            border-radius: 2px;
            min-width: 27px;
            margin-top: -2px; }

        .f-categories-filter_count {
            font-size: 0.84615em;
            line-height: 1.2;
            text-align: center; }

        .f-categories-filter_name {
            font-size: 1em;
            line-height: 1.2; }


    </style>

</head>
<body>
<header>
    <div class="widewrapper masthead">
        <div class="container">
            <h1 class="f-primary-l c-default">My Blog </h1>

            <div id="mobile-nav-toggle" class="pull-right">
                <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <nav class="pull-right clean-nav">
                <div class="collapse navbar-collapse">
                    <ul class="nav nav-pills navbar-nav">

                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="contact.html">发表博文</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>

    <div class="widewrapper subheader">
        <div class="container">
            <div class="clean-breadcrumb">
                <a href="#">Blog</a>
            </div>

            <div class="clean-searchbox">
                <form action="#" method="get" accept-charset="utf-8">
                    <input class="searchfield" id="searchbox" type="text" placeholder="Search">
                    <button class="searchbutton" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="widewrapper main">
    <div class="container">
        <div class="row">
            @yield('content')

            <aside class="col-md-4 blog-aside">
                <div class="b-categories-filter">
                    <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special">博文分类</h4>
                    <ul>

                        @foreach($side_cate as $v)
                            <li>
                                <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i>{{ $v->_cate_name }}</a>
                                <span class="b-categories-filter_count f-categories-filter_count">{{  count($v)  }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="aside-widget">
                    <header>
                        <h3>热门博文</h3>
                    </header>
                    <div class="body">
                        <ul class="clean-list">
                            @foreach($hot_article as $a)
                                <li><a href="/blog/{{ $a->slug }}">{{ $a->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="aside-widget">
                    <header>
                        <h3>Tags</h3>
                    </header>
                    <div class="body clearfix">
                        <ul class="tags">
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                            <li><a href="#">COMPONENTS</a></li>
                            <li><a href="#">TEMPLATE</a></li>
                            <li><a href="#">PLUGIN</a></li>
                            <li><a href="#">BOOTSTRAP</a></li>
                            <li><a href="#">TUTORIAL</a></li>
                            <li><a href="#">UI/UX</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

<footer>
    <div class="widewrapper footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-widget">
                    <h3> <i class="fa fa-user"></i>About</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi laboriosam nostrum consequatur fugiat at, labore praesentium modi, quasi dolorum debitis reiciendis facilis, dolor saepe sint nemo, earum molestias quas.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, error aspernatur assumenda quae eveniet.</p>
                </div>

                <div class="col-md-4 footer-widget">
                    <h3> <i class="fa fa-pencil"></i> Recent Post</h3>
                    <ul class="clean-list">
                        <li><a href="">Clean - Responsive HTML5 Template</a></li>
                        <li><a href="">Responsive Pricing Table</a></li>
                        <li><a href="">Yellow HTML5 Template</a></li>
                    </ul>
                </div>

                <div class="col-md-4 footer-widget">
                    <h3> <i class="fa fa-envelope"></i>Contact Me</h3>

                    <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil fugiat, cupiditate veritatis excepturi tempore explicabo.</p>
                    <div class="footer-widget-icon">
                        <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="widewrapper copyright">
        Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
    </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="{{URL::asset('js/layer/layer.js')}}"></script>
<script>
    $(document).ready(function(){
        $("#unlike").mousedown(function(){
            $(this).attr('class',"fa fa-heart").text('我知道你喜欢');
        });

        $("#unlike").click(function(){
            layer.msg('谢谢大佬喜欢~');
        });

        $("#like").click(function(){
            $(this).attr('class',"fa fa-heart");
            layer.msg('谢谢大佬喜欢~');
        });
    });
</script>
</body>
</html>