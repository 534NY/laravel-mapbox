<div>
    <div id='map' style='width: 400px; height: 300px;'></div>

</div>

@push('scripts')

    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic2VhbnkxMSIsImEiOiJjbDMxNHBiaHAwNXFuM2VqdXhha3hhaWdxIn0.1jiOICkh1OFy5ngBHA8j2A'
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11'
        });
    </script>

@endpush