$('.add_product_ajax').on('click', function() {

    let name, status, show_price, show_only, available_for_order, product_status, tags, body, description, slug, btn;
    let lang = $(this).data('lang');
    btn = $(this).attr('id');
    let back_url = $(this).attr('data-urlBack');
    console.log(back_url);
    let is_virtual = $("input[name=is_virtual]").val();
    name = $("#name").val();
    let error = 0;
    if (is_virtual == "on") {
        $('body').find('#name_error').html("please fill this field");
        //error = 1;

    } else {
        is_virtual = 0;
    }
    slug = $("#slug").val();
    if (slug == "") {
        $('body').find('#slug_error').html("please fill this field");
        //error = 1;

    }
    let category_product_id = [];
    $('.m-select2 :selected').map(function(i, el) {
        category_product_id[i] = $(el).val();
    }).get();
    if (category_product_id.length == 0) {
        //error = 1;
    }
    let code = $("input[name=code]").val();
    let ean_code = $("input[name=ean_code]").val();

    let upc_code = $("input[name=upc_code]").val();

    if ($('#status').is(':checked')) {
        status = 1;
    } else {
        status = 0;
    }

    if ($('#available_for_order').is(':checked')) {
        available_for_order = 1;
        show_price = 1;
        $('#show_price').trigger('click');
    } else {
        available_for_order = 0;
    }
    if ($('#show_price').is(':checked')) {
        show_price = 1;
    } else {
        show_price = 0;
    }

    if ($('#show_only').is(':checked')) {
        available_for_order = 0;
        show_only = 1;
    } else {
        show_only = 0;
    }


    product_status = $("#product_status").val();
    if (product_status == "") {
        $('body').find('#product_status_error').html("please fill this field");
    }
    description = $("#description").val();
    if (description == "") {
        $('body').find('#name_error').html("please fill this field");
    }
    tags = $("input[name=tags]").val();
    if (tags == "") {
        $('body').find('#name_error').html("please fill this field");
    }
    body = CKEDITOR.instances['body'].getData();
    if (error == 0) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/' + lang + '/admin/products/ajaxAdd',
            type: 'POST',
            dataType: "JSON",
            data: {
                //my_data:my_form
                is_virtual: is_virtual,
                lang: lang,
                name: name,
                code: code,
                ean_code: ean_code,
                upc_code: upc_code,
                category_product_id: category_product_id,
                status: status,
                available_for_order: available_for_order,
                show_price: show_price,
                show_only: show_only,
                product_status: product_status,
                tags: tags,
                description: description,
                body: body,
                btn: btn
            },
        }).done(function(data) {
            if (data.success == 1) {
                $(".update_product_ajax").attr("product", data.product_id);
                $(".update_dependencies_ajax").attr("product", data.product_id);
                $(".image_update").attr("product", data.product_id);
                swal({
                    position: "center",
                    type: "success",
                    showConfirmButton: !1,
                    timer: 1500
                });
                if (btn == "save") {
                    window.location.href = "" + back_url + "";
                }
            }

        }).fail(function() {

        });
    } else {

    }

});
$('.update_product_ajax').on('click', function() {

    let price, wholesale_price, product, back_url, lang, btn, quantity;
    product = $(this).attr('product');
    lang = $(this).data('lang');
    btn = $(this).attr('id');
    if ((product == "") || (product == 'undefined')) {
        swal({
            title: "بستن خودکار پیام!",
            text: "لطفا اول نام و دسته بندی محصول را وارد کنید\n",
            timer: 6e3,
            onOpen: function() {
                swal.showLoading()
            }
        }).then(function(e) {
            "timer" === e.dismiss
            window.location.href = "";
        })
    }

    back_url = $(this).attr('data-urlBack');
    price = $("#price").val();
    wholesale_price = $("#wholesale_price").val();
    quantity = $("#quantity").val();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/' + lang + '/admin/products/ajaxUpdate',
        type: 'POST',
        dataType: "JSON",
        data: {

            btn: btn,
            product: product,
            wholesale_price: wholesale_price,
            price: price,
            quantity: quantity,
        },
    }).done(function(data) {
        if (data.success == 1) {
            $(".update_dependencies_ajax").attr("product", dproduct);
            swal({
                title: "بستن خودکار پیام!",
                text: "من در 5 ثانیه بسته خواهم شد\n",
                timer: 6e3,
                onOpen: function() {
                    swal.showLoading()
                }
            }).then(function(e) {
                "timer" === e.dismiss
                if (btn == "save") {
                    window.location.href = "" + back_url + "";
                }
            });
        }

    }).fail(function() {

    });

})


