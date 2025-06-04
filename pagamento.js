<script>
function mostrarCampos() {
   var mbway = document.querySelector('input[value="mbway"]');
   var cartao = document.querySelector('input[value="cartao"]');
   var divMbway = document.getElementById("mbway");
   var divCartao = document.getElementById("cartao");
   var metodoInput = document.getElementById("metodoEscolhido");

   if (mbway.checked) {
     divMbway.style.display = "block";
     divCartao.style.display = "none";
     metodoInput.value = "mbway";
   }

   else if (cartao.checked) {
     divMbway.style.display = "none";
     divCartao.style.display = "block";
     metodoInput.value = "cartao";
   }
}
</script>

window.onload = mostrarCampos;
