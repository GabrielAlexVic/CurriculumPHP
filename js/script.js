function duplicarCampo(idCampo) {
    var campoOriginal = document.getElementById(idCampo);
    var novoCampo = campoOriginal.cloneNode(true);

    novoCampo.value = "";
    novoCampo.classList.add("mt-1");
    campoOriginal.parentNode.appendChild(novoCampo);
}