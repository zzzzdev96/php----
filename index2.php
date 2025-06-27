<?php
error_reporting(0);
$host=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$token = "7628268245:AAG4fZS4qNF44yROi0UzKOGNwJSjf-Xdz58"; #توكنك
define('API_KEY',$token);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
echo "تم تشغيل البوت ✅";
$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;

$msg = file_get_contents("msg.php");
$forward = file_get_contents("forward.php");
$midea = file_get_contents("midea.php");
$inlin = file_get_contents("inlin.php");
$photoi = file_get_contents("photoi.php");
$upq = file_get_contents("up.php");
$skor = file_get_contents("skor.php");

$admin = 6700595965; #ايديك تلي

mkdir("data");

$channel = file_get_contents("link.php");
$link = file_get_contents("link2.php");
$ch = "$channel"; #لا تلعب هنا
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"

$users = explode("\n",file_get_contents("abbas.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("abbas.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$abbas09 = json_decode(file_get_contents("abbas09.json"),true);
$suodo = $abbas09['sudoarr'];
$al = $abbas09['addmessage'];
$ab = $abbas09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$abbas09['messagee'] = $abbas09['messagee']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}
if($message and $from_id == $admin){
$abbas09['addmessage'] = $abbas09['addmessage']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}

$all = count($users)-1;

$adminss = explode("\n",file_get_contents("ad.json"));

$k088 = file_get_contents("data/k088.txt");
$q1 = file_get_contents("data/q1.txt");
$q2 = file_get_contents("q2.txt");
$q3 = file_get_contents("data/q3.txt");
$q4 = file_get_contents("q4.txt");
$q5 = file_get_contents("data/q5.txt");
$aralikan = file_get_contents("q6.txt");


if($message){
if(!in_array($admin,$adminss)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
تم تحديث القائمه /start
",
]);
file_put_contents("ad.json",$admin."\n",FILE_APPEND);
}}

$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$todayuser = count($day);
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($message and !in_array($from_id, $day)){ 
file_put_contents($d.".txt",$from_id. "\n",FILE_APPEND);
}

$from_id = $message->from->id;
$name = $message->from->first_name;
$id = $message->from->id;
$user = $message->from->username;
if($user){
$user = "@$user";
}
elseif(!$uaer){
$user = "بلا معرف";
}
if($text =="/start" and !in_array($from_id,$users)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"• تم دخول شخص جديد الى البوت 😊 •–––––––––––––––––––––––––•
• معلومات الشخص 📜👤🤍 :

↫ الاسم  ↫ ⦗ $name ⦘
↫ المعرف ↫⦗ $user ⦘
↫ الايدي ↫ ⦗ $id ⦘
 •–––––––––––––––––––––––––•
↫ عدد الاعضاء الكلي : ⦗ $all ⦘
",
]);
}

$bot = file_get_contents("bot.txt");

if($text =="/start" and in_array($from_id,$adminss)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"-•
🤍 | اهلا بك عزيزي المطور
🤍 | اليك قائمه الاوامر الخاصه بك
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• قفل البوت •","callback_data"=>"abcd"],["text"=>"• فتح البوت •","callback_data"=>"abcde"]],
[["text"=>"• اعضاء البوت •","callback_data"=>"userd"]],
[["text"=>"• تفعيل التنبيه •","callback_data"=>"ont"],["text"=>"• تعطيل التنبيه •","callback_data"=>"oft"]],
[["text"=>"• قسم الاذاعةه •","callback_data"=>"for"]],
[['text' => "• قائمةه الاشتراك •", 'callback_data' => "channel"],['text' => "• الاشتراك ($skor) •", "callback_data" => "off"]],
[['text' => "• نسخة احتياطيةه •", 'callback_data' => "file"],['text' => "• رفع النسخةه •", 'callback_data' => "up"]],
[['text' => "• الاحصائيات •", 'callback_data' => "pannel"],['text' => "• قسم الادمن •", 'callback_data' => "lIllabbas"]],
[['text' => "• التعديلات •", 'callback_data' => "xxxtentacionllllo"]],
[['text' => "• كليشةه /start •", 'callback_data' => "editstart"]],
]])
]);   
}

