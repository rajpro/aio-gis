<x-app-layout>
    <div class="page-container">
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
                                    <th>Forest Production</th>
                                    <th>Forest Harvest (in Kg) per week</th>
                                    <th>Household Income per Week</th>
                                    <th>Household Income per Month</th>
                                    <th>Seasonal Variation (Y/N)</th>
                                    <th>If Y, Peak Month</th>
                                    <th>Land Holding (Y/N)</th>
                                    <th>Land Use</th>
                                    <th>Support Received</th>
                                    <th>Debt (Y/N)</th>
                                    <th>Debt Source</th>
                                    <th>Debt Reason</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($surveyor as $key => $value)
                                <tr>
                                    <td>{{$value->village}}</td>
                                    <td>{{$value->socio->forest_production}}</td>
                                    <td>{{$value->socio->qty}}</td>
                                    <td>{{$value->socio->income_per_wk}}</td>
                                    <td>{{$value->socio->income_per_mo}}</td>
                                    <td>{{$value->socio->seasonal_variation}}</td>
                                    <td>{{$value->socio->peak_mo}}</td>
                                    <td>{{$value->socio->land_holding}}</td>
                                    <td>{{$value->socio->land_use}}</td>
                                    <td>{{$value->socio->support_received}}</td>
                                    <td>{{$value->socio->debt}}</td>
                                    <td>{{$value->socio->debt_src}}</td>
                                    <td>{{$value->socio->loan_reason}}</td>
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
            data: [44, 55, 41, 37, 22, 43, 21]
        }, {
            name: "Forest Harvest (T)",
            data: {!!json_encode($chart['fh'])!!}
        }, {
            name: "Gross Revenue (₹L)",
            data: [12, 17, 11, 9, 15, 11, 20]
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