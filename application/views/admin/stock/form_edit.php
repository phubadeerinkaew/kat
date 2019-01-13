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
                    <?php foreach($liststockID as $result): ?>
                    <form action="<?php echo base_url('admin/stock/update_stock'); ?>" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        
                        <input type="hidden" id="stock_id" name="stock_id" readonly="true" value="<?php echo $result->stock_id ?>" class="form-control col-md-7 col-xs-12">
                        <div class="form-group">
                            <label for="name" class="control-label mb-1">ชื่อสินค้า</label>
                            <input id="stock_name" name="stock_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $result->stock_name ?>">
                        </div>

                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">เพิ่มสินค้า</span>
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