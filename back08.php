<?php
/**
 * Created by PhpStorm.
 * User: zzz
 * Date: 2018-12-04
 * Time: 15:27
 */
function echoMsgz($msg) {
    echo iconv("UTF-8", "gb2312", "\r\r\n" . $msg );
}

function echoz() {
    echo "\r\r\n----------------------------------------------------------------------\r\r\n";
}
echoz();
//开始
echo echoMsgz("【1】：点击HOME，返回桌面");
system('adb shell input keyevent 3');
echo echoMsgz("【2】：杀死运行着的 [主题] 进程");
system('adb shell am force-stop com.huawei.android.thememanager');
echo echoMsgz("【3】：点击 [主题] 图标");
system('adb shell input tap 950 1740');
sleep(3);
echo echoMsgz("【4】：点击右下角 [我的] 图标");
system('adb shell input tap 980 1840');
echo echoMsgz("【5】：点击 [我的主题] 选项");
system('adb shell input tap 320 710');
echo echoMsgz("【6】：点击 [第2个主题] ");
system('adb shell input tap 550 600');
echo echoMsgz("【7】：点击 [应用 按钮] ");
system('adb shell input tap 570 1840');
//结束
echoz();