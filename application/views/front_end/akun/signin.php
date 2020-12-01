<div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="contact_join">

                        <h3 style="text-align: center;">Sign In</h3>
                        <form method="post" action="<?php echo base_url('front_end/member/act_signin'); ?>">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <input type="text" name="member_username" placeholder="Your Username" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <input type="password" name="member_password" placeholder="Your Password" required>
                                    </div>
                                </div>
                                <div class="col-lg-12" style="text-align: center;">
                                    <label style="margin-bottom: 10px;"><a href="#">Lupa password?</a></label>
                                    <?= $this->session->flashdata('pesan'); ?>
                                </div>

                                <div class="col-lg-12">
                                    <div class="submit_btn">
                                        <button class="boxed-btn4" type="submit">submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>