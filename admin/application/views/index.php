<!DOCTYPE html>
<html>
  <head>
    <?php include('assets/include/header.php'); ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

     
 <?php include('assets/include/navigation.php'); ?>
        
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-list-alt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Products</span>
                  <span class="info-box-number"><?php if(isset($products)){ echo $products; } ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Orders</span>
                  <span class="info-box-number"><?php if(isset($orders)){ echo $orders; } ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Members</span>
                  <span class="info-box-number"><?php if(isset($users)){ echo $users; } ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <div class="box">
            
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
          
              <div class="row">
               

                <div class="col-md-12">
                  <!-- USERS LIST -->
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Latest Categories</h3>
                      <div class="box-tools pull-right">
                        <!-- <span class="label label-danger">8 New Categories</span> -->
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                      <ul class="users-list clearfix">
                        <?php foreach ($category as $key => $cat_rows) { ?>
                        <li>
                          <img src="<?= CUSTOM_BASE_URL.'uploads/category/crop/'.$cat_rows['image'];?>" alt="User Image">
                          <a class="users-list-name" href="#"><?= $cat_rows['cat_name'];?></a>
                        </li>
                      <?php } ?>
                      </ul><!-- /.users-list -->
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                      <a href="<?= CUSTOM_BASE_URL;?>category" class="uppercase">View All Categories</a>
                    </div><!-- /.box-footer -->
                  </div><!--/.box -->
                </div><!-- /.col -->
              </div><!-- /.row -->

              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Orders</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Item</th>
                          <th>Status</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($order_list as $key => $order_row) { 

                          if($order_row['status']==1) {

                            $status = 'Delivered';
                            $color = '#00a65a';
                            $label = 'success';
                            
                          }

                          if($order_row['status']==2) {

                            $status = 'Pending';
                            $color = '#f39c12';
                            $label = 'warning';
                          }

                          if($order_row['status']==0) {

                            $status = 'Cancelled';
                            $color = '#f56954';
                            $label = 'danger';
                          }

                          ?>
                        <tr>
                          <td><a href="#">#<?= $order_row['id']; ?></a></td>
                          <td><?= $order_row['stock_name']; ?></td>
                          <td><span class="label label-<?= $label; ?>"><?= $status; ?></span></td>
                          <td><div class="sparkbar" data-color="<?= $color; ?>" data-height="20"><?= date('D d, M Y H:i', strtotime($order_row['date'])); ?></div></td>
                        </tr>
                      <?php } ?>
                                       
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <!-- <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a> -->
                  <a href="<?= CUSTOM_BASE_URL;?>cart_orders" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Recently Added Products</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <?php foreach ($stock_list as $key => $stock_row) { ?>
                    <li class="item">
                      <div class="product-img">
                        <img src="<?= CUSTOM_BASE_URL . 'uploads/product_multimage/'.$stock_row['image']; ?>" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title"> <?= $stock_row['stock_name']; ?> <span class="label label-warning pull-right"><?= $stock_row['list_price']; ?></span></a>
                        <span class="product-description">Stock: 
                          <?= $stock_row['stock']; ?>
                        </span>
                      </div>
                    </li><!-- /.item -->
                  <?php } ?>
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="<?= CUSTOM_BASE_URL;?>product" class="uppercase">View All Products</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

   

  </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
     <?php include('assets/include/footer.php'); ?>
  </body>
</html>
