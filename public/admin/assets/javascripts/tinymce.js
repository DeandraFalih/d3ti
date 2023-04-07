var csrf_token = $('meta[name="csrf-token"]').attr('content');

tinymce.init({
  selector: 'textarea[name="content"]',
  height: '1000px',
  content_css: 'img {object-fit: cover;}',
  plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tableofcontents footnotes mergetags autocorrect typography inlinecss',
  toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media | align lineheight | checklist numlist bullist indent outdent',
  menubar: false,
  branding: false,
  images_upload_handler: function (blobInfo) {
      return new Promise(function (resolve, reject) {
          var xhr, formData;
          xhr = new XMLHttpRequest();
          xhr.open('POST', 'http://localhost/d3ti/public/upload-image');
          xhr.setRequestHeader("X-CSRF-Token", csrf_token);
          xhr.onload = function () {
              var json;
              if (xhr.status < 200 || xhr.status >= 300) {
                  reject('HTTP Error: ' + xhr.status);
              }
              json = JSON.parse(xhr.responseText);
              if (!json || typeof json.location !== 'string') {
                  reject('Invalid JSON: ' + xhr.responseText);
              }
              resolve(json.location);
          };
          formData = new FormData();
          formData.append('file', blobInfo.blob(), blobInfo.filename());
          xhr.send(formData);
      });
      },
      images_upload_base_path: '/',
      images_upload_url: 'http://localhost/d3ti/public/upload-image',
  }).then(function () {
      console.log('TinyMCE initialized successfully.');
  }).catch(function (err) {
      console.error('Error initializing TinyMCE:', err);
  });