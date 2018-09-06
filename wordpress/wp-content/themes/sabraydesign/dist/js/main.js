//set the container that Masonry will be inside of in a var
var container = document.querySelector('#masonry-loop');
//create empty var msnry
var msnry;
// initialize Masonry after all images have loaded
imagesLoaded( container, function() {
    msnry = new Masonry( container, {
        itemSelector: '.post'
    });
});