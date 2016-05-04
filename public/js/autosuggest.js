$(document).ready(function () {
    
    $("#suggest").keyup(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var search_term=$(this).val();
        
        
        $.ajax({
            url: '/autosuggestget',
            type: 'post',
            data: {search_term: search_term},
            success:function(data){
            $(".result").html(data);
            $(".result li").click(function(){
               var value=$(this).text();
               $("#suggest").val(value);
               $(".result").html("");
            });
        }
        
        
    });
});
});