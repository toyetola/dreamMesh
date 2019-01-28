$.ajaxSetup({
    headers:
        {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
});
$(document).on('click', '.ti-close', function () {
    $(this).parent().remove();
});

$(document).on('click', '#filter', function (response) {
    var ths =$(this);
    var examtype = $('select[name="examtype"]').val();
    var qtype = $('select[name="qtype"]').val();
    var subject = $('select[name="subject"]').val();
    var year = $('select[name="year"]').val();
    var toSend = {'examtype':examtype, 'qtype':qtype, 'subject':subject, 'year': year};
    console.log(toSend);
    $.ajax({
        type: "POST",
        url: "/admin/searchForQuestions'",
        data: toSend,
        //contentType: "application/json; charset=utf-8",
        //dataType: "json",
        beforeSend: function () {
            ths.attr('disabled', true);
            ths.text('..processing');
        },
        success: function (response) {
            console.log(response);
            populateDataTable(response);
            ths.attr('disabled', false);
            ths.text('Filter');
            $(window).scrollTop(200);
        }
    });

});

function populateDataTable(data) {
    // clear the table before populating it with more data
    $("#table-1").DataTable().clear();
    var length = Object.keys(data.questions).length;
    for(var i = 0; i < length; i++) {
        var question = data.questions[i];

        // You could also use an ajax property on the data table initialization
        $('#table-1').dataTable().fnAddData( [
            i+1,
            question.question,
            question.options,
            question.answer,
            (question.question_image!==null? question.question_image: ''),
            "<button class='btn btn-sm btn-primary edit' data-id='"+question.id+"' data-question='"+question.question+"' data-ans='"+question.answer+"' data-image='"+question.question_image+"'  data-opt='"+question.options+"' data-toggle='modal' data-target='#exampleModal'>Edit</button> <button class='btn btn-sm btn-danger delete' data-toggle='modal' data-target='#confirmDelete' data-id='"+question.id+"' data-question='"+question.question+"' data-toggle='modal' data-target=''>Delete</button>"
        ]);
    }
}

var userId = "{{Auth::user()->id}}";

$(document).on('click', '.edit', function(){
    $('#theId').val($(this).data('id'));
    $('#quest').val($(this).data('question'));
    var question = $(this).data('question');
    $('#ans').val($(this).data('ans'));
    $('#opt').val($(this).data('opt'));
    $('#qimage').val($(this).data('image'));
    var img = $(this).data('image');
    if(img !== null){
        $('#takeExtra').empty();
        $('#takeExtra').append('<img src="/storage/'+userId+'/'+img+'" width="400px" height="300px">')
    }else{
        $('#takeExtra').empty();
        $('#takeExtra').append('<input type="file" id="qimage" name="qimage" class="form-control" accept="image/*">');
    }
});

$('form#editQn').on('submit', function (e) {
    e.preventDefault();
    //var dat = {question: $('#quest').val(), options: $('#opt').val(), ans:$('#ans').val(), qimage: $('#qimage').val };
    var formdata = new FormData(this);
    $.ajax({
        url: '/admin/editQuestion',
        type: 'POST',
        data: formdata,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function () {
        $('#submitEdit').attr("disabled", "disabled");
        $('#editQn').css("opacity", ".5");
    },
    success: function (response) {
        console.log(response);
        $('#submitEdit').removeAttr("disabled");
        $('#editQn').css("opacity", "");
        $('#msg').empty();
        if (response.questions !== null && response.status == 1) {
            $('#msg').empty();
            /*$('#msg').append('<div class="alert alert-success">\
             Questions updated successfully\
             <i class="pull-right ti-close"></i>\
             </div>');*/
            populateDataTable(response);
            $('#successmsg').modal('show');
            $('#showmsg').empty();
            $('#showmsg').append('Question successfully updated');
        }else if(response == "Not authorized"){
            location.href = "/sign-in"
        }else if(response.errors !== null){
            $('#msg').empty();
            $('#msg').append('<div class="alert alert-danger">\
                            Make sure the fields : question, answer and options are not empty\
                            <i class="pull-right ti-close"></i>\
                            </div>');
        }else {
            $('#msg').empty();
            $('#msg').append('<div class="alert alert-danger">\
                            Error in connection\
                            <i class="pull-right ti-close"></i>\
                            </div>');
        }
        $('#exampleModal').modal('toggle');
        $('html body').animate({scrollTop:40}, "fast");
    }
});
});

var del;

$(document).on('click', '.delete', function(){
    del = $(this);
    $('#getId').val($(this).data('id'));
    $('#tquest').text($(this).data('question'));
});

$(document).on('click', '#del', function(){
    var ths = $(this);
    $("#table-1").DataTable().row(del.parents('tr')).remove().draw();
    $.ajax({
        url: '/admin/deleteQuestion',
        type: 'POST',
        data: {id:$('#getId').val()},
    beforeSend: function () {
        ths.attr('disabled', true);
        ths.text('..processing');
    },
    success: function(resp) {
        console.log(resp);
        ths.attr('disabled', false);
        ths.text('Delete');
        if(resp == "success"){
            $('#confirmDelete').modal('toggle');
            $('#successmsg').modal('toggle');
            $('#showmsg').empty();
            $('#showmsg').append('Question successfully updated');
        }else{
            $('#msg').empty();
            $('#msg').append('<div class="alert alert-danger">\
                            Error in connection, please try again.\
                            <i class="pull-right ti-close"></i>\
                            </div>');
            $(window).scrollTop(0);
        }

    }
});
});
