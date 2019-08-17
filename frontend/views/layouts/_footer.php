<div class="footer">
  <ul>
    <a href="<?= url(['site/index']) ?>">
      <li class="<?= ($this->context->id == 'site') ? 'on' : '' ?>">
        <img src="<?= ($this->context->id == 'site') ? '/wap/img/fot.png' : '/wap/img/home.png' ?>"/>
        <p>首页</p>
      </li>
    </a>
    <a href="<?= url(['order/deal']) ?>">
      <li class="<?= ($this->context->id == 'order') ? 'on' : '' ?>">
        <img src="<?= ($this->context->id == 'order') ? '/wap/img/manys.png' : '/wap/img/fot1.png' ?>"/>
        <p>交易</p>
      </li>
    </a>
<!--    <a href="--><?//= url(['line/index']) ?><!--">-->
<!--      <li class="--><?//= ($this->context->id == 'line') ? 'on' : '' ?><!--">-->
<!--        <img src="/wap/img/f4.png"/>-->
<!--        <p>直播</p>-->
<!--      </li>-->
<!--    </a>-->
    <a href="<?= url(['discover/discovery']) ?>">
      <li class="<?= ($this->context->id == 'discover') ? 'on' : '' ?>">
        <img src="<?= ($this->context->id == 'discover') ? '/wap/img/find_39.jpg' : '/wap/img/fot2.png' ?>">
        <p>发现</p>
      </li>
    </a>
    <a href="<?= url(['user/index']) ?>">
      <li class="<?= ($this->context->id == 'user') ? 'on' : '' ?>">
        <img src="<?= ($this->context->id == 'user') ? '/wap/img/fots.jpg' : '/wap/img/fot3.png' ?>">
        <p>我的</p>
      </li>
    </a>
  </ul>
</div>
<script type="text/javascript" src="/wap/js/js.js" ></script>
<script type="text/javascript" src="/js/layer.js"></script>
<!--<script>
  mui('body').on('tap', 'a', function () {
    window.top.location.href = this.href;
  });
</script>-->