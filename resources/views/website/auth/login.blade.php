@extends('website.layout.app')
@section('content')
<div class="common-container mob-pad-zero">

        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-sm-fd-column-rev ">
            <div class="gl-w-55 gl-sm-w-100 gl-po-rel gl-d-flex gl-bg-black gl-sm-py-40">

                <div class="login-wrapper">
                    <div class="log-ing-head">Log in to your account</div>

                    <input type="text" class="login-input" placeholder="Email or Phone number">

                    <a class="login-btn gl-td-none" href="#">Log in</a>
                </div>
            </div>
            <div class="gl-w-45 gl-sm-w-100 gl-po-rel">
                <img class="gl-w-100" src="{{ asset('web/assets/images/login/login.png') }}">
            </div>
        </div>
    </div>
@endsection
