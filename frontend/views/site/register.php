
	<body style="background: #21212B;">
		<div class="header">
			<p>账号注册</p>
      <a href="javascript:history.back()"><img src="/wap/img/icons_03.png"/></a>
		</div>
		<div class="contents">
        <?php $form = self::beginForm(['showLabel' => false, 'id' => 'regform']) ?>
				<div class="lable">
					<p>+86</p>
          <input type="text" name="User[mobile]" placeholder="手机号码" autocomplete="off" id="user-mobile">
					<img src="/wap/img/icons_07.jpg" class="c1 c"/>
				</div>
				<div class="lable">
					<p>验证码</p>
          <input type="text" placeholder="验证码" name="User[verifyCode]" autocomplete="off" >
					<button type="button"id="verifyCodeBtn" href="javascript:;"><div class="hq">获取</div></button>
				</div>
				<div class="lable">
					<p>密码</p>
          <input type="password" name="User[password]" placeholder="设置登录密码" autocomplete="off">
					<img src="/wap/img/icons_11.jpg" class="c2 c"/>
				</div>
      <div class="lable">
        <p>确认密码</p>
        <input type="password" name="User[cfmPassword]" placeholder="确认登录密码" autocomplete="off">
        <img src="/wap/img/icons_11.jpg" class="c2 c"/>
      </div>
				<div class="lable">
					<p>姓名</p>
          <input type="text" name="User[nickname]" placeholder="请输入姓名" autocomplete="off">
				</div>

				<div class="lable">
					<p>邀请码</p>
          <input type="text" placeholder="推荐码(可不填写)" name="User[code]" value="<?= $model->code ?>" autocomplete="off">
				</div>
				<div class="ready">
					<span></span>
					<p>已阅读并同意《中资国际使用协议》</p>
				</div>
        <?= $form->field($model, 'pid')->hiddenInput()  ?>
				<input type="button" value="确认注册" class="btn11 ajaxpost_form registerSubmit login_btn" ajax-error-callback="refresh_code" formid="regform" ajax-callback="regset""  />
        <?php self::endForm() ?>
		</div>
		<p class="fots" style="margin-top: 50px;"><a href="<?= url(['site/login']) ?>">已有账号，马上登入操盘</a></p>
		<script type="text/javascript" src="/js/layer.js" ></script>
		<script type="text/javascript" src="/wap/js/js.js" ></script>
    <script type="text/javascript">
      // 验证码
       countdown=60;

      $("#verifyCodeBtn").click(function () {
        var mobile = $('#user-mobile').val();

        var url = '<?= url(['site/verifyCode']) ?>';
        if (mobile.length != 11) {
          layer.msg('您输入的不是一个手机号！');
          return false;
        }
          var obj = $('#verifyCodeBtn')
          settime(obj);
        $.post(url, {mobile: mobile}, function(msg) {
          layer.msg(msg.info);
        }, 'json');
      });

      function settime(obj) { //发送验证码倒计时
          if (countdown == 0) {
              obj.attr('disabled',false);
              //obj.removeattr("disabled");
              obj.find('div').html("获取");
              countdown = 60;
              return;
          } else {
              obj.attr('disabled',true);
              obj.find('div').html(countdown);
              countdown--;
          }
          setTimeout(function() {
                  settime(obj) }
              ,1000)
      }


      $(function () {
        $(".registerSubmit").click(function () {
//                $("#registerForm").ajaxSubmit($.config('ajaxSubmit', {
//                    success: function (msg) {
//                        if (!msg.state) {
//                            return $.alert(msg.info);
//                        } else {
//                            window.location.href = msg.info;
//                        }
//                    }
//                }));
          $.ajax({
            url: 'register',
            type: 'post',
            dataType: "json",
            data: $('#regform').serialize(),
            success: function (msg) {
//                        console.log(msg.info[Object.keys(msg.info)[0]]);return;
              if (msg['state']) {
                window.location.href = msg['info'];
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

    <script type="text/javascript" charset="utf-8">
      //mui.init();

      function showxieyi() {
        layer.open({
          type: 1,
          title: '《中资国际使用协议》',
          shadeClose: true,
          shade: 0.8,
          area: ["80%", '90%'],
          offset: '20px',
          btn: ['我已阅读并同意《风险告知书》'],
          yes: function(index) {
            layer.close(index);
          },
          content: "<div style='padding:10px;line-height: 25px;font-size: 14px;'>" + $('#xieyicontent').html() + "</div>",
        });
      }

    </script>
    <div id="xieyicontent" style="display: none">
      <p>
        《中资国际用户服务协议》
      </p>
      <p>
        中资国际用户服务协议（以下简称“本协议”）是平台运营方：香港中资国际投资理财有限公司（以下简称“本公司”）与中资国际用户（以下简称“用户”）就所提供服务的相关事项订立的有效合约。本协议由协议正文以及本公司通过中资国际平台已经发布的或将来可能发布的各类规则和文件的各项规定组成，如中资国际发布的规则和文件与协议正文有冲突，以公布生效日期或签署日期在后的规则或文件为准执行。用户通过网络页面点击确认接受本协议，即表示用户与本公司已达成合意并同意接受本协议项下的全部约定内容。
      </p>
      <p>
        在接受本协议之前，用户务必仔细阅读本协议的全部内容。如果用户不同意本协议的任意内容，或者无法准确理解该条款的含义，请不要进行后续操作。
      </p>
      <p>
        一、定义
      </p>
      <p>
        本协议中，除非上下文另有解释，下列词语具有如下含义：
      </p>
      <p>
        1、中资国际：由香港中资国际投资理财有限公司运营，面向中资国际注册用户提供包括但不限于上期所、郑商所、大商所、借贷双方信息撮合（账户额出借方和资金需求方）交易指令通讯、交易风控管理、借贷双方盈亏结算、交易清结算、资金安全托管（由支付机构提供）等服务的线上中介服务平台。
      </p>
      <p>
        2、支付机构：指中资国际委托的为中资国际用户提供资金划转、查询、结算等支付服务的非金融支付机构。本协议项下提供上述服务的机构为宝付支付有限公司（以下简称“宝付”）。
      </p>
      <p>
        3、中资国际账户：指面向期货金融互联网交易平台用户提供第三方交易资金结算服务的专项账户或用户资金的托管期货账户。
      </p>
      <p>
        4、用户：指通过中资国际投资平台注册并完成实名认证、银行卡绑定开户的用户，作为投资人（账户出借人）的交易合作方，负责向投资人提供交易策略的自然人。
      </p>
      <p>
        5、投资人：指通过中资国际注册成为投资人的用户，作为用户（资金需求方）的交易合作方，负责按用户交易策略并利用自有资金和账户进行交易的自然人或法人。
      </p>
      <p>
        二、中资国际服务
      </p>
      <p>
        中资国际为用户提供以下服务：
      </p>
      <p>
        1、交易合作撮合服务
      </p>
      <p>
        中资国际作为用户和投资人的中间方，对用户的交易策略和投资人的交易需求进行匹配，撮合双方建立一对一的交易合作关系。
      </p>
      <p>
        2、交易指令通讯服务
      </p>
      <p>
        中资国际为用户和投资人交易合作过程中提供向对方发送／接收交易指令通讯服务，交易指令包括：买入指令和卖出指令。中资国际交易指令通讯速度从用户发出交易指令被中资国际确认时点至投资人接收到交易指令时点，两时点时间间隔原则不超过30秒。
      </p>
      <p>
        3、交易风控管理服务
      </p>
      <p>
        为最大程度确保用户与投资人交易合作正常进行，保障双方利益，中资国际将根据用户交易策略和历史业绩，调整用户参与交易合作的额度。
      </p>
      <p>
        4、交易清结算服务
      </p>
      <p>
        中资国际根据用户和投资人签署的《交易合作协议》相关约定，为双方提供交易清结算服务。
      </p>
      <p>
        5、资金托管服务
      </p>
      <p>
        用户与投资人交易合作过程发生的交易综合费、履约保证金、盈利分配和亏损赔付所涉及的资金存取、冻结、解冻和支付都将由中资国际处理。双方应保证中资国际账户状态正常，并确保账户中有足额的资金以便正常划转。因一方账户状态异常导致交易无法实现的，所有损失由本方自行承担。
      </p>
      <p>
        6、用户交易合作协议生成与保管
      </p>
      <p>
        中资国际为用户和投资人生成交易合作协议供双方查询、存档。中资国际会对用户和投资人在中资国际发生的交易信息及生成的协议保存三年。
      </p>
      <p>
        7、服务费及收费标准
      </p>
      <p>
        中资国际向用户和投资人收取一定的费用，具体收费事项及资费标准由中资国际另行与用户约定或者通过中资国际进行展示。
      </p>
      <p>
        三、声明与承诺
      </p>
      <p>
        1、用户除需要遵守本协议约定外，还应遵守履行本协议有关的附件。
      </p>
      <p>
        2、用户保证除协议另有约定外，对于其交易合作达成后不得变更、撤销或撤回。
      </p>
      <p>
        3、用户保证不会利用中资国际进行非法期货交易、资金非法转移、套现及洗钱等违法犯罪活动；
      </p>
      <p>
        4、用户保证其所参与交易合作的资金来源合法，是该资金的合法所有人，完全有权使用该资金进行交易；如第三人对资金归属、合法性问题发生争议，由用户负责解决，与中资国际无关，并保证及时赔偿交易合作方因此所遭受的一切损失。
      </p>
      <p>
        5、用户变更账户信息、通讯地址、电话等相关重要信息，须及时书面或其他中资国际同意的方式通知中资国际；因用户未及时通知而导致其自身在本协议项下各项权益受到损失的，由用户自行承担全部责任。
      </p>
      <p>
        6、用户同意中资国际有权限制用户参与交易合作的品种和额度。
      </p>
      <p>
        7、用户知晓且同意中资国际享有用户合作交易信息的所有权和使用权。
      </p>
      <p>
        8、用户知晓且同意中资国际仅向用户提供交易信息与服务，中资国际既不是用户与投资人之间交易合作关系的当事人，也不是该合作关系中用户与投资人的保证人或连带责任人；中资国际根据本协议约定向用户和投资人提供的所有服务仅供用户和投资人决定是否进行交易合作时予以参考，无论用户和投资人形成的交易合作关系是否存在第三方担保，在任何情况下均不应视为中资国际及其关联方对用户的交易策略能力及相关交易协议的履行做出了任何明示或默示的担保，亦不应视为中资国际及其关联方对投资人的本金和收益做出了明示或默示的担保或保证。用户和投资人应自行判断相关信息的真实性、准确性、及时性，自主决定是否进行交易合作，并承担由此而导致的一切损失或责任。
      </p>
      <p>
        9、用户在交易合作过程产生的相关税费，由用户自行向其主管税务机关申报、缴纳，中资国际不负责相关事宜处理。
      </p>
      <p>
        四、风险提示
      </p>
      <p>
        用户知晓并同意，通过中资国际进行交易合作可能面临如下风险，且除以下揭示的风险外还有其他的外部风险，均需要用户自行承担，中资国际不承担任何责任：
      </p>
      <p>
        1、政策监管风险：因宏观政策、监管导向、行业政策、地区发展政策等因素引起的无法实现交易合作的风险。
      </p>
      <p>
        2、违约风险：因交易合作方没有按时履约引起损失的风险。
      </p>
      <p>
        3、因不可抗力因素导致的风险，不可抗力因素包括但不限于以下情形：中资国际系统停机维护；中资国际所依赖的通讯设备出现故障不能进行数据传输；因台风、地震、海啸、洪水、停电、战争、恐怖袭击等不可抗力之因素，造成中资国际系统障碍不能执行业务的；由于黑客攻击、电信部门技术调整或故障、网站升级、其他第三方的问题等原因而造成的服务中断或者延迟。
      </p>
      <p>
        五、通知
      </p>
      <p>
        除本协议另有约定外，本协议履行过程中的通知应以中文书面形式写成。中资国际向用户发出的书面通知方式包括但不限于邮寄纸质通知、网站公告、电子邮件、站内信、手机短信和传真等方式。如以邮寄方式发出书面通知的，则在中资国际按照用户在注册中资国际时留存的通讯地址交邮后的第三个自然日即视为送达。如以网站公告、电子邮件、手机短信和传真等电子方式发出书面通知的，则在通知发送成功即视为送达。
      </p>
      <p>
        六、协议的变更、解除
      </p>
      <p>
        中资国际有权随时单方面修改本协议中与用户之间相关的权利义务，并根据本协议约定的方式通知用户，若用户不同意修改本协议，则应当立即停止使用中资国际服务；否则，视为同意并接受修改后的协议。修订的协议一经通知，立即生效。
      </p>
      <p>
        七、协议终止
      </p>
      <p>
        若出现任何一种以下情况，中资国际有权单方面解除本协议且不视为中资国际违约：
      </p>
      <p>
        1、用户自行注销中资国际账户；
      </p>
      <p>
        2、用户冒用他人名义、盗用他人账户使用中资国际服务的；
      </p>
      <p>
        3、用户为非法目的使用中资国际服务的；
      </p>
      <p>
        4、用户从事任何可能侵害中资国际系统、资料的行为；
      </p>
      <p>
        5、用户从事任何损害中资国际名誉的行为；
      </p>
      <p>
        6、用户违反任何法律法规、本协议约定的；
      </p>
      <p>
        7、用户故意利用中资国际系统漏洞进行非正常交易合作的；
      </p>
      <p>
        8、监管机构认为中资国际提供的服务不再符合相关监管规定的；
      </p>
      <p>
        因上述第1—7款原因导致本协议终止的，所导致的全部责任由用户自行承担。
      </p>
      <p>
        八、争议的解决
      </p>
      <p>
        本协议的订立、效力、解释、履行及争议的解决均适用中华人民共和国法律。在协议履行期间，凡由本协议引起的或与本协议有关的一切争议、纠纷，当事人应首先协商解决。
      </p>
      <p>
        九、其他
      </p>
      <p>
        1、本协议标题仅为查阅方便而设置，不应构成对本协议的任何解释，不对标题之下的内容及范围作任何限定。
      </p>
      <p>
        2、本协议的附件及各项补充、修订或变更，为本协议不可分割的组成部分，与本协议正文具有同等法律效力。
      </p>
      <p>
        3、用户通过网络页面点击确认后本协议即生效。
      </p>
      <p>
        4、用户在审阅完毕本协议文本时，已阅读并自愿做出以下承诺：“本用户已经阅读本协议所有条款，充分了解并清楚知晓相应的权利义务，并愿意承担相关风险。”
      </p>
      <p>
        <br>
      </p>
    </div>
	</body>
