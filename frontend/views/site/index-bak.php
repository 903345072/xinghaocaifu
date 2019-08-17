
<script src="/js/layer.js"></script>

<header class="mui-bar mui-bar-nav">

    <?php if(user()->isGuest){ ?>
    <a class="mui-btn mui-btn-link mui-pull-left" href="<?=url(['site/login'])?>" style="font-size:12px;">
        登录
    </a>
    <?php }else{?>
    <a class="mui-btn mui-btn-link mui-pull-left" href="<?=url(['user/index'])?>" style="font-size:12px;">
        <?= u()->nickname?>
    </a>
    <?php }?>
    <h1 class="mui-title">交易大厅</h1>
    <a class="mui-btn mui-btn-link mui-pull-right" href="<?=url(['user/hand'])?>">新手？</a>
    <a class="mui-btn mui-btn-link mui-pull-right" href="javascript:window.location.reload()">刷新 | </a>
</header>
<style>
    .red{
        color:red;
    }
    .green{
        color:green;
    }
    .disabled { pointer-events: none; }
</style>
<div class="mui-content">
    <div id="slider" class="mui-slider">
        <div class="mui-slider-group  mui-slider-loop">
            <div class="mui-slider-item mui-slider-item-duplicate">
                <a href=""><img src="/images/5aaf791a955aa.jpg">
                </a>
            </div>
            <div class="mui-slider-item">
                <a href=""><img src="/images/5a4b9bb3c55e4.jpg">
                </a>
            </div>
            <div class="mui-slider-item">
                <a href=""><img src="/images/59e85d516927c.jpg">
                </a>
            </div>
            <div class="mui-slider-item">
                <a href=""><img src="/images/5a4b9944db7b9.jpg">
                </a>
            </div>
            <div class="mui-slider-item">
                <a href=""><img src="/images/59fc73b069ea6.jpg">
                </a>
            </div>
            <div class="mui-slider-item">
                <a href=""><img src="/images/5aaf791a955aa.jpg">
                </a>
            </div>
            <div class="mui-slider-item mui-slider-item-duplicate"><a href=""><img src="/images/5a4b9bb3c55e4.jpg">
                </a></div>
        </div>
        <div class="mui-slider-indicator">
            <div class="mui-indicator mui-active"></div>
            <div class="mui-indicator"></div>
            <div class="mui-indicator"></div>
            <div class="mui-indicator"></div>
            <div class="mui-indicator"></div>
        </div>
    </div>
    <div class="">
        <ul class="mui-table-view mui-grid-view mui-grid-9">
            <li class="mui-table-view-cell mui-media mui-col-xs-3">
                <a href="<?=url(['order/deal', 'model_type' => 2])?>">
                    <img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAABzlBMVEXwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwV1fwWFjwWVnwWlrwW1vwXFzwXV3xXV3xXl7xX1/xYGDxYWHxYmLxY2PxZWXxZmbxZ2fyaWnyamrya2vybGzybW3yb2/ycHDycXHycnLyc3PzdHTzdXXzdnbzd3fzeHjzeXnzenrze3vzfX3zf3/0fn70f3/0gID0goL0g4P0hIT0h4f0iIj0iYn0ior1jIz1jo71j4/1kJD1kZH1k5P1lJT2lJT2lpb2l5f2mJj2mpr2m5v2nJz2n5/3oaH3qqr3rKz4rKz4r6/4sbH4srL4tbX4trb4t7f5trb5t7f5uLj5ubn5vb35vr75wMD5wsL6wsL6w8P6xsb6yMj6ycn6ysr6y8v6zMz6zc37zMz7zc37zs77z8/70tL709P71dX72Nj83Nz83d384eH84uL94+P95OT95eX95ub95+f96Oj96en97e3+7e3+7u7+8PD+8fH+8vL+8/P+9fX+9vb+9/f++Pj++fn/+/v//Pz//f3///8hSQSNAAAAHnRSTlMACg4PHh8+Xl96e4mLjJebsLG0tdXW2OLv8Pf4/P4aSInuAAACYUlEQVQ4y5WV+1vSUBjHJwMURCCcKDLeMQiQtCTDLipo9yy1sszMyky7YnQ30ewmSjeVwkb7b9th4+yM20PfX7Zz3s+zs/d6KIqUzmiyMx0s28HYTUYdVU2GZoYFLJZpNlTE9LZOKFGnTV/ONbZDBbU3lmA6K1SRlSa5BoenGuhxNKgc7YAacqjftHpqgR4r9kPZ4ftjcVIDBxSD4pFe8bc/lRM1EjanFN/lKNnkVc/3L1eGBkmdXcrfkG22Qj6UOM/9jKr/xV+dnb0Z5pfS8ululCOLYltPkh7Ed8RfUTiTH5CXFik0TsX0aVHj630EHhfj8spJU0a2DDwEwE0Lz78SIGukTFAKXvg2ClN7i/6RgyoIZspOgscWQnAu9+P3Q+FBYU8F7RRDgpeEZ+e330VWxSf+EpChXJqjJ3N/V/zQNcNBCeiiWA3IXV/u7g6iZSCgAVkNGJ32AgeZuwDBhXz+cUgDkkdfE33SCwJvCXN3hNuao1VnHiEwsV4AV5YBXq3BCTGGncHhSaU4FUym9/s+v4Dx3FHFuo8yF8HJP5f9PRAKA3JmZHdiLHs6/PG9Dwccp5B/vfdyXtZFiG1OjGWGA08HAacQFwX4Zz5spJE2eod257tC97LDuESkosBlhqIYCCIFvKtJL4A3scYXLRZUuO6ydjq8M44eo9kjykahcIutQCiyneyT8ES2D4hWwM1F6OSbzNZW5u0p0DQXbldS4d5ImANtu9Y/ACi6tRbYSv//kJK+WefYk9RUeZA21TWa3ZVGM8pRi5Mc9s4WQ9V7gZaujzYXy7ra7Gaj9uf+AaY85CRpq5k8AAAAAElFTkSuQmCC">
                    <div class="mui-media-body uk-margin-small-top">
                        <span class="uk-text-medium">模拟操盘</span>
                    </div>
                </a>
            </li>
            <li class="mui-table-view-cell mui-media mui-col-xs-3">
                <a href="<?=url(['discover/risk'])?>">
                    <img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAACDVBMVEVMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpMtOpNtOpOtepPtepQtupRtutStutSt+tUt+tVuOtWuOtXuOtZuexauuxbuuxcu+xdu+xgvOxhvexhve1jve1jvu1kvu1lvu1mv+1owO1pwO1qwO1rwe5swe5twu5uwu5vw+5ww+5xxO5yxO50xe92xu93xu95x+97yO97yPB9yfB/yfCByvCDy/CFzPGGzPGHzPGHzfGJzvGLzvGO0PKP0PKQ0PKQ0fKS0fKV0/OW0/OX0/OX1POZ1POa1fOb1fOe1vSf1/Sh2PSl2fWn2vWp2/Wq2/Wq3PWt3fWu3fWv3vaw3vax3vay3/a04Pa34fa44fe54ve74ve94/e+5Pe/5Pe/5PjB5fjD5vjF5/jG5/jH6PjH6PnI6PnJ6PnK6fnL6fnM6vnO6vnO6/nP6/nR7PrS7PrV7frW7vrZ7/va7/va8Pvd8fve8fvf8fvf8vvh8vvi8/vi8/zj8/zk8/zl9Pzm9Pzn9fzp9vzp9v3q9vzr9/3s9/3t9/3t+P3u+P3v+P3w+f3x+f3y+f3z+v70+v70+/71+/72+/73+/73/P74/P76/f77/f/7/v/+//////8eysn6AAAAHnRSTlMACg4PHh8+Xl96e4mLjJebsLG0tdXW2OLv8Pf4/P4aSInuAAACPklEQVQ4y2NgQAZMbJwCIhIyMhIiApxsTAy4ACu3iIwcHMiIcLNiVcbCLyWHBqT4WTDVsYvLYQHi7GjKmPjkcAA+ZmR1jEKyuBTKCjEi1DELyeEBQggz+WTxKZTlg/sDtyIDXRAJ9RGLOE5lGfOzwX6HhBI/dlXytnmr1y3LAbP5wfEhhVWdXcnSlWtzS7PAHGlQHPFgUaXoVrOiKmdxgkJxGkSABxg0YpjqPBtWlDpELYmVlytLhoiIMTOwyaCpUgtoX5Bnopi6yAfIqUyEphA2Bk40S0M6F2eayitnzfcEcesSoOJcDALIyrSjp05L0pKT06iYZg0WaIyDyggwiCCUaSRMnhkPCmHt+j5LiFBLDFROhEESpswwZUFPhDKIZdTbpgMVbIuAMiQZYH5JmzcjWAPMsppQC1Mn1xEGS+9whQUTls8tj3fRV3CeV6gEd013EFwh3Go1c9+M1pXz2hemqyKc3RcIt1oEJXSUHWJC5RzDrVSg/Ml+cM8IoIW3hr+c16QVXZnuYLXTvaHCggxcaAqdVgGJyJXNs5ZVR1goz/aEBzh6FDqtlpOzmZ2goOeRPXFF1yp3eBSiJwqgQr0p+RC2WWSpMTxRoCczp9XqDU2a6OmJB5RwpVEVrinq10JXB064aFnBad0cW4wEyo8lc9kvcsUsWFiwZFclE8wUz05qAcDALIxPoTAz6YUU0Ewiiz0g4MBekHIQVTRLYyuaQXHEK4Zc2IvxsuKsF5iB1YeopIyMpKgAFxuq4wDA2M6A5NcwHgAAAABJRU5ErkJggg==">
                    <div class="mui-media-body uk-margin-small-top">
                        <span class="uk-text-medium">风险提示</span>
                    </div>
                </a>
            </li>
            <li class="mui-table-view-cell mui-media mui-col-xs-3 service">
                <a href="javascript:;">
                    <img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAB1FBMVEX+///////4/f71/P7x+v31/P7j9frd9Pre9Prd9PrW8fnV8fm05vS05vSy5fSV3fF/1e6F1++G1+991e591e5/1e5/1u6A1u5y0u1x0e1x0u1w0e1v0Oxtz+s6wOZCweZCwuZBweZ/1u+d4POQ3PF91u8zvuZx0u3J7vhizexezOuU3fJOx+lq0O131O6C1/Ck4vRpz+xpz+3F7fh10+6I2fBLxul+1u+36Pa86vfA6/fF7Pil4vS76ffF7fjP8PlOx+mD2PCB1/Ca3/NCw+hHxOh/1u/D7PhOx+lQx+l/1u+s5fWv5vXA6/fA6/fg9ftlzuwkueRezOu/6/fL7vlGxOje9ftDw+jh9vvD7PgxvebD7PjF7fjt+f06wOc/wufd9Ps+wuckueQkueQxvuYzvuYuvOX0+/4tvOUuvOUvveU+wecjueQsvOXo+Pzw+v0rvOXq+Pzu+f3r+f35/f4jueQouuUou+Upu+Xr+f3z+/70+/7///8nuuQjueQnuuT6/f76/v77/v77/v/8/v8muuT+//8luuT+//8jueQlueQkueQluuT///8kueT9//////8jueQluuQmuuQou+Qou+UwvOUwveUzvuVEwuZHw+f///+Zjx6XAAAAkXRSTlMAAAUHCAgPFhYXGhsuLzFUXFxcXl9jY2Nub29wenyys7O0w8PExcbJzc7P0NHR0tLS09PT1NTV1dXV1dXW19fX2NjZ2dra2trb29vb29vc3N3f39/g4eHi4uPk5OTk5ebm5+jp6enq6uvr7Ozt7e7u7/Dw8/X29vb29vb29vf4+Pj4+Pj4+fr7+/z8/f39/v7+6s0J1gAAAhNJREFUOMudlelb00AQxmdjCLRFAoXKIWk9633fJyooIF71lnhSvFHxIJ4FvK0VJFQrYf5ZPwjZd9OWh8f3007e37NJZmdmSYBID5uW9yf/e8qzzLBOigfrquiSVNadUTaViFaVBI3G5JCraCjZaBSDNfFht0jD8ZoAqNUPuCU1UK8huKAl7ZZRurlCglpTn1tWfU2aD9am3TmUrp0Fq9Xv++44I+p3Vv8DjTg+7d/aY9vnDh/NwLO4IQQJEcO87Oz8yMzMj5c5kKVFQpCoTCJ3mmf0YgXsmawURFE4j/5O9vVmzbg8oyiRnoANt3yQIO99JY2ETuEU/G8PcHz3oXRSETKzMnRsBCe6pJM1yYI3v7yKIHeDZZEH0aUnCrgOLI8KEHUpHJ8Aq0B5iA69U8Btg9LK0y8Z3Fut7sgbEZySwaoAxzcfwKunZXIOBsH3Z3xzmlr9de/zIMjHfLMVEt77+ucoUmPX+DgkXB7hnT37l08AeHlt2wY4QiiKwcyti5L7tCn36DMUBZbZ1/X75JbPVt5XygwL98ZT5Vd2yMINqa1w4S0z85eTR85/Y2be7LdCLNBcP87utu0D22/nru86ZV9p7wg0l1go23VktlUzjpMLtuv8B4DQWuYaKc3a/IbU4gpl7DWUG3sN2v8NUiGEESsezTGj5LAP1SVw2C+tC5W5FQTpEdPyCpOTBc8yI+r18RcsLZknEJRfWgAAAABJRU5ErkJggg==">
                    <div class="mui-media-body uk-margin-small-top">
                        <span class="uk-text-medium">在线客服</span>
                    </div>
                </a>
            </li>
            <li class="mui-table-view-cell mui-media mui-col-xs-3">
                <a href="<?=url(['user/recharge'])?>">
                    <img class="grid-icon" src="data:image/png;base64,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">
                    <div class="mui-media-body uk-margin-small-top">
                        <span class="uk-text-medium">充值中心</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="tm-notice">
        <div class="tm-notice-header">最新公告：</div>
        <div class="tm-notice-body">
            <div class="str_wrap tm-notice-marquee noStop" style="height: 29px;">
                <div class="str_move str_origin" style="left: -1267.04px;">
                    <a href="/discover/discovery">欢迎贵宾莅临星浩财富：&nbsp; &nbsp;&nbsp;尊敬的贵宾：您好！今晚20:30将公布美国非农数据，届时行情走势波动会较为剧烈，为降低用户持仓风险，美原油/美黄金/美白银履约保证金于20:00-21:00期间将会提高(去除前两档)。非农数据公布时行情波动剧烈，利润空间较大，技术面分析影响较小，行情受非农数据影响较大，预测正确盈利可观，因此本月非农数据不容错过。&nbsp; 兵马未动，粮草先行。&nbsp;『喜讯-入金赠金』：为感谢广大用户长期以来对星浩财富的支持和信赖：凡是采用公司入款【银行转账、支付宝转银行卡、微信转银行卡】入金的贵宾，即可尊享该笔入金1%的返利。注（赠送的返利金系统自动存入用户积分中-积分可抵用交易手续费）。</a>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-margin-bottom">
        <ul class="mui-table-view mui-in-zero ">
            <li class="mui-table-view-cell no-active-bg" id="guojiqihuo">
                <div class="mui-table">
                    <div class="mui-table-cell mui-col-xs-4">
                        <span>国际期货推荐</span>
                    </div>
                    <div class="mui-table-cell mui-col-xs-8 mui-text-left" style="color: #999">
                        --- 100%交易所实盘交易 ---
                    </div>
                </div>
            </li>
            <?php foreach ($volumeProduct as $product): ?>
            <li class="mui-table-view-cell mui-media mui-media-medium inland itemOne" data-name="<?= $product->table_name ?>" data-id="<?=$product->id?>" data-symbol="<?= $product->dataAll->symbol ?>">
                <a href="<?=url(['order/product-detail', 'id' => $product['id']])?>" class="">
                    <div class="type-img" style="background-color: <?= $product->color ?>;"><?= $product->simple_identify ?></div>
                    <div class="mui-media-body">
                        <div class="mui-table">
                            <div class="mui-table-cell mui-col-xs-7 line-height-normal">
                                <div class="mui-ellipsis"><?= $product->name ?><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAUCAMAAABs8jdaAAAAflBMVEUAAAD////80of90IT9zH781Ir+qU/9v23/ki/8zoL9yXv9t2L9w3P82pH/kS3+uGL/mjv804j/jyv9vmv9w3P+sVr8143/jyv9yXv+q1H+n0L/ki/+qE39vmv80Yb9t2L9vmv9w3P9yXv+n0L+pUn+q1H+sVr/ki7/ljT/mjtQRCt9AAAAHnRSTlMAAAILFRwnOU9ee4qTlJagqLe8wMjQ1+Dl5eby9/q3Tp1fAAAAcElEQVQI143GSwKCIBRA0ZsgUpnav0QJ7PNq/xts0qtpZ3QAypVBFfFg9SbGtX4eYywLAOxpmqZqYQCzyzlnW9dAm1JKo9uOjuqilrQPted8VwO3r4H+qnq6l+pw4fnhwQcREZEGwDVHCRsPzH7++Rsx0A8fjaN69QAAAABJRU5ErkJggg==">
                                    <?php if($product->isTrade == 2) : ?>
                                        <span style="font-size:12px;border: 1px solid #CCC;margin-left: 5px;padding: 1px;color:#CCC">休市中</span>
                                    <?php endif ?>
                                </div>
                                <div class="uk-text-small uk-text-muted">
                                    <div class="mui-ellipsis"><?= $product->desc ?></div>
                                </div>
                            </div>
                            <div class="mui-table-cell mui-col-xs-5 mui-text-right uk-text-small line-height-normal">
                                <div class="uk-text-theme">
                                    <span class="current_price"><?=isset($product->dataAll->price) ? $product->dataAll->price : '' ?></span>&nbsp;
                                    <span class="diff_rate showPrice1"><?=isset($product->dataAll->diff_rate) ? $product->dataAll->diff_rate : '' ?></span>&nbsp;
                                    <span class="diff_rate showPrice2"><?=isset($product->dataAll->diff_rate) ? $product->dataAll->diff_rate : '' ?></span>
                                </div>
                                <div class="uk-text-muted uk-margin-mini-top">
                                    <span><?=$product->tradeTime?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>

    <div class="">
        <ul class="mui-table-view mui-in-zero ">
            <li class="mui-table-view-cell no-active-bg" id="guoneiqihuo">
                <div class="mui-table">
                    <div class="mui-table-cell mui-col-xs-6">
                        <span>国内期货推荐</span>
                    </div>
                    <div class="mui-table-cell mui-col-xs-6 mui-text-right">
                    </div>
                </div>
            </li>
            <?php foreach ($cashProduct as $product): ?>
            <li class="mui-table-view-cell mui-media mui-media-medium itemOne" data-id="<?= $product->id ?>" data-name="<?= $product->table_name ?>" data-symbol="<?= $product->dataAll->symbol ?>">
                <a href="<?=url(['order/product-detail', 'id' => $product['id']])?>" class="">
                    <div class="type-img uk-margin-mini-top" style="background-color: <?= $product->color ?>;"><?= $product->simple_identify ?></div>
                    <div class="mui-media-body">
                        <div class="mui-table">
                            <div class="mui-table-cell mui-col-xs-7 line-height-normal">
                                <div class="mui-ellipsis"><?= $product->name ?><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAUCAMAAABs8jdaAAAAflBMVEUAAAD////80of90IT9zH781Ir+qU/9v23/ki/8zoL9yXv9t2L9w3P82pH/kS3+uGL/mjv804j/jyv9vmv9w3P+sVr8143/jyv9yXv+q1H+n0L/ki/+qE39vmv80Yb9t2L9vmv9w3P9yXv+n0L+pUn+q1H+sVr/ki7/ljT/mjtQRCt9AAAAHnRSTlMAAAILFRwnOU9ee4qTlJagqLe8wMjQ1+Dl5eby9/q3Tp1fAAAAcElEQVQI143GSwKCIBRA0ZsgUpnav0QJ7PNq/xts0qtpZ3QAypVBFfFg9SbGtX4eYywLAOxpmqZqYQCzyzlnW9dAm1JKo9uOjuqilrQPted8VwO3r4H+qnq6l+pw4fnhwQcREZEGwDVHCRsPzH7++Rsx0A8fjaN69QAAAABJRU5ErkJggg==">
                                    <?php if($product->isTrade == 2) : ?>
                                        <span style="font-size:12px;border: 1px solid #CCC;margin-left: 5px;padding: 1px;color:#CCC">休市中</span>
                                    <?php endif ?>
                                </div>
                                <div class="uk-text-small uk-text-muted">
                                    <div class="mui-ellipsis"><?= $product->desc ?></div>
                                </div>
                            </div>
                            <div class="mui-table-cell mui-col-xs-5 mui-text-right uk-text-small line-height-normal">
                                <div class="uk-text-theme">
                                    <span class="current_price"><?=isset($product->dataAll->price) ? $product->dataAll->price : '' ?></span>&nbsp;
                                    <span class="diff_rate showPrice1"><?=isset($product->dataAll->diff_rate)? $product->dataAll->diff_rate : '' ?></span>&nbsp;
                                    <span class="diff_rate showPrice2"><?=isset($product->dataAll->diff_rate) ? $product->dataAll->diff_rate : '' ?></span>

                                </div>
                                <div class="uk-text-muted uk-margin-mini-top">
                                    <span><?=$product->tradeTime ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div style="text-align: center;margin-top:5px;margin-bottom: 10px;">
        <a class="mui-btn mui-btn-themewhite" href="<?=url(['rule/rulesafety'])?>">资金安全</a>
        <a class="mui-btn mui-btn-themewhite" href="<?=url(['discover/risk'])?>">风险告知</a>
        <a class="mui-btn mui-btn-themewhite" href="<?=url(['rule/rulecompany'])?>">合作机构</a>
    </div>
    <div style="text-align: center;margin-top:.04rem;font-size: 12px;height:130px;">
        <p class="text-lesser">交易由纽约商品交易所及港交所实盘对接</p>
        <p class="text-lesser">合作伙伴: 平安保险|南华期货|芝加哥商品交易所|CME集团<br>香港交易所|新加坡交易所|欧洲期货交易所</p>
        <p class="text-lesser">24小时在线客服QQ:3397655168<br> 版权所属©香港星浩财富期貨投資理財有限公司
            <br>
            <br>
            <br>
            <br>
        </p>
    </div>
