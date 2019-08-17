<?php

namespace console\models;
use common\models\DataAll;
use frontend\models\Product;
use Yii;
use \Exception;
class GatherJincheng extends Gather
{
    public $url = STOCKET_URL;
    public $kurl = STOCKET_KURL;

    // 交易产品列表
    public $productList = [
        'cl'    => 'NECLU0',
        'scbu'=>'SCbu1912',
        'pp0' =>'SCrb1910',
        'y0'=>'WGCNQ0',
        'm0'=>'HIMHI08',
        'sr0'=>'HIHSI08',
        'p0'=>'CMHGU0',
        'zcsr'=>'CMGCZ0',
        'dcpp'=>'CMSIU0'
//        'pp0' =>'CEDAXM0',
//        'y0'=>'CMHGN0',
//        'm0'=>'CMGCQ0',
//        'sr0'=>'HIHSI06',
//        'p0'=>'CMSIN0'
        //'a50'   => 'WGCNA0',
        //'ixic'  => 'CENQA0',
        //'bp'    => 'WICMBPA0',
        //'ec'    => 'WICMECA0',
        //'ad'    => 'WICMADA0',
        //'cd'    => 'WICMCDA0',

        //'au0' => 'SCau0001',
        //'ag0' => 'SCag0001',
        //'cu0' => 'SCcu0001',
        //'ni0' => 'SCni0001',
        //'bu0' => 'SCbu0001',
        //'ru0' => 'SCru0001',
        //'rb0' => 'SCrb0001',
        //'p0'  => 'DCp0001',
        //'sr0' => 'ZCSR0001',
        //'m0'  => 'DCm0001',
        //'y0'  => 'DCy0001',
        //'pp0' => 'DCpp0001',
        //'cl'    => 'NECLN0',
        //'gc'    => 'CMGCQ0',
        //'si'    => 'CMSIN0',
        //'hg'    => 'CMHGN0',
        //'dax'   => 'CEDAXM0',
        //'hkhsi' => 'HIHSI06',
        //'mhi'   => 'HIMHI06',
        //'a50'   => 'WGCNM0',
        //'ixic'  => 'CENQU0',
        //'bp'    => 'WICMBPM0',
        //'ec'    => 'WICMECM0',
        //'ad'    => 'WICMADA0',
        //'cd'    => 'WICMCDM0',
        //
        //'au0' => 'SCau1812',
        //'ag0' => 'SCag1812',
        //'cu0' => 'SCcu1807',
        //'ni0' => 'SCni1809',
        //'bu0' => 'SCbu1812',
        //'ru0' => 'SCru1809',
        //'rb0' => 'SCrb1810',
        //'p0'  => 'DCp1809',
        //'sr0' => 'ZCSR1809',
        //'m0'  => 'DCm1809',
        //'y0'  => 'DCy1809',
        //'pp0' => 'DCpp1809',
    ];

    public function __construct(array $config = [])
    {
        parent::__construct($config);

    }


