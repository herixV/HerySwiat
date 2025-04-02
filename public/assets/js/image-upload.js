// document.addEventListener('DOMContentLoaded', function() {
//     const imageUpload = document.getElementById('imageUpload');
//     const imagePreview = document.getElementById('imagePreview');
//     const previewImage = imagePreview.querySelector('.image-preview__image');
//     const previewDefaultText = imagePreview.querySelector('.image-preview__default-text');
//     const removeImageBtn = document.getElementById('removeImage');

//     imageUpload.addEventListener('change', function() {
//         const file = this.files[0];
        
//         if (file) {
//             const reader = new FileReader();
            
//             previewDefaultText.style.display = "none";
//             previewImage.style.display = "block";
            
//             reader.addEventListener("load", function() {
//                 previewImage.setAttribute("src", this.result);
//             });
            
//             reader.readAsDataURL(file);
//         }
//     });

//     removeImageBtn.addEventListener('click', function() {
//         imageUpload.value = '';
//         previewDefaultText.style.display = "block";
//         previewImage.style.display = "none";
//         previewImage.setAttribute("src", "");
//     });
// });
document.addEventListener('DOMContentLoaded', function() {
    const imageUpload = document.getElementById('imageUpload');
    const imagePreview = document.getElementById('imagePreview');
    const previewImage = imagePreview.querySelector('.image-preview__image');
    const previewDefaultText = imagePreview.querySelector('.image-preview__default-text');
    const removeImageBtn = document.getElementById('removeImage');
    const currentImage = document.getElementById('currentImage'); // Imagen existente desde la base de datos

    imageUpload.addEventListener('change', function() {
        const file = this.files[0];
        
        if (file) {
            const reader = new FileReader();
            
            previewDefaultText.style.display = "none";
            previewImage.style.display = "block";
            if (currentImage) {
                currentImage.style.display = "none"; // Ocultar la imagen existente
            }
            
            reader.addEventListener("load", function() {
                previewImage.setAttribute("src", this.result);
            });
            
            reader.readAsDataURL(file);
        }
    });

    removeImageBtn.addEventListener('click', function() {
        imageUpload.value = ''; // Limpiar el input de archivo
        previewDefaultText.style.display = currentImage ? "none" : "block"; // Mostrar texto predeterminado solo si no hay imagen existente
        previewImage.style.display = "none";
        previewImage.setAttribute("src", "");
        if (currentImage) {
            currentImage.style.display = "block"; // Restaurar la imagen existente
        }
    });
});