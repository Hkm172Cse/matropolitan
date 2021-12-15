<?= $header_src;?>
<main>
<?= $header; ?>

<!-- START BODY-->
        <div class="container-fluid pb-4">
        <div class="d-grid gap-1" style="grid-template-columns: 1fr 3fr;">
            <?= $sidebar;?>

            <div class="bg-light border rounded-3">
                <!--START RIGHT-->
                <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Product Name</th>
                          <th scope="col">Category</th>
                          <th scope="col">Types</th>
                          <th scope="col">Source</th>
                          <th scope="col">Active Status</th>
                          <th scope="col">Launch Date</th>
                          <th scope="col">Image View</th>
                          <th scope="col">Remarks</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
                    
                        <?php 
                            foreach($all_product as $value){
                        ?>
                        <tr>
                          <!-- ID -->
                          <th scope="row"><?= $value->id?></th>
                          <!-- Product Name -->
                          <td><?= $value->product_name?></td>
                          <!-- Category -->
                          <td><?= $value->catagory?></td>
                          <!-- Types -->
                          <td>Sam<?= $value->type?></td>
                          <!-- Source -->
                          <td><?= $value->source?></td>
                          <!-- Activity Status -->
                          <td class="center"><?= $value->activity?></td>
                          <!-- Launch Date -->
                          <td><?= $value->lunch_date?></td>
                          <!-- Image View -->
                          <td class="center"><a href="<?= base_url()?>product_view/<?= $value->id?>"><i class="fa fa-eye"></i></a></td>
                          <!-- Remarks -->
                          <td><?= $value->remarks?></td>
                          <td><a href="<?= base_url()?>update_product/<?= $value->id?>"><button class="btn-sm btn-primary btn">Edit</button></a></td>
                        </tr>

                        <?php }?>
                    
                    
                    
                    
                    
                      </tbody>
                    </table>


                <!--END RIGHT-->
                <br><br><br><br><br><br><br><br><br><br>
            </div>

        </div>
    </div>
    <!--END BODY-->

  </main>
</body>

<?= $footer; ?>