var Trendy = function () {

    /* ********************** Kedvencekhez adás ************************* */
    var addToFavourites = function () {
        $('[id*=kedvencek]').on('click', function () {

            property_id = $(this).attr('data-id');
            $.ajax({
                type: "post",
                url: "ingatlanok/add_property_to_cookie",
                data: "ingatlan_id=" + property_id,
                beforeSent: function () {
                    $('#loadingDiv').show();
                },
                complete: function () {
                    $('#loadingDiv').hide();
                },
                success: function (data) {
                    $('#favourite-property-widget .properties__list').append(data);
                    $('#kedvencek_' + property_id).addClass('selected-favourite');
                    $('#empty-favourites-list').remove();
                    $('#kedvencek_szama').html(getKedvencekNumber());
                    app.notifier.showSuccess('Az ingatlant hozzáadta a kedvencekhez!');
                    // $('#hozzaadas_modal').modal('show');
                }
            });


        });
    }

    /* ********************** Kedvenc törlése ************************* */
    // olyan elemeknél is működik, amelyeket dinamikusan hoztunk létre 
    var deleteFavourite = function () {
        $('#favourite-property-widget').on('click', '[id*=delete_kedvenc]', function () {
            property_id = $(this).attr('data-id');

            $.ajax({
                type: "post",
                url: "ingatlanok/delete_property_from_cookie",
                data: "ingatlan_id=" + property_id,
                beforeSent: function () {
                    $('#loadingDiv').show();
                },
                complete: function () {
                    $('#loadingDiv').hide();
                },
                success: function () {

                    $('#favourite_property_' + property_id).remove();
                    $('#kedvencek_' + property_id).removeClass('selected-favourite');
                    kedvencekSzama = $("#favourite-property-widget > .properties__list > article").length;
                    if (kedvencekSzama == 0) {
                        $('#favourite-property-widget .properties__list').append('<span id="empty-favourites-list"><i class="fa fa-exclamation-triangle"></i> A kedvencek listája üres!</span>');
                    }
                    $('#kedvencek_szama').html(kedvencekSzama);
                    app.notifier.showSuccess('Az ingatlant törölte a kedvencek közül!');
                    // $('#torles_modal').modal('show');
                }
            });


        });
    }

    /* ********************** Listázási sorrend módosítása ************************* */
    var getKedvencekNumber = function () {
        var kedvencekCookie = decodeURIComponent(readCookie('kedvencek'));
        kedvencekCookie = kedvencekCookie.substring(1);
        kedvencekCookie = kedvencekCookie.slice(0, -1);
        kedvencekCookie = kedvencekCookie.split(',');
        number = kedvencekCookie.length;
        console.log(kedvencekCookie);
        console.log(number);
        return number;

    }

    var readCookie = function (name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ')
                c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0)
                return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    /* ********************** Listázási sorrend módosítása ************************* */
    var setOrder = function () {
        $('#in-listing-sort').on('change', function () {
            url = $("#in-listing-sort option:selected").val();
            window.location.href = location.protocol + "//" + location.host + url;



        });
    }

    /* ********************** Listázási sorrend módosítása ************************* */
    var resetFilter = function () {
        $('#reset-filter').on('click', function () {
            window.location.href = location.protocol + "//" + location.host + '/ingatlanok';
        });
    }
    var adatlapFlexSlider = function () {
        //blog single slider

        var flex_carousel = $('#flex-carousel');
        var flex_slider = $('#flex-slider');
        if (flex_slider.length == 1 && flex_carousel.length == 1) {
            $(flex_carousel).flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 130,
                itemMargin: 5,
                asNavFor: '#flex-slider'
            });
            $(flex_slider).flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#flex-carousel"
            });
        }
    }

    var OwlCarousel = function () {

        var owl = $("#owl-properties");
        if (owl.length != 0) {
            owl.owlCarousel({
                itemsCustom: [
                    [0, 2],
                    [450, 2],
                    [600, 3],
                    [700, 4],
                    [1000, 4],
                    [1200, 4],
                    [1400, 4],
                    [1600, 6]
                ],
                navigation: false

            });
        }
    }

    var contactPanel = function () {
        // feedback side panel 
        $("#feedback-tab").click(function () {
            $("#feedback-form").toggle("slide");
        });

        $("#feedback-form form").on('submit', function (event) {
            var $form = $(this);
            // $('#panel_ajax_message').empty();
            // $('#panel_ajax_message').hide();


            $('#submit_button').after('<img src="public/site_assets/img/ajax-loader.gif" class="loader" />');
            $('#submit_contact').attr('disabled', 'disabled');
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize(),
                success: function (msg) {
                    msg = JSON.parse(msg);
                    //    $('#panel_ajax_message').append(msg);
                    //    $('#panel_ajax_message').slideDown('slow');
                    $('#feedback-form img.loader').fadeOut('slow', function () {
                        $(this).remove()
                    });
                    $('#submit_contact').removeAttr('disabled');
                    //$('#panel_ajax_message').delay(7500).slideUp(700);
                    if (msg.success) {
                        app.notifier.showSuccess(msg.success);
                    }
                    if (msg.error) {
                        app.notifier.showError(msg.error);
                    }

                    $('#panel_name').val('');
                    $('#panel_email').val('');
                    $('#panel_phone').val('');
                    $('#panel_message').val('');
                }
            });
            event.preventDefault();
        });
    }
    // kapcsolat űrlap az irodánk oldalon
    var contactOfficePage = function () {

        $("#contact-form-office").on('submit', function (event) {
            var $form = $(this);
            // $('#panel_ajax_message').empty();
            // $('#panel_ajax_message').hide();

            $('#submit_contact_office').addClass('button--loading');
            //     $('#submit_contact_office').attr('disabled', 'disabled');
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize(),
                success: function (msg) {
                    msg = JSON.parse(msg);
                    //    $('#panel_ajax_message').append(msg);
                    //    $('#panel_ajax_message').slideDown('slow');
                    $('#submit_contact_office').removeAttr('disabled');
                    $('#submit_contact_office').removeClass('button--loading');
                    //$('#panel_ajax_message').delay(7500).slideUp(700);
                    if (msg.success) {
                        app.notifier.showSuccess(msg.success);
                    }
                    if (msg.error) {
                        app.notifier.showError(msg.error);
                    }

                    $('#contact-form-office input[name="name"]').val('');
                    $('#contact-form-office input[name="email"]').val('');
                    $('#contact-form-office input[name="phone"]').val('');
                    $('#contact-form-office textarea[name="message"]').val('');
                }
            });
            event.preventDefault();
        });
    }

    // ingatlan referens kapcsolatfelvételi űrlap kezelése az ingatlan adatlap oldalon
    var contactAgent = function () {

        $("#contact_agent_form").on('submit', function (event) {
            var $form = $(this);
            // $('#panel_ajax_message').empty();
            // $('#panel_ajax_message').hide();

            $('#submit_contact_agent').addClass('button--loading');
            //     $('#submit_contact_office').attr('disabled', 'disabled');
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize(),
                success: function (msg) {
                    msg = JSON.parse(msg);
                    //    $('#panel_ajax_message').append(msg);
                    //    $('#panel_ajax_message').slideDown('slow');
                    $('#submit_contact_agent').removeAttr('disabled');
                    $('#submit_contact_agent').removeClass('button--loading');
                    //$('#panel_ajax_message').delay(7500).slideUp(700);
                    if (msg.success) {
                        app.notifier.showSuccess(msg.success);
                    }
                    if (msg.error) {
                        app.notifier.showError(msg.error);
                    }

                    $('#contact_agent_form input[name="name"]').val('');
                    $('#contact_agent_form input[name="email"]').val('');
                    $('#contact_agent_form input[name="phone"]').val('');
                    $('#contact_agent_form textarea[name="message"]').val('');
                }
            });
            event.preventDefault();
        });
    }

    // ingatlan referens kapcsolatfelvételi űrlap kezelése az ingatlan adatlap oldalon
    var contactSeller = function () {

        $("#contact_seller_form").on('submit', function (event) {
            var $form = $(this);
            // $('#panel_ajax_message').empty();
            // $('#panel_ajax_message').hide();

            $('#submit_contact_seller').addClass('button--loading');
            //     $('#submit_contact_office').attr('disabled', 'disabled');
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize(),
                success: function (msg) {
                    msg = JSON.parse(msg);
                    //    $('#panel_ajax_message').append(msg);
                    //    $('#panel_ajax_message').slideDown('slow');
                    $('#submit_contact_seller').removeAttr('disabled');
                    $('#submit_contact_seller').removeClass('button--loading');
                    //$('#panel_ajax_message').delay(7500).slideUp(700);
                    if (msg.success) {
                        app.notifier.showSuccess(msg.success);
                    }
                    if (msg.error) {
                        app.notifier.showError(msg.error);
                    }

                    $('#submit_contact_seller input[name="name"]').val('');
                    $('#submit_contact_seller input[name="email"]').val('');
                    $('#submit_contact_seller input[name="phone"]').val('');
                    $('#submit_contact_seller input[name="address"]').val('');
                    $('#submit_contact_seller textarea[name="message"]').val('');
                }
            });
            event.preventDefault();
        });
    }
    
    // ingatlan referens kapcsolatfelvételi űrlap kezelése az ingatlan adatlap oldalon
    var orderTanusitvanyForm = function () {

        $("#tanusitvany_form").on('submit', function (event) {
            var $form = $(this);
            // $('#panel_ajax_message').empty();
            // $('#panel_ajax_message').hide();

            $('#submit_tanusitvany').addClass('button--loading');
            //     $('#submit_contact_office').attr('disabled', 'disabled');
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: $form.serialize(),
                success: function (msg) {
                    msg = JSON.parse(msg);
                    //    $('#panel_ajax_message').append(msg);
                    //    $('#panel_ajax_message').slideDown('slow');
                    $('#submit_tanusitvany').removeAttr('disabled');
                    $('#submit_tanusitvany').removeClass('button--loading');
                    //$('#panel_ajax_message').delay(7500).slideUp(700);
                    if (msg.success) {
                        app.notifier.showSuccess(msg.success);
                    }
                    if (msg.error) {
                        app.notifier.showError(msg.error);
                    }

                    $('#tanusitvany_form input[name="name"]').val('');
                    $('#tanusitvany_form input[name="email"]').val('');
                    $('#tanusitvany_form input[name="phone"]').val('');
                    $('#tanusitvany_form input[name="address"]').val('');
                    $('#tanusitvany_form textarea[name="message"]').val('');
                }
            });
            event.preventDefault();
        });
    }    

    var scrollToTanusitvanyForm = function () {
        $("#scroll_button").click(function () {
            $('html, body').animate({
                scrollTop: $("#energia_tanusitvany_form").offset().top
            }, 2000);
        });
    }
    
    var cookieConsent = function () {
        $('.cookie-message').cookieBar({ 
            closeButton : '.cookiebar-close' 
        });
    }    

    return {
        //main function to initiate the module
        init: function () {
            addToFavourites();
            deleteFavourite();
            setOrder();
            resetFilter();
            adatlapFlexSlider();
            OwlCarousel();
            contactPanel();
            contactOfficePage();
            contactAgent();
            contactSeller();
            scrollToTanusitvanyForm();
            orderTanusitvanyForm();
            cookieConsent();
        }
    };

}();


jQuery(document).ready(function () {
    Trendy.init();
});


