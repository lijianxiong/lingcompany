<?php include __THEMEHEADER__;?>

    <aside class="right-side">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel">
                    <header class="panel-heading">
                        所有文章
                    </header>
                    <!-- <div class="box-header"> -->
                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                    <!-- </div> -->
                    <div class="panel-body table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>标题</th>
                                <th>发布时间</th>
                                <th>相关操作</th>
                            </tr>
                            <?php foreach($result as $item): ?>
                                <tr>
                                    <td><?=$item['id'];?></td>
                                    <td><?=$item['title'];?></td>
                                    <td><?=date('Y年m月d日 H:i:s',$item['create_time']);?></td>
                                    <td><a href="/admin/product/edit/<?=$item['id']?>"><span class="label label-success">编辑</span></a> / <a href="/admin/product/del/<?=$item['id']?>"><span class="label label-danger">删除</span></a></td>
                                </tr>
                            <?php endforeach; ?>

                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->

<?php include __THEMEFOOTER__;?>