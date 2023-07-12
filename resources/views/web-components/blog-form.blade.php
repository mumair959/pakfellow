<!--== Contact Page Content Start ==-->
<section id="page-content-wrap">
    <div class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-content-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Map Area Start -->
                                <div class="map-area-wrap">
                                   <!--  cbx-gmap start
                                    <div id="cbx-gmap">
                                        <div id="map_canvas" class="cbx-map map_canvas" data-lat="44.5403" data-lng="-78.5463" data-title="" data-content="<strong>6H Dilara Tower</strong><br /> <br />77 Bir Uttam C.R. Dutta Road <br /> Dhaka 1205 "></div>
                                    </div>
                                     cbx-gmap end -->
                                    <img src="{{asset('blog_img.jpg')}}" width="445" height="690"/>
                                </div>
                                <!-- Map Area End -->
                            </div>

                            <div class="col-lg-6 m-auto">
                                <div class="contact-form-wrap">
                                  <h3>create new blog</h3>
                                    <form id="blog-form" enctype='multipart/form-data'>
                                        @csrf
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="title">Title</label>
                                              <input type="text" name="title" required id="title" class="form-control">
                                            </div>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="description">Description</label>
                                          <textarea name="description" id="description" rows="8" cols="80" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group file-input">
                                            <input type="file" name="blog_img" id="blog_img" class="d-none">
                                            <label class="custom-file" for="blog_img"><i class="fa fa-upload"></i>Upload Blog Image</label>
                                        </div>

                                        <button class="btn btn-reg" id="createBlog">Create Blog</button>
                                        <div id="cbx-formalert"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Contact Page Content End ==-->