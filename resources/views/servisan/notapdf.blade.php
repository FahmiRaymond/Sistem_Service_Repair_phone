<!DOCTYPE html>
<html>

<head>
    <title>Nota PDF</title>
    <style type="text/css">
        table td {
            font: arial 12px;
        }

        table.data td,
        table.data th {
            border: 1px solid #ccc;
            padding: 5px;
        }

        table.data th {
            text-align: center;
        }

        table.data {
            border-collapse: collapse
        }


    </style>
</head>

<body>

    <table width="100%">
        <tr>
            <td rowspan="1" width="60%">
                <h1>SERVICE CENTER </h1>
            </td>
            <td>Tanggal: {{ tanggal_indonesia(date('Y-m-d')) }}</td>
        </tr>
    </table>

    <h4>KODE SERVIS : {{ $servisan->kode_hp}}</h4>
    <table width="100%">
        <tr>
            <td width="40%"><b>Pemilik</b></td>
            <td>: {{$servisan->pemilik}}</td>
        </tr>
        <tr>
            <td width="40%"><b>Nomor Telepon</b></td>
            <td>: {{$servisan->no_hp}}</td>
        </tr>
        <tr>
            <td width="40%"><b>Merk </b></td>
            <td>: {{$servisan->merk->nama_merk}}</td>
        </tr>
        <tr>
            <td width="40%"><b>Model</b></td>
            <td>: {{$servisan->model}}</td>
        </tr>
        <tr>
            <td width="40%"><b>IMEI</b></td>
            <td>: {{$servisan->no_imei}}</td>
        </tr>
        <tr>
            <td width="40%"><b>Kerusakan</b></td>
            <td>: {{$servisan->kerusakan}}</td>
        </tr>
        <tr>
            <td width="40%"><b>Biaya</b></td>
            <td>: {{$servisan->biaya}}</td>
        </tr>
        <tr>
            <td width="40%"><b>Keterangan</b></td>
            <td width="40%">: {{$servisan->keterangan}}</td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table width="100%">
        <tr>
            <td>
                <b>Terimakasih telah percaya ditempat kami</b><br>
                <span>SERVICECENTER2018</span>
            </td>
        </tr>
    </table>
</body>

</html>