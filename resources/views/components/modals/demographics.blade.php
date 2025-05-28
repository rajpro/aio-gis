<table class="table table-bordered">
    <tr>
        <th>GP Name</th>
        <td>{{$data->block}}</td>
    </tr>
    <tr>
        <th>Village</th>
        <td>{{$data->village}}</td>
    </tr>
    <tr>
        <th>Household ID</th>
        <td>{{$data->hh_id}}</td>
    </tr>
    <tr>
        <th>Head Name</th>
        <td>{{$data->demographic->head_name}}</td>
    </tr>
    <tr>
        <th>Gender</th>
        <td>{{$data->demographic->gender}}</td>
    </tr>
    <tr>
        <th>Age</th>
        <td>{{$data->demographic->age}}</td>
    </tr>
    <tr>
        <th>Total Member</th>
        <td>{{$data->demographic->total_member}}</td>
    </tr>
    <tr>
        <th>Male</th>
        <td>{{$data->demographic->member_details["Male"]}}</td>
    </tr>
    <tr>
        <th>Female</th>
        <td>{{$data->demographic->member_details['Female']}}</td>
    </tr>
    <tr>
        <th>Literacy</th>
        <td>{{$data->demographic->literacy}}</td>
    </tr>
    <tr>
        <th>Primary Occupation</th>
        <td>{{$data->demographic->primary_occupation}}</td>
    </tr>
</table>