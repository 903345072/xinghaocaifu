<?php common\components\View::regCss('rule.css') ?>


    <div class="ruleCon">
        <table cellspacing="0" cellpadding="0">
            <p><?= config('web_name') ?>产品资料信息</p>
            <tbody>
                <tr>
                    <td>产品种类</td>
                    <td colspan="4">白银</td>
                </tr>
                <tr>
                    <td>交易单位</td>
                    <td>120g</td>
                    <td>1200g</td>
                    <td>3kg</td>
                    <td>30kg</td>
                </tr>
                <tr>
                    <td>单笔最大持仓</td>
                    <td>10手</td>
                    <td>10手</td>
                    <td>10手</td>
                    <td>10手</td>
                </tr>
                <tr>
                    <td>交易手续费</td>
                    <td>0.96/手</td>
                    <td>9.6/手</td>
                    <td>24/手</td>
                    <td>240/手</td>
                </tr>
                <tr>
                    <td>波动盈亏（一个点）</td>
                    <td>0.1元</td>
                    <td>1元</td>
                    <td>4元</td>
                    <td>40元</td>
                </tr>
                <tr>
                    <td>履约准备金</td>
                    <td>8元/手</td>
                    <td>80元/手</td>
                    <td>200元/手</td>
                    <td>2000元/手</td>
                </tr>
                <tr>
                    <td>交收单位</td>
                    <td>120g的整数倍</td>
                    <td>1200g的整数倍</td>
                    <td>3kg的整数倍</td>
                    <td>30kg的整数倍</td>
                </tr>
                <tr class="textleft">
                    <td>交割滞纳金</td>
                    <td colspan="4">因不可持仓过夜，所以不产生交割滞纳费用！  如果在当天结算点前未手动平仓，系统会以当天收盘价对订单进行结算！</td>
                </tr>
                <tr class="textleft">
                    <td>止盈止损设置</td>
                    <td colspan="4">止盈止损可设置为保证金的10%  20%  30%  40%  50%或者不设置</td>
                </tr>
                <tr class="textleft">
                    <td>交易时间</td>
                    <td colspan="4">1.白银和原油交易时间为周一早上8点到周六凌晨四点，铜的交易时间为（夏令）周一早8点到周六凌晨2点或者（冬令）周一早八点到周六凌晨3点<br/>
                    2.国际金融假日，系统维护升级，结算或者其他原因不能交易的因素除外</td>
                </tr>
                <tr class="textleft">
                    <td>结算时间</td>
                    <td colspan="4">夏令时：凌晨4点到凌晨6点 <br/>                    冬令时：凌晨4点到凌晨7点 </td>
                </tr>
                <tr class="textleft">
                    <td>充值和提现</td>
                    <td colspan="4">周一到周五早上八点至晚上11点半（节假日除外）</td>
                </tr>
                <tr class="textleft">
                    <td>充值和提现规则</td>
                    <td colspan="4">1.充值限额：单笔最高20000   单日最高50000 <br/>2.提现：申请提现小于500元的，每次提现收取2元手续费，大于或等于500元的不收取手续费<br/>3.提现规则和时间：周一到周五9点到18点 1个工作日到帐（节假日除外）</td>
                </tr>
            </tbody>
            
        </table>
    </div>
     
    <div class="ruleCon">
        <table cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td>产品种类</td>
                    <td colspan="4">原油</td>
                </tr>
                <tr>
                    <td>交易单位</td>
                    <td>1桶</td>
                    <td>10桶</td>
                    <td>25桶</td>
                    <td>250桶</td>
                </tr>
                <tr>
                    <td>单笔最大持仓</td>
                    <td>10手</td>
                    <td>10手</td>
                    <td>10手</td>
                    <td>10手</td>
                </tr>
                <tr>
                    <td>交易手续费</td>
                    <td>0.96/手</td>
                    <td>9.6/手</td>
                    <td>24/手</td>
                    <td>240/手</td>
                </tr>
                <tr>
                    <td>波动盈亏（一个点）</td>
                    <td>0.01元(原油波动盈亏是按小数点最后一位来算)</td>
                    <td>0.1元(原油波动盈亏是按小数点最后一位来算)</td>
                    <td>0.4元(原油波动盈亏是按小数点最后一位来算)</td>
                    <td>4元(原油波动盈亏是按小数点最后一位来算)</td>
                </tr>
                <tr>
                    <td>履约准备金</td>
                    <td>8元/手</td>
                    <td>80元/手</td>
                    <td>200元/手</td>
                    <td>2000元/手</td>
                </tr>
                <tr>
                    <td>交收单位</td>
                    <td>1桶的整数倍</td>
                    <td>10桶的整数倍</td>
                    <td>25桶的整数倍</td>
                    <td>250桶的整数倍</td>
                </tr>
                <tr class="textleft">
                    <td>交割滞纳金</td>
                    <td colspan="4">因不可持仓过夜，所以不产生交割滞纳费用！  如果在当天结算点前未手动平仓，系统会以当天收盘价对订单进行结算！</td>
                </tr>
                <tr class="textleft">
                    <td>止盈止损设置</td>
                    <td colspan="4">止盈止损可设置为保证金的10%  20%  30%  40%  50%或者不设置</td>
                </tr>
                <tr class="textleft">
                    <td>交易时间</td>
                    <td colspan="4">1.白银和原油交易时间为周一早上8点到周六凌晨四点，铜的交易时间为（夏令）周一早8点到周六凌晨2点或者（冬令）周一早八点到周六凌晨3点<br/>
                    2.国际金融假日，系统维护升级，结算或者其他原因不能交易的因素除外</td>
                </tr>
                <tr class="textleft">
                    <td>结算时间</td>
                    <td colspan="4">夏令时：凌晨4点到凌晨6点  <br/>                    冬令时：凌晨4点到凌晨7点 </td>
                </tr>
                <tr class="textleft">
                    <td>充值和提现</td>
                    <td colspan="4">周一到周五早上八点至晚上11点半（节假日除外）</td>
                </tr>
                <tr class="textleft">
                    <td>充值和提现规则</td>
                    <td colspan="4">1.充值限额：单笔最高20000   单日最高50000 <br/>2.提现：申请提现小于500元的，每次提现收取2元手续费，大于或等于500元的不收取手续费<br/>3.提现规则和时间：周一到周五9点到18点 1个工作日到帐（节假日除外）</td>
                </tr>
            </tbody>
            
        </table>
    </div>
      
    <div class="ruleCon">
        <table cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td>产品种类</td>
                    <td colspan="4">铜</td>
                </tr>
                <tr>
                    <td>交易单位</td>
                    <td>8公斤</td>
                    <td>80公斤</td>
                    <td>200公斤</td>
                    <td>2000公斤</td>
                </tr>
                <tr>
                    <td>单笔最大持仓</td>
                    <td>10手</td>
                    <td>10手</td>
                    <td>10手</td>
                    <td>10手</td>
                </tr>
                <tr>
                    <td>交易手续费</td>
                    <td>0.96/手</td>
                    <td>9.6/手</td>
                    <td>24/手</td>
                    <td>240/手</td>
                </tr>
                <tr>
                    <td>波动盈亏（一个点）</td>
                    <td>0.01元</td>
                    <td>0.1元</td>
                    <td>0.4元</td>
                    <td>4元</td>
                </tr>
                <tr>
                    <td>履约准备金</td>
                    <td>8元/手</td>
                    <td>80元/手</td>
                    <td>200元/手</td>
                    <td>2000元/手</td>
                </tr>
                <tr>
                    <td>交收单位</td>
                    <td>8公斤的整数倍</td>
                    <td>80公斤的整数倍</td>
                    <td>200公斤的整数倍</td>
                    <td>2000公斤的整数倍</td>
                </tr>
                <tr class="textleft">
                    <td>交割滞纳金</td>
                    <td colspan="4">因不可持仓过夜，所以不产生交割滞纳费用！  如果在当天结算点前未手动平仓，系统会以当天收盘价对订单进行结算！</td>
                </tr>
                <tr class="textleft">
                    <td>止盈止损设置</td>
                    <td colspan="4">止盈止损可设置为保证金的10%  20%  30%  40%  50%或者不设置</td>
                </tr>
                <tr class="textleft">
                    <td>交易时间</td>
                    <td colspan="4">1.白银和原油交易时间为周一早上8点到周六凌晨四点，铜的交易时间为（夏令）周一早8点到周六凌晨2点或者（冬令）周一早八点到周六凌晨3点<br/>
                    2.国际金融假日，系统维护升级，结算或者其他原因不能交易的因素除外</td>
                </tr>
                <tr class="textleft">
                    <td>结算时间</td>
                    <td colspan="4">夏令时：凌晨4点到凌晨8点<br/> 冬令时：凌晨3点到凌晨9点 </td>
                </tr>
                <tr class="textleft">
                    <td>充值和提现</td>
                    <td colspan="4">周一到周五早上八点至晚上11点半（节假日除外）</td>
                </tr>
                <tr class="textleft">
                    <td>充值和提现规则</td>
                    <td colspan="4">1.充值限额：单笔最高20000   单日最高50000 <br/>2.提现：申请提现小于500元的，每次提现收取2元手续费，大于或等于500元的不收取手续费<br/>3.提现规则和时间：周一到周五9点到18点 1个工作日到帐（节假日除外）</td>
                </tr>
            </tbody>
            
        </table>
    </div>
     