<x-app-layout>
    <div class="page-container">
        <div class="row">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        <h4 class="header-title">Crime Distribution by Type</h4>
                    </div>
                    <div class="card-body">
                        <div id="simple-pie" class="apex-charts" data-colors="#777edd,#45bbe0,#0acf97,#fa5c7c,#e3eaef"></div>
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
                                    <th>Crime</th>
                                    <th>Type of Crime</th>
                                    <th>Police</th>
                                    <th>Action Take</th>
                                    <th>Jail</th>
                                    <th>Jail Relative</th>
                                    <th>Case</th>
                                    <th>Duration</th>
                                    <th>Feel Safe</th>
                                    <th>Police Visits</th>
                                    <th>Vulnerability Flags</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($surveyor as $key => $value)
                                <tr>
                                    <td>{{$value->village}}</td>
                                    <td>{{$value->crime->crime==0?"No":"Yes"}}</td>
                                    <td>{{$value->crime->toc}}</td>
                                    <td>{{$value->crime->police}}</td>
                                    <td>{{$value->crime->action_take}}</td>
                                    <td>{{$value->crime->jail}}</td>
                                    <td>{{$value->crime->jail_relative}}</td>
                                    <td>{{$value->crime->case}}</td>
                                    <td>{{$value->crime->duration}}</td>
                                    <td>{{$value->crime->feel_safe}}</td>
                                    <td>{{$value->crime->police_visits}}</td>
                                    <td>{{$value->crime->vulnerability_flags}}</td>
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
        var colors = ["#777edd", "#45bbe0", "#0acf97", "#fa5c7c", "#e3eaef"],
    dataColors = $("#simple-pie").data("colors"),
    options = {
        chart: {
            height: 320,
            type: "pie"
        },
        series: {!!json_encode($chart['value'])!!},
        labels: {!!json_encode($chart['label'])!!},
        colors: colors = dataColors ? dataColors.split(",") : colors,
        legend: {
            show: !0,
            position: "bottom",
            horizontalAlign: "center",
            verticalAlign: "middle",
            floating: !1,
            fontSize: "14px",
            offsetX: 0,
            offsetY: 7
        },
        responsive: [{
            breakpoint: 600,
            options: {
                chart: {
                    height: 240
                },
                legend: {
                    show: !1
                }
            }
        }]
    };
    (chart = new ApexCharts(document.querySelector("#simple-pie"), options)).render();

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