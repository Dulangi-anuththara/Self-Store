<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Reserve Now</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="http://localhost/self&store/assets1/css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="http://localhost/self&store/assets1/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Make your reservation</h1>
                        </div>
                        <form action="<?php echo base_url();?>index.php/site/insertNotification" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Full name/Company name</span>
                                        <input class="form-control" type="text" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Email Address</span>
                                        <input class="form-control" type="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Phone Number</span>
                                        <input class="form-control" type="text" name="number" pattern="[0-9]{10}" maxlength="10" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Address</span>
                                        <input class="form-control" type="text" name="address"  maxlength="50" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Unit Type</span>
                                    <select class="form-control" name="unit">
											<option type="disabled">select</option>
											<option>60SQFT</option>
											<option>100SQFT</option>
											<option>120SQFT</option>
											<option>140SQFT</option>
										</select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Approximate start date of rental</span>
                                    <input class="form-control" type="date" name="date" required>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn">Reserve Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>