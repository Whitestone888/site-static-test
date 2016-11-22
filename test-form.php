<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Home Page - My ASP.NET Web Page</title>
        <link href="/Content/themes/base/jquery.ui.all.css" rel="stylesheet" type="text/css" />
        <link href="/Content/Site.css" rel="stylesheet" type="text/css" />
        <link href="/Content/skeleton.css" rel="stylesheet" type="text/css" />
        <link href="/Content/normalize.css" rel="stylesheet" type="text/css" />
        <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <script src="/Scripts/jquery-1.10.2.min.js"></script>
        <script src="/Scripts/jquery-ui-1.10.3.js"></script>
        <script src="/Scripts/modernizr-2.6.2.js"></script>
        <meta name="viewport" content="width=device-width" />
 
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    	<script src='https://www.google.com/recaptcha/api.js'></script>
    	<script type="text/javascript">
    	    var campaignId = 1
    	    var currentAmount = 18;
    	    var targetAmount = 6000;
    	</script>
	</head>

	<body>

	<div class="container">

	  <div class="row">
	    <div class="six column"><img src='/images/wa-50-logo-rev.png' height="auto" width="400px"></img></div>
		<div class="six column"></div>
	  </div>

	  <div class="row">
	    <div class="two column">
	    <div class="w3-progress-container">
	        <div id="donationProgress" class="w3-progressbar w3-green">
	            <div id="donationAmount" class="w3-container w3-text-white">$0</div>
	        </div>
	    </div>

    <br>
    <br>

    <h3 id="error"></h3>
    <form enctype="application/json" id="form">
        <input type="hidden" name="action" value="view" /> <input type="hidden" name="aid" value="220614963281" /> <input type="hidden" name="id" value="10841" />

        <!-- Custom Fields -->
        <label>Name:</label>
        <input type="text" id="first_name" placeholder="First Name" value="" required /><br>
        <label></label>
        <input type="text" id="last_name" placeholder="Last Name" value="" required /> <br> <br>
    <label>Address:</label>
    <input type="text" id="street_address1" autocomplete="off" aria-autocomplete="list" placeholder="Street Address 1" value="" required /> <br>
    <label></label> <input type="text" id="street_address2" placeholder="Street Address 2" value="" /> <br>
    <label></label>
    <input type="text" autocomplete="off" id="administrative_area" placeholder="administrative_area" value="" required /> <br>
    <label></label>
    <input type="text" id="locality" autocomplete="off" placeholder="locality" value="" required /> <br>
    <label></label> <input type="number" size="15" id="postal_code" autocomplete="off" placeholder="postal_code" value="" required /> <br>
    <label></label>

        <select id="country"></select>
        <br> <br>

        <div class="phone">
            <label>Phone:</label>
            <input type="tel" id="areacode" maxlength="3" size="3" placeholder="555" value="" required /> -
            <input type="tel" id="phone1" maxlength="3" size="3" placeholder="555" required /> -
            <input type="tel" id="phone2" maxlength="4"
                   size="4" placeholder="5555" value="" required /> <br>
        </div>
        <label>Email:</label>
        <input type="email" id="email" placeholder="email@example.com" value="" required />
        <br> <br> <br>
        <div class="g-recaptcha" data-sitekey="6LeJ3yYTAAAAAC4-JvzBvb_wkZZLyk2cfS0Gl2dG"></div>
        <br> <br> <br>
        <label>Donation Method:</label>
        <div id="paymentOption">
            Card: <input type="radio" name="paymentOption" value="card" checked />
            Account: <input type="radio" name="paymentOption" value="bank" />
        </div>
        <br>
        <label>Amount:</label>
        <input type="number" step="0.01" id="amount" placeholder="15.00" required value="" />
        <div id="card">
            <label>Card Number:</label>
            <input type="number" id="cc_num" value="" />
            <br>
            <label>Card Expiration:</label> <select id="cardMonth">
                <option value="" disabled selected>MM</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select> <select id="cardYear">
                <option value="" disabled selected>YY</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
            </select> <br> <label>Card CVV:</label>
            <input type="number" id="cvv" size="3" value="" /> <br>
            <input type="submit" />
        </div>
        <div id="bank" style="visibility: hidden">
            <label>Account Number:</label>
            <input type="number" id="account_number" value="" /> <br>
            <label>Routing Number:</label>
            <input type="number" id="routing_number" value="" /> <br>
            <input type="submit" id="submitBtn" />
        </div>
    </form>
</div>
<div class="ten column"></div>
</div>
</div>

<footer>
    <script>
        var account_id = 220614963281;
        var timestamp = 1477941964;
        var hash = "5f599995de8835d2d1114128ae92d36d61f3570e3dfb1733240245029a486bab";
    </script>
    <script type="text/javascript" src="Scripts/validateCreditCard.js"></script>
    <script type="text/javascript" src="Scripts/utils.js"></script>
    <script type="text/javascript" src="Scripts/donationBar.js"></script>
    <script type="text/javascript" src="Scripts/formHandler.js"></script>
    <script type="text/javascript" src="Scripts/indexController.js"></script>
    <script type="text/javascript" src="Scripts/ssAutocomplete.js"></script>

</footer>

</body>
</html>