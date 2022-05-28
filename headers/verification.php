<?php
include 'dbconnect.php';
require './vendor/autoload.php';

function get_email($connect)
{
	if(isset($_SESSION['user_id']))
	{
		$query = "
		SELECT email_id FROM signup
		WHERE signup.userid = '".$_SESSION['user_id']."'
		";

		$result = $connect->query($query);

		foreach($result as $row)
		{
			return $row["email_id"];
		}
	}
}


			$mail = new PHPMailer(true);

			$mail->isSMTP();

			$mail->Host = 'smtp.gmail.com';

			$mail->SMTPAuth = true;

			$mail->Username = 'lmsdept22@gmail.com';

			$mail->Password = 'Pwdis1234#';

			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

			$mail->Port = 587;

			$mail->setFrom('Popcorntimes.org', 'Popcorn Times');

			$mail->addAddress(get_email(3));

			$mail->isHTML(true);

			$mail->Subject = 'Thank you for booking';

			$mail->Body = '
			 <p>Thank you forBooking for ptimes <br> Your Unique ID is <b>3</b>.</p>

                <p>This is a verification email, please click the link to verify your email address.</p>
                <p class="btn btn-primary"><a href="'.base_url().'verify.php?code=3">Click to Verify</a></p>
                <p>Thank you...</p>
			';

			$mail->send();
?>