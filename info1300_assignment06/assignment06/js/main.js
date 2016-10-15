/*
* INFO/CS 1300
* Fall 2016
* Nianze Liu
*/

// Global variables
var pokemon_images = ["togepi_family.jpg", "175Togepi.png", "176Togetic.png", "468Togekiss.png"];
var index = 0;

function image_loader(next_pic) {
    "use strict";
    // procedural code
    index += next_pic;
    if (index >= pokemon_images.length) {
        index = 0;
    }
    if (index < 0) {
        index = pokemon_images.length - 1;
    }    
    togepi_pic.src = 'images/' + pokemon_images[index];
};