//
if($data =="lIllabbas"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اهلا", 
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• رفع ادمن •","callback_data"=>"adl"]],
[["text"=>"• اخر الادمن •","callback_data"=>"addmin"]],
[["text"=>"• حذف الادمنيه •","callback_data"=>"delateaddmin"]],
]])
]);   
}

if($data == "adl"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال ايدي العضو
 ",
]); 
file_put_contents("data/k088.txt","k088");
}
if($text !="/start" and $k088 == "k088" and !in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
file_put_contents("ad.json",$text."\n",FILE_APPEND);} 

if($text != "/start" and $k088 == "k088" and !in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفع العضو", 
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"تم رفعك ادمن في البوت", 
]);
}
if($text !="/start" and $k088 == "k088" and in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو ادمن بالفعل", 
]);
}
if($data =="addmin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اخر خمس ادمنيه :
 1 - ".$adminss[count($adminss)-2]."
 2 - ️".$adminss[count($adminss)-3]."
 3 - ️".$adminss[count($adminss)-4]."
 4 - ️".$adminss[count($adminss)-5]."
 5 - ️".$adminss[count($adminss)-6]."
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- الصفحه الرئيسيه.","callback_data"=>"bak"]],
]])
]);   
}
if($data =="delateaddmin" and $chat_id2 =="$admin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
هل انت متاكد من الحذف
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'لا' ,'callback_data'=>"bak"]],
[['text'=>'نعم' ,'callback_data'=>"yesaarsslan"]],
]])
]);
}
if($data =="yesaarsslan"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
تم حذف الادمنيه
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
unlink("ad.json");
}

if($data =="abcde"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم فتح البوت 
- /start",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
file_put_contents("bot.txt","مفتوح");
} 
if($data =="abcd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم قفل البوت
- /start ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]); 
file_put_contents("bot.txt","متوقف");
} 

if($text =="/start" and $bot =="متوقف" and $chat_id != "$admin"){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"عذرا البوت يخضع للتحديث الان",]);
}

if($data =="userd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 اهلا بك عزيزي الادمن
 عدد الاعضاء : ( $all )",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == 'ont'){
file_put_contents("ont.php", "on");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
 تم تفعيل الاشعارات في البوت
",
'show_alert'=>true
]);
}
if($data == 'oft'){
file_put_contents("ont.php", "off");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
⚠ تم تعطيل الاشعارات في البوت
",
'show_alert'=>true
]);
}
$ont = file_get_contents("ont.php");
if($ont == "on"){
if($from_id != $admin){
if($message){
bot('ForwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}}}

if($data == "for"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم باختيار ما يناسبك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اذاعه صورة ",'callback_data'=>"photoi"]],
[['text' => "اذاعه رسالة ", 'callback_data' => "msg"],['text' => "اذاعه توجيه ", 'callback_data' => "forward"]],
[['text' => "اذاعه ميديا ", 'callback_data' => "midea"],['text' => "اذاعه انلاين ", 'callback_data' => "inline"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "msg"){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($msg == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('sendmessage',[
'chat_id'=>$users[$i],
'text'=>"$text",
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم عمل اذاعه بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("msg.php");
}}
if($data == "forward"){
file_put_contents("forward.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين على شكل توجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($forward == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('ForwardMessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم عمل اذاعه توجيه بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
unlink("forward.php");
}}
if($data == "midea"){
file_put_contents("midea.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 يمكنك استخدام جميع انوع الميديا ماعدى الصوره
 (ملصق - فيديو - بصمه - ملف صوتي - ملف - متحركه - جهة اتصال )",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','audio','video','photo','contact','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types) and $midea == "on"){
for($i=0;$i<count($users); $i++){
bot('send'.$key,[
'chat_id'=>$users[$i],
'caption'=>$message->caption,
$key=>$val['file_id']]);
unlink("midea.php");
}
}
}}
if($data == "photoi"){
file_put_contents("photoi.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال الصورة لنشرها لجميع المشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($photoi == "on"){
if($message->photo){
for($i=0;$i<count($users); $i++){
bot('sendphoto',[
'chat_id'=>$users[$i],
'photo'=>$message->photo[0]->file_id,
'caption'=>$message->caption,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الصورة بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("photoi.php");
}}
if($data == "inline"){
file_put_contents("inlin.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتوجيه نص الانلاين لاقوم بنشره للمشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($inlin == "on"){
if($message->forward_from or $message->forward_from_chat){
for($i=0;$i<count($users); $i++){
bot('forwardmessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الانلاين بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("inlin.php");
}}

if($data == "channel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتحديد الامر لأتمكن من تنفيذه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"قناة خاصة ",'callback_data'=>"link"]],
[['text'=>"قناة عامة ",'callback_data'=>"user"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "link"){
file_put_contents("link.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت ادمن في القناة
 ثم ارسل توجيه من القناة الى هنا",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
$channel_id = $message->forward_from_chat->id;
if($channel == "on"){
if($message->forward_from_chat){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 قم الان بأرسال رابط القناة هنا",
]);
file_put_contents("link.php", $channel_id);
file_put_contents("link2.php", "on");
}}
if($link == "on"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية",'callback_data'=>"bak"]],
]])
]);
file_put_contents("link2.php", $text);
file_put_contents("skor.php", "مفعل ✅");
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال الرابط بصورة صحيحه",
]);
}
}

if($data == "user"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت ادمن في القناة
 ثم ارسل يوزر القناة لتفعيل الاشتراك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("uuser.php", "on");
}
if($uuser == "on"){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية ⏱",'callback_data'=>"bak"]],
]])
]);
file_put_contents("skor.php", "مفعل ✅");
file_put_contents("uuser.php", $text);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال يوزر بصورة صحيحه",
]);
}
}

