
    <table class="table table-striped table-bordered table-hover">
        <tbody>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <tr>
            <th> Features</th>
        </tr>

    <?php foreach ($features as $row) { ?> 

        <tr>
            <td><?php echo $row['variants_name']; ?></td>
        </tr>
     
    <?php } ?> 

        <tr>
            <th> Categories</th>
        </tr>


    <?php foreach ($categories as $cat_rows) {  ?>     

         <tr>
            <td><?php echo $cat_rows['cat_name']; ?></td>
        </tr>
     


    <?php } ?> 


</tbody>
</table>





