<?= $header_src;?>
<main>
<?= $header; ?>

<!-- START BODY-->
        <div class="container-fluid pb-4">
        <div class="d-grid gap-1" style="grid-template-columns: 1fr 3fr;">
            <?= $sidebar;?>

            <div class="bg-light border rounded-3">
                <!--START RIGHT-->
                <div class="maintag">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <span class="navbar-brand"><i class="fa fa-align-justify"></i><b> Add New Requisition</b></span>
        </div>
        <!--Right Sidebar -->
    </div>
</nav>
<hr />

<div style="text-align: center;">
    <h5>Central WareHouse</h5>
    <b>Issuing Office: Sylhet-1</b><br/>
    <b>Date of Challan: 10 June 2021</b><br/>
    <b>Challan Issuing No.: 1002123121</b><br/>
    <b>Requisition Confirmation</b><br/><br/>
    
    <!--Area Office Selection-->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Area Office</label>
        <div class="col-sm-10">
            <select class="form-control">
                <option>---- Select ----</option>
                <option>Sylhet-1</option>
                <option>Sylhet-2</option>
                <option>Sylhet-3</option>
                <option>Dhaka-1</option>
                <option>Dhaka-2</option>
                <option>Dhaka-3</option>
                <option>Brahmanbaria-1</option>
                <option>Brahmanbaria-2</option>
                <option>Habiganj-1</option>
                <option>Habiganj-2</option>
            </select>
        </div>
    </div>

    <!--Transaction Type DISEABLED-->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Transaction Type</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Disabled select example" disabled>
                <option selected>CWH TO AO</option>
              </select>
        </div>
    </div>

    <!--Requisition Date -->
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Requisition Date</label>
        <div class="col-sm-10">
            
            <div class="bootstrap-iso">
                <div class="input-group">
                    <input class="form-control" id="date" name="date" placeholder="DD/MM/YYYY"
                        type="text" />
                </div>
            </div>
        </div>
    </div>

    <!--Requested by-->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Requested by</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="formGroupExampleInput"
                placeholder="Type the user name" autocomplete="on">
        </div>
    </div>



<!-- Requisitions View -->
<table class="table table-hover table-bordered">
    <thead>
        <tr align="center">
            <th scope="col">SL#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Stock (Sales Unit)</th>
            <th scope="col">Base Unit</th>
            <th scope="col">Remarks</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $inputId = 0;
            $pak = 0;
            $pa = 0;
            foreach($requistion_info as $val){
        ?>
        <tr>
            <!-- SL# -->
            <th scope="row">1</th>
            <!-- Product Name -->
            <td><?= $val->product_name?></td>
            <!-- Quantity -->
            <td align="center">
                <input type="number" id="myInput<?php echo ++$inputId;?>"  class="form-control col-xl-4"/>
            </td>
            <!-- Stock -->
            <td align="center">
                <button class="btn btn-outline-dark"><?= $val->carton_price?></button>
            </td>
            <!-- Base Unit -->
            <td align="center">
                <button class="btn btn-outline-primary" id="pa<?php echo ++$pa;?>"><?= $val->carton?></button>
            </td>
            <!-- Remarks -->
            <td align="center" id="pak<?php echo ++$pak;?>">
                0 S/C
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
<footer style="padding:15px; " align="center">
    <button type="button" class="btn btn-success">Confirm</button> |
    <button type="button" class="btn btn-warning">Delete</button>
    </footer>


</div>

                <!--END RIGHT-->
                <br><br><br><br><br><br><br><br><br><br>
            </div>

        </div>
    </div>
    <!--END BODY-->

  </main>
</body>

<?= $footer; ?>