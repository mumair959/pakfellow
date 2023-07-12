<!--== Register Page Content Start ==-->
<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-page-inner">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content">
                                <div class="row">
                                    <!-- Signin Area Content Start -->
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="signin-area-wrap">
                                                    <h4>Already a Member?</h4>
                                                    <div class="sign-form">
                                                        <form id="login-form">
                                                            @csrf
                                                            <input type="email" id="login_email" name="email" placeholder="Enter Email">
                                                            <input type="password" id="login_password" name="password" placeholder="Enter Password">
                                                            <button type="submit" class="btn btn-reg" id="loginMe">Login</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Signin Area Content End -->

                                    <!-- Regsiter Form Area Start -->
                                    <div class="col-lg-7 col-md-6 ml-auto">
                                        <div class="register-form-wrap">
                                            <h3>registration Form</h3>
                                            <div class="register-form">
                                                <form id="register-form" enctype='multipart/form-data'>
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" id="email" name="email">
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="password" class="form-control" id="password" name="password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="name" name="name">
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="profession">Profession</label>
                                                                <input type="text" class="form-control" id="profession" name="student_id">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="city">City</label>
                                                                <input type="text" class="form-control" id="city" name="passing_year">
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="country">Country</label>
                                                                <input type="text" class="form-control" id="country" name="department">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="location">Are you an overseas Pakistani?</label>
                                                                <select name="location" id="location" class="form-control">
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group file-input">
                                                                <input type="file" name="profile_img" id="profile_img" class="d-none">
                                                                <label class="custom-file" for="profile_img"><i class="fa fa-upload"></i>Upload Your Photo</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="gender form-group">
                                                        <label class="g-name d-block">Gender</label>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="gender_male" name="gender" value="M" class="custom-control-input">
                                                            <label class="custom-control-label" for="gender_male">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="gender_female" name="gender" value="F" class="custom-control-input">
                                                            <label class="custom-control-label" for="gender_female">Female</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-reg" id="signMe">Registration</button>
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                                        <label style="margin-left: 10px" class="custom-control-label" for="customCheck1"> I have read and agree to the <a href="{{route('privacy')}}">Pakfellow.com</a> Privacy Policy and Terms of Service</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Regsiter Form Area End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Register Page Content End ==-->