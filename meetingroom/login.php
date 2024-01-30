<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <link href="login.css" rel="stylesheet">
  <title>Meeting Room Booking System</title>
</head>

<body class="loginbg">

	<?php include 'headerindex.php'; ?>

	<div class="pt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-5 mx-auto">
					<div class="card card-body">
						<h3 class="text-1">กรุณาเข้าสู่ระบบ</h3><br>
						<form action="mainadmin/bookingdetailmanager.php" method="POST" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1"><input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
							<div class="form-group required">
								<label class="user" for="username">Username / Email</label>
								<input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">
							</div>
							<div class="form-group required">
								<label class="" for="password">Password</label>
								<input type="password" class="form-control" required="" id="password" name="password" value="">
							</div>
							<div class="form-group mt-4 mb-4">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" data-parsley-multiple="remember-me">
									<label class="custom-control-label" for="remember-me">Remember me?</label>
								</div>
							</div>
							<div class="form-group pt-1">
								<button class="btn btn-primary btn-block" type="submit">Log In</button>
							</div>
						</form>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>