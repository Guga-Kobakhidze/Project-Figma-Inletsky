<?php include_once "./assets/header.php" ?>
<?php include "./assets/functions/variables.php" ?>
<img class="BG_image" src="assets/images/secondBG.png" alt="BG">
<main class="main">
    <section class="main_section">
        <div class="main_section-contents">
            <div class="btn btn2">
                <a href="#">Explore what’s new with inletsky
                    <i class="bx bx-right-arrow-alt"></i></a>
            </div>
            <div class="flex_main-section">
                <div class="flex-content">
                    <?php echo $secondPageTitle[0][0];  ?>
                    <div class="flex_content-link">
                        <?php foreach ($flexContents as $flexContent) {
                            echo $flexContent;
                        } ?>
                    </div>
                    <a href="#">want a free consultation →</a>
                </div>
                <div class="flex-img">
                    <img src="assets/images/contentimg.svg" alt="contentimg" />
                </div>
            </div>
        </div>
    </section>
    <section class="second_section-page" id="Services">
        <div class="second_section-content">
            <?php echo $secondPageTitle[1][0] ?>
            <div class="container">
                <div class="web_cards">
                    <?php getWebCards($web_cards); ?>
                </div>
                <a class="link_after-card" href="#">hire dedicated developement team →</a>
            </div>
        </div>
    </section>
    <section class="third_section">
        <div class="container">
            <div class="second_section-content third_section-c">
                <?php echo $secondPageTitle[7][0] ?>
                <div class="third_section-gallery">
                    <?php foreach ($galleryImgs as $galleryImg) {
                        echo $galleryImg;
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="fourth_section">
        <div class="second_section-content third_section-c">
            <?php echo $secondPageTitle[2][0] ?>
        </div>
        <div class="img_cards">
            <?php getimgCards($imgCards); ?>
            <a class="img_cards-link" href="#">discuss my web app development project →</a>
        </div>
    </section>
    <section class="eighth_section">
        <div class="container">
            <div class="main_section-content eighth_content">
                <?php echo $secondPageTitle[3][0] ?>
            </div>
        </div>
    </section>
    <section class="fifth_section">
        <div class="second_section-content third_section-t">
            <?php echo $secondPageTitle[4][0] ?>
        </div>
        <div class="second_section second_page">
            <div class="container">
                <div class="carousel" data-carousel>
                    <button class="carousel-button prev" data-carousel-button="prev"><img src="assets/images/arrowleft.svg" alt="arrow" /></button>
                    <button class="carousel-button next" data-carousel-button="next"><img src="assets/images/arrowright.svg" alt="arrow" /></button>
                    <ul data-slides>
                        <?php getSliderCarousel($sliderCarousel1, []); ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="seventh_section">
        <div class="main_section-content seventh_content">
            <?php echo $secondPageTitle[5][0] ?>
        </div>
        <div class="container">
            <div class="text_borders">
                <?php getSecondBorder($secondBorder); ?>
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
</main>

<?php include "./assets/footer.php" ?>