const images = document.querySelectorAll('.slideshow img');
let currentImage = 0;

function showImage(index) {
  images[currentImage].classList.remove('active');
  images[index].classList.add('active');
  currentImage = index;
}

function nextImage() {
  let index = currentImage + 1;
  if (index >= images.length) {
    index = 0;
  }
  showImage(index);
}

setInterval(nextImage, 5000); // Change image every 5 seconds
