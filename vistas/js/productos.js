$(".nuevaFoto").change(function(){
    var image = this.files[0]; // Corrected 'this.file' to 'this.files'

    // Validating the image format (jpg or png)
    if (image["type"] != "image/jpeg" && image["type"] != "image/png") {
        $(".nuevaFoto").val("");
        swal({
            title: "Error al subir imagen",
            text: "La imagen debe estar en formato JPG o PNG",
            type: "error", // Corrected 'Error' to 'error'
            confirmButtonText: "Cerrar" // Corrected 'confirmButttonText' to 'confirmButtonText'
        });
    } else if(image["size"] > 2000000) { // Checking image size (2MB)
        $(".nuevaFoto").val("");
        swal({
            text: "La imagen debe tener un tamaño máximo de 2MB", // Improved error message
            type: "error", // Corrected 'Error' to 'error'
            confirmButtonText: "Cerrar" // Corrected 'confirmButttonText' to 'confirmButtonText'
        });
    } else {
        var DatosImage = new FileReader();
        DatosImage.readAsDataURL(image);
        $(DatosImage).on("load", function(event){
            var rutaImagen = event.target.result;
            $(".previsualizar").attr("src", rutaImagen);
        });
    }
});