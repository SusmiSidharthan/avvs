<div class="modal-header" style="background-color:#ecf0eb ;">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   
           <h2>View Category Details</h2>
        
</div>


<?php// var_dump($result);die ?>


<div class="modal-body">
    <div class="row">
       
    
        <table >
            
            
             <tr>
               <td class="col-md">   <img height="100" width="100" src="<?= CUSTOM_BASE_URL . 'uploads/category/crop/'.$result->image ; ?>"> </td>
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
               <td class="col-md-4">     <label>Page Title </label>  </td>
               <td class="col-md-8">:    <?php echo $result->meta_title ; ?> </td>
            </tr>
            

            <tr>
               <td class="col-md-4">     <label>Meta Description </label>  </td>
               <td class="col-md-8">:    <?php echo $result->meta_descr ; ?> </td>
            </tr>

        
            <tr>
               <td class="col-md-4">     <label>Meta Keywords</label>  </td>
               <td class="col-md-8">:    <?php echo $result->meta_key ; ?> </td>
            </tr>
            
            <tr>
               <td class="col-md-4">     <label>SEO Name </label>  </td>
               <td class="col-md-8">:    <?php echo $result->seo_name ; ?> </td>
            </tr>





        </table>


    </div>
</div>


