<?php
require 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <title>Login System</title>
</head>
<div class="main-body">
		<main>
			<table class="table-main">
				<tbody>
					<tr>
						<td valign="middle" align="center">
							<div class = "include-table">
								<div class="login-table">
									<table class="top-table">
										<tbody>
											<tr><td>
												
											</td></tr>
										</tbody>
									</table>
										<?php
										if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
										require('process-login.php');
										} // End of the main Submit conditional.
										?>
									<table class="middle-table">
										<tr><td valign="middle" align="center">
											<table class="middle-table-center">
												<form action="login.php" method="post" name="loginform" id="loginform">
													<tbody>
														<tr>
															<td class="info" align="right" >Tài khoản: &nbsp;</td>
															<td>
															<input type="text" class="form-control" id="email" name="email" placeholder="Email"
																	maxlength="30" required
																	value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
															</td>
														</tr>
														<tr>
															<td class="info" align="right">Mật khẩu: &nbsp;</td>
															<td>
															<input type="password" class="form-control" id="password" name="password"
																	placeholder="Password" maxlength="40" required
																	value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
															</td>
														</tr>
														<tr>
															
															<td class="form-group row">
																<input id="submit" class="btn btn-primary" type="submit" name="submit" value="Đăng nhập">
															</td>
															
															<td class="form-group row">
																<input type="submit" name="" value="Về trang chủ">
															</td>
															
														</tr>
														<tr>
															<td class="info" colspan="2" align="center">
																<a href="">[ Quên mật khẩu ]</a>
															</td>
														</tr>
													</tbody>
												</form>
											</table>
										</td></tr>
									</table>
									<table class="bottom-table">
										<tbody>
											<tr><td>
												
											</td></tr>
										</tbody>
									</table>
								    </table>
							    </div>
						    </div>
					    </td>
				    </tr>
			    </tbody>
		    </table>
	    </main>
    </div>
<?php
require 'footer.php';
?>