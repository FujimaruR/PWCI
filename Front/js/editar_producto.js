var loadMediaCarousel = function () {
  const mediaCarouselInner = document.getElementById('mediaCarouselInner');
  mediaCarouselInner.innerHTML = '';

  for (let i = 0; i < mediaFiles.length; i++) {
    const media = mediaFiles[i];
    const carouselItem = document.createElement('div');
    carouselItem.classList.add('carousel-item', 'carousel-media');

    if (media.type.startsWith('image')) {
      const image = document.createElement('img');
      image.src = URL.createObjectURL(media);
      image.classList.add('d-block');
      image.style.maxWidth = '100%'; // Limitar el ancho al 100%
      image.style.maxHeight = '70%'; // Limitar la altura a 500px
      image.style.objectFit = 'cover';
      carouselItem.appendChild(image);
    } else if (media.type.startsWith('video')) {
      const video = document.createElement('video');
      video.src = URL.createObjectURL(media);
      video.classList.add('d-block', 'w-100');
      video.style.maxWidth = '100%'; // Limitar el ancho al 100%
      video.style.maxHeight = '100%'; // Limitar la altura a 500px

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

var input1 = document.getElementById("floatingInput");
var input2 = document.getElementById("priceinput");

input1.addEventListener("input", validarNumero);
input2.addEventListener("input", validarNumero);

function validarNumero() {
  var valor = parseFloat(this.value);

  if (valor <= 0 || isNaN(valor)) {
    this.value = 1;
  }
}
