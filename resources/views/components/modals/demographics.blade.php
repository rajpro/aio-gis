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
        <td>{{$data->member_detail['Male']}}</td>
    </tr>
    <tr>
        <th>Female</th>
        <td>{{$data->member_detail['Female']}}</td>
    </tr>
    <tr>
        <th>Total Population</th>
        <td>{{$data->total_member}}</td>
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