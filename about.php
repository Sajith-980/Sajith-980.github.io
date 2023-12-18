<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Apiral 360 | Online Shopping Site for Men like Sajith</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title">Who We Are ?</h3>
          <hr />
          <img
            src="https://images.unsplash.com/photo-1490578474895-699cd4e2cf59?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&h=400&q=80"
            class="img-fluid d-block rounded mx-auto image-thumbnail">
          <p class="mt-2">Welcome to Apiral 360, your go-to destination for online shopping designed with the modern man in mind. At Apiral 360, we understand that every man, just like Sajith, deserves a seamless and enjoyable shopping experience.

Apiral 360 is more than just an online shopping site; it's a lifestyle destination curated for the discerning gentleman. We offer a carefully selected range of products, from fashion and accessories to fitness and outdoor gear. Our commitment is to provide quality and style that aligns with the diverse tastes and preferences of men who appreciate the finer things in life.

Our journey began with a vision to create a space where men could effortlessly discover and acquire the latest trends, essential basics, and unique finds. Whether you're updating your wardrobe, exploring new fitness gear, or seeking the perfect gift, Apiral 360 is your one-stop-shop.

Join us on this exciting venture, and experience online shopping redefined for the modern man. Apiral 360: Elevate your style, enhance your lifestyle.


            sapiente blanditiis, expedita ipsam molestiae voluptates reprehenderit ea modi eaque rerum dicta dolores,
            iusto ullam aliquid non?
            Quidem quae odio nemo cumque consectetur natus doloremque voluptatem consequatur voluptate laboriosam, amet
            maiores excepturi sunt aliquid magni voluptatibus aperiam laudantium dolores reiciendis? Laborum laboriosam,
            nam ullam totam amet et.
            Earum recusandae voluptate accusantium, placeat alias consequuntur aspernatur sed explicabo impedit et aut
            assumenda hic repellendus esse facere ratione quod vitae laudantium. Obcaecati nobis sequi esse assumenda,
            rerum dolores pariatur.</p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h1 class="title">LIVE SUPPORT</h1>
            <h3>24 hours|7 days a week| 365 days a year call sajith Live Technical Support</h3>
          </span>
          <hr>
          <p>Welcome to Apiral 360, your go-to destination for online shopping designed with the modern man in mind. At Apiral 360, we understand that every man, just like Sajith, deserves a seamless and enjoyable shopping experience.

Apiral 360 is more than just an online shopping site; it's a lifestyle destination curated for the discerning gentleman. We offer a carefully selected range of products, from fashion and accessories to fitness and outdoor gear. Our commitment is to provide quality and style that aligns with the diverse tastes and preferences of men who appreciate the finer things in life.

Our journey began with a vision to create a space where men could effortlessly discover and acquire the latest trends, essential basics, and unique finds. Whether you're updating your wardrobe, exploring new fitness gear, or seeking the perfect gift, Apiral 360 is your one-stop-shop.

Join us on this exciting venture, and experience online shopping redefined for the modern man. Apiral 360: Elevate your style, enhance your lifestyle.


          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">Contact Form</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
          name="email">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  </div>
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
