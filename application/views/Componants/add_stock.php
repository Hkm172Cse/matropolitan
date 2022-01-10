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
                                        
                                            <button onclick="location.href='currentStock.html';" title="View All Stock Inventory" class="btn btn-warning" type="button">
                                               View Stocks
                                            </button>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <hr />

                        <!-- Requisitions View -->
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
                                <?php foreach($product_name as $val){?>
                                <tr>
                                    <!-- SL# -->
                                    <th scope="row">1</th>
                                    <!-- Product Name -->
                                    <td><input type="text" class="form-control" readonly value="<?= $val->product_name?>"/></td>
                                    <!-- Quantity -->
                                    <td align="center">
                                        <input type="number" id="myInput1" onchange="getInputValue()" class="form-control col-xl-4"/>
                                    </td>
                                    <!-- Stock -->
                                    <td align="center">
                                        <button class="btn btn-outline-dark">1330</button>
                                    </td>
                                    <!-- Base Unit -->
                                    <td align="center">
                                        <button class="btn btn-outline-primary" id="pa1">12</button>
                                    </td>
                                    <!-- Remarks -->
                                    <td align="center" id="pak1">
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
    
  </div>
</div>
</div>     
<!--END BODY-->

  </main>
</body>

<?= $footer; ?>