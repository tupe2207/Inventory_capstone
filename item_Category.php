<?php
@include('Controller/db.php');
@include('partials/header.php');
@include('partials/sidebar.php');
@include('partials/topbar.php');
?>
<!-- Vertical alignment -->
<br>
<div class="d-flex justify-content-end" style="margin-right: 5em;">
    <button type="button" class="btn btn-primary">Add Item Type</button>
</div>
<br>
<div class="card table-responsive mw-100 mx-auto rounded-0">

    <?php
    $inventory = "SELECT * FROM itemcategory_db";

    $result = $data->query($inventory);
    ?>
    <table class="table table-bordered align-middle">
        <thead>
            <th>Item Account Number</th>
            <th>Item Account Title</th>
         
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {


            ?>
                <tr>
                    <td>
                        <?php echo($row['Account_Number'])?>
                    </td>

                    <td>
                        <?php echo($row['Account_Title'])?>
                    </td>
                </tr>
    
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