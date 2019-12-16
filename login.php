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
									<table class="middle-table">
										<tr><td valign="middle" align="center">
											<table class="middle-table-center">
												<tbody>
													<tr>
														<td class="info" align="right" >Tài khoản: &nbsp;</td>
														<td>
															<input type="text" name="acc">
														</td>
													</tr>
													<tr>
														<td class="info" align="right">Mật khẩu: &nbsp;</td>
														<td>
															<input type="password" name="pass">
														</td>
													</tr>
													<tr>
														
														<td class="info">
															<input type="submit" name="" value="Đăng nhập">
														</td>
														
														<td class="info">
															<input type="submit" name="" value="Về trang chủ">
														</td>
														
													</tr>
													<tr>
														<td class="info" colspan="2" align="center">
															<a href="">[ Quên mật khẩu ]</a>
														</td>
													</tr>
												</tbody>
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