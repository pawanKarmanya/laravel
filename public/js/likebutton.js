$(document).ready(function () {

    $("#word").keyup(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        var word = $("#word").val();


        $.ajax({
            url: 'temperature',
            type: 'post',
            data: {word: word},
            success: function (data) {
                alert(data);
            }
        });



    });

});

function like(obj){
   var number=  $(obj).val();
   $("#"+number).html("h");
}