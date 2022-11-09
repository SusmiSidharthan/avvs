<div class="modal-header" style="background-color:#ecf0eb ;">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   
           <h2>View Product Details</h2>
        
</div>


<?php// var_dump($result);die ?>


<div class="modal-body">
    <div class="row">
       
    
        <table >

            <tr>
               <td class="col-md">   <img height="100" width="100" src="<?= CUSTOM_BASE_URL . 'uploads/product_multimage/'.$result->image ; ?>"> </td>
            </tr>
            
         
            <tr>
               <td class="col-md-4">     <label>Product Name  </label>  </td>
               <td class="col-md-8">:    <?php echo $result->product_name ; ?> </td>
            </tr>

            <tr>
               <td class="col-md-4">     <label>Category Name  </label>  </td>
               <td class="col-md-8">:    <?php echo $result->cat_name ; ?> </td>
            </tr>
            
           

            <tr>
               <td class="col-md-4">     <label>Description </label>  </td>
               <td class="col-md-8">:    <?php echo $result->description ; ?> </td>
            </tr>


            <tr>
               <td class="col-md-4">     <label>MRP</label>  </td>
               <td class="col-md-8">:    <?php echo $result->price.' ₹'; ?> </td>
            </tr>


            <tr>
               <td class="col-md-4">     <label>Sale Price </label>  </td>
               <td class="col-md-8">:    <?php echo $result->list_price.' ₹'; ?> </td>
            </tr>


            <tr>
               <td class="col-md-4">     <label>Discount</label>  </td>
               <td class="col-md-8">:    <?php echo $result->discount.' ₹'; ?> </td>
            </tr>

            <tr>
               <td class="col-md-4">     <label>Stock count </label>  </td>
               <td class="col-md-8">:    <?php echo $result->stock ; ?> </td>
            </tr>
            



        </table>


    </div>
</div>


