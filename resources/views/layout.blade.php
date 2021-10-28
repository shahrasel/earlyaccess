<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('custom_meta')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ asset('fonts/style.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css?v='.time()) }}">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">

    <style>
        ::placeholder {
            color: #cecece;
            opacity: 1; /* Firefox */
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #cecece;
        }

        ::-ms-input-placeholder { /* Microsoft Edge */
            color: #cecece;
        }
    </style>
</head>

<body>

<!-- ################### MOBIILE MENU START
###################  -->

<!--<a href="#" class="bentory-user-sign-mobile">
    <img src="img/My_Profile_icon.svg" style="width: 35px; height: 35px;" alt="">
</a>-->

<a href="#" id="mobule_hamburger_btn">
    <button class="hamburger animate   collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"><span></span></button>
</a>
<!-- ###################
################### MOBIILE MENU END  -->

<!--
    #######################################################
    USER SINGING/SIGNUP MODAL START
-->
<div class="bentory-user-singing-panel">
    <div class="bentory-singing-roundbox">
        <a href="#" class="bentory-btn-sign-cross"><img src="{{ asset('img/bentory_btn_cross.png') }}" alt=""></a>

        <ul class="bentory-signing-menus">
            <li><a href="#" id="bentory-signin" class="bentory-tab-selected">Sign In</a></li>
            <li><a href="#" id="bentory-signout">Sign Up</a></li>
        </ul>

        <div class="be-signing">
            <h4 class="be-singing-title">Welcome Back!</h4>
            <p>To access your account, please fillout the following.</p>

            <form action="" method="">

                <div class="be-singin-row">
                    <label for="">Email</label>
                    <input type="text" class="be-singing-input">
                </div>

                <div class="be-singin-row">
                    <label for="">Password</label>
                    <input type="text"  class="be-singing-input">
                </div>

                <p class="bentory-forget-pass"><a href="#">Forgot Password</a></p>

                <div class="be-singin-row f-align">
                    <input type="submit" class="bentory-singin-btn" value="Sign In">
                </div>

            </form>


            <div class="bentory-forgot-pass">
                <h4 class="be-singing-title">Reset Password</h4>
                <p>Reset Password</p>
                <div class="be-singin-row">
                    <label for="">Email</label>
                    <input type="text" value="Email"  class="be-singing-input">
                </div>
                <div class="be-singin-row f-align">
                    <input type="submit" class="bentory-singin-btn color-right-yellow" value="Reset">
                </div>
            </div>




        </div>

        <div class="be-signUp">

            <form action="" method="">

                <h4 class="be-singing-title">Welcome!</h4>
                <p>Sign Up and start saving communities, new homes
                    and lots! Please fill out the following:</p>

                <div class="be-singin-row">
                    <label for="">First Name <span class="eb-redtsar">*</span></label>
                    <input type="text" required class="be-singing-input">
                </div>

                <div class="be-singin-row">
                    <label for="">Last Name <span class="eb-redtsar">*</span></label>
                    <input type="text" required class="be-singing-input">
                </div>

                <div class="be-singin-row">
                    <label for="">Email <span class="eb-redtsar">*</span></label>
                    <input type="text" required class="be-singing-input">
                </div>

                <div class="be-singin-row">
                    <label for="">Cell <span class="eb-redtsar">*</span></label>
                    <input type="text" required class="be-singing-input">
                </div>

                <div class="be-singin-row">
                    <label for="">Password <span class="eb-redtsar">*</span></label>
                    <input type="password" required class="be-singing-input">
                </div>
                <div class="ebtory-required pb-23">Required Fields <span class="eb-redtsar">*</span></div>

                <div class="be-singin-row check-parent">
                    <label class="container">I agree to the Terms of Use & Privacy Policy
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>

                </div>




                <div class="be-singin-row f-align">
                    <input type="submit" class="bentory-singin-btn" value="Next">
                </div>



                <!-- THREE QUESTIN FORM START
               ################################### -->
                <div class="bentory-three-question-form">
                    <h4 class="be-singing-title">Almost Done!</h4>
                    <p>To help us better understand your current moving
                        status, please answer the following 3 simple
                        questions:</p>
                    <form action="" method="">

                        <div class="be-singin-row">
                            <label for="">Do you have a Realtor?</label>
                            <div class="bentory-custom-select--box">
                                <select name="" id="">
                                    <option value="">--Select--</option>
                                    <option value="">--Select--</option>
                                    <option value="">--Select--</option>
                                </select>
                            </div>
                        </div>

                        <div class="be-singin-row">
                            <label for="">Will you need a Home Loan?</label>
                            <div class="bentory-custom-select--box">
                                <select name="" id="">
                                    <option value="">--Select--</option>
                                    <option value="">--Select--</option>
                                    <option value="">--Select--</option>
                                </select>
                            </div>
                        </div>

                        <div class="be-singin-row">
                            <label for="">How soon would you like to move?</label>
                            <div class="bentory-custom-select--box">
                                <select name="" id="">
                                    <option value="">--Select--</option>
                                    <option value="">--Select--</option>
                                    <option value="">--Select--</option>
                                </select>
                            </div>
                        </div>

                        <div class="be-singin-row f-align">
                            <input type="submit" class="bentory-singin-btn color-right-yellow" value="Sign In">
                            <input type="submit" class="bentory-singin-btn" value="Sign In">
                        </div>


                    </form>
                </div>
                <!-- ###################################
                        THREE QUESTIN FORM END -->



        </div>
        <!-- end sign up div  -->

        </form>
    </div>
