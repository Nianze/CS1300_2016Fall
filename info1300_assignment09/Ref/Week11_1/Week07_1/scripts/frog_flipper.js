/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* A simple JavaScript file to event handling
*
*/

/* establish global variables */
/*global window, document*/

function frog_flip(index) {
    "use strict";
    // variables
    var frog_images = ["frog-line-art-pixabella-Green-Frog-300px.png", "frog-pixabella-Green-Valentine-Frog-300px.png", "pixabella-Green-Valentine-Frog-with-pink-hearts-300px.png"],
        frog_image = document.getElementById('frog');
    // procedural code
    frog_image.src = 'images/' + frog_images[index];
}
