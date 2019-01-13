<div class="page-container">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Page Employee</h2>
                                    <a href="<?php echo base_url('admin/Users/form_add'); ?>"><button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Add Employee</button></a>
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
                                                <th>email</th>
                                                <th>ประเภทผู้ใช้งาน</th>
                                                <th>จัดการ</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(isset($listUsers)) {?>
                                        <?php foreach($listUsers as $result): ?>
                                            <tr>
                                                <td><?php echo $result->user_id; ?></td>
                                                <td><?php echo $result->name; ?></td>
                                                <td><?php echo $result->lastname; ?></td>
                                                <td><?php echo $result->email; ?></td>
                                                <td><?php echo $result->type_name; ?></td>
                                                <td><a href="<?php echo base_url('admin/Users/form_edit/'.$result->user_id); ?>" class="btn btn-warning btn-xs"><i class="zmdi zmdi-edit"></i> Edit </a>
                                                <a data-toggle="modal" href="#del-<?php echo $result->user_id ?>" class="btn btn-danger btn-xs"><i class="zmdi zmdi-delete"></i> Del </a></td></td>
                                            </tr>
                                
                        <div class="modal fade" id="del-<?php echo $result->user_id ?>" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Delete Article</h4>
                              </div>
                              <div class="modal-body">
                                <p>Are you sure you want to delete this Article (<?php echo "users_ID: " .$result->user_id ?>) ?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href="<?php echo base_url('admin/users/delete/'.$result->user_id); ?>" >
                                <button type="button" class="btn btn-danger" id="del-confirm-<?php echo $result->user_id ?>" userid="<?php echo $result->user_id ?>">Delete</button></a>
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
