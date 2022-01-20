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
            <span class="navbar-brand"><i class="fa fa-align-justify"></i><b> Requisition
                    Confirmation</b></span>
        </div>
        <!--Right Sidebar -->
        <ul class="nav navbar-nav navbar-right">
            <li>
                <button onclick="location.href='../AOrequisitions.html';"
                    title="Add New Requisition" class="btn btn-warning" type="button">
                    View all
                </button>
                |

                <button class="btn btn-danger" onclick="location.href='../currentStock.html';"
                    title="Check Current Stock" type="button">
                    Stock
                </button>
            </li>
        </ul>
    </div>
</nav>

<hr />

<div style="text-align: center;">
    <h5>Central WareHouse</h5>
    <b>Issuing Office: Sylhet-1</b><br />
    <b>Date of Challan: 10 June 2021</b><br />
    <b>Challan Issuing No.: 1002123121</b><br />
    <b>Requisition Confirmation</b><br />
</div></br />

<!--Area Office Selection-->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Area Office</label>
    <div class="col-sm-10">
            <select class="form-select" aria-label="Disabled select" disabled>
                <option selected>Sylhet-1</option>
            </select>
    </div>
</div><br/>

<!--Transaction Type DISEABLED-->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Transaction Type</label>
    <div class="col-sm-10">
        <select class="form-select" aria-label="Disabled select" disabled>
            <option selected>CWH TO AO</option>
        </select>
    </div>
</div><br/>

<!--Requisition Date -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Requisition Date</label>
    <div class="col-sm-10">

        <div class="bootstrap-iso">
            <div class="input-group">
                <input class="form-control" id="date" name="date" Disabled placeholder="10/05/2022"
                    type="text" />
            </div>
        </div>
    </div>
</div><br/>

<!--Requested by-->
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Requested by</label>
    <div class="col-sm-10">
        <input type="text" Disabled class="form-control" id="formGroupExampleInput"
            placeholder="Zamal Hossain" autocomplete="on">
    </div>
</div><br/>


<!-- Requisitions View -->
<form action="<?= base_url()?>requestBy" method="post">
<table class="table table-hover table-bordered">
    <thead>
        <tr align="center">
            <th scope="col">SL#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Issued Qty</th>
            <th scope="col">Current Stock</th>
            <th scope="col">Delivery Qty</th>
            <th scope="col">Remarks</th>
        </tr>
    </thead>
    <tbody class="align-items-center">
        <?php
        $count = 0;
            foreach($riqusition_product as $val){


            
        ?>
        <tr>
            <!-- SL# -->
            <th scope="row"><?= ++$count?></th>
            <!-- Product Name -->
            <td><?= $val->product_name?> <input type="hidden" name="chalanId" value="<?= $val->chalanId?>"></td>
            <!-- Issued Qty -->
            <td align="center"><button class="btn btn-outline-dark"><?= $val-> quantity?></button></td>
            <!-- Current Stock -->
            <td align="center"><button class="btn btn-outline-dark"><?= $val->stock?><input type="hidden" name="stock[]" value="<?= $val->stock?>"></button></td>
            <!-- Delivery Qty -->
            <td>
                <input class="form-control" type="number" name="quantity[]"></input>
                <input type="hidden" name="productId[]" value="<?= $val->stockId?>">
             </td>
            <!-- Remarks -->
            <td align="center">2 Carton</td>
        </tr>
     <?php }?>
       

    </tbody>
</table>
<footer style="padding:15px; " align="center">
    <button type="submit" class="btn btn-success">Confim</button> |
    <button type="button" class="btn btn-warning">Delete</button>
</footer>
</form>
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