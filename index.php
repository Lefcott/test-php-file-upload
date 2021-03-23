<!DOCTYPE html>
<html>
  <head>
    <style>
      @font-face {
        font-family: "Oswald";
        src: url(/Oswald.ttf);
      }
      * {
        font-family: Oswald;
      }
      form {
        display: flex;
        flex-direction: column;
      }
      input {
        margin: 14px;
      }
    </style>
  </head>
  <body>
    <form
      action="add-overlay.php"
      method="post"
      enctype="multipart/form-data"
      onsubmit="handleSubmit()"
    >
      Seleccionar Video:
      <input type="file" name="video" />
      Seleccionar Watermark:
      <input type="file" name="image" />
      <input type="submit" value="Upload Image" name="submit" id="submit" />
    </form>
    <script>
      const handleSubmit = () => {
        const submit = document.getElementById("submit");
        submit.parentElement.removeChild(submit);
        const message = document.createElement("div");
        message.innerHTML = "estamos agregando el Watermark...";
        document.body.appendChild(message);
      };
    </script>
  </body>
</html>
