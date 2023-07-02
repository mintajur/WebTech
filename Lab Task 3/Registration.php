<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>
</head>
<body>
	
		<fieldset>
			<form method="post" action="Registration.php">
				
				<p><h6><span style="color: red">*</span> - Denotes Required Information</h6></p>
    <p><b><pre>> 1 Donation</b>  > 2 Confirmation  > Thank You! </pre></p>
    <h3 style="color:red">Donor Information</h3>
    <label> <pre><b>               First Name</b><span style="color: red">*</span> <input type="text" name="fname"/></pre></label> 
    <label> <pre><b>                Last Name</b><span style="color: red">*</span> <input type="text" name="lname"/></pre></label>
    <label> <pre><b>                   Company</b> <input type="text" name="cname"/></pre></label>
    <label> <pre><b>                 Address1</b><span style="color: red">*</span> <input type="text" name="address1"/></pre></label> 
    <label> <pre><b>                  Address2</b> <input type="text" name="address2"/></pre></label>
    <label> <pre><b>                     City</b><span style="color: red">*</span> <input type="text" name="city"/></pre></label>
    <label> <pre><b>                    State</b><span style="color: red">*</span> <select>  
        <option>Select a State</option>  
        <option>Dhaka</option>  
        <option>Rajshahi</option>  
        <option>Barishal</option>  
        <option>Khulna</option>  
        <option>Sylhet</option>  
        <option>Rangpur</option>
        <option>Mymensingh</option>
        <option>North Carolaina</option>  
        <option>Texs</option>  
        <option>California</option>  
        <option>New Yourk</option>  
        <option>Washington</option>  
        <option>Mumbai</option>  
        <option>Chennai</option>
        <option>Rajesthan</option>
        <option>Lahore</option>  
        <option>Karachi</option>
        <option>Islamabad</option>
        <option>Beijing</option>  
        <option>Tianjin</option>
        <option>Hebei</option>  
        </select></pre></label>  
    <label> <pre><b>                 Zip Code</b><span style="color: red">*</span> <input type="text" name="zip"/></pre></label>
    <label> <pre><b>                  Country</b><span style="color: red">*</span> <select>  
        <option>Select a Country</option>  
        <option>Bangladesh</option>
        <option>United States</option>  
        <option>India</option>  
        <option>Pakistan</option>  
        <option>China</option>    
        </select></pre></label>
    <label> <pre><b>                     Phone</b> <input type="text" name="phone"/></pre></label> 
    <label> <pre><b>                       Fax</b> <input type="text" name="fax"/></pre></label>
    <label> <pre><b>                    Email</b><span style="color: red">*</span> <input type="text" name="email"></pre></label>
    <label> <pre><b>          Donation Amount</b><span style="color: red">*</span><input type="radio" name="radio1" value="None"/>None <input type="radio" name="radio2" value="$50"/>$50 <input type="radio" name="radio3" value="$75"/>$75 <input type="radio" name="radio4" value="$100"/>$100 <input type="radio" name="radio5" value="$250"/>$250 <input type="radio" name="radio6" value="Other"/>Other</pre></label>
    <p><pre><h5> (Check a button or type in your</h5></pre></p>
    <pre>                  amount)<label><b> Other Amount $ </b> <input type="text" name="amount"/></label></pre>
    <pre><label><b>        Recurring Donation</b></label><input type="checkbox" name="recurring"><label>I am interested in giving on a regular basis.</label></pre>
    <p><pre><h5>                 (Check if yes)</h5></pre></p>
    <pre>                  <label>        Monthly Credit Card $  <input type="textbox" size="3" name="monthcr"/> For <input type="textbox" size="2" name="monthcr2"/> Months</label></pre>
    <br>

    
    <h3 style="color:red">Honorarium and Memorial Donation Information</h3>
    <label> <pre><b> I would like to make this</b><input type="radio" name="radio7"/>To Honor</pre></label>
    <label> <pre><b>                  donation</b><input type="radio" name="radio8"/>In Memory of </pre></label>
    <label> <pre><b>                      Name</b> <input type="text" name="name"/></pre></label> 
    <label> <pre><b>   Acknowledge Donation to</b> <input type="text" name="ack"/></pre></label>
    <label> <pre><b>                   Address</b> <input type="text" name="address"/></pre></label>
    <label> <pre><b>                      City</b> <input type="text" name="city1" /></pre></label>
    <label> <pre><b>                     State</b></span> <select>  
        <option>Select a State</option>  
        <option>Dhaka</option>  
        <option>Rajshahi</option>  
        <option>Barishal</option>  
        <option>Khulna</option>  
        <option>Sylhet</option>  
        <option>Rangpur</option>
        <option>Mymensingh</option>
        <option>North Carolaina</option>  
        <option>Texs</option>  
        <option>California</option>  
        <option>New Yourk</option>  
        <option>Washington</option>  
        <option>Mumbai</option>  
        <option>Chennai</option>
        <option>Rajesthan</option>
        <option>Lahore</option>  
        <option>Karachi</option>
        <option>Islamabad</option>
        <option>Beijing</option>  
        <option>Tianjin</option>
        <option>Hebei</option>  
        </select></pre></label>
        <label> <pre><b>                       Zip</b> <input type="text" name="zip1" size="15"/></pre></label>
        <h3 style="color:red">Additional Information</h3>
        <pre><p> Please enter your name, company or organization as you would like it to appear in our publications:</p></pre>
    <label> <pre><b>                      Name</b> <input type="text" name="name2"/></pre></label>    
    <pre><input type="checkbox" name="iwould"><label> I would like to remain my donation anonymous.</label></pre>
    <pre><input type="checkbox" name="giftprogam"><label> My employers offers a matching gift program. I will mail the matching gift form.</label></pre>
    <pre><input type="checkbox" name="pleasesave"><label> Please save the cost of acknowledging this gift by not mailing a thank you letter.</label></pre>
    <label> <pre><b>                  Comments </b></pre></label> 
    <pre>                           <textarea rows="5" cols="45" name="textarea"></textarea></pre>                                       
    <pre><h6>(Please type any questions or feedback
                                 here)</h6></pre></p>
    <pre><label><b>    How may we contact you?</b></label><input type="checkbox" name="email1"> E-mail</label>
                           <input type="checkbox" name="postalmail"> Postal Mail</label>
                           <input type="checkbox" name="telephone"> Telephone</label>
                           <input type="checkbox" name="fax1"> Fax</label></pre>
    <pre><p>I would like to receive newsletters and information about special events by:</p></pre>
    <pre>                           <input type="checkbox" name="email2"><label> E-mail</label>
                           <input type="checkbox" name="postalmail1"><label> Postal Mail</label></pre>
                           <pre><input type="checkbox" name="iwould1"><label> I would like information about volunteering with the</label></pre>
    <pre>                           <button type="reset">Reset</button> <button>Continue</button></pre>                 
    <pre><img src="D:/Summer 2022-23 10th sem/Web Tech/Mid/Lab/lock.PNG" alt="" height="20" >Donate online with confidence. You are on a secure server </h5></pre>
    <pre><p>If you have any problems or questions, please contact support.</p></pre> 
				
				<input type="submit" name="signup" value="Signup"> 
				
			</form>

