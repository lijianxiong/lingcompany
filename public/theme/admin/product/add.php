<?php include __THEMEHEADER__;?>

    <aside class="right-side">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

<!--                <form class="form-horizontal tasi-form" method="get" action="/admin/product/add">-->
<!--                    <div class="panel" style="height: 140px;padding: 25px;">-->
<!--                        <div class="col-md-6 form-group">-->
<!--                            <input type="text" name="num" placeholder="描述总量，默认为10个" class="form-control">-->
<!--                            <span class="help-block">&nbsp;&nbsp;填写需要的描述总量，默认为10个，修改后会刷新页面注意保存数据。</span>-->
<!--                            <button type="submit" class="btn btn-info">修改</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
                <section class="panel" style="padding: 15px">
                    <header class="panel-heading">
                        开始发布产品
                    </header>

                    <div class="panel-body">
                        <form class="form-horizontal tasi-form" method="post" action="/admin/product/post" enctype="multipart/form-data">
                            <div class="col-md-12 form-group" style="margin-right: 0;">
                                <input type="text" name="title" placeholder="填写产品标题" class="form-control">
                            </div>
                            <div class="col-md-12 form-group" style="margin-right: 0;">
                                <input type="text" name="description" placeholder="填写产品描述" class="form-control" value="">
                            </div>
                            <div class="col-md-12 form-group" style="margin-right: 0;">
                                <input type="text" name="keywords" placeholder="填写产品关键词" class="form-control" value="">
                            </div>
                            <div class="form-group" style="padding: 15px;">
                                <label for="exampleInputFile">上传产品封面</label>
                                <input type="file" id="exampleInputFile" name="file">
                                <p class="help-block">点击即可选择需要上传的产品封面.</p>
                            </div>
                            <div class="col-md-12 form-group" style="margin-right: 0;">
                            <div id="addExtCate" class="btn btn-info">添加产品信息输入框</div>
                            </div>

                            <div class="product-info">
                                <input type="hidden" name="info[0]" placeholder="填写描述" class="form-control">
                                <?php for($i=0;$i<6;$i++): ?>
                                    <div class="col-md-6 form-group" style="margin-right: 0;"><input type="text" name="info[]" placeholder="填写描述" class="form-control"><span class="help-block pdel">删除</span></div>
                                <?php endfor;?>
                            </div>
                            <button type="submit" class="btn btn-info col-md-12">发布产品</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section><!-- /.content -->
        <style>
            .pdel{
                float: right;
                margin-top: -25px;
                margin-right: 10px;
                cursor: pointer;
            }
        </style>
    <script>
        $('#addExtCate').click(function(){
            //var newSelect = $(this).next().clone();
            $('.product-info').append('<div class="col-md-6 form-group" style="margin-right: 0;"><input type="text" name="info[]" placeholder="填写描述" class="form-control"><span class="help-block pdel">删除</span></div>');
        });
        $('.product-info').on('click', '.pdel', function () {
            var newInput = $(this).parent('div');
            $(this).remove();
            newInput.remove();
        });
    </script>
<?php include __THEMEFOOTER__;?>