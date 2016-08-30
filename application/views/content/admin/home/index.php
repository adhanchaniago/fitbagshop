<!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Dashboard</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat2 ">
                                        <div class="display">
                                            <div class="number">
                                                <h3 class="font-green-sharp">
                                                    <span data-counter="counterup" data-value="<?php echo count_all_comments(); ?>">0</span>
                                                    <small class="font-green-sharp"></small>
                                                </h3>
                                                <small>TOTAL COMMENTS</small>
                                            </div>
                                            <div class="icon">
                                                <i class="icon-pie-chart"></i>
                                            </div>
                                        </div>
                                        <div class="progress-info">
                                            <div class="progress">
                                                <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                                    <span class="sr-only">76% progress</span>
                                                </span>
                                            </div>
                                            <div class="status">
                                                <div class="status-title"> progress </div>
                                                <div class="status-number"> 76% </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat2 ">
                                        <div class="display">
                                            <div class="number">
                                                <h3 class="font-red-haze">
                                                    <span data-counter="counterup" data-value="<?php echo count_all_admin(); ?>">0</span>
                                                </h3>
                                                <small>TOTAL USERS</small>
                                            </div>
                                            <div class="icon">
                                                <i class="icon-like"></i>
                                            </div>
                                        </div>
                                        <div class="progress-info">
                                            <div class="progress">
                                                <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                                    <span class="sr-only">85% change</span>
                                                </span>
                                            </div>
                                            <div class="status">
                                                <div class="status-title"> change </div>
                                                <div class="status-number"> 85% </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat2 ">
                                        <div class="display">
                                            <div class="number">
                                                <h3 class="font-blue-sharp">
                                                    <span data-counter="counterup" data-value="<?php echo count_all_posts(); ?>"></span>
                                                </h3>
                                                <small>TOTAL POST</small>
                                            </div>
                                            <div class="icon">
                                                <i class="icon-basket"></i>
                                            </div>
                                        </div>
                                        <div class="progress-info">
                                            <div class="progress">
                                                <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                                    <span class="sr-only">45% grow</span>
                                                </span>
                                            </div>
                                            <div class="status">
                                                <div class="status-title"> grow </div>
                                                <div class="status-number"> 45% </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat2 ">
                                        <div class="display">
                                            <div class="number">
                                                <h3 class="font-purple-soft">
                                                    <span data-counter="counterup" data-value="<?php echo count_all_portfolios(); ?>"></span>
                                                </h3>
                                                <small>TOTAL PORTFOLIO</small>
                                            </div>
                                            <div class="icon">
                                                <i class="icon-user"></i>
                                            </div>
                                        </div>
                                        <div class="progress-info">
                                            <div class="progress">
                                                <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                                    <span class="sr-only">56% change</span>
                                                </span>
                                            </div>
                                            <div class="status">
                                                <div class="status-title"> change </div>
                                                <div class="status-number"> 57% </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <span class="caption-subject bold uppercase font-dark">Feed</span>
                                                <span class="caption-helper">lihat apa yang terakhir anda lakukan...</span>
                                            </div>
                                            <div class="actions">
                                                <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                                    <i class="icon-cloud-upload"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                                    <i class="icon-wrench"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                                    <i class="icon-trash"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#activity" data-toggle="tab">Last Activity</a>
                                </li>
                                <li><a href="#post" data-toggle="tab">Last Post</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Last Portfolio</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">Last Comments</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="activity">
                                    <div class="panel panel-default">
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>User</th>
                                                            <th>Activity</th>
                                                            <th>Description</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                <?php $no=0; if(!empty($user_log)) foreach($user_log as $rows) { $no++; ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo ucname($rows['users']); ?></td>
                                                            <td><?php echo ucname($rows['activity']); ?></td>
                                                            <td><?php echo $rows['to']; ?></td>
                                                            <td><?php echo $rows['date']; ?></td>
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
                                <div class="tab-pane fade" id="post">
                                    <div class="panel panel-default">
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>View</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                <?php $no=0; if(!empty($user_post)) foreach($user_post as $rows) { $no++; ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo ucname($rows['title']); ?></td>
                                                            <td><?php echo short_string(strip_tags($rows['content'])); ?></td>
                                                            <td><?php echo $rows['view']; ?></td>
                                                            <td><?php echo format_date($rows['add_date']); ?></td>
                                                        </tr>    
                                                <?php } ?>                                                   
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                            <a href="<?php echo admin_url(); ?>blog" class="btn btn-default btn-block">View All Post</a>
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <div class="panel panel-default">
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>Client</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                <?php $no=0; if(!empty($user_portolio)) foreach($user_portolio as $rows) { $no++; ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo ucname($rows['title']); ?></td>
                                                            <td><?php echo short_string(strip_tags($rows['description'])); ?></td>
                                                            <td><?php echo $rows['client']; ?></td>
                                                            <td><?php echo status($rows['status']); ?></td>
                                                        </tr>    
                                                <?php } ?>                                                   
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                            <a href="<?php echo admin_url(); ?>portfolio" class="btn btn-default btn-block">View All Portfolio</a>
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <div class="panel panel-default">
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Comments</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                <?php $no=0; if(!empty($user_comments)) foreach($user_comments as $rows) { $no++; ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo ucname($rows['name']); ?></td>
                                                            <td><a href="mailto:<?php echo $rows['email']; ?>"><?php echo $rows['email']; ?></a></td>
                                                            <td><?php echo strip_tags($rows['comment']); ?></td>
                                                            <td><?php echo format_date($rows['added_date']); ?></td>
                                                        </tr>    
                                                <?php } ?>                                                   
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                            <a href="<?php echo admin_url(); ?>blog/comments" class="btn btn-default btn-block">View All Comments</a>
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption ">
                                                <span class="caption-subject font-dark bold uppercase">Finance</span>
                                                <span class="caption-helper">distance stats...</span>
                                            </div>
                                            <div class="actions">
                                                <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                                    <i class="fa fa-pencil"></i> Export </a>
                                                <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div id="dashboard_amchart_3" class="CSSAnimationChart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title tabbable-line">
                                            <div class="caption">
                                                <i class="icon-bubbles font-dark hide"></i>
                                                <span class="caption-subject font-dark bold uppercase">Comments</span>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#portlet_comments_1" data-toggle="tab"> Pending </a>
                                                </li>
                                                <li>
                                                    <a href="#portlet_comments_2" data-toggle="tab"> Approved </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="portlet_comments_1">
                                                    <!-- BEGIN: Comments -->
                                                    <div class="mt-comments">
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Michael Baker</span>
                                                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Natasha Kim</span>
                                                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic always free from repetition, injected humour, or non-characteristic words etc. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> The standard chunk of Lorem or non-characteristic Ipsum used since the 1500s or non-characteristic is reproduced below for those interested. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END: Comments -->
                                                </div>
                                                <div class="tab-pane" id="portlet_comments_2">
                                                    <!-- BEGIN: Comments -->
                                                    <div class="mt-comments">
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Michael Baker</span>
                                                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Natasha Kim</span>
                                                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END: Comments -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title tabbable-line">
                                            <div class="caption">
                                                <i class=" icon-social-twitter font-dark hide"></i>
                                                <span class="caption-subject font-dark bold uppercase">Quick Actions</span>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_actions_pending" data-toggle="tab"> Pending </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_actions_completed" data-toggle="tab"> Completed </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_actions_pending">
                                                    <!-- BEGIN: Actions -->
                                                    <div class="mt-actions">
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar10.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-magnet"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Natasha Kim</span>
                                                                            <p class="mt-action-desc">pending for approval pending for approval pending for approval pending for approval</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar3.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class=" icon-bubbles"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Gavin Bond</span>
                                                                            <p class="mt-action-desc">pending for approval</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-red"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar2.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-call-in"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Diana Berri</span>
                                                                            <p class="mt-action-desc">pending for approval pending for approval pending for approval pending for approval</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar7.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class=" icon-bell"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">John Clark</span>
                                                                            <p class="mt-action-desc">pending for approval pending for approval pending for approval pending for approval</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-red"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-magnet"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Donna Clarkson </span>
                                                                            <p class="mt-action-desc">pending for approval pending for approval pending for approval pending for approval</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar9.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-magnet"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Tom Larson</span>
                                                                            <p class="mt-action-desc">pending for approval pending for approval pending for approval pending for approval</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END: Actions -->
                                                </div>
                                                <div class="tab-pane" id="tab_actions_completed">
                                                    <!-- BEGIN:Completed-->
                                                    <div class="mt-actions">
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-action-redo"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Frank Cameron</span>
                                                                            <p class="mt-action-desc">pending for approval pending for approval pending for approval pending for approval</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-red"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-cup"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Ella Davidson </span>
                                                                            <p class="mt-action-desc">pending for approval pending for approval pending for approval pending for approval</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar5.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class=" icon-graduation"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Jason Dickens </span>
                                                                            <p class="mt-action-desc">pending for approval pending for approval pending for approval pending for approval</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-red"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar2.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-badge"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Jan Kim</span>
                                                                            <p class="mt-action-desc">pending for approval pending for approval pending for approval pending for approval</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END: Completed -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption caption-md">
                                                <i class="icon-bar-chart font-dark hide"></i>
                                                <span class="caption-subject font-dark bold uppercase">Member Activity</span>
                                                <span class="caption-helper">weekly stats...</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                    <label class="btn btn-transparent green btn-outline btn-circle btn-sm active">
                                                        <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                                    <label class="btn btn-transparent green btn-outline btn-circle btn-sm">
                                                        <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                                    <label class="btn btn-transparent green btn-outline btn-circle btn-sm">
                                                        <input type="radio" name="options" class="toggle" id="option2">Month</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row number-stats margin-bottom-30">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="stat-left">
                                                        <div class="stat-chart">
                                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                            <div id="sparkline_bar"></div>
                                                        </div>
                                                        <div class="stat-number">
                                                            <div class="title"> Total </div>
                                                            <div class="number"> 2460 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="stat-right">
                                                        <div class="stat-chart">
                                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                            <div id="sparkline_bar2"></div>
                                                        </div>
                                                        <div class="stat-number">
                                                            <div class="title"> New </div>
                                                            <div class="number"> 719 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-scrollable table-scrollable-borderless">
                                                <table class="table table-hover table-light">
                                                    <thead>
                                                        <tr class="uppercase">
                                                            <th colspan="2"> MEMBER </th>
                                                            <th> Earnings </th>
                                                            <th> CASES </th>
                                                            <th> CLOSED </th>
                                                            <th> RATE </th>
                                                        </tr>
                                                    </thead>
                                                    <tr>
                                                        <td class="fit">
                                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                                        <td>
                                                            <a href="javascript:;" class="primary-link">Brain</a>
                                                        </td>
                                                        <td> $345 </td>
                                                        <td> 45 </td>
                                                        <td> 124 </td>
                                                        <td>
                                                            <span class="bold theme-font">80%</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fit">
                                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar5.jpg"> </td>
                                                        <td>
                                                            <a href="javascript:;" class="primary-link">Nick</a>
                                                        </td>
                                                        <td> $560 </td>
                                                        <td> 12 </td>
                                                        <td> 24 </td>
                                                        <td>
                                                            <span class="bold theme-font">67%</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fit">
                                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar6.jpg"> </td>
                                                        <td>
                                                            <a href="javascript:;" class="primary-link">Tim</a>
                                                        </td>
                                                        <td> $1,345 </td>
                                                        <td> 450 </td>
                                                        <td> 46 </td>
                                                        <td>
                                                            <span class="bold theme-font">98%</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fit">
                                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar7.jpg"> </td>
                                                        <td>
                                                            <a href="javascript:;" class="primary-link">Tom</a>
                                                        </td>
                                                        <td> $645 </td>
                                                        <td> 50 </td>
                                                        <td> 89 </td>
                                                        <td>
                                                            <span class="bold theme-font">58%</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption caption-md">
                                                <i class="icon-bar-chart font-dark hide"></i>
                                                <span class="caption-subject font-dark bold uppercase">Customer Support</span>
                                                <span class="caption-helper">45 pending</span>
                                            </div>
                                            <div class="inputs">
                                                <div class="portlet-input input-inline input-small ">
                                                    <div class="input-icon right">
                                                        <i class="icon-magnifier"></i>
                                                        <input type="text" class="form-control form-control-solid input-circle" placeholder="search..."> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                <div class="general-item-list">
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar4.jpg">
                                                                <a href="" class="item-name primary-link">Nick Larson</a>
                                                                <span class="item-label">3 hrs ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                                <span class="badge badge-empty badge-success"></span> Open</span>
                                                        </div>
                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar3.jpg">
                                                                <a href="" class="item-name primary-link">Mark</a>
                                                                <span class="item-label">5 hrs ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                                <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                        </div>
                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet. </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar6.jpg">
                                                                <a href="" class="item-name primary-link">Nick Larson</a>
                                                                <span class="item-label">8 hrs ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                                <span class="badge badge-empty badge-primary"></span> Closed</span>
                                                        </div>
                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar7.jpg">
                                                                <a href="" class="item-name primary-link">Nick Larson</a>
                                                                <span class="item-label">12 hrs ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                                <span class="badge badge-empty badge-danger"></span> Pending</span>
                                                        </div>
                                                        <div class="item-body"> Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar9.jpg">
                                                                <a href="" class="item-name primary-link">Richard Stone</a>
                                                                <span class="item-label">2 days ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                                <span class="badge badge-empty badge-danger"></span> Open</span>
                                                        </div>
                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat. </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar8.jpg">
                                                                <a href="" class="item-name primary-link">Dan</a>
                                                                <span class="item-label">3 days ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                                <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                        </div>
                                                        <div class="item-body"> Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-head">
                                                            <div class="item-details">
                                                                <img class="item-pic rounded" src="../assets/pages/media/users/avatar2.jpg">
                                                                <a href="" class="item-name primary-link">Larry</a>
                                                                <span class="item-label">4 hrs ago</span>
                                                            </div>
                                                            <span class="item-status">
                                                                <span class="badge badge-empty badge-success"></span> Open</span>
                                                        </div>
                                                        <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-cursor font-dark hide"></i>
                                                <span class="caption-subject font-dark bold uppercase">General Stats</span>
                                            </div>
                                            <div class="actions">
                                                <a href="javascript:;" class="btn btn-sm btn-circle red easy-pie-chart-reload">
                                                    <i class="fa fa-repeat"></i> Reload </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="easy-pie-chart">
                                                        <div class="number transactions" data-percent="55">
                                                            <span>+55</span>% </div>
                                                        <a class="title" href="javascript:;"> Transactions
                                                            <i class="icon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="margin-bottom-10 visible-sm"> </div>
                                                <div class="col-md-4">
                                                    <div class="easy-pie-chart">
                                                        <div class="number visits" data-percent="85">
                                                            <span>+85</span>% </div>
                                                        <a class="title" href="javascript:;"> New Visits
                                                            <i class="icon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="margin-bottom-10 visible-sm"> </div>
                                                <div class="col-md-4">
                                                    <div class="easy-pie-chart">
                                                        <div class="number bounce" data-percent="46">
                                                            <span>-46</span>% </div>
                                                        <a class="title" href="javascript:;"> Bounce
                                                            <i class="icon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-equalizer font-dark hide"></i>
                                                <span class="caption-subject font-dark bold uppercase">Server Stats</span>
                                                <span class="caption-helper">monthly stats...</span>
                                            </div>
                                            <div class="tools">
                                                <a href="" class="collapse"> </a>
                                                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                <a href="" class="reload"> </a>
                                                <a href="" class="remove"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="sparkline-chart">
                                                        <div class="number" id="sparkline_bar5"></div>
                                                        <a class="title" href="javascript:;"> Network
                                                            <i class="icon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="margin-bottom-10 visible-sm"> </div>
                                                <div class="col-md-4">
                                                    <div class="sparkline-chart">
                                                        <div class="number" id="sparkline_bar6"></div>
                                                        <a class="title" href="javascript:;"> CPU Load
                                                            <i class="icon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="margin-bottom-10 visible-sm"> </div>
                                                <div class="col-md-4">
                                                    <div class="sparkline-chart">
                                                        <div class="number" id="sparkline_line"></div>
                                                        <a class="title" href="javascript:;"> Load Rate
                                                            <i class="icon-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <!-- BEGIN REGIONAL STATS PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-share font-dark hide"></i>
                                                <span class="caption-subject font-dark bold uppercase">Regional Stats</span>
                                            </div>
                                            <div class="actions">
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                    <i class="icon-cloud-upload"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                    <i class="icon-wrench"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" data-container="false" data-placement="bottom" href="javascript:;"> </a>
                                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                    <i class="icon-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div id="region_statistics_loading">
                                                <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                                            <div id="region_statistics_content" class="display-none">
                                                <div class="btn-toolbar margin-bottom-10">
                                                    <div class="btn-group btn-group-circle" data-toggle="buttons">
                                                        <a href="" class="btn grey-salsa btn-sm active"> Users </a>
                                                        <a href="" class="btn grey-salsa btn-sm"> Orders </a>
                                                    </div>
                                                    <div class="btn-group pull-right">
                                                        <a href="" class="btn btn-circle grey-salsa btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Select Region
                                                            <span class="fa fa-angle-down"> </span>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;" id="regional_stat_world"> World </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" id="regional_stat_usa"> USA </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" id="regional_stat_europe"> Europe </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" id="regional_stat_russia"> Russia </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" id="regional_stat_germany"> Germany </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div id="vmap_world" class="vmaps display-none"> </div>
                                                <div id="vmap_usa" class="vmaps display-none"> </div>
                                                <div id="vmap_europe" class="vmaps display-none"> </div>
                                                <div id="vmap_russia" class="vmaps display-none"> </div>
                                                <div id="vmap_germany" class="vmaps display-none"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END REGIONAL STATS PORTLET-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <!-- BEGIN PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title tabbable-line">
                                            <div class="caption">
                                                <i class="icon-globe font-dark hide"></i>
                                                <span class="caption-subject font-dark bold uppercase">Feeds</span>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_1_1" class="active" data-toggle="tab"> System </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_1_2" data-toggle="tab"> Activities </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="portlet-body">
                                            <!--BEGIN TABS-->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1_1">
                                                    <div class="scroller" style="height: 339px;" data-always-visible="1" data-rail-visible="0">
                                                        <ul class="feeds">
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-success">
                                                                                <i class="fa fa-bell-o"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> You have 4 pending tasks.
                                                                                <span class="label label-sm label-info"> Take action
                                                                                    <i class="fa fa-share"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> Just now </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New version v1.4 just lunched! </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 20 mins </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-danger">
                                                                                <i class="fa fa-bolt"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> Database server #12 overloaded. Please fix the issue. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 24 mins </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 30 mins </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-success">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 40 mins </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-warning">
                                                                                <i class="fa fa-plus"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New user registered. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 1.5 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-success">
                                                                                <i class="fa fa-bell-o"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                                                <span class="label label-sm label-default "> Overdue </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 2 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 3 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-warning">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 5 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 18 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 21 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 22 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 21 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 22 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 21 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 22 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 21 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 22 hours </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_1_2">
                                                    <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                                        <ul class="feeds">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 10 mins </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-danger">
                                                                                <i class="fa fa-bolt"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> Order #24DOP4 has been rejected.
                                                                                <span class="label label-sm label-danger "> Take action
                                                                                    <i class="fa fa-share"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 24 mins </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--END TABS-->
                                        </div>
                                    </div>
                                    <!-- END PORTLET-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-bubble font-dark hide"></i>
                                                <span class="caption-subject font-hide bold uppercase">Recent Users</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group">
                                                    <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;"> Option 1</a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;">Option 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">Option 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">Option 4</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <!--begin: widget 1-1 -->
                                                    <div class="mt-widget-1">
                                                        <div class="mt-icon">
                                                            <a href="#">
                                                                <i class="icon-plus"></i>
                                                            </a>
                                                        </div>
                                                        <div class="mt-img">
                                                            <img src="../assets/pages/media/users/avatar80_8.jpg"> </div>
                                                        <div class="mt-body">
                                                            <h3 class="mt-username">Diana Ellison</h3>
                                                            <p class="mt-user-title"> Lorem Ipsum is simply dummy text. </p>
                                                            <div class="mt-stats">
                                                                <div class="btn-group btn-group btn-group-justified">
                                                                    <a href="javascript:;" class="btn font-red">
                                                                        <i class="icon-bubbles"></i> 1,7k </a>
                                                                    <a href="javascript:;" class="btn font-green">
                                                                        <i class="icon-social-twitter"></i> 2,6k </a>
                                                                    <a href="javascript:;" class="btn font-yellow">
                                                                        <i class="icon-emoticon-smile"></i> 3,7k </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end: widget 1-1 -->
                                                </div>
                                                <div class="col-md-4">
                                                    <!--begin: widget 1-2 -->
                                                    <div class="mt-widget-1">
                                                        <div class="mt-icon">
                                                            <a href="#">
                                                                <i class="icon-plus"></i>
                                                            </a>
                                                        </div>
                                                        <div class="mt-img">
                                                            <img src="../assets/pages/media/users/avatar80_7.jpg"> </div>
                                                        <div class="mt-body">
                                                            <h3 class="mt-username">Jason Baker</h3>
                                                            <p class="mt-user-title"> Lorem Ipsum is simply dummy text. </p>
                                                            <div class="mt-stats">
                                                                <div class="btn-group btn-group btn-group-justified">
                                                                    <a href="javascript:;" class="btn font-yellow">
                                                                        <i class="icon-bubbles"></i> 1,7k </a>
                                                                    <a href="javascript:;" class="btn font-blue">
                                                                        <i class="icon-social-twitter"></i> 2,6k </a>
                                                                    <a href="javascript:;" class="btn font-green">
                                                                        <i class="icon-emoticon-smile"></i> 3,7k </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end: widget 1-2 -->
                                                </div>
                                                <div class="col-md-4">
                                                    <!--begin: widget 1-3 -->
                                                    <div class="mt-widget-1">
                                                        <div class="mt-icon">
                                                            <a href="#">
                                                                <i class="icon-plus"></i>
                                                            </a>
                                                        </div>
                                                        <div class="mt-img">
                                                            <img src="../assets/pages/media/users/avatar80_6.jpg"> </div>
                                                        <div class="mt-body">
                                                            <h3 class="mt-username">Julia Berry</h3>
                                                            <p class="mt-user-title"> Lorem Ipsum is simply dummy text. </p>
                                                            <div class="mt-stats">
                                                                <div class="btn-group btn-group btn-group-justified">
                                                                    <a href="javascript:;" class="btn font-yellow">
                                                                        <i class="icon-bubbles"></i> 1,7k </a>
                                                                    <a href="javascript:;" class="btn font-red">
                                                                        <i class="icon-social-twitter"></i> 2,6k </a>
                                                                    <a href="javascript:;" class="btn font-green">
                                                                        <i class="icon-emoticon-smile"></i> 3,7k </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end: widget 1-3 -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet light portlet-fit ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-microphone font-dark hide"></i>
                                                <span class="caption-subject bold font-dark uppercase"> Recent Works</span>
                                                <span class="caption-helper">default option...</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                    <label class="btn red btn-outline btn-circle btn-sm active">
                                                        <input type="radio" name="options" class="toggle" id="option1">Settings</label>
                                                    <label class="btn  red btn-outline btn-circle btn-sm">
                                                        <input type="radio" name="options" class="toggle" id="option2">Tools</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mt-widget-2">
                                                        <div class="mt-head" style="background-image: url(../assets/pages/img/background/32.jpg);">
                                                            <div class="mt-head-label">
                                                                <button type="button" class="btn btn-success">Manhattan</button>
                                                            </div>
                                                            <div class="mt-head-user">
                                                                <div class="mt-head-user-img">
                                                                    <img src="../assets/pages/img/avatars/team7.jpg"> </div>
                                                                <div class="mt-head-user-info">
                                                                    <span class="mt-user-name">Chris Jagers</span>
                                                                    <span class="mt-user-time">
                                                                        <i class="icon-emoticon-smile"></i> 3 mins ago </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-body">
                                                            <h3 class="mt-body-title"> Thomas Clark </h3>
                                                            <p class="mt-body-description"> It is a long established fact that a reader will be distracted </p>
                                                            <ul class="mt-body-stats">
                                                                <li class="font-green">
                                                                    <i class="icon-emoticon-smile"></i> 3,7k</li>
                                                                <li class="font-yellow">
                                                                    <i class=" icon-social-twitter"></i> 3,7k</li>
                                                                <li class="font-red">
                                                                    <i class="  icon-bubbles"></i> 3,7k</li>
                                                            </ul>
                                                            <div class="mt-body-actions">
                                                                <div class="btn-group btn-group btn-group-justified">
                                                                    <a href="javascript:;" class="btn">
                                                                        <i class="icon-bubbles"></i> Bookmark </a>
                                                                    <a href="javascript:;" class="btn ">
                                                                        <i class="icon-social-twitter"></i> Share </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mt-widget-2">
                                                        <div class="mt-head" style="background-image: url(../assets/pages/img/background/43.jpg);">
                                                            <div class="mt-head-label">
                                                                <button type="button" class="btn btn-danger">London</button>
                                                            </div>
                                                            <div class="mt-head-user">
                                                                <div class="mt-head-user-img">
                                                                    <img src="../assets/pages/img/avatars/team3.jpg"> </div>
                                                                <div class="mt-head-user-info">
                                                                    <span class="mt-user-name">Harry Harris</span>
                                                                    <span class="mt-user-time">
                                                                        <i class="icon-user"></i> 3 mins ago </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-body">
                                                            <h3 class="mt-body-title"> Christian Davidson </h3>
                                                            <p class="mt-body-description"> It is a long established fact that a reader will be distracted </p>
                                                            <ul class="mt-body-stats">
                                                                <li class="font-green">
                                                                    <i class="icon-emoticon-smile"></i> 3,7k</li>
                                                                <li class="font-yellow">
                                                                    <i class=" icon-social-twitter"></i> 3,7k</li>
                                                                <li class="font-red">
                                                                    <i class="  icon-bubbles"></i> 3,7k</li>
                                                            </ul>
                                                            <div class="mt-body-actions">
                                                                <div class="btn-group btn-group btn-group-justified">
                                                                    <a href="javascript:;" class="btn ">
                                                                        <i class="icon-bubbles"></i> Bookmark </a>
                                                                    <a href="javascript:;" class="btn ">
                                                                        <i class="icon-social-twitter"></i> Share </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light portlet-fit ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-microphone font-dark hide"></i>
                                                <span class="caption-subject bold font-dark uppercase"> Recent Projects</span>
                                                <span class="caption-helper">default option...</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                    <label class="btn blue btn-outline btn-circle btn-sm active">
                                                        <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                    <label class="btn  blue btn-outline btn-circle btn-sm">
                                                        <input type="radio" name="options" class="toggle" id="option2">Tools</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mt-widget-4">
                                                        <div class="mt-img-container">
                                                            <img src="../assets/pages/img/background/34.jpg" /> </div>
                                                        <div class="mt-container bg-purple-opacity">
                                                            <div class="mt-head-title"> Website Revamp & Deployment </div>
                                                            <div class="mt-body-icons">
                                                                <a href="#">
                                                                    <i class=" icon-pencil"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class=" icon-map"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class=" icon-trash"></i>
                                                                </a>
                                                            </div>
                                                            <div class="mt-footer-button">
                                                                <button type="button" class="btn btn-circle btn-danger btn-sm">Dior</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mt-widget-4">
                                                        <div class="mt-img-container">
                                                            <img src="../assets/pages/img/background/46.jpg" /> </div>
                                                        <div class="mt-container bg-green-opacity">
                                                            <div class="mt-head-title"> CRM Development & Deployment </div>
                                                            <div class="mt-body-icons">
                                                                <a href="#">
                                                                    <i class=" icon-social-twitter"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class=" icon-bubbles"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class=" icon-bell"></i>
                                                                </a>
                                                            </div>
                                                            <div class="mt-footer-button">
                                                                <button type="button" class="btn btn-circle blue-ebonyclay btn-sm">Nike</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mt-widget-4">
                                                        <div class="mt-img-container">
                                                            <img src="../assets/pages/img/background/37.jpg" /> </div>
                                                        <div class="mt-container bg-dark-opacity">
                                                            <div class="mt-head-title"> Marketing Campaigns </div>
                                                            <div class="mt-body-icons">
                                                                <a href="#">
                                                                    <i class=" icon-bubbles"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class=" icon-map"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class=" icon-cup"></i>
                                                                </a>
                                                            </div>
                                                            <div class="mt-footer-button">
                                                                <button type="button" class="btn btn-circle btn-success btn-sm">Honda</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet light portlet-fit ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-microphone font-dark hide"></i>
                                                <span class="caption-subject bold font-dark uppercase"> Activities</span>
                                                <span class="caption-helper">default option...</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group">
                                                    <a class="btn red btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;"> Option 1</a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;">Option 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">Option 3</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">Option 4</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mt-widget-3">
                                                        <div class="mt-head bg-blue-hoki">
                                                            <div class="mt-head-icon">
                                                                <i class=" icon-social-twitter"></i>
                                                            </div>
                                                            <div class="mt-head-desc"> Lorem Ipsum is simply dummy text of the ... </div>
                                                            <span class="mt-head-date"> 25 Jan, 2015 </span>
                                                            <div class="mt-head-button">
                                                                <button type="button" class="btn btn-circle btn-outline white btn-sm">Add</button>
                                                            </div>
                                                        </div>
                                                        <div class="mt-body-actions-icons">
                                                            <div class="btn-group btn-group btn-group-justified">
                                                                <a href="javascript:;" class="btn ">
                                                                    <span class="mt-icon">
                                                                        <i class="glyphicon glyphicon-align-justify"></i>
                                                                    </span>RECORD </a>
                                                                <a href="javascript:;" class="btn ">
                                                                    <span class="mt-icon">
                                                                        <i class="glyphicon glyphicon-camera"></i>
                                                                    </span>PHOTO </a>
                                                                <a href="javascript:;" class="btn ">
                                                                    <span class="mt-icon">
                                                                        <i class="glyphicon glyphicon-calendar"></i>
                                                                    </span>DATE </a>
                                                                <a href="javascript:;" class="btn ">
                                                                    <span class="mt-icon">
                                                                        <i class="glyphicon glyphicon-record"></i>
                                                                    </span>RANC </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mt-widget-3">
                                                        <div class="mt-head bg-red">
                                                            <div class="mt-head-icon">
                                                                <i class="icon-user"></i>
                                                            </div>
                                                            <div class="mt-head-desc"> Lorem Ipsum is simply dummy text of the ... </div>
                                                            <span class="mt-head-date"> 12 Feb, 2016 </span>
                                                            <div class="mt-head-button">
                                                                <button type="button" class="btn btn-circle btn-outline white btn-sm">Add</button>
                                                            </div>
                                                        </div>
                                                        <div class="mt-body-actions-icons">
                                                            <div class="btn-group btn-group btn-group-justified">
                                                                <a href="javascript:;" class="btn ">
                                                                    <span class="mt-icon">
                                                                        <i class="glyphicon glyphicon-align-justify"></i>
                                                                    </span>RECORD </a>
                                                                <a href="javascript:;" class="btn ">
                                                                    <span class="mt-icon">
                                                                        <i class="glyphicon glyphicon-camera"></i>
                                                                    </span>PHOTO </a>
                                                                <a href="javascript:;" class="btn ">
                                                                    <span class="mt-icon">
                                                                        <i class="glyphicon glyphicon-calendar"></i>
                                                                    </span>DATE </a>
                                                                <a href="javascript:;" class="btn ">
                                                                    <span class="mt-icon">
                                                                        <i class="glyphicon glyphicon-record"></i>
                                                                    </span>RANC </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mt-widget-3">
                                                        <div class="mt-head bg-green">
                                                            <div class="mt-head-icon">
                                                                <i class=" icon-graduation"></i>
                                                            </div>
                                                            <div class="mt-head-desc"> Lorem Ipsum is simply dummy text of the ... </div>
                                                            <span class="mt-head-date"> 3 Mar, 2015 </span>
                                                            <div class="mt-head-button">
                                                                <button type="button" class="btn btn-circle btn-outline white btn-sm">Add</button>
                                                            </div>
                                                        </div>
                                                        <div class="mt-body-actions-icons">
                                                            <div class="btn-group btn-group btn-group-justified">
                                                                <a href="javascript:;" class="btn ">
                                                                    <span class="mt-icon">
                                                                        <i class="glyphicon glyphicon-align-justify"></i>
                                                                    </span>RECORD </a>
                                                                <a href="javascript:;" class="btn ">
                                                                    <span class="mt-icon">
                                                                        <i class="glyphicon glyphicon-camera"></i>
                                                                    </span>PHOTO </a>
                                                                <a href="javascript:;" class="btn ">
                                                                    <span class="mt-icon">
                                                                        <i class="glyphicon glyphicon-calendar"></i>
                                                                    </span>DATE </a>
                                                                <a href="javascript:;" class="btn ">
                                                                    <span class="mt-icon">
                                                                        <i class="glyphicon glyphicon-record"></i>
                                                                    </span>RANC </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->