</div>

<?= $this->render('../layouts/_footer') ?>

<script type="text/javascript" charset="utf-8">
//    $(".inland").click(function() {
//        var id = $(this).data('id');
//        console.log(id);
//        window.location.href = "/user/detail?id=" + id;
//    })



// 获取最新数据
/*function updateOrder(){
    $.get('/site/ajax-all-product', function(newData) {
//        console.log(newData);
        $('.inland').each(function(){
            var $this = $(this),
                nowProduct = $this.data('name'),
                price = parseFloat(newData.info[nowProduct].price),
                lastPrice = $this.find('.current_price').html();
//            console.log(price)
            //价格箭头跳动
            if (newData.info[nowProduct].price != lastPrice) {
                $this.find('.current_price').removeClass('red');
                $this.find('.diff_rate').removeClass('red');
                $this.find('.current_price').removeClass('green');
                $this.find('.diff_rate').removeClass('green');
            }

            if (newData.info[nowProduct].price >= lastPrice) {
                $this.find('.current_price').addClass('red');
                $this.find('.diff_rate').addClass('red');
            } else if (newData.info[nowProduct].price < lastPrice) {
                $this.find('.current_price').addClass('green');
                $this.find('.diff_rate').addClass('green');
            }
//            $this.find('.current_price').html(newData.info[nowProduct].price);
        });
    }, 'json');
}*/

