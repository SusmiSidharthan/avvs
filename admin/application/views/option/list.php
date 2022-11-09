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
          <h1>Option</h1>
        </section>

        <!-- Main content -->
          <section class="content">
            <div class="box">
                <div class="box-header">
                  <a class="btn bg-olive" href="<?= CUSTOM_BASE_URL;?>options/create">Create</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="panel panel-default">
                 <div class="panel-body panel-scroll">
             <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Slno</th>
                  <th>Name</th>
                  <th>Display Name</th>
                  <th>Action</th>
                </tr>
              </thead>
        
              <tbody>
                 <?php
                $slNo = 1;
                foreach ($list as $row) { ?>
                <tr>
                  <td><?= $slNo ?></td>
                  <td><?= $row['name'];  ?></td>
                  <td><?= $row['display_name'];  ?></td>
                   <td>
                    <a data-toggle="modal" data-id="<?= $row['option_id']; ?>" data-target="#view-modal" class="btn  btn-info" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a class="btn btn-warning" href="<?= CUSTOM_BASE_URL.'options/edit/'.$row['option_id'];?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    <a data-id="<?= $row['option_id']; ?>" data-toggle="modal" data-target="#delModal" class="btn  btn-danger"><i class="fa  fa-trash-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
                 <?php  $slNo++; } ?>
              </tbody>
            </table>
                </div>
              </div>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
               
          </section>           
              
          </div>
        
      
        
        </div>
         <!-- DELETE MODAL BODY -->
     <div class="modal fade del-modal" id="delModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-7-de" role="document">
            <div class="modal-content cat-3-dele">
                  <div class="opt-dele"></div>
            </div>
        </div>
    </div>   

      <!-- VIEW MODAL BODY -->
        <div class="modal fade" id="view-modal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content model_gallery">
                    <div class="modal-body">
                        <div class="row">
                            <!----modal calling div-->
                            <div class="view-modal"></div>
                 
                            <!----end modal calling div-->
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>


     <?php include('assets/include/footer.php'); ?>
  
  
<script type="text/javascript">
  $(document).ready(function () {
      $('#delModal').on('show.bs.modal', function (e) 
      {
          var rowid = $(e.relatedTarget).data('id');
          $.ajax({
              type: 'post',
              url: '<?= CUSTOM_BASE_URL . 'Options/delete' ?>', //Here you will fetch records 
              data: 'rowid=' + rowid , //Pass $id
              success: function (data) {
               $('.opt-dele').html(data);//Show fetched data from database
              }
          });
      });
  });

     $(document).ready(function () {

        $('#view-modal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type: 'post',
                url: '<?php echo site_url('Options/view'); ?>',
                data: 'rowid=' + rowid,
                success: function (data) {
                    $('.view-modal').html(data);
                }
            });
        });
    });

</script>

  <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>