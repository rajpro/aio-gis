<x-app-layout>
    <div class="page-container">

        <div class="row">
            <div class="col-md-3">
                <div class="card border-secondary border">
                    <div class="card-body">
                        <h5 class="fs-13 fw-bold text-uppercase">Total Government Investment</h5>
                        <p class="card-text">"YoY Change: −9.7% <br>QoQ Change: -"</p>
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <h3 class="my-2 py-1 fw-bold">₹855.2 Lakhs</h3>
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
                        <h5 class="fs-13 fw-bold text-uppercase">Total Forest Harvest</h5>
                        <p class="card-text">"YoY Increase: +6.3% <br> QoQ Increase: +4.9%"</p>
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <h3 class="my-2 py-1 fw-bold">1,879.80  Tonnes</h3>
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
                        <h5 class="fs-13 fw-bold text-uppercase">Total Gross Revenue Generated</h5>
                        <p class="card-text">"YoY Increase: +36% <br> QoQ Increase: +7%"</p>
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <h3 class="my-2 py-1 fw-bold">₹1,419.9 Lakhs</h3>
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
                        <h5 class="fs-13 fw-bold text-uppercase">Average Per Capita Income (monthly)</h5>
                        <p class="card-text">"YoY Increase: +135% <br>
QoQ Increase (from ₹1,178 in Oct–Dec 2024): +53%"</p>
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <h3 class="my-2 py-1 fw-bold">₹1,802 (from ~₹768 base)</h3>
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
                        <h4 class="header-title">Socio Economic Development Factors under LABHA Scheme</h4>
                    </div>
                    <div class="card-body">
                        <div id="stacked-bar" class="apex-charts" data-colors="#777edd,#0acf97,#fa5c7c,#45bbe0,#39afd1"></div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div>
            <div class="col-xl-7">
                <div class="card">
                    <div class="card-body p-0" style="height:500px;">
                        <div id="map" style="height:500px;"></div>
                        <div class="hide-google">
                            <p>Powered by AIO|CCDP | ArcGIS ESRI Tech</p>
                        </div>
                        <div class="map-button">
                            <div><i class="ri-crosshair-2-line"></i></div>
                            <div>
                                <i class="ri-add-line" id="zoom-in"></i>
                                <i class="ri-subtract-line" id="zoom-out"></i>
                            </div>
                            <div><i class="ri-stack-fill"></i></div>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-bottom border-dashed d-flex align-items-center justify-content-between">
                        <h4 class="header-title">Socio Economic Development Report</h4>
                        <div>
                            <a href="#" id="exportExcel" class="btn btn-primary btn-sm save" > Export To Excel </a>
                        </div>
                    </div>
                    <div class="card-body" data-simplebar style="max-height: 300px;">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                    </th>
                                    <th>GP Name</th>
                                    <th>Village</th>
                                    <th>HH ID</th>
                                    <th>HH Head Name</th>
                                    <th>Forest Harvest (in T) (Jan-Mar'25)</th>
                                    <th>Avg. PCI (Mar-May'25)</th>
                                    <th>Land Ownership</th>
                                    <th>Land Use</th>
                                    <th>Support Received</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($surveyor as $key => $value)
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input check-all" value="{{$value->id}}" name="hh[]">
                                    </td>
                                    <td>{{$value->block}}</td>
                                    <td>{{$value->village}}</td>
                                    <td>{{$value->hh_id}}</td>
                                    <td>{{$value->demographic->head_name}}</td>
                                    <td>{{$value->socio->qty}}</td>
                                    <td>{{$value->socio->pci}}</td>
                                    <td>{{$value->socio->land_holding}}</td>
                                    <td>{{$value->socio->land_use}}</td>
                                    <td>{{$value->socio->support_received}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h4 id="offcanvasRightLabel">Lodha PVGT Socio</h4>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <div id="sidebar-data">

            </div>
        </div>
    </div>

    @push('script')
    <!-- Apex Chart js -->
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <script>
        const myOffcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'));
        var colors = ["#777edd", "#45bbe0", "#0acf97", "#fa5c7c", "#e3eaef"],
    dataColors = $("#simple-pie").data("colors"),
    options = {
        chart: {
            height: 380,
            type: "bar",
            stacked: !0,
            toolbar: {
                show: !1
            }
        },
        plotOptions: {
            bar: {
                horizontal: !0
            }
        },
        stroke: {
            show: !1
        },
        series: [{
            name: "Govt Investment under (LABHA) Scheme (₹L)",
            data: {!!json_encode($chart['lv'])!!}
        }, {
            name: "Forest Harvest (T)",
            data: {!!json_encode($chart['fh'])!!}
        }, {
            name: "Gross Revenue (₹L)",
            data: {!!json_encode($chart['gr'])!!}
        }],
        xaxis: {
            categories: {!!json_encode($chart['label'])!!},
            axisBorder: {
                show: !1
            }
        },
        yaxis: {
            title: {
                text: void 0
            }
        },
        colors: colors = dataColors ? dataColors.split(",") : colors,
        fill: {
            opacity: 1
        },
        states: {
            hover: {
                filter: "none"
            }
        },
        legend: {
            position: "top",
            horizontalAlign: "center",
            offsetY: 10
        },
        grid: {
            borderColor: "#f1f3fa"
        }
    };
    (chart = new ApexCharts(document.querySelector("#stacked-bar"), options)).render();

    const initialZoom = 9;
    const initialCenter = { lat: 21.912284221895693, lng: 86.40897624871276 };
    const polygonCoords = {!!json_encode(config('constants.mayurbhanj'))!!}.map(coord => ({ lat: coord[1], lng: coord[0] }));

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: initialCenter,
            zoom: initialZoom,
            mapTypeId: "satellite",
            disableDefaultUI: true
        });

        const polygon = new google.maps.Polygon({
            paths: polygonCoords,
            strokeColor: "#FFFFFF",
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: "#FF0000",
            fillOpacity: 0.1,
        });

        polygon.setMap(map);

        mark();

        // Zoom In button
        document.getElementById("zoom-in").addEventListener("click", () => {
            map.setZoom(map.getZoom() + 1);
        });

        // Zoom Out button
        document.getElementById("zoom-out").addEventListener("click", () => {
            map.setZoom(map.getZoom() - 1);
        });
    }

    function mark()
    {
        const markers = {!!$map!!};
        markers.forEach((position, index) => {
            const k = position[0];
            const d = position[1]['id'];
            console.log(k,d);
            const mk = new google.maps.Marker({
                position: k,
                map,
                icon: {
                    url: "{{asset('partners.png')}}",
                    scaledSize: new google.maps.Size(32, 32), // set the size here
                }
            });

            mk.addListener("click", function() {
                myOffcanvas.show();
                let url = "{{url('/households/sidebar/socio')}}"+"/"+d;
                $.get( url, function( data ) {
                    console.log(data);
                    $( "#sidebar-data" ).html( data );
                });
            });
        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK-sWQPm-lhoyy3BsrOtl4NUksGVxZp6o&callback=initMap"></script>
    @endpush
</x-app-layout>