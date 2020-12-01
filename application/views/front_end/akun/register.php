<div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
					<div class="contact_join">

                        <h3 style="text-align: center;">Register</h3>
                        <form method="POST" enctype="multipart/form-data" action="<?= site_url() ?>front_end/member/register">
                            <div class="row">
                                <div class="col-lg-12" hidden>
                                    <div class="single_input">
                                        <input type="text" name="member_id" value="<?= $kode; ?>" readonly required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <input type="text" name="member_nama" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <input type="text" name="member_nohp" placeholder="Your Phone no." required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <input type="text" name="member_alamat" placeholder="Your Address">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <input type="text" name="member_username" placeholder="Your Username" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <input type="email" name="member_email" placeholder="Your E-Mail" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <input type="password" name="member_password" placeholder="Your Password" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                    <div class="input-group-icon mt-10">
                                        <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                        <div class="form-select" id="default-select">
                                            <select name="member_pertanyaan_keamanan" required>
                                                <option>Select the Question !</option>
                                            	<option value="What is your favorite coffee ?">What is your favorite coffee ?</option>
                                            	<option value="When do you usually drink coffee ?">When do you usually drink coffee ?</option>
                                                <option value="Where your favorite cafe ?">Where your favorite cafe ?</option>
                                                <option value="What is your friend who usually does drinking coffee together ?">What is your friend who usually does drinking coffee together ?</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <input type="text" name="member_jawaban" placeholder="Your Answer" required>
                                    </div>
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