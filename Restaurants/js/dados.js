var data = '{"restaurant":[' +
'{"name":"Restaurante1", "cover":"", "distance":20, "rate":"XX" },' +
'{"name":"Restaurante2","rate":"XXX" },' +
'{"name":"Restaurante3","rate":"XXXX" }]}';


obj = JSON.parse(data);




document.getElementById("name").innerHTML = obj.restaurant[0].name;