</div>
<!--
    #######################################################
    USER SINGING/SIGNUP MODAL END
-->




<header>

    <div class="bntory-wrapper" style="overflow: visible;">


        <div class="bentory-main-menu--mobile" id="bentory-main-menu--mobile">


            <nav>
                <ul>
                    <li class="bentory-menu-selected"><a href="#">Get Early Access</a></li>
                </ul>
            </nav>

        </div>




        <div class="container-fluid" style="position: relative">

            <div class="row">
                <div class="col-xl-9 col-md-8 col-sm-6 col-6">
                    <div class="bentory-header-left pt-23 pb-23">
                        <div class="bentory-logo">
                            <h1>
                                <a href="#"><img src="{{ asset('img/bentory_logo.svg') }}" alt="Built Entory"></a>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="mob-reduce col-xl-3 col-md-4 col-sm-6 col-6 pt-25 p-r">
                    <div class="bentory-header-searchBtn">
                        <a href="">Pre-Register Now</a>
                    </div>

                </div>
            </div>

        </div>



    </div>

</header>



@yield('content')


<footer class="bentory-common-animaiton">

    <div class="bentory-footer-top bentory-common-animaiton">
        <div class="bentory-footer-top__inner">
            <div class="bntory-wrapper pt-90 pb-150">
                <ul class="bentory-utilities-menus mt-30">

                    <li><a href="#">Realtor Terms of Use</a></li>
                    <li><a href="#">Realtor Privacy Policy</a></li>
                    <li><a href="https://buildentory.com/admin">Agent Login</a></li>
                </ul>
                <div class="bentory-disclaim-box mt-30">
                    <p>Disclaimer: Buildentory.com, Buildentory iOS & Android App promotes licensed Realtors, Mortgage Loan Officers and local/national Builders. We do not assume any liability for inaccuracies. We ask that you independently verify community, new home, lot, land acreage and/or rental data via listing agencies and authorized builder sales representatives.</p>
                </div>
                <ul class="bentory-social-menus mt-30">
                    <li><a href="https://www.facebook.com/Buildentory/?ref=py_c&__xts__=68" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://youtu.be/f_Kov8QxYnM" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                    <li><a href="https://apps.apple.com/us/app/buildentory-real-estate/id1281722341" target="_blank"><i class="fab fa-apple"></i></a></li>
                    <li><a href="#"><img src="{{ asset('img/icon_android.png') }}" alt=""></a></li>

                </ul>
            </div>
        </div>
    </div>

    <div class="bentory-footer-bottom pt-35 pb-35">
        <div class="bntory-wrapper">
            <p class="bentory-legal">Copyright &copy; 2021  Buildentory.com. All rights reserved. Buildentory is a trademark of Eggcelerator, LLC .<br>
                All other makers are either trademarks or registered trademarks of their respective owners.</p>
        </div>


    </div>



