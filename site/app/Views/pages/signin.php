    <div class="contact-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>User Login</h3>
                    </div>
                </div>
            </div> 

            <div class="row">
                <div class="col-12">
                    <div class="contact-form-area">
                        <?php $validation = \Config\Services::validation(); ?>
                        <?=$validation->listErrors() ?>
                        <?=$msg?>
                        <?=form_open('user/signActive')?>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="col-12 col-lg-6">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="******" required>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn delicious-btn mt-30" type="submit">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>