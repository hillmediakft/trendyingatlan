/**
 Property oldal
 **/
var Property = function () {

    var propertyTable = function () {

        var table = $('#property');

        table.dataTable({
            
            "language": {
                // metronic specific
                    //"metronicGroupActions": "_TOTAL_ sor kiválasztva: ",
                    //"metronicAjaxRequestGeneralError": "A kérés nem hajtható végre, ellenőrizze az internet kapcsolatot!",

                // data tables specific                
                "decimal":        "",
                "emptyTable":     "Nincs megjeleníthető adat!",
                "info":           "_START_ - _END_ elem &nbsp; _TOTAL_ elemből",
                "infoEmpty":      "Nincs megjeleníthető adat!",
                "infoFiltered":   "(Szűrve _MAX_ elemből)",
                "infoPostFix":    "",
                "thousands":      ",",
                "lengthMenu":     " _MENU_ elem/oldal",
                "loadingRecords": "Betöltés...",
                "processing":     "Feldolgozás...",
                "search":         "Keresés:",
                "zeroRecords":    "Nincs egyező elem",
                "paginate": {
                    "previous":   "Előző",
                    "next":       "Következő",
                    "last":       "Utolsó",
                    "first":      "Első",
                    "pageOf":     "&nbsp;/&nbsp;"
                },
                "aria": {
                    "sortAscending":  ": aktiválja a növekvő rendezéshez",
                    "sortDescending": ": aktiválja a csökkenő rendezéshez"
                }
            },

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js). 
            // So when dropdowns used the scrollable div should be removed. 
            // "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            //"bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.

            "columnDefs": [
                {"orderable": true, "searchable": false, "targets": 0},
                {"orderable": false, "searchable": false, "targets": 1},
                {"orderable": false, "searchable": false, "targets": 2},
                {"orderable": true, "searchable": true, "targets": 3},
                {"orderable": true, "searchable": true, "targets": 4},
                {"orderable": true, "searchable": true, "targets": 5},
                {"orderable": true, "searchable": false, "targets": 6},
                {"orderable": true, "searchable": false, "targets": 7},
                {"orderable": true, "searchable": false, "targets": 8},
                {"orderable": false, "searchable": false, "targets": 9},
                {"orderable": false, "searchable": false, "targets": 10},
            ],
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "Összes"] // change per page values here
            ],
            // set the initial value
            "pageLength": 15,
            "pagingType": "bootstrap_full_number",
            "order": [
                [0, "desc"]
            ] // set column as a default sort by asc

        });

