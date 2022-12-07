@extends('backend.template.adminBase')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-dark">
                       Tambah Data Atraksi Wisata Rimba
                       <div class="card-tools">
                            <a href="{{url('backend/KalenderWisata')}}" type="button" class="btn btn-tool">
                            <i class="fas fa-sign-out-alt"></i> 
                            </a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{url('backend/KalenderWisata')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    <label for="" class="control-label">Nama Event</label>
                                    <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                    <label for="" class="control-label">Tempat</label>
                                    <input type="text" class="form-control" name="tempat">
                            </div>
                            <div class="form-group">
                                    <label for="" class="control-label">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal">
                            </div>
                            <div class="form-group">
                                    <label for="" class="control-label">Isi</label>
                                    <textarea name="isi" id="deskripsi" class="form-control"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto</label>
                                        <input type="file" class="form-control" name="foto" accept=".jpg">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Latitude</label>
                                        <span style="color: grey"><span style="color: red"> *</span>(click pada peta kemudian drag marker)</span>
                                        <input type="float" readonly="readonly"  class="form-control" name="foto" id="latitude">
                                        <br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Longitude</label>
                                        <span style="color: grey"><span style="color: red"> *</span>(click pada peta kemudian drag marker)</span>
                                        <input type="float" readonly="readonly"  class="form-control" name="foto" id="longitude">
                                        <br>
                                    </div>
                                </div>
                                <div id="map" style="width: 80%; height: 300px;margin-left:auto;margin-right:auto" ></div>
                            </div>
                            <br>
                            <button class="btn btn-dark float-right"><i class="fa fa-save "></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var peta1 = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11'
            });

        var peta2 = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/satellite-v9'
            });


        var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        var map = L.map('map', {
            center: [-1.8028443920355783, 109.9684624870144],
            zoom: 9,
            layers: [peta3],
        });

        var baseMaps = {
            "Grayscale": peta1,
            "Sattelite": peta2,
            "Streets": peta3,
        };
        
        var latInput = document.querySelector("[name=latitude]");
        var lngInput = document.querySelector("[name=longitude]");

        var curLocation = [-1.8028443920355783, 109.9684624870144];

        map.attributionControl.setPrefix(false);

        var marker = new L.marker(curLocation,{
            draggable: 'true'
        });

        marker.on('dragend', function(event){
            var position = marker.getLatLng();
            marker.setLatLng(position, {
                draggable: 'true'
            }).bindPopup(position).update();
            $("#latitude").val(position.lat);
            $("#longitude").val(position.lng);
        });

        map.addLayer(marker);

        map.on("click", function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
            if (!marker) {
                marker = L.marker(e.latlng).addTo(map);
            }else {
                marker.setLatLng(e.latlng);
            }
            latInput.value = lat;
            lngInput.value = lng;
        });

        L.Control.geocoder({
            position: 'topleft'
        }).addTo(map);

        L.control.defaultExtent().addTo(map);

        L.control.locate().addTo(map);
        
    </script>
@endsection