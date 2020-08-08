var WizardDemo = function () {
    $("#m_wizard");
    var e, r, i = $("#m_form");
    console.log(i);
    return {
        init: function () {
            var n;
            $("#m_wizard"), i = $("#m_form"), (r = new mWizard("m_wizard", {startStep: 1})).on("beforeNext", function (r) {
                !0 !== e.form() && r.stop()
            }), r.on("change", function (e) {
                mUtil.scrollTop()
            }), r.on("change", function (e) {
                1 === e.getStep() && alert(1)
            }), e = i.validate({
                ignore: ":hidden",
                rules: {
                    is_virtual:{required: !0},
                    name: {required: !0},
                    status: {required: !0},
                    available_for_order: {required: !0, show_price: !0},
                    product_status: {required: !0},
                    body: {required: !0},

                },
                messages: {
                    "account_communication[]": {required: "You must select at least one communication option"},
                    accept: {required: "You must accept the Terms and Conditions agreement!"}
                },
                invalidHandler: function (e, r) {
                    mUtil.scrollTop(), swal({
                        title: "",
                        text: "در ارسال شما خطاهایی وجود دارد. لطفا آنها را اصلاح کنید.",
                        type: "error",
                        confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
                    })
                },
                submitHandler: function (e) {
                }
            }), (n = i.find('[data-wizard-action="submit"]')).on("click", function (r) {
                r.preventDefault(), e.form() && (mApp.progress(n), i.ajaxSubmit({
                    success: function () {
                        mApp.unprogress(n), swal({
                            title: "",
                            text: "The application has been successfully submitted!",
                            type: "success",
                            confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
                        })
                    }
                }))
            })
        }
    }
}();
jQuery(document).ready(function () {
    WizardDemo.init()
});