//var allSym = 'WGCNM0,WICMADM0,SCag1812,SCau1812,WICMBPM0,SCbu1812,WICMCDM0,NECLN0,SCcu1807,CEDAXM0,WICMECM0,CMGCQ0,CMHGN0,HIHSI06,CENQM0,DCm1809,HIMHI06,SCni1809,DCp1809,DCpp1809,SCrb1810,SCru1809,CMSIN0,ZCSR1809,DCy1809'
var account = '1q2w3e4r5t6y7u8i';
var allSym = '<?= $productCode ?>';

function updateOrder() {
    $.ajax({
        url: "<?=WEB_STOCKET_URL2?>" + allSym,
        async: true,
        dataType:'json',
        success: function (newData) {

            for (var i = 0, len = newData.length; i < len; i++) {
                $('.itemOne').each(function () {
                    var _this = $(this);
                    var currentSymbol = _this.data('symbol');

                    if (currentSymbol == newData[i].Symbol) {
                        var ZD = (newData[i].NewPrice - newData[i].LastClose);
                        var curRate = (ZD / newData[i].LastClose * 100).toFixed(2) + '%';

                        _this.find('.showPrice1').html(ZD.toFixed(2));
                        _this.find('.showPrice2').html(curRate);
                        _this.find('.current_price').html(newData[i].NewPrice);

                        if (ZD > 0) {
                            _this.find('.showPrice1').addClass('red');
                            _this.find('.showPrice2').addClass('red');
                            _this.find('.current_price').addClass('red');
                            _this.find('.showPrice1').removeClass('green');
                            _this.find('.showPrice2').removeClass('green');
                            _this.find('.current_price').removeClass('green');
                        } else {
                            _this.find('.showPrice1').addClass('green');
                            _this.find('.showPrice2').addClass('green');
                            _this.find('.current_price').addClass('green');
                            _this.find('.showPrice1').removeClass('red');
                            _this.find('.showPrice2').removeClass('red');
                            _this.find('.current_price').removeClass('red');
                        }
                    }
                })

            }
        }
    });

}

setInterval(updateOrder, 1000);


    mui.init();
    var gallery = mui('#slider');
    gallery.slider({
        interval: 1000
    });
    mui(".service").on('tap', 'a', function(event){
        layer.open({
            type: 1,
            title: '扫一扫',
            closeBtn: 1,
            shadeClose: true,
            area: ['300px', '350px'],
            content: '<img src="/images/104.png" style="margin: 0 auto;width:100%">'
        });
    });

    $(window).load(function() {
        $('.tm-notice-marquee').liMarquee({
            scrollamount: 20,
            hoverstop: false
        });
    });

</script>