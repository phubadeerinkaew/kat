<div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Page Users</h2>
                                </div>
                            </div>
                        </div>                       
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title-1 m-b-25">จัดการข้อมูลผู้ใช้งาน</h2>
                                <div class="table-responsive table--no-card m-b-40">

                                    <table id="Products" class="table table-borderless table-striped table-earning" style="width:100%">
                                        <thead>
                                            <tr>
                                                <!-- <th>ไอดี</th>  -->
                                                <th>ชื่อ</th>                                                
                                                <th>ราคา</th>
                                                <th>จำนวน</th>
                                                <th>date</th>
                                                <th>action</th>
                                                <th>vendor</th>
                                                <th>user</th>
                                                <!-- <th>จัดการ</th>                                                 -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(isset($listStockID)) { ?>    
                                        <?php foreach($listStockID as $result): ?>
                                            <tr>
                                                <!-- <td><?php //echo $result->list_id; ?></td> -->
                                                <td><?php echo $result->stock_name; ?></td>
                                                <td><?php echo $result->price; ?></td>
                                                <td><?php echo $result->quality ?></td>
                                                <td><?php echo $result->create_time; ?></td>
                                                <td><?php echo $result->status; ?></td>
                                                <td><?php echo $result->ven_name.' '.$result->ven_lastname; ?></td>
                                                <td><?php echo $result->name.' '.$result->lastname; ?></td>
                                                
<!--                                                 <td><a href="<?php //echo base_url('admin/list_product/product/'.$result->product_id); ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> VIEW </a></td> -->
                                            </tr>

                                <?php endforeach; ?>
                                <?php } ?>
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