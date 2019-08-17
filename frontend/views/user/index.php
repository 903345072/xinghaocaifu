<div class="main_heads">
  <h1><span>个人中心</span></h1>
<!--  <a href="#">规则说明</a>-->
</div>
<div class="banners">
  <div class="ban_mid">
    <img src="/wap/img/user_icon_06.png"/>
    <p><?=u()->nickname?></p>
  </div>

  <div class="ban_navbar" style="display: flex;justify-content: center;align-items: center;">
    <ul>
      <li style="display: flex;justify-content: center;width: 100%">
        <span>账户余额:</span>
        <span style="margin-left: 10px">￥<?=u()->account-u()->blocked_account?></span>
      </li>
<!--      <li>-->
<!--        <p>模拟账户余额</p>-->
<!--        <span>--><?//=u()->moni_acount - u()->blocked_moni ?><!--</span>-->
<!--      </li>-->
<!--      <li>-->
<!--        <p>我的积分</p>-->
<!--        <span>--><?//= u()->points ?><!--</span>-->
<!--      </li>-->
    </ul>
  </div>
</div>
<div class="slide_btn">
  <a href="<?=url(['user/withDraw'])?>"><div class="fl">提现</div></a>
  <a href="<?=url(['user/recharge'])?>"><div class="fr">充值</div></a>
</div>
<div class="list_capy">
  <ul>
    <!--<a href="#"><li>
        <div class="icon">
          <img src="/wap/img/user_icon1.png" />
        </div>
        <p>资金明细</p>
        <img src="/wap/img/user_icon_30.png" class="ris"/>
      </li></a>-->
    <a href="<?= url(['order/record']) ?>"><li>
        <div class="icon">
          <img src="/wap/img/user_icon2.png"/>
        </div>
        <p>交易记录</p>
        <img src="/wap/img/user_icon_30.png" class="ris"/>
      </li></a>
    <a href="<?= url(['order/position']) ?>"><li>
        <div class="icon">
          <img src="/wap/img/user_icon3.png"/>
        </div>
        <p>当前持仓</p>
        <img src="/wap/img/user_icon_30.png" class="ris"/>
      </li></a>
    <a href="<?= url(['order/position', 'type'=>2])?>"><li>
        <div class="icon">
          <img src="/wap/img/user_icon4.png" />
        </div>
        <p>结算记录</p>
        <img src="/wap/img/user_icon_30.png" class="ris"/>
      </li></a>
    <a href="<?= url(['user/recharge-list'])?>"><li>
        <div class="icon">
          <img src="/wap/img/user_icon4.png" />
        </div>
        <p>充值记录</p>
        <img src="/wap/img/user_icon_30.png" class="ris"/>
      </li></a>
    <a href="<?= url(['user/deposits'])?>"><li>
        <div class="icon">
          <img src="/wap/img/user_icon4.png" />
        </div>
        <p>提现记录</p>
        <img src="/wap/img/user_icon_30.png" class="ris"/>
      </li></a>

  </ul>
</div>
<div class="list_capy">
  <ul>
    <a href="<?= url(['user/gener']) ?>"><li>
        <div class="icon">
          <img src="/wap/img/user_icon6.png" />
        </div>
        <p>推广赚钱</p>
        <img src="/wap/img/user_icon_30.png" class="ris"/>
      </li></a>

    <a href="<?= url(['user/message']) ?>"><li>
        <div class="icon">
          <img src="/wap/img/user_icon8.png"/>
        </div>
        <p>消息中心</p>
        <img src="/wap/img/user_icon_30.png" class="ris"/>
      </li></a>
  </ul>
</div>
<div class="list_capy">
  <ul>
    <a href="<?= url(['user/password']) ?>"><li>
        <div class="icon">
          <img src="/wap/img/user_icon9.png" />
        </div>
        <p>修改密码</p>
        <img src="/wap/img/user_icon_30.png" class="ris"/>
      </li></a>
    <a href="<?= url(['user/idea']) ?>"><li>
        <div class="icon">
          <img src="/wap/img/user_icon10.png"/>
        </div>
        <p>意见反馈</p>
        <img src="/wap/img/user_icon_30.png" class="ris"/>
      </li></a>

      <a href="<?= url(['user/conn-kf']) ?>"><li>
              <div class="icon">
                  <img src="/wap/img/user_icon10.png"/>
              </div>
              <p>联系客服</p>
              <img src="/wap/img/user_icon_30.png" class="ris"/>
          </li></a>
    <a href="<?=url(['site/logout'])?>"><li>
        <div class="icon">
          <img src="/wap/img/user_icon11.png"/>
        </div>
        <p>安全退出</p>
        <img src="/wap/img/user_icon_30.png" class="ris"/>
      </li></a>
  </ul>
</div>
<div class="null"></div>
<?= $this->render('../layouts/_footer') ?>