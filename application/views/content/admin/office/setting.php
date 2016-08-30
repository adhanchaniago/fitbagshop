            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            You can changes your company information here.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form action="<?php echo admin_url(); ?>process/update_company" method="post" enctype="multipart/form-data" name="form_office_setting" role="form">
                                <div class="col-lg-6">
                                    <h2>Office Information</h2>
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" name="company_name" placeholder="Enter text" value="<?php echo $company['company_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Short description of your company</label>
                                            <textarea class="form-control" name="about" rows="3"><?php echo $company['company_about']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" name="company_phone" placeholder="Enter text" value="<?php echo $company['company_phone']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="company_address" placeholder="Enter text" value="<?php echo $company['company_address']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" name="company_city" placeholder="Enter text" value="<?php echo $company['company_city']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control" name="company_state" placeholder="Enter text" value="<?php echo $company['company_state']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control" name="company_postcode" placeholder="Enter text" value="<?php echo $company['company_postcode']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="form-control" name="company_country" placeholder="Enter text" value="<?php echo $company['company_country']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Logo</label>
                                            <input type="file" name="images">
                                            <span class="small">*Leave blank if no changes</span>
                                            <br />
                                            <small>Current logo : <a href="<?php echo base_url(); ?>assets/uploads/office/<?php echo $company['company_logo']; ?>" target="_blank"><?php echo $company['company_logo']; ?></a></small>
                                        </div>
                                </div>

                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <h1>Office Email</h1>
                                        <div class="form-group">
                                            <label>General Email</label>
                                            <input type="email" class="form-control" name="company_email" placeholder="Enter text" value="<?php echo $company['company_email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Sales Email</label>
                                            <input type="email" class="form-control" name="sales_email" placeholder="Enter text" value="<?php echo $company['sales_email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Information Email</label>
                                            <input type="email" class="form-control" name="info_email" placeholder="Enter text" value="<?php echo $company['info_email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Support Email</label>
                                            <input type="email" class="form-control" name="support_email" placeholder="Enter text" value="<?php echo $company['support_email']; ?>">
                                        </div>

                                    <h1>Social Media</h1>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                            <input type="text" class="form-control" name="facebook" placeholder="Facebook url" value="<?php echo $company['facebook']; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                            <input type="text" class="form-control" name="twitter" placeholder="Twitter url" value="<?php echo $company['twitter']; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                                            <input type="text" class="form-control" name="google_plus" placeholder="Google plus url" value="<?php echo $company['google_plus']; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                                            <input type="text" class="form-control" name="linkedin" placeholder="Linkedin url" value="<?php echo $company['linkedin']; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-rss"></i></span>
                                            <input type="text" class="form-control" name="rss" placeholder="Rss Feed url" value="<?php echo $company['rss']; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                                            <input type="text" class="form-control" name="youtube" placeholder="Youtube url" value="<?php echo $company['youtube']; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
                                            <input type="text" class="form-control" name="pinterest" placeholder="Pinterest url" value="<?php echo $company['path']; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-skype"></i></span>
                                            <input type="text" class="form-control" name="skype" placeholder="Skype url" value="<?php echo $company['skype']; ?>">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-columns"></i></span>
                                            <input type="text" class="form-control" name="bbm" placeholder="BBM url" value="<?php echo $company['bbm']; ?>">
                                        </div>                                                          
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12 form-button">
                                    <div class="pull-right">
                                        <button role="button" type="submit" class="btn btn-default">Save Changes</button>
                                    </div>
                                </div>   
                              </form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->