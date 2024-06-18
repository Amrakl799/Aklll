<?php
ob_start();
$API_KEY = '6264672947:AAFET5ulj26MgwufykERtngiVYjIyjc4b8g';
$blp ="1956911146";
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$webhook=[]){
$webhook = http_build_query($webhook);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$webhook";
$webhook = file_get_contents($url);
return json_decode($webhook);}




@mkdir("ADOW");
@mkdir("userid");
@mkdir("idch");
@mkdir("amr");
@mkdir("idcnel");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$add_id = $update->my_chat_member->from->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
####لوحة الادمن###
$admin = "1956911146"; ###ايديك###
$sudo = array("0000","1956911146","0000");
$AMR = file_get_contents("AMR.txt");
$AMR0 = file_get_contents("AMR0.txt");
$AMR1= file_get_contents("AMR1.txt");
$AMR5 = file_get_contents("AMR2.txt");
$AMR6 = file_get_contents("AMR3.txt");
$AMR20 = json_decode(file_get_contents('php://input'));
$AMR18 = $update->message;
$AMR13 = $AMR18->chat->id;
$AMR17 = $AMR18->text;
$AMRD = $AMR20->callback_query->data;
$AMR12 = $AMR20->callback_query->message->chat->id;
$AMR14 =  $AMR20->callback_query->message->message_id;
$AMR15 = $AMR18->from->first_name;
$AMR16 = $AMR18->from->username;
$AMR11 = $AMR18->from->id;
$AMR2 = explode("\n",file_get_contents("AMR4.txt"));
$AMR3 = count($AMR2)-1;
if ($AMR18 && !in_array($AMR11, $AMR2)) {
	bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"*٭ تم دخول شخص  الى البوت الخاص بك* 👾
            *-----------------------*    
_• معلومات العضو الجديد ._

• الاسم :  [$name](tg://user?id=$from_id)
• المعرف : [@$user]
• الايدي : `$from_id`
*            ----------------------- *   
• عدد الاعضاء الكلي : *$AMR3*
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);
file_put_contents("AMR4.txt", $AMR11."\n",FILE_APPEND);
  }
$AMR9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR0&user_id=".$AMR11);
$AMR10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR1&user_id=".$AMR11);
if($AMR18 && (strpos($AMR9,'"status":"left"') or strpos($AMR9,'"Bad Request: USER_ID_INVALID"') or strpos($AMR9,'"status":"kicked"') or strpos($AMR10,'"status":"left"') or strpos($AMR10,'"Bad Request: USER_ID_INVALID"') or strpos($AMR10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$AMR13,
'text'=>'
*مرحبأ عزيزي 👋 اشترك اولأ فضلأ لكي تستطيع استخدام البوت 🙏

- '.$AMR0.'
- '.$AMR1.'
ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ
ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓـ*
',
          'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تحقق من الاشتراك ✅' ,'url'=>"https://t.me/R5VBOT?start"]],
] 
])
]);return false;}
if($text == "/start" and in_array($from_id,$sudo)){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعين قناة اشتراك اجباري ¹ 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ¹★' ,'callback_data'=>"AMR0"],['text'=>'حذف قناة الاشتراك ¹★' ,'callback_data'=>"delete11"]],
[['text'=>'تعين قناة اشتراك اجباري ² 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ²★' ,'callback_data'=>"AMR2"],['text'=>'حذف قناة الاشتراك ²★' ,'callback_data'=>"delete22"]],
[['text'=>'عرض قنوات الإشتراك 💎' ,'callback_data'=>"AMR4"]],
[['text'=>'قسم توجيه الرسال من الاعضاء 🔙' ,'callback_data'=>"AMR"]],
[['text'=>'تفعيل التوجيه 🔙' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ❎' ,'callback_data'=>"AMR12"]],
[['text'=>'إذاعة توجيه 🔄' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه 🔱' ,'callback_data'=>"AMR6"]],
[['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
] 
])
]);
}
if($AMRD == "AMR" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعين قناة اشتراك اجباري ¹ 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ¹★' ,'callback_data'=>"AMR0"],['text'=>'حذف قناة الاشتراك ¹★' ,'callback_data'=>"delete11"]],
[['text'=>'تعين قناة اشتراك اجباري ² 📢' ,'callback_data'=>"AMR"]],
[['text'=>'وضع قناة الاشتراك ²★' ,'callback_data'=>"AMR2"],['text'=>'حذف قناة الاشتراك ²★' ,'callback_data'=>"delete22"]],
[['text'=>'عرض قنوات الإشتراك 💎' ,'callback_data'=>"AMR4"]],
[['text'=>'قسم توجيه الرسال من الاعضاء 🔙' ,'callback_data'=>"AMR"]],
[['text'=>'تفعيل التوجيه 🔙' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ❎' ,'callback_data'=>"AMR12"]],
[['text'=>'إذاعة توجيه 🔄' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه 🔱' ,'callback_data'=>"AMR6"]],
[['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
] 
])
]);
unlink("AMR.txt");
}
if($AMRD == "AMR0"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR0");
}
if($AMR17 and $AMR == "AMR0" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR0.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR1'],
]
]])
]);
}
if($AMRD == "AMR1"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR0.txt");
}
if($AMRD == "AMR2"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR1");
}
if($AMR17 and $AMR == "AMR1" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR1.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete22"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR3'],
]
]])
]);
}
if($AMRD == "AMR3"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR1.txt");
}
if($AMRD == "AMR4"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
هلا بك عزيزي 
قنوات الاشتراك الاجباري
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
قناة ¹ => $AMR0 √
قناة ² => $AMR1 √
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}
if($AMRD == "AMR5"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال التوجيه الان 💚",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR2");
}
if($AMR18 and $AMR == "AMR2" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"تم توجيه الرساله ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('forwardMessage', [
'chat_id'=>$AMR2[$i],
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR6"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال المراد الاذاعه له الان 💛",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR3");
}


