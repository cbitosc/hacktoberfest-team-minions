<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <form class="tab-pane fade in show active" id="panel7" role="tabpanel" action="loginverify.php">

                        <!--Body-->
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="modalLRInput10" name="name" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput10">Your Name</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput11" name="password"class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                            </div>

                            <div class="md-form form-sm mb-5">

                                <div class="form-check">
                                  <!-- <i class="fa fa-user prefix"></i> -->
                                  <input type="radio" class="form-check-input" id="materialUnchecked" value="student" name="type" checked>
                                  <label class="form-check-label" for="materialUnchecked" >STUDENT  </label>
                                  <input type="radio" class="form-check-input" id="materialChecked" name="type" value="mnc">
                                  
                                  <label class="form-check-label" for="materialChecked">MNC</label>
                              </div>

                          </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-primary">Log in <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Forgot <a href="forgotpassword.php" class="blue-text">Password?</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-primary waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </form>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">

                        <!--Body-->
                        <form class="modal-body" action='signupverify.php'>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="modalLRInput12" name="name" class="form-control form-control-sm validate">

                                <label data-error="wrong" data-success="right" for="modalLRInput12">Your Name</label>
                            </div>


                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="modalLRInput121" name="email"class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput121">Your email</label>
                            </div>
                            
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput13" name="password"class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                            </div>

                            <div class="md-form form-sm mb-5">

<div class="form-check">
  <!-- <i class="fa fa-user prefix"></i> -->
  <input type="radio" class="form-check-input" id="materialUnchecked1" value="student" name="type1" checked>
  <label class="form-check-label" for="materialUnchecked1" >STUDENT  </label>
  <input type="radio" class="form-check-input" id="materialChecked1" name="type1" value="mnc">
  
  <label class="form-check-label" for="materialChecked1">MNC</label>
</div>

                          </div>

                        <!-- </div> -->

                            <div class="text-center form-sm mt-2">

                                <button class="btn btn-primary">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                            </div>

                        </div>
                        <!--Footer-->
                        
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
