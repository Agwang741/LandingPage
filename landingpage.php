<!DOCTYPE html>
<html>
<title>Baby Hats Landing Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://birchtreedev.com/supportfiles/btd-style.css">
<link rel="stylesheet" href="lp-style.css">
<body>

<!----------------------------------------------------------->
<!-- This section is for the header                        -->
<?php readfile("https://birchtreedev.com/includes/btd-nav.php"); ?>
<!----------------------------------------------------------->

<dev class="btd-content btd-padding responsive" style="max-width:1564px">
<!-- Page content -->
<header id="header">
    <div class="btd-padding-64">
        <div class="logo">
            <img id="header-img" src="https://birchtreedev.com/projects/03LandingPage/pink-1153322_1280.png" alt="pink heart" width="57" height="100">
        </div>
        <nav id="nav-bar">
            <h4>
            <a class="nav-link" href="#store">Store</a>
            <a class="nav-link" href="#pricing">Pricing</a>
            <a class="nav-link" href="#features">Features</a>
            </h4>
        </nav>
        <br><br><h1 class="btd-center" id="title"> Knitted and Crocheted Baby Hats </h1>
    </div>
</header>

<main id="main" class="">
<!-- Enter for coupon code -->
<section id="discounts">
    <div class="btd-padding-lp">
        <h2 class="btd-center" id="title"> Get 20% Off On Your Next Purchase! </h2>
        <form id="form" action="https://www.freecodecamp.com/email-submit">
            <br><div class="btd-center">
                <label id="name-label" for="name">Name</label>
                <input type="text" name="name" id="name" class="btd-center form-control" placeholder="Enter your name" required>
            </div>

            <br><div  class="btd-center">
                <label id="email-label" for="name">Email</label>
                <input type="email" name="email" id="email" class="btd-center form-control" placeholder="Enter your email" required>
            </div>

            <br><div class="btd-center">
                <input type="submit" value="Get Your Free Coupon Code" id="submit" class="btd-center submit-button">
            </div>
        </form>
    </div>
</section>

<section id="store">
    <div class="btd-padding-64 btd-center">
        <h2 class="btd-center" id="title"> Baby Hat Store </h2>
        <video id="video" width="600" height="338" controls>
            <source src="knittedcrochetedbabyhats.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</section>

<section id="pricing">
    <div class="btd-padding-64">
        <h2 class="btd-center" id="title"> Baby Hat Pricing</h2>
        <div class="flex-container">
            <div>
                <img src="https://birchtreedev.com/projects/03LandingPage/thai-1605196_1920.jpg" alt="baby hat" width="200" height="133">
                <figcaption>$12.00<figcaption>
            </div>
            <div>
                <img src="https://birchtreedev.com/projects/03LandingPage/pants-1351450_1920.jpg" alt="baby hat" width="200" height="133">
                <figcaption>$18.00<figcaption>
            
            </div>
            <div>
                <img src="https://birchtreedev.com/projects/03LandingPage/cap-60342_1920.jpg" alt="baby hat" width="177" height="133">
                <figcaption>$9.00<figcaption>
            </div>
        </div>
    </div>
</section>

<section id="features">
    <div class="btd-padding-64">
        <h2 class="btd-center" id="title"> Baby Hat Features</h2>
        <div class="btd-center">
            <h3>Yarn</h3>
            <p>Yarn is made from soft organic cotton.  Dyes are hypoallergenic. Very gentle for newborn skin.</p>
            <h3>Colors</h3>
            <p>Additional color choices if you contact the store directly.</p>
            <h3>Sizing</h3>
            <p>0-3 months = 13-15" <br>
                3-6 months = 15-17" <br>
                6-9 months = 16-18" <br>
                9-12 months = 17-19" <br>
                1-2 Years/Toddler = 18-20"
            </p>
        </div>
    </div>
</section>

</main>
<!-- End page content -->
</dev>


<!-- Footer -->
<!----------------------------------------------------------->
<!-- This section is for the footer                        -->
<?php readfile("https://birchtreedev.com/includes/btd-footer.php"); ?>
<!----------------------------------------------------------->


</body>
</html>
