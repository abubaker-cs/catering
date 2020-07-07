<!--=====================================================
= Divider: Contact us
======================================================-->
<section id="divider-contact" class="sec-divider">
    <img data-interchange="[images/dividers/contact/div_small.jpg, small],
                           [images/dividers/contact/div_medium.jpg, medium],
                           [images/dividers/contact/div_large.jpg, large]">
</section>

<!--=====================================================
= Content: Contact us
======================================================-->
<div id="sec-contact" class="sec-contact-container">


    <div class="grid-container">

        <section class="block-intro">
            <h2 class="section-heading">Contact us</h2>
            <p class="section-description lead">At <?php echo COMPANY_NAME; ?> we would love to hear from you, as your
                feedback and comments about our corporate catering services are very important to us. Thus, please don’t
                forget to contact us if you need any clarification or further information about a corporate catering
                order you have placed, or wish to book with us:</p>
        </section>

        <div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-3 contact_info">

            <div class="cell office_location">
                <h5 class="branch-name">Libya (Head Office)</h5>
                <span><i class="fas fa-mobile"></i> +218-92-220-1133</span><br>
                <span><i class="fas fa-mobile"></i> +218-91-220-1133</span><br>
                <span><i class="fas fa-fax"></i> +218-61-474-1810</span><br>
                <span>Bohdema Area, Benghazi</span><br>
            </div>

            <div class="cell office_location">
                <h5 class="branch-name">U.A.E (Branch)</h5>
                <span><i class="fas fa-mobile"></i> +971-4-259-4204</span><br>
                <span><i class="fas fa-fax"></i> +971-4-259-4673</span><br>
                <span>Al Ethihad Bldg, Flat #404,<br> 4th Floor, Port Saeed<br>
                P.O.Box: 42497<br>
                Deira , Dubai - U.A.E</span><br>
            </div>

            <div class="cell office_location">
                <h5 class="branch-name">U.K. (Branch)</h5>
                <span><i class="fas fa-mobile"></i> +44 (0) 7971868129</span><br>
                <span>Maple Cottage, Hornby,<br> Northallerton, DL6 2JQ.</span>
            </div>
        </div>

        <hr>

        <div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-2 contact_info">

            <div class="cell office_location">
                <h5 class="person-position">Chairman & General Manager </h5>
                <b class="person-name">Naser thabet</b><br>
                <span><i class="fas fa-envelope"></i> <a href="mailto:thabet@aoslibya.com" target="_top">thabet@aoslibya.com</a></span><br>
            </div>


            <div class="cell office_location">
                <h5 class="person-position">Executive Manager</h5>
                <b class="person-name">W.Bassili</b><br>
                <span><i class="fas fa-envelope"></i> <a href="mailto:bassili@aoslibya.com" target="_top">bassili@aoslibya.com</a></span><br>
            </div>

        </div>

    </div><!-- /.grid-container -->

    <section class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3142.8385607169757!2d20.11336909210705!3d32.07438284831972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13831c99a090a9d7%3A0xe2b6953cdeb9b332!2sBohdema%2C%20Benghazi%2C%20Libya!5e0!3m2!1sen!2s!4v1574796488947!5m2!1sen!2s"
                width="1400" height="400" style="border:0" allowfullscreen></iframe>
    </section>

    <div class="grid-container">

        <section class="block-intro">
            <h3 class="section-heading">Enquiry Form</h3>
        </section>

        <form action="process.php" id="contact-form" class="" role="form" method="post">

            <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-2">
                <div class="cell form-group" id="name-field">
                    <label for="form-name" class="col-lg-2 control-label">
                        <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Full Name"
                               required>
                    </label>
                </div>

                <div class="cell form-group" id="email-field">
                    <label for="form-email" class="col-lg-2 control-label">
                        <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email"
                               required>
                    </label>
                </div>
            </div>
            <!-- // Name + Email -->


            <div class="cell">
                <div class="form-group" id="subject-field">
                    <label for="form-subject" class="control-label">
                        <input type="text" class="form-control" id="form-subject" name="form-subject"
                               placeholder="Subject" required>
                    </label>
                </div>
            </div>
            <!-- // Subject -->


            <div class="cell">
                <div class="form-group" id="message-field">
                    <label for="form-message" class="control-label">
                        <textarea class="form-control" rows="6" id="form-message" name="form-message"
                                  placeholder="Your Message" style="min-height:200px;height:100%;width:100%;"
                                  required></textarea>
                    </label>
                </div>
            </div>
            <!-- Your Message -->

            <div class="text-center form-group">
                <button type="submit" class="button hvr-grow">Send Message</button>
            </div>
        </form>

    </div>
    <!-- row columns base -->


    <img class="footer_topper" src="images/footer-art-custom.svg" alt="Footer Topper">
</div><!-- /#sec-contact .sec-container -->

