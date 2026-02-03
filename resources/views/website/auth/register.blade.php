@extends('website.layout.app')
@section('content')
<div class="common-container mob-pad-zero">

        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-sm-fd-column-rev ">
            <div class="gl-w-55 gl-sm-w-100 gl-po-rel gl-d-flex gl-bg-black gl-sm-py-40">

                <div class="login-wrapper">
                    <div class="log-ing-head">Create your account</div>

                        <form class="ajax-form" action="{{ route('website.register.store') }}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6">
                                    <div class="login-fields my-3" style="text-align: left;">
                                        <input type="text" class="login-input mb-0" placeholder="Name" name="name">
                                        <small class="text-danger error-name mb-3"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6">
                                    <div class="login-fields my-3"  style="text-align: left;">
                                        <input type="text" class="login-input mb-0" placeholder="Email" name="email">
                                        <small class="text-danger error-email mb-3"></small>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-12 col-sm-12 col-md-12">
                                     <div class="login-fields my-3"  style="text-align: left;">
                                        <input type="tel" class="login-input mb-0" placeholder="Phone number" name="mobile">
                                        <small class="text-danger error-mobile mb-3"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6">
                                    <div class="login-fields my-3"  style="text-align: left;">
                                        <input type="password" class="login-input mb-0" placeholder="Password" name="password">
                                        <small class="text-danger error-password mb-3"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6">
                                    <div class="login-fields my-3"  style="text-align: left;">
                                        <input type="password" class="login-input mb-0" placeholder="Confirm Password" name="password_confirmation">
                                        <small class="text-danger error-password_confirmation mb-3"></small>
                                    </div>
                                </div>
                            </div>
                            <button class="login-btn gl-td-none" type="submit">
                                Register
                            </button>
                        </form>

                    </div>

            </div>
            <div class="gl-w-45 gl-sm-w-100 gl-po-rel">
                <img class="gl-w-100" src="{{ asset('web/assets/images/login/login.png') }}">
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(document).on('submit', '.ajax-form', function (e) {
    e.preventDefault();

    let form = $(this);
    let url  = form.data('action') ?? form.attr('action');
    let btn  = form.find('button[type=submit]');

    // Disable submit button
    btn.prop('disabled', true);

    // Clear all field errors
    form.find('[class^="error-"]').text('');

    $.ajax({
        url: url,
        type: form.attr('method') ?? "POST",
        data: form.serialize(),

        success: function (res) {

            // Show success toast
            if (res.message) {
                showToast(
                    res.title ?? 'Success',
                    res.message ?? '',
                    'success'
                );

            }

            // Redirect if exists
            if (res.status && res.redirect) {
                setTimeout(() => {
                    window.location.href = res.redirect;
                }, 1000);
            }
            if (res.status) {
                $('#commonModal').modal('hide');

                if ($.fn.DataTable.isDataTable('.dataTable')) {
                    $('.dataTable').DataTable().ajax.reload(null, false);
                }
                setTimeout(() => {
                location.reload();
            }, 800);
            }
        },

        error: function (xhr) {

            // Validation errors (422)
            if (xhr.status === 422 && xhr.responseJSON?.errors) {
                $.each(xhr.responseJSON.errors, function (field, messages) {
                    form.find('.error-' + field).text(messages[0]);
                });
            }

            // Auth / general error (401, 403, etc.)
            else if (xhr.responseJSON?.message) {
                showToast(xhr.responseJSON.message, '', 'error');
            }

            // Fallback
            else {
                showToast('Something went wrong. Please try again.', '', 'error');
            }
        },

        complete: function () {
            btn.prop('disabled', false);
        }
    });
});

/**
 * =================================================
 * LIVE ERROR CLEARING ON INPUT
 * =================================================
 */
$(document).on(
    'input change',
    '.ajax-form input, .ajax-form textarea, .ajax-form select',
    function () {
        let input = $(this);
        let name  = input.attr('name');

        if (!name) return;

        let form = input.closest('form');

        // Clear field error
        form.find('.error-' + name).text('');

        // Clear general error
        form.find('.error-general').text('');
    }
);
</script>

@endsection
