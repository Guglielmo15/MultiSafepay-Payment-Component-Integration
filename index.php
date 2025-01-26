<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A simple PHP page to test MultiSafepay's payment component integration.">
    <meta name="author" content="GR">
    <title>Payment Component Test</title>

    <!-- CSS Links -->
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://testpay.multisafepay.com/sdk/components/v2/components.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- JS Links -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script><script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
		<div id="logo"></div>
		<h2>Checkout</h2>
		<div class="buttons">
			<button type="button" class="btn btn-primary" id="single-btn">Single Payment Method</button> &nbsp; &nbsp;
			<button type="button" class="btn btn-primary" id="multiple-btn">Multiple Payment Method</button>
		</div>
		<div id="single">
			<div class="paymentComp" id="MultiSafepayPayment"></div>
			<div class="payBtnCont">
				<button type="button" class="btn btn-success" id="pay-single-btn">Pay</button>
			</div>
		</div>
		<div id="multiple">
			<div class="paymentComp" id="">Work in progress...</div>
			<div class="payBtnCont">
				<button type="button" class="btn btn-success" id="pay-multi-btn" disabled>Pay</button>
			</div>
		</div>
    </div>

    <!-- Custom JavaScript -->
	<script src="https://testpay.multisafepay.com/sdk/components/v2/components.js"></script>
    <script src="script.js"></script>
</body>
</html>