if($skor == "معطل ⚠️"){
if($data == 'off'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'
 مرحبا عزيزي
 حالة الاشتراك الاجباري معطل
 قم بختيار - قائمةه الاشتراك .وقم بتفعيله
',
 'show_alert'=>true
 ]); 
}}
if($skor == "مفعل ✅"){
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
 حسنا عزيزي
 حالت الاشتراك الخاص بك مفعل
 هل انت متأكد من رغبتك في تعطيل الاشتراك
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'نعم ', 'callback_data'=>'yesde2'],
['text'=>'لا ','callback_data'=>'bak'],
]
]])
]);
}}

if($data == "yesde2"){
unlink("uuser.php");
unlink("link.php");
file_put_contents("skor.php", "معطل ⚠️");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 تم تعطيل الاشتراك في جميع القنواة
 يمكنك تفعيل الاشتراك لقناتك في مابعد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
}

$bloktime = date('h:i:s A');
if($data == "file"){
$path = realpath("abbas.json");
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile($path),
'caption'=>"
 نسخة لمشتركينك
 وقت الارسال : ( $bloktime )
 عدد المشتركين : ( $all )
",
]);
}

if($data == "up"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال ملف الاعضاء الان
 ارسل الملف بأسم : abbas.json",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("up.php", "on");
}
$rep = $message->document->file_name;
if($upq == "on"){
if($message->document and $message->document->file_name == "abbas.json" ){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->reply_to_message->document->file_id])->result->file_path;
file_put_contents($message->reply_to_message->document->file_name,file_get_contents($file));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* تم رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
unlink("up.php");
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* لايمكن رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
}

if($data =="pannel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*اهلا بك في قسم - الاحصائيات . 📊
--------------------------
 عدد اعضاء بوتك : $all
 المتفاعلين اليوم  : $todayuser
 عدد الرسائل المرسله : ".$abbas09['addmessage']."
 عدد الرسائل المستلمه : ".$abbas09['messagee']."
 مجموع الرسائل : $xll
--------------------------
 اخر خمس مشتركين :
▫️ 1- ".$users[count($users)-2]."
▫️ 2- ️".$users[count($users)-3]."
▫️ 3- ️".$users[count($users)-4]."
▫️ 4- ️".$users[count($users)-5]."
▫️ 5- ️".$users[count($users)-6]."
--------------------------*",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == "editstart"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال رسالة الاستارت الان
 ",
]); 
file_put_contents("data/q1.txt","q1");
}
if($text != "/start" and $q1 == "q1"){
file_put_contents("data/q1.txt","none");
file_put_contents("q2.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم التعين بنجاح", 
]);
}