    public function run()
     {
        $obj = new Product();
		foreach($this->productList as $k => $v){
        $params = [
            'u'      => STOCKET_USER,
            'type'   => 'stock',
            'symbol' => $v,
        ];
        $req = $this->sendRequest($this->url, $params, 'GET', []);
            if ($req['ret']){
                $data[$k] = gzdecode($req['msg']);
                $_data = $data2 = json_decode($data[$k],true);
                if ($_data[0]){
                    $_tmpArr = array_flip($this->productList);
                    $_data = [
                        'symbol'       => $_data[0]['Symbol'],
                        'product_name' => $_data[0]['Name'],
                        'price'        => $_data[0]['NewPrice'],
                        'time'         => date('Y-m-d H:i:s',$_data[0]['Date']),
                        'diff'         => '',
                        'diff_rate'    => $_data[0]['PriceChangeRatio'],
                        'open'         => $_data[0]['Open'],
                        'high'         => $_data[0]['High'],
                        'low'          => $_data[0]['Low'],
                        'close'        => $_data[0]['LastClose'],
                        'bp'           => $_data[0]['BP1'],
                        'sp'           => $_data[0]['SP1'],
                        'bv'           => $_data[0]['BV1'],
                        'sv'           => $_data[0]['SV1'],
                        'date'         => $_data[0]['Date'],
                    ];
                    if (!empty($_tmpArr[$_data['symbol']])) {
                        $product = $obj::findOne(['table_name'=>$k]);
                        /*滑点设置*/
                        //1分钟滑从5点滑到10点 now_time->10:19，now_point->5        expect_time->10:20 ,expect_point->10
                        //sec_point=expect_point-now_point/(expect_time-now_time)*60
                        $rate = rand(-1,30);
                        $now_point = $data2[0]['NewPrice'];
                        $expect_point = $product->expect_point;
                        $expect_time = $product->expect_time;
                        if ($expect_point){
                            if ($product->c_state=='b' || $product->c_state=='a'){
                                $_data['price'] = cache('now_point'.$k);
                                $now_point = cache('now_point'.$k);
                            }

                            $sec_point = ($expect_point-$now_point)*$rate/($expect_time-time());
                            $_data['price'] += number_format($sec_point,3);
                            cache('now_point'.$k,$_data['price'],1800000);
                            if ($product->c_state == '1'){ //趋势上升
                                if (($_data['price']/$expect_point)>1){
                                    $_data['price'] = $expect_point;
                                    cache('now_point'.$k,$_data['price'],1800000);
                                    $product->c_state = 'b';     //达到预期点位强制回落到正常点位
                                    $product->expect_time = time()+120;
                                    $product->expect_minit = 2;
                                    $product->expect_point = $data2[0]['NewPrice'];
                                    $product->save(0);
                                }
                            }
                            if ($product->c_state == '2'){    //趋势下降
                                if (($_data['price']/$expect_point)<1){
                                    $_data['price'] = $expect_point;
                                    cache('now_point'.$k,$_data['price'],1800000);
                                    $product->c_state = 'a';     //达到预期点位强制上升到正常点位
                                    $product->expect_time = time()+120;
                                    $product->expect_minit = 2;
                                    $product->expect_point = $data2[0]['NewPrice'];
                                    $product->save(0);
                                }
                            }

                            if ($product->c_state == 'a'){  //强制上升状态
                                if ((cache('now_point'.$k)/$data2[0]['NewPrice'])>1){
                                    cache('now_point'.$k,'',1800000);
                                    $product->c_state = '0';     //达到预期点位强制上升到正常点位
                                    $product->expect_time  = '';
                                    $product->expect_minit = '';
                                    $product->expect_point = '';
                                    $product->save(0);
                                }else{
                                    $product->expect_point = $data2[0]['NewPrice'];
                                    $product->save(0);
                                }
                            }
                            if ($product->c_state == 'b'){  //强制回落状态
                                echo abs(cache('now_point'.$k));
                                if (abs(cache('now_point'.$k)/$data2[0]['NewPrice'])<=1){
                                    cache('now_point'.$k,'',1800000);
                                    $product->c_state = '0';     //达到预
                                    //期点位强制上升到正常点位
                                    $product->expect_time  = '';
                                    $product->expect_minit = '';
                                    $product->expect_point = '';
                                    $product->save(0);
                                }else{
                                    $product->expect_point = $data2[0]['NewPrice'];
                                    $product->save(0);
                                }
                            }
                        }
                        /*滑点设置*/
                        $_key = $_tmpArr[$_data['symbol']];
                        self::dbUpdate('data_all', $_data, ['name' => $_key]);
                        $k_params = [
                            'u'      => STOCKET_USER,
                            'type'   => 'kline',
                            'symbol' => $v,
                            'line' =>'min,1',
                            'num' => '1'
                        ];
                        $kline_data = $this->sendRequest($this->url, $k_params, 'GET', []);//k线数据

                        if ($kline_data['ret']){
                            $data3[$k] = gzdecode($kline_data['msg']);
                            $k_data =  json_decode($data3[$k],true);

                                $datas['price'] = $_data['price'];
                                $datas['time']  = $k_data[0]['Date'];
                                $datas['creat_time'] = time();
                                $datas['Open'] = $k_data[0]['Open'];
                                $datas['Low'] = $k_data[0]['Low'];
                                $datas['High'] = $k_data[0]['High'];
                                if ($sec_point){
                                    if ($product->c_state == 'b' || $product->c_state == 'a'){
                                        $datas['Close'] = $_data['price'];

                                    }else{
                                        $datas['Close'] = $k_data[0]['Close']+number_format($sec_point,3);
                                    }
                                }else{
                                    $datas['Close'] = $k_data[0]['Close'];
                                }
                                $datas['Open_Int'] = $k_data[0]['Open_Int'];
                                $datas['Volume'] = $k_data[0]['Volume'];
                                $datas['Amount'] = $k_data[0]['Amount'];
                                $datas['Name'] = $k_data[0]['Name'];
                                $datas['Symbol'] = $k_data[0]['Symbol'];


                        }
                        $this->uniqueInsert($k,$datas);
                    }
                    // 监听是否有人应该平仓
                    $this->listen();

                }
            }

	}
}

