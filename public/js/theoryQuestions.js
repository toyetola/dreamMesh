(function ($) {
    var theoryContainer = $('.theoryContainer');
    var actionDiv2 = $('.actionButtons2');
    var previouss = '<button class="btn btn-info pull-left prevqt">Previous</button>';
    var nexts = '<button class="btn btn-info pull-right nextqt">Next</button>';
    var submit = '<button class="btn btn-danger pull-right submitq">Submit</button>';
    if(theoryContainer.length > 1){
        theoryContainer.each(function () {
            var nexquestionn = $(this).next();
            var previousquestionn =  $(this).prev();
            if(previousquestionn.length == 0){
                $(this).addClass('activeTheoryQuestion');
                actionDiv2.append(nexts);
            }else{
                $(this).addClass('hideThisQuestion');
            }
        });
    }else{
        theoryContainer.addClass('activeTheoryQuestion');
        actionDiv2.append(submit);
    }

    $(document).on('click', '.nextqt', function () {
        $(document).find('.activeTheoryQuestion').each(function () {
            var moveNextt =  $(this).next();
            if($(this).hasClass('activeTheoryQuestion')){
                $(this).removeClass('activeTheoryQuestion');
                $(this).addClass('hideThisQuestion');
//             if(moveNextt.length > 0){
                actionDiv2.empty();
                moveNextt.addClass('activeTheoryQuestion');
                moveNextt.removeClass('hideThisQuestion');
                if(moveNextt.next().length > 0 && moveNextt.next().hasClass('theoryContainer')){
                    actionDiv2.append(previouss);
                    actionDiv2.append(nexts);
                }else{
                    actionDiv2.append(previouss);
                    actionDiv2.append(submit);
                }

//             }
            }
        })
    });


    $(document).on('click', '.prevqt', function () {
        $(document).find('.activeTheoryQuestion').each(function () {
            var prevQuestionn =  $(this).prev();
            if($(this).hasClass('activeTheoryQuestion')){
                $(this).removeClass('activeTheoryQuestion');
                $(this).addClass('hideThisQuestion');
//            if(prevQuestion){
                actionDiv2.empty();
                prevQuestionn.removeClass('hideThisQuestion');
                prevQuestionn.addClass('activeTheoryQuestion');
                if(prevQuestionn.prev().length > 0 ){
                    actionDiv2.append(previouss);
                    actionDiv2.append(nexts);
                }else{
                    actionDiv2.append(nexts);
                }

//            }
            }
        })
    });


    $(document).on('click', '.btnqt', function () {
        var theId = $(this).data('target').toString();

        //alert(theId.substring(1));
        let verifyElement = $(document).find(theId);
        if(verifyElement){
            if(!$(theId).hasClass('activeTheoryQuestion')){
                $(document).find('.activeTheoryQuestion').each(function () {
                    var prevQuestion = $(this).prev();
                    var nextQuestion = $(this).next();
                    if($(this).hasClass('activeTheoryQuestion')){
                        $(this).removeClass('activeTheoryQuestion');
                        $(this).addClass('hideThisQuestion');
                    }
                });
                $(theId).addClass('activeTheoryQuestion');
                $(theId).removeClass('hideThisQuestion');
                actionDiv2.empty();
                if($(theId).next().length > 0  && $(theId).prev().length > 0 && $(theId).next().hasClass('theoryContainer')) {
                    actionDiv2.append(nexts);
                    actionDiv2.append(previouss);
                }
                /*else if($(theId).next() == 0){
                 actionDiv.append(submit)
                 }else if($(theId).prev() == 0){
                 actionDiv.append(next);
                 }*/
                else if($(theId).next().hasClass('actionButtons2')  && $(theId).prev().length > 0){
                    actionDiv2.append(previouss);
                    actionDiv2.append(submit);
                }
                else if($(theId).next().length > 0 && $(theId).prev().length == 0 && $(theId).next().hasClass('theoryContainer')){
                    actionDiv2.append(nexts);
                }


            }
        }
    });
})(jQuery)