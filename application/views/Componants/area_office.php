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
                                    <span class="navbar-brand"><i class="fa fa-align-justify"></i><b> Area Office
                                            Requisition</b></span>
                                </div>
                                <!--Right Sidebar -->
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                    <a href="<?= base_url()?>requsition_page">
                                            <button class="btn btn-warning">
                                               Add new
                                            </button>
                                    </a>
                                        |
                                        <a href="currentStock.html">
                                            <button class="btn btn-danger" onclick="location.href='currentStocks.html';" title="Check Current Stock" type="button">
                                                Stock
                                            </button>
                                        </a>
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
                                    <th scope="col">Challan No.</th>
                                    <th scope="col">Area Office</th>
                                    <th scope="col">Transaction Type</th>
                                    <th scope="col">Requisition Date</th>
                                    <th scope="col">Requested By</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="align-items-center">
                               <?php
                                    $count = 0;
                                    foreach($riqusition_info as $val){

                                    
                               ?>
                                <tr>
                                    <!-- SL# -->
                                    <th scope="row"><?= ++$count?></th>
                                    <!-- Challan No. -->
                                    <td><?= $val->chalanId?></td>
                                    <!-- Area Office Name -->
                                    <td><?= $val->aria_officer?></td>
                                    <!-- Transaction Type -->
                                    <td>CWH to AO</td>
                                    <!-- Requisition Date -->
                                    <td><?= $val->date;?></td>
                                    <!-- Requisition by -->   
                                    <td align="center"><?= $val->requestBy?></td>
                                    <!-- Status -->
                                    <td align="center" class="align-middle">
                                        <button class="btn btn-danger btn-sm">
                                            <?= $val->status;?>
                                        </button>

                                    </td>
                                    <!-- View -->
                                    <td  align="center" class="align-middle"><a href="<?= base_url()?>confirm_reqisition_page/<?= $val->chalanId?>"><i
                                                class="fa fa-eye"></i></a></td>
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
                <br><br><br><br><br><br><br><br><br><br>
            </div>

        </div>
    </div>
    <!--END BODY-->

  </main>
</body>

<?= $footer; ?>