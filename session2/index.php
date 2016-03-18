<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form role="form" method="POST" action="saveJSON.php">
    <div class="form-group">
      <label>Name:</label>
      <input name="name" class="form-control"></input>
    </div>
    <div class="form-group">
      <label>Address</label>
      <input name="address" class="form-control"></input>
    </div>
    <div class="form-group">
      <label>Phone</label>
      <input type="tel" name="phone" class="form-control"></input>
    </div>
    <div class="form-group">
      <label>Title</label>
      <input name="title" class="form-control"></input>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </form>
</div>
</body>
</html>
