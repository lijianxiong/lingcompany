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
            <div class="news-date"><p>日期：<?=date('Y年m月d日' , $result['create_time']);?></p></div>
            <div class="news-title" style="padding: 10px 0px;border-bottom: 1px solid #DCDCDC;"><h2 class="text-center" style="color: #000;"><?=$result['title'];?></h2></div>
            <div class="news-content" >
                <?=$result['content'];?>
            </div>
        </div>
    </section>
<?php include __THEMEFOOTER__;?>