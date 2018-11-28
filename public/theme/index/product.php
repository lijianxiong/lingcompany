<?php include __THEMEHEADER__;?>
    <!------------ Video section ------------>
    <section id="video-sec" class="parallax section-lg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <h2 class="wow fadeInUp" data-wow-delay="0.5s">产品中心</h2>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <?php foreach($result as $item): ?>
                <div class="col-sm-6 col-md-4">
                    <a href="/item/<?=$item['id'];?>">
                    <div class="thumbnail">
                        <img src="<?=$item['thumb']?$item['thumb']:''?>" alt="<?=$item['title']?>">
                        <div class="caption">
                            <h3><a href="/item/<?=$item['id'];?>" style="color: #000;"><?=$item['title'];?></a></h3>
                            <p><?=$item['description'];?>...</p>
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>


    </section>
<?php include __THEMEFOOTER__;?>