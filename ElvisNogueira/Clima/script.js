cidadeBusca = document.getElementById("texto_busca");

var resultObject;
var resultJson;
var temperatura = document.getElementById("temperatura");
var cidade = document.getElementById("cidade");
var clima = document.getElementById("clima");

var ajax = new XMLHttpRequest();

function buscarCidade(){
    var nomeCidade = cidadeBusca.value;
    ajax.open("GET","https://api.openweathermap.org/data/2.5/weather?q="+nomeCidade
                    +"&units=metric&lang=pt_br&appid=5436b115abe0b1440c7504d6b47b29f1", true);
    ajax.onreadystatechange = function (){     
        if(ajax.readyState === 4 && ajax.status === 200){
            resultJson = ajax.responseText;
            resultObject = JSON.parse(resultJson);
            cidade.innerText = resultObject.name;
            temperatura.innerText = parseInt(resultObject.main.temp)+"ºC";
            clima.innerText = resultObject.weather[0].description;
        }else if(ajax.readyState === 4 && ajax.status === 404){
            alert("Cidade não encontrada! Verifique se o nome dela está escrito corretamente!")
        }
    }

    ajax.send();
    
}
