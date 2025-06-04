<script>
    const checkbox = document.getElementById("mostrarCamposCheckbox");
    const campos = document.getElementById("campos");

    checkbox.addEventListener("change", function () {
      if (checkbox.checked) {
        campos.style.display = "block";
      } else {
        campos.style.display = "none";  
      }
    });
  </script>
