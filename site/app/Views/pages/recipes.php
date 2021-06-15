<!-- ##### Small Receipe Area Start ##### -->
<section class="small-receipe-area section-padding-80-0">
        <div class="container">
            <div class="row">
            <?php foreach ($recipes->getResult() as $row) { ?>
                <!-- Small Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-small-receipe-area d-flex">
                        <!-- Receipe Thumb -->
                        <div class="receipe-thumb">
                            <img src="<?=base_url()?>/img/bg-img/<?=$row->images?>" alt="">
                        </div>
                        <!-- Receipe Content -->
                        <div class="receipe-content">
                            <span><?=$row->postDate?></span>
                            <a href="<?=base_url('recipe/index/'.$row->id)?>">
                                <h5><?=$row->recipeTitle?></h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                

                
            </div>
        </div> 
    </div>
<section 

                