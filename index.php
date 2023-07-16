<?php include_once "./header.php" ?>
<?php include "./assets/functions/variables.php" ?>
<img class="BG_image" src="assets/images/Inletsky.png" alt="BG">
<main class="main">
    <section class="main_section">
        <div class="main_section-content">
            <?php getSections($mainTitle); ?>
            <div class="rotate_links">
                <a class="rotate_link" href="#">Explore Now long</a>
                <img class="rotate_arrow" src="assets/images/arrow.png" alt="arrow" />
            </div>
        </div>
    </section>
    <section class="second_section">
        <div class="container">
            <div class="carousel" data-carousel>
                <button class="carousel-button prev" data-carousel-button="prev"><img src="assets/images/arrowleft.svg" alt="arrow" /></button>
                <button class="carousel-button next" data-carousel-button="next"><img src="assets/images/arrowright.svg" alt="arrow" /></button>
                <ul data-slides>
                    <?php getSliderCarousel($sliderCarousel, []); ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="third_section">
        <div class="container">
            <div class="main_section-content text_margin">
                <div class="btn btn2">
                    <img src="assets/images/btnclick.svg" alt="btn" />
                    <a href="#">Trusted by the industry leaders </a>
                </div>
                <h1>Our Clients</h1>
            </div>
            <div class="brand_logos">
                <div class="brand_logo-line">
                    <?php
                    getCombinedLogos($brandLogos1, [], []);
                    ?>
                </div>
                <div class="brand_logo-line">
                    <?php
                    getCombinedLogos($brandLogos2, [], []);
                    ?>
                </div>
                <div class="brand_logo-line">
                    <?php
                    getCombinedLogos($brandLogos3, [], []);
                    ?>
                </div>
            </div>
            <a class="link_center" href="#">View customere stories →</a>
        </div>
    </section>
    <section class="fourth_section">
        <div class="fourth_section-grid">
            <?php
            for ($i = 0; $i < count($gridContent[0]); $i++) {
                $content = $gridContent[0];
                echo '<div class="grid_content">
                    <div class="grid_card">
                        <div class="btn btn2">
                            <img src="assets/images/btnclick.svg" alt="btn" />
                            <a href="#">' . $content['buttonTitle'][$i]  . '</a>
                        </div>
                            <h3>' . $content['contentTitles'][$i] . '</h3>
                            <p>' . $content['contentText'][$i] . '</p>
                            <a href="#">' . $content['links'][$i] . '</a>
                        </div>
                            <img src="' . $content['imgs'][$i] . '" />
                        </div>';
            };
            ?>
        </div>
    </section>
    <section class="Fifth_section">
        <div class="main_section-content fifth_content">
            <?php getsection($section1, []); ?>
        </div>
        <div class="fifth_section-cards">
            <?php
            for ($i = 0; $i < 6; $i++) {
                echo '<div class="fv_card">
                    <div class="card_img">
                        <img src=" ' . $fv_card[0]['img'] . ' " alt="joe" />
                        <h4>' . $fv_card[0]['title'] . '</h4>
                    </div>
                        <p>' . $fv_card[0]['text'] . '</p>
                        <img src="' . $fv_card[0]['stars'] . '" />
                    </div>';
            };
            ?>
        </div>
        <div class="arrow_imgs fv_card-arrow">
            <a href=""><img src="assets/images/arrowleft.svg" alt="arrow" /></a>
            <a href=""><img src="assets/images/arrowright.svg" alt="arrow" /></a>
        </div>
    </section>
    <section class="sixth_section">
        <div class="fourth_section-grid">
            <?php
            for ($i = 0; $i < sizeof($gridContents[0]['links']); $i++) {
                $contents = $gridContents[0];
                echo '<div class="grid_content grid_content-sixth">
                <div class="grid_card">
                  <div class="btn btn2">
                        <img src="assets/images/btnclick.svg" alt="btn" />
                        <a href="#">' . $contents['buttonTitle'][$i] . '</a>
                  </div>
                        <h3>' . $contents['contentTitles'][$i] . '</h3>
                        <p>' . $contents['contentText'][$i] . '</p>
                        <a href="#">' . $contents['links'][$i] . '</a>
                </div>
                        <img src="' . $contents['imgs'][$i] . '" alt="gridimg" />
                </div>';
            }
            ?>
        </div>
    </section>
    <section class="seventh_section">
        <div class="main_section-content seventh_content">
            <div class="btn btn2">
                <img src="assets/images/btnclick.svg" alt="btn" />
                <a href="#">Question people often asks</a>
            </div>
            <h1 class="content_title">FAQs</h1>
        </div>
        <div class="container">
            <div class="text_borders">

                <?php
                for ($i = 0; $i < sizeof($borders['title']); $i++) {
                    echo '<div class="border"> 
                <div class="title_border">
                  <h3>' . $borders['title'][$i] . '</h3>
                  <img src="' . $borders['img'][$i] . '" alt="+" />
                </div>
                  <p class="text_border">' . $borders['text'][$i] . '</p>
                </div>';
                };
                ?>

            </div>
        </div>
    </section>
    <section class="eighth_section">
        <div class="container">
            <div class="main_section-content eighth_content">
                <?php getsection($section2, []); ?>
                <div class="eighth_button">
                    <div class="btn btn_register">
                        <a href="#">LOGIN →</a>
                    </div>
                    <div class="btn btn_register">
                        <a href="#">SIGNUP →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once "./footer.php" ?>