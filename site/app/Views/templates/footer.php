<!-- ##### Follow Us Instagram Area Start ##### -->
<div class="follow-us-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Follow Us Instragram</h5>
                </div>
            </div>
        </div>
        <!-- Instagram Feeds -->
        <div class="insta-feeds d-flex flex-wrap">
            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="<?=base_url()?>/img/bg-img/insta1.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="<?=base_url()?>/img/bg-img/insta2.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="<?=base_url()?>/img/bg-img/insta3.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="<?=base_url()?>/img/bg-img/insta4.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="<?=base_url()?>/img/bg-img/insta5.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="<?=base_url()?>/img/bg-img/insta6.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Insta Feeds -->
            <div class="single-insta-feeds">
                <img src="<?=base_url()?>/img/bg-img/insta7.jpg" alt="">
                <!-- Icon -->
                <div class="insta-icon">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Follow Us Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info text-right">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href=""><img src="<?=base_url()?>/img/core-img/logo.jpg" alt=""></a>
                    </div>
                    <!-- Copywrite -->
                    <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Foodsmart inc</a>
</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?=base_url('js/jquery/jquery-2.2.4.min.js')?>"></script>
    <!-- Popper js -->
    <script src="<?=base_url('js/bootstrap/popper.min.js')?>"></script>
    <!-- Bootstrap js -->
    <script src="<?=base_url('js/bootstrap/bootstrap.min.js')?>"></script>
    <!-- All Plugins js -->
    <script src="<?=base_url('js/plugins/plugins.js')?>"></script>
    <!-- Active js -->
    <script src="<?=base_url('js/active.js')?>"></script>

    <script src="<?=base_url("js/plugins/jquery.star-rating-svg.js")?>"></script>
    <!-- summernote js -->
    <script src="<?=base_url("js/summernote-lite.js")?>"></script>
    <script>
    <?php if($manu['detailsReceipe'] == 'active') { ?>
        $(".my-rating").starRating({
            initialRating: <?=$rating?>,
            strokeColor: '#894A00',
            strokeWidth: 10,
            starSize: 25,
            callback: function(currentRating, $el){
                <? if(isset($_SESSION['usrName']) && $_SESSION['usrName'] != null) { ?>
                    $.get('<?=base_url('recipe/setRating/'.$recipes->id.'/'.$_SESSION['userId'])?>/' + currentRating);
                <? } else { ?>
                    alert("Please login for rating");
                <?php } ?>
            }
        });
    
    <?php } if($manu['creatRecipe'] == 'active') { ?>

    $('#details').summernote({
        placeholder: 'Write task here....',
        tabsize: 2,
        height: 320,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript', 'underline']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
		  ['fontsize', ['fontsize']],
          ['insert', ['link', 'picture']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
      <?php } ?>
    </script>
    
</body>
</html>