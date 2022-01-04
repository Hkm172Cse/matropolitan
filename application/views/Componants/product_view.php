<?= $header_src;?>
<main>
<?= $header; ?>

<!-- START BODY-->
        <div class="container-fluid pb-4">
        <div class="d-grid gap-1" style="grid-template-columns: 1fr 3fr;">
            <?= $sidebar;?>

            <div class="bg-light border rounded-3">
                <!--START RIGHT-->
                <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Image</th>
                <th class="text-center" scope="col">Information</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="col">
                  <div class="zoom-image-container" align="center" class="text-center">
                    <div class="zoom-image" src="<?= base_url('image/bill.jpg')?>">
                      <img height="240px" src="<?= base_url($product_info->image)?>" />
                    </div>
                  </div>
                </th>
                <th>
                  <div class="border rounded-3">
                    <!--START Product Information Table-->
                    <table class="table font-weight-bold table-hover table-bordered">
                      <form method="post" action="<?= base_url()?>product_update_view">
                      <tr>

                      <!-- 1st RAW -->
                      <tr>
                        <td align="center">ID</td>
                        <td align="center"><input class="form-control text-center font-weight-bold border-0" type="text" name="id" value="<?= $product_info->id?>"></td>
                      </tr>

                      <!-- 2nd RAW -->
                      <tr>
                        <td align="center">Product Name</td>
                        <td align="center"><input class="form-control text-center font-weight-bold border-0" type="text" name="product_name" value="<?= $product_info->product_name?>"></td>
                      </tr>

                      <!-- 3rd RAW -->
                      <tr>
                        <td align="center">Catagory</td>
                        <td align="center"><input class="form-control text-center font-weight-bold border-0" type="text" name="catagory" value="<?= $product_info->catagory?>"></td>
                      </tr>

                      <!-- 4th RAW -->
                      <tr>
                        <td align="center">Types</td>
                        <td align="center"><input class="form-control text-center font-weight-bold border-0" type="text" name="type" value="<?= $product_info->type?>"></td>
                      </tr>

                      <!-- 5th RAW -->
                      <tr>
                        <td align="center">Status</td>
                        <td align="center"><input class="form-control text-center font-weight-bold border-0" type="text" name="activity" value="<?= $product_info->activity?>"></td>
                      </tr>

                      <!-- 6th RAW -->
                      <tr>
                        <td align="center">Launch Date</td>
                        <td align="center"><input class="form-control text-center font-weight-bold border-0" type="date" name="lunch_date" value="<?= $product_info->lunch_date?>"></td>
                      </tr>
                      <!-- 7th RAW -->
                      <tr>
                        <td align="center">Base Unit</td>
                        <td align="center"><input class="form-control text-center font-weight-bold border-0" type="text" name="base_unit" value="<?= $product_info->base_unit?>"></td>
                      </tr>

                      <tr>
                        <td align="center">Base Unit Price</td>
                        <td align="center"><input class="form-control text-center font-weight-bold border-0" type="text" name="base_qnty_price" value="<?= $product_info->base_qnty_price?>"></td>
                      </tr>

                      <tr>
                        <td align="center">Cartun Quantity</td>
                        <td align="center"><input class="form-control text-center font-weight-bold border-0" type="text" name="carton_price" value="<?= $product_info->carton_price?>"></td>
                      </tr>

                      <tr>
                        <td align="center">Remarks</td>
                        <td align="center"><input class="form-control text-center font-weight-bold border-0" type="text" name="remarks" value="<?= $product_info->remarks?>"></td>
                      </tr>

                      <tr>
                        <td align="center"><a class="btn btn-danger btn-sm" href="<?= base_url()?>delete_product/<?= $product_info->id?>">Delete</a></td>
                        <td align="center"><a href=""><button type="submit" class="btn btn-info btn-sm">Edit</button></a></td>
                      </tr>
                      </form>



                    </table>
                  </div>

                </th>

              </tr>

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