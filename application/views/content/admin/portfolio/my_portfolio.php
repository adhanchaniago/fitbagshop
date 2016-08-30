            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Portfolio Data Goes Here
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="2%"></th>
                                            <th width="15%">Title</th>
                                            <th width="25%">Description</th>
                                            <th width="13%">Client</th>
                                            <th width="10%">Status</th>
                                            <th width="20%">Date</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=0; if(!empty($portfolio)) foreach($portfolio as $rows) { $no++; ?>
                                        <tr >
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $rows['title']; ?></td>
                                            <td><?php echo $rows['description']; ?></td>
                                            <td><?php echo $rows['client']; ?></td>
                                            <td><?php echo porto_status($rows['status']); ?></td>
                                            <td class="center"><?php echo format_date($rows['start_date']); ?> - <?php echo format_date($rows['end_date']); ?></td>
                                            <td class="center">
                                            <a href="<?php echo admin_url(); ?>portfolio/portfolio_detail/<?php echo $rows['id']; ?>" class="btn btn-default" title="Edit portfolio detail"><i class="fa fa-pencil"></i></a>
                                            <a href="<?php echo admin_url(); ?>portfolio/image_list/<?php echo $rows['id']; ?>" class="btn btn-default" title="Edit portfolio images"><i class="fa fa-image"></i></a>
                                            <a href="<?php echo admin_url(); ?>process/delete_portfolio/<?php echo $rows['id']; ?>" class="btn btn-default" title="Delete this portfolio"><i class="fa fa-trash"></i></a>
                                            </td>
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