<?php include __THEMEHEADER__;?>
    <script type="text/javascript" charset="utf-8" src="/uedit/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/uedit/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/uedit/lang/zh-cn/zh-cn.js"></script>
    <aside class="right-side">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <section class="panel" style="padding: 15px">
                        <header class="panel-heading">
                            开始发布文章
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal tasi-form" method="post" action="/admin/article/post">
                                <input type="hidden" name="id" value="">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" value="">

                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="description" value="" placeholder="填写新闻短介绍,用于seo">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="keywords" value="" placeholder="填写新闻关键词,用逗号分隔">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="create_time" value="<?=date('Y-m-d H:i:s' , time())?>">
                                </div>
                                <input type="hidden" class="form-control round-input" name="category_id" value="1">

                                <div class="form-group">
                                    <textarea id="editor" type="text/plain" name="content" style="width:100%;height:500px;"></textarea>
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-info col-md-12">发布新闻</button>
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