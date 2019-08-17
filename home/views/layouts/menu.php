<div class="houtai_left_menu fl">
  <div class="houta_left_top">
    <a  class="ht_logo">
      <img style="width: 70px;height: 70px;" src="/web/images/ht_logo.png" alt="">
    </a>
    <p class="text-center user_infor">
      <span class="user_mobile"><?= u()->nickname ?></span>
      <i class="dengji">v1</i>
    </p>
    <p class="icon text-center">
      <i class="user_tx"></i>
      <i class="user_m_icon"></i>
      <i class="email"></i>
    </p>
    <p class="anquan text-center">
      <span class="aq_dj">安全等级：</span>
      <span class="qiangdu">中</span>
      <!--        <a href="javascript:;" class="prove">[ 提升 ]</a>-->
    </p>
  </div>
  <div class="houta_left_bottom">
    <ul class="houta_left_bottom_list">
        <li class="<?= $current_position == 'buy' ? 'on' : '' ?>">
            <h3>
                <i class="trad"></i>
                <a data-flag="2" id="trad_center" data-href="<?= url(['order/buy1','id'=>1,'model_type'=>1]) ?>" class="dsa" ><span>交易中心</span></a>
            </h3>
        </li>

      <li class="<?= $current_position == 'center' ? 'on' : '' ?>">
        <h3>
          <i class="home"></i>
          <a data-flag="2" class="dsa" data-href="<?= url(['user/center']) ?>" ><span>账户首页</span></a>
        </h3>
      </li>
      <li class="<?= in_array($current_position,
          ['fund_list', 'recharge', 'deposits', 'trade_list', 'points']) ? 'on' : '' ?>">
        <h3>
          <i class="zichan_ce"></i>
          <span>资产中心</span>
        </h3>
        <ul class="down_list">
          <!--<li>
              <a class="<? /*= $current_position == 'fund_list' ? 'on' : '' */ ?>"
                 href="<? /*= url(['user/fund-list']) */ ?>">资金明细</a>
            </li>-->
          <li>
            <a data-flag="1" data-href ="<?= url(['user/recharge']) ?>" class="<?= $current_position == 'recharge' ? 'on' : '' ?> dsa"
               >我要充值</a>
          </li>
          <li>
            <a data-flag="1" data-href ="<?= url(['user/deposits']) ?>" class="<?= $current_position == 'deposits' ? 'on' : '' ?> dsa"
               >我要提现</a>
          </li>
          <li>
            <a data-flag="1" data-href ="<?= url(['user/trade-list']) ?>" class="<?= $current_position == 'trade_list' ? 'on' : '' ?> dsa" >交易记录</a>
          </li>
<!--          <li>-->
<!--            <a class="--><?//= $current_position == 'points' ? 'on' : '' ?><!--" href="--><?//= url(['user/points']) ?><!--">我的积分</a>-->
<!--          </li>-->
        </ul>
      </li>
      <li class="<?= $current_position == 'modify-password' ? 'on' : '' ?>">
        <h3>
          <i class="setting"></i>
          <a ><span>账户设置</span></a>
        </h3>
        <ul class="down_list">
          <li>
            <a data-flag="1" class="<?= $current_position == 'modify_password' ? 'on' : '' ?> dsa"
               data-href ="<?= url(['user/modify-password']) ?>">修改密码</a>
          </li>
        </ul>
      </li>
<!--      <li class="--><?//= $current_position == 'simulate_list' ? 'on' : '' ?><!--">-->
<!--        <h3>-->
<!--          <i class="jy_liiebiao"></i>-->
<!--          <a href="--><?//= url(['user/simulate-list']) ?><!--"><span>模拟交易列表</span></a>-->
<!--        </h3>-->
<!--      </li>-->
      <!--<li>
          <h3>
              <i class="gg"></i>
              <span>公告</span>
          </h3>
      </li>-->
      <li class="<?= $current_position == 'promotion' ? 'on' : '' ?>">
        <h3>
          <i class="tg_zq"></i>
          <a data-href ="<?= url(['user/promotion']) ?>" class="dsa"><span>推广赚钱</span></a>
        </h3>
      </li>
<!--      <li class="--><?//= $current_position == 'messages' ? 'on' : '' ?><!--">-->
<!--        <h3>-->
<!--          <i class="infor_zhongxin"></i>-->
<!--          <a href="--><?//= url(['user/messages']) ?><!--"><span>信息中心</span></a>-->
<!--        </h3>-->
<!--      </li>-->
      <li class="<?= $current_position == 'feedback' ? 'on' : '' ?>">
        <h3>
          <i class="bianji"></i>
          <a data-href="<?= url(['user/feedback']) ?>"  class="dsa"><span>意见反馈</span></a>
        </h3>
      </li>
    </ul>
  </div>
</div>
<script>
    $('.dsa').click(function () {
        $('.fl').find('li').removeClass('on');
        if ($(this).attr('data-flag') == 1){
            $(this).parent().parent().parent().addClass('on')
        }else {
            $(this).parent().parent().addClass('on')
        }
        var urls = $(this).attr('data-href')
        var index = layer.load(1)
    $.get(urls,{},function (res) {
        layer.close(index);
        $('.hovers').html('')
        $('.hovers').html(res)
    })
    })
  $(function () {
      $(document).on('click','.sad',function () {
          var urlss = $(this).attr('data-href');
          var index1 = layer.load(1)
          $.get(urlss,{},function (res) {
              layer.close(index1);
              $('.hovers').html('')
              $('.hovers').html(res)
          })
      })

      $(document).on('click','.xianxiax',function () {
          var urlsss = $(this).attr('data-href');
          var index2 = layer.load(1)
          $.get(urlsss,{},function (res) {
              layer.close(index2);
              $('.hovers').html('')
              $('.hovers').html(res)
          })
      })

  })
</script>