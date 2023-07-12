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
                                        <th width="10%">Comment</th>         
                                        <th width="25%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($comments as $comment)
                                        <tr>
                                            <td>{{$comment->comment}}</td>
                                            <td>
                                                <a href="{{route('admin-approve',['type' => 'comment' , 'comment_id' => $comment->id])}}" class="btn btn-success">Approve</a>
                                                <a href="{{route('admin-delete',['type' => 'comment' , 'comment_id' => $comment->id])}}" class="btn btn-danger">Delete</a>
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