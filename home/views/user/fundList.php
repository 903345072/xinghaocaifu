<div class="wrap1 clearfix houtai_content">
    <?= $this->render('../layouts/menu', compact('current_position')) ?>

  <div class="hover">
    <h3 class="mx">※ 资金明细</h3>
    <div class="zj_mx_content">
      <table class="table_mx">
        <thead>
        <th>名称</th>
        <th>金额（元）</th>
        <th>类型</th>
        <th>时间</th>
        </thead>
        <tr>
          <td>余额充值</td>
          <td>3,000.00</td>
          <td>余额充值</td>
          <td>2018-05-19 16:19</td>
        </tr>
        <tr>
          <td>余额充值</td>
          <td>3,000.00</td>
          <td>余额充值</td>
          <td>2018-05-19 16:19</td>
        </tr>
        <tr>
          <td>余额充值</td>
          <td>3,000.00</td>
          <td>余额充值</td>
          <td>2018-05-19 16:19</td>
        </tr>
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
