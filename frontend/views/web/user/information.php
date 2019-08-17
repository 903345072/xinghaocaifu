<?php $this->regCss('iconfont.css'); ?>
<?php $this->regCss('merg.css'); ?>
<?php $this->regJs('jquery-1.10.1.min.js'); ?>
    <div id="doc" class="doc page-mine nofooter" data-url-query="money_list">
                <!-- 头部 -->
                <header class="page-header">
                    <div class="content news_center">
                        <h3>
                            <span class="active">未读资讯</span><span class="">已读资讯</span>
                        </h3>
                        <div class="left">
                            <i class="iconfont"><a href="<?= url(['user/index']) ?>">&lt</a></i>
                        </div>
                    </div>
                </header>

        <!-- 内容 -->
        <!-- 未读信息 -->
        <div class="news_con active notReadData">
                <?= $this->render('_notInformation', compact('notReadData')) ?>
        </div>
        <?php if($notPageCount > 1) : ?>
        <div class="row" style="text-align: center;">
            <a style="color: red;margin-top: 10px;" type="button" value="加载更多" id="loadMore2" data-count="<?= $notPageCount ?>" data-page="1">加载更多</a>
        </div>
        <?php endif ?>
        <!-- 已读信息 -->
        <div class="news_con  readData">
                <?= $this->render('_information', compact('readData')) ?>
        </div>        
        <?php if($pageCount > 1) : ?>
        <div class="row" style="text-align: center;">
            <a style="color: red;margin-top: 10px;" type="button" value="加载更多" id="loadMore" data-count="<?= $pageCount ?>" data-page="1">加载更多</a>
        </div>
        <?php endif ?>

        
    </div>
    <script type="text/javascript">
        var cool = 1;
        $(function () {
                $('#loadMore').hide();
                $(".page-header .news_center h3 span").on("click", function () {
                        var index = $(this).index();
                        $(this).addClass("active").siblings().removeClass("active");
                        $("#doc .news_con").eq(index).addClass("active").siblings().removeClass("active");
                        if(cool == 1){
                             if(index==1){
                                $("#loadMore").show();                           
                                return;
                            } else if (index==0) {
                                $("#loadMore2").show();
                                $('#loadMore').hide();
                                return;
                            }       
                        }else{
                            res(1)
                        }
                    });
            });
           
        $("#loadMore").click(function() {
            var $this = $(this),
                page = parseInt($this.data('page')) + 1;
            $.get('', {
                p: page
            }, function(html) {
                $("#doc .readData").append(html);
                $this.data('page', page);
                if (page >= parseInt($this.data('count'))) {
                    cool = 0;
                    $this.hide();
                }
            });
            return false;
        });
        $("#loadMore2").click(function() {
            var $this = $(this),
                page = parseInt($this.data('page')) + 1;
                text =  'a';
            $.get('', {
                p2: page,t: text
            }, function(html) {
                $("#doc .notReadData").append(html);
                $this.data('page', page);
                if (page >= parseInt($this.data('count'))) {
                    cool = 0;
                    $this.hide();
                }
            });
            return false;
        });
    </script>