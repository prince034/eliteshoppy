<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                    <form action="/login" method="post">
                        {{csrf_field()}}
                        <div class="styled-input agile-styled-input-top">
                            <input type="email" name="email" required="">
                            <label>Email</label>
                            <span></span>
                            @foreach ($errors->login->get('email') as $message)
                                <p style="color: red">*{{$message}}</p>
                            @endforeach
                            @foreach ($errors->get('email') as $message)
                                <p style="color: red">*{{$message}}</p>
                            @endforeach
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password" required="">
                            <label>Password</label>
                            <span></span>
                        </div>
                        <span>
								<input  type="checkbox" name="rememberMe" class="checkbox">
								Keep me signed in
							      </span><br><br>
                        <input type="submit" value="Sign In">
                    </form>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="images/log_pic.jpg" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal1 -->
<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
                    <form action="/register?register=1" method="post">
                        {{csrf_field()}}
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="name" required="">
                            <label>Name</label>
                            <span></span>
                            @foreach ($errors->register->get('name') as $message)
                                <p style="color: red">*{{$message}}</p>
                            @endforeach
                        </div>
                        <div class="styled-input">
                            <input type="email" name="register_email" required="">
                            <label>Email</label>
                            <span></span>
                            @foreach ($errors->register->get('email') as $message)
                                <p style="color: red">*{{$message}}</p>
                            @endforeach
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password" required="">
                            <label>Password</label>
                            <span></span>
                            @foreach ($errors->register->get('password') as $message)
                                <p style="color: red">*{{$message}}</p>
                            @endforeach
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password_confirmation" required="">
                            <label>Confirm Password</label>
                            <span></span>
                        </div>
                        <input type="submit" value="Sign Up" name="submit">
                    </form>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <p><a href="#">By clicking register, I agree to your terms</a></p>

                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="images/log_pic.jpg" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal2 -->

<script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
@if($errors->login->any() || count($errors->get('email'))>0)
    <script>
        $(function(){
            $('#myModal').modal('show');
        });
    </script>
@endif
@if($errors->register->any())
    <script>
        $(function(){
            $('#myModal2').modal('show');
        });
    </script>
@endif