<?php 

    $this->disableAutoLayout(); 
    
    $browser = new Browser();

?>

<!DOCTYPE html>

<?php echo $this->element('metatags/head'); ?>

<body data-spy="scroll" data-target="#navmenu">

    <div class="preloader">
        <div class="loaded">&nbsp;</div>
    </div>

    <header id="main_menu" class="header navbar-fixed-top">
        <?php echo $this->element('header/topbar'); ?>
        <?php echo $this->element('header/main-menu'); ?>
    </header>

    <?php echo $this->element('/sections/home'); ?>
    <?php echo $this->element('/sections/features'); ?>
    <?php echo $this->element('/sections/clients'); ?>
    <?php echo $this->element('/sections/pricing'); ?>

    <!-- End of contact With Map Section -->

    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="main_footer text-center">
                    <p>Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Bootstrap
                            Themes</a>2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer><!-- End of footer section -->

    <!-- STRAT SCROLL TO TOP -->

    <div class="scrollup">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div>

    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/isotope.min.js"></script>

    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="assets/js/gmaps.min.js"></script>
    <script>
        var map = new GMaps({
            el: '.map',
            scrollwheel: false,
            lat: -12.043333,
            lng: -77.028333
        });
    </script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>