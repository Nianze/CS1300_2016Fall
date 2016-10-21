/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* Section week 9 activity
*
*/

$(document).ready(function () {
    // pragma
    "use strict";

    /*
    *  Clicking the button with id redButton should:
    *  1) Change the button color to red
    *  2) Change "The text is currently black." to "The text is currently red."
    */
    $("#redButton").click(function () {
        $("#mainText").css("color", "red");
        $("#currentColor").text("red");
    });
    // TODO: Write a similar function for the blue button below:

    // TODO: Write a similar function for the green button below:


    // Change display
    //TODO: Write a function that will hide the text with an upwards sliding motion when Hide Text is clicked.
    $("#slideUp").click(function () {

    });
    //TODO: Write a function that will show the text with an upwards sliding motion when the Show Text button is clicked.
    $("#slideDown").click(function () {
 
    });

    /* 
    *  TODO: Write a function for Toggle Text:
    *
    *  Clicking the Toggle Text button should: 
    *  1) Show the text if the text has been hidden
    *  2) Hide the text if the text is shown 
    *  Note: Set the duration to 1000
    */
    $("#slideToggle").click(function () {

    });


    // TODO: Write a function that will make a button disappear when it is clicked.
    $("#disappearingButtons button").click(function () {

    });

  
    // TODO: Write a function that will make all hidden buttons reappear when the Reset Buttons button is clicked.

    $("#resetButtons").click(function () {
    
    });
});
