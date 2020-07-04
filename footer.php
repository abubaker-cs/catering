<script src="assets/js/vendor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>

<!-- Include js plugin -->
<script src="assets/plugins/owl_carousel/owl-carousel/owl.carousel.js"></script>

<!-- Contact Form.js -->
<script src="contact-form.js"></script>


<script src="assets/js/foundation.js"></script>

<script>
    $(document).foundation();

    $(document).ready(function() {

        $("#owl-slideshow").owlCarousel({

            navigation : false, // Show next and prev buttons
            slideSpeed : 300,
            autoPlay: 5000,
            paginationSpeed : 400,
            singleItem:true,
            pagination : false,
            paginationNumbers: false

            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false

        });

    });

</script>

</body>
</html>