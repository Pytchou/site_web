
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

let layer = new L.StamenTileLayer("terrain");
map.addLayer(layer);

/*
 * Création des markers sur la cartes
 */

function marker (lat, lng){
    L.marker([lat, lng]).addTo(map);
}

Array.from(document.querySelectorAll('.js-marker')).forEach((item) =>{
    marker(item.dataset.lat, item.dataset.lng, item.dataset.name)
})

/*
 * Lancement des popups des partenaires après un click
 */

document.addEventListener("click", (event) => {
    if (event.target.classList.contains("leaflet-marker-icon")) {

        document.getElementById("js-container").animate([
                { transform: "translateX(50px)", opacity: 0 },
                { transform: "translateX(0px)", opacity: 1 },],
            { duration: 300, }
        );

        Array.from(document.getElementsByClassName("leaflet-marker-icon")).forEach((item) => {item.classList.remove("block")})

        document.getElementById("js-container").classList.add("block");

    }

})






