<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tracking</title>
    <style>
        .hh-grayBox {
	background-color: #F8F8F8;
	margin-bottom: 20px;
	padding: 35px;
  margin-top: 20px;
  margin-left:510px;
}
.pt45{padding-top:45px;}
.order-tracking{
	text-align: center;
	width: 33.33%;
	position: relative;
	display: block;
}
.order-tracking .is-complete{
	display: block;
	position: relative;
	border-radius: 50%;
	height: 30px;
	width: 30px;
	border: 0px solid #AFAFAF;
	background-color: #f7be16;
	margin: 0 auto;
	transition: background 0.25s linear;
	-webkit-transition: background 0.25s linear;
	z-index: 2;
}
.order-tracking .is-complete:after {
	display: block;
	position: absolute;
	content: '';
	height: 14px;
	width: 7px;
	top: -2px;
	bottom: 0;
	left: 5px;
	margin: auto 0;
	border: 0px solid #AFAFAF;
	border-width: 0px 2px 2px 0;
	transform: rotate(45deg);
	opacity: 0;
}
.order-tracking.completed .is-complete{
	border-color: #27aa80;
	border-width: 0px;
	background-color: #27aa80;
}
.order-tracking.completed .is-complete:after {
	border-color: #fff;
	border-width: 0px 3px 3px 0;
	width: 7px;
	left: 11px;
	opacity: 1;
}
.order-tracking p {
	color: #A4A4A4;
	font-size: 16px;
	margin-top: 8px;
	margin-bottom: 0;
	line-height: 20px;
}
.order-tracking p span{font-size: 14px;}
.order-tracking.completed p{color: #000;}
.order-tracking::before {
	content: '';
	display: block;
	height: 3px;
	width: calc(100% - 40px);
	background-color: #f7be16;
	top: 13px;
	position: absolute;
	left: calc(-50% + 20px);
	z-index: 0;
}

.order-tracking:first-child:before{display: none;}
.order-tracking.completed:before{background-color: #27aa80;}

    </style>
</head>
<body>
    <?php include('nav.php') ?>
    <div class="containeer">
    <h1>Order Status</h1>
  <div class="row1">
			<div class="col-12 col-md-10 hh-grayBox pt45 pb20">
                <div class="row1 justify-content-between">
						<div class="order-tracking completed">
								<span class="is-complete"></span>
								<p>Ordered</p>
						</div>
						<div class="order-tracking completed">
								<span class="is-complete"></span>
								<p>Baked</p>
						</div>
                                
						<div class="order-tracking">
								<span class="is-complete"></span>
								<p>Delivered</p>
						</div>
				</div>
			</div>
		</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>