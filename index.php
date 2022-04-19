<!doctype html>
<html lang="en">

<head>
    <?php
      include 'partials/header.php';  //Header - Bootstrap
    ?>

</head>

<body>

    <?php 
      include 'partials/navbar.php';  //Navigation
      include 'partials/title.php';  //Title of the business
    ?>

    <section class="page-section clearfix">
        <div class="container">
            <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/introS.jpg" alt="">
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Fresh Ideas</span>
                        <span class="section-heading-lower"> Succulent Tablescapes</span>
                    </h2>
                    <p class="mb-3">Succulents make excellent eco-friendly gifts and can be used to decorate rooms or outdoor spaces in tiny gardens. Simple and elegant succulent table decorations and centrepieces are simple to grow and look great, making them ideal complements for any style of house or event.
The Naff Luminosa collection of succulent-based creative centrepieces ideas may be used to create green table decorations for your rooms and outdoor spaces.
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
                        <p class="mb-0">When you come into our store to design your decorations for your special moments, we are dedicated to providing you with friendly service, 
                            a welcoming atmosphere and, above all, excellent products made with the highest quality flowers. From bridal shower bouquets to beautiful centrepieces, event flowers bring life and colour to your big occasion.</p>
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
                    <div class="card-header">Take noted</div>
                    <div class="card-body">
                        <h5 class="card-title">Unique center tables</h5>
                        <p class="card-text">Has the activity countdown began? We've got the best planning and advice
                            articles that will make your planning go more smoothly with our centers guides for events.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">The Details</div>
                    <div class="card-body">
                        <h5 class="card-title">For special occasion</h5>
                        <p class="card-text">It's the gorgeous little details that make your special day to celebrate, and
                            we've covered everything from decor and stationery to accessories and creative flower arrangement.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Essential Succulents</div>
                    <div class="card-body">
                        <h5 class="card-title">Buy single</h5>
                        <p class="card-text"> Succulents are some of the most popular types of houseplants and can be one of the easiest types of houseplant to care for!
                             Many thrive in bright rooms with lots of sunlight so choose a spot such as a windowsill in a bright living room or bedroom for the best growing conditions</p>
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