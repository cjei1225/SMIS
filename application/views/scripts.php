    <script src="<?php echo base_url(); ?>eden/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>eden/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>eden/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>eden/js/sb-admin-2.js"></script>
    <script src="<?php echo base_url(); ?>eden/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url(); ?>eden/js/bootstrap.min.js"></script>
<!-- Morris Charts JavaScript -->
      <script type="text/javascript" src="j<?php echo base_url(); ?>eden/s/morris/morris.js"></script>
        <script src="<?php echo base_url(); ?>eden/js/morris/raphael.min.js"></script>
   
<script>
    $(document).ready( function() {

        $('.navbar .dropdown, .dropdown-submenu').hover(function() {
            //$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
            //$(this).find('.dropdown-menu').show().removeClass('flipOutY').addClass('animated flipInY');
            //$(this).find('.dropdown-menu').show().removeClass('bounceOut').addClass('animated bounceIn');
            //$(this).find('.dropdown-menu').first().show();


        }, function() {
            //$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
            //$(this).find('.dropdown-menu').removeClass('flipInY').addClass('animated flipOutY').fadeOut();
            //$(this).find('.dropdown-menu').removeClass('bounceIn').addClass('animated bounceOut').fadeOut();
            //$(this).find('.dropdown-menu').first().hide();

        });

        $('#featureCarousel').carousel({
            interval:   4000
        });

        var clickEvent = false;
        $('#featureCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');
        }).on('slid.bs.carousel', function(e) {
            if(!clickEvent) {
                var count = $('#featureCarousel .nav').children().length -1;
                var current = $('#featureCarousel .nav li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));

                if(count == id) {
                    $('#featureCarousel .nav li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    });
</script>