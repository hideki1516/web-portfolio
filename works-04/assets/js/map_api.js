window.initMap = () => {

  const mapArea = document.getElementById("js-map");

  const mapPosition = {
    lat: 35.0172215,
    lng: 135.7562802
  };

  const mapOptions = {
    center: mapPosition,
    zoom: 18,
    mapTypeControl: false,
    styles: [
      {
        featureType: 'poi',
        elementType: 'labels.icon',
        stylers: [
          {visibility: 'inherit'},
        ],
      },
      {
        featureType: 'all',
        elementType: 'all',
        stylers: [
          {saturation : -100},
        ],
      }
    ]
  };

  const map = new google.maps.Map(mapArea, mapOptions);

  const markerOption = {
    map: map,
    position: mapPosition,
    icon: {
      url: path + '/images/common/ico_map-marker.svg',
      scaledSize : new google.maps.Size(170, 192)
    }
  }

  const marker = new google.maps.Marker(markerOption);

  // マーカーのリサイズ
  const mediaQueryList = window.matchMedia('(max-width: 1279px)');
  const listener = (event) => {
    if (event.matches) {
      // 1280px以上
      marker.setOptions({
        icon: {
          url: path + '/images/common/ico_map-marker.svg',
          scaledSize : new google.maps.Size(94, 106)
        }
      });
    } else {
      // 1280px未満
      marker.setOptions({
        icon: path + '/images/common/ico_map-marker.svg'
      });
    }
  };

  mediaQueryList.addEventListener("change", listener);
  listener(mediaQueryList);
}