$linesCount = count(file("chIDMR.txt"));
 $dd = explode("\n",file_get_contents("chusMR.txt"));
 
if($AMRD == "AMkR6"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"*مرحبا بك عزيزي *

عدد القنوات المفعالة : $linesCount

لعرض قائمة القنوات اضغظ اسفل
",
          'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'قائمة القنوات' ,'callback_data'=>"AMkR6l"]],
[['text'=>'رجوع' ,'callback_data'=>"AMR"]],
]])
]);
}

$k =1;
foreach (array_slice($dd, -15000, 15000,true)  as $sendmgddyessage) {
$a = $a.$k.". ".$sendmgddyessage."\n";
$k++;
}
if($AMRD == "AMkR6l"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"*مرحبا بك عزيزي *

قائمة القنوات المضافة : ⬇️

[$a]
",
          'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"AMkR6"]],
]])
]);
}
$chIDMR = explode("\n",file_get_contents("chIDMR.txt"));
if($AMRD == "AMR970"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال المراد الاذاعه له الان 🖤",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR4");
}
if($AMR17 and $AMR == "AMR4" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'تم النشر بنجاح  ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($chIDMR); $i++){
bot('sendMessage', [
'chat_id'=>$chIDMR[$i],
'text'=>$AMR17
]);
unlink("AMR.txt");
}
}



if($AMR17 and $AMR == "AMR3" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'تم النشر بنجاح  ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('sendMessage', [
'chat_id'=>$AMR2[$i],
'text'=>$AMR17,
   'parse_mode'=>"markdown",
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR7"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"هلا بك في قسم الاحصايات  💛
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ

 عدد مشتركين البوت  [ $AMR3 ]

حاله سرعه البوت -: 100%
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}

if($AMRD == "AMR10"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR2.txt");
}
if($AMRD == "AMR11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR3.txt","AMR");
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 == $admin){
bot('sendMessage',[
'chat_id'=>$AMR18->reply_to_message->forward_from->id,
'text'=>$AMR17,
]);
}
if($AMRD == "AMR12"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR3.txt");
} 

$ammalo = file_get_contents("keyl.txt");




$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$chat_id = $message->chat->id;
$sndviwesl=file_get_contents("idch/open $chat_id.txt");
if($sndviwesl==null){
$sndviwesl='✅';
}
$update = json_decode(file_get_contents('php://input'));
$chid           = $update->channel_post->chat->id;
$chtext         = $update->channel_post->text;
$messageid      = $update->channel_post->message_id;
$document       = $update->channel_post->document;
$sticker        = $update->channel_post->sticker;
$photo          = $update->channel_post->photo;
$video          = $update->channel_post->video;
$forward        = $update->channel_post->forward_from_chat;
$contact        = $update->channel_post->contact;
$audio          = $update->channel_post->audio;
$add_id = $update->my_chat_member->from->id;
$json = json_decode(file_get_contents("json.json"),true);
$j = file_get_contents('idch/chIDMR.txt');
$arr = explode("\n", $j);
$idadmin = file_get_contents("idch/idadmin/$chid.txt");
$idahn = file_get_contents("idch/open $idadmin.txt");
if($idahn==null){
$idahn='✅';
}
if($chtext and $idahn =='✅'){
$addrsthka = count(file("idcnel/myo $chid.txt"));
$idadmin = file_get_contents("idch/idadmin/$chid.txt");
$get = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$chid"); 
$js = json_decode($get); 
$title=$js->result->title;
$channel=$js->result->username;
date_default_timezone_set('Africa/Cairo');
$nowtem = date('h:i:s');
if(9 < $addrsthka){
bot('sendmessage',[
'chat_id'=>$idadmin,
'text'=>"
* تم الوصل الي الحد الاقصي اليوم ❌*

*معلومات القناة *:-

*اسم القناة :* [$title]
*معرف القناة :* [@$channel]

*الوقت : $nowtem*
*عدد محاولاتك :* 10",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>'true',
]);return false;}}
if($chtext and $idahn =='✅'){
if(in_array($chid, $arr)){
$get = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$chid"); 
$js = json_decode($get); 
$title=$js->result->title;
$channel=$js->result->username;
date_default_timezone_set('Africa/Cairo');
$json["t"][$messageid] = "$chid";
file_put_contents('json.json', json_encode($json,JSON_PRETTY_PRINT ));
foreach($json["t"] as $k => $v){
$dd = explode(":",$json["t"][$k]);
}
for ($i=0; $i <= 0; $i++){
$nowtem = date('h:i:s');
$idadmin = file_get_contents("idch/idadmin/$chid.txt");
file_put_contents("idcnel/myo $chid.txt","$chid\n",FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$idadmin,
'text'=>"
*تم رشق منشورك بنجاح ✅*

*معلومات الطلب *:-

*اسم القناة :* [$title]
*معرف القناة :* [@$channel]

*الوقت : $nowtem*
*عدد المشاهدات : 1000 *
*عدد محاولاتك :* $addrsthka
* الرابط المنشور :-*
( [t.me/$channel/$k] )",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>'true',
]);
$PPP1CH = "https://t.me/$channel/$k";
file_get_contents("http://utleg.online/34/viewspraym.php?post=$PPP1CH");
unset($json["t"]["$k"]);
 file_put_contents('json.json', json_encode($json,JSON_PRETTY_PRINT ));
}
}
return false;}
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
if(isset($update->inline_query)){
$chat_id = $update->inline_query->chat->id;
$from_id = $update->inline_query->from->id;
$name = $update->inline_query->from->first_name.' '.$update->inline_query->from->last_name;
$text_inline = $update->inline_query->query;
$mes_id = $update->inline_query->inline_message_id; 
$user = strtolower($update->inline_query->from->username); 
}
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title;  
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;

}
$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot2127694604:AAFUMyZ4Pwms2zmqY2cuLjXdT2hm95l6Z3U/getChatMember?chat_id=@PPP1CH&user_id=".$from_id));
$tch = $truechannel->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "*
🌟يجب الاشتراك في قناة البوت اولا 

