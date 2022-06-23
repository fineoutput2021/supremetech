<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Update New Category
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url() ?>dcadmin/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="<?php echo base_url() ?>dcadmin/Category/view_category"><i class="fa fa-dashboard"></i> All Categories </a></li>
      <li class="active">View Categories</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Update New Category </h3>
          </div>

          <? if(!empty($this->session->flashdata('smessage'))){ ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            <? echo $this->session->flashdata('smessage'); ?>
          </div>
          <? }
                   if(!empty($this->session->flashdata('emessage'))){ ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            <? echo $this->session->flashdata('emessage'); ?>
          </div>
          <? } ?>


          <div class="panel-body">
            <div class="col-lg-10">
              <form action="<?php echo base_url() ?>dcadmin/Category/add_category_data/<? echo base64_encode(2); ?>/<?= $id ?>" method="POST" id="slide_frm" enctype="multipart/form-data">
                <div class="table-responsive">
                  <table class="table table-hover">

                    <tr>
                      <td> <strong>Category</strong> <span style="color:red;">*</span></strong> </td>
                      <td>
                        <input type="text" name="category" class="form-control" placeholder="" required value="<?= $category->category; ?>" />
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>Web Image<span style="color:red;"><br />796X531px</span></strong></td>
                      <td>
                        <input type="file" name="fileToUpload2" class="form-control" placeholder="" value="" />
                      </td>
                      <td>
                        <?php if($category->image!=""){  ?>
                        <img id="slide_img_path" height=100 width=100 src="<?php echo base_url() ?><?php echo $category->image; ?>">
                        <?php }else {  ?>
                        Sorry No image Found
                        <?php } ?>
                      </td>
                    </tr>
                    <tr>
                      <td> <strong>App Image<span style="color:red;"><br />796X531px</span></strong></td>
                      <td>
                        <input type="file" name="fileToUpload1" class="form-control" placeholder="" value="" />
                      </td>
                      <td>
                        <?php if($category->image2!=""){  ?>
                        <img id="slide_img_path" height=100 width=100 src="<?php echo base_url() ?><?php echo $category->image2; ?>">
                        <?php }else {  ?>
                        Sorry No image Found
                        <?php } ?>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <input type="submit" class="btn btn-success" value="save">
                      </td>
                    </tr>
                  </table>
                </div>

              </form>

            </div>



          </div>

        </div>

      </div>
    </div>
  </section>
</div>


<script type="text/javascript" src="<?php echo base_url() ?>assets/slider/ajaxupload.3.5.js"></script>
<link href="<? echo base_url() ?>assets/cowadmin/css/jqvmap.css" rel='stylesheet' type='text/css' />
