@extends('layout')
@section('custom_meta')
    <title>Buildentory Early Access</title>
    <meta name="description" content="">
@endsection

@section('content')
    <main>
        <section id="search-new-home-section" >
            <h3 class="bentory-title-search--new font-weight-bold">Find Your Forever Home<br/>On-the-Go </h3>
            <div class="search-new-home bntory-wrapper">

                <div class="search-new-home-left bentory-common-animaiton">
                    <img src="{{ asset('img/bentory_mobile_left.png') }}" alt="">
                </div>
                <div class="search-new-home-mid bentory-common-animaiton">
                    <img src="{{ asset('img/bentory_mobile_right.png') }}" alt="">
                </div>

                <div class="search-new-home-right bentory-common-animaiton">
                    <a class="entory-bnt-dapps" href="{{ $system_settings_info->iphone_app_link }}" target="_blank"><img src="{{ asset('img/btn_apps_download.png') }}" alt=""></a>
                    <a  class="entory-bnt-gapps" href="{{ $system_settings_info->android_app_link }}" target="_blank"><img src="{{ asset('img/btn_apps_google.png') }}" alt=""></a>
                </div>
            </div>

        </section>

        <div class="container-fluid">
            <form action="{{ url('/store') }}" method="post">
            @csrf
            <section id="bentory-popular-city">
            <div class="bntory-wrapper" id="early_access_form">
                <h3 class="bentory-city-title mt-50 mb-10 bentory-common-animaiton font-weight-bold">Agents!<br/>Get <span style="color: #10790F">FREE</span> Early Access</h3>
                <div class="be-home-plan--box" id="be-myinfo">

                    <div class="row">
                        <div class="col-xl-12 mb-20 text-center">
                            <p style="font-size: 16px">Please fill out the form below to pre-register your free account. (AGENTS ONLY)</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 mb-20 text-center" id="error_message" style="color: #ff0000">

                        </div>
                    </div>

                    @if($errors->any())
                        <div class="row">
                            <div class="col-xl-12 mb-20 text-center" id="error_message" style="color: #ff0000">
                                Oops! The following field(s) have falidation error:<br/>
                                {!! implode('', $errors->all('<div>:message</div>')) !!}
                            </div>
                        </div>

                    @endif

                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <h3 class="betitle-my-info"> <span class="binfo-inner"> Contact Info</span></h3>
                            <div class="be-binfo--box ">
                                <div class="be-singin-row">
                                    <label for="">First Name <span class="eb-redtsar">*</span></label>
                                    <input type="text" name="first_name" id="first_name" required="" class="be-singing-input" placeholder="First Name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="be-singin-row">
                                    <label for="">Last Name <span class="eb-redtsar">*</span></label>
                                    <input type="text" name="last_name" id="last_name" required="" class="be-singing-input" placeholder="Last Name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="be-singin-row">
                                    <label for="">Email <span class="eb-redtsar">*</span></label>
                                    <input type="text" name="email_address" id="email_address" required="" class="be-singing-input" placeholder="Email" value="{{ old('email_address') }}">
                                    @error('email_address')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="be-singin-row">
                                    <label for="">Cell <span class="eb-redtsar">*</span></label>
                                    <input type="text" name="cell" id="cell" required="" class="be-singing-input" placeholder="Cell" value="{{ old('cell') }}">
                                    @error('cell')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <!--<div  style="text-align: center; width: 350px;"><span class="eb-redtsar">*</span>Required Fields </div>-->


                                <h3 class="betitle-my-info mt-4"><span class="binfo-inner">Password</span></h3>
                                <div class="be-singin-row">
                                    <label for="">New Password <span class="eb-redtsar">*</span></label>
                                    <input type="password" name="password" id="password" required="" class="be-singing-input" placeholder="New Password" >
                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="be-singin-row">
                                    <label for="">Confirm Password <span class="eb-redtsar">*</span>
                                    </label>
                                    <input type="password" name="confirm_password" id="confirm_password" required="" class="be-singing-input" placeholder="Confirm Password">
                                    @error('confirm_password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                            </div>


                        </div>
                        <div class="col-xl-6 col-md-6">
                            <h3 class="betitle-my-info"><span class="binfo-inner">Agent Info</span></h3>
                            <div class="be-singin-row ">
                                <label for="">Brokerage Name <span class="eb-redtsar">*</span></label>
                                <input type="text" name="brokerage_name" id="brokerage_name" required="" class="be-singing-input" placeholder="Brokerage Name" value="{{ old('brokerage_name') }}">
                                @error('brokerage_name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="be-singin-row">
                                <label for="">Title <span class="eb-redtsar">*</span></label>
                                <input type="text" name="title" id="title" required="" class="be-singing-input" placeholder="Title" value="{{ old('title') }}">
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="be-singin-row">
                                <label for="">License # <span class="eb-redtsar">*</span></label>
                                <input type="text" name="license" id="license" required="" class="be-singing-input" placeholder="License" value="{{ old('license') }}">
                                @error('license')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="be-singin-row">
                                <label for="">License Renewal Date <span class="eb-redtsar">*</span></label>
                                <input type="text" name="license_renewal_date" required="" id="license_renewal" class="be-singing-input" placeholder="License Renewal Date" value="{{ old('license_renewal_date') }}">
                                @error('license_renewal_date')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div  style="margin-top: 10px;color:#00a2ff ">
                                Look up renewal date on TREC.
                                <a class="btn btn-warning" style="background-color: #fff600;border: 1px solid #000; border-radius: 5px; color: #000" href="https://www.trec.texas.gov/apps/license-holder-search/index.php?lic_name=&lic_hp=&industry=Real+Estate" target="_blank">Look Up</a>
                            </div>



                            <h3 class="betitle-my-info mt-35">
                                <span class="binfo-inner">Create Agent Code</span></h3>

                            <div class="be-singin-row">

                                <label for="" style="line-height: 22px;font-weight: normal">You’ll need a 7-digit Agent Code to let your buyers tag you as their preferred Agent after they sign up on the Buildentory App. You can either use alphanumeric or all letters or all numbers. </label>

                                <label for="" style="line-height: 22px;font-weight: bold">(Example: KIM1985 or REALTOR or 1234567)</label>
                                <div style="display: flex; justify-content: left">
                                        <span>
                                            <input type="text" class="be-singing-input" required style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1"  id="text_1" name="text_1">
                                        </span>
                                    <span>
                                            <input type="text" class="be-singing-input"  required style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1" id="text_2" name="text_2">
                                        </span>
                                    <span>
                                            <input type="text" class="be-singing-input" required  style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1"  id="text_3" name="text_3">
                                        </span>
                                    <span>
                                            <input type="text" class="be-singing-input" required style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1" id="text_4" name="text_4">
                                        </span>
                                    <span>
                                            <input type="text" class="be-singing-input"  required style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1" id="text_5" name="text_5">
                                        </span>
                                    <span>
                                            <input type="text" class="be-singing-input" required style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1" id="text_6" name="text_6">
                                        </span>
                                    <span>
                                        <input type="text" class="be-singing-input" required style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1" id="text_7" name="text_7">
                                    </span>
                                </div>
                                <div class="text-center mt-10" style="max-width: 300px">
                                    {{--<button class="btn btn-success" onclick="resetCode()">RESET</button>--}}
                                    <input type="button" class="btn btn-success" style="background-color: #fff600;border: 1px solid #000; border-radius: 5px; color: #000" onclick="resetCode()" value="RESET">
                                </div>

                                <div  style="max-width: 300px;text-align: center;margin-top: 10px">
                                    <div id="loading_div" style="display: none"><img src="{{ asset('img/loader.gif') }}" style="width: 25px;height: 25px"></div>
                                    <p id="loading_status" style="display: none;color: #ff0000">Checking Agent Code Availability</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-left"><span class="eb-redtsar">*</span>Required Fields</div>
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-12">

                            <div class="col-12 text-left mt-4">
                                <label><input type="checkbox" name="is_agree" id="is_agree" value="1" required>&nbsp;I agree with the <a href="{{ url('/') }}/realtor-terms" target="_blank">Agent Terms of Use</a> and <a href="{{ url('/') }}/realtor-privacy-policy" target="_blank">Privacy Policy</a></label><br/>
                                <label><input type="checkbox" name="is_interested" value="1" @if(old('is_interested')=='1') checked @endif>&nbsp;I'm interested in receiving new construction buyer leads with a <a href="https://buildentory.com/media/settings_uploaded_files/6179e9ceda96c_2022_BuildentoryPremiumBrochure_Realtor_DFW-2.pdf" target="_blank">Buildentory Premium Account</a>.</label>
                            </div>
                            <div class="col-12 text-left mt-4">
                                <label>Claim These Zip Codes</label>
                                <div>
                                    <textarea name="message" class="be-singing-input" style="height: 100px" placeholder="Type Zips here...">{{ old('message') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12 mt-3 text-center">
                            <a href="https://buildentory.com/media/settings_uploaded_files/6179e9ceda96c_2022_BuildentoryPremiumBrochure_Realtor_DFW-2.pdf" target="_blank"><img src="{{ asset('img/download_btn.png') }}"></a>
                        </div>

                    </div>

                    <input type="hidden" name="recaptcha" id="recaptcha">

                    <div class="row">
                        <input style="width: 280px; margin: 40px auto;border: 1px solid #000; border-radius: 5px; color: #000" type="submit" class="bentory-singin-btn" value="Pre-Register Now" onclick="return formvalidation()">
                    </div>
                </div>
            </div>
        </section>
        </form>
        </div>

        <form id="check_form" method="post">
            @csrf
            <input type="hidden" name="texth_1" id="texth_1">
            <input type="hidden" name="texth_2" id="texth_2">
            <input type="hidden" name="texth_3" id="texth_3">
            <input type="hidden" name="texth_4" id="texth_4">
            <input type="hidden" name="texth_5" id="texth_5">
            <input type="hidden" name="texth_6" id="texth_6">
            <input type="hidden" name="texth_7" id="texth_7">
        </form>

    </main>
@endsection

@section('javascript')
<script>
    @if($errors->any())
        $( document ).ready(function() {
            jQuery([document.documentElement, document.body]).animate({
                scrollTop: jQuery("#error_message").offset().top
            }, 500);
        });
    @endif

    function formvalidation() {
        var flag = 0;
        var fstr = "";
        if(jQuery("#first_name").val() =='') {
            flag = 1;
            fstr += "First Name, ";
        }

        if(jQuery("#last_name").val() =='') {
            flag = 1;
            fstr += "Last Name, ";
        }

        if(jQuery("#email_address").val() =='') {
            flag = 1;
            fstr += "Email, ";
        }

        if(jQuery("#cell").val() =='') {
            flag = 1;
            fstr += "Cell, ";
        }

        if(jQuery("#password").val() =='') {
            flag = 1;
            fstr += "Password, ";
        }

        if(jQuery("#confirm_password").val() =='') {
            flag = 1;
            fstr += "Confirm Password, ";
        }

        if(jQuery("#brokerage_name").val() =='') {
            flag = 1;
            fstr += "Brokerage Name, ";
        }

        if(jQuery("#title").val() =='') {
            flag = 1;
            fstr += "Title, ";
        }

        if(jQuery("#license").val() =='') {
            flag = 1;
            fstr += "License #, ";
        }

        if(jQuery("#license_renewal").val() =='') {
            flag = 1;
            fstr += "License Renewal Date, ";
        }

        if(!jQuery('#is_agree').prop('checked')) {
            flag = 1;
            fstr += ' checkbox to "I agree with the Agent Terms of Use and Privacy Policy", ';
        }

        if(jQuery("#text_1").val() =='' || jQuery("#text_2").val() =='' || jQuery("#text_3").val() =='' || jQuery("#text_4").val() =='' || jQuery("#text_5").val() =='' || jQuery("#text_6").val() =='' || jQuery("#text_7").val() =='') {
            flag = 1;
            fstr += "Agent Code, ";
        }


        if(flag == 1) {

            var str11 = fstr.substring(0, fstr.length - 2);
            if(str11.length >0) {
                jQuery("#error_message").html("Oops! The following required field(s) are missing: " + str11);
            }
            jQuery("#error_message").css('display','block');

            //window.scrollTo(0, 0);
            jQuery([document.documentElement, document.body]).animate({
                scrollTop: jQuery("#error_message").offset().top
            }, 500);

            return false;
        }
        else {
            return true;
        }



    }


    </script>
@endsection
