<?php $this->regCss('merg.css'); ?>
<?php $this->regCss('iconfont/iconfont.css') ?>
        <div id="doc" class="doc page-mine nofooter" data-url-query="money_list">
            <!-- 头部 -->
            <header class="page-header">
                <div class="content">
                    <h3>
                        <span><em>资讯详情</em></span>
                    </h3>
                    <div class="left">
                        <a href="<?= url(['user/information']) ?>"><i class="iconfont">&#xe64e;</i></a>
                    </div>
                </div>
            </header>
            <!-- 内容 -->
            <div class="contin">
                <div class="mesint">
                    <p class="mespt"><?= $infDetails->title  ?></p>
                    <p class="mespb"><?= $infDetails->updated_at ?></p>
                    <p class="mespf"><?= $infDetails->content ?></p><br />
                </div>
            </div>
        </div>