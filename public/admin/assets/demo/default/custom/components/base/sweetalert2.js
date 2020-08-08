var SweetAlert2Demo = {
    init: function () {
        $("#m_sweetalert_demo_1").click(function (e) {
            swal("خیلی هم خوب")
        }), $("#m_sweetalert_demo_2").click(function (e) {
            swal("اینجا عنوان است!", "و متن اینجاست!")
        }), $("#m_sweetalert_demo_3_1").click(function (e) {
            swal("خیلی هم خوب", "شما بر روی دکمه کلیک کرده اید!", "warning")
        }), $("#m_sweetalert_demo_3_2").click(function (e) {
            swal("خیلی هم خوب", "شما بر روی دکمه کلیک کرده اید!", "error")
        }), $("#m_sweetalert_demo_3_3").click(function (e) {
            var title_sweet  = $(".title_sweet").data('title_sweet')
            var message_sweet  = $(".title_sweet").data('messagesweet')
            swal(title_sweet, message_sweet, "success")
        }), $("#m_sweetalert_demo_3_4").click(function (e) {
            swal("خیلی هم خوب", "شما بر روی دکمه کلیک کرده اید!", "info")
        }), $("#m_sweetalert_demo_3_5").click(function (e) {
            swal("خیلی هم خوب", "شما بر روی دکمه کلیک کرده اید!", "question")
        }), $("#m_sweetalert_demo_4").click(function (e) {
            swal({
                title: "خیلی هم خوب",
                text: "شما بر روی دکمه کلیک کرده اید!",
                icon: "success",
                confirmButtonText: "منو تایید کن\n!",
                confirmButtonClass: "btn btn-focus m-btn m-btn--pill m-btn--air"
            })
        }), $("#m_sweetalert_demo_5").click(function (e) {
            swal({
                title: "خیلی هم خوب",
                text: "شما بر روی دکمه کلیک کرده اید!",
                icon: "success",
                confirmButtonText: "<span><i class='la la-headphones'></i><span>من یک بازی هستم!</span></span>",
                confirmButtonClass: "btn btn-danger m-btn m-btn--pill m-btn--air m-btn--icon",
                showCancelButton: !0,
                cancelButtonText: "<span><i class='la la-thumbs-down'></i><span>نه, ممنون</span></span>",
                cancelButtonClass: "btn btn-secondary m-btn m-btn--pill m-btn--icon"
            })
        }), $("#m_sweetalert_demo_6").click(function (e) {
            swal({
                position: "top-right",
                type: "success",
                title: "کار شما ذخیره شده است",
                showConfirmButton: !1,
                timer: 1500
            })
        }), $("#m_sweetalert_demo_7").click(function (e) {
            swal({
                title: "جی کوئری",
                html: $("<div>").addClass("some-class").text("جی کوئری در همه جا"),
                animation: !1,
                customClass: "animated tada"
            })
        }), $("#m_sweetalert_demo_8").click(function (e) {
            swal({
                title: "آیا مطمئن هستید؟",
                text: "در صورت تایید دیگه امکان بازیابی نیست",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "بله پاک شود!"
            }).then(function (e) {
                e.value && swal("فایل مورد نظر با موفقیت حذف شد", "موفیت آمیز")
            })
        }), $(".m_sweetalert_demo_9").on('click',function (e) {
            let title = $(this).data('title');
            let text = $(this).data('text');
            let route = $(this).data('route');
            let confirm = $(this).data('confirm');
            let cancel = $(this).data('cancel');
            let item_id = $(this).data('id');
            let lang = $(this).data('lang');
            swal({
                title: title,
                text: text,
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: confirm,
                cancelButtonText: cancel,
                reverseButtons: !0
            }).then(function (e) {
                if(e.value){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url:'/'+lang+'/admin/'+route+'/'+item_id,
                        type: 'DELETE',
                        dataType: "JSON",
                        contentType: "application/json",
                        data: {
                            "content": item_id,
                        },
                    }).done(function (data) {
                        if (data.status) {
                            $(this).parent().remove();
                            swal("حذف شد!", "فایل مورد نظر حذف شد", "موفقیت آمیز")
                        }

                    }).fail(function () {
                        "vvv" === e.dismiss && swal("لغو شده", "فایل خیالی شما امن است\n :)", "error")
                    });
                }
               // e.value ? swal("حذف شد!", "فایل مورد نظر حذف شد", "موفقیت آمیز") : "vvv" === e.dismiss && swal("لغو شده", "فایل خیالی شما امن است\n :)", "error")
            })
        }), $("#m_sweetalert_demo_10").click(function (e) {
            swal({
                title: "اسویت!",
                text: "می توانید یک عکس سفارشی بزارید.",
                imageUrl: "https://unsplash.it/400/200",
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: "Custom image",
                animation: !1
            })
        }), $("#m_sweetalert_demo_11").click(function (e) {
            swal({
                title: "بستن خودکار پیام!", text: "من در 5 ثانیه بسته خواهم شد\n", timer: 5e3, onOpen: function () {
                    swal.showLoading()
                }
            }).then(function (e) {
                "timer" === e.dismiss && console.log("من با تایمر بسته شدم\n")
            })
        })
    }
};
jQuery(document).ready(function () {
    SweetAlert2Demo.init()
});