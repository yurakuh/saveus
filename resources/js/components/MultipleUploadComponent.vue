<template>
   <div class="container">

    <label class="label"  data-original-title="Change your avatar">
        
    </label>
    <input type="file" class="btn btn-success" id="input" name="petimages[]" multiple title="Загрузите сразу несколько изображения нажав ctrl">
  </div>
   
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.'),
            window.addEventListener('DOMContentLoaded', function () {
            var petimage = document.getElementById('petimage');
            var input = document.getElementById('input');
            
            
            input.addEventListener('change', function (e) {
                var files = e.target.files;
                var reader;
                var file;
                var url;
                var done = function (url) {
                    var img = document.createElement("img");
                    img.setAttribute("width", "200");
                    img.src = url; 
                    var div = document.createElement("div");
                    div.setAttribute("class", "photos align-self-stretch col");
                    div.appendChild(img);
                    
                    document.getElementById("newphotos").appendChild(div);  
                }
                if (files && files.length > 0) {
                    $('#newphotos').empty();
                    for (let i = 0; i < files.length; i++) {
                        file = files[i];
                        done(URL.createObjectURL(file));
                    }
                };



             
            
            });
        });
    }
    }

</script>


