<!DOCTYPE html>
<html lang="en">
<head>
  <title>contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>CONTACT DETAILS</h2>
  <p>Please Enter Details Below</p>
  <form id="form">
    <div class="form-group">
      <label for="usr_name">Name:</label>
      <input type="text" class="form-control" id="usr" name="name" required>
    </div>
    <div class="form-group">
  <label for="address">Address</label>
  <textarea class="form-control" id="address" name="address" rows="7" required></textarea>
</div>
<div class="form-group">
      <label for="usr">Mobile:</label>
      <input type="text" class="form-control" id="mobile" name="mobile" required>
    </div>
    <div class="form-group">
    <button type="button" id="valide" class="btn btn-success">Success</button>
    </div>
  </form>
</div>
<script>
$('#valide').click(function () {
    var form = $(this).parents('form');

    $.ajax({
        type: 'POST',
        url: 'http://localhost:8000/api/user',
        dataType: 'JSON',
        data : form.serialize(),
  
    success: function(response) {
      alert(JSON.stringify(response));
            }
          })
});
</script>

</body>
</html>