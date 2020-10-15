<div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body profile-information">
                       <div class="col-md-3">
                           <div class="profile-pic text-center">
                               <img alt="" src="<?php echo base_url() ?>assets/back_end/images/logo-transparent.png ?>">
                           </div>
                       </div>
                       <div class="col-md-5">
                           <div class="profile-desk">
                               <h1><?php echo $this->session->userdata('admin_nama') ?></h1>
                               <span class="text-muted">Admin</span><br>
                                <table>
                                  <tr>
                                    <th>Email</th>
                                    <td>&nbsp;</td>
                                    <td>:</td>
                                    <td>&nbsp;</td>
                                    <td><?php echo $this->session->userdata('admin_email') ?></td>
                                  </tr>
                                  <tr>
                                    <th>Alamat</th>
                                    <td>&nbsp;</td>
                                    <td>:</td>
                                    <td>&nbsp;</td>
                                    <td><?php echo $this->session->userdata('admin_alamat') ?></td>
                                  </tr>
                                  <tr>
                                    <th>Telpon</th>
                                    <td>&nbsp;</td>
                                    <td>:</td>
                                    <td>&nbsp;</td>
                                    <td><?php echo $this->session->userdata('admin_telp') ?></td>
                                  </tr>
                                </table>
                                <div class="row" style="margin-top: 20px;">
                                <a href="<?= site_url(); ?>back_end/profile/edit/<?php echo $this->session->userdata('admin_id') ?>" class="btn btn-primary">Edit Profile</a>
                                <a href="<?= site_url(); ?>back_end/profile/gantiPass/" class="btn btn-danger">Ganti Password</a>
                                </div>
                                <?= $this->session->flashdata('pesan'); ?>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="profile-statistics">
                               <h3>COFFEE-HUB</h3>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis, est a eleifend feugiat, nisi arcu tincidunt libero, eu vulputate mauris arcu a leo.</p>
                               <p>Nam elementum augue quis ligula vulputate fringilla. Aenean feugiat mollis pulvinar. Donec vitae justo sit amet nisl commodo finibus et quis justo.</p>
                               <ul>
                                   <li>
                                       <a href="https://www.instagram.com/sevenhead.jbr/">
                                           <i class="fa fa-instagram">&nbsp;@roxx.jbr</i>
                                       </a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                    </div>
                </section>
            </div>