if ($data == 'bak'){
$msg = unlink("msg.php");
unlink("forward.php");
unlink("midea.php");
unlink("inlin.php");
unlink("photoi.php");
unlink("up.php");
unlink("up.php");
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"-•
🤍 | اهلا بك عزيزي المطور
🤍 | اليك قائمه الاوامر الخاصه بك
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• قفل البوت •","callback_data"=>"abcd"],["text"=>"• فتح البوت •","callback_data"=>"abcde"]],
[["text"=>"• اعضاء البوت •","callback_data"=>"userd"]],
[["text"=>"• تفعيل التنبيه •","callback_data"=>"ont"],["text"=>"• تعطيل التنبيه •","callback_data"=>"oft"]],
[["text"=>"• قسم الاذاعةه •","callback_data"=>"for"]],
[['text' => "• قائمةه الاشتراك •", 'callback_data' => "channel"],['text' => "• الاشتراك ($skor) •", "callback_data" => "off"]],
[['text' => "• نسخة احتياطيةه •", 'callback_data' => "file"],['text' => "• رفع النسخةه •", 'callback_data' => "up"]],
[['text' => "• الاحصائيات •", 'callback_data' => "pannel"],['text' => "• قسم الادمن •", 'callback_data' => "lIllabbas"]],
[['text' => "• التعديلات •", 'callback_data' => "xxxtentacionllllo"]],
[['text' => "• كليشةه /start •", 'callback_data' => "editstart"]],
]])
]);   
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;
$message_id = $update->message->message_id;
$first_name = $message->from->first_name;
$username = $message->from->username;
//\\
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$chat= $update->channel_post->chat->id;
$name = $message->from->first_name;
$name_admen = $update->name_admen; 
$text1 = $update->channel_post->text;
$from_id = $update->channel_post->from->id;
$id_admen = $update->chat_member->from->id; 
$name_admen = $update->chat_member->from->first_name;
$user_admen = $update->chat_member->from->username;
$ban = $update->chat_member->new_chat_member->status;
$chatban = $update->chat_member->chat->id;
$ban_id = $update->chat_member->old_chat_member->user->id; 
$ban_name = $update->chat_member->old_chat_member->user->first_name;
$ban_user = $update->chat_member->old_chat_member->user->username;
$tt = json_decode(file_get_contents('php://input'))->my_chat_member->old_chat_member->can_promote_members; 
$ccc = json_decode(file_get_contents('php://input'))->my_chat_member->chat->id;
$admen = json_decode(file_get_contents('php://input'))->my_chat_member->from->id;
$ba = json_decode(file_get_contents('php://input'))->my_chat_member->new_chat_member->can_promote_members;
$viruss = json_encode(['message', 'edited_message', 'channel_post', 'edited_channel_post', 'inline_query', 'chosen_inline_result', 'callback_query', 'shipping_query', 'pre_checkout_query', 'poll', 'poll_answer', 'my_chat_member', 'chat_member']); file_get_contents("https://api.telegram.org/bot$token/setwebhook?max_connections=100&allowed_updates=" . $viruss . "&drop_pending_updates=true&url=https://$host");
//\\
$update->channel_post;
$chid = $update->channel_post->chat->id;
$chtext = $update->channel_post->text;
$messageid= $update->channel_post->message_id;
$document = $update->channel_post->document;
$sticker= $update->channel_post->sticker;
$photo= $update->channel_post->photo;
$video= $update->channel_post->video;
$forward= $update->channel_post->forward_from_chat;
$contact= $update->channel_post->contact;
$audio= $update->channel_post->audio;
//\\
$documents = "المتحركة";
$stickers = "الملصقات";
$photos = "الصور";
$videos = "الفيديو";
$forwards = "التوجيه";
$contacts = "المواقع";
$audios = "الصوت";
$links = "الروابط";
$usernames = "المعرفات";
//\\
mkdir ("data");
//\\

