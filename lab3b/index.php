<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />
</head>

<body style="background-color: pink;">
<div class="u-fixed-width">
  <div class="p-logo-section">
    <div class="p-logo-section__items">
      <div class="p-logo-section__item">
        <img class="p-logo-section__logo" src="https://www.auf.edu.ph/home/images/logo2.png" alt="Angeles University Foundation">
      </div>
    </div>
  </div>
</div>

<div class="row--50-50 grid-demo">
  <div class="col">
    <h4>File Upload</h4>

    <form action="uploaded.php" method="post" enctype="multipart/form-data">
        <div class="p-card">
            <h3>Text File</h3>
            <p class="p-card__content">
            <input type="file" name="text_file" accept=".txt" />
            </p>
        </div>

        <div class="p-card">
            <h3>PDF File</h3>
            <p class="p-card__content">
            <input type="file" name="pdf_file" accept=".pdf" />
            </p>
        </div>

        <div class="p-card">
            <h3>MP3 File</h3>
            <p class="p-card__content">
            <input type="file" name="mp3_file" accept=".mp3" />
            </p>
        </div>

        <div class="p-card">
            <h3>Image File</h3>
            <p class="p-card__content">
            <input type="file" name="image_file" accept="image/*" />
            </p>
            <img id="uploaded-image" style="display: none; max-width: 100%; height: auto;" alt="Uploaded Image">
        </div>

        <div class="p-card">
            <h3>Video File</h3>
            <p class="p-card__content">
            <input type="file" name="video_file" accept=".mp4" />
            </p>
            <video id="uploaded-video" style="display: none; max-width: 100%; height: auto;" controls>
                Your browser does not support the video tag.
            </video>
        </div>

        <div>
            <button type="submit">Upload</button>
        </div>
    </form>
  </div>
  <div class="col">
    <img class="p-logo-section__logo" src="https://www.auf.edu.ph/home/images/mascot/CCS.png" alt="College of Computing Studies">
  </div>
</div>

<script>
    document.querySelector('input[name="image_file"]').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const imgElement = document.getElementById('uploaded-image');
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imgElement.src = e.target.result;
                imgElement.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            imgElement.style.display = 'none';
        }
    });

    document.querySelector('input[name="video_file"]').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const videoElement = document.getElementById('uploaded-video');
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                videoElement.src = e.target.result;
                videoElement.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            videoElement.style.display = 'none';
        }
    });
</script>

</body>
</html>