$('.update_dependencies_ajax').on('click', function() {

    let product, back_url, lang, btn, manufacturer, supplier;
    product = $(this).attr('product');
    lang = $(this).data('lang');
    btn = $(this).attr('id');
    if ((product == "") || (product == 'undefined')) {
        swal({
            title: "بستن خودکار پیام!",
            text: "لطفا اول نام و دسته بندی محصول را وارد کنید\n",
            timer: 6e3,
            onOpen: function() {
                swal.showLoading()
            }
        }).then(function(e) {
            "timer" === e.dismiss
            window.location.href = "";
        })
    }

    back_url = $(this).attr('data-urlBack');
    supplier = $("#supplier_id").val();
    manufacturer = $("#manufacturer_id").val();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/' + lang + '/admin/products/ajaxUpdate',
        type: 'POST',
        dataType: "JSON",
        data: {

            btn: btn,
            product: product,
            supplier_id: supplier,
            manufacturer_id: manufacturer,
        },
    }).done(function(data) {
        if (data.success == 1) {

            swal({
                title: "بستن خودکار پیام!",
                text: "من در 5 ثانیه بسته خواهم شد\n",
                timer: 6e3,
                onOpen: function() {
                    swal.showLoading()
                }
            }).then(function(e) {
                "timer" === e.dismiss
                if (btn == "save") {
                    window.location.href = "" + back_url + "";
                }
            });
        }

    }).fail(function() {

    });

})

$(document).ready(function() {
    $('.file_drag_erea').on('dragover', function() {
        $(this).addClass('file_drag_over');
        return false;
    });
    $('.file_drag_erea').on('dragleave', function() {
        $(this).removeClass('file_drag_over');
        return false;
    });
    $('.file_drag_erea').on('drop', function(e) {
        e.preventDefault();
        $(this).removeClass('file_drag_over');
        var formData = new FormData();
        var files_list = e.originalEvent.dataTransfer.files;
        for (var i = 0; i < files_list.length; i++) {
            formData.append('file[]', files_list[i]);
        }
        var product_id = $('.update_product_ajax').attr('product');
        formData.append('product_id', product_id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/fa/admin/panel/upload_product_image",
            method: "POST",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                $('#uploaded_file').append(data.images);
                swal({
                    position: "center",
                    type: "success",
                    showConfirmButton: !1,
                    timer: 1500
                })
            }
        }).fail(function() {
            swal({
                position: "center",
                type: "warning",
                showConfirmButton: !1,
                timer: 1500
            })
        })


    })


});
$('.update_product').on('click', function() {

    let name, status, show_price, show_only, available_for_order, product_status, tags, body, description, slug, btn, product, lang;
    lang = $(this).data('lang');
    product = $(this).attr('product');
    btn = $(this).attr('id');
    let back_url = $(this).attr('data-urlBack');
    let is_virtual = $("input[name=is_virtual]").val();
    name = $("#name").val();
    let error = 0;
    if (is_virtual == "on") {
        $('body').find('#name_error').html("please fill this field");
        //error = 1;

    } else {
        is_virtual = 0;
    }
    slug = $("#slug").val();
    if (slug == "") {
        $('body').find('#slug_error').html("please fill this field");
        //error = 1;

    }
    let category_product_id = [];
    $('.m-select2 :selected').map(function(i, el) {
        category_product_id[i] = $(el).val();
    }).get();
    if (category_product_id.length == 0) {
        //error = 1;
    }
    let code = $("input[name=code]").val();
    let ean_code = $("input[name=ean_code]").val();

    let upc_code = $("input[name=upc_code]").val();

    if ($('#status').is(':checked')) {
        status = 1;
    } else {
        status = 0;
    }

    if ($('#available_for_order').is(':checked')) {
        available_for_order = 1;
        show_price = 1;
        $('#show_price').trigger('click');
    } else {
        available_for_order = 0;
    }
    if ($('#show_price').is(':checked')) {
        show_price = 1;
    } else {
        show_price = 0;
    }

    if ($('#show_only').is(':checked')) {
        available_for_order = 0;
        show_only = 1;
    } else {
        show_only = 0;
    }


    product_status = $("#product_status").val();
    if (product_status == "") {
        $('body').find('#product_status_error').html("please fill this field");
    }
    description = $("#description").val();
    if (description == "") {
        $('body').find('#name_error').html("please fill this field");
    }
    tags = $("input[name=tags]").val();
    if (tags == "") {
        $('body').find('#name_error').html("please fill this field");
    }
    body = CKEDITOR.instances['body'].getData();
    if (error == 0) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/' + lang + '/admin/products/ajaxUpdate',
            type: 'POST',
            dataType: "JSON",
            data: {
                //my_data:my_form
                is_virtual: is_virtual,
                lang: lang,
                name: name,
                code: code,
                ean_code: ean_code,
                upc_code: upc_code,
                category_product_id: category_product_id,
                status: status,
                available_for_order: available_for_order,
                show_price: show_price,
                show_only: show_only,
                product_status: product_status,
                tags: tags,
                description: description,
                body: body,
                btn: btn,
                product: product
            },
        }).done(function(data) {
            if (data.success == 1) {
                swal({
                    position: "center",
                    type: "success",
                    showConfirmButton: !1,
                    timer: 1500
                });
                if (btn == "save") {
                    window.location.href = "" + back_url + "";
                }
            }

        }).fail(function() {

        });
    } else {

    }

});

