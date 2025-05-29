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
        <th>HH Head Name</th>
        <td>{{$data->demographic->head_name}}</td>
    </tr>
    <tr>
        <th>Forest Harvest (in T)</th>
        <td>{{$data->socio->qty}}</td>
    </tr>
    <tr>
        <th>Avg. PCI</th>
        <td>{{$data->socio->pci}}</td>
    </tr>
    <tr>
        <th>Land Ownership</th>
        <td>{{$data->socio->land_holding}}</td>
    </tr>
    <tr>
        <th>Land Use</th>
        <td>{{$data->socio->land_use}}</td>                            
    </tr>
    <tr>
        <th>Support Received</th>
        <td>{{$data->socio->support_received}}</td>
    </tr>
</table>