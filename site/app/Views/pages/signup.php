    <div class="contact-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>User Signup</h3>
                    </div>
                </div>
            </div> 

            <div class="row">
                <div class="col-12">
                    <div class="contact-form-area">
                        <?php $validation = \Config\Services::validation(); ?>
                        <?=$validation->listErrors() ?>
                        <?=form_open('user/registered')?>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="fulName" placeholder="ful Name" name="fulName" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of birth" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="usrName" name="usrName" placeholder="Username" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="password" class="form-control" id="re_password" name="re_password" placeholder="Reenter password" required>
                                </div>
                                
                                <div class="col-12 text-center">
                                    <button class="btn delicious-btn mt-30" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>