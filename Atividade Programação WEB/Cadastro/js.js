function validar() {
    var dados = document.getElementsByClassName('inpute')
    var vazio = false

    for (let i = 0; i < dados.length; i++)
        if (dados[i].value == 0) {
            vazio = true
            break
        }

    if (!vazio) return true
    alert("Por favor, preencha todos os campos.")
    return false

    
}