var images =["dc12.jpg","dc13.jpg","dc91.jpg"];
var caption = ["caption for slide 1","caption for slide 1","caption for slide 1"];
var imageNumber = 0;
var imageLength = images. length-1;

function changeImage(x){
	imageNumber+= x;
	if (imageNumber > imageLength){
		imageNumber = 0;
	}
	if (imageNumber < 0){
		imageNumber = imageLength;
	}

	document.getElementById("slideshow").src = images[imageNumber];
	document.getElementById("caption").innerHTML = caption[imageNumber];

	return false;
}