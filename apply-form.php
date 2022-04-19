<?php /* Template Name: Apply Now */ 

get_header(); 
if (isset($_POST['submit'])) {
//user posted variables
$firstname = $_POST['firstname'];
$lirstname = $_POST['lastname'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$optradio = $_POST['optradio'];
$optradio1 = $_POST['optradio1'];
$reading = $_POST['reading'];
$writing = $_POST['writing'];
$listing = $_POST['listing'];
$speaking = $_POST['speaking'];
$fileupload = $_POST['fileupload'];

$bodyContent = '<html><body>';
$bodyContent = '<table style= "border-color: #666;" cellpadding="10" >';
$bodyContent= "<tr>";
$bodyContent .= "<tr style='background: #eee;'> <td><strong> Name </strong></td><td>".$firstname."  ".$lirstname."</td></tr>";
$bodyContent .= "<tr style='background: #eee;'> <td><strong> Email Id </strong></td><td>".$email."</td></tr>";
$bodyContent .= "<tr style='background: #eee;'> <td><strong> Whatsapp Number</strong></td><td>".$whatsapp."</td></tr>";
$bodyContent .= "<tr style='background: #eee;'> <td><strong> Have You Taken OET? *</strong></td><td>".$optradio."</td></tr>";
$bodyContent .= "<tr style='background: #eee;'> <td><strong> Have You Taken IELTS? *</strong></td><td>".$optradio1."</td></tr>";
$bodyContent .= "<tr style='background: #eee;'> <td><strong> Reading </strong></td><td>".$reading."</td></tr>";
$bodyContent .= "<tr style='background: #eee;'> <td><strong> Writing </strong></td><td>".$writing."</td></tr>";
$bodyContent .= "<tr style='background: #eee;'> <td><strong> Listing </strong></td><td>".$listing. "</td></tr>";
$bodyContent .= "<tr style='background: #eee;'> <td><strong> Speaking</strong></td><td>".$speaking."</td></tr>";

  $bodyContent.="</tr>";
  $bodyContent.="</table>";
  $bodyContent.= "</body></html>";
// Send attachment into Mail
    $attachments = wp_upload_bits( $_FILES['fileupload']['name'], 
    null, @file_get_contents( $_FILES['fileupload']['tmp_name'] ) ); 

   //  Here put your email ID
    $email = "sendto@example.com";

    $to = $email; // $_POST['email']; //sendto@example.com
    $subject = 'Application Received from Website';
    $body = $bodyContent;
    //$attachments = array() ); 
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
   wp_mail( $to, $subject, $body, $headers,  $attachments);
   
   //echo "Mail Sent. Thank you " .$firstname. ", we will contact you shortly.";
    }
?>
	  <!-- start page-title -->

	  <section class="page-title">

            <div class="page-inner-wrap">

                <div class="container">

                    <div class="row">

                        <div class="col col-xs-12">

                            <h2>Apply Now</h2>

                                <ol class="breadcrumb">

                                    <li><a href="<?php echo site_url();?>">Home</a></li>

                                    <li>Apply Now</li>

                          </ol>

                        </div>

                    </div> <!-- end row -->

                </div> <!-- end container -->

                <div class="page-title-shape-1 wow fadeInDown" data-wow-duration="0.9s" data-wow-delay=".3s"></div>

                <div class="page-title-shape-2 wow fadeInDown" data-wow-duration="0.9s"

                data-wow-delay=".3s">

                <img src="<?php //echo get_template_directory_uri();?>/assets/images/page-title-shape-1.png" alt="">

                </div>

            <div class="page-title-shape-3 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay=".3s">

            <img src="<?php //echo get_template_directory_uri();?>/assets/images/page-title-shape-2.png" alt="">

                </div>

            </div>

        </section>

        <!-- end page-title -->



         <!-- start of wpo-service-section-s3 -->

         <section class="wpo-service-section-s4 section-paddings">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <div class="wpo-section-title">

                            <!-- <span>Our Services</span> -->

                            <h2>Apply Now</h2>

                        </div>

                    </div>

                </div>

                <div class="row">

              </div>

            </div>

        </section>

        <!-- end of wpo-service-section-s3 -->
   <!-- start of Benefit section  -->

<div class="wpo-checkout-area">
            <div class="container">
                <form enctype="multipart/form-data" method="POST" accept-charset="UTF-8" action="#" >
                
                    <div class="checkout-wrap">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                
                                <div class="caupon-wrap s3 coupon-2">
                                    <div class="payment-area">
                                                <div class="payment-option">
                                                <div class="contact-form form-style">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-12 col-12">
                                                                    <label for="First Name">First Name</label>
                                                                    <input type="text" placeholder="" id="FirstName" name="firstname">
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 col-12">
                                                                    <label for="Last Name">Last Name</label>
                                                                    <input type="text" placeholder="" id="lastName" name="lastname">
                                                                </div>
<div class="col-lg-6 col-md-12 col-12">
                                                                    <label for="email">Email Id</label>
                                                                    <input type="text" placeholder="" id="email" name="email">
                                                                </div>
<div class="col-lg-6 col-md-12 col-12">
                                                                    <label for="whatsapp">Whatsapp Number</label>
                                                                    <input type="text" placeholder="" id="whatsapp" name="whatsapp">
                                                                </div>
                                                                
                                                            </div>
                                                  </div>
                                                
                                                
                                                
                                                    <div class="payment-select">
                                                    <label for="Have You Taken OET">Have You Taken OET? <sup style="color:red">*</sup></label>
                                                        <ul>
                         <li class=""> <input type="radio"  id="radio1" name="optradio" value="Yes" checked="checked" > Yes   </label> </li>
                          <li class=""> <input type="radio"  id="radio2" name="optradio" value="No" > No   </label></li>
                                                        </ul>
                                                    </div>
                                                    
                                                    
                                                    <div class="payment-select">
                                                    <label for="Have You Taken IELTS ">Have You Taken IELTS? <sup style="color:red">*</sup></label>
                                                        <ul>
                      <li class=""> <input type="radio"  id="ielts1"  name="optradio1" value="Yes" checked="checked" > Yes   </label> </li>
                          <li class=""> <input type="radio"  id="ielts2" name="optradio1" value="No" > No   </label></li>
                                                        </ul>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="contact-form form-style">
                                                            <div class="row">
<div class="col-lg-6 col-md-12 col-12">
                                                                    <label for="holder">Reading</label>
                                                                    <input type="text" placeholder="" id="Reading" name="reading">
                                                                </div>
<div class="col-lg-6 col-md-12 col-12">
                                                                    <label for="Writing">Writing</label>
                                                                    <input type="text" placeholder="" id="Writing" name="writing">
                                                                </div>
<div class="col-lg-6 col-md-12 col-12">
                                                                    <label for="Listing">Listing</label>
                                                                    <input type="text" placeholder="" id="Listing" name="listing">
                                                                </div>
<div class="col-lg-6 col-md-12 col-12">
                                                                    <label for="Speaking">Speaking</label>
                                                                    <input type="text" placeholder="" id="Speaking" name="speaking">
                                                                </div>
                                                                
                                                                <div class="col-lg-12 col-md-12 col-12">
                                                                    <label for="Speaking">Attach CV <sup style="color:red">*</sup></label>
                                        <input type="file" id="fileUpload" name="fileupload" class="file" style="border: 0px !important; padding-top: 10px;">
                                                                </div>
                                                                
                                                                <div class="col-lg-12 col-md-12 col-12">
                                                                    <div class="submit-btn-area text-right">
                                                                        <button class="theme-btn" type="submit" name ="submit"  >Apply Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                  </div>
                                                </div>
              </form>
  </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-5 col-12">
                                <div class="cout-order-area">
                                    <div class="education-area ex-wiget pd10">
                                <h2>You Can Apply if</h2>
                                <ul>
                                    <li>You are a nurse who has a Diploma/Degree</li>
                                    <li>You are Registered Nurse</li>
                                    <li>You are with a minimum of 6 Months of Clinical experience </li>
                                    <li>You Should have passed your IELTS with an overall of 6.5 or OET with no band less then C+</li>
                                </ul>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                      <div class="col-lg-12 col-12 mar20">
                                <table class="table table-bordered">
  <thead>
    <tr bgcolor ="#f8f8f8">
      <th scope="col">Test</th>
      <th scope="col">Listening</th>
      <th scope="col">Reading</th>
    <th scope="col">Speaking</th>
        <th scope="col">Writing</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">IELTS</th>
      <td>7.0</td>
      <td>7.0</td>
      <td>7.0</td>
      <td>6.5</td>
    </tr>
    <tr>
      <th scope="row">OET</th>
      <td>B</td>
      <td>B</td>
      <td>B</td>
        <td>C+</td>
    </tr>
    
  </tbody>
</table>
                                
                                
                            </div>
                            
                        </div>
                        
                        
                      
                    </div>
                </form>
            </div>
        </div>



	<?php get_footer(); ?>

    