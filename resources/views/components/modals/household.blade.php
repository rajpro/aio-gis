<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PGT HH Report</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            line-height: 1.4;
            color: #000;
            padding: 10px;
            border: 1px solid #ccc;
        }
        h1, h2, h3, h4, h5 {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        .hh-section {
            border: 1px solid #000;
            padding: 5px;
        }
        table {
        width: 100%;
        border-collapse: collapse;
    }
    .table th,
    .table td {
        padding: 0.1rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }
    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }
    .table-bordered {
        border: 1px solid #dee2e6;
    }
    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }
    .page-break {
        page-break-before: always;
        margin-top: 100px;
    }
    .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            
        }
        .content {
            margin-top: 100px;
        }

        @page {
            margin: 30px 30px 30px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div style="float:left;margin-left:10px;margin-top:10px;">
        <img src="data:image;base64,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" style="height:60px;float:left;"/>
        </div>
        <div style="float:left;">
            <h3>CONSERVATION & DEVELOPMENT PLAN (CCD)<br>FOR PARTICULARLY VULNERABLE TRIBAL GROUPS (PGTs)</h3>
            <h3>LODHA DEVELOPMENT AGENCY, MORADA, MAYURBHANJ</h3>
            <h5>REGISTRATION FORM OF PGTs – LODHA - MAYURBHANJ</h6>
        </div>
    </div>

    <div class="content">
        <table>
            <tr>
                <td>
                    <table>
                        <tr><td>Household No.</td><td> {{$data->hh_id}}</td></tr>
                        <tr><td>Surveyor Name</td><td> {{$data->surveyor_name}}</td></tr>
                        <tr><td>Geo Coordinates</td><td> {{$data->location->getLat()}} - {{$data->location->getLng()}}</td></tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr><td>Survey Completion Date</td><td>{{$data->lvu}}</td></tr>
                        <tr rowcol="2"><td>Surveyor Team</td><td>{{$data->team}}</td></tr>
                    </table>
                </td>
            </tr>
        </table>
        <div class="hh-section">
            <h4>Household Head (HH) Details</h4>

            <table>
                <tr><td>Gram Panchayat Name</td><td class="value"> {{$data->block}}</td></tr>
                <tr><td class="label">Village Name</td><td class="value">{{$data->village}}</td></tr>
                <tr><td class="label">Household Head (HH) Name</td><td class="value">{{$data->demographic->head_name}}</td></tr>
                <tr><td class="label">Age</td><td class="value">{{$data->demographic->age}}</td></tr>
                <tr><td class="label">PGT Group</td><td class="value">LODHA TRIBE</td></tr>
                <tr><td class="label">HH Mobile Number</td><td class="value">{{$data->demographic->mobile}}</td></tr>
            </table>
        </div>

        <h3>Demographic, Crime, Vulnerability & Admin Details</h3>
        <table class="table table-bordered">
            <tr>
                <td style="width:48%;">
                    <table>
                        <tr><td colspan="2"><h4>Admin & HH Contact Details</h4></td></tr>
                        <tr><td class="label">Sarpanch</td><td class="value">Smt. Anjali Dungdung</td></tr>
                        <tr><td class="label">Sarpanch Mob.</td><td class="value">9937204127</td></tr>
                        <tr><td class="label">Block</td><td class="value">MORADA</td></tr>
                        <tr><td class="label">Police Station</td><td class="value">MORADA</td></tr>
                        <tr><td class="label">Admin Email</td><td class="value">anjali.dungdung@mayurbhanj</td></tr>
                        <tr><td class="label">District</td><td class="value">Mayurbhanj</td></tr>
                        <tr><td class="label">State</td><td class="value">Odisha</td></tr>
                        <tr><td class="label">HH Mob.</td><td class="value">7978035450</td></tr>
                        <tr><td class="label">HH Alt Contact</td><td class="value">7978035450</td></tr>
                    </table>
                </td>
                <td style="width:20px;"></td>
                <td>
                    <table>
                        <tr><td colspan="2"><h4>HH Demographic Details</h4></td></tr>
                        <tr><td class="label">Total Family Size</td><td class="value">{{$data->demographic->total_member}}</td></tr>
                        <tr><td class="label">Highest Literacy Level</td><td class="value">{{$data->demographic->literacy}}</td></tr>
                        <tr><td class="label">Primary Occupation</td><td class="value">{{$data->demographic->primary_occupation}}</td></tr>
                        <tr><td class="label">Avg. PCI (Monthly)</td><td class="value">₹ {{$data->socio->pci}}</td></tr>
                        <tr><td class="label">Land Ownership</td><td class="value">{{$data->socio->land_holding}}</td></tr>
                        <tr><td class="label">Land Use</td><td class="value">{{$data->socio->land_use}}</td></tr>
                        <tr><td class="label">Govt. Support Received</td><td class="value">{{$data->socio->support_received}}</td></tr>
                        <tr><td class="label">Existing Debt</td><td class="value">{{$data->socio->debt}}</td></tr>
                        <tr><td class="label">Debt Reason</td><td class="value">{{$data->socio->bebt_reason}}</td></tr>
                        
                    </table>
                </td>
            </tr>
        </table>

        <table class="table table-bordered">
            <tr>
                <td style="width:48%;">
                    <table>
                        <tr><td colspan="2"><h4>Criminal History/Reporting History</h4></td></tr>
                        <tr><td class="label">Reported Crime (in past 1 year)?</td><td class="value">{{$data->crime->crime==0?"No":"Yes"}}</td></tr>
                        <tr><td class="label">Type of Crime</td><td class="value">{{$data->crime->toc}}</td></tr>
                        <tr><td class="label">Reported to Police?</td><td class="value">{{$data->crime->police}}</td></tr>
                        <tr><td class="label">Police Action</td><td class="value">{{$data->crime->action_take}}</td></tr>
                        <tr><td class="label">Any Family members in Jail?</td><td class="value">{{$data->crime->jail}}</td></tr>
                        <tr><td class="label">Jailed Relation</td><td class="value">{{$data->crime->jail_relative}}</td></tr>
                    </table>
                </td>
                <td style="width:20px;"></td>
                <td>
                    <table>
                        <tr><td colspan="2"><h4>Vulnerability Assessment</h4></td></tr>
                        <tr><td class="label">Police Presence in Locality</td><td class="value">{{$data->crime->police_visits}}</td></tr>
                        <tr><td class="label">Feeling of Safety?</td><td class="value">{{$data->crime->feel_safe}}</td></tr>
                        <tr><td class="label">Vulnerability Flags </td><td class="value">{{$data->crime->vulnerability_flag}}</td></tr>
                    </table>
                </td>
            </tr>
        </table>
        <div class="page-break"></div>

        <div style="border: 1px solid #000; padding: 5px;">
            <h4 style="text-align:center;">Declaration of the Surveyor</h4>
            <p>I hereby declare that all the particulars furnished are correct. I understand that my association direct or indirect with any unlawful organization is forbidden. I am aware that any incorrect information may lead to cancellation of my position and any future association with the Department of Tribal Affairs.
                <br><b>Date: 4/28/2025 9:45:00 PM</b></p>
        </div>
        <div style="border: 1px solid #000; padding: 5px;">
            <h4 style="text-align:center;">FOR OFFICE USE ONLY</h4>
            <p>Certified that all information and documents produced in support of the above particulars have been verified and found correct.</p>
            <p style="float:right"><b>Signature of the Head of the Department (with seal)</b></p>
        </div>
    </div>
</body>
</html>
