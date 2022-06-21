function validar() {
    if (document.getElementById("nome").value.length != 0) return true
    alert("Por favor, preencha o campo nome.")
    return false;
}