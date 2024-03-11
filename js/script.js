function duplicarCampo(idCampo) {
    var campoOriginal = document.getElementById(idCampo);
    var novoCampo = campoOriginal.cloneNode(true);
    
    var novoNome = campoOriginal.name;
    var i = 2;
    // while(document.getElementsByName(campoOriginal.name)){
    //     novoNome = novoNome + i;
    //     i++;
    // }

    novoCampo.classList.add("mt-1");
    novoCampo.name = novoNome;
    campoOriginal.parentNode.appendChild(novoCampo);
}