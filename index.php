<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload photo</title>
    <style>
      .invisible
      {
        display: none;
      }
    </style>
  </head>
  <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>Выберите изображение</p>
        <p><input id="uploadInput" type="file" name="picture"/></p>

        <input id="send" type="submit" value="загрузить">

        <div id="fileinfo"></div>
        <div id="message"></div>
    </form>

<script>
function updateSize() {
  var file = document.getElementById("uploadInput").files[0],
    ext = "не определилось",
    parts = file.name.split('.');
  if (parts.length > 1) ext = parts.pop();
  document.getElementById("fileinfo").innerHTML = [
    "Размер файла: " + file.size + " B",
    "Расширение: " + ext,
    "MIME тип: " + file.type
  ].join("<br>");
if(file.size<4000000)
{
  document.getElementById("send").classList.remove('invisible');
  document.getElementById("message").innerHTML="можете грузить<br/>";
}
else
{
  document.getElementById("send").classList.add('invisible');
  document.getElementById("message").innerHTML="слишком большой файл<br/>";
}

}

document.getElementById('uploadInput').addEventListener('change', updateSize);
</script>

  </body>
</html>
