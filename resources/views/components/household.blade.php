<x-app-layout>
    <div class="page-container">
        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                <h4 class="header-title">Household Table</h4>
            </div>
            <div class="card-body">
                
                <div class="table-responsive-sm">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Village Name</th>
                                <th>Block</th>
                                <th>Location</th>
                                <th>Household ID</th>
                                <th>Survey Date</th>
                                <th>Surveyor Name</th>
                                <th>Team</th>
                                <th>Last Version Update</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                            <tr>
                                <td>{{$value['village']}}</td>
                                <td>{{$value['block']}}</td>
                                <td>{{$value['location']->getLat()}} - {{$value['location']->getLng()}}</td>
                                <td>{{$value['hh_id']}}</td>
                                <td>{{$value['survey_date']}}</td>
                                <td>{{$value['surveyor_name']}}</td>
                                <td>{{$value['team']}}</td>
                                <td>{{$value['lvu']}}</td>
                                <td class="text-center text-muted">
                                    <a href="javascript: void(0);" data-hh-id="{{$value['id']}}" data-bs-toggle="modal" data-bs-target="#bs-modal-lg" class="full-view fs-20 p-1"> <i class="ri-mac-line"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>


@push('script')
<script>
    $(".full-view").on('click', function() {
        $("#bs-modal-lg .modal-content").html(`<div class="modal-body text-center">
                        <div class="spinner-border text-primary m-2" role="status"></div>
                    </div>`);
        let id = $(this).data('hh-id');
        let url = "{{url('households/view')}}"+"/"+id;
        $.get(url, function(data, status){
            console.log(data);
            $("#bs-modal-lg .modal-content").html(data);
        });
    });
</script>
@endpush
</x-app-layout>