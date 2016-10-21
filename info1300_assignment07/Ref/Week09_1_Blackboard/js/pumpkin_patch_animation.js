/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* A simple JavaScript file to animate a pumpkin patch.
*
*/

/* establish global variables */
/*global window, document, $, jQuery, console*/

// functions
function ghoster() {
    // prgama
    "use strict";
    // variables
    var i;
    for (i = 0; i < 2; i++) {
        $("#ghost").fadeIn(2000).fadeOut(2000);
    }
    $("#ghost").animate({left: "500px"}, {duration: 4000, queue: false});
    $("#ghost").animate({top: "110px"}, {duration: 4000, queue: false});
}

function animate_pix() {
    // pragma
    "use strict";
    // run the animations
    $("#cloud").animate({left: "750px"}, 10000);
    ghoster();
}

function stop_all() {
    // pragma
    "use strict";
    // stop the animations
    $("#cloud").stop();
    $("#ghost").stop(true);
}

function un_do() { // notice I didn't say reset
    // pragma
    "use strict";
    // reverse the animations
    $("#cloud").animate({left: "0px"}, 100);
    $("#ghost").animate({left: "50px"}, 100);
    $("#ghost").animate({top: "205px"}, 100);
    $("#ghost").hide();
}


