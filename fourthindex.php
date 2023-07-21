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
            <div class="btn btn2">
                <a href="#">Delivering optimal architecture and performance</a>
            </div>
            <h2>Cost-effective way possible <br>
                through cloud IT solutions.</h2>
            <p>Designed, implemented, and managed to deliver the highest performing and most secure <br>business cloud
                solutions, Inletsky Multi-Cloud and Hybrid Cloud Solutions deliver the right <br>application for your
                modern, dynamic, and flexible working environment.
            </p>
            <p>And because Inletsky fully managed Hybrid and Multi-Cloud environments can be <br>reconfigured at the
                flick of a switch to respond to the changing rhythm of your business, <br>you enjoy complete freedom,
                flexibility, and control in the cloud.</p>
        </div>
        <div class="download_forms">
            <h3>Free Download: Cloud <br>Best Practice Top Ten <br>Checklist</h3>
            <p>The top-ten priorities for selecting <br>the right cloud services for your <br>business. Our step-by-step
                checklist <br>puts you in the know.
            </p>
            <form class="download_forms-input" action="">
                <input class="download_input" type="text" name="name" placeholder="Name*" required>
                <input class="download_input" type="email" name="email" placeholder="Email*" required>
                <button type="submit" name="submit" class="btn submit_btn">SUBMIT →</button>
            </form>
        </div>
    </div>
</section>


<?php include "./assets/footer.php" ?>