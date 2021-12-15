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
                        <i class="fa fa-align-justify"></i><b> Add New Product</b>
                        <form class="formDesign" method="post" action="<?= base_url()?>add_new_product" enctype="multipart/form-data">

                            <!--Product Name-->
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="product_name" class="form-control" id="formGroupExampleInput"
                                        placeholder="Product Name Here" autocomplete="on">
                                </div>
                            </div><br />

                            <!--Product Catagory-->
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select name="catagory" class="form-control">
                                        <option>---- Select ----</option>
                                        <option>Skin Care</option>
                                        <option>Food and Beverage</option>
                                        <option>Health and Hygiene</option>
                                        <option>Sope</option>
                                        <option>Baby Diaper</option>
                                        <option>Baby Pant Diaper</option>
                                        <option>Baby Wipes</option>
                                        <option>Promotional</option>
                                    </select>
                                </div>
                            </div><br />

                            <!--Product Type-->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <select name="type" class="form-control">
                                        <option>---- Select ----</option>
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
                                        <option>---- Select ----</option>
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
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="activity"
                                            id="inlineRadio2" value="option2">
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
                                                type="date" />
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
                            </div>
                            
                            <br />

                            <!--Unit of Product-->
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Units</label>
                                <div class="col-sm-10">

                                    <div class="border border-info" style="padding: 10px;">

                                        <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Base Unit</label>
                                        <div class="col-sm-10">
                                            <select name="base_unit" class="form-control">
                                                <option>---- Select ----</option>
                                                <option>Piece</option>
                                                <option>Packet</option>
                                                <option>Sachet</option>
                                                <option>Blister</option>
                                                <option>Dispenser</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Carton</label>
                                        <div class="col-sm-10">
                                            <select name="carton" class="form-control">
                                                <option>---- Select ----</option>
                                                <option>4</option>
                                                <option>8</option>
                                                <option>12</option>
                                                <option>20</option>
                                                <option>24</option>
                                                <option>40</option>
                                                <option>48</option>
                                                <option>120</option>
                                            </select>
                                        </div>
                                    </div>


                                    </div>

                                </div>
                            </div><br />

                            <!--Remarks Description-->
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Remarks</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="remarks" id="exampleFormControlTextarea2" rows="3"></textarea>
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