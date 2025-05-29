<x-app-layout>
    <div class="page-container">
        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex align-items-center justify-content-between">
                <h4 class="header-title">Household Table</h4>
                <div>
                    <a href="javascript:;" class="btn btn-dark btn-sm send-message" > Message </a>
                    <a href="#" id="exportExcel" class="btn btn-primary btn-sm save" > Export To Excel </a>
                </div>
            </div>
            <div class="card-body">
                
                <div class="card border-primary border border-dashed">
                    <div class="card-body">
                        <h5>Filter</h5>
                        <form action="{{url()->current()}}" method="get">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="mb-0">
                                    <input type="text" id="qry" name="search" class="form-control form-control-sm" placeholder="Query for anything" value="{{request('search')}}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-0">
                                <select class="form-select form-select-sm" name="searchfor" id="example-select">
                                    <option>Filter by</option>
                                    <option value="head_name" {{(request('searchfor')=="head_name"?"selected":"")}}>Head Name</option>
                                    <option value="surveyor_name" {{(request('searchfor')=="surveyor_name"?"selected":"")}}>Suveyor Name</option>
                                    <option value="team" {{(request('searchfor')=="team"?"selected":"")}}>NGO</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary btn-sm">Search</button>
                                <a href="{{url()->current()}}" class="btn btn-dark btn-sm">Reset</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="card border-warning border border-dashed search-section" style="display:none;">
                    <div class="card-body">
                        <h5>Message</h5>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="mb-2">
                                    <select class="form-select form-select-sm" name="searchfor" id="example-select">
                                        <option>Choose Category</option>
                                        <option value="head_name">Household Head</option>
                                        <option value="surveyor_name">Suveyor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary btn-sm">Send</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-2">
                                    <textarea type="text" id="qry" name="search" class="form-control form-control-sm" placeholder="Enter your Message"></textarea>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                

                <div class="table-responsive-sm">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                </th>
                                <th>Sl. No</th>
                                <th>Photo</th>
                                <th>GP Block</th>
                                <th>Village Name</th>
                                <th>Household ID</th>
                                <th>Household Head</th>
                                <th>Contact No.</th>
                                <th>Completion Date</th>
                                <th>Surveyor Name</th>
                                <th>Surveyor Team</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                            <tr>
                                <td>
                                    <input type="checkbox" class="form-check-input check-all" value="{{$value->id}}" name="hh[]">
                                </td>
                                <td>{{$key+1}}</td>
                                <td><img src="{{asset('no-image.jpg')}}" alt="" width="45" class="rounded-circle mx-1"></td>
                                <td>{{$value['block']}}</td>
                                <td>{{$value['village']}}</td>
                                <td>{{$value['hh_id']}}</td>
                                <td>
                                    {{$value->demographic->head_name}}
                                </td>
                                <td>{{$value->demographic->mobile}}</td>
                                <td>{{$value['lvu']}}</td>
                                <td>{{$value['surveyor_name']}}</td>
                                <td>{{$value['team']}}</td>
                                <td>
                                    @if($value['status'] == "Active")
                                    <i class="ri-circle-fill fs-12 text-success"></i>
                                    @elseif($value['status'] == "Surveyed")
                                    <i class="ri-circle-fill fs-12 text-warning"></i>
                                    @else
                                    <i class="ri-circle-fill fs-12 text-danger"></i>
                                    @endif
                                    
                                    {{$value['status']}}</td>
                                <td class="text-center text-muted">
                                    <a href="{{url('/households/view/'.$value['id'])}}" target="_blank" class=" fs-20 p-1" style="color:gray;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Click To View"> <i class="ri-mac-line"></i></a>
                                    <a href="javascript:;" class=" fs-20 p-1" style="color:#0acf97;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Status"> <i class="ri-bank-card-line"></i></a>
                                    <a href="javascript:;" class=" fs-20 p-1" style="color:gray;" 
                                        @if(!empty($value->demographic->documents_url))
                                        data-bs-toggle="popover" 
                                        data-bs-placement="left" 
                                        data-bs-title="Documents" 
                                        data-bs-html="true" 
                                        data-bs-content="<ul>
                                            @foreach($value->demographic->documents_url as $k => $v)
                                            <li><a href='{{$v}}' target='_blank'>{{$k}}</a></li>
                                            @endforeach
                                        </ul>"
                                        @endif
                                        >
                                        <i class="ri-folders-line"></i></a>
                                    <a href="javascript:;" class=" fs-20 p-1" style="color:gray;" 
                                        @if(!empty($value->remark))
                                        data-bs-toggle="popover" 
                                        data-bs-placement="left" 
                                        data-bs-title="Contact History" 
                                        data-bs-html="true" 
                                        data-bs-content="<ul>
                                            @foreach($value->remark as $k => $v)
                                            <li>{{$v->remark}}</li>
                                            @endforeach
                                        </ul>"
                                        @endif
                                        >
                                        <i class="ri-message-2-line"></i></a>
                                    <!-- <a href="javascript: void(0);" data-hh-id="{{$value['id']}}" data-bs-toggle="modal" data-bs-target="#bs-modal-lg" class="full-view fs-20 p-1"> <i class="ri-mac-line"></i></a> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div> <!-- end card body-->
            <div class="card-footer">
                {{ $data->links() }}
            </div>
        </div> <!-- end card -->
    </div>


@push('script')
<script>
    $(".send-message").on("click", function() {
        $('.search-section').toggle();
    });

    $('#customCheck1').on('change', function () {
        const isChecked = $(this).is(':checked');
        $('.check-all').prop('checked', isChecked);
    });

    $('#exportExcel').on('click', function(e) {
        e.preventDefault(); // Prevent default anchor behavior

        // Get selected checkbox values
        let selected = $("input[name='hh[]']:checked").map(function() {
            return $(this).val();
        }).get();

        // Create a form dynamically
        let form = $('<form>', {
            action: "{{ url('households/download-excel') }}",
            method: 'POST'
        });

        // Add CSRF token if using Laravel
        form.append('@csrf');

        // Add selected checkboxes as hidden inputs
        selected.forEach(function(val) {
            form.append($('<input>', {
                type: 'hidden',
                name: 'hh[]',
                value: val
            }));
        });

        // Append and submit the form
        form.appendTo('body').submit();
    });
</script>
@endpush
</x-app-layout>