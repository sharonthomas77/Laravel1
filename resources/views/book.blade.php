<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
       <form action="\bookread" method="post">
       {{csrf_field()}}
       <table class="table">
            <tr>
                <td>Title</td>
                <td><input name="title" type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Author</td>
                <td><input name="author" type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input name="des" type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Distributor</td>
                <td><input name="dis" type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input name="price" type="text" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-success">Submit</button></td>
            </tr>
        </table>
       </form>
    </div>
    
</body>
</html>