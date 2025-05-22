<div class="modal-header">
    <h5 class="modal-title">Household Details</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal"
        aria-label="Close"></button>
</div>
<div class="modal-body">
    <table class="table table-bordered mb-0">
        <thead>
            <tr>
                <th>User</th>
                <th>Account No.</th>
                <th>Balance</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img src="assets/images/users/avatar-6.jpg" alt="table-user" class="avatar-sm me-2 rounded-circle">
                    Risa D. Pearson
                </td>
                <td>AC336 508 2157</td>
                <td>July 24, 1950</td>
                <td class="text-center text-muted">
                    <a href="javascript: void(0);" class="link-reset fs-20 p-1"> <i class="ri-delete-bin-line"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="row mt-4">
        <div class="col-xl-4">
            <p class="text-muted">Demographic</p>
            <table class="table table-bordered mb-0">
                <tbody>
                    @foreach($demo_column as $k => $v)
                    <tr>
                        <th>{{$v}}</th>
                        <td>{{!is_array($data->demographic->$v)?$data->demographic->$v:""}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-xl-4">
            <p class="text-muted">Socio</p>
            <table class="table table-bordered mb-0">
                <tbody>
                    @foreach($socio_column as $k => $v)
                    <tr>
                        <th>{{$v}}</th>
                        <td>{{$data->socio->$v}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-xl-4">
            <p class="text-muted">Crime</p>
            <table class="table table-bordered mb-0">
                <tbody>
                    @foreach($crime_column as $k => $v)
                    <tr>
                        <th>{{$v}}</th>
                        <td>{{$data->crime->$v}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>