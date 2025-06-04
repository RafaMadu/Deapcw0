<script>
function mostrarCampos() {
   var mbwayRadio = document.querySelector('input[value="mbway"]');
   var cartaoRadio = document.querySelector('input[value="cartao"]');
   var telemovelDiv = document.getElementById("mbway");
   var cartaoDiv = document.getElementByUd("cartao");

   if (mbwayRadio.checked) {
     telemovelDiv.style.display = "block";
     cartaoDiv.style.display = "none";
   }

   if (cartaoRadio.checked) {
     telemovelDiv.style.display = "none";
     cartaoDiv.style.display = "block";
   }
}
</script>
