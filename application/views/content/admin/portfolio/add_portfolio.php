            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill all required field below to post your new portfolio.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form action="<?php echo admin_url(); ?>process/add_portfolio" method="post" enctype="multipart/form-data" name="form_office_setting" role="form">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Enter text" value="" required>
                                        </div>
                                        <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Image</label>
                                                <input type="file" name="image" required>
                                                <span class="small">*This image for displayed in home page.</span>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <label>Start Date</label>
                                                <input type="text" name="start_date" id="datepicker1" class="form-control" />
                                                </div>
                                                <div class="col-md-6">
                                                <label>End Date</label>
                                                <input type="text" name="end_date" id="datepicker2" class="form-control" />
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>                                         
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                        <div class="row">    
                                            <div class="col-md-2">
                                                <label>Status</label>
                                                <select class="form-control chosen-select" name="status" required>
                                                    <option value="1"><?php echo porto_status(1); ?></option>
                                                    <option value="2"><?php echo porto_status(2); ?></option>
                                                </select>
                                            </div>                                           
                                            <div class="col-md-4">
                                                <label>Category</label>
                                                <select class="form-control chosen-select" name="category_id" required>
                                                <option>Please select category</option>
                                                <?php if(!empty($category)) foreach($category as $rows) { ?>
                                                    <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                                                <?php } ?>    
                                                </select>
                                            </div>
                                             <div class="col-md-6">
                                               <label>Client</label>
                                                <input type="text" class="form-control" name="client" placeholder="Enter text" value="" required>
                                            </div>
                                        </div>
                                        </div>                                       
                                </div>

                               
                                <div class="col-lg-12 form-button">
                                    <div class="pull-right">
                                        <button role="button" type="submit" class="btn btn-default">Add New</button>
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