$('#uplod_img').on('change', function(e) {
    var names = [];
    var formData = new FormData();
    names = $(this).get(0).files;
    for (var i = 0; i < names.length; i++) {
        formData.append('file[]', names[i]);
    }
    var product_id = $('.update_product').attr('product');
    formData.append('product_id', product_id);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/fa/admin/panel/upload_product_image",
        method: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
            $('#uploaded_file').append(data.images);
            swal({
                position: "center",
                type: "success",
                showConfirmButton: !1,
                timer: 1500
            })
        }
    }).fail(function() {
        swal({
            position: "center",
            type: "warning",
            showConfirmButton: !1,
            timer: 1500
        })
    })
});


/*********PORTFOLIO**********************/

$('.add_product_ajax').on('click', function() {

    let name, tags, description, technology, lang, btn;
    lang = $(this).data('lang');
    btn = $(this).attr('id');
    let back_url = $(this).attr('data-urlBack');
    console.log(back_url);
    name = $("#name").val();
    let error = 0;
    let category_product_id = [];
    $('.m-select2 :selected').map(function(i, el) {
        category_product_id[i] = $(el).val();
    }).get();
    if (category_product_id.length == 0) {
        //error = 1;
    }
    let code = $("input[name=code]").val();
    let ean_code = $("input[name=ean_code]").val();

    let upc_code = $("input[name=upc_code]").val();

    if ($('#status').is(':checked')) {
        status = 1;
    } else {
        status = 0;
    }

    if ($('#available_for_order').is(':checked')) {
        available_for_order = 1;
        show_price = 1;
        $('#show_price').trigger('click');
    } else {
        available_for_order = 0;
    }
    if ($('#show_price').is(':checked')) {
        show_price = 1;
    } else {
        show_price = 0;
    }

    if ($('#show_only').is(':checked')) {
        available_for_order = 0;
        show_only = 1;
    } else {
        show_only = 0;
    }


    product_status = $("#product_status").val();
    if (product_status == "") {
        $('body').find('#product_status_error').html("please fill this field");
    }
    description = $("#description").val();
    if (description == "") {
        $('body').find('#name_error').html("please fill this field");
    }
    tags = $("input[name=tags]").val();
    if (tags == "") {
        $('body').find('#name_error').html("please fill this field");
    }
    body = CKEDITOR.instances['body'].getData();
    if (error == 0) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/' + lang + '/admin/products/ajaxAdd',
            type: 'POST',
            dataType: "JSON",
            data: {
                //my_data:my_form
                is_virtual: is_virtual,
                lang: lang,
                name: name,
                code: code,
                ean_code: ean_code,
                upc_code: upc_code,
                category_product_id: category_product_id,
                status: status,
                available_for_order: available_for_order,
                show_price: show_price,
                show_only: show_only,
                product_status: product_status,
                tags: tags,
                description: description,
                body: body,
                btn: btn
            },
        }).done(function(data) {
            if (data.success == 1) {
                $(".update_product_ajax").attr("product", data.product_id);
                $(".update_dependencies_ajax").attr("product", data.product_id);
                $(".image_update").attr("product", data.product_id);
                swal({
                    position: "center",
                    type: "success",
                    showConfirmButton: !1,
                    timer: 1500
                });
                if (btn == "save") {
                    window.location.href = "" + back_url + "";
                }
            }

        }).fail(function() {

        });
    } else {

    }

});


