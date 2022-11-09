
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
            <td>Total</td>
            <td><?php echo $row['total_amt']; ?></td>
        </tr>

        <tr>
            <td>Delivery Charge</td>
            <td><?php echo $row['delivery_charge']; ?></td>
        </tr>

        <tr>
            <td>Sub Total</td>
            <td><?php echo $row['total']; ?></td>
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


    <?php } ?> 
    
    
    <tr> <td> <u>Delivery Details</u></td> </tr>
      
    <?php foreach($deliverydata as $data){ ?>
    
    
       <tr>
            <td>Name</td>
            <td><?php echo $data['name'] ; ?></td>
        </tr>
      
       <tr>
            <td>Contact</td>
            <td><?php echo $data['phone'] ; ?></td>
        </tr>
        
        <?php if(!empty( $data['alter_phone'] ))  { ?>
         <tr>
            <td>Alternative Contact</td>
            <td><?php echo $data['alter_phone'] ; ?></td>
        </tr>
        <?php  }  ?>
        
        
          
        <tr>
            <td>Address</td>
            <td><?php echo $data['address'] ; ?></td>
        </tr>
        
           <tr>
            <td>Pincode</td>
            <td><?php echo $data['pincode'] ; ?></td>
        </tr>
        
           <tr>
            <td>Landmark</td>
            <td><?php echo $data['land_mark'] ; ?></td>
        </tr>
        
        
        
  <?  }?>
       
</tbody>
</table>





