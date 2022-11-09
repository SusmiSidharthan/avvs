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
          <h1>Image List</h1>
        </section>

        <!-- Main content -->
          <section class="content">
            <div class="box">
                <div class="box-body panel-scroll">

                  <input type="hidden" value="<?php echo $this->uri->segment(3); ?>" name="stock_id" id="stock_id">

            <table width="100%" class="table table-striped table-bordered table-hover" id="tree-table">
                                    <thead>
                                        <tr>
                                          <th>#Serial</th>
                                          <th>Image</th>
                                          <th>Position</th>
                                          
                                        </tr>
                                    </thead>
                                </table>
    
              </div>
        </div>
      </div>
      
     
      
              
          </div>
         
        </div>
      </div>
    </div>    


         <!-- DELETE MODAL BODY -->
     <div class="modal fade del-modal" id="priceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-7-de" role="document">
            <div class="modal-content">
                  <div class="pro-dele"></div>
            </div>
        </div>
    </div>

    <div class="modal fade slug-modal" id="slug-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
               <div class="slug"></div>
            </div>
        </div>
    </div>   

     <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> 
    <script src="<?php echo base_url() ?>layout/assets/javascript.js"></script>
      
     <?php include('assets/include/footer.php'); ?>


<script type="text/javascript">

    var table;

    $(document).ready(function() {
        //datatables id

        var stock_id = document.getElementById("stock_id").value

        table = $('#tree-table').DataTable({ 
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
        // Load data for the table's content from an Ajax source
        "ajax": {
        "url": '<?php echo site_url('Product/image_list'); ?>',
        "type": "POST",
        "data":{stock_id : stock_id},
        },
        });
    });


</script>


<script type="text/javascript">

  function checkCount(rowid) {

    var value = document.getElementById(rowid+"stock").value;
    var stock_id = document.getElementById("stock_id").value;

    if(value < 3){

    $.ajax({
          type: 'post',
          url: '<?= CUSTOM_BASE_URL . 'Product/setImageCount' ?>', //Here you will fetch records 
            data: 'rowid=' + rowid + '&value=' + value + '&stock_id=' + stock_id, //Pass $id
          success: function (data) {

            if(data == 0){

                $("#"+rowid+"stock").val('');
                alert("Duplicate");
            }

          }
    });

    }
    else{

    $("#"+rowid+"stock").val('');
    alert("Max 2"); 
       

    }

  }

</script>