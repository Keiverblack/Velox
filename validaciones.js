function soloLetras(event) {
  var charCode = event.charCode; // Obtiene el código de la tecla presionada

  // 65-90 son letras mayúsculas, 97-122 son letras minúsculas
  // 32 es el espacio
  if (!((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode === 32)) {
    return false; // Si no es una letra o espacio, evita que se escriba
  }
  return true; // Si es una letra o espacio, permite que se escriba
}