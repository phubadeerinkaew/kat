<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Page Users</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-4 col-md-4">
                        <div class="portlet light profile-sidebar-portlet bordered">
                            
                            <div class="profile-userpic">
                                <center><img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-responsive"
                                        alt="">
                            </div>
                            </center>
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> Marcus Doe </div>
                                <div class="profile-usertitle-job"> Developer </div>
                            </div>
                            <div class="container profile-userbuttons">
                                <!-- <button type="button" class="btn btn-info  btn-sm">Edit profile</button> -->
                                <a class="btn btn-info  btn-sm" href="<?php echo base_url('admin/Profile/edit_profile');?>" role="button">Edit profile</a>
                                <!-- <a class="btn btn-info  btn-sm" href="<?php echo base_url('admin/users/update_profile/'); ?>" -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="portlet light bordered">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Your info</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <form>
                                                <div class="form-group">
                                                    <label for="inputName">Name</label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputLastName">Last Name</label>
                                                    <input type="text" class="form-control" id="inputLastName"
                                                        placeholder="Last Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                                        placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">File input</label>
                                                    <input type="file" id="exampleInputFile">
                                                    <p class="help-block">Example block-level help text here.</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>