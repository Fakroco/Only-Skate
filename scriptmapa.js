let map;

async function initMap() {
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");

  map = new Map(document.getElementById("map"), {
    center: { lat: -53.15483, lng: -70.91129 },
    zoom: 14,
  });
}

initMap();

