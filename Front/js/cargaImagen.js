var loadFile = function(event) {
    var output = document.getElementById('#img-uploader');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

  const imagePreview= document.getElementById('#img-preview');
  const imageUploader= document.getElementById('#img-uploader');
  const file='';
  imageUploader.addEventListener('change',(e)=>{
    file= e.target.files[0];
    console.file;
  });
