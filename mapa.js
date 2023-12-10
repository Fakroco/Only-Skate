let map;

async function initMap() {
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerView } = await google.maps.importLibrary("marker");

  map = new Map(document.getElementById("map"), {
    center: { lat: -53.15246, lng: -70.90522 },
    zoom: 18,
  });
  map = new Map(document.getElementById("map2"), {
    center: { lat: -53.16191, lng: -70.88913 },
    zoom: 18,
  });
}

initMap();

