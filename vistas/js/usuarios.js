$(".nuevaFoto").change(function(){
    var image = this.files[0]; 

   
    if (image["type"] != "image/jpeg" && image["type"] != "image/png") {
        $(".nuevaFoto").val("");
        swal({
            title: "Error al subir imagen",
            text: "La imagen debe estar en formato JPG o PNG",
            type: "error", 
            confirmButtonText: "Cerrar" 
        });
    } else if(image["size"] > 2000000) { 
        $(".nuevaFoto").val("");
        swal({
            text: "La imagen debe tener un tamaño máximo de 2MB",
            type: "error",
            confirmButtonText: "Cerrar" 
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