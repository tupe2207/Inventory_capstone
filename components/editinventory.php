<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules//halfmoon/css/halfmoon.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <title>Document</title>
</head>

<body>
    <?php
    @include('../Controller/db.php');
    @include('../partials/sidebar.php');
    @include('../partials/topbar.php');
    ?>


    <!-- Vertical alignment -->


    <?php
    if (isset($_GET['id'])) {
        $inventory_id = $_GET['id'];
    }


    $inventory = "SELECT * FROM inventory_db WHERE  id = '$inventory_id'";

    $result = $data->query($inventory);
    ?>
    <?php if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

    ?>
            <form method="POST" action="../Controller/editinventory_Controller.php?id=<?php echo $row['id'] ?>">
                <div class="row g-3 p-5 d-flex justify-content-around">

                    <div class="col-sm-6">
                        <label for="first-name" class="form-label">Property Description</label>
                        <input type="text" class="form-control" name="Property_Description" value="<?php echo $row['Property_Description'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Locator</label>
                        <input type="text" class="form-control" name="Locator" value="<?php echo $row['Locator'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="first-name" class="form-label">Current Property Number</label>
                        <input type="text" class="form-control" name="Current_Property_Number" value="<?php echo $row['Current_Property_Number'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Old Property Number</label>
                        <input type="text" class="form-control" name="Old_Property_Number" value="<?php echo $row['Old_Property_Number'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="first-name" class="form-label">Unit of Measure</label>
                        <input type="text" class="form-control" name="Unit_Measure" value="<?php echo $row['Unit_Measure'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Unit Value</label>
                        <input type="text" class="form-control" name="Unit_Value" value="<?php echo $row['Unit_Value'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="first-name" class="form-label">Quantity</label>
                        <input type="text" class="form-control" name="Quantity" value="<?php echo $row['Quantity'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Year Acquired</label>
                        <input type="text" class="form-control" name="Year_Acquired" value="<?php echo $row['Year_Acquired'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="first-name" class="form-label">Date Acquired</label>
                        <input type="text" class="form-control" name="Date_Acquired" value="<?php echo $row['Date_Acquired'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="first-name" class="form-label">Asset Category</label>
                        <input type="text" class="form-control" name="Asset_Category" value="<?php echo $row['Asset_Category'] ?>">
                    </div>


                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Asset Number</label>
                        <input type="text" class="form-control" name="Asset_Number" value="<?php echo $row['Asset_Number'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Asset Title</label>
                        <input type="text" class="form-control" name="Asset_Title" value="<?php echo $row['Asset_Title'] ?>">
                    </div>


                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Issued To</label>
                        <input type="text" class="form-control" name="Issued_To" value="<?php echo $row['Issued_To'] ?>">
                    </div>


                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Issued From</label>
                        <input type="text" class="form-control" name="Issued_From" value="<?php echo $row['Issued_From'] ?>">
                    </div>


                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">ARE/PAR/ICS Number</label>
                        <input type="text" class="form-control" name="ARE_PAR_ICS_Number" value="<?php echo $row['ARE_PAR_ICS_Number'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Cancelled ARE/PAR/ICS Number</label>
                        <input type="text" class="form-control" name="Cancelled_Number" value="<?php echo $row['Cancelled_Number'] ?>">
                    </div>


                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">PRS Number</label>
                        <input type="text" class="form-control" name="PRS_Number" value="<?php echo $row['PRS_Number'] ?>">
                    </div>


                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Estimated Useful Life</label>
                        <input type="text" class="form-control" name="Estimated_Useful_Life" value="<?php echo $row['Estimated_Useful_Life'] ?>">
                    </div>


                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Fund Cluster</label>
                        <input type="text" class="form-control" name="Fund_Cluster" value="<?php echo $row['Fund_Cluster'] ?>">
                    </div>


                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Fund Admin Title</label>
                        <input type="text" class="form-control" name="Fund_Admin_Code" value="<?php echo $row['Fund_Admin_Code'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="first-name" class="form-label">Fund Admin Title</label>
                        <input type="text" class="form-control" name="Fund_Admin_Title" value="<?php echo $row['Fund_Admin_Title'] ?>">
                    </div>


                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Purchase Order/Contract Number</label>
                        <input type="text" class="form-control" name="Purchase_Order_Contract_Number" value="<?php echo $row['Purchase_Order_Contract_Number'] ?>">
                    </div>



                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Supplier</label>
                        <input type="text" class="form-control" name="Supplier" value="<?php echo $row['Supplier'] ?>">
                    </div>



                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Acquired through</label>
                        <input type="text" class="form-control" name="Acquired_through" value="<?php echo $row['Acquired_Through'] ?>">
                    </div>


                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Monthly Dep</label>
                        <input type="text" class="form-control" name="Remarks" value="<?php echo $row['Monthly_Dep'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="last-name" class="form-label">Remarks</label>
                        <input type="text" class="form-control" name="Remarks" value="<?php echo $row['Remarks'] ?>">
                    </div>


                    <div class="d-flex align-items-center">

                        <button type="submit" class="btn btn-primary ms-auto">Submit</button>
                    </div>
                </div>
            </form>

    <?php }
    } ?>
    </div>





    <?php
    include('../partials/footer.php')
    ?>