<!--== Blog Area Start ==-->
<section id="blog-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Recent Blog</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Blog Content Wrapper ==-->
        <div class="row">

            @foreach($blogs as $blog)
            <!--== Single Blog Post start ==-->
            <div class="col-lg-4 col-md-6">
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
        <!--== Blog Content Wrapper ==-->
    </div>
</section>
<!--== Blog Area EndBlog ==-->