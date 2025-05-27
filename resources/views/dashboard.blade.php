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
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-1"><i class="ri-arrow-left-down-box-line"></i>
                                        9.19%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
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
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-1"><i class="ri-arrow-left-up-box-line"></i>
                                        4.67%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
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
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-1"><i class="ri-arrow-left-up-box-line"></i>
                                        2.85%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
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
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-1"><i class="ri-arrow-left-up-box-line"></i>
                                        1.32%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
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
            <div class="col-xxl-4">
                <div class="card">
                    <div class="d-flex card-header justify-content-between align-items-center">
                        <h4 class="header-title">List of NGOs</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive" data-simplebar style="max-height:300px;">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>NGO Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ngo as $key => $value)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$value->team}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <div class="col-xxl-4">
                <div class="card">
                    <div class="d-flex card-header justify-content-between align-items-center">
                        <h4 class="header-title">List of Villages with GP Name</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive" data-simplebar style="max-height:300px;">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Village</th>
                                        <th>GP</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($village as $key => $value)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$value->village}}</td>
                                        <td>{{$value->block}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <div class="col-xl-4">
                <div id="map" style="height:353px;"></div>
            </div>
        </div>
    </div>

    @push('script')
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
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK-sWQPm-lhoyy3BsrOtl4NUksGVxZp6o&callback=initMap"></script>
    @endpush
</x-app-layout>