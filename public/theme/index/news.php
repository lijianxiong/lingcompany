<?php include __THEMEHEADER__;?>
    <!------------ Video section ------------>
    <section id="video-sec" class="parallax section-lg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <h2 class="wow fadeInUp" data-wow-delay="0.5s">新闻中心</h2>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <?php foreach($result as $item): ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <?php preg_match_all("/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png|\.BMP|\.JPG|\.PNG]))[\'|\"].*?[\/]?>/",$item['content'],$matches); ?>
                        <img src="<?=$matches[1][0];?>" alt="...">
                        <div class="caption">
                            <h3><a href="/article/<?=$item['id'];?>" style="color: #000;"><?=$item['title'];?></a></h3>
                            <p><?=mb_substr(strip_tags($item['content']),0,50, 'utf-8').'...';?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>


    </section>
<?php include __THEMEFOOTER__;?>