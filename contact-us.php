<?php include 'header.php';

/* function contact($hid)
{
  global $connect;
  $sql = "INSERT INTO `contact`(`id`,`fullname`,`phonenumber`,`message`) 
      VALUES (NULL,'{$hid['fullname']}','{$hid['phonenumber']}',{$hid['message']})";
  $q = mysqli_query($connect, $sql);
}

$fullname = (isset($_POST['fullname'])) ? $_POST['fullname'] : NULL;
$phonenumber = (isset($_POST['phonenumber'])) ? $_POST['phonenumber'] : NULL;
$message = (isset($_POST['message'])) ? $_POST['message'] : NULL;

$sql = "INSERT INTO contact(fullname, phonenumber, message) VALUES('$fullname', '$phonenumber', '$message')";
$q = mysqli_query($connect, $sql); */

/* $fullname = "fullname";
$phonenumber = 'phonenumber';
$message = 'message'; */

$fullname = (isset($_POST['fullname'])) ? $_POST['fullname'] : NULL;
$phonenumber = (isset($_POST['phonenumber'])) ? $_POST['phonenumber'] : NULL;
$message = (isset($_POST['message'])) ? $_POST['message'] : NULL;
$send = (isset($_POST['go'])) ? $_POST['go'] : NULL;
if ($send == 'ok') {
  $sql = "INSERT INTO `contact` (`Id`, `fullname`, `phonenumber`, `message`)
 VALUES ('0', '$fullname', '$phonenumber', '$message')";

  $rs = mysqli_query($connect, $sql);
}



//$fullname = $_POST['fullname'];
//$phonenumber = $_POST['phonenumber'];
//$message = $_POST['message'];

/* $sql = "INSERT INTO `contact` (`Id`, `fullname`, `phonenumber`, `message`)
 VALUES ('0', '$fullname', '$phonenumber', '$message')";

$rs = mysqli_query($connect, $sql); */





?>




<!-- Page Title -->
<section class="page-title text-center bg-img overlay" style="background-image: url(img/page_title/contact_title_bg.jpg)">
  <div class="container relative clearfix">
    <div class="title-holder">
      <div class="title-text">
        <h1 class="uppercase">Contact</h1>
        <ol class="breadcrumb">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="index.html">Pages</a>
          </li>
          <li class="active">
            Contact
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>

<div class="content-wrapper oh">

  <!-- Contact -->
  <section class="section-wrap contact pb-40">
    <div class="container">
      <div class="row">

        <div class="col-md-8 mb-40">

          <form method="post" id="contact-form" action="">

            <div class="contact-name">
              <input name="fullname" id="name" type="text" placeholder="fullname*" required>
            </div>
            <div class="contact-email">
              <input name="phonenumber" id="mail" type="text" placeholder="phonenumber*" required>
            </div>
            <div class="contact-subject">
              <input name="subject" id="subject" type="text" placeholder="Subject">
            </div>
            <input type="hidden" name="go" value="ok">
            <textarea name="message" id="comment" placeholder="Message" rows="9" required></textarea>

            <input type="submit" name="Submit" id="Submit" value="Submit" class="btn btn-lg btn-dark btn-submit">
            <div id="msg" class="message"></div>
          </form>
        </div> <!-- end col -->

        <div class="col-md-3 col-md-offset-1 col-sm-5 mb-40">
          <div class="contact-item">
            <h6>Address</h6>
            <address>Sk shop<br>
              546 Little Lonsdale st<br>
              alger<br>
              PH 62058</address>
          </div> <!-- end address -->

          <div class="contact-item">
            <h6>Information</h6>
            <ul>
              <li>
                <i class="fa fa-envelope"></i><a href="mailto:theme@support.com">theme@support.com</a>
              </li>
              <li>
                <i class="fa fa-phone"></i><span>+1 (800) 888 5260 52 63</span>
              </li>
              <li>
                <i class="fa fa-print"></i><span>+1 (800) 888 5260 52 64</span>
              </li>
            </ul>
          </div> <!-- end information -->

          <div class="contact-item">
            <h6>Business hours</h6>
            <ul>
              <li>Monday – Friday: 9am to 20 pm</li>
              <li>Saturday: 9am to 17 pm</li>
              <li>Sunday: day off</li>
            </ul>
          </div> <!-- end business hours -->
        </div>

      </div>
    </div>
  </section> <!-- end contact -->

  <!-- Google Map -->
  <!-- <div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines"></div> -->







  <?php include 'footer.php'; ?>