<div class="page-container">
     <!-- MAIN CONTENT-->
     <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="card">
                <div class="card-header">สินค้า</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">เพิ่มสินค้า</h3>
                    </div>
                    <hr>
                    <?php foreach($listProductID as $result): ?>
                    <form action="<?php echo base_url('admin/List_Product/insert_product'); ?>" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        
                        <input type="text" id="product_id" name="product_id" readonly="true" value="<?php echo $result->product_id ?>">

                        <div class="form-group">
                            <label for="name" class="control-label mb-1">ชื่อสินค้า</label>
                            <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $result->product_name ?>">
                        </div>
                        <div class="form-group has-success">
                            <label for="size" class="control-label mb-1">size</label>
                            <input id="size" name="size" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="กรุณากรอกคำอธิบายสั้นๆ" value="<?php echo $result->product_size ?>">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                        </div>
                        
                        <div class="col-6">
                            <label for="x_card_code" class="control-label mb-1">จำนวน</label>
                                <div class="input-group">
                                    <input id="quality" name="quality" type="number" class="form-control cc-cvc" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                </div>
                            </div>
                        </div>                      

                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">เพิ่มสินค้า</span>
                                <!-- <span id="payment-button-sending" style="display:none;">Sending…</span> -->
                            </button>
                        </div>
                    </form>
                    <?php endforeach; ?> 
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