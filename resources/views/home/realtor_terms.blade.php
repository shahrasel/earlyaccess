@extends('layout')
@section('custom_meta')
    <title>Buildentory Early Access - Agent Terms</title>
    <meta name="description" content="">
@endsection

@section('content')
    <main>


        <section id="bentory-popular-city">
            <div class="container-fluid">
                <div class="bntory-wrapper">
                    <h3 class="bentory-city-title mt-50 mb-50 bentory-common-animaiton font-weight-bold"><span style="color: #10790F">AGENT</span> TERMS</h3>
                    <div class="be-home-plan--box" id="be-myinfo">
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="terms_content" class="be-binfo--box">
                                    {!! $settings_info->realtor_terms_of_use !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
