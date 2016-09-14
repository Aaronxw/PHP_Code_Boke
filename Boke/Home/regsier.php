<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Regsier</title>
		<link href="public/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<h1>注册</h1>
		<div class="container">
			<form class="form-horizontal" role="form" action="Controller/RegsierController.php" method="post">
				用户名:<input type="text" class="form-control" name="username" /><br />
				email:<input type="email" class="form-control" name="email" /><br />
				密码:<input type="password" class="form-control" name="password" /><br />
				<input type="submit" class="btn btn-default" value="提交" />				
			</form>
		</div>

		<script src="public/js/jquery-3.1.0.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
	</body>
</html>