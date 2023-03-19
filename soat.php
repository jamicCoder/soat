<?php

//Rustambek_Uz

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$timerus=date("H:i",strtotime("+3 hour"));

$buoy = date('t', strtotime('5 hour'));

$timeusa = date("H:i",strtotime("-5 hour"));

$timeqirgiz = date("H:i",strtotime("+6 hour"));

$kun=date("d.m.y",strtotime("5 hour"));

$haf = date('N',strtotime('5 hour'));
$haft="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

$okun=date("n");
$oynoms = "1Yanvar1 2Fevral2 3Mart3 4Aprel4 5May5 6Iyun6 7Iyul7 8Avgust8 9Sentabr9 10Oktabr10 11Noyabr11 12Dekabr12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";

$yil = date("Y",strtotime("5 hour"));

$sana2 = date('z', strtotime('5 hour'));

$kunr = date('z',strtotime('5 hour')); 
$i = 200;
$s2 = $i-$kunr;

$time=date("H:i",strtotime("5 hour"));
$input = ["11:108|Graphic designer•Developer|MyTgChannels -> @r1ch_Ps| @MySites_1"];
//Biodagi harflar soni 65tadan oshmasin oldin bioga qoyib keyin kodga qowing. bolmasa soat ishlamaydi!\\
$rand=array_rand($input);
$text="$input[$rand]";
$nik = ["••• ﾌ卂爪丂卄丨ᗪ Ɋ卂卄卄ㄖ尺ㄖᐯ"];
$nikrand=array_rand($nik);
$niktxt="$nik[$nikrand]";
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt | ⏰ $time 😎",'about'=>"$text"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);
//@Rustambek_Uz  bu yerga tegmang soat yurmay qoladi!\\
header('Content-type: image/jpg');

$urls = ["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg","10.jpg"];
$rands = array_rand($urls);
$url="http://api.rustambek.xvest.ru/api/api.php?text=Buxoro";"$urls[$rands]";
//Bu yerdagi linkda "Viloyatingizni yozing" degan joyiga oʻz viloyatingizni yozing! shunda ob-xavo toʻgʻri boʻladi!\\
file_put_contents("rasm.jpg", file_get_contents("$url"));

$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);

$MadelineProto->photos->uploadProfilePhoto(['file' => "rasm.jpg" ]);
unlink("MadelineProto.log");
unlink("session.madeline");
//MANBA BILAN OL😡 @Secretius\\
?>