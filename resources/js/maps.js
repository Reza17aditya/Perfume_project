function updateLocation(name, mapUrl) {
    document.getElementById('mapFrame').src = mapUrl;
    document.getElementById('locationDetails').innerHTML = `<h5>${name}</h5>`;
}