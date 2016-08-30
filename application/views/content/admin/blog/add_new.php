            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill all required field below to post your article.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form action="<?php echo admin_url(); ?>process/add_new_post" method="post" enctype="multipart/form-data" name="form_office_setting" role="form">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Post Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Enter text" value="" required>
                                        </div>
                                        <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Small Image</label>
                                                <input type="file" name="small_images" required>
                                                <span class="small">*This image for displayed in home page.</span>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Large Image</label>
                                                <input type="file" name="large_images" required>
                                                <span class="small">*This image for displayed in blog list.</span>
                                            </div>  
                                        </div>
                                        </div>                                         
                                        <div class="form-group">
                                            <label>Enter Your Post Content Here</label>
                                            <textarea class="form-control" name="content" id="tinymce" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                        <div class="row">    
                                            <div class="col-md-2">
                                                <label>Status</label>
                                                <select class="form-control chosen-select" name="status" required>
                                                    <option value="1"><?php echo status(1); ?></option>
                                                    <option value="2"><?php echo status(2); ?></option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Category</label>
                                                <select class="form-control chosen-select" name="category_id" required>
                                                <option>Please select post category</option>
                                                <?php if(!empty($category)) foreach($category as $rows) { ?>
                                                    <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                                                <?php } ?>    
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Tag</label>
                                                <select class="form-control chosen-select"  name="tag_id[]" id="multiple" multiple required>
                                                <?php if(!empty($tag)) foreach($tag as $rows) {?>
                                                    <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
                                                <?php } ?>    
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        <h2>Search Engine Optimization (SEO)</h2>
                                        <div class="form-group">
                                            <label>Page Title</label>
                                            <input type="text" class="form-control" name="seo_title" placeholder="Enter text" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Page Keyword</label>
                                            <input type="text" class="form-control" name="seo_keyword" placeholder="Enter text" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Page Description</label>
                                            <textarea class="form-control" name="seo_description"  rows="3" required></textarea>
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