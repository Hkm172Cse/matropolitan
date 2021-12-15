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
                        <i class="fa fa-align-justify"></i><b> Update Product Details</b>
                        <form class="formDesign" method="post" action="<?= base_url()?>product_update_byid">
                            <input type="hidden" name="update_id" value="<?= $product_info->id?>">
                            <!--Product Catagory-->
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Select Product</label>
                                <div class="col-sm-10">
                                    <select class="form-control">

                                        <option value="<?= $product_info->product_name;?>"><?= $product_info->product_name;?></option>
                                        <option>Petrollium Jelly 15gm</option>
                                        <option>Petrollium Jelly 50gm</option>
                                        <option>Taste Fruity 10gm</option>
                                        <option>Badam Chocolate Jar</option>
                                        <option>Lemon Sope</option>
                                        <option>Fedoral Baby Diaper M 5S</option>
                                        <option>Badam Chocolate Jar</option>
                                        <option>Sandora Mini Sope</option>
                                        <option>CP-Sendal Sope</option>
                                    </select>
                                </div>
                            </div><br />
                            <!--Product Name-->
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="product_name" class="form-control" id="formGroupExampleInput"
                                        placeholder="Product Name Here" autocomplete="on">
                                </div>
                            </div><br />



                            <!--Product Type-->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <select name="type" class="form-control">
                                    <option value="<?= $product_info->type;?>"><?= $product_info->type;?></option>
                                        <option>Saleable</option>
                                        <option>Sample</option>
                                        <option>Promotional</option>
                                    </select>
                                </div>
                            </div><br />

                            <!--Product Source-->
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Source</label>
                                <div class="col-sm-10">
                                    <select name="source" class="form-control">
                                    <option value="<?= $product_info->source;?>"><?= $product_info->source;?></option>
                                        <option>Valuka Fectory</option>
                                        <option>Maimansingh Fectory</option>
                                        <option>Kamalganj Fectory</option>
                                    </select>
                                </div>
                            </div><br />

                            <!--Product Activity-->
                            <div class="form-group row">
                                <label class="col-sm-2">Activity</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="activity"
                                            id="inlineRadio1" value="active">
                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="activity"
                                            id="inlineRadio2" value="deactive">
                                        <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                    </div>
                                </div>
                            </div><br />

                            <!--Lunch Date -->
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Lunch Date</label>
                                <div class="col-sm-10">
                                    <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
                                    <div class="bootstrap-iso">
                                        <div class="input-group">
                                            <input class="form-control" id="date" name="lunch_date" placeholder="MM/DD/YYYY"
                                                type="text" value="<?= $product_info->lunch_date?>" />
                                        </div>
                                    </div>
                                </div>
                            </div><br />

                            <!--Upload Image-->
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="image">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>

                                </div>
                            </div><br />

                            <!--Remarks Description-->
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Remarks</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="remarks" id="exampleFormControlTextarea2" rows="3"><?= $product_info->remarks?></textarea>
                                </div>
                            </div><br />

                            <div class="form-group row">
                                <!--Submit Button-->
                                <button type="submit" class="btn btn-primary btn-block"
                                    data-toggle="button">Submit</button>
                            </div><br />
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