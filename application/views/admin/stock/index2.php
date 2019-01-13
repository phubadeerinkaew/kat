<div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Page Users</h2>
                                    <a href="<?php echo base_url('admin/stock/form_add'); ?>"><button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button></a>
                                </div>
                            </div>
                        </div>                       
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title-1 m-b-25">จัดการข้อมูลผู้ใช้งาน</h2>
                                <div class="table-responsive table--no-card m-b-40">

                                    <table id="Products" class="table table-borderless table-striped table-earning style="width:100%"">
                                        <thead>
                                            <tr>                 
                                                <th>ไอดี</th>
                                                <th>ชื่อ</th>
                                                <th>เวลา</th>
                                                <th>จำนวน</th>                   
                                                <th>จัดการ</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($listStock as $result): ?>
                                            <tr>
                                                <td><?php echo $result->stock_id; ?></td>
                                                <td><?php echo $result->stock_name; ?></td>
                                                <td><?php echo $result->create_time; ?></td>
                                                <td><?php echo $result->stock_qty; ?></td>

                                                <td><a href="<?php echo base_url('admin/stock/form_edit/'.$result->stock_id); ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                <a data-toggle="modal" href="#del-<?php echo $result->stock_id ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Del </a></td>
                                            </tr>
                                
                        <div class="modal fade" id="del-<?php echo $result->stock_id ?>" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Delete Article</h4>
                              </div>
                              <div class="modal-body">
                                <p>Are you sure you want to delete this Article (<?php echo "users_ID: " .$result->stock_id ?>) ?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href="<?php echo base_url('admin/stock/delete_stock/'.$result->stock_id); ?>" >
                                <button type="button" class="btn btn-danger" id="del-confirm-<?php echo $result->stock_id ?>" userid="<?php echo $result->stock_id ?>">Delete</button></a>
                              </div>
                            </div>
                          </div>
                        </div>

                                <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END PAGE CONTAINER-->

</div>