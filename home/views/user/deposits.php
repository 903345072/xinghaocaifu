<div class="wrap1 clearfix houtai_content">


  <div class="hover" id="" style="display: <?= (empty($page) || $page == 1) ? 'block' : 'none' ?>;position: absolute;left: 300px;top: 0;">
    <h3 class="mx clearfix">※ 账户提现
<!--      <a href="javascript:;" id="page2Btn" class="fr jilu">提现记录></a>-->
    </h3>
    <div class="cz_mx_content tx_content">
        <?php $form = self::beginForm(['showLabel' => false, 'id' => 'usercashform']) ?>
      <div class="yue_money">
        <span class="tg">可提现金额：</span>
        <span>
							￥
							<strong class="money"><?= u()->account - u()->blocked_account ?></strong>
							元
						</span>
      </div>
      <div style="margin-bottom: 20px;">
        <span class="tg">请输入提现金额：</span>
        <input type="number" name="UserWithdraw[amount]" class="inpt_money"
               placeholder="提现金额最低100元">
        <span>元</span>
      </div>
      <div>
        <span class="tg">持卡人姓名：</span>
        <input type="text" name="UserAccount[realname]" value="<?= $userAccount['realname'] ?>" class="inpt_money"
               placeholder="持卡人姓名">
      </div>
      <div class="select_cz_fs clearfix">
        <span class="fl tg">银行卡：</span>
        <input type="text" name="UserAccount[bank_card]" value="<?= $userAccount['bank_card'] ?>" class="inpt_money"
               placeholder="银行卡卡号">
      </div>
      <div class="select_cz_fs clearfix">
        <span class="fl tg">银行开户行：</span>
        <select name="UserAccount[bank_name]" class="inpt_money" placeholder="银行开户行">
          <option value="">请选择开户行</option>
            <?php foreach ($bankList as $key => $name): ?>
              <option <?php if ($userAccount['bank_name'] == $name): ?>selected<?php endif; ?>
                      value="<?= $name ?>"><?= $name ?></option>
            <?php endforeach ?>
        </select>
      </div>
      <div class="select_cz_fs clearfix">
        <span class="fl tg">网点支行：</span>
        <input type="text" name="UserAccount[bank_address]" value="<?= $userAccount['bank_address'] ?>"
               class="inpt_money"
               placeholder="网点支行">
      </div>

      <div class="select_cz_fs clearfix">
        <span class="fl tg">登录密码：</span>
        <input class="inpt_money" name="UserAccount[password]" type="password" placeholder="请输入登录密码">
      </div>
      <input style="margin-top: 33px;" type="button" value="提交" class="tj_cz usercashSubmit">
      <p class="clearfix bz">
          <a style="color: #c09853" href="" class="fr">提现手续费<?= config('charges') ?>%</a>
      </p>
        <?php self::endForm() ?>
    </div>
  </div>
  <div class="hover" id="page2" style="display: <?= (! empty($page) && $page == 2) ? 'block' : 'none' ?>">
    <h3 class="mx">※ 提现记录 <a href="javascript:;" class="fr jilu" id="backBtn">提现></a></h3>
    <div class="zj_mx_content">
      <table class="table_mx">
        <thead>
        <th>订单号</th>
        <th>提现金额（元）</th>
        <th>提现时间</th>
        <th>提现状态</th>
        </thead>
          <?php foreach ($list as $k => $v) : ?>
            <tr>
              <td>10000<?= $v->id ?></td>
              <td><?= $v->amount ?></td>
              <td><?= $v->created_at ?></td>
              <td>
                  <?php if ($v->op_state == 1): ?>
                    <span class="fk_state">待审核</span>
                  <?php elseif ($v->op_state == 2): ?>
                    <span class="fk_state">已成功</span>
                  <?php else: ?>
                    <span class="fk_state disable">未成功</span>
                  <?php endif ?>
              </td>
            </tr>
          <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

<script type="text/javascript" src="/pc/js/layer.js"></script>
<script>
  $(".help_list li").click(function () {
    $(this).addClass('on').siblings().removeClass();
  })
</script>
<script type="text/javascript">
  !function () {
    var page2Btn = $('#page2Btn');
    var page1 = $('#page1');
    var page2 = $('#page2');
    var backBtn = $('#backBtn');
    page2Btn.on('click', function () {
      page1.hide();
      page2.show();
    });

    backBtn.on('click', function () {
      page2.hide();
      page1.show();
    });
  }();
  $(function () {
    $(".usercashSubmit").click(function () {
      //$("#usercashForm").ajaxSubmit($.config('ajaxSubmit', {
      //    success: function (msg) {
      //        if (!msg.state) {
      //            return $.alert(msg.info);
      //        } else {
      //            $.alert(msg.info);
      //            window.location.href = "<?//= url(['user/index'])?>//";
      //        }
      //    }
      //}));
      $.ajax({
        url: '<?= url(['user/deposits']) ?>',
        type: 'post',
        dataType: "json",
        data: $('#usercashform').serialize(),
        success: function (msg) {
          // console.log(msg);return;
          if (msg['state']) {
            alert(msg['info']);
            location.reload()
          } else {
            if (msg['info'] instanceof Object) {
              alert(msg.info[Object.keys(msg.info)[0]])
            } else {
              alert(msg['info'])
            }
          }
        }
      });
      return false;
    });
  });
</script>
