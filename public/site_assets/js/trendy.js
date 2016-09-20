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

    return {
        //main function to initiate the module
        init: function () {
            addToFavourites();
            deleteFavourite();
            setOrder();
            resetFilter();
            adatlapFlexSlider();
            OwlCarousel();
        }
    };

}();


jQuery(document).ready(function () {
    Trendy.init();
});


