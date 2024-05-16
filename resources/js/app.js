import Dropzone from "dropzone";
Dropzone.autoDiscover = false;



const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: 'Sube aqui tu imagen',
    acceptedFiles: ".png, .gif, .jpeg, .jpg",
    addRemoveLinks: true,
    maxFiles: 1,
    uploadMultiple: false,
});

dropzone.on('sending', function(file, xhr, formData) {
    
});

dropzone.on('success', function(file, response) {
    
});

dropzone.on('error', function(file, message) {
    
});

dropzone.on('removedfile', function() {
    
});


