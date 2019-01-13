<div class="page-container">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Page Employee</h2>
                                    <a href="<?php echo base_url('admin/vendors/form_add'); ?>"><button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Add Vendor</button></a>
                                </div>
                            </div>
                        </div>                       
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title-1 m-b-25">จัดการข้อมูลพนักงาน</h2>
                                <div class="table-responsive table--no-card m-b-40">

                                    <table id="Users" class="table table-borderless table-striped table-earning" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ไอดี</th>                                             
                                                <th>ชื่อ</th>
                                                <th>นามสกุล</th>
                                                <th>ที่อยู่</th>
                                                <th>เบอร์โทร</th>
                                                <!-- <th>Date</th>                                                 -->
                                                <th>จัดการ</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(isset($listVendors)) {?>
                                        <?php foreach($listVendors as $result): ?>
                                            <tr>
                                                <td><?php echo $result->ven_id; ?></td>
                                                <td><?php echo $result->ven_name; ?></td>
                                                <td><?php echo $result->ven_lastname; ?></td>
                                                <td><?php echo $result->address; ?></td>
                                                <td><?php echo $result->tel; ?></td>
                                                <!-- <td><?php //echo $result->create_time; ?></td>                                                 -->
                                                <td><a href="<?php echo base_url('admin/vendors/form_edit/'.$result->ven_id); ?>" class="btn btn-warning btn-xs"><i class="zmdi zmdi-edit"></i> Edit </a>
                                                <a data-toggle="modal" href="#del-<?php echo $result->ven_id ?>" class="btn btn-danger btn-xs"><i class="zmdi zmdi-delete"></i> Del </a></td></td>
                                            </tr>
                                
                        <div class="modal fade" id="del-<?php echo $result->ven_id ?>" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Delete Article</h4>
                              </div>
                              <div class="modal-body">
                                <p>Are you sure you want to delete this Article (<?php echo "users_ID: " .$result->ven_id ?>) ?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href="<?php echo base_url('admin/vendors/delete_vendor/'.$result->ven_id); ?>" >
                                <button type="button" class="btn btn-danger" id="del-confirm-<?php echo $result->ven_id ?>" userid="<?php echo $result->ven_id ?>">Delete</button></a>
                              </div>
                            </div>
                          </div>
                        </div>

                                <?php endforeach; ?>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