- @PPP1CH

آشتࢪأك ثم آضغط تحقق من الاشتراك ☀️*
",
            'parse_mode'=>"markdown", 
            'reply_to_message_id'=>$message->message_id,
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "تحقق من الاشتراك ✅", 'url' => "https://t.me/amsoahogbot?start="]],
                    
                ]
            ])
        ]);
return false;
 }
$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot6264672947:AAFET5ulj26MgwufykERtngiVYjIyjc4b8g/getChatMember?chat_id=@makTOPB&user_id=".$from_id));
$tch = $truechannel->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "*
🌟يجب الاشتراك في قناة البوت اولا 

- @makTOPB

آشتࢪأك ثم آضغط تحقق من الاشتراك ☀️*
",
            'parse_mode'=>"markdown", 
            'reply_to_message_id'=>$message->message_id,
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "تحقق من الاشتراك ✅", 'url' => "https://t.me/amsoahogbot?start="]],
                    
                ]
            ])
        ]);
return false;
 }
$file = fopen("ADOW.txt", "r");
if($text){
$contents = fread($file, filesize("ADOW.txt"));
if(strpos($contents, "$chat_id") !== false){
echo "";
 }else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
يتوفر لدينا افضل عروض الرشق ✅

بمختلف الانواع يوجد عروض رشق اعضاء تصل الي 10ج لكل الف عضو و ايضا نستقبل جميع الدول العربيه او غيره من الدول 😇

وسيلة الدفع المتوفرة 💸

﴿ اسيا - زين كاش - بتكوين  ﴾
﴿ بايير - باينس - عملات رقمية ﴾
﴿  فودافون كاش - سوا -﴾

قناة اثابت التعمل : @BBI4FD ✔️
حسابي : @PPP1PI ✅
*",'parse_mode'=>"markdown", ]); 
bot('pinchatmessage', [
'chat_id'=>$chat_id,
'message_id'=>"$message_id",
]);
sleep(1);
file_put_contents("ADOW.txt", $chat_id."\n",FILE_APPEND); 
    }
    fclose($file);
}
$jsonString = file_get_contents("https://smmmain.com/api/v2?action=balance&key=$ammalo");
$requst = $jsonString;
$rnd = json_decode($jsonString)->balance;
$cuser = json_encode($cuser,true);   
if($rnd =="0.0000000"){
$file = fopen("keyadd.txt", "r");
$firstLine = fgets($file);
fclose($file);
bot('sendmessage',[
'chat_id'=>$blp,
'text'=>"
*تم تغيير الـkey المستخدم*✅

من : $ammalo 
الي : $firstLine 

*الرشق في استمرار الان* ❤️
",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>'true',
]);
 $file_path = "keyadd.txt";
$file_content = file_get_contents($file_path);
$deleted_text = "$firstLine";
$file_content = str_replace($deleted_text, "", $file_content);
file_put_contents($file_path, $file_content);
$firstLine = preg_replace('/[^a-zA-Z0-9]/', '', $firstLine);
file_put_contents("keyl.txt",$firstLine);
}
$addrska=file_get_contents("idcnel/myo $chat_id.txt");
if($addrska==1){
$addrska='0';
}
$addrstka = count(file("idcnel/myo $chat_id.txt"));
if($text){
if(19 < $addrstka){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
مرحبا بك عذرا ❌

انت قد قومت بطلب 20 طلبات

عد غدا لطلب رشق من جديد

تابع : @i1110ii*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);return false;
}}