if($text == '/start'){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/gdydyk/2",
'caption'=>"*❍︙أهلا بك عزيزي ⦗ $name ⦘
❍︙في بوت حمايه القنوات من التفليش
❍︙اضف البوت إلى قناتك 
❍︙ثم قم بـرفعه ⦗ مشرف ⦘
❍︙ثم ارسل ⦗ تفعيل ⦘
❍︙قم بتفعيل جميع الصلاحيات للبوت
❍︙لكي يعمل بشكل صحيح وبدون مشاكل*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- الاوامر .' ,'callback_data'=>"cmd"],['text'=>'- حول .' ,'callback_data'=>"info"]],
[['text'=>"- قناة السورس .",'url'=>"t.me/rand2m"],['text'=>"- المطور .",'url'=>"t.me/r_3_j_f"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/SaveGroupTest_Bot?startchannel"]],
]])]);}
if($data == "back" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://t.me/gdydyk/2",
'caption'=>'*❍︙أهلا بك عزيزي ⦗ $name ⦘
❍︙في بوت حمايه القنوات من التفليش
❍︙اضف البوت إلى قناتك 
❍︙ثم قم بـرفعه ⦗ مشرف ⦘
❍︙ثم ارسل ⦗ تفعيل ⦘
❍︙قم بتفعيل جميع الصلاحيات للبوت
❍︙لكي يعمل بشكل صحيح وبدون مشاكل*',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- الاوامر .' ,'callback_data'=>"cmd"],['text'=>'- حول .' ,'callback_data'=>"info"]],
[['text'=>"- قناة السورس .",'url'=>"t.me/rand2m"],['text'=>"- المطور .",'url'=>"t.me/T_0_M0"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/SaveGroupTest_Bot?startchannel"]],
]])]);}
if($data == "info" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://t.me/gdydyk/2",
'caption'=>'*
╭────── • ◈ • ──────╮

◉ Dev ⊰ @r_3_j_f

◉ Channel ⊰ @rand2m

╰────── • ◈ • ──────╯
*',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- رجوع .",'callback_data'=>"back"]],
]])]);}
if($data == "cmd" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://t.me/gdydyk/2",
'caption'=>'*✰︙⦗ م1 ⦘ اوامر حمايه القناة
✰︙⦗ م2 ⦘ اوامر الحماية من التفليش
*',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"⦗ م1 ⦘",'callback_data'=>"m1"],['text'=>"⦗ م2 ⦘",'callback_data'=>"m2"]],
[['text'=>"- رجوع .",'callback_data'=>"back"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/SaveGroupTest_Bot?startchannel"]],
]])]);}
if($data == "m1" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://t.me/gdydyk/2",
'caption'=>'*
✰︙❨ م1 ❩ اوامر حماية القناه ↡↡
𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
✰︙ قفل ⊰ فتح + الامر 
𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
✰︙ المتحركه
✰︙ الملصقات
✰︙الصور
✰︙الفيديوهات
✰︙ التوجيه
✰︙ المواقع
✰︙ الصوت
✰︙ الروابط
✰︙ المعرفات
𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
*',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- رجوع .",'callback_data'=>"cmd"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/SaveGroupTest_Bot?startchannel"]],
]])]);}
if($data == "m2" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://t.me/gdydyk/2",
'caption'=>'*
✰︙❨ م2 ❩ اوامر حماية القناه من التفليش ↡↡
𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
✰︙اولا ارسل تفعيل لكي يعمل بنجاح
✰︙ ارسل /admin ثم ايدي العضو
✰︙ مثال /admin 1427981991
*',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- رجوع .",'callback_data'=>"cmd"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/SaveGroupTest_Bot?startchannel"]],
]])]);}

