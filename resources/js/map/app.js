
/*
 * Chargement de la carte
 */

let map = new L.Map("map", {
    center: new L.LatLng(44.837528228759766, -0.5740066766738892),
    zoom: 10
});

/*
 * Affiche le layer de la carte
 */

let layer = new L.tileLayer("//stamen-tiles-{s}.a.ssl.fastly.net/terrain/{z}/{x}/{y}.jpg", {
    attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> — Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
        subdomains: 'abcd',
        maxZoom: 20,
        minZoom: 0,
        label: 'Terrain Lite'  // Libellé pour le tooltip en option
});
map.addLayer(layer);

/*
 * Création des markers sur la cartes
 */



function marker (lat, lng, titre, place_restante, email, phone, address){

    let chaine = titre +';'+ place_restante +';'+ email +';'+ phone +';'+ address


     L.marker([lat, lng], {alt:chaine}).addTo(map)

}


Array.from(document.querySelectorAll('.js-marker')).forEach((item) =>{
    marker(item.dataset.lat, item.dataset.lng, item.dataset.title, item.dataset.place_restante, item.dataset.email, item.dataset.phone, item.dataset.address)
})

/*
 * Lancement des popups des partenaires après un click
 */

document.addEventListener("click", (event) => {
    if (event.target.classList.contains("leaflet-marker-icon")) {

        let alt = event.target.alt
        let alt_split = alt.split(';')


        document.getElementById('title').innerHTML = alt_split[0];
        document.getElementById('place_restante').innerHTML = alt_split[1];
        document.getElementById('email').innerHTML = alt_split[2];
        document.getElementById('phone').innerHTML = alt_split[3];
        document.getElementById('address').innerHTML = alt_split[4];

        document.getElementById("js-container").animate([
                { transform: "translateX(50px)", opacity: 0 },
                { transform: "translateX(0px)", opacity: 1 },],
            { duration: 300, }
        );

        Array.from(document.getElementsByClassName("leaflet-marker-icon")).forEach((item) => {item.classList.remove("block")})

        document.getElementById("js-container").classList.add("block");

    }

})






