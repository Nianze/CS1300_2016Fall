/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* A simple JavaScript file to open and close short blocks of text
*
*/

/* establish global variables */
/*global window, document, $, jQuery*/

$(document).ready(function () {
    // pragma
    "use strict";

    // change the DOM
    
    // hide some of the elements
    $("#fables").children(".fable").hide();
    $(".up").hide();
    $(".down").hide();
    
    // interactive effects
    $("#fables > h3").hover(function () {
        if ($(this).next().is(':hidden')) {
            $(this).children("span.down").show();
        }
    });
    $("#fables > h3").mouseout(function () {
        $(this).children("span.down").hide();
    });
    $("#fables > h3").click(function () {
        $("#fables").children(".fable").hide();
        $(this).children("span.down").hide();
        $(this).next().show();
    });
});