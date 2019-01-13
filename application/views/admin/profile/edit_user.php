<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Page Member</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-1 m-b-25">แก้ไขข้อมูลผู้ใช้งาน</h2>
                        <?php if(isset($listUserID)) {?>
                        <?php foreach($listUserID as $result): ?>
                        <form id="edit-user" data-parsley-validate class="form-horizontal form-label-left" method="POST"
                            enctype="multipart/form-data" action="<?php echo base_url('admin/profile/update_profile'); ?>">


                            <input type="hidden" id="user_id" name="user_id" readonly="true" value="<?php echo $result->user_id ?>"
                                class="form-control col-md-7 col-xs-12">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ชื่อ
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-8">
                                    <input type="text" id="name" name="name" value="<?php echo $result->name ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastname">นามสกุล
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-8">
                                    <input type="text" id="lastname" name="lastname" value="<?php echo $result->lastname ?>"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">email
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-8">
                                    <input type="email" id="email" name="email" value="<?php echo $result->email ?>"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">password
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-8">
                                    <input type="type" id="password" name="password" value="<?php echo $result->password ?>"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">เบอร์โทรศัพท์
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-8">
                                    <input type="tel" id="tel" name="tel" value="<?php echo $result->tel ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">ที่อยู่
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-16">
                                    <textarea class="form-control" required="required" rows="12" id="address" name="address"><?php echo $result->address ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">ประเภทผู้ใช้งาน
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-8">
                                    <select name="typeuser">
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
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success btn-lg">Save</button><br /><br />

                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            
            <?php endforeach; ?>
            <?php }?>
          