/*
        var tableWrapper = jQuery('#property_wrapper');
        
        table.find('.group-checkable').change(function () {
            var set = jQuery(this).attr("data-set");
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                if (checked) {
                    $(this).attr("checked", true);
                    $(this).parents('tr').addClass("active");
                } else {
                    $(this).attr("checked", false);
                    $(this).parents('tr').removeClass("active");
                }
            });
            jQuery.uniform.update(set);
        });

        table.on('change', 'tbody tr .checkboxes', function () {
            $(this).parents('tr').toggleClass("active");
        });

        tableWrapper.find('.dataTables_length select').addClass("form-control input-sm input-inline"); // modify table per page dropdown
*/
    };

    var enableDisableButtons = function () {

        var deletePropertySubmit = $('button[name="delete_property_submit"]');
        var checkAll = $('input.group-checkable');
        var checkboxes = $('input.checkboxes');
        deletePropertySubmit.attr('disabled', true);
        checkboxes.change(function () {
            $(this).closest("tr").find('.btn-group a').attr('disabled', $(this).is(':checked'));
            deletePropertySubmit.attr('disabled', !checkboxes.is(':checked'));
        });
        checkAll.change(function () {
            checkboxes.closest("tr").find('.btn-group a').attr('disabled', $(this).is(':checked'));
            deletePropertySubmit.attr('disabled', !checkboxes.is(':checked'));
        });
    };

    var resetSearchForm = function () {
        $('#reset_search_form').on('click', function () {
            $(':input', '#property_search_form')
                    .not(':button, :submit, :reset, :hidden')
                    .val('')
                    .removeAttr('checked')
                    .removeAttr('selected');
        });
    };

    var changeKiemelesConfirm = function () {
        $('[id*=delete_kiemeles], [id*=add_kiemeles]').on('click', function (e) {
            e.preventDefault();
            var action = $(this).attr('data-action');
            var propertyId = $(this).attr('rel');
            //var url = $(this).attr('href');
            var elem = this;
            //var propertyName = $(this).closest("tr").find('td:nth-child(2)').text();

            bootbox.setDefaults({
                locale: "hu",
            });
            bootbox.confirm("Biztosan módosítani akarja az ingatlan kiemelését?", function (result) {
                if (result) {
                    changeKiemeles(propertyId, action, elem);
                }
            });
        });
    };

    var changeKiemeles = function (propertyId, action, elem) {
//console.log(elem);
        $.ajax({
            type: "POST",
            data: {
                id: propertyId,
                action: action
            },
            url: "admin/property/change_kiemeles",
            dataType: "json",
            beforeSend: function () {
                App.blockUI({
                    boxed: true,
                    message: 'Feldolgozás...'
                });
            },
            complete: function () {
                App.unblockUI();
            },
            success: function (result) {
                if (result.status == 'success') {
                    if (action == 'delete_kiemeles') {
                        $(elem).html('<i class="fa fa-plus"></i> Kiemelés');
                        $(elem).attr('data-action', 'add_kiemeles');
                        //$(elem).attr('href', 'admin/property/make_active');
                        $('#id_element_' + propertyId + ' span').remove();
                        
                        App.alert({
                            type: 'success',
                            //icon: 'warning',
                            message: "Az ingatlan kiemelése törölve!",
                            container: ajax_message,
                            place: 'append',
                            close: true, // make alert closable
                            reset: false, // close all previouse alerts first
                            //focus: true, // auto scroll to the alert after shown
                            closeInSeconds: 3 // auto close after defined seconds
                        });

                    }
                    else if (action == 'add_kiemeles') {
                        $(elem).html('<i class="fa fa-minus-circle"></i> Kiemelés törlése');
                        $(elem).attr('data-action', 'delete_kiemeles');
                        //$(elem).attr('href', 'admin/property/make_inactive');
                        $('#id_element_' + propertyId).append('<span class="label label-sm label-success">Kiemelt</span>');
                        
                        App.alert({
                            type: 'success',
                            //icon: 'warning',
                            message: "Az ingatlan kiemelve!",
                            container: ajax_message,
                            place: 'append',
                            close: true, // make alert closable
                            reset: false, // close all previouse alerts first
                            //focus: true, // auto scroll to the alert after shown
                            closeInSeconds: 3 // auto close after defined seconds
                        });

                    }

                } else {
                    console.log('Hiba: az adatbázis művelet nem történt meg!');
                    App.alert({
                        type: 'warning',
                        //icon: 'warning',
                        message: 'Adatbázis hiba! Az ingatlan státusza nem változott meg!',
                        container: ajax_message,
                        place: 'append',
                        close: true, // make alert closable
                        reset: false, // close all previouse alerts first
                        //focus: true, // auto scroll to the alert after shown
                        closeInSeconds: 3 // auto close after defined seconds
                    });                    
                }
            },
            error: function (result, status, e) {
                console.log(e);
            }
        });
    };

    var locationsInput = function () {

        //kerület és városrész option lista megjelenítése, ha a kiválasztott megye Budapest
        $("#megye_select").change(function () {
            var str = "";
            //option listaelem tartalom
            str = $("select#megye_select option:selected").text();
            // option listaelem value
            option_value = $("select#megye_select option:selected").val();

            // az érték üres lesz, ha a válassz elemet választjuk ki az option listából
            if (option_value !== '') {

                var county_id = $("#megye_select").val();

                $.ajax({
                    type: "post",
                    url: "admin/property/county_city_list",
                    data: "county_id=" + county_id,
                    beforeSent: function () {
                        App.blockUI({
                            boxed: true,
                            message: 'Feldolgozás...'
                        });
                    },
                    complete: function () {
                        App.unblockUI();
                    },
                    success: function (data) {
                        //console.log(data);
                        $("#varos_div > select").html(data);
                    }
                });

            }


        })
    };

    var enableDistrict = function () {

        //kerület és városrész option lista megjelenítése, ha a kiválasztott megye Budapest
        $("#megye_select").change(function () {
            var str = "";

            //option listaelem tartalom
            str = $("select#megye_select option:selected").text();
            // option listaelem value
            option_value = $("select#megye_select option:selected").val();


            // az érték üres lesz, ha a válassz elemet választjuk ki az option listából
            if (option_value === '5') {
                $('#district_select').prop("disabled", false);
            }
            else {
                $('#district_select').prop("disabled", true);
            }

        })
    };

    var printTable = function () {
        $('#print_property').on('click', function (e) {
            e.preventDefault();
            var divToPrint = document.getElementById("property");
            console.log(divToPrint);
//		divToPrint = $('#property tr').find('th:last, td:last').remove();
            newWin = window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        })

    };

    /**
     *	A részletek megjelenítéséhez használt modal
     *	AUTOMATIKUSAN ("HTML-elemmel" indul)
     */
/*    var handleModal = function () {
        $('#ajax_modal').on('hidden.bs.modal', function () {
            $('#modal_container').html('');
        });
    } */

    /**
     *	A részletek megjelenítéséhez használt modal
     *	JAVASCRIPT INDÍTÓVAL és SAJÁT MEGOLDÁSSAL működik
     */
    /* 
     var handleModal_2 = function() {
     //elindítja a folyamatot ha ráklikkel a részletek gombra
     $('.modal_trigger').on('click', function(e){
     e.preventDefault();
     var $id = $(this).attr('data-id');
     
     // AJAX kérés (a visszaadott html-t az ajax_modal elembe teszi (url, data, callback))
     $("#ajax_modal").load('admin/property/view_property_ajax', {"id": $id}, function(response, status, xhr) {
     if(status == 'success') {
     //a modal elem megjelenítése
     $("#ajax_modal").modal("show");
     } else {
     console.log('Hiba: ajax kérés nem sikerült!');
     }
     
     // ha ráklikkel a módosít gombra
     $('#job_update_button').on('click', function(){
     //$('#ajax_modal').modal("hide");
     window.location.href = 'admin/property/update/' + $id;
     });
     }); 
     });	
     }	
     */

    return {
//main function to initiate the module
        init: function () {
            if (!jQuery().dataTable) {
                return;
            }

            propertyTable();
            enableDisableButtons();
            resetSearchForm();
            changeKiemelesConfirm();
            printTable();
            // handleModal();
            enableDistrict();
            locationsInput();

           
            vframework.changeStatus({
                url: "admin/property/change_status"
            });

            vframework.deleteItems({
                table_id: "property",
                url: "admin/property/delete_property_AJAX",
                confirm_message: "Biztosan törölni akarja az ingatlant?"
            });

            vframework.hideAlert();




        }

    };
}();

$(document).ready(function () {
    Property.init(); // init property page
});