<script>
    const checkbox = document.getElementById("mostrarCamposCheckbox");
    const campos = document.getElementById("campos");

    checkbox.addEventListener("change", function () {
      formulario.style.display = checkbox.checked ? "block" : "none";
    });
 </script>
