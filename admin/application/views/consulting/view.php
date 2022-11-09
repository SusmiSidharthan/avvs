<div class="modal-header" style="background-color:#ecf0eb ;">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   
           <h2>View Appoinment Details</h2>
        
</div>


<?php// var_dump($result);die ?>


<div class="modal-body">
    <div class="row">
       
    
        <table >

            <!--<?php if(!empty($result->prof_image) ){?>-->
            <!--<tr>-->
            <!--   <td class="col-md-1">  <label>Student profile   </label> </td>-->
            <!--   <td class="col-md-11">-->
               
               
            <!--    <img src="<?=base_url().'uploads/student/'.$result->prof_image ;?>" class="img-responsive" height=80 width=80 /></a>-->
                
            <!--    </td>-->
            <!--</tr>-->
            <!--<?}?>-->

            <tr>
               <td class="col-md-4">     <label>PatientName  </label>  </td>
               <td class="col-md-8">:    <?php echo $result->patientname.''.$result->lastname; ; ?> </td>
            </tr>

            <tr>
               <td class="col-md-4">     <label>Dob  </label>  </td>
               <td class="col-md-8">:    <?php echo $result->dob ; ?> </td>
            </tr>
            
            
            <tr>
               <td class="col-md-4">     <label>Appoinment Date  </label>  </td>
               <td class="col-md-8">:    <?php echo date("d-m-Y", strtotime($result->date)) ; ?> </td>
            </tr>

           <tr>
               <td class="col-md-4">     <label>Doctor </label>  </td>
               <td class="col-md-8">:    <?php echo $result->doc_name ; ?></td>
            </tr>

            <tr>
               <td class="col-md-4">     <label>Time slot  </label>  </td>
               <td class="col-md-8">:    <?php echo $result->from_time ; ?> - <?php echo $result->to_time ; ?></td>
            </tr>

            <!--<tr>-->
            <!--   <td class="col-md-4">    <label>Joined Date</label>  </td>-->
            <!--   <td class="col-md-8">:    <?php echo date("d-m-Y", strtotime($result->date)) ; ?> </td>-->
            <!--</tr>-->


            <tr>
               <td class="col-md-4">     <label>Gender </label>  </td>
               <td class="col-md-8">:    <?php echo $result->gender ; ?> </td>
            </tr>
            
            <tr>
               <td class="col-md-4">     <label>Contact </label>  </td>
               <td class="col-md-8">:    <?php echo $result->phone; ?> </td>
            </tr>


            <tr>
               <td class="col-md-4">     <label>Place  </label>  </td>
               <td class="col-md-8">:    <?php echo $result->place; ?> </td>
            </tr>







        </table>


    </div>
</div>


