var loadMediaCarousel = function () {
  const mediaCarouselInner = document.getElementById('mediaCarouselInner');
  mediaCarouselInner.innerHTML = ''; // Clear existing carousel items

  for (let i = 0; i < mediaFiles.length; i++) {
    const media = mediaFiles[i];
    const carouselItem = document.createElement('div');
    carouselItem.classList.add('carousel-item', 'carousel-media');

    if (media.type.startsWith('image')) {
      const image = document.createElement('img');
      image.src = URL.createObjectURL(media);
      image.classList.add('d-block', 'w-100');
      carouselItem.appendChild(image);
    } else if (media.type.startsWith('video')) {
      const video = document.createElement('video');
      video.src = URL.createObjectURL(media);
      video.classList.add('d-block', 'w-100');
      video.controls = true;
      carouselItem.appendChild(video);
    }

    if (i === 0) {
      carouselItem.classList.add('active');
    }

    mediaCarouselInner.appendChild(carouselItem);
  }
};

document.getElementById('img-uploader-nprod').addEventListener('change', (e) => {
  mediaFiles = e.target.files;
  if (mediaFiles.length >= 3) {
    loadMediaCarousel();
  } else {
    alert('Por favor carga al menos 3 imágenes');
  }
});


const checkbox = document.getElementById('flexSwitchCheckDefault');
const priceInput = document.getElementById('priceinput');

checkbox.addEventListener('change', function () {
  if (this.checked) {
    priceInput.disabled = true; // Desactivar el input
  } else {
    priceInput.disabled = false; // Habilitar el input
  }
});

