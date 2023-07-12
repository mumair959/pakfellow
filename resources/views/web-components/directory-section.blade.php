<!--== Directory Page Content Start ==-->
<section id="page-content-wrap">
    <div class="directory-page-content-warp section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="directory-text-wrap">
                        <!-- <h2>Now  we have <strong class="funfact-count">{{$total}}</strong> member </h2> -->
                        <div class="table-search-area">
                            <form action="{{route('directory')}}" method="get">
                                <input type="search" name="search" placeholder="Type Your Name">
                                <button class="btn btn-brand" type="submit">Search</button>
                            </form>
                        </div>

                        <div class="directory-table table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Profession</th>
                                        <th scope="col">Joining Date</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td><img src="{{asset('/profile_images/'.$user->profile_img)}}" alt="table">{{$user->name}}</td>
                                            <td>{{$user->profession}}</td>
                                            <td>{{\Carbon\Carbon::parse($user->created_at)->format('d-m-Y')}}</td>
                                            <td>{{$user->city}}</td>
                                            <td>{{$user->country}}</td>
                                        </tr>
                                    @endforeach

                                    <!-- <tr>
                                        <td><img src="http://placehold.it/500x500" alt="table">Angelina Jolie Voight</td>
                                        <td>Computer</td>
                                        <td>2014</td>
                                        <td>Dhaka</td>
                                        <td>Student</td>
                                    </tr> -->

                                </tbody>
                            </table>
                        </div>
                        <p class="show-memeber text-right">
                            Show <span>{{$per_page}}</span> of <span>{{$total}} Member</span>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-wrap text-center">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--== Directory Page Content End ==-->