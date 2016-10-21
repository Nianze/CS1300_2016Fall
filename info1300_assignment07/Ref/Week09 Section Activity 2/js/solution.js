/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* Solution to practice.js
*
*/

$(document).ready(function () {
    // pragma
    "use strict";

    // Change color
    $("#redButton").click(function() {
        $("#mainText").css("color", "red");
        $("#currentColor").text("red");
    });
    $("#blueButton").click(function() {
        $("#mainText").css("color", "blue");
        $("#currentColor").text("blue");
    });
    $("#greenButton").click(function() {
        $("#mainText").css("color", "green");
        $("#currentColor").text("green");
    });

    // Change display
    $("#slideUp").click(function() {
        $("#mainText").slideUp();
    });
    $("#slideDown").click(function() {
        $("#mainText").slideDown();
    });
    $("#slideToggle").click(function() {
        $("#mainText").slideToggle(1000);
    });

    $("#disappearingButtons button").click(function() {
        $(this).hide();
    })
    $("#resetButtons").click(function() {
        $("#disappearingButtons button").show();
    })
});
