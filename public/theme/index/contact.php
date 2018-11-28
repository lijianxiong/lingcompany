<?php include __THEMEHEADER__;?>
    <!------------ Video section ------------>
    <section id="video-sec" class="parallax section-lg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <h2 class="wow fadeInUp" data-wow-delay="0.5s">联系我们</h2>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <table class="table table-hover">

                <tbody>
                <tr>
                    <th scope="row">地址</th>
                    <td><?=$comment['address']?></td>
                </tr>
                <tr>
                    <th scope="row">邮编</th>
                    <td><?=$comment['addemail']?></td>
                </tr>
                <tr>
                    <th scope="row">电话</th>
                    <td><?=$comment['phone']?></td>
                </tr>
                <tr>
                    <th scope="row">传真</th>
                    <td><?=$comment['phonecall']?></td>
                </tr>
                <tr>
                    <th scope="row">邮箱</th>
                    <td><?=$comment['email']?></td>
                </tr>

                </tbody>
            </table>
            <form action="/comment" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="邮箱">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="电话">
                        </div>
                        <div class="form-group">
                            <input type="text" name="author" class="form-control" placeholder="名字">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <textarea class="form-control" rows="3" placeholder="内容" name="content"></textarea>
                        <button type="submit" class="btn btn-default btn-block" style="margin-top: 10px;">提交</button>
                    </div>
                </div>
            </form>

        </div>

    </section>
<?php include __THEMEFOOTER__;?>