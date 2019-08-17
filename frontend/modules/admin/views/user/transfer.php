<?= $html ?>
<p class="cl pd-5 mt-20">
  <span>当前新增了<span class="count" style="color:#E31;"><?= $count ?></span>条待审核记录</span>
</p>
<script>
  $(function () {
    $(".list-container").on('click', '.verifyBtn', function () {
      var $this = $(this);
      $.confirm('确认' + $this.html() + '？', function () {
        $.post($this.attr('href'), function (msg) {
          if (msg.state) {
            $.alert(msg.info || '操作成功', function () {
              location.reload();
            });
          } else {
            $.alert(msg.info);
          }
        });
      });
      return false;
    });
  });

   /* $(".page-container").on('click', '.verifyBtn', function () {
      alert(111);
        var $this = $(this);
            $.post($this.attr('href'), function (msg) {
                if (msg.state) {
                  $.alert(msg.info || '操作成功', function () {
                    parent.location.reload();
                  })
                } else {
                    $.alert(msg.info);
                }
            }, 'json');
    });*/
</script>