</footer>


<!-- JS here -->


<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script>
    $( function() {
        $( "#license_renewal" ).datepicker({
            changeMonth: true,
            changeYear: true
        });
    } );

    $("#text_1").keyup(function(event) {
        if (event.keyCode != 8) {
            $("#text_2").focus();
            checkAgentCodeAvailibility();
        }
    });

    $("#text_2").keyup(function(event) {
        if (event.keyCode != 8) {
            $("#text_3").focus();
            checkAgentCodeAvailibility();
        }
    });

    $("#text_3").keyup(function(event) {
        if (event.keyCode != 8) {
            $("#text_4").focus();
            checkAgentCodeAvailibility();
        }
    });

    $("#text_4").keyup(function(event) {
        if (event.keyCode != 8) {
            $("#text_5").focus();
            checkAgentCodeAvailibility();
        }
    });

    $("#text_5").keyup(function(event) {

        if (event.keyCode != 8) {
            $("#text_6").focus();
            checkAgentCodeAvailibility();
        }
    });

    $("#text_6").keyup(function(event) {

        if (event.keyCode != 8) {
            $("#text_7").focus();
            checkAgentCodeAvailibility();
        }
    });

    $("#text_7").keyup(function(event) {
        if (event.keyCode != 8) {
            $("#text_1").focus();
            checkAgentCodeAvailibility();
        }
    });

    function checkAgentCodeAvailibility() {
        $("#texth_1").val($("#text_1").val().toUpperCase());
        $("#texth_2").val($("#text_2").val().toUpperCase());
        $("#texth_3").val($("#text_3").val().toUpperCase());
        $("#texth_4").val($("#text_4").val().toUpperCase());
        $("#texth_5").val($("#text_5").val().toUpperCase());
        $("#texth_6").val($("#text_6").val().toUpperCase());
        $("#texth_7").val($("#text_7").val().toUpperCase());
        $("#loading_div").css('display','block');
        $("#loading_status").css('display','block');
        if($("#text_1").val().length>0 && $("#text_2").val().length>0 && $("#text_3").val().length>0 && $("#text_4").val().length>0 && $("#text_5").val().length>0 && $("#text_6").val().length>0 && $("#text_6").val().length>0 && $("#text_7").val().length>0) {
            $.ajax({
                type: "POST",
                url: '{{ url('/check-agent-code-availibility') }}',
                data: $("#check_form").serialize(), // serializes the form's elements.
                success: function (data) {
                    if (data == 'exists') {
                        $("#loading_div").css('display', 'none');
                        $("#loading_status").html('Sorry, this agent code is not available. Please reset and try again.');
                        $("#loading_status").css('color', 'red');
                    } else {
                        $("#loading_div").css('display', 'none');
                        $("#loading_status").html('Congratulations, this agent code is available!');
                        $("#loading_status").css('color', 'green');
                    }
                }
            });
        }
    }

    function resetCode(){
        $("#text_1").val('');
        $("#text_2").val('');
        $("#text_3").val('');
        $("#text_4").val('');
        $("#text_5").val('');
        $("#text_6").val('');
        $("#text_7").val('');

        $("#texth_1").val('');
        $("#texth_2").val('');
        $("#texth_3").val('');
        $("#texth_4").val('');
        $("#texth_5").val('');
        $("#texth_6").val('');
        $("#texth_7").val('');

        $("#loading_status").html('');

    }


</script>
</body>
</html>
