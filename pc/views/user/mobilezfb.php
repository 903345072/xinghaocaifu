
		
		<div class="wrap1 clearfix houtai_content">
        <?= $this->render('../layouts/menu', compact('current_position')) ?>

            <div style="height: 60px;background: #313131;width: 75%;margin-left: 290px;line-height: 60px">
                <h3 style="color: white;padding-left: 20px" class="">※ 线下转账
                </h3>
            </div>
			<div class="hover" style="height: 922px;">

                <?php
                if (config('ali_is_show') == 1){
                    $src1 = config('web_url').config('ali_qrcode');
                    echo '<div style="float: left;width: 30%;margin-left: 120px" class="wxs">';
                    echo '<h2>支付宝充值</h2>';
                    echo "<img class='ewm' style='width: 40%' src= {$src1} >";
                    echo '<p class="opens">【打开支付宝手机app，扫描上方二维码充值】</p>';
                    echo '</div>';
                }
                ?>

                <?php
                if (config('wx_is_show') == 1){
                    $src1 = config('web_url').config('wx_qrcode');
                    echo '<div style="float: right;width: 30%;margin-right: 120px" class="wxs">';
                    echo '<h2>微信充值</h2>';
                    echo "<img class='ewm' style='width: 40%' src= {$src1} >";
                    echo '<p class="opens">【打开微信手机app，扫描上方二维码充值】</p>';
                    echo '</div>';
                }
                ?>
                <?php

                $bank_code = config('bank_code');
                $bank_name = config('bank_name');
                $bank_position = config('bank_position');
                echo '<div style="float: left;width: 650px;margin-top: 30px">';
                echo "<p class='banks'>收款卡号:$bank_code</p>";
                echo "<p class='banks'>收款人姓名:$bank_name</p>";
                echo "<p class='banks'>开户行:$bank_position</p>";
                echo '</div>';
                ?>

                <style>

                    .banks{
                        margin-left: 30%;font-size: 14px;
                        margin-top: 30px;


                    }
                </style>


			</div>

		</div>
