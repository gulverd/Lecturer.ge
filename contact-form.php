<div class="container">
      <!-- Example row of columns -->

	<div class="row">
			<div class="col-sm-4 col-lg-4">
			
			<div class="panel" >
				<div class="panel-heading" id="days">
				  <h3><i class="icon-time main-color"></i> სამუშაო საათები</h3>
				</div>
				<div class="panel-body" id="days">
					<table class="table table-hover">
					  <tbody>
						<tr class="success">
						  <td>ორშაბათი</td>
						  <td>9:00 - 18:00</td>
						</tr>
						<tr class="success">
						  <td>სამშაბათი</td>
						  <td>9:00 - 18:00</td>
						</tr>
						<tr class="success">
						 
						  <td>ოთხშაბათი</td>
						  <td>9:00 - 18:00</td>
						</tr>
						<tr class="success">
						 
						  <td>ხუთშაბათი</td>
						  <td>9:00 - 18:00</td>
						</tr>
						<tr class="success">
						 
						  <td>პარასკევი</td>
						  <td>9:00 - 18:00</td>
						</tr>
						<tr class="warning">
						
						  <td>შაბათი</td>
						  <td>9:00 - 14:00</td>
						</tr>
						<tr class="danger">
						
						  <td>კვირა</td>
						  <td>დასვენება</td>
						</tr>
					  </tbody>
					</table>
					</div>
				</div>
			</div>
       <div class="col-12 col-lg-8" id="days">
	  
			<div class="panel">
				<div class="alert alert-danger" role="alert">
				საიტზე არსებული ტექნიკური სამუშაოების გამო, დროებით ამ საკონტაქტო ფორმის გამოყენება შეუძლებელია.</br>
				საკონტაქტოდ მოგვწერეთ info@lecturer.ge -ზე!
				</div>
					<div class="panel-heading">	
			<h3 class="">
				<i class="icon-envelope main-color"></i>
				მოგვწერეთ
			</h3>
			</div>
			<div class="panel-body">
			<!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->


<?php
if(isset($_POST['submit'])) 
{

$message=
'სრული სახელი:	'.$_POST['name'].'<br />
სათაური:	'.$_POST['subject'].'<br />
Email:	'.$_POST['email'].'<br />
შეტყონინება:	'.$_POST['message'].'
';
    require 'phpmailer/class.phpmailer.php'; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "vakhtang.pataraia@gmail.com"; // Your full Gmail address
    $mail->Password   = "vaxopataraia"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['email'], $_POST['name']);
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->Subject = ($_POST['subject']);      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("v_pataraia@cu.edu.ge", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? 'წარმატებით გაიგზავნა!' : 'გაგზავნა ვერ მოხერხდა!';      
	unset($mail);

}
?>
			
			<form method="post" action="<?php the_permalink(); ?>" name="form">
			      <div class="form-group">
				<input type="text" class="form-control" id="name" name="name" placeholder="სახელი და გვარი">
				<span class="help-block" style="display: none;">თქვენი სახელი და გვარი.</span>
			      </div>
			      <div class="form-group">
				<input type="email" class="form-control" id="email" name="email" placeholder="თქვენი ელ-ფოსტა">
				<span class="help-block" style="display: none;">თქვენი ელ-ფოსტა </span>
			      </div>
			       <div class="form-group">
				<input type="text" class="form-control" id="email" name="subject" placeholder="სათაური">
				<span class="help-block" style="display: none;">სათაური .</span>
			      </div>
			      <div class="form-group">
				<textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="თქვენი შეტყობინება"></textarea>
				<span class="help-block" style="display: none;">გთხოვთ შეიყვანოთ ტექსტი.</span>
			      </div>
	
			      <input type="submit" name="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" style="display: block; margin--p: 10px;" value="გაგზავნა"> 
			    </form>
			<!-- END CONTACT FORM -->
			</div>
			</div>			
		</div>
      </div>

      <hr>

    </div>
