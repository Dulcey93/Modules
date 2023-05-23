async function enviar(){
    let config = {
        method: "GET", 
        mode: 'cors',
        headers: {
            'Content-Type': 'application/json',
            'Access-Control-Allow-Origin': 'http://localhost'
        }
    }
    console.log(await (await fetch("http://marcosfenixphp.rf.gd/23_05_2023/model/api.php", config)).text());
}
enviar();