if($ccc and $tt){
bot('sendmessage',[
'chat_id'=>$ccc,
'text'=>"- ارفع البوت بصلاحيه اضافه مشرفين ثم اضفني مره اخره ."]); 
bot('leaveChat',[
'chat_id'=>$ccc
]);
}
if($ccc and $ba){
} else{ 
if($ccc){
bot('sendmessage',[
'chat_id'=>$ccc,
'text'=>"- ارفع البوت بصلاحيه اضافه مشرفين ثم اضفني مره اخره ."]); 
bot('leaveChat',[
'chat_id'=>$ccc
]);
}} 
if($ban=="kicked"){
bot('sendmessage',[
'chat_id'=>$chatban, 
'text'=>"
ٴ𓏳𓏳𓏳𓏳 ❲ @rand2m ❳ 𓏳𓏳𓏳𓏳

- تم حظر عضو بواسطه احد المشرفين  . 
 
- العضو المحظور 😔 . 

- يوزره  : @$ban_user . 
 
- الاسم : $ban_name . 

- الايدي : $ban_id . 

- رابط حساب العضو 𐏒𐏒 . 

- tg://openmessage?user_id=$ban_id  . 

ٴ𓏳𓏳𓏳𓏳 ❲ @rand2m ❳ 𓏳𓏳𓏳𓏳
"
]);
bot('promoteChatMember',[
'user_id'=>$id_admen,
'chat_id'=>$chatban, 
"can_change_info"=>false, 
"can_post_messages"=>false, 
"can_edit_messages"=>false, 
"can_delete_messages"=>false, 
"can_invite_users"=>false, 
"can_restrict_members"=>false, 
"can_pin_messages"=>false, 
"can_manage_video_chats"=>false, 
"can_promote_members"=>false
]); 
bot('sendmessage',[
'chat_id'=>$chatban, 
'text'=>"
ٴ𓏳𓏳𓏳𓏳 ❲ @rand2m ❳ 𓏳𓏳𓏳𓏳

- عزيزي المالك .

- لقد قام $name_admen بطرد عضو .

- يوزر المشرف : @$user_admen .
-
- ايدي المشرف  : $id_admen . 

- رابط حساب المشرف 𐏒𐏒 . 

- tg://openmessage?user_id=$id_admen . 

- وقمت بتنزيله من الادمنيه للأمان .

ٴ𓏳𓏳𓏳𓏳 ❲ @rand2m ❳ 𓏳𓏳𓏳𓏳
"
]);
}



function GTC($cid){
    $response = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=".$cid));
    if (isset($response->result)) {
        foreach ($response->result as $admin) {
            if ($admin->status == "creator") {
                return isset($admin->user->last_name) ? $admin->user->first_name . " " . $admin->user->last_name : $admin->user->first_name;
            }
        }
    }
    return null;
}

function GTS($cid){
    $response = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$cid));
    if (isset($response->result)) {
        return isset($response->result->last_name) ? $response->result->first_name . " " . $response->result->last_name : $response->result->first_name;
    }
    return null;
}


$update = json_decode(file_get_contents("php://input"));
if (isset($update->channel_post)) {
    $text1 = $update->channel_post->text ?? null;
    $chat = $update->channel_post->chat->id ?? null;
    $author_signature = $update->channel_post->author_signature ?? null;
}

// معالجة أمر /admin
if (!empty($text1) && strpos($text1, "/admin ") === 0) {
    $admen = str_replace("/admin ", "", $text1);
    $creator = GTC($chat);
    $channel_name = GTS($chat);
    
    if ($author_signature === $creator) {
        $response = bot('promoteChatMember', [
            'chat_id' => $chat,
            'user_id' => $admen,
            "can_change_info" => false,
            "can_post_messages" => true,
            "can_edit_messages" => false,
            "can_delete_messages" => false,
            "can_invite_users" => true,
            "can_restrict_members" => false,
            "can_pin_messages" => true,
            "can_manage_video_chats" => true,
            "can_promote_members" => false
        ]);
        
        if ($response->ok) {
            bot('sendMessage', [
                'chat_id' => $chat,
                'text' => "- تم رفع المستخدم ($admen) إلى أدمن بنجاح."
            ]);
        } else {
            bot('sendMessage', [
                'chat_id' => $chat,
                'text' => "- حدث خطأ أثناء الترقية: "
            ]);
        }
    } else {
        bot('sendMessage', [
            'chat_id' => $chat,
            'text' => "- ليس لديك صلاحية الترقية."
        ]);
    }
}



