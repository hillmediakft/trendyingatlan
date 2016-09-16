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

                    $('#favourite_property_' + property_id).slideUp(300, function () {
                        $(this).remove();
                    });
                    $('#kedvencek_' + property_id).removeClass('selected-favourite');

                    app.notifier.showSuccess('Az ingatlant törölte a kedvencek közül!');
                    // $('#torles_modal').modal('show');
                }
            });


        });
    }

    /* ********************** Listázási sorrend módosítása ************************* */
    var setOrder = function () {
        $('#in-listing-sort').on('change', function () {
            url = $("#in-listing-sort option:selected" ).val();
            window.location.href = location.protocol + "//" + location.host + url;



        });
    }
    
        /* ********************** Listázási sorrend módosítása ************************* */
    var resetFilter = function () {
        $('#reset-filter').on('click', function () {
            window.location.href = location.protocol + "//" + location.host + '/ingatlanok';
        });
    }


    return {
        //main function to initiate the module
        init: function () {
            addToFavourites();
            deleteFavourite();
            setOrder();
            resetFilter();
        }
    };

}();


jQuery(document).ready(function () {
    Trendy.init();
});


