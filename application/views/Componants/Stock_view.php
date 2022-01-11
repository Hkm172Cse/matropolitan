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
            <span class="navbar-brand"><i class="fa fa-align-justify"></i><b> Current Inventory Stock</b></span>
        </div>
        
    </div>
</nav>
<hr />

<!-- Requisitions View -->
<table class="table table-hover table-bordered">
    <thead>
        <tr align="center">
            <th scope="col">SL#</th>
            <th scope="col">Stock Code</th>
            <th scope="col">Source</th>
            <th scope="col">Product Name</th>
            <th scope="col">Total Quantity</th>
            <th scope="col">Date</th>
            <th scope="col">Authorized</th>
        </tr>
    </thead>
    <tbody class="align-items-center">
        <!-- 1st RAW -->
        <?php
            $count = 0;
             foreach($Stock_data as $val_stock){
            $stock = $val_stock->quantity+$val_stock->stock;    
        ?>
            
        <tr>
            <!-- SL# -->
            <th scope="row"><?= ++$count?></th>
            <!-- Stock Code -->
            <td>100012122112</td>
            <!-- Source -->
            <td>Valuka Fectory</td>
            <!-- Product Name -->
            <td><?= $val_stock->product_name?></td>
            <!-- Total Quantity -->
            <td><?= $stock;?></td>
            <!-- Date -->   
            <td align="center">12/11/2021</td>
            <!-- Authorized -->   
            <td align="center">Zamal Hossain</td>
        </tr>
        <?php }?>

        
       
        
       
    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>


</div>
<!--END RIGHT-->
    
  </div>
</div>
</div>     
<!--END BODY-->

  </main>
</body>

<?= $footer; ?>