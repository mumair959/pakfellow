<!--== Blog Page Content Start ==-->
<div id="page-content-wrap">
        <div class="blog-page-content-wrap section-padding">
            <div class="container">
                <div class="row">
                    <!-- Blog content Area Start -->
                    <div class="col-lg-12">
                        <div class="blog-page-contant-start">
                            <div class="row">

                                @foreach($blogs as $blog)
                                <!--== Single Blog Post start ==-->
                                <div class="col-lg-4 col-md-4">
                                    <article class="single-blog-post">
                                        <figure class="blog-thumb">
                                            <div class="blog-thumbnail">
                                                <img src="{{asset('/blog_images/'.$blog->image)}}" alt="Blog" class="img-fluid">
                                            </div>
                                            <figcaption class="blog-meta clearfix">
                                                <a href="single-blog.html" class="author">
                                                    <div class="author-pic">
                                                        <img src="{{asset('/profile_images/'.$blog->user->profile_img)}}" alt="Author">
                                                    </div>
                                                    <div class="author-info">
                                                        <h5>{{$blog->user->name}}</h5>
                                                        <p>{{$blog->created_at->diffForHumans()}}</p>
                                                    </div>
                                                </a>
                                                <div class="like-comm pull-right">
                                                    <a href="#"><i class="fa fa-comment-o"></i>{{$blog->comments_count}}</a>
                                                    <a href="#"><i class="fa fa-heart-o"></i>{{$blog->likes_count}}</a>
                                                </div>
                                            </figcaption>
                                        </figure>

                                        <div class="blog-content">
                                            <h3><a href="javascript:void(0)">{{$blog->title}}</a></h3>
                                            <p>{{(strlen($blog->description) > 150) ? substr($blog->description, 0, 150).'...' : $blog->description}}</p>
                                            <a href="{{route('blog-details',['id' => $blog->id])}}" class="btn btn-brand">More</a>
                                        </div>
                                    </article>
                                </div>
                                <!--== Single Blog Post End ==-->
                                @endforeach
                            </div>


                        </div>
                    </div>
                    <!-- Blog content Area End -->

                </div>
            </div>
        </div>
    </div>
    <!--== Blog Page Content End ==-->