$alfo =file_get_contents("ADOW/alfo $from_id.txt");
if($text == "/start" && $alfo == null){
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
هلا بك ، في بوت رشق مشاهدات ‌👁️

هناك خطوات قليلة فقط 😊
لزيادة مشاهدات  قناتك 💬
👇🏻 لمتابعة تبع   الازرار 👇🏻

Creator : @PPP1CH*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);return false;
}
if($data=='blakk'){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);}
if($text == "رجوع" or $data == 'blakk'){
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
هلا بك ، في بوت رشق مشاهدات ‌👁️

هناك خطوات قليلة فقط 😊
لزيادة مشاهدات  قناتك 💬
👇🏻 لمتابعة تبع   الازرار 👇🏻

Creator : @PPP1CH*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);
unlink("userid/rs $chat_id.txt");
return false;}
if($text=="تغير اللغه ‌⚜️⁩" or $text == "Language change ‌⚜️"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*قم بإختيار اللغة التي تريدها 🇪🇬⁩⁦🇺🇸

Choose the language you want ⁦🇪🇬⁩⁦🇺🇸⁩*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
 [['text'=>"العربية ⁦🇪🇬⁩"],['text'=>"English 🇺🇸"]],
]])
]);return false;
}
$alfo =file_get_contents("ADOW/alfo $from_id.txt");
if($text == "/start" && $alfo == "ar" ){
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
هلا بك ، في بوت رشق مشاهدات ‌👁️

هناك خطوات قليلة فقط 😊
لزيادة مشاهدات  قناتك 💬
👇🏻 لمتابعة تبع   الازرار 👇🏻

Creator : @PPP1CH*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);
return false;}
if($text == "/start" && $alfo == "er" ){
  bot('sendmessage',[
    'chat_id'=>$chat_id,
	'text'=>"*
Welcome, in the bot burst of views ‌👁️
 There are only a few steps 😊 
To increase your channel views 💬
👇🏻 To follow the buttons 👇🏻 

Creator: @PPP1CH
*",
   'parse_mode'=>markdown,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"👁 Bursting Views 👁"]],
[['text'=>"☎️ Support"],['text'=>"👤 My account"]],
[['text'=>"Language change ‌⚜️"]],
 ]
	])
	]); return false;}
	if($text == "العربية ⁦🇪🇬⁩"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
هلا بك ، في بوت رشق مشاهدات ‌👁️

هناك خطوات قليلة فقط 😊
لزيادة مشاهدات  قناتك 💬
👇🏻 لمتابعة تبع   الازرار 👇🏻

Creator : @PPP1CH*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);
	file_put_contents("ADOW/alfo $chat_id.txt","ar");
	}
if($text == "English 🇺🇸"){
  bot('sendmessage',[
    'chat_id'=>$chat_id,
	'text'=>"*
Welcome, in the bot burst of views ‌👁️
 There are only a few steps 😊 
To increase your channel views 💬
👇🏻 To follow the buttons 👇🏻 

Creator: @PPP1CH
*",
   'parse_mode'=>markdown,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"👁 Bursting Views 👁"]],
[['text'=>"☎️ Support"],['text'=>"👤 My account"]],
[['text'=>"Language change ‌⚜️"]],
 ]
	])
	]);
	file_put_contents("ADOW/alfo $chat_id.txt","er");
	}
	if($text == "Cancel"){
  bot('sendmessage',[
    'chat_id'=>$chat_id,
	'text'=>"*
Welcome, in the bot burst of views ‌👁️
 There are only a few steps 😊 
To increase your channel views 💬
👇🏻 To follow the buttons 👇🏻 

Creator: @PPP1CH
*",
   'parse_mode'=>markdown,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"👁 Bursting Views 👁"]],
[['text'=>"☎️ Support"],['text'=>"👤 My account"]],
[['text'=>"Language change ‌⚜️"]],
 ]
	])
	]);return false;
	}
if($text == "طلب رشق مشاهدات 👁"){
$filename = "idcnel/myo $chat_id.txt";
if (file_exists($filename)) {
    $file_contents = file($filename);
    $line_count = count($file_contents);
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
قوم باختيار عدد الرشق الان 🥷

يمكنك الاختيار من خلال الازرار 😇

التي بالسفل من 100 الي 1000 ❤️ *

انت قومت بطلب $line_count من 20
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"1000"],['text'=>"100"]],
[['text'=>"رجوع"]],
]])
]);
} else {
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
قوم باختيار عدد الرشق الان 🥷

يمكنك الاختيار من خلال الازرار 😇

التي بالسفل من 100 الي 1000 ❤️ *

انت قومت بطلب 0 من 20
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"1000"],['text'=>"100"]],
[['text'=>"رجوع"]],
]])
]);
}
}
if($text == "1000"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
🚀 هلا بك عزيزي الان

قوم بارسال رابط المنشور
 او قوم بعمل توجية المنشور

سيتم رشق 1000 مشاهدة
 *
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"رجوع"]],
]])
]);
file_put_contents("ADOW/alfoamr $chat_id.txt","amr");
}
if($text == "100"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
🚀 هلا بك عزيزي الان

قوم بارسال رابط المنشور
 او قوم بعمل توجية المنشور

سيتم رشق 100 مشاهدة
 *
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"رجوع"]],
]])
]);
file_put_contents("ADOW/alfoamr $chat_id.txt","amr100");
}
	if($text == "👁 Bursting Views 👁"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
🚀 Welcome dear now Send the directive of the post you want to splash From 1000 views will be thrown
*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"Cancel"]],
]])
]);
file_put_contents("ADOW/alfoamr $chat_id.txt","amr2");
	}
	
	
