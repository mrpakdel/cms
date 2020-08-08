$(document).ready(function () {
    $('body .like').on('click' , function(){
        let table_id = $(this).data('table_id');
        let table = $(this).data('table');
        let user_id = $(this).data('user_id');
        let local = $(this).data('local');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'/'+local+'/addlike',
            type: 'POST',
            dataType: "JSON",
            data: {
                //my_data:my_form
                table_id:table_id,
                table:table,
                user_id:user_id,
            },
        }).done(function (data) {
            if (data.status == 1) {
                    $('#rate').html("");
                    $('#rate').html(data.rate);

            }

        }).fail(function () {

        });


    })
})

$(document).on('click','.answer',function () {
    let question_id = $(this).data('question_id');
    let local = $(this).data('local');
    get_answer(question_id,local);
    $(document).on('click' , '#send_answer', function () {
        let message = $('#message-text').html();
        if(message === ''){
            alert(10);
            $('#error').html('');
            $('#error').append('<span class="alert alert-danger">لطفا متن پاسخ را وارد کنید</span>');
        }else{
            $.ajaxError
        }
    })
})

function get_answer(question_id,local){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //if(question_id != ''){
        $.ajax({
            url:'/'+local+'/admin/comments/get_answer',
            type:"POST",
            dataType:"JSON",
            data:{
                question_id:question_id,
            }
        }).done(function (data) {
            if(data.status == 1){
                $('#message-text').html('');
                $('#message-text').html(data.text);
            }else{

            }
        })
    //}
}