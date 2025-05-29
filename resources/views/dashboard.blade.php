<x-app-layout>
    <div class="page-container">
        <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Total Registered HHs">
                                    Total Registered HHs</h5>
                                <h3 class="my-2 py-1 fw-bold">{{$cards['hhs']}}</h3>
                            </div>
                            <div class="avatar-xl flex-shrink-0">
                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-42">
                                    <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Total Registered Population">Total Registered Population</h5>
                                <h3 class="my-2 py-1 fw-bold">{{$cards['population']['total']}}</h3>
                            </div>
                            <div class="avatar-xl flex-shrink-0">
                                <span class="avatar-title bg-success-subtle text-success rounded-circle fs-42">
                                    <iconify-icon icon="solar:wad-of-money-bold-duotone"></iconify-icon>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Total Number of GPs">Total Number of GPs
                                </h5>
                                <h3 class="my-2 py-1 fw-bold">{{$cards['gp']}}</h3>
                            </div>
                            <div class="avatar-xl flex-shrink-0">
                                <span class="avatar-title bg-warning-subtle text-warning rounded-circle fs-42">
                                    <iconify-icon icon="solar:user-plus-bold-duotone"></iconify-icon>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <h5 class="text-muted fs-13 fw-bold text-uppercase" title="Total  Number of Villages">Total  Number of Villages</h5>
                                <h3 class="my-2 py-1 fw-bold">{{$cards['village']}}</h3>
                            </div>
                            <div class="avatar-xl flex-shrink-0">
                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-42">
                                    <iconify-icon icon="solar:sticker-smile-circle-bold-duotone"></iconify-icon>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="d-flex card-header justify-content-between align-items-center">
                        <h4 class="header-title">Crime Reported Trendline</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex flex-wrap gap-1 mx-3">
                            <button type="button" class="btn btn-light btn-sm">
                                All
                            </button>
                            <button type="button" class="btn btn-light active btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-light btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-light btn-sm">
                                1Y
                            </button>
                        </div>
                        <div id="area-chart-datetime" class="apex-charts" data-colors="#45bbe0"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="d-flex card-header justify-content-between align-items-center">
                        <h4 class="header-title">Area-wise Crime Volume</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex flex-wrap gap-1 mx-3">
                            <button type="button" class="btn btn-light btn-sm">
                                All
                            </button>
                            <button type="button" class="btn btn-light active btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-light btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-light btn-sm">
                                1Y
                            </button>
                        </div>
                        <div id="basic-treemap" class="apex-charts" data-colors="#39afd1"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Gram Panchayat Name</th>
                                        <th>Total Gross Revenue (in INR L)</th>
                                        <th>% Contribution to Total Revenue</th>
                                        <th>Last 12m Rev (trendline)</th>
                                        <th>Volume of Forest Harvest (in T)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(config('constants.dashboard.gross') as $key => $value)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{$value[0]}}</td>
                                        <td>{{$value[1]}}</td>
                                        <td>
                                            <div id="{{$key}}-line" data-colors="#777edd"></div>
                                        </td>
                                        <td>
                                            <div id="{{$key}}-bar" data-colors="#777edd"></div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive -->
                    </div> <!-- end card-body-->
                </div> 
            </div>
        </div>
    </div>

    @push('script')
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <script>
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

        var e = ["#45bbe0"],
            a = $("#area-chart-datetime").data("colors"),
            a = (a && (e = a.split(",")), {
                annotations: {
                    yaxis: [{
                        y: 30,
                        borderColor: "#999",
                        label: {
                            show: !0,
                            text: "Support",
                            style: {
                                color: "#fff",
                                background: "#00E396"
                            }
                        }
                    }],
                    xaxis: [{
                        x: new Date("14 Nov 2012").getTime(),
                        borderColor: "#999",
                        yAxisIndex: 0,
                        label: {
                            show: !0,
                            text: "Rally",
                            style: {
                                color: "#fff",
                                background: "#775DD0"
                            }
                        }
                    }]
                },
                chart: {
                    type: "area",
                    height: 350
                },
                stroke: {
                    width: 3,
                    curve: "smooth"
                },
                colors: e,
                dataLabels: {
                    enabled: !1
                },
                series: [{
                    data: [
                        [13273596e5, 30.95],
                        [1327446e6, 31.34],
                        [13275324e5, 31.18],
                        [13276188e5, 31.05],
                        [1327878e6, 31],
                        [13279644e5, 30.95],
                        [13280508e5, 31.24],
                        [13281372e5, 31.29],
                        [13282236e5, 31.85],
                        [13284828e5, 31.86],
                        [13285692e5, 32.28],
                        [13286556e5, 32.1],
                        [1328742e6, 32.65],
                        [13288284e5, 32.21],
                        [13290876e5, 32.35],
                        [1329174e6, 32.44],
                        [13292604e5, 32.46],
                        [13293468e5, 32.86],
                        [13294332e5, 32.75],
                        [13297788e5, 32.54],
                        [13298652e5, 32.33],
                        [13299516e5, 32.97],
                        [1330038e6, 33.41],
                        [13302972e5, 33.27],
                        [13303836e5, 33.27],
                        [133047e7, 32.89],
                        [13305564e5, 33.1],
                        [13306428e5, 33.73],
                        [1330902e6, 33.22],
                        [13309884e5, 31.99],
                        [13310748e5, 32.41],
                        [13311612e5, 33.05],
                        [13312476e5, 33.64],
                        [13315068e5, 33.56],
                        [13315932e5, 34.22],
                        [13316796e5, 33.77],
                        [1331766e6, 34.17],
                        [13318524e5, 33.82],
                        [13321116e5, 34.51],
                        [1332198e6, 33.16],
                        [13322844e5, 33.56],
                        [13323708e5, 33.71],
                        [13324572e5, 33.81],
                        [13327128e5, 34.4],
                        [13327992e5, 34.63],
                        [13328856e5, 34.46],
                        [1332972e6, 34.48],
                        [13330584e5, 34.31],
                        [13333176e5, 34.7],
                        [1333404e6, 34.31],
                        [13334904e5, 33.46],
                        [13335768e5, 33.59],
                        [13339224e5, 33.22],
                        [13340088e5, 32.61],
                        [13340952e5, 33.01],
                        [13341816e5, 33.55],
                        [1334268e6, 33.18],
                        [13345272e5, 32.84],
                        [13346136e5, 33.84],
                        [13347e8, 33.39],
                        [13347864e5, 32.91],
                        [13348728e5, 33.06],
                        [1335132e6, 32.62],
                        [13352184e5, 32.4],
                        [13353048e5, 33.13],
                        [13353912e5, 33.26],
                        [13354776e5, 33.58],
                        [13357368e5, 33.55],
                        [13358232e5, 33.77],
                        [13359096e5, 33.76],
                        [1335996e6, 33.32],
                        [13360824e5, 32.61],
                        [13363416e5, 32.52],
                        [1336428e6, 32.67],
                        [13365144e5, 32.52],
                        [13366008e5, 31.92],
                        [13366872e5, 32.2],
                        [13369464e5, 32.23],
                        [13370328e5, 32.33],
                        [13371192e5, 32.36],
                        [13372056e5, 32.01],
                        [1337292e6, 31.31],
                        [13375512e5, 32.01],
                        [13376376e5, 32.01],
                        [1337724e6, 32.18],
                        [13378104e5, 31.54],
                        [13378968e5, 31.6],
                        [13382424e5, 32.05],
                        [13383288e5, 31.29],
                        [13384152e5, 31.05],
                        [13385016e5, 29.82],
                        [13387608e5, 30.31],
                        [13388472e5, 30.7],
                        [13389336e5, 31.69],
                        [133902e7, 31.32],
                        [13391064e5, 31.65],
                        [13393656e5, 31.13],
                        [1339452e6, 31.77],
                        [13395384e5, 31.79],
                        [13396248e5, 31.67],
                        [13397112e5, 32.39],
                        [13399704e5, 32.63],
                        [13400568e5, 32.89],
                        [13401432e5, 31.99],
                        [13402296e5, 31.23],
                        [1340316e6, 31.57],
                        [13405752e5, 30.84],
                        [13406616e5, 31.07],
                        [1340748e6, 31.41],
                        [13408344e5, 31.17],
                        [13409208e5, 32.37],
                        [134118e7, 32.19],
                        [13412664e5, 32.51],
                        [13414392e5, 32.53],
                        [13415256e5, 31.37],
                        [13417848e5, 30.43],
                        [13418712e5, 30.44],
                        [13419576e5, 30.2],
                        [1342044e6, 30.14],
                        [13421304e5, 30.65],
                        [13423896e5, 30.4],
                        [1342476e6, 30.65],
                        [13425624e5, 31.43],
                        [13426488e5, 31.89],
                        [13427352e5, 31.38],
                        [13429944e5, 30.64],
                        [13430808e5, 30.02],
                        [13431672e5, 30.33],
                        [13432536e5, 30.95],
                        [134334e7, 31.89],
                        [13435992e5, 31.01],
                        [13436856e5, 30.88],
                        [1343772e6, 30.69],
                        [13438584e5, 30.58],
                        [13439448e5, 32.02],
                        [1344204e6, 32.14],
                        [13442904e5, 32.37],
                        [13443768e5, 32.51],
                        [13444632e5, 32.65],
                        [13445496e5, 32.64],
                        [13448088e5, 32.27],
                        [13448952e5, 32.1],
                        [13449816e5, 32.91],
                        [1345068e6, 33.65],
                        [13451544e5, 33.8],
                        [13454136e5, 33.92],
                        [13455e8, 33.75],
                        [13455864e5, 33.84],
                        [13456728e5, 33.5],
                        [13457592e5, 32.26],
                        [13460184e5, 32.32],
                        [13461048e5, 32.06],
                        [13461912e5, 31.96],
                        [13462776e5, 31.46],
                        [1346364e6, 31.27],
                        [13467096e5, 31.43],
                        [1346796e6, 32.26],
                        [13468824e5, 32.79],
                        [13469688e5, 32.46],
                        [1347228e6, 32.13],
                        [13473144e5, 32.43],
                        [13474008e5, 32.42],
                        [13474872e5, 32.81],
                        [13475736e5, 33.34],
                        [13478328e5, 33.41],
                        [13479192e5, 32.57],
                        [13480056e5, 33.12],
                        [1348092e6, 34.53],
                        [13481784e5, 33.83],
                        [13484376e5, 33.41],
                        [1348524e6, 32.9],
                        [13486104e5, 32.53],
                        [13486968e5, 32.8],
                        [13487832e5, 32.44],
                        [13490424e5, 32.62],
                        [13491288e5, 32.57],
                        [13492152e5, 32.6],
                        [13493016e5, 32.68],
                        [1349388e6, 32.47],
                        [13496472e5, 32.23],
                        [13497336e5, 31.68],
                        [134982e7, 31.51],
                        [13499064e5, 31.78],
                        [13499928e5, 31.94],
                        [1350252e6, 32.33],
                        [13503384e5, 33.24],
                        [13504248e5, 33.44],
                        [13505112e5, 33.48],
                        [13505976e5, 33.24],
                        [13508568e5, 33.49],
                        [13509432e5, 33.31],
                        [13510296e5, 33.36],
                        [1351116e6, 33.4],
                        [13512024e5, 34.01],
                        [1351638e6, 34.02],
                        [13517244e5, 34.36],
                        [13518108e5, 34.39],
                        [135207e7, 34.24],
                        [13521564e5, 34.39],
                        [13522428e5, 33.47],
                        [13523292e5, 32.98],
                        [13524156e5, 32.9],
                        [13526748e5, 32.7],
                        [13527612e5, 32.54],
                        [13528476e5, 32.23],
                        [1352934e6, 32.64],
                        [13530204e5, 32.65],
                        [13532796e5, 32.92],
                        [1353366e6, 32.64],
                        [13534524e5, 32.84],
                        [13536252e5, 33.4],
                        [13538844e5, 33.3],
                        [13539708e5, 33.18],
                        [13540572e5, 33.88],
                        [13541436e5, 34.09],
                        [135423e7, 34.61],
                        [13544892e5, 34.7],
                        [13545756e5, 35.3],
                        [1354662e6, 35.4],
                        [13547484e5, 35.14],
                        [13548348e5, 35.48],
                        [1355094e6, 35.75],
                        [13551804e5, 35.54],
                        [13552668e5, 35.96],
                        [13553532e5, 35.53],
                        [13554396e5, 37.56],
                        [13556988e5, 37.42],
                        [13557852e5, 37.49],
                        [13558716e5, 38.09],
                        [1355958e6, 37.87],
                        [13560444e5, 37.71],
                        [13563036e5, 37.53],
                        [13564764e5, 37.55],
                        [13565628e5, 37.3],
                        [13566492e5, 36.9],
                        [13569084e5, 37.68],
                        [13570812e5, 38.34],
                        [13571676e5, 37.75],
                        [1357254e6, 38.13],
                        [13575132e5, 37.94],
                        [13575996e5, 38.14],
                        [1357686e6, 38.66],
                        [13577724e5, 38.62],
                        [13578588e5, 38.09],
                        [1358118e6, 38.16],
                        [13582044e5, 38.15],
                        [13582908e5, 37.88],
                        [13583772e5, 37.73],
                        [13584636e5, 37.98],
                        [13588092e5, 37.95],
                        [13588956e5, 38.25],
                        [1358982e6, 38.1],
                        [13590684e5, 38.32],
                        [13593276e5, 38.24],
                        [1359414e6, 38.52],
                        [13595004e5, 37.94],
                        [13595868e5, 37.83],
                        [13596732e5, 38.34],
                        [13599324e5, 38.1],
                        [13600188e5, 38.51],
                        [13601052e5, 38.4],
                        [13601916e5, 38.07],
                        [1360278e6, 39.12],
                        [13605372e5, 38.64],
                        [13606236e5, 38.89],
                        [136071e7, 38.81],
                        [13607964e5, 38.61],
                        [13608828e5, 38.63],
                        [13612284e5, 38.99],
                        [13613148e5, 38.77],
                        [13614012e5, 38.34],
                        [13614876e5, 38.55],
                        [13617468e5, 38.11],
                        [13618332e5, 38.59],
                        [13619196e5, 39.6]
                    ]
                }],
                markers: {
                    size: 0,
                    style: "hollow"
                },
                xaxis: {
                    type: "datetime",
                    min: new Date("01 Mar 2012").getTime(),
                    tickAmount: 6
                },
                tooltip: {
                    x: {
                        format: "dd MMM yyyy"
                    }
                },
                fill: {
                    type: "gradient",
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: .7,
                        opacityTo: .9,
                        stops: [0, 100]
                    }
                }
            }),
            o = new ApexCharts(document.querySelector("#area-chart-datetime"), a);
        o.render();

        var colors = ["#777edd", "#0acf97", "#fa5c7c"],
    dataColors = $("#basic-treemap").data("colors"),
    options = {
        
        series: [{
            data: [{
                x: "Jadunathpur",
                y: 65
            }, {
                x: "Jualibhanga",
                y: 114
            }, {
                x: "Kendua",
                y: 103
            }, {
                x: "Paikbasa",
                y: 4
            }, {
                x: "Patsanipur",
                y: 19
            }, {
                x: "Paunsia",
                y: 8
            }, {
                x: "Sapanchua",
                y: 1
            }, {
                x: "Sridamchandrapur",
                y: 14
            }]
        }],
        colors: colors = dataColors ? dataColors.split(",") : colors,
        
        chart: {
            height: 350,
            type: "treemap"
        }
    };
    chart = new ApexCharts(document.querySelector("#basic-treemap"), options);
    chart.render();

    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }
    
    var sparkOption = {
        chart: {
            type: "line",
            width: 140,
            height: 60,
            sparkline: {
                enabled: !0
            }
        },
        colors: ["#00D8B6", "#008FFB", "#FEB019", "#FF4560", "#775DD0"],
        stroke: {
            width: 2,
            curve: "smooth"
        },
        markers: {
            size: 0
        },
        tooltip: {
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function(t) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    };
    var sparkOption2 = {
        chart: {
            type: "bar",
            width: 100,
            height: 60,
            sparkline: {
                enabled: !0
            }
        },
        plotOptions: {
            bar: {
                columnWidth: "80%"
            }
        },
        series: [{
            data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
            crosshairs: {
                width: 1
            }
        },
        tooltip: {
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function(t) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    };
    const data = {!!json_encode($chart)!!};
    Object.entries(data).forEach(([index, element]) => {
        const options = {
            ...sparkOption,
            series: [{
                data: element.line
            }],
            colors: shuffleArray(["#00D8B6", "#008FFB", "#FEB019", "#FF4560", "#775DD0"])
        };

        const options2 = {
            ...sparkOption2,
            series: [{
                data: element.bar
            }],
            colors: shuffleArray(["#00D8B6", "#008FFB", "#FEB019", "#FF4560", "#775DD0"])
        };
        
        const apx = new ApexCharts(document.querySelector("#"+index+"-line"), options);
        apx.render();
        const apx2 = new ApexCharts(document.querySelector("#"+index+"-bar"), options2);
        apx2.render();
    });
    
    </script>
    
    @endpush
</x-app-layout>