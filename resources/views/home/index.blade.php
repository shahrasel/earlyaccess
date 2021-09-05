@extends('layout')
@section('custom_meta')
    <title>Buildentory Early Access</title>
    <meta name="description" content="">
@endsection

@section('content')
    <main>
        <section id="search-new-home-section" >
            <h3 class="bentory-title-search--new font-weight-bold">Find Your Forever Home On-the-Go </h3>
            <div class="search-new-home bntory-wrapper">

                <div class="search-new-home-left bentory-common-animaiton">
                    <img src="{{ asset('img/bentory_mobile_left.png') }}" alt="">
                </div>
                <div class="search-new-home-mid bentory-common-animaiton">
                    <img src="{{ asset('img/bentory_mobile_right.png') }}" alt="">
                </div>

                <div class="search-new-home-right bentory-common-animaiton">
                    <a class="entory-bnt-dapps" href="https://apps.apple.com/us/app/buildentory-real-estate/id1281722341" target="_blank"><img src="{{ asset('img/btn_apps_download.png') }}" alt=""></a>
                    <a  class="entory-bnt-gapps" href="#"><img src="{{ asset('img/btn_apps_google.png') }}" alt=""></a>
                </div>
            </div>

        </section>

        <form action="{{ url('/store') }}" method="post">
            @csrf
            <section id="bentory-popular-city">
            <div class="bntory-wrapper">
                <h3 class="bentory-city-title mt-50 mb-50 bentory-common-animaiton font-weight-bold">Get <span style="color: #10790F">FREE</span> Early Access</h3>
                <div class="be-home-plan--box" id="be-myinfo">
                    <div class="row">
                        <div class="col-xl-6">
                            <h3 class="betitle-my-info"> <span class="binfo-inner"> Contact Info</span></h3>
                            <div class="be-binfo--box">
                                <div class="be-singin-row">
                                    <label for="">First Name <span class="eb-redtsar">*</span></label>
                                    <input type="text" name="first_name" required="" class="be-singing-input" placeholder="First Name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="be-singin-row">
                                    <label for="">Last Name <span class="eb-redtsar">*</span></label>
                                    <input type="text" name="last_name" required="" class="be-singing-input" placeholder="Last Name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="be-singin-row">
                                    <label for="">Email <span class="eb-redtsar">*</span></label>
                                    <input type="text" name="email_address" required="" class="be-singing-input" placeholder="Email" value="{{ old('email_address') }}">
                                    @error('email_address')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="be-singin-row">
                                    <label for="">Cell <span class="eb-redtsar">*</span></label>
                                    <input type="text" name="cell" required="" class="be-singing-input" placeholder="Cell" value="{{ old('cell') }}">
                                    @error('cell')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <!--<div  style="text-align: center; width: 350px;"><span class="eb-redtsar">*</span>Required Fields </div>-->


                                <h3 class="betitle-my-info mt-4"><span class="binfo-inner">Password</span></h3>
                                <div class="be-singin-row">
                                    <label for="">New Password <span class="eb-redtsar">*</span></label>
                                    <input type="password" name="password" required="" class="be-singing-input" placeholder="New Password" >
                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="be-singin-row">
                                    <label for="">Confirm Password <span class="eb-redtsar">*</span>
                                    </label>
                                    <input type="password" name="confirm_password" required="" class="be-singing-input" placeholder="Confirm Password">
                                    @error('confirm_password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                            </div>


                        </div>
                        <div class="col-xl-6">
                            <h3 class="betitle-my-info"><span class="binfo-inner">Realtor Info</span></h3>
                            <div class="be-singin-row">
                                <label for="">Brokerage Name <span class="eb-redtsar">*</span></label>
                                <input type="text" name="brokerage_name" required="" class="be-singing-input" placeholder="Brokerage Name" value="{{ old('brokerage_name') }}">
                                @error('brokerage_name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="be-singin-row">
                                <label for="">Title <span class="eb-redtsar">*</span></label>
                                <input type="text" name="title" required="" class="be-singing-input" placeholder="Title" value="{{ old('title') }}">
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="be-singin-row">
                                <label for="">License # <span class="eb-redtsar">*</span></label>
                                <input type="text" name="license" required="" class="be-singing-input" placeholder="License" value="{{ old('license') }}">
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



                            <h3 class="betitle-my-info mt-35">
                                <span class="binfo-inner">Create Agent Code</span></h3>

                            <div class="be-singin-row">

                                <label for="">Use alphanumeric (Ex. JAN1985)</label>
                                <div style="display: flex; justify-content: left">
                                        <span>
                                            <input type="text" class="be-singing-input" required style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1" placeholder="J" id="text_1" name="text_1">
                                        </span>
                                    <span>
                                            <input type="text" class="be-singing-input"  required style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1" placeholder="A" id="text_2" name="text_2">
                                        </span>
                                    <span>
                                            <input type="text" class="be-singing-input" required  style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1" placeholder="N" id="text_3" name="text_3">
                                        </span>
                                    <span>
                                            <input type="text" class="be-singing-input" required style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1" placeholder="1" id="text_4" name="text_4">
                                        </span>
                                    <span>
                                            <input type="text" class="be-singing-input"  required style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1" placeholder="9" id="text_5" name="text_5">
                                        </span>
                                    <span>
                                            <input type="text" class="be-singing-input" required style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1" placeholder="8" id="text_6" name="text_6">
                                        </span>
                                    <span>
                                        <input type="text" class="be-singing-input" required style="border-radius: 5px;width: 37px;text-transform: uppercase" maxlength="1" placeholder="5" id="text_7" name="text_7">
                                    </span>
                                </div>
                                <div  style="max-width: 300px;text-align: center;margin-top: 10px">
                                    <div id="loading_div" style="display: none"><img src="{{ asset('img/loader.gif') }}" style="width: 25px;height: 25px"></div>
                                    <p id="loading_status" style="display: none">Checking Agent Code Availibility</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-left"><span class="eb-redtsar">*</span>Required Fields</div>
                    <div class="col-12 text-left mt-4">
                        <label><input type="checkbox" name="is_interested" value="1" @if(old('is_interested')=='1') checked @endif>&nbsp;I'm interested in receiving new construction buyer leads with a Premium Account.</label>
                    </div>
                    <div class="col-12 text-left mt-4">
                        <label>Claim These Zip Codes</label>
                        <div>
                            <textarea name="message" class="be-singing-input" style="height: 100px" placeholder="Type Zips here...">{{ old('message') }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <input style="width: 280px; margin: 40px auto;" type="submit" class="bentory-singin-btn" value="Create My Account">
                    </div>
                </div>
            </div>
        </section>
        </form>

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
