<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col col-sm-12 col-m-12 col-l-12"></div>
<div class="col"></div>
<div class="col"></div>
</div>
</div>
<form action="/busread" method="post">
{{csrf_field()}}
<table class="table">
<tr>
    <td>Bus Number</td>
    <td><input name="bno" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Route</td>
    <td><input name="rou" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Driver Name</td>
    <td><input name="dname" type="text" class="form-control"></td>
</tr>

<tr>
    <td></td>
    <td><button class="btn btn-success">Submit</button></td>
</tr>
</table>
</form>
</body>
</html>