$(document).ready(function() {
    $('.file_drag_erea').on('dragover', function() {
        $(this).addClass('file_drag_over');
        return false;
    });
    $('.file_drag_erea').on('dragleave', function() {
        $(this).removeClass('file_drag_over');
        return false;
    });
    $('.file_drag_erea').on('drop', function(e) {
        e.preventDefault();
        $(this).removeClass('file_drag_over');
        var formData = new FormData();
        var files_list = e.originalEvent.dataTransfer.files;
        for (var i = 0; i < files_list.length; i++) {
            formData.append('file[]', files_list[i]);
        }
        var portfolio_id = $('.update_portfolio_ajax').attr('product');
        formData.append('portfolio_id', portfolio_id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/fa/admin/panel/upload_portfolio_image",
            method: "POST",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                $('#uploaded_file').append(data.images);
                swal({
                    position: "center",
                    type: "success",
                    showConfirmButton: !1,
                    timer: 1500
                })
            }
        }).fail(function() {
            swal({
                position: "center",
                type: "warning",
                showConfirmButton: !1,
                timer: 1500
            })
        })


    })


});

$(document).ready(function() {
    $('.madule').on('change', function() {
        let type_menu = $(this).val();
        let local = $(this).data('lang');
//        console.log(local);
        switch(parseInt(type_menu)){
            case 1:
                getCategoryProduct(local);
                break;
            case 2:
                getSingleProduct(local);
                break;
            case 3:
                getCategoryContent(local);
                break;
            case 4:
                getSingleContent(local);
                break;
            case 5 :
                outerLink(local);
                break;
            case 6:
                getCategoryGallery(local);
                break;
            case 7:
                getCategoryFiles(local);
                break;


        }
    })
});

const getCategoryContent =  function(local){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //alert(local);
    //var lang = local.toString();
    $.ajax({
        url:"/"+local+"/admin/categories/ajax_category",
        type:"POST",
        dataType: "JSON",
        data:{
            local:local,
        }
    }).done(function(data) {
        if (data.success == 1) {
            $('.content_ajax').html("");
            $('.content_ajax').html(data.categories);
        }

    }).fail(function() {

    });
}

const getCategoryGallery =  function(local){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //alert(local);
    //var lang = local.toString();
    $.ajax({
        url:"/"+local+"/admin/categoriesGallery/ajax_category",
        type:"POST",
        dataType: "JSON",
        data:{
            local:local,
        }
    }).done(function(data) {
        if (data.success == 1) {
            $('.content_ajax').html("");
            $('.content_ajax').html(data.categories);
        }

    }).fail(function() {

    });
}

const getCategoryProduct =  function(local){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //alert(local);
    //var lang = local.toString();
    $.ajax({
        url:"/"+local+"/admin/categoryProduct/ajax_category",
        type:"POST",
        dataType: "JSON",
        data:{
            local:local,
        }
    }).done(function(data) {
        if (data.success == 1) {
            $('.content_ajax').html("");
            $('.content_ajax').html(data.categories);
        }

    }).fail(function() {

    });
}

const getSingleProduct =  function(local){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //alert(local);
    //var lang = local.toString();
    $.ajax({
        url:"/"+local+"/admin/Products/ajax_single_product",
        type:"POST",
        dataType: "JSON",
        data:{
            local:local,
        }
    }).done(function(data) {
        if (data.success == 1) {
            $('.content_ajax').html("");
            $('.content_ajax').html(data.listProducts);
        }

    }).fail(function() {

    });
}

const getSingleContent =  function(local){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //alert(local);
    //var lang = local.toString();
    $.ajax({
        url:"/"+local+"/admin/contents/ajax_single_content",
        type:"POST",
        dataType: "JSON",
        data:{
            local:local,
        }
    }).done(function(data) {
        if (data.success == 1) {
            $('.content_ajax').html("");
            $('.content_ajax').html(data.listContent);
        }

    }).fail(function() {

    });
}

const outerLink = function (local){
    $('.content_ajax').html("");
    $('.content_ajax').html("<label for=\"\">آدرس</label>\n" +
        "                            <input type=\"text\" class=\"form-control m-input\" id=\"outer\" aria-describedby=\"linkHelp\" placeholder=\"\" name=\"link\" >");
}

const getCategoryFiles =  function(local){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //alert(local);
    //var lang = local.toString();
    $.ajax({
        url:"/"+local+"/admin/categoryfiles/ajax_category",
        type:"POST",
        dataType: "JSON",
        data:{
            local:local,
        }
    }).done(function(data) {
        if (data.success == 1) {
            $('.content_ajax').html("");
            $('.content_ajax').html(data.categories);
        }

    }).fail(function() {

    });
}

function trans(key, replace = {})
{
    let translation = key.split('.').reduce((t, i) => t[i] || null, window.translations);

    for (var placeholder in replace) {
        translation = translation.replace(`:${placeholder}`, replace[placeholder]);
    }
    console.log(translation);
    return translation;
}