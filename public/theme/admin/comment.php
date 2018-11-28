<?php include __THEMEHEADER__;?>

    <aside class="right-side">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel">
                    <header class="panel-heading">
                        所有留言
                    </header>
                    <!-- <div class="box-header"> -->
                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                    <!-- </div> -->
                    <div class="panel-body table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>留言人</th>
                                <th>手机号码</th>
                                <th>发布时间</th>
                                <th>留言内容</th>
                                <th>相关操作</th>
                            </tr>
                            <?php foreach($result as $item): ?>
                                <tr>
                                    <td><?=$item['id'];?></td>
                                    <td><?=$item['author'];?></td>
                                    <td><?=$item['phone'];?></td>
                                    <td><?=date('Y年m月d日 H:i:s',$item['create_time']);?></td>
                                    <td><p style="width: 500px;height: 20px;overflow: hidden;margin: 0px;"><?=$item['content'];?></p></td>
                                    <td><a href="/admin/comment/edit/<?=$item['id']?>"><span class="label label-success">查看</span></a> / <a href="/admin/comment/del/<?=$item['id']?>"><span class="label label-danger">删除</span></a></td>
                                </tr>
                            <?php endforeach; ?>

                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->

<?php include __THEMEFOOTER__;?>