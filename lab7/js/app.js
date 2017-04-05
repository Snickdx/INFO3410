$(document).ready(function(){
    const SERVER = "http://localhost:80/INFO3410/lab7/";

    $("#signupBtn").click(function(){
        var data = {
            username: $("#username").val(),
            password: $("#password").val(),
            email: $("#email").val()
        };
        $.post(SERVER+"/routes/signupAction.php", data, function(response) {
            response = JSON.parse(response);
            if(response.status == "success"){
                window.location.href = SERVER+"todo.php";
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
        $.post(SERVER+'routes/loginAction.php', data, function(response) {
            console.log(response);
            response = JSON.parse(response);
            console.log(response);
            if(response.status == "success"){
                window.location.href = SERVER+"todo.php";
                localStorage.setItem("todo-userid", response.userid);
            }else{
                alert("Invalid Login");
            }

        });
    });

    $("#formBtn").click(function(){

        var data = {
            userid: $("#userid").val(),
            todoText:  $("#todoText").val()
        };

        $.post(SERVER+'routes/todoAction.php', data, function(response) {
            console.log(response);
            loadToDos();
        });
    })

});