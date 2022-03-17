<?php require "header.php" ?>
<div class="container primary">
    <small class="direction"><a href="index.php">Home</a> <i class="fa-solid fa-angle-right"></i> <a href="primary.php">Primary Courses</a></small>
    <div class="row g-5">
        <div class="col col-12 col-md-10">
            <h5 class="title">Primary Courses</h5>
            <p class="course-text">
                &nbsp;&nbsp; In grades 1 to 3 at Educare, students participate in captivating storylines alongside intriguing characters. Through a balance of online and offline activities, students develop fundamental knowledge and skills. There’s no shortage of fun in learning at Educare!
                The primary mathematics courses develop students’ skills at counting, addition, subtraction, and the basics of multiplication and division. Students taking the language courses explore literary texts, such as fables, plays, poems, and novels. They embark on their science and technology journeys by learning about the characteristics of living things, structures, energy, and the environment. The social studies courses focus on communities, big and small, and different traditions.
            </p><br>
            <!-- primary courses -->
            <div class="row row-cols-1 row-cols-sm-2 g-2">
                <div class="col reveal active">
                    <div class="card mb-3" style="max-width: 600px;" id="math">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/course1.jpg" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Mathematics</h5>
                                    <div class="card-text">
                                        <small class="text-muted stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                            <span style="font-size: 10px;">(37)</span>
                                        </small>
                                    </div>
                                    <small class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio placeat assumenda odit cumque, maxime est eos nam voluptatem aut illo!.</small>
                                    <p class="card-text price">
                                        <?php if (!empty($_SESSION['user'])) : ?>
                                            &#36;24.3 <span class="text-decoration-line-through">&#36;27</span>
                                        <?php else : ?>
                                            &#36;27 <a href="register.php">Register and get 10% discount!</a>
                                        <?php endif; ?>
                                    </p>
                                    <span class="text-muted" style="font-size: 12px;"><i class="fa-solid fa-book-open"></i>&nbsp;8 lessons | Duration-4.5mth</span>
                                    &nbsp;&nbsp;<a href="" class="btn btn-sm btn-primary">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col reveal active">
                    <div class="card mb-3" style="max-width: 600px;" id="history">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/history.jpg" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">History</h5>
                                    <div class="card-text">
                                        <small class="text-muted stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                            <span style="font-size: 10px;">(32)</span>
                                        </small>
                                    </div>
                                    <small class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio placeat assumenda odit cumque, maxime est eos nam voluptatem aut illo!.</small>
                                    <p class="card-text price">
                                        <?php if (!empty($_SESSION['user'])) : ?>
                                            &#36;15.3 <span class="text-decoration-line-through">&#36;17</span>
                                        <?php else : ?>
                                            &#36;17 <a href="register.php">Register and get 10% discount!</a>
                                        <?php endif; ?>
                                    </p>
                                    <span class="text-muted" style="font-size: 12px;"><i class="fa-solid fa-book-open"></i>&nbsp;5 lessons | Duration-2.5mth</span>

                                    &nbsp;&nbsp;<a href="" class="btn btn-sm btn-primary">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col reveal active">
                    <div class="card mb-3" style="max-width: 600px;" id="geo">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/geo.jpg" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Geography</h5>
                                    <div class="card-text">
                                        <small class="text-muted stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <span style="font-size: 10px;">(27)</span>
                                        </small>
                                    </div>
                                    <small class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio placeat assumenda odit cumque, maxime est eos nam voluptatem aut illo!.</small>
                                    <p class="card-text price">
                                        <?php if (!empty($_SESSION['user'])) : ?>
                                            &#36;13.5 <span class="text-decoration-line-through">&#36;15</span>
                                        <?php else : ?>
                                            &#36;15 <a href="register.php">Register and get 10% discount!</a>
                                        <?php endif; ?>
                                    </p>
                                    <span class="text-muted" style="font-size: 12px;"><i class="fa-solid fa-book-open"></i>&nbsp;6 lessons | Duration-3mth</span>
                                    &nbsp;&nbsp;<a href="" class="btn btn-sm btn-primary">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col reveal active">
                    <div class="card mb-3" style="max-width: 600px;" id="eng">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/eng.jpg" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">English Language</h5>
                                    <div class="card-text">
                                        <small class="text-muted stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span style="font-size: 10px;">(45)</span>
                                        </small>
                                    </div>
                                    <small class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio placeat assumenda odit cumque, maxime est eos nam voluptatem aut illo!.</small>
                                    <p class="card-text price">
                                        <?php if (!empty($_SESSION['user'])) : ?>
                                            &#36;27 <span class="text-decoration-line-through">&#36;30</span>
                                        <?php else : ?>
                                            &#36;30 <a href="register.php">Register and get 10% discount!</a>
                                        <?php endif; ?>
                                    </p>
                                    <span class="text-muted" style="font-size: 12px;"><i class="fa-solid fa-book-open"></i>&nbsp;10 lessons | Duration-4.5mth</span>
                                    &nbsp;&nbsp;<a href="" class="btn btn-sm btn-primary">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php require "side-course.php" ?>
    </div>
</div>
<?php require "footer.html" ?>