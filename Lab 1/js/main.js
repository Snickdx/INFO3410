//function definition
function hello(){

};

//declare a varable with var
var hello;

//object literals in js
var object = {
    "height":10,
    "name":"bob",
    "weight": 50,
    "hello":function(){
        console.log("hello")
    }
}

console.log(object.height);
console.log(object.weight);
object.hello();

//assign variable to an anonymous function
hello = function(){};

(function(){

    $ ( "#inputBtn" ).click(function() {
        var input ={};
        input.email = $("#inputEmail3").val();
        input.dob = $("#inputDate").val();
        
        console.log(input.email);
    });

})();