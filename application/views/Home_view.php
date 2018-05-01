<!DOCTYPE html>
<html>

<head>
	<title>Insert Department Data</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
</head>

<body>

<h1>Welcome to department section</h1>

<form action="<?php echo base_url(); ?>Home/addDept" method="post">
  <div class="form-group">
    <label>Enter Department</label>
    <input type="text" name="dept" class="form-control">
  </div>

  <div class="form-group">
    <input type="submit" name="insert" value="insert" class="btn btn-info">
  </div>

</form>

</body>
</html>