$(document).ready(function(){
    $("#submit").click(function(e){
        e.preventDefault();
        var firstName = $("#first_name").val();
        var lastName = $("#last_name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var confirmPassword = $("#confirm_password").val();
        
        $.ajax({
            url:'../Controller/register.php',
            data:{
                first_name: firstName,
                last_name: lastName,
                email: email,
                password: password,
                confirm_password: confirmPassword,
            },
            type:'POST',
            dataType:'JSON',
            success:function(response){
                console.log(response);
            }
        });

        });

        function getdata(){
            $.ajax({
            url:'../Controller/profile.php',
            
            type : 'GET',
            dataType :'JSON',
            success :function (response){

                //console.log(response[0].first_name);
                $("#name").html(
                    '<h1>'+response[0].first_name+'<h1>'
                      )

              }
         })
     }
     getdata();
});