@extends('blog.main')

@section('content')
            <div class="col-md-8 blog-main">
                @foreach($article as $v)
                    <?php $a = rand(0,1);?>
                    @for($i=0;$i<$a;$i++)
                        <p>&nbsp;</p>
                    @endfor
                {{--<div class="row">--}}
                    <div class="col-md-6 col-sm-6">
                        &nbsp;

                        <article class=" blog-teaser">
                            <header>
                                <img src="img/1.jpg" alt="">
                                <h3><a href="/blog/{{ $v->slug }}">{{ $v->title }}</a></h3>
                                <span class="meta">{{ $v->published_at->diffForHumans() }}</span>
                                <p>{{ str_limit($v->content) }}</p>
                                <hr>
                            </header>
                        </article>
                    </div>
                {{--</div>--}}
                @endforeach
                <div class="col-md-2 col-sm-2" style="visibility: hidden">
                    <article class=" blog-teaser">
                        <header>
                            <img src="img/1.jpg" alt="">
                        </header>

                    </article>
                </div>
                <div class="paging">
                    {!! $article->render() !!}
                </div>
            </div>
@endsection