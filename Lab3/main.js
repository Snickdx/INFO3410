"use strict";
var $ = window.jQuery,
    functions = {
        "nouns" : retrieveNouns,
        "names" : retrieveNames,
        "" : handleNoOption
    };

// the following code will be executed when the 
$(window.document).ready(function(){
    // Set up function to run on selected event of drop down
    $("#select_options").change(handleSelectChange);
});

function handleSelectChange(){
    var option = $("#select_options").find(":selected").val();
    // console.log(option);
    // var func = functions[option];
    // func();

    if (option === "nouns")retrieveNouns();
    else if(option === "names")retrieveNames();
    else handleNoOption();
}


function retrieveNouns(){
    console.log("Retrieve Nouns Was Executed");
}

function displayNouns(nouns_array){
    console.log(nouns_array);
    var $sec = $("#table_recs_sec").html(""); // Reset the space by making content empty
}

function retrieveNames(){
    console.log("Retrieve Names was Executed");
}

function displayNames(names_array){
    console.log(names_array);
    var $sec = $("#table_recs_sec").html(""); // Reset the space by making content empty
}

function handleNoOption(){
    swal("Data Selection", "Must Select One of the Two Option", "error");
}