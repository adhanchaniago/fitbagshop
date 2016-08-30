            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            You can change any detail about this post below.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form action="<?php echo admin_url(); ?>process/edit_post" method="post" enctype="multipart/form-data" name="form_post_detail" role="form">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Post Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Enter text" value="<?php echo $post['title']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Small Image (<a href="<?php echo base_url(); ?>assets/uploads/images/<?php echo $post['small_images']; ?>" target='_blank' title="Current small image"><?php echo $post['small_images']; ?></a>)</label>
                                                <input type="file" name="small_images">
                                                <span class="small">*This image for displayed in home page.</span><br />
                                                <span class="small">*Leave blank if no changes</span>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Large Image (<a href="<?php echo base_url(); ?>assets/uploads/images/<?php echo $post['large_images']; ?>" target='_blank' title="Current large image"><?php echo $post['large_images']; ?></a>)</label>
                                                <input type="file" name="large_images">
                                                <span class="small">*This image for displayed in blog list.</span><br />
                                                <span class="small">*Leave blank if no changes</span>
                                            </div>  
                                        </div>
                                        </div>                                         
                                        <div class="form-group">
                                            <label>Enter Your Post Content Here</label>
                                            <textarea class="form-control" name="content" id="tinymce" rows="3"><?php echo $post['content']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                        <div class="row">    
                                            <div class="col-md-2">
                                                <label>Status</label>
                                                <select class="form-control chosen-select" name="status" required>
                                                    <option value="1" <?php if($post['status'] == 1) { echo 'selected'; } ?>><?php echo status(1); ?></option>
                                                    <option value="2" <?php if($post['status'] == 2) { echo 'selected'; } ?>><?php echo status(2); ?></option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Category</label>
                                                <select class="form-control chosen-select" name="category_id" required>
                                                <option>Please select post category</option>
                                                <?php if(!empty($category)) foreach($category as $rows) { ?>
                                                    <option value="<?php echo $rows['id']; ?>" <?php if($post['category_id'] == $rows['id']) { echo 'selected'; } ?>><?php echo $rows['name']; ?></option>
                                                <?php } ?>    
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Tag</label>
                                                <select class="form-control chosen-select"  name="tag_id[]" id="multiple" multiple required>
                                                <?php if(!empty($tag)) foreach($tag as $rows) { $check_tag = $this->blog_model->get_current_tag($post['id'], $rows['id']); ?>
                                                    <option value="<?php echo $rows['id']; ?>" <?php if(!empty($check_tag)) { echo 'selected'; } ?>><?php echo $rows['name']; ?></option>
                                                <?php } ?>    
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        <h2>Search Engine Optimization (SEO)</h2>
                                        <div class="form-group">
                                            <label>Page Title</label>
                                            <input type="text" class="form-control" name="seo_title" placeholder="Enter text" value="<?php echo $post['seo_title']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Page Keyword</label>
                                            <input type="text" class="form-control" name="seo_keyword" placeholder="Enter text" value="<?php echo $post['seo_keyword']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Page Description</label>
                                            <textarea class="form-control" name="seo_description"  rows="3" required><?php echo $post['seo_description']; ?></textarea>
                                        </div>
                                </div>

                               <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
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