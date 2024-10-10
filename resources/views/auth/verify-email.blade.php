@extends('frontend.layouts.master')

@section('content')

<section class="fp__breadcrumb" style="background: url({{ asset('frontend/images/counter_bg.jpg') }});">
    <section class="fp__signin" style="background: url({{ asset('frontend/images/login_bg.jpg') }});">
        <div class="fp__signin_overlay pt_125 xs_pt_95 pb_100 xs_pb_70">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                        
                        <div class="fp__login_area">
                            <h1>Email Verification</h1>
                            <p>{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </p>

                            @if (session('status') == 'verification-link-sent')
                                <p style="color:green">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </p>
                            @endif

                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <div class="col-xl-12">
                                        <div class="fp__login_imput">
                                            <button type="submit" class="common_btn">{{ __('Resend Verification Email') }}</button>
                                        </div>
                                    </div>
                                </form>
                        
                                

                                <p class="create_account d-flex justify-content-between">
                                    <a href="{{ route('logout') }}">Log Out</a>
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
                FORGOT PASSWORD END
            ==========================-->
@endsection
