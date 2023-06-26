<?php
$TOKEN = "6215463648:AAF5zATuZIZ6ZcxJ-Okv-kaBiwy0zYcrqIU";
require "function.php";

$inl=json_encode([
"keyboard"=>[
[["text"=>"A"]], 
[["text"=>"B"]],
[["text"=>"C"]],
[["text"=>"D"]],
    ]   
    ]);
    


$web = SetWebhook("https://raw.githubusercontent.com/EngSaeedSaeed2000/SAEED_2000R/main/index.php");
print_r($web);
if($text == "/start"){
SendMessage($chat_id,"أهلاً وسهلاً بكم"
,null,false,$message_id,$inl);}
if($text == "بحبك"){
    SendMessage($chat_id,"أسف مرتبط"
   ,null,false,$message_id );
}
if($text == "saeed"){
    SendMessage($chat_id, "سعيد هو من برمج هذا البوت،
    للتواصل مع سعيد 00963954947383"
    ,null,false,$message_id);
}
if($text == "سعيد"){
    SendMessage($chat_id, "سعيد هو من برمج هذا البوت،
    للتواصل مع سعيد 00963954947383"
   ,null,false, $message_id );
}

if($text == "A"){
    SendDocument($chat_id,"https://drive.google.com/file/d/1HmUdAAz3ZZk8eXPChb90ROeMWMD-xA1s/view?usp=drivesdk.pdf");
}
if($text == "A"){
    SendPhoto($chat_id,"https://images.app.goo.gl/ZjcyPvDpVGm9fNuH9");
}

?>
