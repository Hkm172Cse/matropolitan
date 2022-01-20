<?= $header_src;?>
<main>
<?= $header; ?>

<!-- START BODY-->
<div class="container-fluid pb-4">
  <div class="d-grid gap-1" style="grid-template-columns: 1fr 3fr;"> <?= $sidebar;?> <div class="bg-light border rounded-3">
      <!--START RIGHT-->
      <div class="maintag">

                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <span class="navbar-brand"><i class="fa fa-align-justify"></i><b> Add Inventory Stock</b></span>
                                </div>
                                <!--Right Sidebar -->
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        
                                            <button onclick="location.href='<?= base_url()?>view_Stock';" title="View All Stock Inventory" class="btn btn-warning" type="button">
                                               View Stocks
                                            </button>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <hr />

                        <!-- Requisitions View -->
                <form action="<?= base_url()?>add_stock_req" method="post">
                
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
                                    <select name="aria_office" class="form-control">
                                        <option value="">---- Select ----</option>
                                        <option value="Sylhet-1">Sylhet-1</option>
                                        <option value="Sylhet-2">Sylhet-2</option>
                                        <option value="Sylhet-3">Sylhet-3</option>
                                        <option value="Dhaka-1">Dhaka-1</option>
                                        <option value="Dhaka-2">Dhaka-2</option>
                                        <option value="Dhake-3">Dhaka-3</option>
                                        <option value="Brahmanbaria-1">Brahmanbaria-1</option>
                                        <option value="Brahmanbaria-2">Brahmanbaria-2</option>
                                       
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
                                    <input type="text" name="requestBy" class="form-control" id="formGroupExampleInput"
                                        placeholder="Type the user name" autocomplete="on">
                                </div>
                            </div>
                        <table class="table table-hover table-bordered">
                            <thead>
                                
                                <tr align="center">
                                    <th scope="col">SL#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Current Stock (Sales Unit)</th>
                                    <th scope="col">Base Unit</th>
                                    <th scope="col">Remarks</th>
                                </tr>
                              
                            </thead>
                            <tbody>
                                <!-- 1st RAW -->
                                <?php
                                
                                    $inputId = 0;
                                    $pak = 0;
                                    $pa = 0;
                                    $myname = 0;
                                    $mystock = 0;
                                    $count = 0;
                                    foreach($product_name as $val){
                                       
                                ?>
                                <tr>
                                    <!-- SL# -->
                                    <th scope="row"><?= ++$count;?></th>
                                    <!-- Product Name -->
                                    <td><input type="text" class="form-control" name="product_name[]" readonly value="<?= $val->product_name?>"/>
                                    <input type="hidden" name="id[]" class="form-control" name="product_name[]" readonly value="<?= $val->id?>"/>
                                </td>
                                    <!-- Quantity -->
                                    <td align="center">
                                        <input type="number" id="myInput<?php echo ++$inputId;?>" value="" name="quantity[]" onchange="getInputValue()" class="form-control"/>
                                    </td>
                                    <!-- Stock -->
                                    <td align="center">
                                        <input type="number" id="stock<?php echo ++$mystock;?>" class="form-control" value="<?= $val->stock?>" name="stock[]">
                                    </td>
                                    <!-- Base Unit -->
                                    <td align="center">
                                        <input class="form-control" id="pa<?php echo ++$pa;?>" type="text" value="<?= $val->carton?>" name="carton[]">
                                    </td>
                                    <!-- Remarks -->
                                    <td align="center">
                                       <input class="form-control" id="pak<?php echo ++$pak;?>" type="text" value="" name="remark[]">   
                                    </td>
                                </tr>
                                <?php }  ?>
                            <!--tr>
                                <td><input type="text" value="" name="product_name[]"></td>
                                <td><input type="text" value="" name="quantity[]"></td>
                                <td><input type="text" value="" name="stock[]"></td>
                                <td><input type="text" value="" name="base_unit[]"></td>
                                <td><input type="text" value="" name="remark[]"></td>
                            </tr>
                            <tr>
                                <td><input type="text" value="" name="product_name[]"></td>
                                <td><input type="text" value="" name="quantity[]"></td>
                                <td><input type="text" value="" name="stock[]"></td>
                                <td><input type="text" value="" name="base_unit[]"></td>
                                <td><input type="text" value="" name="remark[]"></td>
                            </tr-->
                            </tbody>
                        </table>

                    
                        <footer style="padding:15px; " align="center">
                            <button type="submit" class="btn btn-success">Confirm</button> |
                            <button type="button" class="btn btn-warning">Delete</button>
                            </footer>
                    </div>
                </form> 
      
      <!--END RIGHT-->
    
  </div>
</div>
</div>     
<!--END BODY-->

  </main>
</body>

<?= $footer; ?>