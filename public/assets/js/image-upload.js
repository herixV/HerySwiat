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

    // Verifica si la imagen ya existe en el src y oculta el texto si es necesario
    if (previewImage.src && previewImage.src.trim() !== "" && !previewImage.src.includes('no-image')) {
        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";
    } else {
        previewDefaultText.style.display = "block";
        previewImage.style.display = "none";
    }

    imageUpload.addEventListener('change', function() {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            previewDefaultText.style.display = "none";
            previewImage.style.display = "block";

            reader.addEventListener("load", function() {
                previewImage.setAttribute("src", this.result);
            });

            reader.readAsDataURL(file);
        }
    });

    removeImageBtn.addEventListener('click', function() {
        imageUpload.value = '';
        previewImage.setAttribute("src", ""); // Borra la imagen mostrada
        previewDefaultText.style.display = "block";
        previewImage.style.display = "none";
    });
});
