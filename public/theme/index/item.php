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
        <style>
            .item{
                padding: 8px;
                line-height: 1.42857143;
                vertical-align: top;
                border-top: 1px solid #ddd;
            }
            .item:hover{
                background: #eee;
            }
            .productitem .item:nth-child(odd){
                font-weight: 700;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-sm-6"><img src="<?=$result['thumb'];?>" alt="..." class="img-responsive  center-block img-thumbnail"></div>
                <div class="col-sm-6 productitem">
                    <?php foreach ($items as $i): ?>
                    <div class="item col-md-6">
                        <?=$i?>
                    </div>
                    <? endforeach;?>
                </div>
                <div class="col-sm-12"></div>
            </div>
        </div>


    </section>
<?php include __THEMEFOOTER__;?>