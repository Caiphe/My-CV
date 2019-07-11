  <?php
    include('db.php');
    $getTestimonials = $db->query('SELECT * FROM testimonials WHERE approve = 1 ORDER BY date_time ASC');

    ?>
  <!-- testimonials-section -->
  <div class="home-testimonials ">
      <div class="separator_section"></div>
      <div class="headinds_container" align="center">
          <h1 class="main_heading_gray" style="color:#fff;">Testimonials</h1>
          <h1 class="main_heading" data-aos="fade-up" data-aos-duration="800">Testimonials</h1>
          <div align="center">
              <p class="bottom_bar_cont" data-aos="fade-up" data-aos-duration="1400"></p>
          </div>
      </div>

      <div class="testimonials-container">

          <?php
            $testimonialCount = $getTestimonials->rowCount();
            if ($testimonialCount > 0) {
                while ($result = $getTestimonials->fetch()) {
                    ?>
                  <div class="testimonials-imnner">
                      <div class="quote-container">
                          <img src="Assets/icons/elem.png" />
                      </div>

                      <div class="testimonials-all" id="testimonials-all">
                          <div class="testimonials_test"><?= $result["messagebox"] ?> </div>
                          <div class="name_relationship">
                              <span class="full_name"><b> <?= $result["fullname"] ?> </b></span> | <span class="relationship"><?= $result["relationship"] ?></span>
                          </div>
                      </div>
                  </div>

              <?php
                }
            }
            ?>
      </div>
  </div>