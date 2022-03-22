<!doctype html>
<html lang="en">

<head>
    <?php
      include 'partials/header.php';  //Header - Bootstrap
    ?>

</head>

<body>

    <?php 
      include 'partials/title.php';  //Title of the business
      include 'partials/navbar.php';  //Navigation
    ?>

    <section class="page-section clearfix">
        <div class="container">
            <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Fresh Ideas</span>
                        <span class="section-heading-lower"> Succulent Tablescapes</span>
                    </h2>
                    <p class="mb-3">As much as we love DIY, budget-friendly and super personal weddings, we can't help
                        fall in love with Pinterest-perfect wedding table settings from time to time. You know the kind
                        of thing we mean - extravagant, drool-worthy dining space décor that can only be created by a
                        professional stylist (or styling team!) and that makes you stop dead in your tracks. If your
                        wedding planning philosophy is “more is more," this is the post for you! Bring on the wedding
                        tablescapes!
                    </p>
                    <div class="intro-button mx-auto">
                        <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner text-center rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Our Promise</span>
                            <span class="section-heading-lower">To You</span>
                        </h2>
                        <p class="mb-0">When you walk into our shop to desing your decoration for your great day, we are
                            dedicated to providing you with friendly service, a welcoming atmosphere, and above all
                            else, excellent products made
                            with the highest quality of flowers.From the bridal party bouquets to gorgeous centrepieces,
                            wedding flowers bring life and colour to your big day. That's why we've hunted down the best
                            wedding florists in Ireland.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Container with cards-->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Wedding Planning</div>
                    <div class="card-body">
                        <h5 class="card-title">Take noted</h5>
                        <p class="card-text">Has the wedding countdown began? We've got the best planning and advice
                            articles that will make your planning go more smoothly with our wedding planning guides,
                            month by month checklists, and info on wedding planning books, websites and apps.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Wedding Inspiration</div>
                    <div class="card-body">
                        <h5 class="card-title">The Details</h5>
                        <p class="card-text">It's the gorgeous little details that make your wedding day personal, and
                            we've covered everything from decor and stationery to accessories and cake design.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Wedding Essentials</div>
                    <div class="card-body">
                        <h5 class="card-title">Speeches</h5>
                        <p class="card-text">Today we're sharing a little Irish wedding inspiration! Whether you're the
                            born-and-raised-in-Tralee kind of Irish or the second-cousins-once-removed kind of Irish,
                            there are lots of ways to incorporate your heritage into your big day, and traditional Irish
                            wedding blessings and sayings are a great place to start!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
    include 'partials/footer.php'
    ?>

</body>


</html>