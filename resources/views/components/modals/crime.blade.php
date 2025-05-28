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
        <th>Crime</th>
        <td>{{$data->crime->crime==0?"No":"Yes"}}</td>
    </tr>
    <tr>
        <th>Type of Crime</th>
        <td>{{$data->crime->toc}}</td>
    </tr>
    <tr>
        <th>Police</th>
        <td>{{$data->crime->police}}</td>
    </tr>
    <tr>
        <th>Action Take</th>
        <td>{{$data->crime->action_take}}</td>
    </tr>
    <tr>
        <th>Jail</th>
        <td>{{$data->crime->jail}}</td>
    </tr>
    <tr>
        <th>Jail Relative</th>
        <td>{{$data->crime->jail_relative}}</td>
    </tr>
    <tr>
        <th>Case</th>
        <td>{{$data->crime->case}}</td>
    </tr>
    <tr>
        <th>Duration</th>
        <td>{{$data->crime->duration}}</td>
    </tr>
    <tr>
        <th>Police Visits</th>
        <td>{{$data->crime->police_vistis}}</td>
    </tr>
</table>