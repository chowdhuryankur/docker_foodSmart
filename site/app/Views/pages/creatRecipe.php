    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?=base_url()?>/img/bg-img/breadcumb4.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>Recipe</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

       <br /> 
       <br />
       <br />

    <!-- ##### Contact Form Area Start ##### -->
    <div class="contact-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Share New Recipe</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="contact-form-area">
                        <?php $validation = \Config\Services::validation(); ?>
                        <?=$validation->listErrors() ?>
                        <?=form_open('recipe/saveRecipe')?>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="racipeTitle" name="racipeTitle" placeholder="Racipe Name" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                <input type="file" id="recImage" name="recImage" class="form-control" >
                                </div>
                
                                <div class="col-12">
                                    <textarea name="details" class="form-control" id="details" cols="30" rows="20" placeholder="Details Recipe" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn delicious-btn mt-30" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-4">
                    <div class="section-heading">
                        <h4>Your's Recipes</h4>

                        <ul class="text-left">
                            <?foreach($usrRecipes->getResult() as $rec) { ?>
                                <li><?=anchor('recipe/index/'.$rec->id,$rec->recipeTitle,array('class'=>'page-link'))?></li>
                            <? } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Form Area End ##### -->
