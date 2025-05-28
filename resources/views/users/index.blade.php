<x-app-layout>
    <div class="page-container">
        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                <h4 class="header-title">Create User</h4>
            </div>
            <div class="card-body">
                <form action="{{url('users')}}" method="post" enctype='multipart/form-data'>
                    @csrf
                <div class="row">
                    
                    <div class="col-xl-3">
                        <div class="mb-3">
                            <label for="example-fileinput" class="form-label">Default file input</label>
                            <input type="file" id="example-fileinput" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="userType" class="form-label">User Type</label>
                            <select id="userType" name="role" class="form-select">
                                <option>Choose</option>
                                @foreach($roles as $role)
                                <option value="{{$role}}">{{$role}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Surveyor/GP Admin Name</label>
                            <input type="text" id="name" name="surveyor" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Affiliated NGO/GP Centre</label>
                            <input type="text" id="name" name="ngo" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" id="name" name="username" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" id="password" name="password" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control">
                        </div>
                    </div>
                    <div class="col-xl-3"></div>
                    <div class="col-xl-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
            </div> <!-- end card body-->
        </div> <!-- end card -->

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
                                <th>Surveyor</th>
                                <th>NGO</th>
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
                                <td>{{$value['surveyor']}}</td>
                                <td>{{$value['ngo']}}</td>
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