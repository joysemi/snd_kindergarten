// 네이버 지도 API 초기화
document.addEventListener('DOMContentLoaded', function() {
    var mapOptions = {
        center: new naver.maps.LatLng(37.3595704, 127.105399),
        zoom: 10
    };

    var map = new naver.maps.Map('map', mapOptions);
});
