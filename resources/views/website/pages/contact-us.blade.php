@extends('website.layout.app')
@section('content')

    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column banner-common-contact gl-justify-fe">
        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10 gl-pl-50 gl-pb-50 gl-xs-pb-20 gl-xs-pl-20">
            <div class="about-banner-head"> connect</div>

        </div>
    </div>
    <div class="zwag-logo-slide gl-mt-70 gl-xl-mt-50 gl-lg-mt-40 gl-md-mt-30 gl-xs-mt-40">
        <div class="logo-track" id="logoTrack">
            <img src="{{asset('web/assets/images/home/logo-swag-slide.svg')}}" class="logo-item">
        </div>
    </div>
    <div class="gl-w-100 style-bg-clr contact-pg">
        <div class="common-container ">

            <div class="gl-w-100 gl-po-rel gl-d-flex contact-content gl-justify-sb">
                <div class="gl-fd-column gl-w-100">
                    <div class="style-head-abt-cmn gl-w-80 gl-lg-w-100 gl-po-rel gl-d-flex scroll-up-anim ">let’s get in touch </div>
                    <div class=" gl-w-100 rht-text gl-pt-30 mob-show gl-sm-pt-20 scroll-up-anim">Have a question or need help? We’d love to hear from you. Reach out and our team will get back to you soon! </div>
                    <div class="gl-pt-80 gl-xl-pt-50 gl-md-pt-40 gl-d-flex gl-justify-sb gl-align-fs gl-xl-align-center cnt-detail-row ">
                        <div class="col-content">
                            <div class="gl-pb-40 gl-md-pb-20 gl-md">
                                <div class="form-title gl-pb-15">Email ID </div>
                                <div class="form-content"><a href="mailto:Sales@zwagstyles.com">Sales@zwagstyles.com </a></div>
                            </div>
                            <div class="gl-pb-40 gl-md-pb-20">
                                <div class="form-title gl-pb-15">Contact Number </div>
                                <div class="form-content"><a href="tel:91 80891 66808">91 80891 66808 </a></div>
                            </div>
                            <div class="gl-pb-60 gl-md-pb-30">
                                <div class="form-title gl-pb-15">Business Address </div>
                                <div class="form-content address-cntnt gl-w-200p">No 53 Maratt 8A Cross Yajman Layout Begur Post Bangalore Karnataka 560068</div>
                            </div>
                            <div class="map-link"><a href="https://www.google.com/maps" target="_blank">see on google map <img src="{{asset('web/assets/images/contact/arrow.png')}}" alt="arrow"/></a></div>
                        </div>
                        <div class="col-content gl-sm-ta-c "><img class="cnt-dress-img" src="{{asset('web/assets/images/contact/hoodie.png')}}" alt="HOODIES" /></div>
                    </div>
                </div>
                <div class="gl-fd-column gl-w-100">
                    <div class=" gl-w-100 gl-po-rel gl-d-flex gl-sm-justify-c rht-text mob-hide scroll-up-anim">Have a question or need help? We’d love to hear from you. Reach out and our team will get back to you soon! </div>
                    <div class="contact-form">
                        <form>
                            <div class="form-heading">Contact</div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <label class="form-label gl-mb-10">First Name*</label>
                                    <input type="text" class="form-control" aria-label="First name">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label class="form-label gl-mb-10">Last Name*</label>
                                    <input type="text" class="form-control" aria-label="Last name">
                                </div>
                                <div class="col-lg-6 col-sm-12 gl-pt-10">
                                    <label class="form-label gl-mb-10">Email Id*</label>
                                    <input type="text" class="form-control" aria-label="Email Id">
                                </div>
                                <div class="col-lg-6 col-sm-12 gl-pt-10">
                                    <label class="form-label gl-mb-10">Phone Number*</label>
                                    <input type="text" class="form-control" aria-label="Phone Number">
                                </div>
                                <div class="col-lg-12 col-sm-12 gl-pt-10">
                                    <label class="form-label gl-mb-10">Message*</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <button class="form-submit gl-mt-25">send to us</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
