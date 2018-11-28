<?php include __THEMEHEADER__;?>
    <aside class="right-side">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <?=$result['author']?> 的留言
                        </header>
                        <div class="panel-body">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small><em><?=date('Y-m-d H:i:s',$result['create_time']);?></em></small>
                                </span>
                                            <strong><?=$result['author']?> / <?=$result['phone']?></strong>
                                        <p>
                                            <?=$result['content']?>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </section><!-- /.content -->
        <script>
            var ue = UE.getEditor('editor');
        </script>
<?php include __THEMEFOOTER__;?>