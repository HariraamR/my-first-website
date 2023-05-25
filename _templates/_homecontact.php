<?php
$messagesent=false;
if (isset($_POST['Emailaddress']) && $_POST['Emailaddress'] !='') {
    if (filter_var($_POST['Emailaddress'], FILTER_VALIDATE_EMAIL)) {
        $name = $_POST['name'];
        $email= $_POST['Emailaddress'];
        $message= $_POST['content'];
        $to = "hello@vigneshsb.me";
        $subject = "Mail From website";
        $body ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
        mail($to, $subject, $message);
        //redirect
        //header("Location:#");
        $messagesent=true;
    } else {
        header("Location:emailerror.html");
    }
}
?>
<section class="bg-color p-5">
	<div class="container">
		<div class="contact-us">
			<div class="row">
				<div class="col-md-11 text-center">
					<h2>Contact Us</h2>
					<span class="title-border"></span>
					<p style="text-align: center;">
						We would be glad to have feedback from you. Drop us a line, whether it is a comment, a question,
						a work proposition or just a hello. You can use either the form below or the contact details on
						the right. </p>
				</div>
			</div>
			<div class="row contact">
				<div class="col-md-4 text-center">
					<i class="fas fa-mobile-alt fa-3x color"></i>
					<h5 class="mt-3">Phone</h5>
					<p>+91 99655 53245</p>
				</div>
				<div class="col-md-4 text-center">
					<i class="fas fa-map-marker-alt fa-3x color"></i>
					<h5 class="mt-3">Address</h5>
					<p>25, Jawahar Street, Gandhi Nagar, Madurai-20</p>
				</div>
				<div class="col-md-4 text-center">
					<i class="far fa-envelope-open fa-3x color"></i>
					<h5 class="mt-3">Email</h5>
					<p>hariraam@bharathprecastiik.works</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-8 ">
					<?php
              if ($messagesent):
                  ?>
					<p style="font-family: 'Finlandica', sans-serif;
                font-size: 25px;text-align: center;">Thankyou for contacting us.</p>
					<?php
              else:
                  ?>
					<form action="index.php" method="POST">
						<div class="input-group input-group-lg mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-user"></i>
								</span>
							</div>
							<input type="text" name="name" class="form-control" placeholder="Name">
						</div>

						<div class="input-group input-group-lg mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-envelope"></i>
								</span>
							</div>
							<input type="email" name="Emailaddress" class="form-control" placeholder="Email">
						</div>

						<div class="input-group input-group-lg mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-pencil-alt"></i>
								</span>
							</div>
							<textarea class="form-control" name="content" placeholder="Message" rows="5"></textarea>
						</div>

						<input style="align-items: center" type="submit" value="Submit" class="btn btn-main btn-lg m-3">
					</form>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</section>
<style>
	.contact-us .title-border {
		content: "";
		width: 30%;
		height: 2px;
		display: block;
		background: block;
		background-color: #01012e;
		border-radius: 50%;
		margin: 1%;
		margin-left: 35%;
	}

	.contact .fas {
		color: #01012e;
	}

	.contact .far {
		color: #01012e;
	}
</style>