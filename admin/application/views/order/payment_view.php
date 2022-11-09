
 <table class="table table-striped table-bordered table-hover">
   

<?php foreach ($result as $row) { ?> 
     <tbody>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><?php echo $row['user_name']; ?></h4>
        </div>

        <tr>
            <td> User name</td>
            <td><?php echo $row['user_name']; ?></td>
        </tr>
     
        <tr>
            <td>Total Amount</td>
            <td><?php echo $row['total_amt']; ?></td>
        </tr>

         

<?php foreach ($row['product'] as $stock) { ?>     

       <tr>
            <td> Product name</td>
            <td><?php echo $stock['stock_name']; ?></td>
            <td><img src="<?= CUSTOM_BASE_URL.'uploads/product_multimage/'.$stock['image'];?>" class="img-responsive" height=100 width=120 /></a>
        </tr>

        <tr>
            <td>Description</td>
            <td><?php echo $stock['description']; ?></td>
        </tr>
        

        
         <tr>
            <td>Product Rate</td>
            <td><?php echo $stock['list_price']; ?></td>
        </tr>
        
        <tr>
            <td>Quantity</td>
            <td><?php echo $stock['qty']; ?></td>
        </tr>
        

<?php } ?> 


    
    
    
    <tr> <td> <u>Payment Details</u></td> </tr>
     
    
    
       <tr>
            <td>Payment ID</td>
            <td><?php echo $row['payment_id'] ; ?></td>
        </tr>
      
       <tr>
            <td>ORDER ID</td>
            <td><?php echo $row['raz_orderid'] ; ?></td>
        </tr>

        
        
  <?php } ?> 
       
</tbody>
</table>





