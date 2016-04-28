$(document).ready(function(){
    
    $("#imageupload").change(function(){
    
    var filesize=$("#imageupload")[0].files[0].size;
    var error=0;
    var valueimage=$("#imageupload").val();
    var indexofdot=valueimage.indexOf(".");
    var str=valueimage.slice(indexofdot);
    
    if(str==".jpeg"||str==".jpg"||str==".png"||str==".gif"){
     $("#imageerror").html("");   
     this.setCustomValidity("");
     
    }
    else{
        error=1;
        this.setCustomValidity("Not an image file ");
     $("#imageerror").html("not an image");
     $("#imageerror").css('color','red');
     $("#imageupload").css("border", "1px solid red");
    }
    if(filesize>2000000){
       error=1;
     $("#imageerror").html("File too large"); 
     $("#imageupload").css("border", "1px solid red");
     $("#imageerror").css('color','red');
     this.setCustomValidity("File too large");   
    }
    
    if(error==0){
        $("#imageupload").css("border", "");
        $("#imageerror").html("");   
     this.setCustomValidity("");
    }
    
});


});