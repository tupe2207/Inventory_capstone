
<?php
@include('Controller/db.php');
@include('partials/header.php');
@include('partials/sidebar.php');
@include('partials/topbar.php');
?>
<!-- Vertical alignment -->
<br>
<div class="d-flex justify-content-end" style="margin-right: 5em;">
    <button type="button" class="btn btn-primary">Add Inventory</button>
</div>
<br>
<div class="card table-responsive mw-100 mx-auto rounded-0">

    <?php
    $inventory = "SELECT * FROM inventory_db";

    $result = $data->query($inventory);
    ?>
    <table class="table table-bordered align-middle">
        <thead>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>ROLE</th>
            <th>CREATED AT</th>
            <th>UPDATED AT</th>
          
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {


            ?>
            <tr></tr>
                    <td>
                        <?php echo($row['FIRST NAME'])?>
                    </td>

                    <td>
                        <?php echo($row['LAST NAME'])?>
                    </td>

                    <td>
                        <?php echo($row['Current_Property_Number'])?>
                    </td>

                    <td>
                        <?php echo($row['Old_Property_Number'])?>
                    </td>

                    <td>
                        <?php echo($row['Unit_Measure'])?>
                    </td>

                    
                    </td>

                    
            <?php
                }
            } else {
                echo "0 results";
            }
            ?>
        </tbody>
    </table>
</div>





<?php
include('partials/footer.php')
?>