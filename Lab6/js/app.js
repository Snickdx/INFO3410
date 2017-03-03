$(document).ready(function(){

    $("#formBtn").click(function(){
        //TEST
        //making an object literal
        var data = {
            username:"bob",
            password:"bob",
            email:"bob@gmail.com"
        };//empty object

        //or we can assign properties later
        // data.username = "bob";
        // data.password = "bob";
        // data.email ="bob@gmail.com"

        $.post('http://localhost:80/INFO3410/lab5/signupAction.php', data, function(response) {
            // Log the response to the console
            console.log("Response: "+response);
            var obj = JSON.parse(response);
            console.log(obj.status == "success");
            if(obj.status == "success"){
                window.location.href = "http://localhost:80/INFO3410/lab5/profile.php";
            }else{
                window.location.href = "http://localhost:80/INFO3410/lab5/signup.php";
            }
        
        });
    });

    $("#loginBtn").click(function(){
        //TEST
        //making an object literal

        var data = {
            username: $("#username").val(),
            password:  $("#password").val()
        };

        console.log(data);

        $.post('http://localhost:80/INFO3410/lab6/loginAction.php', data, function(response) {
            // Log the response to the console
            console.log("Response: "+response);
         

        });
    });

});