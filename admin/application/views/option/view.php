
    <table class="table table-striped table-bordered table-hover">
        <tbody>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <tr>
            <th> Options</th>
        </tr>

    <?php foreach ($options as $row) { ?> 

        <tr>
            <td><?php echo $row['type_name']; ?></td>
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





