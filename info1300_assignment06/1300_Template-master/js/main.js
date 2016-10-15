/*
* INFO/CS 1300
* Fall 2016
* Nianze Liu
*/
var pokemon_images = ["togepi_family.jpg", "175Togepi.png", "176Togetic.png", "468Togekiss.png"];
var togepi_pic = document.getElementById('pokemon_image');
var index = 0;

function image_loader(next_pic) {
    "use strict";
    // procedural code
    if (next_pic == 1) {
        index += 1;
        if (index >= pokemon_images.length) {
            index = 0;
        }
    }
    if (next_pic == 0) {
        index -= 1;
        if (index < 0) {
            index = pokemon_images.length;
        }
    }
    togepi_pic.src = 'images/' + pokemon_images[index];
}