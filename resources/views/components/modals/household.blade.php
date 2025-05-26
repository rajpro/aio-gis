<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lodha Document</title>
    <style>
        .table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table tr:nth-child(even){background-color: #f2f2f2;}
        .table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color:#858585;
            color: white;
        }
    </style>
</head>
<body>
<div class="modal-body">
    <table class="table table-bordered mb-0">
        <thead>
            <tr>
                <th>GP Block</th>
                <th>Village</th>
                <th>Household ID</th>
                <th>Surveyor Name</th>
                <th>Surveyor Team</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$data->block}}</td>
                <td>{{$data->village}}</td>
                <td>{{$data->hh_id}}</td>
                <td>{{$data->surveyor_name}}</td>
                <td>{{$data->team}}</td>
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
</body>
</html>