            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Post Data Goes Here
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="well">
                                <h4>Blog Post Usage</h4>
                                <p>You can manage your article or blog post here, all article or post data will be retreive on table below. Also you can delete, save as draft or edit your article with all button action. Or you can add new article or blog post by click button below.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="<?php echo admin_url(); ?>blog/add_new">Add New Post</a>
                            </div>
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="2%"></th>
                                            <th width="28%">Title</th>
                                            <th width="38%">Short Desc</th>
                                            <th width="10%">Status</th>
                                            <th width="13%">Added Date</th>
                                            <th width="14%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; if(!empty($post)) foreach($post as $rows) { $no++; ?>
                                        <tr >
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $rows['title']; ?></td>
                                            <td><?php echo short_string($rows['content']); ?></td>
                                            <td><?php echo status($rows['status']); ?></td>
                                            <td class="center"><?php echo format_date($rows['add_date']); ?></td>
                                            <td class="center"><a href="<?php echo admin_url(); ?>blog/post_detail/<?php echo $rows['id']; ?>" class="btn btn-default">Detail</a></td>
                                        </tr>
                                    <?php } ?>    
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->