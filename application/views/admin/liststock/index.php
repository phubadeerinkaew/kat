<div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Page Users</h2>
                                    <a href="<?php echo base_url('admin/List_Product/form_add'); ?>"><button class="au-btn au-btn-icon au-btn--blue">
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

                                                <td><a href="<?php echo base_url('admin/List_Stock/stock/'.$result->stock_id); ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> VIEW </a>
                                                    <?php if($result->stock_qty > 0){ ?>

                                                    <a href="<?php echo base_url('admin/List_Stock/form_add/'.$result->stock_id); ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> ADD </a>
                                                    <a href="<?php echo base_url('admin/List_Stock/form_withdraw/'.$result->stock_id); ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Withdraw </a>
                                                    <?php }else { ?>
 <a href="<?php echo base_url('admin/List_Stock/form_add/'.$result->stock_id); ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> ADD </a>
                                                    <?php } ?>



                                                </td>
                                            </tr>

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