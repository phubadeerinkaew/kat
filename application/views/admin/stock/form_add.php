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
                    <form action="<?php echo base_url('admin/stock/insert_stock'); ?>" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name" class="control-label mb-1">ชื่อวัตถุดิบ</label>
                            <input id="stock_name" name="stock_name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                        </div>

<!--                         <div class="form-group has-success">
                            <label for="detail" class="control-label mb-1">รายละเอียดสินค้า</label>
                            <input id="detail" name="detail" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                        </div> -->
                       
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">เพิ่มสินค้า</span>
                                <!-- <span id="payment-button-sending" style="display:none;">Sending…</span> -->
                            </button>
                        </div>
                    </form>
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