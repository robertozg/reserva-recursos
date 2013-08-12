<!-- Original:  CodeLifter.com (support@codelifter.com) --> 
<!-- Web Site:  <a href="/visit/?http://www.codelifter.com" target="_blank">http://www.codelifter.com</a> --> 

<!-- Begin 
// Set slideShowSpeed (milliseconds) 
var slideShowSpeed = 5000; 
// Duration of crossfade (seconds) 
var crossFadeDuration = 3; 
// Specify the image files 
var Pic = new Array(); 
// to add more images, just continue 
// the pattern, adding to the array below 

Pic[0] = '../img/banner.png' 
Pic[1] = '../img/banner2.jpeg' 
Pic[2] = '../img/banner3.jpeg' 
//Pic[3] = '4.jpg' 
//Pic[4] = '5.jpg' 

// do not edit anything below this line 
var t; 
var j = 0; 
var p = Pic.length; 
var preLoad = new Array(); 
for (i = 0; i < p; i++) { 
preLoad = new Image(); 
preLoad.src = Pic; 
} 
function runSlideShow() { 
if (document.all) { 
document.images.SlideShow.style.filter="blendTrans(duration=2)"; 
document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
document.images.SlideShow.filters.blendTrans.Apply(); 
} 
document.images.SlideShow.src = preLoad[j].src; 
if (document.all) { 
document.images.SlideShow.filters.blendTrans.Play(); 
} 
j = j + 1; 
if (j > (p - 1)) j = 0; 
t = setTimeout('runSlideShow()', slideShowSpeed); 
} 
//  End --> 