if($text1 == "تنزيل الكل"){
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=$chat"),true);
$result = $up["result"];
foreach($result as $key=>$value){
$found = $result[$key]["status"];
if($found == "creator"){
$owner = $result[$key]["user"]["id"];
$owner2 = $result[$key]["user"]["id"];
}
if($found == "administrator"){
if($result[$key]["user"]["first_name"] == true){
$innames = str_replace(['[',']'],'',$result[$key]["user"]["id"]);
$msg = $msg.""."virus"."$innames";
}
}
}
$virus = explode("virus","$msg");
foreach($virus as $i){
bot('promoteChatMember',[
'user_id'=>$i, 
'chat_id'=>$chat, 
"can_change_info"=>false, 
"can_post_messages"=>false, 
"can_edit_messages"=>false, 
"can_delete_messages"=>false, 
"can_invite_users"=>false, 
"can_restrict_members"=>false, 
"can_pin_messages"=>false, 
"can_promote_members"=>false
]); 
}
bot('sendmessage',[
'chat_id'=>$chat,
'text'=>"- تم تنزيل جميع الادمنيه المرفوعين عبر البوت ."
]); 
}

$json_security_channels = json_decode(file_get_contents("data/$chid.json"),true);
if($json_security_channels["lock"]["document"] == "close"){
if(isset($document )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["sticker"] == "close"){
if(isset($sticker )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["photo"] == "close"){
if(isset($photo )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["video"] == "close"){
if(isset($video )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["forward"] == "close"){
if(isset($forward )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["contact"] == "close"){
if(isset($contact )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["audio"] == "close"){
if(isset($audio )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["link"] == "close"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$update->channel_post->text)){
bot('deleteMessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["username"] == "close"){
if (strstr($text ,"@") == true or strstr($caption,"@") == true) {
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($chtext == "تفعيل" ){
$json_security_channels = '{"lock": {"document": "open" "username": "open" "photo": "open" "link": "open" "video": "open" "forward": "open" "contact": "open" "audio": "open" "sticker": "open"},}';
$json_security_channels = json_decode($json_security_channels,true);
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"
⏎︙تم تفعيل البوت في القناة
⏎︙ايدي القناة `$chid`
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الصور" ){
$json_security_channels["lock"]["photo"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم قفل $photos بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الصور" ){
$json_security_channels["lock"]["photo"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم فتح $photos بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الفيديو" ){
$json_security_channels["lock"]["video"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم قفل $videos بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الفيديو" ){
$json_security_channels["lock"]["video"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم فتح $videos بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الملصقات" ){
$json_security_channels["lock"]["sticker"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم قفل $stickers بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الملصقات" ){
$json_security_channels["lock"]["sticker"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم فتح $stickers بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل المتحركة" ){
$json_security_channels["lock"]["document"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم قفل $documents بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح المتحركة" ){
$json_security_channels["lock"]["document"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم فتح $documents بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل التوجيه" ){
$json_security_channels["lock"]["forward"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم قفل $forwards بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح التوجيه" ){
$json_security_channels["lock"]["forward"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم فتح $forwards بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الصوت" ){
$json_security_channels["lock"]["audio"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم قفل $audios بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الصوت" ){
$json_security_channels["lock"]["audio"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم فتح $audios بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الموقع" ){
$json_security_channels["lock"]["contact"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم قفل $contacts بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الموقع" ){
$json_security_channels["lock"]["contact"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم فتح $contacts بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الروابط" ){
$json_security_channels["lock"]["link"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم قفل $links بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الروابط" ){
$json_security_channels["lock"]["link"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم فتح $links بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل المعرفات" ){
$json_security_channels["lock"]["username"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم قفل $usernames بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح المعرفات" ){
$json_security_channels["lock"]["username"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"❍ تم فتح $usernames بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}