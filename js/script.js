
var image =document.getElementById('image2');
var imageArray = ['image/p1.jpg','image/p2.jpg','image/p3.jpg','image/p4.jpg','image/p5.jpg','image/p6.jpg','image/p7.jpg','image/p8.jpg','image/p9.jpg','image/p10.jpg','image/p11.jpg','image/p12.jpg','image/p13.jpg','image/p14.jpg','image/p15.jpg'];
var index = 0;

function changeImage(){
    image.setAttribute('src',imageArray[index]);
    index++;
    if(imageArray.length<=index){
        index = 0;
        
    }
}

setInterval(changeImage,1700);


