/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* A simple JavaScript file to basic image swaps
*
*/

/* establish global variables */
/*global window, document*/

function image_swapper(pic_num) {
    "use strict";
    // variables
    var tree_images = ["tree_spring.png", "tree_summer.png", "tree_fall.png", "tree_winter.png", "tree_four.png"],
        tree_pic = document.getElementById('tree_image');
    // procedural code
    tree_pic.src = 'images/' + tree_images[pic_num];
}
