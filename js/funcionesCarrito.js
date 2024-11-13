function sumarCantidad(key) {
  const input = document.getElementById(key);
  input.value = parseInt(input.value) + 1;
}

function restarCantidad(key) {
  const input = document.getElementById(key);
  if (input.value > 0) {
    input.value = parseInt(input.value) - 1;
  }
}
