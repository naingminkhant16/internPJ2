<?php require "header.php" ?>
<!-- contact us  -->

<div class="row container my-2 my-sm-5 g-3" style="margin: 0 auto;">
    <small class="direction"><a href="index.php">Home</a> <i class="fa-solid fa-angle-right"></i> <a href="contact.php">Contact Us</a></small>
    
    <div class="col col-12 col-md-8">
        <div style="margin:0 auto;max-width: 800px;">
            <h3 class="title">Stay in touch</h3>
            <p style="color: black;font-size: 16px;">You can manualy send us email on <a href="">info@educaremm.com</a></p>
            <form class="row g-3 py-2">
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Enter name.." />
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Email address.." />
                </div>
                <div class="col-md-12">
                    <label class="form-label">Subject</label>
                    <input type="text" class="form-control" placeholder="Subject.." />
                </div>
                <div class="col">
                    <label class="form-label">Message</label>
                    <textarea class="form-control" cols="30" rows="8" placeholder="Enter message.."></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="col col-12 col-md-4 side-contact">
        <h3 class="title">Contact Info</h3>
        <hr>
        <h6>Email:</h6>
        <p>info@educaremm.com</p>
        <hr>

        <h6>Phone:</h6>
        <p>+95 9742110221, 01 211 4321</p>
        <hr>

        <h6>Address:</h6>
        <p>No ( 3 ), Chan Mya Yate Mon Street,
            Bahan Township, Yangon, Myanmar</p>

    </div>
</div>
<?php require "footer.html" ?>