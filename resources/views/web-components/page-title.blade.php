<!--== Page Title Area Start ==-->
<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">{{$pageTitle}}</h1>
                    <p>{{$pageSubTitle}}</p>
                    @if(Route::currentRouteName() == 'about')
                        <a href="{{route('register-user')}}" class="btn btn-brand smooth-scroll">JOIN US TODAY</a>
                    @elseif(Route::currentRouteName() == 'events')
                        <a href="{{route('contact-us')}}" class="btn btn-brand smooth-scroll">PLAN AN EVENT</a>
                    @elseif(Route::currentRouteName() == 'centers')
                        <a href="{{route('contact-us')}}" class="btn btn-brand smooth-scroll">START A NEW CHAPTER</a>
                    @elseif(Route::currentRouteName() == 'directory')
                        <a href="{{route('register-user')}}" class="btn btn-brand smooth-scroll">BECOME OUR FELLOW</a>
                    @elseif(Route::currentRouteName() == 'blog-list')
                        <a href="{{route('contact-us')}}" class="btn btn-brand smooth-scroll">START YOUR BLOG</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->