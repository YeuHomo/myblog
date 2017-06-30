@extends('blog.main')

@section('content')
            <div class="col-md-8 blog-main">
                <article class="blog-post">
                    <header>

                        <div class="lead-image">
                            <img src="{{URL::asset('img/single-post.jpg')}}" alt="" class="img-responsive">

                        </div>
                    </header>
                    <div class="body">
                        <h1>{{ $article->title }}</h1>
                        <div class="meta">
                            <i class="fa fa-user"></i> 洪悦
                            <i class="fa fa-calendar"></i>23 Agustus 2017
                            <i class="fa fa-comments"></i>
                            <span class="data"><a href="#comments">3 评论</a></span>
                            <i class="fa fa-eye"></i> {{ $article->view }}人曾阅读
                            <i class="fa fa-heart"></i> {{ $article->like }}赞
                        </div>
                        <p>{{ $article->content }}</p>
                    </div>
                </article>
                <div class="meta">
                    <span id="like"><i class="fa fa-heart-o"></i>喜欢</span>
                    <span id="unlike"><i class="fa fa-thumbs-o-down"></i>不喜欢</span>

                </div>

                <aside class="social-icons clearfix">
                    <h3>Share on </h3>
                    <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google"></i></a>
                </aside>

                <aside class="comments" id="comments">
                    <hr>

                    <h2><i class="fa fa-comments"></i> 6 Comments</h2>

                    <article class="comment">
                        <header class="clearfix">
                            <img src="{{URL::asset('img/avatar.png')}}" alt="A Smart Guy" class="avatar">
                            <div class="meta">
                                <h3><a href="#">John Doe</a></h3>
                                <span class="date">
                                        24 August 2017
                                    </span>
                                <span class="separator">
                                        -
                                    </span>

                                <a href="#create-comment" class="reply-link">Reply</a>
                            </div>
                        </header>
                        <div class="body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sit perspiciatis debitis, vel ducimus praesentium expedita, assumenda ipsum cum corrupti dolorum modi. Rem ipsam similique sapiente obcaecati tenetur beatae voluptatibus.
                        </div>
                    </article>

                    <article class="comment reply">
                        <header class="clearfix">
                            <img src="{{URL::asset('img/avatar.png')}}" alt="A Smart Guy" class="avatar">
                            <div class="meta">
                                <h3><a href="#">John Doe</a></h3>
                                <span class="date">
                                        24 August 2017
                                    </span>
                                <span class="separator">
                                        -
                                    </span>

                                <a href="#create-comment" class="reply-link">Reply</a>
                            </div>
                        </header>
                        <div class="body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sit perspiciatis debitis, vel ducimus praesentium expedita, assumenda ipsum cum corrupti dolorum modi. Rem ipsam similique sapiente obcaecati tenetur beatae voluptatibus.
                        </div>
                    </article>

                    <article class="comment ">
                        <header class="clearfix">
                            <img src="{{URL::asset('img/avatar.png')}}" alt="A Smart Guy" class="avatar">
                            <div class="meta">
                                <h3><a href="#">John Doe</a></h3>
                                <span class="date">
                                        24 August 2017
                                    </span>
                                <span class="separator">
                                        -
                                    </span>

                                <a href="#create-comment" class="reply-link">Reply</a>
                            </div>
                        </header>
                        <div class="body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sit perspiciatis debitis, vel ducimus praesentium expedita, assumenda ipsum cum corrupti dolorum modi. Rem ipsam similique sapiente obcaecati tenetur beatae voluptatibus.
                        </div>
                    </article>

                    <article class="comment">
                        <header class="clearfix">
                            <img src="{{URL::asset('img/avatar.png')}}" alt="A Smart Guy" class="avatar">
                            <div class="meta">
                                <h3><a href="#">John Doe</a></h3>
                                <span class="date">
                                        24 August 2017
                                    </span>
                                <span class="separator">
                                        -
                                    </span>

                                <a href="#create-comment" class="reply-link">Reply</a>
                            </div>
                        </header>
                        <div class="body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sit perspiciatis debitis, vel ducimus praesentium expedita, assumenda ipsum cum corrupti dolorum modi. Rem ipsam similique sapiente obcaecati tenetur beatae voluptatibus.
                        </div>
                    </article>
                </aside>

                <aside class="create-comment" id="create-comment">
                    <hr>

                    <h2><i class="fa fa-pencil"></i> Add Comment</h2>

                    <form action="#" method="get" accept-charset="utf-8">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" id="comment-name" placeholder="Your Name" class="form-control input-lg">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="comment-email" placeholder="Email" class="form-control input-lg">
                            </div>
                        </div>

                        <input type="url" name="name" id="comment-url" placeholder="Website" class="form-control input-lg">

                        <textarea rows="10" name="message" id="comment-body" placeholder="Your Message" class="form-control input-lg"></textarea>

                        <div class="buttons clearfix">
                            <button type="submit" class="btn btn-xlarge btn-clean-one">Submit</button>
                        </div>
                    </form>
                </aside>
            </div>
   @endsection