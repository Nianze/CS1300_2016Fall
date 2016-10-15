/*
* INFO/CS 1300
* Fall 2016
*
* A simple JavaScript file to append the date to a footer
*
*/

window.onload = function date_and_season() {
    "use strict";
    // variables
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        weekNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        // get pieces of date
        full_date = new Date(),        
        this_month_text = monthNames[full_date.getMonth()],
        // this_month_text = "March",
        today = full_date.getDate(),
        this_year = full_date.getFullYear(),
        // set information up for insertion into DOM tree
        new_span = document.createElement('span'),
        new_text = document.createTextNode(today  + ' ' + this_month_text + ' ' + this_year),
        position = document.getElementsByTagName('footer')[0];
    // append date to footer
    new_span.appendChild(new_text);
    position.appendChild(new_span);
};


