<?php include 'top.php';



    if(isset($_POST['submit']))
    {
        $name=get_safe_value($db,$_POST['name']);
        $email=get_safe_value($db,$_POST['email']);
        $mobile=get_safe_value($db,$_POST['mobile']);
        $message=get_safe_value($db,$_POST['message']);
        $sql=mysqli_query($db,"insert into contact(name,email,mobile,message)
        values('$name','$email','$mobile','$message')");

        if($sql)
        {
            echo '<script type="text/javascript">';
          echo 'setTimeout(function () { swal("Thanks For Reaching Us","Our Team Will Contact You Soon :)","success");';
          echo '}, 1000);</script>';
        }
    }

?>
  <!-- Start Hero -->
  <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="assets/img/contact_hero_bg.jpeg">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Contact Us</h1>
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <div class="cs-height_150 cs-height_lg_80"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="cs-section_heading cs-style1">
          <h3 class="cs-section_subtitle">Getting Touch</h3>
          <h2 class="cs-section_title">Do you have a project <br>in your mind?</h2>
        </div>
        <div class="cs-height_55 cs-height_lg_30"></div>
        <ul class="cs-contact_info cs-style1 cs-mp0">
          <li>
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.08 11.82 12.69 11.9 12.41 12.17L10.21 14.37C7.38 12.93 5.06 10.62 3.62 7.79L5.82 5.58C6.1 5.31 6.18 4.92 6.07 4.57C5.7 3.45 5.5 2.25 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM9 0V10L12 7H18V0H9Z" fill="#FF4A17"></path>
            </svg>
            <span>+91 9176662788</span>
          </li>
          <li>
            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20 6.98V16C20 17.1 19.1 18 18 18H2C0.9 18 0 17.1 0 16V4C0 2.9 0.9 2 2 2H12.1C12.04 2.32 12 2.66 12 3C12 4.48 12.65 5.79 13.67 6.71L10 9L2 4V6L10 11L15.3 7.68C15.84 7.88 16.4 8 17 8C18.13 8 19.16 7.61 20 6.98ZM14 3C14 4.66 15.34 6 17 6C18.66 6 20 4.66 20 3C20 1.34 18.66 0 17 0C15.34 0 14 1.34 14 3Z" fill="#FF4A17"></path>
            </svg>
            <span>info@quazrmotors.in</span>
          </li>
          <li>
            <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z" fill="#FF4A17"></path>
            </svg>
            <span>Chennai Institute Technology Business Incubation Forum<br>Chennai, Tamil Nadu 600069</span>
          </li>
        </ul>
        <div class="cs-height_0 cs-height_lg_50"></div>
      </div>
      <div class="col-lg-6">
        <form action="#" method="POST" enctype="multipart/form-data" class="row">
          <div class="col-lg-12">
            <label class="cs-primary_color">Name*</label>
            <input type="text" name="name" id="name" class="cs-form_field" required onkeyup="return validateName()">
            <p id="errorname" style="color:red;font-style:bold"></p>
            <div class="cs-height_20 cs-height_lg_20"></div>
          </div>
          <div class="col-lg-12">
            <label class="cs-primary_color">Email*</label>
            <input type="email" name="email" id="email" class="cs-form_field" required onkeyup="return validateEmail()">
            <p id="errormobile" style="color:red;font-style:bold"></p>
            <div class="cs-height_20 cs-height_lg_20"></div>
          </div>
          <div class="col-lg-12">
            <label class="cs-primary_color">Mobile*</label>
            <input type="text" name="mobile" id="mobile" class="cs-form_field" required onkeyup="return validateMobile()">
            <p id="errormobile" style="color:red;font-style:bold"></p>
            <div class="cs-height_20 cs-height_lg_20"></div>
          </div>
          <div class="col-lg-12">
            <label class="cs-primary_color">Message*</label>
            <textarea cols="30" rows="7" name="message" id="message" class="cs-form_field" required></textarea>
            <div class="cs-height_25 cs-height_lg_25"></div>
          </div>
          <div class="col-lg-12">
            <button class="cs-btn cs-style1" type="submit"  name="submit">
              <span >Send Message</span>
              <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"/>
              </svg>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="cs-height_100 cs-height_lg_80"></div>
  <div class="cs-google_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1037.264309017039!2d80.04309400127167!3d12.970956461986072!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x722563c09b1871b3!2sQUAZR%20MOTORS%20PVT.%20LTD!5e0!3m2!1sen!2sus!4v1668626022289!5m2!1sen!2sus" allowfullscreen></iframe>
  </div>
  <div class="cs-height_50 cs-height_lg_40"></div>
  <?php include 'bottom.php'; ?>
  <script>
  function validateEmail() {
        var name = document.getElementById('email').value;
        if(name.length == 0 ) {
      let msg="Email can't be blank";
            document.getElementById('erroremail').innerHTML=msg;//Validation Message
          return false;

        }
        else if (name.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))  {
             let msgs="";
            document.getElementById('erroremail').innerHTML=msgs;//Validation Message
          return true;
        }
    else{
         let msg="please enter correct Email";
            document.getElementById('erroremail').innerHTML=msg;//Validation Message
          return false;
    }
    return true;
      }
  function validateName() {
        var name = document.getElementById('name').value;
        if(name.length == 0 ) {
      let msg="Name can't be blank";
            document.getElementById('errorname').innerHTML=msg;//Validation Message
          return false;

        }
        else if (name.match(/^[a-zA-Z ]*$/))  {
             let msgs="";
            document.getElementById('errorname').innerHTML=msgs;//Validation Message
          return true;
        }
    else{
         let msg="please enter correct value";
            document.getElementById('errorname').innerHTML=msg;//Validation Message
          return false;
    }
    return true;
      }
  function validateMobile () {
    var telnumber = document.getElementById('mobile').value;
    if(telnumber.length == 0) {
     let msg="Mobile Number can't be blank";
          document.getElementById('errormobile').innerHTML=msg;//Validation Message
      return false;
    }
    else if(telnumber.match(/^[0-9]{10}$/))
    {
      let msg=" ";
          document.getElementById('errormobile').innerHTML=msg;//Validation Message
      return true;
    }
       else{
            let msg="please enter correct Mobile Number";
          document.getElementById('errormobile').innerHTML=msg;//Validation Message
      return false;

       }
    return true;
  }
  </script>
