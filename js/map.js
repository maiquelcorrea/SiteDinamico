// Inicializa o Google Maps usando a API JavaScript.
async function initMap() {
  // Carrega o módulo responsável pelo mapa.
  const { Map } = await google.maps.importLibrary("maps");
  // Carrega o módulo responsável pelo marcador avançado.
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
  // Cria o mapa dentro do elemento com id='map'.
  const map = new Map(document.getElementById("map"), {
    center: { lat: 37.39094933041195, lng: -122.02503913145092 },
    zoom: 14,
    mapId: "4504f8b37365c3d0",
  });

  // Cria um marcador que pode ser arrastado pelo usuário.
  const draggableMarker = new AdvancedMarkerElement({
    map,
    position: { lat: 37.39094933041195, lng: -122.02503913145092 },
    gmpDraggable: true,
    title: "This marker is draggable. Click to remove.",
  });

  // Ao clicar no marcador, ele é removido do mapa.
  draggableMarker.addListener("click", (event) => {
    // Remove AdvancedMarkerElement from Map
    draggableMarker.map = null;
  });
  // Ao clicar no mapa, reposiciona o marcador no ponto clicado.
  map.addListener("click", (event) => {
    // Set AdvancedMarkerView position and add to Map
    draggableMarker.position = event.latLng;
    draggableMarker.map = map;
  });
}

// Inicia o mapa.
initMap();
