

/*


$(function () {

		// Obtain a canvas drawing surface from fabric.js

		// Create a text object.
		// Does not display it-the canvas doesn't
		// know about it yet.
		var hi = new fabric.Text('hello, world.', {
			left: canvas.getWidth() / 2,
			top: canvas.getHeight() / 2
		});

		// Attach it to the canvas object, then (re)display
		// the canvas.
		canvas.add(hi);

    fabric.Image.fromURL('images/background.png', function(img) {
      canvas.add(img.set({left:0, top:0, originX:'left', originY:"top",selectable: false}));
    });

  fabric.Image.fromURL('images/toilet.png', function(img) {
    canvas.add(img.set({left:300, top:300, originX:'left', originY:"top", selectable: false}).scale(.8));
  });


});
*/
var canvas = new fabric.Canvas('c');

var eggplant = document.getElementById('eggplant');
console.log(eggplant);
var drawegg = new fabric.Image(eggplant, {
  left:300, top:300, originX:'left', originY:"top", hasBorders: false,
hasControls: false,
hasRotatingPoint: false});

canvas.add(drawegg);



  //canvas.add(img.set({ left: 0, top: 1 }).scale(0.25));