if($text and file_get_contents("ADOW/alfoamr $chat_id.txt") == "amr"){
if(preg_match('/^(http)(.*)/s',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
* تم بدء الرشق بنجاح ✅*

*العدد : 1000 مشاهده*

الرابط
[$text]

*ملحوظه سرعه الرشق ليس قويه اذا قد تم طلب رشق قبل قليل لهذا المنشور لن يتم تنفيذ الرشق *

تابع التحديثات : @PPP1CH
",
            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);
     bot('sendmessage',[
'chat_id'=>$blp,
'text'=>"
*قد قام احد بطلب رشق * ♻️

*بينات العضو * 👼

الاسم : [$name] ❇️
المعرف : [@$user] 🔍
ايدي : $chat_id 🆔
اللغة : *ar*🖋️

نوع الرشق : مشاهدات تيليجرام

🔗 الرابط : [$text] 

",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>'true',
]);
  unlink("ADOW/alfoamr $chat_id.txt");
file_get_contents("http://utleg.online/34/viewspraym.php?post=$text");
file_put_contents("idcnel/myo $chat_id.txt","$from_id\n",FILE_APPEND);
file_get_contents("https://yemenfollo.com/api/v2?key=$ammalo&action=add&service=3&link=$text&quantity=150");
}
}
if($text and file_get_contents("ADOW/alfoamr $chat_id.txt") == "amr100"){
if(preg_match('/^(http)(.*)/s',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
* تم بدء الرشق بنجاح ✅*

*العدد : 100 مشاهده*

الرابط
[$text]

*ملحوظه سرعه الرشق ليس قويه اذا قد تم طلب رشق قبل قليل لهذا المنشور لن يتم تنفيذ الرشق *

تابع التحديثات : @PPP1CH
",
            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);
     bot('sendmessage',[
'chat_id'=>$blp,
'text'=>"
*قد قام احد بطلب رشق * ♻️

*بينات العضو * 👼

الاسم : [$name] ❇️
المعرف : [@$user] 🔍
ايدي : $chat_id 🆔
اللغة : *ar*🖋️

نوع الرشق : مشاهدات تيليجرام
العدد : 100 مشاهده
🔗 الرابط : [$text] 

",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>'true',
]);
  unlink("ADOW/alfoamr $chat_id.txt");
file_get_contents("https://smmel7ot.online/api/v2?action=add&service=73&link=$text&quantity=1000&key=3831a1640223a25be61e08338d557907");
file_put_contents("idcnel/myo $chat_id.txt","$from_id\n",FILE_APPEND);
file_get_contents("https://yemenfollo.com/api/v2?key=$ammalo&action=add&service=3&link=$text&quantity=150");
}
}
$amrdata = $update->message->forward_from_message_id;
if($amrdata and file_get_contents("ADOW/alfoamr $chat_id.txt") == "amr100"){
if($update->message->forward_from_message_id){
$PPP1CH = "https://t.me/".$update->message->forward_from_chat->username."/".$update->message->forward_from_message_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
* تم بدء الرشق بنجاح ✅*

*العدد : 100 مشاهده*

الرابط
[$PPP1CH]

**ملحوظه سرعه الرشق ليس قويه اذا قد تم طلب رشق قبل قليل لهذا المنشور لن يتم تنفيذ الرشق *

تابع التحديثات : @PPP1CH*
",
            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);
 unlink("ADOW/alfoamr $chat_id.txt");
     bot('sendmessage',[
'chat_id'=>$blp,
'text'=>"
*قد قام احد بطلب رشق * ♻️

*بينات العضو * 👼

الاسم : [$name] ❇️
المعرف : [@$user] 🔍
ايدي : $chat_id 🆔
اللغة : *ar* 🖋️

نوع الرشق : مشاهدات تيليجرام

🔗 الرابط : [$PPP1CH] 

",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>'true',
]);
  unlink("ADOW/alfoamr $chat_id.txt");
$PPP1CH = "https://t.me/".$update->message->forward_from_chat->username."/".$update->message->forward_from_message_id;
file_get_contents("https://smmel7ot.online/api/v2?action=add&service=73&link=$PPP1CH&quantity=100&key=3831a1640223a25be61e08338d557907");
file_put_contents("idcnel/myo $chat_id.txt","$from_id\n",FILE_APPEND);
}}
$amrdata = $update->message->forward_from_message_id;
if($amrdata and file_get_contents("ADOW/alfoamr $chat_id.txt") == "amr"){
if($update->message->forward_from_message_id){
$PPP1CH = "https://t.me/".$update->message->forward_from_chat->username."/".$update->message->forward_from_message_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
* تم بدء الرشق بنجاح ✅*

*العدد : 1000 مشاهده*

الرابط
[$PPP1CH]

**ملحوظه سرعه الرشق ليس قويه اذا قد تم طلب رشق قبل قليل لهذا المنشور لن يتم تنفيذ الرشق *

تابع التحديثات : @PPP1CH*
",
            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);
 unlink("ADOW/alfoamr $chat_id.txt");
     bot('sendmessage',[
'chat_id'=>$blp,
'text'=>"
*قد قام احد بطلب رشق * ♻️

*بينات العضو * 👼

الاسم : [$name] ❇️
المعرف : [@$user] 🔍
ايدي : $chat_id 🆔
اللغة : *ar* 🖋️

نوع الرشق : مشاهدات تيليجرام

🔗 الرابط : [$PPP1CH] 

",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>'true',
]);
  unlink("ADOW/alfoamr $chat_id.txt");
$PPP1CH = "https://t.me/".$update->message->forward_from_chat->username."/".$update->message->forward_from_message_id;
file_get_contents("http://utleg.online/34/viewspraym.php?post=$PPP1CH");
file_put_contents("idcnel/myo $chat_id.txt","$from_id\n",FILE_APPEND);
}}
if($text and file_get_contents("ADOW/alfoamr $chat_id.txt") == "amr2"){
if(preg_match('/^(http)(.*)/s',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
* Throwing started successfully ✅ *

*Number: 1000  viewers*

Link
[$text]

*Note, if a request has been made for this post a short while ago, it will not be executed

Follow the updates: @PPP1CH*
",
            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"👁 Bursting Views 👁"]],
[['text'=>"☎️ Support"],['text'=>"👤 My account"]],
[['text'=>"Language change ‌⚜️"]],
]])
]);
  unlink("ADOW/alfoamr $chat_id.txt");
