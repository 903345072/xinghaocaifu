<div class="box am-padding-vertical-xs">

  <ol class="am-breadcrumb am-margin-0 bg-fa bb-1">
    <li><a href="#">首页</a></li>
    <li><a href="#">个人中心</a></li>
    <li class="am-active">提现</li>
  </ol>

  <div class="bg-fa am-padding-sm">

    <div class="am-g">

      <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-0">

        <div class="bg-white am-padding-sm border-1">

          <div class="am-padding-top-lg am-text-center">
            <img src="/pc/images/defhead.png" class="wid45">
            <p class="text-999"><?= u()->username ?></p>
          </div>

          <div class="am-text-center am-padding-top-lg am-text-danger">
            <p class="">账户余额(元)：￥<?= u()->account - u()->blocked_account ?></p>
            <p class="am-padding-top-xs">模拟账户余额(元)：￥<?= u()->moni_acount - u()->blocked_moni ?></p>

            <p class="am-padding-top-sm">可用积分：<?= u()->point ?></p>
          </div>

          <div class="am-text-center am-padding-vertical-sm">
            <div class="am-btn-group">
              <a href="<?= url(['usercash']) ?>">
                <p class="am-btn am-btn-danger am-btn-xs am-padding-horizontal-lg rad500">
                  提现</p>
              </a>
              <a href="<?= url(['usercharge']) ?>"><p
                  class="am-btn am-btn-default am-btn-xs am-padding-horizontal-lg rad500">充值</p></a>
            </div>

          </div>

        </div>
        <div>
          <a href="<?= url(['usernews']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">信息中心</p></a>
          <a href="<?= url(['userpoint']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">我的积分</p></a>
          <a href="<?= url(['userannounce']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">公告</p></a>
          <!--<a href="<? /*= url(['usercharge'])*/ ?>">  <p class="am-btn am-btn-default am-btn-block am-btn-lg">资金明细</p></a>-->
          <a href="<?= url(['userrecord']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">交易记录</p></a>
          <a href="<?= url(['userinvite']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">推广赚钱</p></a>
          <a href="<?= url(['userpassword']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">修改密码</p></a>
          <a href="<?= url(['usersim']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">模拟交易列表</p></a>
          <a href="<?= url(['userfeedback']) ?>"><p class="am-btn am-btn-default am-btn-block am-btn-lg">意见反馈</p></a>
          <a href="/"><p class="am-btn am-btn-default am-btn-block am-btn-lg">返回首页</p></a>

        </div>

      </div>

      <div class="am-u-sm-10 am-u-md-10 am-u-lg-10 am-padding-right-0">
        <div class="am-padding-sm am-padding-top-0 bg-f5" style="min-height: 700px;">

          <div id="page1">
            <p class="am-padding-sm bb-1 b-red">
              提现
              <span class="cursP am-align-right am-margin-0 am-text-sm" id="page2Btn">提现记录</span>
            </p>

            <p class="am-padding-sm bg-white">余额： <span
                class="am-text-danger"><?= u()->account - u()->blocked_account ?></span>元</p>
              <?php $form = self::beginForm(['showLabel' => false, 'id' => 'usercashform']) ?>
            <input type="hidden" name="info[type]" value="0">
            <div class="am-padding-top-xs">
              <div class="bg-white am-padding-horizontal-xs">
                <div class="am-padding-vertical-xs bb-1">
                  <div class="am-g">
                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                      <p class="am-padding-top-xs am-text-right">提现金额</p>
                    </div>

                    <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                      <input type="number" name="UserWithdraw[amount]" class="am-form-field"
                             placeholder="提现金额最低100元">
                    </div>
                  </div>
                </div>

                <div class="am-padding-vertical-xs bb-1">
                  <div class="am-g">
                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                      <p class="am-padding-top-xs am-text-right">持卡人姓名</p>
                    </div>

                    <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                      <input type="text" name="UserAccount[realname]" value="<?= $userAccount['realname'] ?>" class="am-form-field"
                             placeholder="持卡人姓名">
                    </div>
                  </div>
                </div>

                <div class="am-padding-vertical-xs bb-1">
                  <div class="am-g">
                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                      <p class="am-padding-top-xs am-text-right">提现卡号</p>
                    </div>

                    <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                      <input type="text" name="UserAccount[bank_card]" value="<?= $userAccount['bank_card'] ?>" class="am-form-field"
                             placeholder="银行卡卡号">
                    </div>
                  </div>
                </div>

                <div class="am-padding-vertical-xs bb-1">
                  <div class="am-g">
                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                      <p class="am-padding-top-xs am-text-right">银行开户行</p>
                    </div>

                    <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                      <select name="UserAccount[bank_name]" class="am-form-field" placeholder="银行开户行">
                        <option value="">请选择开户行</option>
                          <?php foreach ($bankList as $key=>$name): ?>
                            <option <?php if($userAccount['bank_name'] == $name): ?>selected<?php endif; ?> value="<?= $name ?>"><?= $name ?></option>
                          <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="am-padding-vertical-xs bb-1">
                  <div class="am-g">
                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                      <p class="am-padding-top-xs am-text-right">网点支行</p>
                    </div>

                    <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                      <input type="text" name="UserAccount[bank_address]" value="<?= $userAccount['bank_address'] ?>" class="am-form-field"
                             placeholder="网点支行">
                    </div>
                  </div>
                </div>

                <div class="am-padding-vertical-xs bb-1">
                  <div class="am-g">
                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                      <p class="am-padding-top-xs am-text-right">手机号</p>
                    </div>

                    <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                      <input type="number" name="mobile" id="mobile_show"
                             class="am-form-field" placeholder="手机号" readonly value="<?= u()->mobile ?>"
                             style="width:80%;float:left;">
                      <input type="button" value="获取手机验证码" id="verifyCodeBtn"
                             style="width:19%;float:right;height:35px;"
                             data-action="<?= url(['site/verifyCode']) ?>" class="code fr">
                    </div>
                  </div>
                </div>

                <div class="am-padding-vertical-xs bb-1">
                  <div class="am-g">
                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                      <p class="am-padding-top-xs am-text-right">手机验证码</p>
                    </div>

                    <div class="am-u-sm-10 am-u-md-10 am-u-lg-10">
                      <input type="text" name="UserAccount[verifyCode]" class="am-form-field"
                             placeholder="验证码"
                             maxlength="11">
                    </div>
                  </div>
                </div>

                  <?= $form->field($userAccount, 'bank_mobile')->textInput(['type'  => 'hidden',
                                                                            'value' => u()->mobile,
                  ]) ?>
              </div>
            </div>
              <?php self::endForm() ?>
            <div class="am-padding-top-lg">
              <p class="am-btn am-btn-warning am-btn-block am-radius login-btn ajaxpost_form usercashSubmit">
                提交申请</p>
            </div>
          </div>
          <div id="page2" style="display: none">

            <p class="am-alert-danger am-padding-sm am-text-center">
              提现记录
              <span class="am-btn am-btn-default am-btn-xs am-align-right am-margin-0 am-radius"
                    id="backBtn">返回</span>
            </p>
              <?php foreach ($list as $k => $v): ?>
                <div class="am-padding-sm bg-white bb-1">
                  <div class="am-g">
                    <div class="am-u-sm-1 am-u-md-1 am-u-lg-1 am-padding-top-sm am-text-center">
                      <i class="am-icon am-icon-cny am-icon-sm am-text-primary am-padding-top-sm"></i>
                    </div>
                    <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 am-text-sm">
                      <p class="am-text-default">￥<?= $v->amount ?></p>
                      <!--                                    <p>订单号：20180808088808</p>-->
                      <p>提现时间：<?= $v->created_at ?></p>
                    </div>
                    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-top-sm">
                      <p class="am-btn am-btn-default am-btn-block am-radius">
                          <?php if ($v->op_state == 1): ?>
                            待审核
                          <?php elseif ($v->op_state == 2): ?>
                            已操作
                          <?php else: ?>
                            不通过
                          <?php endif ?>
                      </p>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>

          </div>

        </div>
      </div>

    </div>

  </div>


</div>


<script type="text/javascript">
  // 验证码
  $("#verifyCodeBtn").click(function () {
    var mobile = $('#mobile_show').val();
    var url = $(this).data('action');
    if (mobile.length != 11) {
      layer.msg('您输入的不是一个手机号！');
      return false;
    }
    $.post(url, {mobile: mobile}, function (msg) {
      layer.msg(msg.info);
    }, 'json');
  });
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
        url: 'usercash',
        type: 'post',
        dataType: "json",
        data: $('#usercashform').serialize(),
        success: function (msg) {
          // console.log(msg);return;
          if (msg['state']) {
            alert(msg['info']);
            window.location.href = "<?= url(['user/usercash'])?>";
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