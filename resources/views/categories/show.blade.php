<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="JavaScript image cropper.">
        <meta name="author" content="Chen Fengyuan">
        <title>Cropper.js</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/cropper.css') }}">
</head>
<body>
<div class="container">
    <h1>Upload cropped image to server</h1>
    <label class="label" data-toggle="tooltip" title="Change your avatar">
        <img class="rounded" id="avatar" src="https://avatars0.githubusercontent.com/u/3456749?s=160" alt="avatar">
        <input type="file" class="sr-only" id="input" name="image" accept="image/*">
    </label>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
    </div>
    <div class="alert" role="alert"></div>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Crop the image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/cropper.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://fengyuanchen.github.io/shared/google-analytics.js"></script>
<script>
    $(document).ready(function () {
        var avatar = document.getElementById('avatar');
        var image = document.getElementById('image');
        var input = document.getElementById('input');
        var $progress = $('.progress');
        var $progressBar = $('.progress-bar');
        var $alert = $('.alert');
        var $modal = $('#modal');
        var cropper;

        $('[data-toggle="tooltip"]').tooltip();

        input.addEventListener('change', function (e) {
            var files = e.target.files;
            var done = function (url) {
                input.value = '';
                image.src = url;
                $alert.hide();
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
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 3,
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });

        $('#crop').on('click', function (){
            var initialAvatarURL;
            var canvas;

            $modal.modal('hide');

            if (cropper) {
                canvas = cropper.getCroppedCanvas({
                    width: 160,
                    height: 160,
                });
                initialAvatarURL = avatar.src;
                avatar.src = canvas.toDataURL();
                $progress.show();
                $alert.removeClass('alert-success alert-warning');
                canvas.toBlob(function (blob) {
                    var formData = new FormData();

                    formData.append('avatar', blob, 'avatar.jpg');
                    $.ajax('store', {
                        method: 'GET',
                        _token: "{{ csrf_token() }}",
                        formData,
                        processData: false,
                        contentType: false,
                        xhr: function () {
                            var xhr = new XMLHttpRequest();

                            xhr.upload.onprogress = function (e) {
                                var percent = '0';
                                var percentage = '0%';

                                if (e.lengthComputable) {
                                    percent = Math.round((e.loaded / e.total) * 100);
                                    percentage = percent + '%';
                                    $progressBar.width(percentage).attr('aria-valuenow', percent).text(percentage);
                                }
                            };

                            return xhr;
                        },

                        success: function (request, status, error) {
                            console.log(request);
                        },

                        error: function (request, status, error) {
                            avatar.src = initialAvatarURL;
                            $alert.show().addClass('alert-warning').html(request.responseText);
                        },

                        complete: function () {
                            $progress.hide();
                        },
                    });
                });
            }
        });
    });
</script>
</body>
</html>
