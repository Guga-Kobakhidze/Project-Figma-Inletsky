<?php include_once "./assets/header.php" ?>
<?php include "./assets/functions/variables.php" ?>
<img class="BG_image3" src="assets/images/fourthpagebg.png" alt="BG">
<section class="main_section main_section-fourth">
    <div class="main_section-content">
        <?php getSections($title2, []); ?>
        <div class="rotate_links">
            <a class="rotate_link" href="#">Explore Now long</a>
            <img class="rotate_arrow" src="assets/images/arrow.png" alt="arrow" />
        </div>
    </div>
</section>
<section class="third_section_page3">
    <div class="grid_content">
        <div class="thirdPage_card">
            <?php echo $secondPageTitle[9][0] ?>
            <form class="download_forms-input" action="">
                <input class="download_input" type="text" name="name" placeholder="Name*" required>
                <input class="download_input" type="email" name="email" placeholder="Email*" required>
                <button type="submit" name="submit" class="btn submit_btn">SUBMIT →</button>
            </form>
        </div>
    </div>
</section>
<section class="fourth_section">
    <div class="second_section-content third_section-c">
        <?php echo $secondPageTitle[8][0] ?>
    </div>
    <div class="img_cards">
        <?php getimgCards($imgCards2, []); ?>
    </div>
</section>
<section class="fifth_section">
    <div class="second_section-content third_section-t">
        <?php echo $secondPageTitle[10][0] ?>
    </div>
    <div class="second_section second_page">
        <div class="container">
            <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev"><img src="assets/images/arrowleft.svg" alt="arrow" /></button>
                <button class="carousel-button next" data-carousel-button="next"><img src="assets/images/arrowright.svg" alt="arrow" /></button>
                <ul data-slides>
                    <?php getSliderCarousel($sliderCarousel2, [], []); ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="fifth_section">
    <div class="cards_section">
        <div class="selecting_card">
            <img src="assets/images/datacard3.png" alt="datacard">
            <h2>Selecting the Right Cloud for Your <br>Business.</h2>
            <p>There are a myriad of cloud options and service levels available today – the <br>challenge is to
                ensure that service capabilities align with your business <br>requirements and help your business
                accelerate growth and unlock innovation.
            </p>
            <div class="btn">
                <a href="#">Read Blog →</a>
            </div>
        </div>
        <div class="selecting_card">
            <img src="assets/images/datacard3.png" alt="datacard">
            <h2>How businesses can maximise the use of their <br>public cloud investment to emerge stronger</h2>
            <p>In the midst of the global pandemic, it has become very clear that the <br>
                different responses businesses have taken to the situation can <br>be tied to mindset.</p>
            <div class="btn">
                <a href="#">Learn More →</a>
            </div>
        </div>
    </div>
</section>
<section class="contact_section">
    <div class="main_section-content seventh_content">
        <?php echo $secondPageTitle[6][0] ?>
    </div>
    <div class="container" id="Contact">
        <div class="contact_section-forms">
            <?php echo $contactForms[0]; ?>
        </div>
    </div>
</section>


<?php include "./assets/footer.php" ?>