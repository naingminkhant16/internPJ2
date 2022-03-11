<?php require "header.php" ?>
<!-- banner carousel  -->
<div id="my-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <ol class="carousel-indicators" role="tablist">
        <li role="tab" data-bs-target="#my-carousel" data-bs-slide-to="0" class="active"></li>
        <li role="tab" data-bs-target="#my-carousel" data-bs-slide-to="1"></li>
        <li role="tab" data-bs-target="#my-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="overlay-image" style="background-image: url('images/slider1.jpg');">
            </div>
            <div class="car-item-container">
                <h2 class="car-title">We Offer Your Child <br> Different Kind Of <span style="color: orange;">Activities</span></h2>
                <hr>
                <small>Lorem ipsum dolor cum
                    enim, ipsa harum eveniet reiciendis rem in placeat deleniti aliquid quasi odit.</small>
                <br><br><a href="#" class="btn btn-sm btn-outline-light">Learn More</a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="overlay-image" style="background-image: url('images/slider2.jpg');">
            </div>
            <div class="car-item-container">
                <h2 class="car-title"><span style="color: orange;">Education</span> Needs<br>Complete Solution
                </h2>
                <hr>
                <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum debitis perspiciatis
                    ipsa,
                    tempore taque saepe, esse nam ipsum
                    sit voluptatibus accusamus magni.</small>
            </div>
        </div>
        <div class="carousel-item">
            <div class="overlay-image" style="background-image: url('images/slider3.jpg');">
            </div>
            <div class="car-item-container">
                <h2 class="car-title"><span style="color: orange;">digital education</span>
                    for<br>all children worldwide</h2>
                <hr>
                <small>Lorem maiores
                    necessitatibus nostrum enim cum numquam eum eveniet illum!</small>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#my-carousel" data-bs-slide="prev">
        <!-- <i class="fa-solid fa-angle-left" style="background-color:#1179EE;border-radius: 50%;padding:10px 15px;"
                aria-hidden="true"></i> -->
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#my-carousel" data-bs-slide="next">
        <!-- <i class="fa-solid fa-angle-right" style="background-color:#1179EE;border-radius: 50%;padding:10px 15px;"
                aria-hidden="true"></i> -->
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- register and get discount -->
<?php if (empty($_SESSION['user'])) : ?>
    <div class="alert alert-info py-2 " style="font-size:20px ;">
        <p class="container"><i class="fa-solid fa-circle-exclamation"></i>&nbsp;Register and get 5% discount on every course. <a href="register.php" style="font-size: 12px;color:#1179EE">Register Now</a></p>
    </div>
<?php endif; ?>
<!-- about us  -->
<div class="about container reveal active">
    <h3 class="text-center title">About Us</h3>
    <p class="text-center" style="color: black;font-size: 16px;">Our shcool's activities for your kid.</p><br>
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col reveal active">
            <img src="images/About Us.jpg" class="container-fluid" height="400" style="object-fit: fill;">
        </div>
        <div class="col p-5 reveal active" style="background-color:  #1179EE;">
            <h4>Who we are</h4><br>
            <p> <span style="color:orange;font-size: large;font-weight: bold;">Educare </span>International School
                is an academically focused school that wants to instill and develop
                strong
                core values in our students. We firmly believe in the importance and the power of quality education
                and
                how it can change lives, societies and countries.</p>
            <hr>
            <p>As a team, we are committed to educate our next
                generation and to prepare them to be ready for tomorrow’s world. We aim to deliver quality education
                to
                provide more opportunities and access.</p>
            <a href="#" class="btn btn-outline-light">Read More</a>
        </div>
    </div>
</div>
<!-- courses  -->
<div class="courses reveal active">
    <div class="container">
        <h3 class="text-center title text-light">Popular <span style="color: orange;">Courses</span></h3>
        <p class="text-center text-light">We offer some special courses for you kids.</p>
        <div class="row row-cols-1 row-cols-sm-3 g-3 g-sm-2 mt-3">
            <div class="col reveal active">
                <div class="card text-center">
                    <img src="images/course1.jpg" class="card-img-top" height="300">
                    <div class="card-body">
                        <h5 class="card-title text-center">Primary</h5>
                        <hr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="" class="btn btn-primary">Learn More <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col reveal active">
                <div class="card text-center">
                    <img src="images/course2.jpg" class="card-img-top" height="300">
                    <div class="card-body">
                        <h5 class="card-title text-center">Secondary</h5>
                        <hr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="" class="btn btn-primary">Learn More <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col reveal active">
                <div class="card text-center">
                    <img src="images/course3.jpg" class="card-img-top" height="300">
                    <div class="card-body">
                        <h5 class="card-title text-center">Summer Programs</h5>
                        <hr>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="" class="btn btn-primary">Learn More <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- activities  -->
<div class="activity reveal active">
    <h3 class="text-center title">Activities</h3>
    <p class="text-center">Our shcool's activities for your kid.</p>

    <div class="owl-carousel reveal active">
        <div id="act-img-container"> <img class="act-img" src="images/image1.jpg">
            <a class="middle" href="#">
                <div class="text">
                    <h6>Art</h6>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, qui.</p>
                </div>
            </a>
        </div>
        <div id="act-img-container"> <img class="act-img" src="images/image2.jpg">
            <a class="middle" href="">
                <div class="text">
                    <h6>Art</h6>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur,honey adipisicing elit. Iusto, qui.</p>
                </div>
            </a>
        </div>
        <div id="act-img-container"> <img class="act-img" src="images/image 3.jpg">
            <a class="middle" href="#">
                <div class="text">
                    <h6>Physical</h6>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur,honey adipisicing elit. Iusto, qui.</p>
                </div>
            </a>
        </div>
        <div id="act-img-container"> <img class="act-img" src="images/image 4.jpg">
            <a class="middle" href="#">
                <div class="text">
                    <h6>Physical</h6>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur,honey adipisicing elit. Iusto, qui.</p>
                </div>
            </a>
        </div>
        <div id="act-img-container"> <img class="act-img" src="images/image 5.jpg">
            <a class="middle" href="#">
                <div class="text">
                    <h6>Creativity</h6>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur,honey adipisicing elit. Iusto, qui.</p>
                </div>
            </a>
        </div>
        <div id="act-img-container"> <img class="act-img" src="images/image 6.jpg">
            <div class="middle">
                <a class="middle" href="#">
                    <div class="text">
                        <h6>Creativity</h6>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur,honey adipisicing elit. Iusto, qui.</p>
                    </div>
                </a>
            </div>
        </div>
        <div id="act-img-container"> <img class="act-img" src="images/image 7.jpg">
            <div class="middle">
                <a class="middle" href="#">
                    <div class="text">
                        <h6>Creativity</h6>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur,honey adipisicing elit. Iusto, qui.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php require "footer.html" ?>