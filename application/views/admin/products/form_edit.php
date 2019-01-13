<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="card">
                <div class="card-header">สินค้า</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">แก้ไขสินค้า</h3>
                    </div>
                    <hr>
                    <?php foreach($listProductID as $result): ?>
                    <form action="<?php echo base_url('admin/products/update_product'); ?>" method="post" novalidate="novalidate"
                        enctype="multipart/form-data">

                        <input type="hidden" id="product_id" name="product_id" readonly="true" value="<?php echo $result->product_id ?>"
                            class="form-control col-md-7 col-xs-12">
                        <div class="form-group">
                            <label for="name" class="control-label mb-1">ชื่อสินค้า</label>
                            <input id="name" name="name" type="text" class="form-control" aria-required="true"
                                aria-invalid="false" value="<?php echo $result->product_name ?>">
                        </div>
                        <div class="form-group has-success">
                            <label for="title" class="control-label mb-1">คำอธิบาย</label>
                            <input id="title" name="title" type="text" class="form-control cc-name valid" data-val="true"
                                data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true"
                                aria-invalid="false" aria-describedby="กรุณากรอกคำอธิบายสั้นๆ" value="<?php echo $result->product_title ?>">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group has-success">
                            <label for="detail" class="control-label mb-1">รายละเอียดสินค้า</label>
                            <input id="detail" name="detail" type="text" class="form-control cc-name valid" data-val="true"
                                data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true"
                                aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $result->product_detail ?>">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                data-valmsg-replace="true"></span>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">ประเภทสินค้า</label>
                                <div class="input-group">
                                    <select class="form-control" name="cate">
                                        <?php foreach($Cate as $catedata): ?>
                                        <?php if($result->cate_id == $catedata->cate_id){ ?>
                                        <option value="<?php echo $catedata->cate_id ?>" selected="selected">
                                            <?php echo $catedata->cate_name ?>
                                        </option>
                                        <?php } ?>
                                        <?php if($result->cate_id != $catedata->cate_id){ ?>
                                        <option value="<?php echo $catedata->cate_id ?>">
                                            <?php echo $catedata->cate_name ?>
                                        </option>
                                        <?php } ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">ขนาดสินค้า</label>
                                <div class="input-group">
                                    <input id="size" name="size" type="tel" class="form-control cc-cvc" value="<?php echo $result->product_size ?>"
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
                                        value="<?php echo $result->product_size ?>" data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">ราคาสินค้า</label>
                                <div class="input-group">
                                    <input id="price" name="price" type="tel" class="form-control cc-cvc" value="<?php echo $result->product_price ?>"
                                        data-val="true" data-val-required="Please enter the security code"
                                        data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo base_url('assets/images/products/'.$result->product_img.''); ?>"
                                    style="width:30%;height:30%">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label class="control-label col-md-12 col-sm-12 col-xs-12" for="img">รูปประกอบ
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="file" id="img" name="img" value="" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">แก้ไขสินค้า</span>
                                <!-- <span id="payment-button-sending" style="display:none;">Sending…</span> -->
                            </button>
                        </div>
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
            