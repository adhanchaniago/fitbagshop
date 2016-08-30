<!-- BEGIN PAGE CONTENT BODY -->
<div class="page-content">
    <div class="container-fluid">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo admin_url(); ?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="<?php echo admin_url(); ?>shop">Shop</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Tambah Produk Baru</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <div class="row">
                <div class="col-md-12">
                <form class="form-horizontal form-row-seperated" action="<?php echo admin_url(); ?>process/add_new_product" method="post">
                    <div class="portlet">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-shopping-cart"></i>Tambah Produk Baru </div>
                                <div class="actions btn-set">
                                    <a href="javascript:;" name="back" class="btn btn-secondary-outline">
                                        <i class="fa fa-angle-left"></i> Back</a>
                                    <button type="reset" class="btn btn-secondary-outline">
                                        <i class="fa fa-reply"></i> Reset</button>
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-check"></i> Save</button>
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-check-circle"></i> Save & Continue Edit</button>
                                    <div class="btn-group">
                                        <a class="btn btn-success dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                            <i class="fa fa-share"></i> More
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;"> Duplicate </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> Delete </a>
                                            </li>
                                            <li class="dropdown-divider"> </li>
                                            <li>
                                                <a href="javascript:;"> Print </a>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="portlet-body">
                        <div class="tabbable-bordered">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_general" data-toggle="tab"> General </a>
                                </li>
                                <li>
                                    <a href="#tab_meta" data-toggle="tab"> Meta </a>
                                </li>
                                <li>
                                    <a href="#tab_images" data-toggle="tab"> Images </a>
                                </li>
                                <li>
                                    <a href="#tab_qty" data-toggle="tab"> Quantity </a>
                                </li>                                
                            </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_general">
                                <div class="form-body">

                                    <!-- Start product name -->                        
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nama:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="nama_produk" placeholder="" required> 
                                        </div>
                                    </div>
                                    <!-- End product name -->

                                    <!-- Start deskripsi produk -->                            
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Deskripsi:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="deskripsi_produk" required></textarea>
                                        </div>
                                    </div>
                                    <!-- End deskripsi produk -->

                                    <!-- Deskripsi singkat produk -->                            
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Deskripsi Singkat:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="deskripsi_pendek" required></textarea>
                                            <span class="help-block"> ditampilkan pada listing produk. </span>
                                        </div>
                                    </div>
                                    <!-- End deskripsi singkat -->

                                    <!-- Brand -->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Brand :
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <select class="table-group-action-input form-control input-medium" name="brand_ID" required>
                                                <option value="">Silahkan pilih brand</option>
                                            <?php if(!empty($brand)) foreach($brand as $rows) { ?>
                                                <option value="<?php echo $rows['id']; ?>"><?php echo $rows['brand_name']; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End Brand -->

                                    <!-- Category goes here -->
                                     <div class="form-group">
                                        <label class="col-md-2 control-label">Kategori:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <div class="form-control height-auto">
                                                <div class="scroller" style="height:275px;" data-always-visible="1">
                                                    <ul class="list-unstyled">
                                        <?php if(!empty($category)) foreach($category as $rows) { ?>
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="kategori[]" value="<?php echo $rows['id']; ?>"><?php echo $rows['category_name']; ?>
                                                            </label>
                                                            <ul class="list-unstyled">
                                        <?php 
                                        // Search for sub category
                                        $sub_category = $this->produk_model->get_sub_category($rows['id'], 'category_name', 'asc');
                                        // Check if sub category not empty
                                        if(!empty($sub_category)) foreach($sub_category as $subs) {
                                        ?>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox" name="kategori[]" value="<?php echo $subs['id']; ?>"><?php echo $subs['category_name']; ?>
                                                                    </label>
                                                                <ul class="list-unstyled">
                                        <?php 
                                        // Search for sub category 2
                                        $sub_category2 = $this->produk_model->get_sub_category($subs['id'], 'category_name', 'asc');
                                        // Check if sub category 2 not empty
                                        if(!empty($sub_category2)) foreach($sub_category2 as $subs2) {
                                        ?>
                                                                    <li>
                                                                        <label>
                                                                            <input type="checkbox" name="kategori[]" value="<?php echo $subs2['id']; ?>"><?php echo $subs2['category_name']; ?>
                                                                        </label>
                                                                    <ul class="list-unstyled">
                                        <?php 
                                        // Search for sub category 3
                                        $sub_category3 = $this->produk_model->get_sub_category($subs2['id'], 'category_name', 'asc');
                                        // Check if sub category 3 not empty
                                        if(!empty($sub_category3)) foreach($sub_category3 as $subs3) {
                                        ?>
                                                                        <li>
                                                                            <label>
                                                                                <input type="checkbox" name="kategori[]" value="<?php echo $subs3['id']; ?>"><?php echo $subs3['category_name']; ?>
                                                                            </label>
                                                                        </li>
                                        <?php  }// End foreach sub category3 ?>                                                                               
                                                                    </ul>
                                                                    </li>
                                        <?php  }// End foreach sub category2 ?>                                                                               
                                                                </ul>
                                                                </li>
                                        <?php  }// End foreach sub category ?>                                                                               
                                                            </ul>
                                                        </li>
                                        <?php } // End foreach main category  ?>
                                                                                    
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="help-block"> select one or more categories </span>
                                        </div>
                                    </div>
                                    <!-- End category -->

                                    <!-- Product weight goes here -->
                                    <div class="form-group">
                                        <div class="col-md-2">
                                            <label class="control-label pull-right">Berat Produk:
                                                <span class="required"> * </span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label">Total Berat: </label>
                                            <br />
                                            <input type="text" class="form-control" name="berat_produk" placeholder="" required> 
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label">Satuan: </label>
                                            <br />
                                            <select class="table-group-action-input form-control input-medium" name="satuan_berat" required>
                                                <option value="gram">gram</option>
                                                <option value="kg">kg</option>
                                                <option value="ton">ton</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End product wieght -->  

                                    <!-- Avaibility Goes Here -->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Produk Tersedia:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="dd/mm/yyyy">
                                                <input type="text" class="form-control" name="start_avail_date" value="<?php echo date('d/m/Y'); ?>" required>
                                                <span class="input-group-addon"> sampai </span>
                                                <input type="text" class="form-control" name="end_avail_date" value="<?php echo date('d/m/Y', strtotime('+1 year')); ?>" required> 
                                            </div>
                                            <span class="help-block"> waktu tersedia produk. </span>
                                        </div>
                                    </div>
                                        <!-- End Availlable Date -->

                                    <!-- SKU produk from vendor -->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">SKU:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="sku" placeholder="" required> 
                                        </div>
                                    </div>
                                    <!-- End SKU Produk from vendor -->

                                    <!-- Product Material -->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Material:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="material" placeholder="" required> 
                                        </div>
                                    </div>
                                    <!-- Product Material -->

                                    <!-- Product price goes here -->
                                    <div class="form-group">
                                        <div class="col-md-2">
                                            <label class="control-label pull-right">Harga Produk:
                                                <span class="required"> * </span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label">Modal: </label>
                                            <br />
                                            <input type="text" class="form-control" name="harga_modal" placeholder="Tolong masukkan harga modal produk disini." required> 
                                        </div>
                                        <div class="col-md-2">
                                            <label class="control-label">Margin ( % ): </label>
                                            <br />
                                            <input type="text" class="form-control" name="margin" placeholder="" value="10" required> 
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label">Jual: </label>
                                            <br />
                                            <input type="text" class="form-control" name="harga_jual" placeholder="Tolong masukkan harga jual produk disini." required> 
                                        </div>
                                    </div>
                                    <!-- End product price goes here -->    

                                    <!-- Product promo goes here -->
                                    <div class="form-group">
                                        <div class="col-md-2">
                                            <label class="control-label pull-right">Discount / Promo Produk:
                                                <span class="required"> * </span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label">Total : </label>
                                            <br />
                                            <input type="text" class="form-control" name="discount" placeholder="">
                                            <span class="help-block"> harap perhatikan nilai untuk type beli 1/2/3 gratis ??? </span> 
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label">Type : </label>
                                            <br />
                                            <select class="table-group-action-input form-control input-medium" name="discount_type">
                                                <option value="">Pilih Tipe Diskon...</option>
                                                <option value="1">nominal</option>
                                                <option value="2">persentase ( % )</option>
                                                <!--
                                                <option value="3">beli 1 gratis ???</option>
                                                <option value="4">beli 2 gratis ???</option>
                                                <option value="5">beli 3 gratis ???</option>
                                                -->
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End product promo -->  

                                    <!-- Product cashback goes here -->
                                    <div class="form-group">
                                        <div class="col-md-2">
                                            <label class="control-label pull-right">Cashback / Reward ketika pembelian:
                                                <span class="required"> * </span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label">Total : </label>
                                            <br />
                                            <input type="text" class="form-control" name="cashback" placeholder=""> 
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label">Type : </label>
                                            <br />
                                            <select class="table-group-action-input form-control input-medium" name="cashback_type">
                                                <option value="">Pilih Tipe Cashback...</option>
                                                <option value="1">nominal</option>
                                                <option value="2">persentase ( % )</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End product cashback -->  

                                    <!-- Tax Class goes here -->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Type Pajak:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <select class="table-group-action-input form-control input-medium" name="tax_ID" required>
                                            <?php if(!empty($tax)) foreach($tax as $rows) { ?>
                                                <option value="<?php echo $rows['tax_ID']; ?>"><?php echo $rows['tax_name']; ?> ( <?php echo $rows['tax']; ?>% )</option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End Tax Class -->

                                    <!-- Status product goes here -->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Status:
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <select class="table-group-action-input form-control input-medium" name="status" required>
                                                <option value="">Pilih Status Produk...</option>
                                                <option value="1">Published</option>
                                                <option value="0">Not Published</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End status product -->
                                </div>
                            </div>

                            <div class="tab-pane" id="tab_meta">
                                 <div class="form-body">
                                    <!-- Product SEO Title Goes Here -->                               
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Title:</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control maxlength-handler" name="meta_title" maxlength="150" placeholder="">
                                            <span class="help-block"> max 150 chars </span>
                                        </div>
                                    </div>
                                    <!-- End Product SEO Title Goes Here -->

                                    <!-- Product SEO Keywords Goes Here -->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Keywords:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control maxlength-handler" rows="8" name="meta_keyword" maxlength="180"></textarea>
                                            <span class="help-block"> max 180 chars </span>
                                        </div>
                                    </div>
                                    <!-- End Product SEO Keywords Goes Here -->

                                    <!-- Product SEO Description Goes Here -->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Meta Description:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control maxlength-handler" rows="8" name="meta_description" maxlength="250"></textarea>
                                            <span class="help-block"> max 250 chars </span>
                                        </div>
                                    </div>
                                    <!-- End Product SEO Description Goes Here -->

                                </div>
                            </div>

                            <!-- Tab Images Goes Here -->
                            <div class="tab-pane" id="tab_images">
                                <div class="alert alert-success margin-bottom-10">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                    <i class="fa fa-warning fa-lg"></i> Silahkan upload foto produk disini dengan menekan tombol select files lalu menekan tombol upload files jika sudah selesai memilih. </div>
                                    <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
                                        <a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn btn-success">
                                            <i class="fa fa-plus"></i> Select Files </a>
                                        <a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn btn-primary">
                                            <i class="fa fa-share"></i> Upload Files </a>
                                    </div>
                                <div class="row">
                                    <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"> </div>
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th width="8%"> Image </th>
                                            <th width="25%"> Label </th>
                                            <th width="10%"> </th>
                                        </tr>
                                    </thead>
                                    <tbody id="result_images_handler">
                                    <?php $no=0; if(!empty($tmp_images)) foreach($tmp_images as $rows) { $no++; ?>
                                        <tr id="tmp_<?php echo $rows['id']; ?>">
                                            <td>
                                                <a href="<?php echo base_url().$rows['filepath'].'/'.$rows['filename']; ?>" class="fancybox-button" data-rel="fancybox-button">
                                                    <img class="img-responsive" src="<?php echo base_url().$rows['filepath'].'/'.$rows['filename']; ?>" alt=""> 
                                                </a>
                                                <input type="hidden" name="session_tmp_images" value="<?php echo $rows['session_id']; ?>">
                                            </td>
                                            <td>
                                                <input type="hidden" name="tmp_id[]" value="<?php echo $rows['id']; ?>">
                                                <input type="text" class="form-control" name="image_label[]" value="Product Image Label">
                                                <input type="hidden" name="filepath[]" value="<?php echo $rows['filepath']; ?>">
                                                <input type="hidden" name="filename[]" value="<?php echo $rows['filename']; ?>">                    
                                            </td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-default btn-sm" id="removeimgtmp_<?php echo $rows['id']; ?>" onclick="deltmpimages(<?php echo $rows['id']; ?>);">
                                                    <i class="fa fa-times"></i> Remove 
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Tab Images Goes Here -->

                            <!-- Tab Images Goes Here -->
                            <div class="tab-pane" id="tab_qty">
                                <div class="alert alert-success margin-bottom-10">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                    <i class="fa fa-warning fa-lg"></i> Silahkan tambahkan variant warna terlebih dahulu (jika ada) lalu tekan tombol add qty field untuk menambahkan qty produk. </div>
                                    <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <a href="javascript:;" class="btn btn-success btn-small pull-left" onclick="add_more()">
                                                        <i class="fa fa-plus"></i> Add Qty Field</a>
                                            </div>  
                                            <div class="col-md-8">
                                                <div class="btn-group">
                                                    <a class="btn btn-default dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                                        <i class="fa fa-share"></i> Helpfull Button
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;"> Tambah Warna Baru </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Tambah Ukuran Baru </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Tambah Lokasi Baru </a>
                                                        </li>
                                                    </div>
                                                </div>   
                                            </div>                                             
                                        </div>
                                    </div>
                                <div class="row">
                                    <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"> </div>
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th width="20%"> Warna </th>
                                            <th width="10%"> Qty </th>
                                            <th width="25%"> Lokasi </th>
                                            <th width="20%"> Ukuran </th>
                                            <th width="15%"> Notifikasi Stok Minimum </th>
                                            <th width="10%"> </th>
                                        </tr>
                                    </thead>
                                    <tbody id="add_more">
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="warna[]" value=""> 
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="qty[]" value=""> 
                                            </td>
                                            <td>
                                                <select class="table-group-action-input form-control input-medium pull-left" name="lokasi[]" id="lokasi_ID">
                                                    <?php if(!empty($gudang)) foreach($gudang as $rows) { ?>
                                                        <option value="<?php echo $rows['kode_lokasi']; ?>"><?php echo $rows['lokasi']; ?> ( <?php echo $rows['kuota_tersisa']; ?> left )</option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="ukuran[]" value="Satu Ukuran"> 
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="stok_min[]" value="5"> 
                                            </td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-default btn-sm">
                                                    <i class="fa fa-times"></i> Remove 
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Tab Images Goes Here -->
                            </div>
                        </div>
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>
<!-- END PAGE CONTENT BODY -->

<script type="text/javascript">
var counter = 2;
var myurluploads = "<?php echo admin_url(); ?>process/upload_images/<?php echo uniqid(); ?>";
var imagesajaxhandler = "<?php echo admin_url(); ?>shop/ajaximageshandler/";
var imagesajaxhandlerDel = "<?php echo admin_url(); ?>process/ajaximageshandlerdel/";
var define_folder = '<?php echo admin_url(); ?>shop/product_review';

function deltmpimages(tmp_id){
    $('#removeimgtmp_'+ tmp_id).prop('disabled', true);
    $('#removeimgtmp_'+ tmp_id).html('');
    $('#removeimgtmp_'+ tmp_id).append('Mohon Tunggu...');
    var dataString = 'tmp_id='+ tmp_id;
    $.ajax({
        type: "POST",
        url: imagesajaxhandlerDel,
        data: dataString,
        cache: false,
        success: function(result){ 
            $('#tmp_'+ tmp_id).remove();
        }
    });
}

function add_more(){
    var str = '<tr id="textBox'+ counter +'"><td><input type="text" class="form-control" name="warna[]" value=""></td><td><input type="text" class="form-control" name="qty[]" value=""></td><td><select class="table-group-action-input form-control input-medium pull-left" name="lokasi[]"><?php if(!empty($gudang)) foreach($gudang as $rows) { ?><option value="<?php echo $rows["kode_lokasi"]; ?>"><?php echo $rows["lokasi"]; ?> ( <?php echo $rows["kuota_tersisa"]; ?> left )</option><?php } ?></select></td><td><input type="text" class="form-control" name="ukuran[]" value="Satu Ukuran"></td><td><input type="text" class="form-control" name="stok_min[]" value="5"></td><td><a href="javascript:;" class="btn btn-default btn-sm" onclick="remodiv('+ counter +')"><i class="fa fa-times"></i> Remove</a></td></tr>';
    $("#add_more").append(str);
    counter ++;
}

function remodiv(counter) {
    if (counter == 1) {
        alert("No more textbox to remove");
    return false;
    }
    $("#textBox" + counter).remove();
}
</script>  