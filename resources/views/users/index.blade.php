<x-app-layout>
    <div class="page-container">
        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                <h4 class="header-title">Users List</h4>
            </div>
            <div class="card-body">
                
                <div class="table-responsive-sm">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                            <tr>
                                <td>
                                    <img src="{{ $value->profile_photo_url }}" width="32" class="rounded-circle me-lg-2 d-flex" alt="{{ $value->name }}">
                                </td>
                                <td>{{$value['name']}}</td>
                                <td>{{$value['email']}}</td>
                                <td class="text-center text-muted">
                                    <a href="{{route('users.edit', $value['id'])}}" class="full-view fs-20 p-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Click To Edit"> <i class="ri-edit-line"></i></a>
                                    <a href="javascript: void(0);" class="full-view fs-20 p-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Click To Delete"> <i class="ri-delete-bin-line"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>
</x-app-layout>