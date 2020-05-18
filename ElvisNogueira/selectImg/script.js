var imagem = document.getElementById("imagem")
document.getElementById("arquivo").onchange = function(e){
    var arquivo = e.target.files[0];
    
    formulario = new FormData();
    formulario.append("img",arquivo);

    var ajax = new XMLHttpRequest();
    ajax.open("POST","receber.php", true);

    ajax.onreadystatechange = function (){
        alert(ajax.readyState+" "+ajax.status)
        if(ajax.readyState === 4 && ajax.status === 200){
            imagem.src = ajax.responseText;
            alert("aqui")
        }    
    }
    
    ajax.send(formulario);

}