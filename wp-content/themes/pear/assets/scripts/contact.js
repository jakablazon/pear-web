jQuery(function ($) {

    $(document).on("click", "#psf-submit", function (e) {
        // e.preventDefault();

        var fd = new FormData();
        var user_name = $("#name");
        var user_email = $("#email");
        var user_age = $("#age");
        var psf_nonce = $("#psf_nonce");
        fd.append("user_name", user_name.val());
        fd.append("user_email", user_email.val());
        fd.append("user_age", user_age.find(":selected").text());
        fd.append("psf_nonce", psf_nonce.val());
        fd.append("action", "psf_form_submit");

        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!user_name.val()) {
            user_name.attr("placeholder", psf.username_error);
            user_name.addClass("error-input");
        } else if (!user_email.val()) {
            user_email.attr("placeholder", psf.useremail_error);
            user_email.addClass("error-input");
        } else if (!regex.test(user_email.val())) {
            user_email.addClass("error-input");
        } else {
            $.ajax({
                type: 'POST',
                url: psf.ajax_url,
                data: fd,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status === 200) {
                        user_name.val('');
                        user_email.val('');
                        user_age.find(":selected").removeAttr("selected");

                        console.log(response);
                        // $("#response-text").html(response.message).show();
                    } else {
                        console.log(response);
                        // $("#response-text").html(response.message).show();
                        // $("#contact-submit").slideUp(200, "linear");
                    }
                },
                error: function (MLHttpRequest, textStatus, errorThrown) {
                    // console.log(MLHttpRequest);
                    // console.log(textStatus);
                    // console.log(errorThrown);
                },
                beforeSend: function () {
                    // $('#popup-loading').show();
                },
                complete: function () {
                    // $("#popup-loading").hide();
                }
            });
        }
    });
});
