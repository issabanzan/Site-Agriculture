<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Carte</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <style>
            body{
                margin:0
            }
            #maCarte{
                height: 100vh;
            }
        </style>
    </head>
    <body>
        <div id="maCarte"></div>
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
        <script>
            var carte = L.map('maCarte').setView([47.5833, 1.3333], 9);
            
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
              
                attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                minZoom: 1,
                maxZoom: 30
            }).addTo(carte);

            let xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = () => {
                if(xmlhttp.readyState == 4){
                    if(xmlhttp.status == 200){
                        let donnees = JSON.parse(xmlhttp.responseText)
                        Object.entries(donnees.agences).forEach(agence => {
                            let marker = L.marker([agence[1].Latitude, agence[1].Longitude]).addTo(carte)
                            marker.bindPopup(agence[1].Reference)
                        })
                    }else{
                        console.log(xmlhttp.statusText);
                    }
                }
            }

            xmlhttp.open("GET", "agence/liste_simple.php");

            xmlhttp.send(null);
        </script>
    </body>
</html>