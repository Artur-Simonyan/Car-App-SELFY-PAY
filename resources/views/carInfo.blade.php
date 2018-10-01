<html>
<head>
    <title>Car Info</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{url ('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{url ('js/ajax.js')}}"></script>
</head>
<body>
<h2 class="text-center">
    <?php echo ucfirst("{$getCar->mark}");?>-<?php echo ucfirst("{$getCar->name}");?>
</h2>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Car Name</th>
        <th>Mark</th>
        <th>Registration Number</th>
    </tr>
    <tr>
        <td><?php echo "{$getCar->id}"?></td>
        <td><?php echo "{$getCar->name}"?></td>
        <td><?php echo "{$getCar->mark}"?></td>
        <td><?php echo "{$getCar->regNum}"?></td>
    </tr>
</table>

</body>
</html>