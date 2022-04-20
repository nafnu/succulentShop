<!doctype html>
<html lang="en">

<head>
    <?php
      include 'partials/header.php';  //Header - Bootstrap
    ?>

<style>
section { 
  display: block;
}
</style>

</head>

<body>

    <?php 
    include 'partials/navbar.php';  //Navigation
      include 'partials/title.php';  //Title of the business
    ?>

<!-- Content page -->

<section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Come On In</span>
                <span class="section-heading-lower">We're Open</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sunday
                  <span class="ml-auto">Closed</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Monday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tuesday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Wednesday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Thursday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Friday
                  <span class="ml-auto">7:00 AM to 8:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                  <span class="ml-auto">9:00 AM to 5:00 PM</span>
                </li>
              </ul>
              </div>
          </div>
        </div>
      </div>
    </section>


<section class="attention">
  <div class="container">
  <div class="row">
          <div class="col-xl-9 mx-auto">
  <div class="card mb-3" style="max-width:950px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/contact.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Lets talk</span>
                                <span class="section-heading-lower">Personalized attention</span>
                            </h2>
                            <p>Our team can create the idea you have in mind and we will save you time.  Using our services is a practical method to save more time in those special events and live a more relaxed lifestyle. Personal Attention offers the tools and experience to meet your requests, wishes and expectations, whether for private clients or companies.</p>
                            <div class="button mx-auto">
                        <a class="btn btn-outline-dark btn-xl" href="mailto:artDecorScculent@shop.com"> BOOK A FREE CONSULTATION!</a>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>
  </div>
</section>

<section class="page-section cta">
		<div class="container">
      <div class="row">
        <div class="col-sm-6">
           
              <form action="handler/contact.php" method="post" enctype="multipart/form-data">
              <h2 class="section-heading mb-5">
                    <span class="section-heading-upper">Send Us</span>
                    <span class="section-heading-lower">A Message</span>
                  </h2>

                <div class="bor8 m-b-20 how-pos4-parent">
                  <input class="form-control" type="text" name="email" placeholder="Your Email Address">
                  <img class="how-pos4 pointer-none" src="img/icons/icon-email.png" alt="ICON">
                </div>
                <br>
                <div class="bor8 m-b-30">
                  <textarea rows="5" cols="10" class="form-control" type="text" name="msg" placeholder="How Can We Help?"></textarea>
                </div>

                <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                  Submit
                </button>
              </form>
           
        </div>
				<div class="col-sm-6">
            <p class="address mb-5">
              <small>
               <em><strong>Address</strong></em>
              </small>
              <br>
              <em>
              NAFF Decor 3 Grand Canal Plaza
              <br>
              Grand Canal Street Upper, Dublin, D04 EE70, Ireland
              </em>
            </p>
                  <p class="mb-0">
                    <small>
                      <em><strong>Call Anytime</strong></em>
                    </small>
                    <br>
                    +353 800 1236879
                  </p>

                  <p class="mb-0">
                    <small>
                      <em><strong>Sale Support</strong></em>
                    </small>
                    <br>
                    naff@shop.com
                  </p>

        </div>
      </div>
		</div>
	</div>
	</section>	
  
	

  <!-- Footer -->
  <?php
    include 'partials/footer.php'
    ?>

</body>


</html>