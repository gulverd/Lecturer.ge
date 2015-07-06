

					<form action="" method="POST" enctype="multipart/form-data"> 
						<table>
							<tr>
								<td id="org_input_td">ორგანიზაციის დასახელება:</td>
								<td><input type="text" name="org_name" id="input_org"  Placeholder="მაგ: შავი ზღვის უნივერსიტეტი"></td>
							</tr>
							<tr>
								<td id="org_input_td">ორგანიზაციის საიდენტიფიკაციო კოდი:</td>
								<td><input type="text" name="org_tin" id="input_org" placeholder="მაგ: 222936633"/></td>
							</tr>
							<tr>
								<td id="org_input_td">ორგანიზაციის მისამართი:</td>
								<td><input type="text" name="org_address" id="input_org" placeholder="მაგ: მარჯანიშვილის 7ა"/></td>
							</tr>
							<tr>
								<td id="org_input_td">კონტაქტ პერსონა:</td>
								<td><input type="text" name="org_person_1" id="input_org" placeholder="მაგ: გიორგი გიორგაძე"/></td>
							</tr>
							<tr>
								<td id="org_input_td">კონტაქტ პერსონა 2:</td>
								<td><input type="text" name="org_person_2" id="input_org" placeholder="მაგ: თამარ მაისურაძე"/></td>
							</tr>
							<tr>
								<td id="org_input_td">საკონტაქტო ელ-ფოსტა:</td>
								<td><input type="email" name="org_email_1" id="input_org" placeholder="მაგ: info@organization.org"/></td>
							</tr>
							<tr>
								<td id="org_input_td">დამატებითი ელ-ფოსტა:</td>
								<td><input type="email" name="org_email_2" id="input_org" placeholder="მაგ: marketing@organization.org"/></td>
							</tr>
							<tr>
								<td id="org_input_td">ტელეფონის ნომერი:</td>
								<td><input type="text" name="org_phone" id="input_org" placeholder="მაგ: 2 XXX-YYY"/></td>
							</tr>
							<tr>
								<td id="org_input_td">მობილურის ნომერი:</td>
								<td><input type="text" name="org_mobile" id="input_org" placeholder="მაგ: 5XY-XXX-YYY"/></td>
							</tr>
							<tr>
								<td id="org_input_td">ორგანიზაციიის ვეგ-გვერდი:</td>
								<td><input type="text" name="org_web" id="input_org" placeholder="მაგ: www.company.org"/></td>
							</tr>
							<tr>
								<td id="org_input_td">ორგანიზაციის ლოგო:</td>
								<td>
									<input type="file" name="file" id="file" size="80" accept="image/x-png, image/gif, image/jpeg" />
								</td>
							</tr>

							<tr>
								<td id="org_input_td">ორგანიზაციის ტექსტი:</td>
								<td><textarea name="org_text" id="org_text" placeholder="მაგ: ორგანიზაციის სლოგანი, სამომავლო გეგმები, თანამშრომლების რაოდენობა და ა.შ."></textarea></td>
							</tr>
							<tr>
								<td id="org_input_td">									
								</td>
								<td>
									<input type="submit" name="submit" value="დადასტურება" id="org_submit">
								</td>
							</tr>
						</table>
					</form>
<?php

mysql_connect("localhost","lecturer","11Md7yF6wTgN") or
		    die("Could not connect: " . mysql_error());
		mysql_select_db("lecturer_wordpress");

	
	if(isset($_POST['submit'])){
		$org_name = $_POST['org_name'];
		$org_tin  = $_POST['org_tin'];
		$org_address = $_POST['org_address'];
		$org_person_1 = $_POST['org_person_1'];
		$org_person_2 = $_POST['org_person_2'];
		$org_email_1  = $_POST['org_email_1'];
		$org_email_2  = $_POST['org_email_2'];
		$org_phone    = $_POST['org_phone'];
		$org_mobile	  = $_POST['org_mobile'];
		$org_web	  = $_POST['org_web'];

		$file_result = "";

			if($_FILES["file"]["error"] > 0){
				 $file_result .= "No File uploaded or invalid file";
				 $file_result .= "Error code".$_FILES["file"]["error"];
			}else{
		 $file_result .= 
			"Upload: "	 	. $_FILES["file"]["name"].'</br>'.
			"Type: "  		. $_FILES['file']["type"].'</br>'.
			"Size: "  		. ($_FILES['file']['size'] / 1024)."KB".'</br>'.
			"Temp file: "	. $_FILES['file']['tmp_name'].'</br>';

			move_uploaded_file($_FILES['file']['tmp_name'], '/org_imgs/'.$_FILES["file"]["name"]);
			
		  $file_path = '/org_imgs/'. $_FILES["file"]["name"];


		$org_logo_url = $_FILES["file"]["name"];
		$org_text = $_POST['org_text'];
	}	

	$sql = "INSERT INTO wp_terms (name,slug,org_name,org_tin,org_address,org_contact_person_1,org_contact_person_2,org_email_1,org_email_2,org_phone,org_mobile,org_web,org_logo_url,org_text)
		        VALUES('$org_name','organizations','$org_name','$org_tin','$org_address','$org_person_1','$org_person_2','$org_email_1','$org_email_2','$org_phone','$org_mobile','$org_web','$org_logo_url','$org_text');

		    INSERT INTO wp_term_taxonomy(taxonomy,description) VALUES ('category','$org_name')";
    $run = mysql_query($sql);

	}	
