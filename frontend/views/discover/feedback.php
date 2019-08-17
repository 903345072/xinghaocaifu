<header class="mui-bar mui-bar-nav">
    <h1 class="mui-title">意见反馈</h1>
</header>

<div class="mui-content">
    <textarea id="content" cols="30" rows="10" style="width: 100%;" placeholder="尊敬的会员您好！欢迎您向我司领导提出您宝贵的意见与建议谢谢！在此祝您生活愉快！"></textarea>

    <div style="width: 100%;height:2rem;background-color: #0fdaf3;text-align: center;color:white;padding-top: 0.3rem;" id="registerSubmit">确认</div>
</div>
<?= $this->render('../layouts/_footer') ?>
<script type="text/javascript">
    $(function () {
        $('#registerSubmit').click(function(){
            var content = $('#content').val();
            if(!content){
                alert('内容不能为空');return;
            }
            $.ajax({
                url:'afeedback',
                type:'post',
                data:{content:content},
                success:function(data){
                    if(data == 1){
                        alert('提交成功');
                        window.location.href = '/site/index';
                    }else{
                        alert('提交失败');
                    }
                }
            })
        })
    });
</script>



