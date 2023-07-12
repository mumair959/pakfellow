<!--== Directory Page Content Start ==-->
<section id="page-content-wrap">
    <div class="directory-page-content-warp section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="directory-text-wrap">
                    
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            <strong>{{ Session::get('message') }}</strong>
                        </div>
                    @endif

                        <div class="directory-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="10%">Title</th>
                                        <th width="40%">Description</th>
                                        <th width="25%">Image</th>
                                        <th width="25%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{$blog->title}}</td>
                                            <td>{{$blog->description}}</td>
                                            <td><img src="{{asset('/blog_images/'.$blog->image)}}" style="width:200px !important; height:200px !important" alt="imgs"></td>
                                            <td>
                                                <a href="{{route('admin-approve',['type' => 'blog' , 'blog_id' => $blog->id])}}" class="btn btn-success">Approve</a>
                                                <a href="{{route('admin-delete',['type' => 'blog' , 'blog_id' => $blog->id])}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--== Directory Page Content End ==-->