
var userid = localStorage.getItem("todo-userid");
$.ajax({
    url: "http://localhost/INFO3410/lab7/controllers/getUserTodos.php?userid="+userid,
    success : function(html) {
        $("#table").html(html);
    }
});
