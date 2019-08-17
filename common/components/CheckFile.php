<?php

namespace common\components;

/**
 * 上传文件类型检测
/*文件扩展名说明
 *7173         gif
 *255216       jpg
 *13780        png
 *6677         bmp
 *239187       txt,aspx,asp,sql
 *208207       xls.doc.ppt
 *6063         xml
 *6033         htm,html
 *4742         js
 *8075         xlsx,zip,pptx,mmap,zip
 *8297         rar
 *01           accdb,mdb
 *7790         exe,dll
 *5666         psd
 *255254       rdp
 *10056        bt种子
 *64101        bat
 */
class CheckFile
{

    public static function checkFile($files)
    {
        foreach ($files AS $file) {
            $fp = fopen($file, "rb");
            $bin = fread($fp, 2); //只读2字节
            fclose($fp);
            // unpack() 函数从二进制字符串对数据进行解包
            $str_info  = @unpack("C2chars", $bin);
            //  intval() 函数用于获取变量的整数值
            $type_code = intval($str_info['chars1'].$str_info['chars2']);
            $file_type = '';
            // 下面将解析后获取的状态值进行判断
            switch ($type_code) {
                case 7790:
                    $file_type = 'exe';
                    break;
                case 7784:
                    $file_type = 'midi';
                    break;
                case 8075:
                    $file_type = 'zip';
                    break;
                case 8297:
                    $file_type = 'rar';
                    break;
                case 255216:
                    $file_type = 'jpg';
                    break;
                case 7173:
                    $file_type = 'gif';
                    break;
                case 6677:
                    $file_type = 'bmp';
                    break;
                case 13780:
                    $file_type = 'png';
                    break;
                default:
                    $file_type = 'unknown';
                    break;
            }
            // 输出文件对应的类型和状态值
            return $file_type;
        }
    }

}
