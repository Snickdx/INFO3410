$(document).ready(function(){

    $("#signupBtn").click(function(){

        var data = {
            username: $("#username").val(),
            password: $("#password").val(),
            email: $("#email").val()
        };

        $.post('http://localhost:80/INFO3410/lab7/controllers/signupAction.php', data, function(response) {

            response = JSON.parse(response);

            if(response.status == "success"){
                window.location.href = "http://localhost:80/INFO3410/lab7/todo.php";
            }else{
                alert("error");
            }

        });
    });

    //Function Runs when the button is clicked
    $("#loginBtn").click(function(){

        //grabs data from the form elements
        var data = {
            username: $("#username").val(),
            password:  $("#password").val()
        };

        $.post('http://localhost/INFO3410/lab7/controllers/loginAction.php', data, function(response) {
            response = JSON.parse(response);
            if(response.status == "success"){
                window.location.href = "http://localhost:80/INFO3410/lab7/todo.php";
                localStorage.setItem("todo-userid", response.userid);
            }else{
                alert("Invalid Login");
            }

        });
    });

});