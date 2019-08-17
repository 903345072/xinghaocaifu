<?php
return [
    // 以下是框架内置配置参数
    'workermanSocketIOPort' => 30000,
    'workermanHttpWebPort'  => 20000,
    'webDomain'             => 'localhost',
    'uploadPath'            => '/uploadfile',
    'accessModule'          => ['admin'],

    // 交易产品列表，同时也是表名
    'productList'           => [
        'cl',
        'm0',
        'p0',
        'pp0',
        'sr0',
        'y0',
        'scbu',
        'zcsr',
        'dcpp'
    ],

    // 交易产品列表
    'productCode'           => [
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
//        'gc'    => 'CMGCA0',
//        'si'    => 'CMSIA0',
//        'hg'    => 'NENGA0',
//        'dax'   => 'CEDAXA0',
//        'hkhsi' => 'HIHSIF',
//        'mhi'   => 'HIMHIF',
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
    ],

    'bankList' => [
        'ICBC'    => '中国工商银行',
        'ABC'     => '中国农业银行',
        'BOC'     => '中国银行',
        'CCB'     => '中国建设银行',
        'PSBC'    => '中国邮政储蓄银行',
        'COMM'    => '交通银行',
        'CMB'     => '招商银行',
        'SPDB'    => '上海浦东发展银行',
        'CIB'     => '兴业银行',
        'HXBANK'  => '华夏银行',
        'GDB'     => '广东发展银行',
        'CMBC'    => '中国民生银行',
        'CITIC'   => '中信银行',
        'CEB'     => '中国光大银行',
        'EGBANK'  => '恒丰银行',
        'CZBANK'  => '浙商银行',
        'BOHAIB'  => '渤海银行',
        'SPABANK' => '平安银行',
    ],

];
