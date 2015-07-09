$(document).on('click', '.circArrow', function reviewsNext(){
//alert(begin_date);
    var countRev = $('#count_rev').attr('data-count-review');
    var colRev =  $('#col_rev').attr('data-col-revievs');
    countRev = parseInt(countRev);
    colRev = parseInt(colRev);
    if (colRev == countRev+1){
        var last = 'y';
    }
    else{
        var last = 'n';
    }
    jQuery.ajax({
        url: myajax.url, //url, к которому обращаемся
        type: "POST",
        data: "action=get_reviews&coun-rev="+countRev+"&last="+last, //данные, которые передаем. Обязательно для action указываем имя нашего хука
        success: function(data){
//возвращаемые данные попадают в переменную data
            $('.reviews').remove();
            jQuery('.reviewsBlock').append(data);
            if (colRev == countRev+1){
                $('#count_rev').attr('data-count-review',0);
            }
            else {
                $('#count_rev').attr('data-count-review', countRev + 1);
            }
        }
    });
});


