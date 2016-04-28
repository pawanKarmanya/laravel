
$(document).ready(function () {
    
    $("#emailAddress").on("keyup focusout", function () {

        var stringOfEmail = $("#emailAddress").val();
        var lengthOfEmail = stringOfEmail.length;
        var indexOfAt = stringOfEmail.indexOf("@");
        var indexofDot = stringOfEmail.lastIndexOf(".");
        var errorInEmail = 0;

        if (lengthOfEmail > 0)
        {

            if (indexOfAt >= 0 && indexofDot >= 0) {

                if (indexofDot <= indexOfAt) {
                    errorInEmail = 1;
                    $("#emailpara").html(". after @ and atleast two characters after .");
                    this.setCustomValidity(". after @ and atleast two characters after .");
                    $("#emailAddress").css("border", "1px solid red");
                }
                if (3 > (lengthOfEmail - indexofDot)) {
                    errorInEmail = 1;
                    this.setCustomValidity("Atleast two characters after .");
                    $("#emailpara").html("Atleast two characters after .");
                    $("#emailAddress").css("border", "1px solid red");
                }
                if ((indexofDot - indexOfAt) == 1) {
                    errorInEmail = 1;
                    $("#emailpara").html("No characters between @ and .");
                     this.setCustomValidity("No characters between @ and .");
                    $("#emailAddress").css("border", "1px solid red");
                }
                if (indexOfAt < 5) {
                    errorInEmail = 1;
                    
                     this.setCustomValidity("Atleast 5 characters before @");
                    $("#emailpara").html("Atleast 5 characters before @");
                    $("#emailAddress").css("border", "1px solid red");
                }


            } else {
                errorInEmail = 1;
                $("#emailpara").html("Email doesnot contain @ and . ");
                
                     $("#emailAddress")[0].setCustomValidity("Email doesnot contain @ and . ");
                $("#emailAddress").css("border", "1px solid red");
            }

        } else {
            errorInEmail = 1;
            $("#emailpara").html("Please enter the Email address");
            
                      $("#email")[0].setCustomValidity("Please enter the Email address");
            $("#emailAddress").css("border", "1px solid red");
        }
        if (errorInEmail == 0) {
            
                     this.setCustomValidity("");
            $("#emailpara").html('');
            $("#emailAddress").css("border", "");

        }
    });


//First name validation

    $("#firstName").on("keyup focusout", function () {
        
        var stringOfName = $("#firstName").val();
        var lengthOfFirstName = stringOfName.length;
        var firstNameValid = checkingNumber(stringOfName);

        var errorInName = 0;
        if (lengthOfFirstName <= 0) {
            errorInName = 1;
            $("#firstName")[0].setCustomValidity("Please enter first name");
            $("#firstnamepara").html("Please enter the First name");
            $("#firstName").css("border", "1px solid red");
        }
        if (firstNameValid == 0) {
            errorInName = 1;
            
            this.setCustomValidity("Please enter alphabets");
            $("#firstnamepara").html("Please enter alphabets");
            $("#firstName").css("border", "1px solid red");
        }
        if (errorInName == 0) {
            
            this.setCustomValidity("");
            $("#firstnamepara").html('');
            $("#firstName").css("border", "");
        }
    });

$("#confirmPassword").keydown(function(){
    var confirmPassword=$("#confirmPassword").val();
    var password=$("#password").val();
    
    if(password!=confirmPassword){
        
        $("#confirmpasswordpara").html("Password not matching");
        $("#confirmPassword").css("border","1px solid red");
        this.setCustomValidity("Password not matching");
    }
    else{
        
        $("#confirmpasswordpara").html("");
        $("#confirmPassword").css("border","");
        this.setCustomValidity("");
    }
    
});

    
//checking the character of the string

    function checkingNumber(stringname) {
        var i;
        var returnvalue;
        var number1;
        var lengthof = stringname.length;
        for (i = 0; i < lengthof; i++) {
            number1 = Number(stringname.charAt(i));

            if (!number1) {
                returnvalue = true;
            } else {
                return returnvalue = false;

            }
        }

        return returnvalue;
    }




    function charvalidforphone(stringnamephone) {
        var j;
        var number123;
        var lengthofphone = stringnamephone.length;

        for (j = 0; j < lengthofphone; j++) {
            number123 = Number(stringnamephone.charAt(j));

            if (!number123) {

                if (stringnamephone.charAt(j) == "0")
                {


                } else {
                    return false;
                }
            }
        }
        return true;
    }





});