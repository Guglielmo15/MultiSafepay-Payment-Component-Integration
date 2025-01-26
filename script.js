api_key = 'YOUR_MULTISAFEPAY_APIKEY';

$("#single").hide();
$("#multiple").hide();

$("#single-btn").click(function(){
    $("#single").show();
	$("#multiple").hide();
});

$("#multiple-btn").click(function(){
    $("#single").hide();
	$("#multiple").show();
});

const orderData = {
    currency: 'EUR',
    amount: 2000,
    customer: {
        locale: 'en_EN',
        country: 'it'
    }
};

var payload = '';

const options = {method: 'GET', headers: {accept: 'application/json'}};

fetch('https://testapi.multisafepay.com/v1/json/auth/api_token?api_key=' + api_key, options)
  .then(res => res.json())
  .then(data => {
    apiToken = data.data.api_token;
	
	PaymentComponent = new MultiSafepay({
		env: 'test',
		apiToken: apiToken,
		order: orderData
	});
	
	PaymentComponent.init('payment', {
		container: '#MultiSafepayPayment',
		gateway: 'CREDITCARD',
		onLoad: state => {
			console.log('onLoad', state);
		},
		onError: state => {
			console.log('onError', state);
		}
	});
	
	$("#pay-single-btn").click(function(){
		payload = PaymentComponent.getPaymentData();
		console.log(payload);
		
		const options = {
		  method: 'POST',
		  headers: {accept: 'application/json', 'content-type': 'application/json'},
			  body: JSON.stringify({
				payment_options: {
				  close_window: false,
				  redirect_url: 'https://example.com/success',
				  cancel_url: 'https://example.com/fail'
				},
				customer: {locale: 'en_EN', disable_send_email: false},
				checkout_options: {validate_cart: false},
				days_active: 30,
				seconds_active: 2592000,
				type: 'direct',
				payment_data: payload,
				order_id: 'testpaycomp6',
				currency: 'EUR',
				amount: 2000,
				description: 'Test order payment component'
		  })
		};

		fetch('https://testapi.multisafepay.com/v1/json/orders?api_key=' + api_key, options)
		  .then(res => res.json())
		  .then(data => { 
			if (data.success == true) {alert("Payment succesful!")} else {alert("Payment failed!")};
		  })
		  .catch(err => console.error(err));
	});
  })
  .catch(err => console.error(err));