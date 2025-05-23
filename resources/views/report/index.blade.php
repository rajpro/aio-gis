<x-app-layout>
    <div class="page-container">
        <div class="row">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Lodha PVGT Group Population Diversity</h4>
                    </div>
                    <div class="card-body">
                        <div id="statistics-chart" class="apex-charts" data-colors="#02c0ce,#777edd"></div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div>
            <div class="col-xl-7">
                <div class="card">
                    <div class="card-body p-0">
                        <div id="map" style="height:403px;"></div>
                        
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Demographic Data</h4>
                    </div>
                    <div class="card-body" data-simplebar style="max-height: 300px;">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Village</th>
                                    <th>Head Name</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Total Member</th>
                                    <th>Male</th>
                                    <th>Female</th>
                                    <th>Child</th>
                                    <th>Literacy</th>
                                    <th>Primary Occupation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($surveyor as $key => $value)
                                <tr>
                                    <td>{{$value->village}}</td>
                                    <td>{{$value->demographic->head_name}}</td>
                                    <td>{{$value->demographic->gender}}</td>
                                    <td>{{$value->demographic->age}}</td>
                                    <td>{{$value->demographic->total_member}}</td>
                                    <td>{{$value->demographic->member_details['Male']}}</td>
                                    <td>{{$value->demographic->member_details['Female']}}</td>
                                    <td>{{$value->demographic->member_details['Child']}}</td>
                                    <td>{{$value->demographic->literacy}}</td>
                                    <td>{{$value->demographic->primary_occupation}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div>
        </div>
    </div>

    @push('script')
    <!-- Apex Chart js -->
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <script>
        var colors = ["#777edd", "#0acf97", "#fa5c7c", "#f9bc0b"],
    dataColors = $("#statistics-chart").data("colors"),
    options = {
        series: [{
            name: "Male",
            type: "bar",
            data: {{json_encode($chart['Male'])}}
        }, {
            name: "Female",
            type: "bar",
            data: {{json_encode($chart['Male'])}}
        }],
        chart: {
            height: 301,
            type: "line",
            toolbar: {
                show: !1
            }
        },
        stroke: {
            width: 0,
            curve: "straight"
        },
        plotOptions: {
            bar: {
                columnWidth: "45%",
                barHeight: "70%",
                borderRadius: 5
            }
        },
        xaxis: {
            categories: {!!json_encode($chart['label'])!!}
        },
        colors: colors = dataColors ? dataColors.split(",") : colors
    };
    (chart = new ApexCharts(document.querySelector("#statistics-chart"), options)).render();

    const initialZoom = 9;
    const initialCenter = { lat: 21.912284221895693, lng: 86.40897624871276 };

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: initialCenter,
            zoom: initialZoom,
            mapTypeId: "satellite",
            disableDefaultUI: true
        });

        // Zoom In button
        // document.getElementById("zoom-in").addEventListener("click", () => {
        //     map.setZoom(map.getZoom() + 1);
        // });

        // Zoom Out button
        // document.getElementById("zoom-out").addEventListener("click", () => {
        //     map.setZoom(map.getZoom() - 1);
        // });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK-sWQPm-lhoyy3BsrOtl4NUksGVxZp6o&callback=initMap"></script>
    @endpush
</x-app-layout>