/*
* INFO/CS 1300
* Fall 2016
* Nianze Liu
*/

$(document).ready(function () {
    // pragma
    "use strict";
    // Animation
    // $("#move").click()
    $("#oh").click(function ghost() {   
        if ($("#ghost").css("display") == "none") {
            $("#ghost").fadeIn(3000);
        } 
        if ($("#ghost").css("opacity") == 1) {
            $("#ghost").fadeOut(3000);        
        }       
    })
    // Change display
    $("#hideMe").click(function () {
        $("footer").remove();
    })
});

function moveCar() {
    // pragma
    "use strict";    
    $("#car").animate({left: "+=500px"});    
}

function setSpringTheme() {
    // pragma
    "use strict";
    $("body").css("background-color", "#D8ECC3")
    $("nav").css("background-color", "#1C4905")
}

function setFallTheme() {
    // pragma
    "use strict";
    $("body").css("background-color", "#F4E4B1")
    $("nav").css("background-color", "#C85836")    
}