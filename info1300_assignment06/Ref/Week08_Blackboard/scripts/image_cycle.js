/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* A simple JavaScript file to swap images
*
*/

/* establish global variables */
/*global window, document*/

// variables
var index = 1;
var pix = ["joebraun_fillmore06.jpg", "107-awesome_small.jpg", "8s_T_Waterfalls_IMG_2600-1005x766_small.jpg"];
var main_image = document.getElementById('fall_image');

// functions
function pic_change() {
    "use strict";
    if (index < pix.length) {
        main_image.src = 'images/' + pix[index];
        index += 1;
    } else {
        index = 0;
        main_image.src = 'images/' + pix[index];
        index += 1;
    }
}

function pic_cycle() {
    "use strict";
    setInterval(pic_change, 3000);
}

// function call
pic_cycle();