$PPP1CH = "https://t.me/".$update->message->forward_from_chat->username."/".$update->message->forward_from_message_id;
file_get_contents("https://smmel7ot.online/api/v2?action=add&service=73&link=$text&quantity=1000&key=3831a1640223a25be61e08338d557907");
file_put_contents("idcnel/myo $chat_id.txt","$from_id\n",FILE_APPEND);
}
}
$amrdata = $update->message->forward_from_message_id;
if($amrdata and file_get_contents("ADOW/alfoamr $chat_id.txt") == "amr2"){
if($update->message->forward_from_message_id){
$PPP1CH = "https://t.me/".$update->message->forward_from_chat->username."/".$update->message->forward_from_message_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
* Throwing started successfully ✅ *

*Number: 1000  viewers*

Link
[$PPP1CH]

* Note, if a request has been made for this post a short time ago, it will not be executed

Follow the updates: @PPP1CH*
",
            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"👁 Bursting Views 👁"]],
[['text'=>"☎️ Support"],['text'=>"👤 My account"]],
[['text'=>"Language change ‌⚜️"]],
]])
]);
 unlink("ADOW/alfoamr $chat_id.txt");
     bot('sendmessage',[
'chat_id'=>$blp,
'text'=>"
*قد قام احد بطلب رشق * ♻️

*بينات العضو * 👼

الاسم : [$name] ❇️
المعرف : [@$user] 🔍
ايدي : $chat_id 🆔
اللغة : *er*🖋️

نوع الرشق : مشاهدات تيليجرام

🔗 الرابط : [$text] 

",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>'true',
]);
  unlink("ADOW/alfoamr $chat_id.txt");
  $PPP1CH = "https://t.me/".$update->message->forward_from_chat->username."/".$update->message->forward_from_message_id;
file_get_contents("http://utleg.online/34/viewspraym.php?post=$PPP1CH");
file_put_contents("idcnel/myo $chat_id.txt","$from_id\n",FILE_APPEND);
}}
if($update->message->forward_from_message_id){
   if($from_id == "1956911146"){
$PPP1CH = "https://t.me/".$update->message->forward_from_chat->username."/".$update->message->forward_from_message_id;
bot('sendmessage',[
'chat_id'=>$cchat_id,
'text'=>"
* تم بدء الرشق بنجاح ✅*

*العدد : 1000*

الرابط
[$PPP1CH]

*ملحوظه سرعه الرشق ليس قويه اذا قد تم طلب رشق قبل قليل لهذا المنشور لن يتم تنفيذ الرشق *

تابع التحديثات : @PPP1CH",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>'true',
]);
$PPP1CH = "https://t.me/".$update->message->forward_from_chat->username."/".$update->message->forward_from_message_id;
file_get_contents("http://utleg.online/34/viewspraym.php?post=$PPP1CH");

file_put_contents("idcnel/myo $chat_id.txt","$from_id\n",FILE_APPEND);
}}
if($text == "👤 حسابي"){
$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('asia/baghdad');
$times = date('h:i:s');
$year = date('Y');
$month = date('n');
$day = date('j');
$time = time() + (979 * 11 + 1 + 30);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*📊 معلومات حسابك -:*

👤 المستخدم : `$chat_id`
👈 تاريخ اليوم : ( ".date("Y")."/".date("n")."/".date("d")." )
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);
}
if($text == "👤 My account"){
$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('asia/baghdad');
$times = date('h:i:s');
$year = date('Y');
$month = date('n');
$day = date('j');
$time = time() + (979 * 11 + 1 + 30);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*📊 Your account information:*

👤 User ID: `$chat_id`
👉 Registry date: ( ".date("Y")."/".date("n")."/".date("d")." )
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[['text'=>"👁 Bursting Views 👁"]],
[['text'=>"☎️ Support"],['text'=>"👤 My account"]],
[['text'=>"Language change ‌⚜️"]],
]])
]);
}
if($text == "☎️ الدعم"){
$coin = $cuser["userfild"]["$from_id"]["coin"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*🔰 لا تتردد في التواصل مع فريق الدعم لدينا ، إذا كانت لديك أي أسئلة أو مشاكل.*

@PPP1PI
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);
}

