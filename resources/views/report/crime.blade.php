<x-app-layout>
    <div class="page-container">

        <div class="row">
            <div class="col-md-3">
                <div class="card border-secondary border">
                    <div class="card-body">
                        <h5 class="fs-13 fw-bold text-uppercase">Total No of Incidents:</h5>
                        <p class="card-text">Averaging <spam class="fw-bold">15.2 cases per village</spam>, with the highest in <b>Sridam Ch.Pur (Dwarisahi)</b>at <b>28 incidents</b>.</p>
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <h3 class="my-2 py-1 fw-bold">328 cases</h3>
                            </div>
                            <div class="avatar-xl flex-shrink-0">
                                <span class="avatar-title bg-secondary-subtle text-secondary rounded-circle fs-42">
                                    <iconify-icon icon="solar:home-bold"></iconify-icon>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-primary border">
                    <div class="card-body">
                        <h5 class="fs-13 fw-bold text-uppercase">Avg. Verified Incident Rate:</h5>
                        <p class="card-text">Gadigaon had the highest verification rate at 87%, while Bajratundi (Paikbasa) was lowest at 42%</p>
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <h3 class="my-2 py-1 fw-bold">53%</h3>
                            </div>
                            <div class="avatar-xl flex-shrink-0">
                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-42">
                                    <iconify-icon icon="solar:users-group-rounded-bold-duotone"></iconify-icon>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-warning border">
                    <div class="card-body">
                        <h5 class="fs-13 fw-bold text-uppercase">Most Common Crime Type</h5>
                        <p class="card-text">146 theft cases (out of 328 total incidents). Represents 31.9% of all crimes</p>
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <h3 class="my-2 py-1 fw-bold">Theft</h3>
                            </div>
                            <div class="avatar-xl flex-shrink-0">
                                <span class="avatar-title bg-warning-subtle text-warning rounded-circle fs-42">
                                    <iconify-icon icon="solar:accessibility-bold"></iconify-icon>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-info border">
                    <div class="card-body">
                        <h5 class="fs-13 fw-bold text-uppercase">YoY Crime Reduction:</h5>
                        <p class="card-text">Highest drop was seen in Jyotipur (Mahulia GP) at –18.3% YoY.</p>
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <h3 class="my-2 py-1 fw-bold">–11.2%</h3>
                            </div>
                            <div class="avatar-xl flex-shrink-0">
                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-42">
                                    <iconify-icon icon="solar:hand-money-bold"></iconify-icon>
                                </span>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div>
        </div>

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
                        <h4 class="header-title">Crime Data</h4>
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