    public function getNewClose($symbol){
        $k_params = [
            'market'      => $symbol,
            'type'   => '1day',
            'size'=>2
        ];
        $kline_data = $this->sendRequest(STOCKET_KURL, $k_params, 'GET', []);//k线数据
        $kline_data = $kline_data['msg'];
        $k_data = json_decode($kline_data,1);
        $yes_close = $k_data['data'][0][4];
        if ($yes_close){
            return $yes_close;
        }else{
            $yes_close = DataAll::find()->where(['symbol'=>$symbol])->select('close')->one();
            $yes_close = $yes_close['close'];
            return $yes_close;
        }

    }


    /**
     * CURL发送Request请求,含POST和REQUEST
     *
     * @param string $url     请求的链接
     * @param mixed  $params  传递的参数
     * @param string $method  请求的方法
     * @param mixed  $options CURL的参数
     *
     * @return array
     */
    public function sendRequest($url, $params = [], $method = 'POST', $options = [])
    {
        $method       = strtoupper($method);
        $protocol     = substr($url, 0, 5);
        $query_string = is_array($params) ? http_build_query($params) : $params;

        $ch       = curl_init();
        $defaults = [];
        if ('GET' == $method) {
            $geturl                = $query_string ? $url . (stripos($url,
                    "?") !== false ? "&" : "?") . $query_string : $url;
            $defaults[CURLOPT_URL] = $geturl;
			//echo $geturl;
        } else {
            $defaults[CURLOPT_URL] = $url;
            if ($method == 'POST') {
                $defaults[CURLOPT_POST] = 1;
            } else {
                $defaults[CURLOPT_CUSTOMREQUEST] = $method;
            }
            $defaults[CURLOPT_POSTFIELDS] = $query_string;
        }

        $defaults[CURLOPT_HEADER]         = "utf-8";
        $defaults[CURLOPT_USERAGENT]      = "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.98 Safari/537.36";
        $defaults[CURLOPT_FOLLOWLOCATION] = true;
        $defaults[CURLOPT_RETURNTRANSFER] = true;
        $defaults[CURLOPT_CONNECTTIMEOUT] = 10;
        $defaults[CURLOPT_TIMEOUT]        = 10;

        // disable 100-continue
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Expect:']);

        if ('https' == $protocol) {
            $defaults[CURLOPT_SSL_VERIFYPEER] = false;
            $defaults[CURLOPT_SSL_VERIFYHOST] = false;
        }

        curl_setopt_array($ch, (array) $options + $defaults);

        $ret = curl_exec($ch);
        $err = curl_error($ch);

        if (false === $ret || ! empty($err)) {
            $errno = curl_errno($ch);
            $info  = curl_getinfo($ch);
            curl_close($ch);

            return [
                'ret'   => false,
                'errno' => $errno,
                'msg'   => $err,
                'info'  => $info,
            ];
        }
        curl_close($ch);



        return [
            'ret' => true,
            'msg' => $ret,
        ];
    }



}