<?php
	if(isset($_POST['signup']))
	{
		//echo "Registration successfull";
        session_start();
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
        $cname = $_POST['cname'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
		$zip = $_POST['zip'];
		$phone = $_POST['phone'];
		$fax = $_POST['fax'];
        $email = $_POST['email'];
        $radio1 = $_POST['radio1'];
        $radio2 = $_POST['radio2'];
        $radio3 = $_POST['radio3'];
        $radio4 = $_POST['radio4'];
        $radio5 = $_POST['radio5'];
        $radio6 = $_POST['radio6'];
		$amount = $_POST['amount'];
		$recurring = $_POST['recurring'];
		$monthcr = $_POST['monthcr'];
		$monthcr2 = $_POST['monthcr2'];
        $radio7 = $_POST['radio7'];
        $radio8 = $_POST['radio8'];
        $name = $_POST['name'];
        $ack = $_POST['ack'];
        $address = $_POST['address'];
        $city1 = $_POST['city1'];
        $zip1 = $_POST['zip1'];
        $name2 = $_POST['name2'];
        $iwould = $_POST['iwould'];
        $giftprogram = $_POST['giftprogram'];
        $pleasesave = $_POST['pleasesave'];
        $textarea = $_POST['textarea'];
        $email1 = $_POST['email1'];
        $postalmail = $_POST['postalmail'];
        $telephone = $_POST['telephone'];
        $fax1 = $_POST['fax1'];
        $email2 = $_POST['email2'];
        $postalmail1 = $_POST['postalmail1'];
        $iwould1 = $_POST['iwould1'];



		if($zip == $zip1)
		{
			//database query
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['cname'] = $cname;
			$_SESSION['address1'] = $address1;
			$_SESSION['address2'] = $address2;
			$_SESSION['city'] = $city;
			//$_SESSION['zip'] = $zip;
            $_SESSION['phone'] = $phone;
            $_SESSION['fax'] = $fax;
            $_SESSION['email'] = $email;
            $_SESSION['radio1'] = $radio1;
            $_SESSION['radio2'] = $radio2;
            $_SESSION['radio3'] = $radio3;
            $_SESSION['radio4'] = $radio4;
            $_SESSION['radio5'] = $radio5;
            $_SESSION['radio6'] = $radio6;
            $_SESSION['amount'] = $amount;
            $_SESSION['recurring'] = $recurring;
            $_SESSION['monthcr'] = $monthcr;
            $_SESSION['monthcr2'] = $monthcr2;
            $_SESSION['radio7'] = $radio7;
            $_SESSION['radio8'] = $radio8;
            $_SESSION['name'] = $name;
            $_SESSION['ack'] = $ack;
            $_SESSION['address'] = $address;
            $_SESSION['city1'] = $city1;
            //$_SESSION['zip1'] = $zip1;
            $_SESSION['name2'] = $name2;
            $_SESSION['iwould'] = $iwould;
            $_SESSION['giftprogram'] = $giftprogram;
            $_SESSION['pleasesave'] = $pleasesave;
            $_SESSION['textarea'] = $textarea;

            $_SESSION['telephone'] = $telephone;
            $_SESSION['fax1'] = $fax1;
            $_SESSION['email2'] = $email2;
            $_SESSION['iwould1'] = $iwould1;

			header("location: RegiSuccess.php");
		}
	
	}
?>


			<br>
			<form method="post" action="Registration.php">
				<input type="submit" name="back" value="Back">
			</form>
		</fieldset>
	</center>
</body>
</html>
<?php
	if(isset($_POST['back']))
	{
		header("location: Login.php");
	}
?>