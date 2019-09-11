<template>
   <div class="container">

    <label class="label"  title="" data-original-title="Change your avatar">
      <input type="file" class="sr-only" id="input" name="avatar" >
    </label>
    <div class="alert1" role="alert1"></div>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" >
            <h5 class="modal-title" id="modalLabel">Crop the image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="img-container">
              <img id="avatar" src="https://avatars0.githubusercontent.com/u/3456749">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="crop">Загрузить</button>
          </div>
        </div>
      </div>
    </div>
  </div>
   
</template>



<script>
    export default {
        mounted() {
            console.log('Component mounted.'),
            window.addEventListener('DOMContentLoaded', function () {
            var avatar = document.getElementById('avatar');
            var image = document.getElementById('image');
            var input = document.getElementById('input');
            var uploadCanvas = null;
            var $alert1 = $('.alert1');
            var $modal = $('#modal');
            var cropper;
            var filename = document.getElementById('filename');
            filename = filename.value;
            var logo ='';
            if(filename == 'logo'){
              logo = '/volunteer/settings/avatar';
            }else{
              logo ='/user/profile/settings/avatar';
            }
            
            $('[data-toggle="tooltip"]').tooltip();

            input.addEventListener('change', function (e) {
                var files = e.target.files;
                var done = function (url) {
                avatar.src = url;
                $alert1.hide();
                $modal.modal('show');
                };
                var reader;
                var file;
                var url;

                if (files && files.length > 0) {
                file = files[0];

                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                    done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
                }
            });

            $modal.on('shown.bs.modal', function () {
                cropper = new Cropper(avatar, {
                aspectRatio: 1,
                viewMode: 3,
                });
            }).on('hidden.bs.modal', function () {
                cropper.destroy();
                cropper = null;
            });

            document.getElementById('crop').addEventListener('click', function () {
            
                var canvas;

                $modal.modal('hide');

                if (cropper) {
                canvas = cropper.getCroppedCanvas({
                    width: 160,
                    height: 160,
                });
                
 
                image.src = canvas.toDataURL();
                $alert1.removeClass('alert1-success alert1-warning');
                }
                
                canvas.toBlob(function (blob) {
                var formData = new FormData();
                formData.append(filename, blob, filename+'.jpg');
                uploadCanvas = formData;
                });
            }),
             document.getElementById('updateAvatar').addEventListener('click', function () {
               axios.post(logo,uploadCanvas)
                        .then(res => {console.log(res)});  
                });
            
            })
        }
    }

</script>


