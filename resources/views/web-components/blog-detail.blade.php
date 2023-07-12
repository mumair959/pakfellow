<!--== Blog Page Content Start ==-->
<div id="page-content-wrap">
    <div class="blog-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <!-- Blog content Area Start -->
                <div class="col-lg-12">
                    <article class="single-blog-content-wrap">
                        <header class="article-head">
                            <div class="single-blog-thumb">
                                <img src="{{asset('blog_images/'.$blog->image)}}" width="700" height="353" class="img-fluid" alt="Blog">
                            </div>
                            <div class="single-blog-meta">
                                <h2>{{$blog->title}}</h2>
                                <div class="posting-info">
                                    <a href="#">{{$blog->created_at->diffForHumans()}}</a> &#x2022; Posted by: <a href="javascript:void(0)">{{$blog->user->name}}</a>
                                </div>
                            </div>
                        </header>
                        <section class="blog-details">
                            <p>{{$blog->description}}</p>
                        </section>

                        <hr>
                        @include('web-components.comments')
                        <hr>

                        <footer class="post-share">
                            <div class="row no-gutters ">
                                <div class="col-8">
                                    <div class="shareonsocial">
                                        <span>Share:</span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-vimeo"></i></a>
                                    </div>
                                </div>

                                @if(Auth::check())
                                <div class="col-4 text-right">
                                    <div class="post-like-comm">
                                        <a href="javascript::void(0)" id="likeOrNot"><i class="fa fa-thumbs-o-up"></i><span>{{$blog->likes_count}}</span></a>
                                        <a href="javascript::void(0)"  data-toggle="modal" data-target="#commentmodal"><i class="fa fa-comment-o"></i>{{$blog->comments_count}}</a>
                                    </div>
                                </div>
                                @else
                                <div class="col-4 text-right">
                                    <div class="post-like-comm">
                                        <a href="javascript::void(0)" class="notLoggedIn"><i class="fa fa-thumbs-o-up"></i><span>{{$blog->likes_count}}</span></a>
                                        <a href="javascript::void(0)" class="notLoggedIn"><i class="fa fa-comment-o"></i>{{$blog->comments_count}}</a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </footer>
                    </article>
                </div>
                <!-- Blog content Area End -->

            </div>
        </div>
    </div>
</div>
<!--== Blog Page Content End ==-->