<html>
<head>
    <title>Cars List</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{url ('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{url ('js/ajax.js')}}"></script>
</head>
<body>

<form id="form"> <!-- Использовал AJAX чтобы форма не перезагружала страницу-->
    <div class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="name" class="form-control" placeholder="NAME" required><br>
    <input type="text" name="mark" class="form-control" placeholder="MARK" required><br>
    <input type="text" name="regNum" class="form-control" placeholder="REGISTRATION NUMBER" required><br>
    <input type="submit" id="save" class="btn btn-primary">
    </div>
</form>

<table class="table table-striped">
   <tr>
       <th>ID</th>
       <th>Car Name</th>
       <th>Mark</th>
       <th>Registration Number</th>
       <th>About</th>
   </tr>
    @foreach($carList as $item)
    <tr>
        <td><?php echo "{$item->id}"?></td>
        <td><?php echo "{$item->name}"?></td>
        <td><?php echo "{$item->mark}"?></td>
        <td><?php echo "{$item->regNum}"?></td>
        <td><a href="/cars/{{$item->id}}" id="link">About <?php echo ucfirst("{$item->mark}");?>-<?php echo ucfirst("{$item->name}");?></a></td>
    </tr>
    @endforeach
</table>
</body>
</html>