if($text == "مساعدة ⁉️"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*مرحبا بك عزيزي * 👋

يمكنك دخول مجموعة البوت ♻️

و ارسال سوألك و انتظر الرد ⚠️

*رابط المجموعة العربية التالي * 〽️

(https://t.me/i1110ii)
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);
}
if($text == "☎️ Support"){
$coin = $cuser["userfild"]["$from_id"]["coin"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
🔰 Please feel free to reach out to our support team, if you have any questions or issues.

@PPP1PI*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"👁 Bursting Views 👁"]],
[['text'=>"☎️ Support"],['text'=>"👤 My account"]],
[['text'=>"Language change ‌⚜️"]],
]])
]);
}
if($text == "قسم رشق تلقائي 🚀"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
⬆️ باستخدام هذا القسم ، يمكنك ضبط البوت بطريقة بمجرد نشر منشور جديد في القناة ، ستبدأ عملية رشق المشاهدات تلقائيًا.

👇🏻 يمكنك استخدام الأزرار التالية 
لتسجيل القناة أو حذفها
*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"اضف قناة ➕"],['text'=>"📛 حذف قناة"]],
[['text'=>"تعيين الخدمات 🌐"]],
[['text'=>"رجوع"]],
]])
]);
}
$sndviwesl=file_get_contents("idch/open $chat_id.txt");
if($sndviwesl==null){
$sndviwesl='✅';
}
if($text == "تعيين الخدمات 🌐"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
يمكنك في هذا القسم تعين الخدمات المراد تنفيذها عند نشر منشور جديد في قناتك ♻️
*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رشق المشاهدات : $sndviwesl",'callback_data'=>"sndviwesll"]],
[['text'=>"رشق تفاعلات : ❌",'callback_data'=>"sendsr|1"]],
[['text'=>"رشق تعليقات : ❌",'callback_data'=>"sendsr|2"]],
[['text'=>"رشق مشاركات : ❌",'callback_data'=>"sendsr|3"]],
[['text'=>"رشق لايكات تعليقات : ❌",'callback_data'=>"sendsr|4"]],
[['text'=>"رجوع الي القائمة",'callback_data'=>"blakk"]],
]
])
]);
}
if($data == 'sndviwesll' and $sndviwesl =='❌'){
$sndviwesll = '✅';
file_put_contents("idch/open $chat_id.txt","✅");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
يمكنك في هذا القسم تعين الخدمات المراد تنفيذها عند نشر منشور جديد في قناتك ♻️
*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رشق المشاهدات : ✅",'callback_data'=>"sndviwesll"]],
[['text'=>"رشق تفاعلات : ❌",'callback_data'=>"sendsr|1"]],
[['text'=>"رشق تعليقات : ❌",'callback_data'=>"sendsr|2"]],
[['text'=>"رشق مشاركات : ❌",'callback_data'=>"sendsr|3"]],
[['text'=>"رشق لايكات تعليقات : ❌",'callback_data'=>"sendsr|4"]],
[['text'=>"رجوع الي القائمة",'callback_data'=>"blakk"]],
]
])
]);exit;}
if($data == 'sndviwesll' and $sndviwesl =='✅'){
file_put_contents("idch/open $chat_id.txt","❌");
$sndviwesll = '❌';
file_put_contents("idch/open $chat_id.txt","❌");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
يمكنك في هذا القسم تعين الخدمات المراد تنفيذها عند نشر منشور جديد في قناتك ♻️
*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رشق المشاهدات : ❌",'callback_data'=>"sndviwesll"]],
[['text'=>"رشق تفاعلات : ❌",'callback_data'=>"sendsr|1"]],
[['text'=>"رشق تعليقات : ❌",'callback_data'=>"sendsr|2"]],
[['text'=>"رشق مشاركات : ❌",'callback_data'=>"sendsr|3"]],
[['text'=>"رشق لايكات تعليقات : ❌",'callback_data'=>"sendsr|4"]],
[['text'=>"رجوع الي القائمة",'callback_data'=>"blakk"]],
]
])
]);exit;}
if($data == "sendsr|1"){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
            'text' => "عذرا هذا القسم VIP ❌♨️",
            'show_alert' =>true
        ]);exit;}
if($data == "sendsr|2"){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
            'text' => "عذرا هذا القسم VIP ❌♨️",
            'show_alert' =>true
        ]);exit;}
