// Global variables
var festival_images = ["images-1.jpg", "images-2.jpg", "images-3.jpg", "images-4.jpg"];
var index = 0;

function image_loader(next_pic) {
    "use strict";
    // procedural code
    index += next_pic;
    if (index >= festival_images.length) {
        index = 0;
    }
    if (index < 0) {
        index = festival_images.length - 1;
    }    
    festivalPic.src = 'images/' + festival_images[index];
};