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
                    <form action="<?php echo base_url('admin/products/insert_product'); ?>" method="post" novalidate="novalidate"
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name" class="control-label mb-1">ชื่อสินค้า</label>
                            <input id="name" name="name" type="text" class="form-control" aria-required="true"
                                aria-invalid="false">
                        </div>
                        <div class="form-group has-success">
                            <label for="title" class="control-label mb-1">คำอธิบาย</label>
                            <input id="title" name="title" type="text" class="form-control cc-name valid" data-val="true"
                                data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true"
                                aria-invalid="false" aria-describedby="กรุณากรอกคำอธิบายสั้นๆ">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group has-success">
                            <label for="detail" class="control-label mb-1">รายละเอียดสินค้า</label>
                            <input id="detail" name="detail" type="text" class="form-control cc-name valid" data-val="true"
                                data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true"
                                aria-invalid="false" aria-describedby="cc-name-error">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                data-valmsg-replace="true"></span>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">ประเภทสินค้า</label>
                                <div class="input-group">
                                    <select class="form-control" name="cate">
                                        <?php foreach($Cate as $result): ?>
                                        <option value="<?php echo $result->cate_id ?>">
                                            <?php echo $result->cate_name ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">ขนาดสินค้า</label>
                                <div class="input-group">
                                    <input id="size" name="size" type="tel" class="form-control cc-cvc" value=""
                                        data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">ราคาต้นทุนสินค้า</label>
                                <div class="input-group">
                                    <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc"
                                        value="" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">ราคาสินค้า</label>
                                <div class="input-group">
                                    <input id="price" name="price" type="tel" class="form-control cc-cvc" value=""
                                        data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-12 col-lg-12 col-sm-12 col-xs-12" for="img">รูปประกอบ
                            </label>
                            <div class="col-md-12 col-sm-12 col-lg-12  col-xs-12">
                                <input type="file" id="img" name="img" value="" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">เพิ่มสินค้า</span>
                                <!-- <span id="payment-button-sending" style="display:none;">Sending…</span> -->
                            </button>
                        </div>
                    </form>
                </div>
            </div>