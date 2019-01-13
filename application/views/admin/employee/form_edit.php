<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 ">

                        <div class="card">
                            <div class="card-header">
                                <strong>จัดการสมาชิก</strong>
                            </div>
                            <div class="card-body card-block">

                                <?php foreach($listUserID as $result): ?>
                                <form id="edit-user" data-parsley-validate class="form-horizontal form-label-left"
                                    method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/users/update_user'); ?>">
                                    <input type="hidden" id="user_id" name="user_id" readonly="true" value="<?php echo $result->user_id ?>"
                                        class="form-control col-md-7 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <div class="form-group control-label">
                                                <label for="name" class=" form-control-label">ชื่อ</label>
                                                <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control"
                                                    value="<?php echo $result->name ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <div class="form-group control-label">
                                                <label for="lastname" class=" form-control-label">นามสกุล</label>
                                                <input type="text" name="lastname" id="lastname" placeholder="Enter your name" class="form-control"
                                                    value="<?php echo $result->name ?>">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <label class="form-group control-label" for="email">email
                                            </label>
                                            <input type="email" id="email" name="email" value="<?php echo $result->email ?>"
                                                class="form-control">
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                            <label class="form-group control-label" for="password">password
                                            </label>

                                            <input type="type" id="password" name="password" value="<?php echo $result->password ?>"
                                                class="form-control">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                            <label class="control-label" for="type">ประเภทผู้ใช้งาน
                                            </label>
                                            <select class="form-control" name="typeuser">
                                                <?php foreach($type as $typeuser): ?>
                                                <?php if($result->type_id == $typeuser->type_id){ ?>
                                                <option value="<?php echo $typeuser->type_id ?>" selected="selected">
                                                    <?php echo $typeuser->type_name ?>
                                                </option>
                                                <?php } ?>
                                                <?php if($result->type_id != $typeuser->type_id){ ?>
                                                <option value="<?php echo $typeuser->type_id ?>">
                                                    <?php echo $typeuser->type_name ?>
                                                </option>
                                                <?php } ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                            <label class="control-label" for="salary">เงินเดือน
                                            </label>
                                            <input type="text" id="salary" name="salary" class="form-control"
                                                value="<?php echo $result->salary ?>">

                                        </div>

                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                            <label class="control-label" for="email">เบอร์โทรศัพท์
                                            </label>
                                            
                                                <input type="tel" id="tel" name="tel" class="form-control"
                                                    value="<?php echo $result->tel ?>">
                                      
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                        <label class="control-label" for="address">ที่อยู่
                                        </label>
                                        <textarea class="form-control" required="required" rows="7" id="address" name="address"><?php echo $result->address ?></textarea>
                                    </div>

                                    </div>



                                    
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-12">
                                           <center><button type="submit" class="btn btn-success btn-lg">Save</button><br /><br /> </center> 

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php endforeach; ?>


       