<x-app-layout>
    <div class="page-container">
        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex align-items-center justify-content-between">
                <h4 class="header-title">Permission List</h4>
                
                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> {{$request->role??"Super Admin"}} <span class="caret"></span> </button>
                        <div class="dropdown-menu" style="">
                            @foreach($roles as $key => $value)
                            <a class="dropdown-item" href="{{route('permission.index',  ['role' => $value->name])}}">{{$value->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-sm save" > Save </button>
                </div>
            </div>
            <div class="card-body">
                
                <div class="table-responsive-sm">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                    </div>
                                </th>
                                <th>Name</th>
                                <th>Guard Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="{{route('permission.store')}}" method="POST" id="permission-form">
                            <input type="hidden" name="role" value="{{$request->role??'Super Admin'}}">
                            @csrf
                            @foreach($permissions as $key => $value)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" value="{{$value->name}}" {{(in_array($value->name, $permission)?"checked":"")}} name="permission[]" class="form-check-input">
                                    </div>
                                </td>
                                <td>{{$value['name']}}</td>
                                <td>{{$value['guard_name']}}</td>
                            </tr>
                            @endforeach
                            </form>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>

    @push('script')
    <script>
        $(".save").click(function(e){
            $("#permission-form").submit();
            
        });
        $("#customCheck1").click(function() {
            if ($(this).is(':checked')) {
                $("input[type=checkbox]").prop('checked', true);
            } else {
                $("input[type=checkbox]").prop('checked', false);
            }
        });
    </script>
    @endpush
</x-app-layout>