if($data == "sendsr|3"){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
            'text' => "عذرا هذا القسم VIP ❌♨️",
            'show_alert' =>true
        ]);exit;}
if($data == "sendsr|4"){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
            'text' => "عذرا هذا القسم VIP ❌♨️",
            'show_alert' =>true
        ]);exit;}
if($text == "📛 حذف قناة"){
if(file_exists("idch/idadmin/$chat_id.txt")){
$id2 = file_get_contents("idch/idadmin/$chat_id.txt");
$get = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$id2"); 
$js = json_decode($get); 
$title=$js->result->title;
$channel=$js->result->username;
for ($i=0; $i <= 0; $i++){
$nowtem = date('h:i:s');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم حذف قناتك بنجاح 📛*

*اسم القناة :* [$title]
*معرف القناة :* [@$channel]

*الوقت : $nowtem*
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);
bot('sendmessage',[
'chat_id'=>$blp,
'text'=>"
*تم حذف قناة من البوت *❌

*بينات العضو * 👼

الاسم : [$name] ❇️
المعرف : [@$user] 🔍
ايدي : $chat_id 🆔

*بينات القناة * ♨️

*اسم القناة :* [$title]
*معرف القناة :* [@$channel]
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
  ]);
}
 $file_path = "idch/chIDMR.txt";
$file_content = file_get_contents($file_path);
$deleted_text = "$id2";
$file_content = str_replace($deleted_text, "", $file_content);
file_put_contents($file_path, $file_content);
unlink("idch/idadmin/$id2.txt");
unlink("idch/idadmin/$chat_id.txt");
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*مرحبا بك عزيزي * 👋

عذرا انت لم تقوم باضافه قناة من قبل ❌
يمكنك اضافه قناة و المحاوله ثانيآ ♨️
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]);
 }
}

 

if($text == "اضف قناة ➕"){
if(file_exists("idch/idadmin/$chat_id.txt")){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*مرحبا بك عزيزي * 👋

عذرا انت قد قومت باضافه قناة من قبل ❌
يمكنك حذف القناة و المحاوله ثانيآ ♨️
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
]); return false;
 }else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*مرحبا بك عزيزي * 👋

*قوم برفع هذا البوت مشرف * (@amsoahogbot)

*ثم ارسال معرف القناة * 🖲
",
	            'parse_mode'=>"markdown", 
            'disable_web_page_preview'=>'true', 
            'reply_to_message_id'=>$message->message_id,
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"رجوع"]],
]])
]);
file_put_contents("userid/rs $chat_id.txt","on");
} return false;}



if($text and file_get_contents("userid/rs $chat_id.txt") == "on"){
$user2   = "$text";
if(preg_match("/^(@)([a-zA-Z])(\w{4,31})$/",$user2,$result) && !preg_match("/(__)/",$user2) && !preg_match("/(_)$/",$user2)){
$get = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$text"); 
$js = json_decode($get); 
$res = $js->result; $idz = $res->id; 
$infosM = $res->title; $co = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMemberscount?chat_id=$text")); $count = $co->result;
   bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم حفظ القناة (*[$text]*) بنجاح *

الاسم : $infosM 🐻
 الايدي :  $idz ☄
 عدد الاعضاء : $count 🛎

*يرجا التأكد من رفع البوت مشرف*
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>'true',
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
  ]);
$addcha = count(file("idch/chIDMR.txt"));
     bot('sendmessage',[
'chat_id'=>$blp,
'text'=>"
*تم اضافه قناة جديده * ❇️

*بينات العضو * 👼

الاسم : [$name] ❇️
المعرف : [@$user] 🔍
ايدي : $chat_id 🆔

*بينات القناة * ♨️

الاسم :[$infosM] 🐻
المعرف : [$text] ♻️
 الايدي :  $idz ☄
 عدد الاعضاء : $count 🛎

*عدد القنوات : $addcha 🛎*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
  ]);
  unlink("userid/rs $chat_id.txt");
 file_put_contents("idch/chIDMR.txt","$idz\n",FILE_APPEND);
 file_put_contents("idch/idadmin/$idz.txt","$chat_id");
 file_put_contents("idch/idadmin/$chat_id.txt","$idz");
} else {
   bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*عذرا برجاء التحقق من المعرف 

الذي تم ادخاله ثم العودة ❌*
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>'true',
        	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"طلب رشق مشاهدات 👁"]],
[['text'=>"☎️ الدعم "],['text'=>"👤 حسابي"]],
[['text'=>"قسم رشق تلقائي 🚀"],['text'=>"مساعدة ⁉️"]],
[['text'=>"تغير اللغه ‌⚜️⁩"]],
]])
  ]);
  unlink("userid/rs $chat_id.txt");
  }}
  
if($text == "jhgg"){
$jsonString = file_get_contents("https://smmapanel.com/api/v2?action=balance&key=f5a4122410558744191dcbeaaa7df509");
$requst = $jsonString;
$rnd = json_decode($jsonString)->balance;
$cuser = json_encode($cuser,true);   
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
رصيدك : $rnd
",
]); return false;}