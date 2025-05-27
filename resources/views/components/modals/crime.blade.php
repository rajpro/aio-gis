<table class="table table-bordered">
    <tr>
        <th>Village</th>
        <td>{{$data->village}}</td>
    </tr>
    <tr>
        <th>Total Household</th>
        <td>{{$data->hh_id}}</td>
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
        <th>Total Population</th>
        <td>{{$data->demographic->total_member}}</td>
    </tr>
    <tr>
        <th>Literacy Rate</th>
        <td></td>
    </tr>
    <tr>
        <th>Per Capita Income</th>
        <td></td>
    </tr>
</table>