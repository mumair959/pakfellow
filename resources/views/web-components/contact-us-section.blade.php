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
                                        <div id="map_canvas" class="cbx-map map_canvas" data-lat="44.5403" data-lng="-78.5463" data-title="" data-content="<strong>71, Shelton Street</strong><br /> <br />Covent Garden, London<br /> United Kingdom "></div>
                                    </div>
                                     cbx-gmap end -->
                                    <iframe src="https://snazzymaps.com/embed/65600"></iframe>
                                </div>
                                <!-- Map Area End -->
                            </div>

                            <div class="col-lg-6 m-auto">
                                <div class="contact-form-wrap">
                                  <h3>send message</h3>
                                    <form id="contact-form">
                                        @csrf
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label for="cbxname">Name</label>
                                              <input type="text" name="cbxname" required id="cbxname" class="form-control">
                                            </div>
                                          </div>

                                          <div class="col">
                                            <div class="form-group">
                                              <label for="cbxemail">Email</label>
                                              <input type="email" name="cbxemail" required id="cbxemail" class="form-control">
                                            </div>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cbxsubject">Subject</label>
                                            <select name="cbxsubject" id="cbxsubject" class="form-control">
                                                <option value="General Enquiry & Feedback">General Enquiry & Feedback</option>   
                                                <option value="Community Support">Community Support</option>
                                                <option value="Start a New Chapter">Start a New Chapter</option>
                                                <option value="Arrange an Event / Meetup">Arrange an Event / Meetup</option>
                                                <option value="Onilne Courses & Classes">Onilne Courses & Classes</option>
                                                
                                            </select>
                                        </div>&nbsp

                                        <div class="form-group">
                                          <label for="cbxmessage">Message</label>
                                          <textarea name="cbxmessage" id="cbxmessage" rows="10" cols="80" class="form-control"></textarea>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sendme" name="sendme">
                                            <label class="custom-control-label" for="sendme">Send Me CC</label>
                                        </div>

                                        <button class="btn btn-reg" id="contactMe">Send</button>
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