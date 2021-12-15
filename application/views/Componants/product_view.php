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
                    <table class="table table-hover table-bordered">
                      <tr>

                      <!-- 1st RAW -->
                      <tr>
                        <td align="center">ID</td>
                        <td align="center">01</td>
                      </tr>

                      <!-- 2nd RAW -->
                      <tr>
                        <td align="center">Product Name</td>
                        <td align="center"><?= $product_info->product_name?></td>
                      </tr>

                      <!-- 3rd RAW -->
                      <tr>
                        <td align="center">Catagory</td>
                        <td align="center"><?= $product_info->catagory?></td>
                      </tr>

                      <!-- 4th RAW -->
                      <tr>
                        <td align="center">Types</td>
                        <td align="center"><?= $product_info->type?></td>
                      </tr>

                      <!-- 5th RAW -->
                      <tr>
                        <td align="center">Status</td>
                        <td align="center"><?= $product_info->activity?></td>
                      </tr>

                      <!-- 6th RAW -->
                      <tr>
                        <td align="center">Launch</td>
                        <td align="center"><?= $product_info->lunch_date?></td>
                      </tr>
                      <!-- 7th RAW -->
                      <tr>
                        <td align="center">Remarks</td>
                        <td align="center"><?= $product_info->remarks?></td>
                      </tr>



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