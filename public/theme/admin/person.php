<?php include __THEMEHEADER__;?>
    <aside class="right-side">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel" style="padding: 15px">
                        <header class="panel-heading">
                            修改个人信息
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal tasi-form" method="post" action="/admin/person/uploadface" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">修改登录名</label>
                                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="请输入登录名" value="<?=$userResult['username'];?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">修改登录密码</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" value="">
                                </div>

                                    <div class="form-group">
                                        <p><img src="<?=$userResult['face_url'];?>" alt=""></p>
                                        <label for="exampleInputFile">修改头像</label>
                                        <input type="file" name="file" id="exampleInputFile">
                                        <input type="hidden" name="face_url" value="<?=$userResult['face_url'];?>">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info col-md-12">提交修改</button>
                                    </div>

                            </form>
                        </div>
                    </section>
                </div>

                <div class="col-lg-6">
                    <section class="panel" style="padding: 15px">
                        <header class="panel-heading">
                            修改站点信息
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal tasi-form" method="post" action="/admin/person/setting">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">修改地址</label>
                                    <input type="text" class="form-control" name="address" placeholder="请输入登录名" value="<?=$settingResult['address'];?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">修改邮编</label>
                                    <input type="text" class="form-control" name="addemail" placeholder="请输入邮编" value="<?=$settingResult['addemail'];?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">修改电话</label>
                                    <input type="text" class="form-control" name="phone" placeholder="请输入电话" value="<?=$settingResult['phone'];?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">修改传真</label>
                                    <input type="text" class="form-control" name="phonecall" placeholder="请输入传真" value="<?=$settingResult['phonecall'];?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">修改邮箱</label>
                                    <input type="text" class="form-control" name="email" placeholder="请输入邮箱" value="<?=$settingResult['email'];?>">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-info col-md-12">提交修改</button>
                                </div>

                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section><!-- /.content -->
        <script>
            var ue = UE.getEditor('editor');
        </script>
<?php include __THEMEFOOTER__;?>