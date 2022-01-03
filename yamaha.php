<?php @system("clear");
$b = "[0;92m";
echo "$b          
█ SCRIPT FOR FAST FARMING AND EARNING";
echo "
█ Version: V7.5";
echo "
█ Script Service Commission: 0.50 Gem";
echo "
█•ERROR FIXED ✓ | •BUG FIXED ✓ | •MULTIPLE POSTS ✓█•AUTO MOMENT✓";
$green = "\e[1;31m";
echo "$green
";
echo "==================================================
LYKA SCRIPT FOR FAST FARMING
==================================================
( 4 Main Username )
( 10 Posts Required )
==================================================
✓ 100% NO HACKING PLUG!!
✓ Auto Moments
✓ Auto POSTS
✓ Auto Max Rate
✓ Auto Harvest
✓ Dummy Account Protection
✓ Main Account Protection
✓ No Wallet/Account Deactivate
✓ 100% Safe and Secured
==================================================";
$aw = "\e[1;36m";
echo "$aw
";
$rhons = uniqid();
$dummyarray = [];
$NoofDum = readline('Enter Dummy Count: ');
$ow = "\e[0;92m";
echo "$ow
";
for ($x = 0;$x < $NoofDum;$x++) {
    $Dummy = readline('Enter Dummy Username: ');
    array_push($dummyarray, "$Dummy",);
}
$red = "\e[1;33m";
echo "$red
";
$pass = readline('Enter Dummy Password: ');
$green = "\e[1;31m";
echo "$green
";
echo "
___________________________________________

Enter 4 Main Username ( 10 Post Required )
___________________________________________";
$yellow = "\e[1;97m";
echo "$yellow
";
$user2 = readline('MAIN 1 UN: ');
$user322 = readline('MAIN 2 UN: ');
$user122 = readline('MAIN 3 UN: ');
$user022 = readline('MAIN 4 UN: ');
$ow = "\e[0;92m";
echo "$ow
";
foreach ($dummyarray as $user) {
    $green = "[1;32m";
    echo "$green";
    sleep(0);
    $urll = "https://identity.mylykaapps.com/useraccounts/login";
    $curll = curl_init($urll);
    curl_setopt($curll, CURLOPT_URL, $urll);
    curl_setopt($curll, CURLOPT_POST, true);
    curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
    $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
    curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
    $dataa = <<<DATA
{
  "countryCode": "US",
  "device": {
    "deviceId": "$rhons",
    "deviceImei": "$rhons",
    "deviceModel": "Unknown",
    "deviceName": "android",
    "deviceOs": "Android 12",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
    "osVersion": "28"
  },
  "password": "$pass",
  "username": "$user"
}
DATA;
    curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
    $respp = curl_exec($curll);
    curl_close($curll);
    //var_dump($respp);
    $psycho = 700016885784;
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    $status = $jsonn->status;
    echo "$msgn
";
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    echo "$vuser was logged in
";
    $url = "https://users.mylykaapps.com/api/v3/Users/FollowUser";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array("authorization:Bearer $bearer", "user-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30))", "deviceos: android", "Content-Type: application/json",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA
{
  "device": {
    "deviceId": "¶9,3æ25b1`๖ۣۜT๖ۣۜ¶ec18",
    "deviceImei": "¶๖ۣۜT๖ۣۜ¶`fa52ec18",
    "deviceModel": "Realme GT Edition",
    "deviceName": "android",
    "deviceOs": "Android Q",
    "isEmulator": false,
    "osVersion": "30"
  },
  "group": "",
  "userId": $psycho
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $resp = curl_exec($curl);
    curl_close($curl);
    //var_dump($resp);
    $json = json_decode($resp);
    echo "Following
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
        $headersd = array("authorization: Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)",);
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
    $headers = array("authorization:Bearer $bearer", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA
{
  "device": {
    "deviceId": "v04n18m16m22e",
    "deviceImei": "v04n18m16m22e¶",
    "deviceModel": "Xiaomi Redmi Note 5",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
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
    echo $json->message;
    $yellow = "\e[1;97m";
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
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "4c8a๖ۣۜT๖ۣۜ1d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android ŪTĪ",
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
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "4¶cda48a×39f5¶ë",
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
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "4cda48a391d1f5eë",
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
    $yellow = "\e[1;97m";
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
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "4cd8a391d1f5eë",
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
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $var_v04n18m16m22e = 0.50;
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
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "4cda48a391d1f5eë",
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
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "4cda48a391d1f5eë",
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
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "4cda48a391d1f5eë",
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
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $ulD = 700012840455;
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
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "4cda48a3ē1d1f5eë",
      "deviceName": "Realme C21",
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
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
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
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl110 = curl_init($url);
    curl_setopt($curl110, CURLOPT_URL, $url);
    curl_setopt($curl110, CURLOPT_POST, true);
    curl_setopt($curl110, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl110, CURLOPT_HTTPHEADER, $headers);
    $data110 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "©®",
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
    curl_setopt($curl110, CURLOPT_POSTFIELDS, $data110);
    $resp110 = curl_exec($curl110);
    curl_close($curl110);
    //var_dump($resp2);
    $json110 = json_decode($resp110);
    echo $json110->message;
    echo "
";
    echo "=========================================";
    $e = "[1;32m";
    echo "$e";
    //  $';
    echo "$ow";
    echo "
$vuser is RATING $user022
";
    $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$user022&os=android&pageIndex=1&pageSize=16";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $buid = $jsonm["data"]["0"]["id"];
    $bvvuser = $jsonm["data"]["0"]["userName"];
    //cho $bvvuser;
    //echo $buid;
    if ($user022 == $bvvuser) {
        $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$buid&category=ALL";
        $curld = curl_init($urld);
        curl_setopt($curld, CURLOPT_URL, $urld);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $headersd = array("authorization: Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)",);
        curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
        $respd = curl_exec($curld);
        curl_close($curld);
        $jsond = json_decode($respd, true);
        //var_dump($respd,true);
        $arr = json_decode($respd, true);
        $op0 = $arr["data"]["0"]["id"];
        $op1 = $arr["data"]["1"]["id"];
        $op2 = $arr["data"]["2"]["id"];
        $op3 = $arr["data"]["3"]["id"];
        $op4 = $arr["data"]["4"]["id"];
        $op5 = $arr["data"]["5"]["id"];
        $op6 = $arr["data"]["6"]["id"];
        $op7 = $arr["data"]["7"]["id"];
        $op8 = $arr["data"]["8"]["id"];
        $op9 = $arr["data"]["9"]["id"];
    }
    $stat = $arr["status"];
    //echo $stat;
    if ($stat == 0) {
        echo "check your inputs
";
    } elseif ($stat == 1) $e = "\e[0;92m";
    echo "$e";
    sleep(1);
    $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array("authorization:Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30))", "deviceos: android Q", "Content-Type: application/json",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op0,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $resp = curl_exec($curl);
    curl_close($curl);
    //var_dump($resp);
    $json = json_decode($resp);
    echo $json->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl2 = curl_init($url);
    curl_setopt($curl2, CURLOPT_URL, $url);
    curl_setopt($curl2, CURLOPT_POST, true);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers);
    $data2 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme CII",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op1,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl2, CURLOPT_POSTFIELDS, $data2);
    $resp2 = curl_exec($curl2);
    curl_close($curl2);
    //var_dump($resp2);
    $json2 = json_decode($resp2);
    echo $json2->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl3 = curl_init($url);
    curl_setopt($curl3, CURLOPT_URL, $url);
    curl_setopt($curl3, CURLOPT_POST, true);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_HTTPHEADER, $headers);
    $data3 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C1",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op2,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl3, CURLOPT_POSTFIELDS, $data3);
    $resp3 = curl_exec($curl3);
    curl_close($curl3);
    //var_dump($resp2);
    $json3 = json_decode($resp3);
    echo $json3->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl4 = curl_init($url);
    curl_setopt($curl4, CURLOPT_URL, $url);
    curl_setopt($curl4, CURLOPT_POST, true);
    curl_setopt($curl4, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl4, CURLOPT_HTTPHEADER, $headers);
    $data4 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C2",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op3,
  "rate": 5,
   "userid": $buid 
}
DATA;
    curl_setopt($curl4, CURLOPT_POSTFIELDS, $data4);
    $resp4 = curl_exec($curl4);
    curl_close($curl4);
    //var_dump($resp2);
    $json4 = json_decode($resp4);
    echo $json4->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl5 = curl_init($url);
    curl_setopt($curl5, CURLOPT_URL, $url);
    curl_setopt($curl5, CURLOPT_POST, true);
    curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl5, CURLOPT_HTTPHEADER, $headers);
    $data5 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C3",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op4,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl5, CURLOPT_POSTFIELDS, $data5);
    $resp5 = curl_exec($curl5);
    curl_close($curl5);
    //var_dump($resp2);
    $json5 = json_decode($resp5);
    echo $json5->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl6 = curl_init($url);
    curl_setopt($curl6, CURLOPT_URL, $url);
    curl_setopt($curl6, CURLOPT_POST, true);
    curl_setopt($curl6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl6, CURLOPT_HTTPHEADER, $headers);
    $data6 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C4",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op5,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl6, CURLOPT_POSTFIELDS, $data6);
    $resp6 = curl_exec($curl6);
    curl_close($curl6);
    //var_dump($resp2);
    $json6 = json_decode($resp6);
    echo $json6->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl7 = curl_init($url);
    curl_setopt($curl7, CURLOPT_URL, $url);
    curl_setopt($curl7, CURLOPT_POST, true);
    curl_setopt($curl7, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl7, CURLOPT_HTTPHEADER, $headers);
    $data7 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C5",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op6,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl7, CURLOPT_POSTFIELDS, $data7);
    $resp7 = curl_exec($curl7);
    curl_close($curl7);
    //var_dump($resp2);
    $json7 = json_decode($resp7);
    echo $json7->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl8 = curl_init($url);
    curl_setopt($curl8, CURLOPT_URL, $url);
    curl_setopt($curl8, CURLOPT_POST, true);
    curl_setopt($curl8, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl8, CURLOPT_HTTPHEADER, $headers);
    $data8 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C6",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op7,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl8, CURLOPT_POSTFIELDS, $data8);
    $resp8 = curl_exec($curl8);
    curl_close($curl8);
    //var_dump($resp2);
    $json8 = json_decode($resp8);
    echo $json8->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl9 = curl_init($url);
    curl_setopt($curl9, CURLOPT_URL, $url);
    curl_setopt($curl9, CURLOPT_POST, true);
    curl_setopt($curl9, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl9, CURLOPT_HTTPHEADER, $headers);
    $data9 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C7",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op8,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl9, CURLOPT_POSTFIELDS, $data9);
    $resp9 = curl_exec($curl9);
    curl_close($curl9);
    //var_dump($resp2);
    $json9 = json_decode($resp9);
    echo $json9->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl10 = curl_init($url);
    curl_setopt($curl10, CURLOPT_URL, $url);
    curl_setopt($curl10, CURLOPT_POST, true);
    curl_setopt($curl10, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl10, CURLOPT_HTTPHEADER, $headers);
    $data10 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C8",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op9,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl10, CURLOPT_POSTFIELDS, $data10);
    $resp10 = curl_exec($curl10);
    curl_close($curl10);
    //var_dump($resp2);
    $json10 = json_decode($resp10);
    echo $json10->message;
    echo "
";
    echo "=====================================================";
    $l = " \e[0;92m";
    echo "$l";
    //  $';
    $ow = "\e[0;92m";
    echo "$ow";
    echo "
$vuser is RATING $user122
";
    $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$user122&os=android&pageIndex=1&pageSize=16";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $fuid = $jsonm["data"]["0"]["id"];
    $fvvuser = $jsonm["data"]["0"]["userName"];
    //cho $fvvuser;
    //echo $fuid;
    if ($user122 == $fvvuser) {
        $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$fuid&category=ALL";
        $curld = curl_init($urld);
        curl_setopt($curld, CURLOPT_URL, $urld);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $headersd = array("authorization: Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)",);
        curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
        $respd = curl_exec($curld);
        curl_close($curld);
        $jsond = json_decode($respd, true);
        //var_dump($respd,true);
        $arr = json_decode($respd, true);
        $lp0 = $arr["data"]["0"]["id"];
        $lp1 = $arr["data"]["1"]["id"];
        $lp2 = $arr["data"]["2"]["id"];
        $lp3 = $arr["data"]["3"]["id"];
        $lp4 = $arr["data"]["4"]["id"];
        $lp5 = $arr["data"]["5"]["id"];
        $lp6 = $arr["data"]["6"]["id"];
        $lp7 = $arr["data"]["7"]["id"];
        $lp8 = $arr["data"]["8"]["id"];
        $lp9 = $arr["data"]["9"]["id"];
    }
    $stat = $arr["status"];
    //echo $stat;
    if ($stat == 0) {
        echo "check your inputs
";
    } elseif ($stat == 1) $e = "\e[0;92m";
    echo "$e";
    sleep(1);
    $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array("authorization:Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30))", "deviceos: android Q", "Content-Type: application/json",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data0 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
 },
  "postId": $lp0,
  "rate": 5,
  "userid": $fuid
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data0);
    $resp = curl_exec($curl);
    curl_close($curl);
    //var_dump($resp);
    $json = json_decode($resp);
    echo $json->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl2 = curl_init($url);
    curl_setopt($curl2, CURLOPT_URL, $url);
    curl_setopt($curl2, CURLOPT_POST, true);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers);
    $data2 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName":"Realme 1",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp1,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl2, CURLOPT_POSTFIELDS, $data2);
    $resp2 = curl_exec($curl2);
    curl_close($curl2);
    //var_dump($resp2);
    $json2 = json_decode($resp2);
    echo $json2->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl3 = curl_init($url);
    curl_setopt($curl3, CURLOPT_URL, $url);
    curl_setopt($curl3, CURLOPT_POST, true);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_HTTPHEADER, $headers);
    $data3 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme 2",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp2,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl3, CURLOPT_POSTFIELDS, $data3);
    $resp3 = curl_exec($curl3);
    curl_close($curl3);
    //var_dump($resp2);
    $json3 = json_decode($resp3);
    echo $json3->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl4 = curl_init($url);
    curl_setopt($curl4, CURLOPT_URL, $url);
    curl_setopt($curl4, CURLOPT_POST, true);
    curl_setopt($curl4, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl4, CURLOPT_HTTPHEADER, $headers);
    $data4 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme 3",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp3,
  "rate": 5,
   "userid": $fuid 
}
DATA;
    curl_setopt($curl4, CURLOPT_POSTFIELDS, $data4);
    $resp4 = curl_exec($curl4);
    curl_close($curl4);
    //var_dump($resp2);
    $json4 = json_decode($resp4);
    echo $json4->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl5 = curl_init($url);
    curl_setopt($curl5, CURLOPT_URL, $url);
    curl_setopt($curl5, CURLOPT_POST, true);
    curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl5, CURLOPT_HTTPHEADER, $headers);
    $data5 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme 4",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp4,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl5, CURLOPT_POSTFIELDS, $data5);
    $resp5 = curl_exec($curl5);
    curl_close($curl5);
    //var_dump($resp2);
    $json5 = json_decode($resp5);
    echo $json5->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl6 = curl_init($url);
    curl_setopt($curl6, CURLOPT_URL, $url);
    curl_setopt($curl6, CURLOPT_POST, true);
    curl_setopt($curl6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl6, CURLOPT_HTTPHEADER, $headers);
    $data6 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme 5",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp5,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl6, CURLOPT_POSTFIELDS, $data6);
    $resp6 = curl_exec($curl6);
    curl_close($curl6);
    //var_dump($resp2);
    $json6 = json_decode($resp6);
    echo $json6->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl7 = curl_init($url);
    curl_setopt($curl7, CURLOPT_URL, $url);
    curl_setopt($curl7, CURLOPT_POST, true);
    curl_setopt($curl7, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl7, CURLOPT_HTTPHEADER, $headers);
    $data7 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme 6",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp6,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl7, CURLOPT_POSTFIELDS, $data7);
    $resp7 = curl_exec($curl7);
    curl_close($curl7);
    //var_dump($resp2);
    $json7 = json_decode($resp7);
    echo $json7->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl8 = curl_init($url);
    curl_setopt($curl8, CURLOPT_URL, $url);
    curl_setopt($curl8, CURLOPT_POST, true);
    curl_setopt($curl8, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl8, CURLOPT_HTTPHEADER, $headers);
    $data8 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C7",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp7,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl8, CURLOPT_POSTFIELDS, $data8);
    $resp8 = curl_exec($curl8);
    curl_close($curl8);
    //var_dump($resp2);
    $json8 = json_decode($resp8);
    echo $json8->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl9 = curl_init($url);
    curl_setopt($curl9, CURLOPT_URL, $url);
    curl_setopt($curl9, CURLOPT_POST, true);
    curl_setopt($curl9, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl9, CURLOPT_HTTPHEADER, $headers);
    $data9 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme 8",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp8,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl9, CURLOPT_POSTFIELDS, $data9);
    $resp9 = curl_exec($curl9);
    curl_close($curl9);
    //var_dump($resp2);
    $json9 = json_decode($resp9);
    echo $json9->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl10 = curl_init($url);
    curl_setopt($curl10, CURLOPT_URL, $url);
    curl_setopt($curl10, CURLOPT_POST, true);
    curl_setopt($curl10, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl10, CURLOPT_HTTPHEADER, $headers);
    $data10 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme 9",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp9,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl10, CURLOPT_POSTFIELDS, $data10);
    $resp10 = curl_exec($curl10);
    curl_close($curl10);
    //var_dump($resp2);
    $json10 = json_decode($resp10);
    echo $json10->message;
    echo "
";
    echo "=====================================================";
    $y = "\e[0;92m";
    echo "$y";
    //  $';
    $ow = "\e[0;92m";
    echo "$ow";
    echo "
$vuser is RATING $user322
";
    $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$user322&os=android&pageIndex=1&pageSize=16";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $huid = $jsonm["data"]["0"]["id"];
    $hvvuser = $jsonm["data"]["0"]["userName"];
    //cho $hvvuser;
    //echo $huid;
    if ($user322 == $hvvuser) {
        $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$huid&category=ALL";
        $curld = curl_init($urld);
        curl_setopt($curld, CURLOPT_URL, $urld);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $headersd = array("authorization: Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)",);
        curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
        $respd = curl_exec($curld);
        curl_close($curld);
        $jsond = json_decode($respd, true);
        //var_dump($respd,true);
        $arr = json_decode($respd, true);
        $hp0 = $arr["data"]["0"]["id"];
        $hp1 = $arr["data"]["1"]["id"];
        $hp2 = $arr["data"]["2"]["id"];
        $hp3 = $arr["data"]["3"]["id"];
        $hp4 = $arr["data"]["4"]["id"];
        $hp5 = $arr["data"]["5"]["id"];
        $hp6 = $arr["data"]["6"]["id"];
        $hp7 = $arr["data"]["7"]["id"];
        $hp8 = $arr["data"]["8"]["id"];
        $hp9 = $arr["data"]["9"]["id"];
    }
    $stat = $arr["status"];
    //echo $stat;
    if ($stat == 0) {
        echo "check your inputs
";
    } elseif ($stat == 1) $e = "\e[0;92m";
    echo "$e";
    sleep(1);
    $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array("authorization:Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30))", "deviceos: android Q", "Content-Type: application/json",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data0 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp0,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data0);
    $resp = curl_exec($curl);
    curl_close($curl);
    //var_dump($resp);
    $json = json_decode($resp);
    echo $json->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl2 = curl_init($url);
    curl_setopt($curl2, CURLOPT_URL, $url);
    curl_setopt($curl2, CURLOPT_POST, true);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers);
    $data2 = <<<DATA
{
  
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp1,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl2, CURLOPT_POSTFIELDS, $data2);
    $resp2 = curl_exec($curl2);
    curl_close($curl2);
    //var_dump($resp2);
    $json2 = json_decode($resp2);
    echo $json2->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl3 = curl_init($url);
    curl_setopt($curl3, CURLOPT_URL, $url);
    curl_setopt($curl3, CURLOPT_POST, true);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_HTTPHEADER, $headers);
    $data3 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp2,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl3, CURLOPT_POSTFIELDS, $data3);
    $resp3 = curl_exec($curl3);
    curl_close($curl3);
    //var_dump($resp2);
    $json3 = json_decode($resp3);
    echo $json3->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $css = 0.50;
    sleep(1);
    $curl4 = curl_init($url);
    curl_setopt($curl4, CURLOPT_URL, $url);
    curl_setopt($curl4, CURLOPT_POST, true);
    curl_setopt($curl4, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl4, CURLOPT_HTTPHEADER, $headers);
    $data4 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp3,
  "rate": 5,
   "userid": $huid 
}
DATA;
    curl_setopt($curl4, CURLOPT_POSTFIELDS, $data4);
    $resp4 = curl_exec($curl4);
    curl_close($curl4);
    //var_dump($resp2);
    $json4 = json_decode($resp4);
    echo $json4->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl5 = curl_init($url);
    curl_setopt($curl5, CURLOPT_URL, $url);
    curl_setopt($curl5, CURLOPT_POST, true);
    curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl5, CURLOPT_HTTPHEADER, $headers);
    $data5 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp4,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl5, CURLOPT_POSTFIELDS, $data5);
    $resp5 = curl_exec($curl5);
    curl_close($curl5);
    //var_dump($resp2);
    $json5 = json_decode($resp5);
    echo $json5->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl6 = curl_init($url);
    curl_setopt($curl6, CURLOPT_URL, $url);
    curl_setopt($curl6, CURLOPT_POST, true);
    curl_setopt($curl6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl6, CURLOPT_HTTPHEADER, $headers);
    $data6 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp5,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl6, CURLOPT_POSTFIELDS, $data6);
    $resp6 = curl_exec($curl6);
    curl_close($curl6);
    //var_dump($resp2);
    $json6 = json_decode($resp6);
    echo $json6->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl7 = curl_init($url);
    curl_setopt($curl7, CURLOPT_URL, $url);
    curl_setopt($curl7, CURLOPT_POST, true);
    curl_setopt($curl7, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl7, CURLOPT_HTTPHEADER, $headers);
    $data7 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp6,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl7, CURLOPT_POSTFIELDS, $data7);
    $resp7 = curl_exec($curl7);
    curl_close($curl7);
    //var_dump($resp2);
    $json7 = json_decode($resp7);
    echo $json7->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl8 = curl_init($url);
    curl_setopt($curl8, CURLOPT_URL, $url);
    curl_setopt($curl8, CURLOPT_POST, true);
    curl_setopt($curl8, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl8, CURLOPT_HTTPHEADER, $headers);
    $data8 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp7,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl8, CURLOPT_POSTFIELDS, $data8);
    $resp8 = curl_exec($curl8);
    curl_close($curl8);
    //var_dump($resp2);
    $json8 = json_decode($resp8);
    echo $json8->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl9 = curl_init($url);
    curl_setopt($curl9, CURLOPT_URL, $url);
    curl_setopt($curl9, CURLOPT_POST, true);
    curl_setopt($curl9, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl9, CURLOPT_HTTPHEADER, $headers);
    $data9 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp8,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl9, CURLOPT_POSTFIELDS, $data9);
    $resp9 = curl_exec($curl9);
    curl_close($curl9);
    //var_dump($resp2);
    $json9 = json_decode($resp9);
    echo $json9->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl10 = curl_init($url);
    curl_setopt($curl10, CURLOPT_URL, $url);
    curl_setopt($curl10, CURLOPT_POST, true);
    curl_setopt($curl10, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl10, CURLOPT_HTTPHEADER, $headers);
    $data10 = <<<DATA
{
	
  "device": {
    "deviceId": "$rhons",
      "deviceImei": "$rhons",
      "deviceModel": "$rhons",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp9,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl10, CURLOPT_POSTFIELDS, $data10);
    $resp10 = curl_exec($curl10);
    curl_close($curl10);
    //var_dump($resp2);
    $json10 = json_decode($resp10);
    echo $json10->message;
    echo "
";
$red= " \e[1;31m";
echo"$red";
echo"
";
echo"
=====================================================";
echo"
$vuser, Uploading Posts and Moments please wait...";
echo "
";
$ow = "\e[0;92m";
echo "$ow
";
$device_id = uniqid();
addpost($bearer);
echo"
";
addMoments($vuser, $bearer, $device_id);   echo "
";
$device_id = uniqid();
addpost($bearer);
echo"
";
addMoments($vuser, $bearer, $device_id);   echo "
";
$device_id = uniqid();
addpost($bearer);
echo"
";
addMoments($vuser, $bearer, $device_id);   echo "
";
$device_id = uniqid();
addpost($bearer);
echo"
";
addMoments($vuser, $bearer, $device_id);   echo "
";
$device_id = uniqid();
addpost($bearer);
echo"
";
addMoments($vuser, $bearer, $device_id);   echo "
";
$device_id = uniqid();
addpost($bearer);
echo"
";
addMoments($vuser, $bearer, $device_id);   echo "
";
$device_id = uniqid();
addpost($bearer);
echo"
";
addMoments($vuser, $bearer, $device_id);   echo "
";
$device_id = uniqid();
addpost($bearer);
echo"
";
addMoments($vuser, $bearer, $device_id);   echo "
";
$device_id = uniqid();
addpost($bearer);
echo"
";
addMoments($vuser, $bearer, $device_id);   echo "
";
$device_id = uniqid();
addpost($bearer);
echo"
";
addMoments($vuser, $bearer, $device_id);   echo "
";
$b = "[0;92m";
echo "$b";
echo"
";
    $urlbals = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
    $curlbals = curl_init($urlbals);
    curl_setopt($curlbals, CURLOPT_URL, $urlbals);
    curl_setopt($curlbals, CURLOPT_POST, true);
    curl_setopt($curlbals, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlbals, CURLOPT_HTTPHEADER, $headers);
    $databals = '{"amount":"' . $var_v04n18m16m22e . '","device":{"deviceId": "$rhons","deviceImei": "$rhons","deviceModel": "$rhons","deviceName": "Realme F","deviceOs": "Android Q","isEmulator": false,"notificationToken": "eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR","osVersion": "30"},"recipientId":' . $ulD . '}';
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
    $databals = '{"amount":"' . $tg2 . '","device":{"deviceId":"$rhons","deviceImei":"$rhons","deviceModel":"$rhons","deviceName":"android","deviceOs":"Android O_MR1","isEmulator":false,"notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR","osVersion":"28"},"recipientId":' . $uid . '}';
    curl_setopt($curlbals, CURLOPT_POSTFIELDS, $databals);
    $respbals = curl_exec($curlbals);
    curl_close($curlbals);
    //var_dump($respbals);
    $jsonbals = json_decode($respbals);
    echo $jsonbals->message;
    echo "
";
    echo "=====================================================";
    $yellow = "\e[0;92m";
    echo "$yellow";
    echo "
";
}
       function addpost($bearer){
	   $imageurlpost = array("https://i.natgeofe.com/n/cce82c9b-ffc9-4349-b8aa-f14acf3319f2/departments-covid-animals-tiger.jpg","https://static.scientificamerican.com/sciam/cache/file/4F0AC360-0682-4395-A6C251B93F86490B.jpg","https://media.4-paws.org/5/5/7/b/557bed9c54616186a9592cbaa267078cbccb6d21/VIER%20PFOTEN_2016-11-17_009-1667x1153.jpg","https://awionline.org/sites/default/files/inline-images/on_the_farm_shutterstock_549039751.jpg","https://www.doi.gov/sites/doi.gov/files/uploads/DenaliMooseJacobWFrankNPS.jpg","https://files.worldwildlife.org/wwfcmsprod/images/HERO_Tiger_Grass_WEB_ONLY_thru_12_31_2017/story_full_width/3h25qlvlxb_20150513_JWA7615_web.jpg","https://cms.bbcearth.com/sites/default/files/2021-02/2g24k0k80001000.png","https://api.timeforkids.com/wp-content/uploads/2020/08/animalVoting.jpg","https://www.iata.org/contentassets/d7c512eb9a704ba2a8056e3186a31921/cargo_live_animals_parrot.jpg","https://awionline.org/sites/default/files/inline-images/breeding_shutterstock_37763392.jpg","https://media.cntraveler.com/photos/5ee3b2746a4485f69c71602d/master/pass/LisaBeach-DisneyAnimalKingdom-2020.jpg","https://nu.aeon.co/images/07a29db9-a3f0-4c86-8d36-2a6decd4faf6/header_essay-final-1503740.jpg","https://ideas.ted.com/wp-content/uploads/sites/3/2019/05/featured_art_hyena_istock.jpg","https://www.news-medical.net/image.axd?picture=2021%2F7%2Fshutterstock_1117114010.jpg","https://media.npr.org/assets/img/2021/09/09/gettyimages-1309446225-edit_custom-57c4c95e21d9152f06837fae9839ac1b324291d7-s1100-c50.jpg","https://files.worldwildlife.org/wwfcmsprod/images/giant_panda_25790/story_full_width/7r8neqq0pl_SCR_257590.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/20190503-delish-pineapple-baked-salmon-horizontal-ehg-450-1557771120.jpg","https://health.clevelandclinic.org/wp-content/uploads/sites/3/2016/10/foodJointPainRelief-142336977-770x533-1.jpg","https://www.helpguide.org/wp-content/uploads/carbs-burgers-fries-cookies-candy.jpg","http://cdn.cnn.com/cnnnext/dam/assets/140430115517-06-comfort-foods.jpg","https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F23%2F2020%2F09%2F17%2FVitamin-D-Foods-2000.jpg","https://www.expatica.com/app/uploads/sites/2/2020/03/Gazpacho-1920x1080.jpg","https://images.medicinenet.com/images/article/main_image/collagen-diet.jpg","https://images.onhealth.com/images/slideshow/10-foods-to-eat-when-you-have-the-flu-s2-photo-of-turkey-sandwich-with-cranberries.jpg","https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/other/1800x1200_iron_rich_foods_other.jpg","https://post.healthline.com/wp-content/uploads/2021/08/tofu-salad-pineapple-quinoa-vegan-meal-1296x728-header-1200x628.png","https://cdn.mos.cms.futurecdn.net/C2pjtmUhJK5zyUhhBeKfnm.jpg","https://www.verywellhealth.com/thmb/ARlngvszf98CBEshLNF2NE_o2YY=/3000x2000/filters:fill(87E3EF,1)/types-of-foods-to-boost-your-immune-system-89020-primary-recirc-3eb7525af42049cf8379bbc4f641579a.jpg","http://cdn.cnn.com/cnnnext/dam/assets/200401171739-06-best-turkish-foods-yaprak-dolma.jpg","https://health.ucdavis.edu/media-resources/contenthub/post/internet/good-food/2019/04/images-body/04-05-15-foods-10-body.jpg","https://thumbs.dreamstime.com/z/balanced-diet-food-background-balanced-diet-food-background-organic-food-healthy-nutrition-superfoods-meat-fish-legumes-nuts-121936796.jpg","https://res.cloudinary.com/mtree/w_320,q_auto:eco,f_auto,dpr_auto/MT-Metamucil-EN-US/5KN0S8UChaYElaC9G5mSjb/6761fceb934a6aba02c82444a60a1a46/Common_16_9.png","https://health.ucdavis.edu/media-resources/contenthub/post/internet/good-food/2019/04/images-featured/04-05-15-foods-featured.jpg","https://onlinelibrary.wiley.com/pb-assets/20487177/Bioactive%20compounds-1615400802.jpg","https://cdn.nof.org/wp-content/uploads/Calcium-Foods.jpg","https://images.everydayhealth.com/images/best-bone-building-foods-05-1440x810.jpg","https://img.freepik.com/free-photo/concept-indian-cuisine-baked-chicken-wings-legs-honey-mustard-sauce-serving-dishes-restaurant-black-plate-indian-spices-wooden-table-background","https://www.thekohsamuiguide.com/wp-content/uploads/2012/01/thai-fruit-16-1.jpg","https://images.everydayhealth.com/images/best-winter-fruits-08-1440x810.jpg","https://d3mvlb3hz2g78.cloudfront.net/wp-content/uploads/2014/12/thumb_720_450_1372_f.jpg","https://basket.com/wp-content/uploads/2018/07/What-Your-Favorite-Fruit-Says-About-You.jpg","https://www.verywellhealth.com/thmb/nOj3ZmQjgYjBjj_QCBIsDSPzoeo=/1918x1918/smart/filters:no_upscale()/fruits-to-avoid-if-you-have-diabetes-1087587-primary-recirc-3a95a09a48cb46b49d5632326f9405d3.jpg","https://www.escoffieronline.com/wp-content/uploads/avocado-are-among-the-fruits-that-need-to-be-cored-_1107_40085675_1_14065460_500.jpg","https://post.healthline.com/wp-content/uploads/2021/05/mango-bowl-fruit-1296x728-body.jpg","https://www.fruitbouquets.com/fruit-blog/wp-content/uploads/2017/09/Mango-1280x720.jpg","https://static.onecms.io/wp-content/uploads/sites/23/2020/06/01/best-summer-fruits-2000.jpg","https://www.iaea.org/sites/default/files/vietnam-fruit-1140x640.jpg","https://img.sunset02.com/sites/default/files/styles/4_3_horizontal_inbody_900x506/public/image/2016/09/main/fruits-to-plant-now.jpg","https://www.seriouseats.com/thmb/eKRP2IiUgs5Oy_wzGsMlWzT_l54=/610x458/filters:fill(auto,1)/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__images__20100908-southamericafruits-610-3a0c073453c74c1594016084e549c85e.jpg","https://cdn.britannica.com/s:800x450,c:crop/89/179989-138-4A6E5AB7/smell-signature-taste-one-fruits-world.jpg","https://www.gardendesign.com/pictures/images/675x529Max/site_3/helianthus-yellow-flower-pixabay_11863.jpg","https://www.gardeningknowhow.com/wp-content/uploads/2021/07/sulfur-cosmos-mexican-aster-flowers.jpg","https://www.gardeningknowhow.com/wp-content/uploads/2019/09/flower-color-400x391.jpg","https://www.ikea.com/ph/en/images/products/smycka-artificial-flower-rose-red__0903311_pe596728_s5.jpg","https://pbs.twimg.com/profile_images/883859744498176000/pjEHfbdn.jpg","https://i.natgeofe.com/n/57f411cd-dfe6-41a6-8d40-21ba583eccfb/lake-elsinore-california.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/close-up-of-flower-blooming-outdoors-royalty-free-image-739387273-1544039749.jpg","https://i.pinimg.com/originals/f6/bd/84/f6bd84153caf3ea4939b66813ade5ec6.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/close-up-of-tulips-blooming-in-field-royalty-free-image-1584131603.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-182880589-1493334765.jpg","https://ichef.bbci.co.uk/news/640/cpsprodpb/957C/production/_111686283_pic1.png","https://deih43ym53wif.cloudfront.net/century-egg-china-shutterstock_741885331_76676f1f9b.jpeg","https://www.heartfoundation.org.nz/images/all-shared-sections/blogs/fermented-foods.jpg","https://food.fnr.sndimg.com/content/dam/images/food/fullset/2012/3/22/0/FNCC_bobby-flay-salmon-brown-sugar-mustard_s4x3.jpg.rend.hgtvcom.616.462.suffix/1382541357316.jpeg","https://images.onhealth.com/images/slideshow/best-worst-foods-for-acne-s10-oily-food.jpg","https://nativefoods.com/wp-content/uploads/2021/06/home-slider-1-1200x800.jpg","https://hips.hearstapps.com/del.h-cdn.co/assets/18/01/1515085622-gallery-1486133611-greek-alfredo-wide.jpg","https://www.heartfoundation.org.nz/media/images/all-shared-sections/blogs/kimchi_737_369.jpg","https://thumbs.dreamstime.com/b/junk-food-concept-unhealthy-food-background-fast-food-sugar-burger-sweets-chips-chocolate-donuts-soda-junk-food-concept-137097176.jpg","https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/slideshows/filling_foods_wont_fill_you_out_slideshow/650x350_filling_foods_wont_fill_you_out_slideshow.jpg","https://blog-assets.shawacademy.com/uploads/2015/12/shutterstock_262781495.jpg","https://media.cntraveler.com/photos/546976f2cbbd2620680d9f2f/master/pass/rare-fruits-tout.jpg","https://images.everydayhealth.com/images/ordinary-fruits-with-amazing-health-benefits-09-1440x810.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/assorted-fruit-in-bowl-royalty-free-image-903846026-1545573737.jpg","https://www.mydomaine.com/thmb/vv4m0gFtHzFStyYYH0i0IA1QMuo=/500x350/filters:no_upscale():max_bytes(150000):strip_icc()/kolby-milton-3F37dy-cWDI-unsplash-96945b08654a4644909aefeec5e05f98.jpg","https://sodelicious.recipes/wp-content/uploads/2018/04/exotic-fruits-you-never-knew-existed-mangosteen-1200x900.jpg","https://www.thekohsamuiguide.com/wp-content/uploads/2012/01/thai-fruit-16-1.jpg","https://images.everydayhealth.com/images/best-winter-fruits-08-1440x810.jpg","https://d3mvlb3hz2g78.cloudfront.net/wp-content/uploads/2014/12/thumb_720_450_1372_f.jpg","https://basket.com/wp-content/uploads/2018/07/What-Your-Favorite-Fruit-Says-About-You.jpg","https://www.verywellhealth.com/thmb/nOj3ZmQjgYjBjj_QCBIsDSPzoeo=/1918x1918/smart/filters:no_upscale()/fruits-to-avoid-if-you-have-diabetes-1087587-primary-recirc-3a95a09a48cb46b49d5632326f9405d3.jpg","https://www.escoffieronline.com/wp-content/uploads/avocado-are-among-the-fruits-that-need-to-be-cored-_1107_40085675_1_14065460_500.jpg","https://post.healthline.com/wp-content/uploads/2021/05/mango-bowl-fruit-1296x728-body.jpg","https://www.fruitbouquets.com/fruit-blog/wp-content/uploads/2017/09/Mango-1280x720.jpg","https://static.onecms.io/wp-content/uploads/sites/23/2020/06/01/best-summer-fruits-2000.jpg","https://www.iaea.org/sites/default/files/vietnam-fruit-1140x640.jpg","https://img.sunset02.com/sites/default/files/styles/4_3_horizontal_inbody_900x506/public/image/2016/09/main/fruits-to-plant-now.jpg","https://www.seriouseats.com/thmb/eKRP2IiUgs5Oy_wzGsMlWzT_l54=/610x458/filters:fill(auto,1)/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__images__20100908-southamericafruits-610-3a0c073453c74c1594016084e549c85e.jpg","https://cdn.britannica.com/s:800x450,c:crop/89/179989-138-4A6E5AB7/smell-signature-taste-one-fruits-world.jpg","https://www.gardendesign.com/pictures/images/675x529Max/site_3/helianthus-yellow-flower-pixabay_11863.jpg","https://www.gardeningknowhow.com/wp-content/uploads/2021/07/sulfur-cosmos-mexican-aster-flowers.jpg","https://www.gardeningknowhow.com/wp-content/uploads/2019/09/flower-color-400x391.jpg","https://www.ikea.com/ph/en/images/products/smycka-artificial-flower-rose-red__0903311_pe596728_s5.jpg","https://pbs.twimg.com/profile_images/883859744498176000/pjEHfbdn.jpg","https://i.natgeofe.com/n/57f411cd-dfe6-41a6-8d40-21ba583eccfb/lake-elsinore-california.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/close-up-of-flower-blooming-outdoors-royalty-free-image-739387273-1544039749.jpg","https://i.pinimg.com/originals/f6/bd/84/f6bd84153caf3ea4939b66813ade5ec6.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/close-up-of-tulips-blooming-in-field-royalty-free-image-1584131603.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-182880589-1493334765.jpg","https://ichef.bbci.co.uk/news/640/cpsprodpb/957C/production/_111686283_pic1.png","https://media.newyorker.com/photos/6095a6b1d9c1b4ec8a8eb8da/master/pass/Stevens-FlowersOKeeffe.jpg","https://i.ytimg.com/vi/pZVdQLn_E5w/maxresdefault.jpg","https://www.collinsdictionary.com/images/full/flower_101359432.jpg","https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=1920&h=960&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F37%2F2020%2F01%2Fflowers-category-add1d47c.jpg","https://static.scientificamerican.com/sciam/cache/file/1BF8FBA2-1A97-4962-BDF7425878CF9454_source.jpg","https://hgtvhome.sndimg.com/content/dam/images/grdn/fullset/2013/3/25/0/Original_cosmos-flowers.jpg.rend.hgtvcom.616.462.suffix/1452655274302.jpeg","https://www.brides.com/thmb/lNXPJEyW2zH2CCQhwfW_1DMfubA=/640x360/smart/filters:no_upscale()/weddingflowers-9f420b597af84972b4c1d18215e13540.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/pink-rose-royalty-free-image-945044976-1544735339.jpg","https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Flower_July_2011-2_1_cropped.jpg/1200px-Flower_July_2011-2_1_cropped.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/pink-flowers-header-1512582155.jpg","https://i.natgeofe.com/n/6df23a0c-2d38-496d-88a5-06018ed6f8e9/flowers-keukenhof-holland_2x3.jpg","https://mindbodygreen-res.cloudinary.com/images/w_767,q_auto:eco,f_auto,fl_lossy/org/nutmuxhvbkraquf7k/pink-peonies-in-glass-vase.jpg","https://cdn.britannica.com/05/9705-050-0C62FE45/Passion-flower-blossom-sepals-corona-stamens-petals-circle.jpg","https://api.time.com/wp-content/uploads/2019/09/flower.jpg","https://www.ftd.com/blog/wp-content/uploads/2018/06/hero-purple-flowers.jpg","https://upload.wikimedia.org/wikipedia/commons/b/ba/Flower_jtca001.jpg","https://www.flower.com/images/fd/birthday_480x360.jpg","https://www.petalrepublic.com/wp-content/uploads/2020/07/Narcissus-Birth-Flower-for-December.jpg","https://www.brides.com/thmb/dWjsdNSL_RiCRI1CDA32mOD7OyI=/500x350/filters:no_upscale():max_bytes(200000):strip_icc()/sound-view-greenport-wedding-amber-gress-0063-0bb6aa536a9741808b200dc78e107bf8.jpg","https://merriam-webster.com/assets/mw/images/gallery/gal-home-edpick-lg/image1930664733-6467-41fce8e6e83743eb8971545e2ceda1ce@1x.jpg","https://www.gardendesign.com/pictures/images/973x490Exact_0x58/site_3/colorful-flowers-terraced-hillside-garden-design_11850.jpg","https://i.pinimg.com/736x/0a/82/ff/0a82ff5cbd61e7774883aa155e27652c.jpg","https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F37%2F2019%2F04%2F12163324%2Fassorted-flower-garden-2971f4b7.jpg","https://images.ctfassets.net/i3tkg7dt3kro/5cNADfjmjk5jCQAofuEnpc/31e55326cc3da38a0d4fb51ad863eee9/japanese-flowers-tsubaki.jpg","https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=3862&h=1931&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F34%2F2019%2F07%2F18232850%2Fflower-fields-getty-0519.jpg","https://d3cif2hu95s88v.cloudfront.net/blog/wp-content/uploads/2020/06/21073630/Crocus-Flowers.jpg","https://m.media-amazon.com/images/I/611r+UioosS._SL1000_.jpg","https://ichef.bbci.co.uk/news/976/cpsprodpb/E39C/production/_111686285_pic2.png","https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F23%2F2020%2F05%2F04%2Fbest-smelling-flowers-gardenia-2000.jpg","https://thumbs.dreamstime.com/b/spring-flowers-4993637.jpg","https://images-na.ssl-images-amazon.com/images/I/81rfzNcHQTL._AC_UL600_SR600,600_.png","https://images.indianexpress.com/2018/09/rafflesia-759.jpg","https://images.ctfassets.net/1nzw6mpfcddc/3WS0YiTIQRZjfZdOJXgMXL/bb63925c6088a5003a2c49c108dba4cd/flower_names.jpg","https://www.ftd.com/blog/wp-content/uploads/2018/06/Hero-Yellow-Flowers.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/flowers-royalty-free-image-997959716-1548454745.jpg","https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F47%2F2021%2F09%2F23%2Fflower-dog-names-215121166-2000.jpg","https://en-media.thebetterindia.com/uploads/2018/03/French_Marigold_-_October_Birthday_Flower_-_Tagetes_patula.jpg","https://image.shutterstock.com/image-photo/selective-focus-beautiful-branches-pink-260nw-1986411689.jpg","https://www.tsunagujapan.com/wp-content/uploads/2016/10/6905906956_786bbb1c1c_c.jpg","http://www.nparks.gov.sg/-/media/issue-44-vol-1-2020/lifestyle-recreation-and-activities/recognising-ten-streetside-flowers/6.jpg","https://www.flowerpower.com.au/wordpress/wp-content/uploads/2017/06/Dahlia-Dianthus.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-1250978022-612x612-1612205237.jpg","https://www.treehugger.com/thmb/hkERESy83spG_8j4giM0nQ_-1zY=/1024x768/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__mnn__images__2017__07__1024px-Flickr_-_brewbooks_-_Plumbago_auriculata-c9a0c68186194bd9ae433109d87599f4.jpg","https://www.sciencenewsforstudents.org/wp-content/uploads/2020/04/1030_LL_trees-1028x579.png","https://whyy.org/wp-content/uploads/2019/12/bright-daylight-environment-forest-240040-1.jpg","https://www.homestratosphere.com/wp-content/uploads/2019/07/trees-july192019-min.jpg","https://www.brightview.com/sites/default/files/inline-images/Tree%20Benefits%20-%2002.jpg","https://www.thespruce.com/thmb/YRvBiS4pVDq5Wh9JhVBX4YIIJnY=/4018x2679/filters:no_upscale():max_bytes(150000):strip_icc()/the-difference-between-trees-and-shrubs-3269804-01-686e6c92f4bd47e197475d2e58e16149.jpg","https://static.dw.com/image/56883926_303.jpg","https://media.wired.com/photos/5dc436dba14c980008129b52/191:100/w_2370,h_1240,c_limit/Gear-Trees-148705250.jpg","https://www.sciencenewsforstudents.org/wp-content/uploads/2020/10/1030_forests_fast_die_young-1030x579.jpg","https://ychef.files.bbci.co.uk/976x549/p09vcqxp.jpg","https://www.treehugger.com/thmb/pqz4TcPSKk4O6gf3cZv1G_2RtBE=/768x0/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__mnn__images__2018__04__sunset_through_oak_tree-62e69b4cce454afbba72c16f9558061c.jpg","https://www.sciencenews.org/wp-content/uploads/2021/06/070321_sm_trees_feat.jpg","https://c.ndtvimg.com/2020-04/chd4rs3g_dessert_625x300_07_April_20.jpg","https://images-gmi-pmc.edge-generalmills.com/7c1096c7-bfd0-4806-a794-1d3001fe0063.jpg","https://upload.wikimedia.org/wikipedia/commons/a/ab/Desserts.jpg","https://storcpdkenticomedia.blob.core.windows.net/media/recipemanagementsystem/media/recipe-media-files/recipes/retail/x17/17244-caramel-topped-ice-cream-dessert-760x580.jpg?ext=.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/delish-oreo-truffles-078-1544222424.jpg","https://www.thekitchenmagpie.com/wp-content/uploads/images/2017/06/TheFamousChocolateWaferIceboxCake4.jpg","https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/exps21585_THCA153054D10_15_4b.jpg","https://i2.wp.com/completelydelicious.com/wp-content/uploads/2020/05/chocolate-oreo-parfait-8-500x500.jpg","https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=2000&h=1000&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F23%2F2021%2F01%2F07%2FBest-romantic-desserts-2000.jpg","https://img.bestrecipes.com.au/vxZsIK-D/br/2020/05/spanish-egg-syrup-pudding-957808-3.jpg","https://realfood.tesco.com/media/images/RFO-1400x919-classic-chocolate-mousse-69ef9c9c-5bfb-4750-80e1-31aafbd80821-0-1400x919.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/delish-friedicecream-072-1587757338.jpg","https://www.jocooks.com/wp-content/uploads/2012/03/sex-in-a-pan-1-4-1-500x500.jpg","https://cdn.mos.cms.futurecdn.net/oiZUiUox97CfPBekGREWqY-768-80.jpg","http://1.bp.blogspot.com/-0XtE0a-MFqo/T2-avwAvlPI/AAAAAAAAC5I/Xl8tPCD02vc/s1600/Banana+caramel+cream+mini+dessert.jpg","https://insanelygoodrecipes.com/wp-content/uploads/2021/04/Malaysian-Pandan-and-Coconut-Cream-Dessert.png","https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/157394.jpg","https://www.simplyrecipes.com/thmb/tya3uQ3VG6Ywn749JSV2Va4c4L0=/450x0/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2007__03__pavlova-vertical-a-1200-0b52d896e6864998996b8023fc39adb9.jpg","https://www.myweekendplan.com.my/wp-content/uploads/2020/05/15-Words-to-Describe-Your-Desserts-4.jpg","https://natashaskitchen.com/wp-content/uploads/2020/11/Chocolate-Lasagna-6.jpg","https://insanelygoodrecipes.com/wp-content/uploads/2021/05/Cherry-Cheesecake-with-Berry-Sauce.png","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/delish-slutty-cheesecake-bars-vertical-1548356501.jpg","https://www.thespruceeats.com/thmb/iZuIePnCzvBVL24xqx5k3CTI7Gw=/4494x3000/filters:fill(auto,1)/french-pear-dessert-poires-belle-helene-1375196-hero-5c3c0506c9e77c0001df07d0.jpg","https://merriam-webster.com/assets/mw/images/article/art-wap-landing-mp-lg/dessert-2483-9868d94aaad5a2a2f7753c13ce6b71f9@1x.jpg","https://i.ytimg.com/vi/p0grKDOHrVA/maxresdefault.jpg","https://www.thecookierookie.com/wp-content/uploads/2020/07/cookie-dough-dip-recipe-7-of-7-650x650.jpg","https://i.pinimg.com/originals/8a/74/ac/8a74acde87bac625be6d4dbc33cc9929.jpg","https://www.daysoftheyear.com/wp-content/uploads/dessert-day.jpg","https://insanelygoodrecipes.com/wp-content/uploads/2020/08/Birthday-Dessert-Ideas-Red-Velvet-Cake.png","https://cdn.cdnparenting.com/articles/2018/12/18181943/379414048-H.jpg","https://thumbor.thedailymeal.com/xElyMCHUR1drRJYvuniWfcIGv1M=/870x565/filters:focal(895x584:896x585)/https://www.thedailymeal.com/sites/default/files/2020/07/13/maine-whoopie-pies.jpg","https://images.indianexpress.com/2020/06/Churros_759.jpg","https://www.differenttypes.net/wp-content/uploads/types-of-dessert.jpg","https://food.fnr.sndimg.com/content/dam/images/food/fullset/2018/4/12/0/FNM_050118-Chocolate-Candy-Bar-Layer-Cake_s4x3.jpg.rend.hgtvcom.441.331.suffix/1523547441314.jpeg","https://images-gmi-pmc.edge-generalmills.com/e4b64e24-27b3-408c-864c-622ee2f8e17a.jpg","https://cdn.cdkitchen.com/images/cats/88/cat-88-720-1.jpg","https://www.allthingsmamma.com/wp-content/uploads/2011/08/oreodessert-.jpg","https://s.wsj.net/public/resources/images/OD-AO941_VEGDES_G_20120216162548.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/no-bake-desserts-key-lime-pies-1562595344.jpg","https://images.everydayhealth.com/images/healthy-frozen-dessert-recipes-00-1440x810.jpg","https://www.thespruceeats.com/thmb/NV8FVGyy0JlkDFRkDFwumm1m9R8=/4680x3120/filters:fill(auto,1)/applesauce-cake-with-cream-cheese-frosting-3050728-hero-01-69ad45ffc40c450e9bccd59fb4dc1fd5.jpg","https://img.bestrecipes.com.au/5I9gvKf8/br/2018/09/no-bake-lindt-ball-cheesecake-recipe-523707-1.jpg","https://assets.rbl.ms/21893125/origin.jpg","https://www.fifteenspatulas.com/wp-content/uploads/2015/12/Oreo-Truffles-Easy-Dessert-Recipes-Fifteen-Spatulas-2-640x960.jpg","https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F19%2F2018%2F08%2F07%2Frainbow-dessert-bowls-dcms-large-2000.jpeg","https://www.happyfoodstube.com/wp-content/uploads/2018/08/raspberry-oreo-no-bake-dessert-image-500x500.jpg","https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/banana-pudding-bars-vertical-1536693077.png","https://img.taste.com.au/LnPj2XG0/taste/2020/08/kitkat-tiramisu-ice-cream-cake-164475-2.jpg","https://inspiredbycharm-wpengine.netdna-ssl.com/wp-content/uploads/2021/04/Spring-Dessert-Recipes.jpg","http://cdn.sallysbakingaddiction.com/wp-content/uploads/2019/10/halloween-chocolate-bark-3.jpg","https://www.biggerbolderbaking.com/wp-content/uploads/2018/01/1C5A3553-500x375.jpg","https://insanelygoodrecipes.com/wp-content/uploads/2020/10/Homemade-Chocolate-Pasta-500x375.png","http://simply-delicious-food.com/wp-content/uploads/2018/11/holiday-dessert-board-3.jpg","https://amandascookin.com/wp-content/uploads/2021/03/Pineapple-Dream-Dessert-RC.jpg","https://images-gmi-pmc.edge-generalmills.com/41126625-0a0d-464f-adfc-4572570696ae.jpg","https://thebakingexplorer.com/wp-content/uploads/2019/03/IMG_2228-Copy-500x500.jpg","https://ofbatteranddough.com/wp-content/uploads/2019/04/recipe-Napoleon-dessert-14-720x720.jpg","https://www.errenskitchen.com/wp-content/uploads/2020/02/easy-chocolate-dessert-1-1.jpg","https://thewoksoflife.com/wp-content/uploads/2019/08/grass-jelly-dessert-10.jpg","https://izzycooking.com/wp-content/uploads/2021/04/Japanese-Desserts-thumbnail-500x375.jpeg");
      $content  = array("#explore",
"#likeforlikes",
"#followforfollowback",
"#photography",
"#memes",
"#music",
"#india",
"#trend",
"#instadaily",
"#likes",
"#style",
"#photooftheday",
"#trendingnow",
"#dance",
"#model",
"#bollywood",
"#foryou",
"#bhfyp",
"#kerala",
"#beautiful",
"#TravelPhotography",
"#PicOfTheDay",
"#NaturePhotography",
"#TravelBlogger",
"#beautiful",
"#landscape",
"#adventure",
"#explore",
"#instatravel",
"#photo",
"#trip",
"#summer",
"#travelgram",
"#photography",
"#art",
"#travel",
"#wanderlust",
"#nature",
"#instagood",
"#PhotoOfTheDay");
$uploaded_count = 0;
                    $upload_attempt = 0;
                    while ($uploaded_count < 1) {
                    sleep(2);
   $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://posting.mylykaapps.com/api/v3/posts/addpost', CURLOPT_RETURNTRANSFER => true, CURLOPT_ENCODING => '', CURLOPT_MAXREDIRS => 10, CURLOPT_TIMEOUT => 0, CURLOPT_FOLLOWLOCATION => true, CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, CURLOPT_CUSTOMREQUEST => 'POST', CURLOPT_POSTFIELDS => array('boundary' => '8cf8395a-7374-4797-9099-39fdf6170be8', 'title' => '', 'content' => $content[array_rand($content)], 'url' => $imageurlpost[array_rand($imageurlpost)], 'titleUrl' => '', 'descriptionUrl' => $imageurlpost[array_rand($imageurlpost)] , 'imageUrl' => $imageurlpost[array_rand($imageurlpost)], 'hashtags' => $content[array_rand($content)], 'deviceid' => '$deviceiddd', 'devicemodel' => '$brand00', 'deviceos' => 'Android O_MR1 Q ', 'osversion' => '28', 'mediaTags' => '[[]]'), CURLOPT_HTTPHEADER => array("authorization: Bearer $bearer", "user-agent:Lyka/3.6.53 (com.thingsilikeapp; build:853 Android Q 29)"),));
        $response = curl_exec($curl);
        curl_close($curl);
        //echo $response;
        $json = json_decode($response);
        $mess = $json->message;
        
        echo ".$mess.";
                        if (strstr($mess, 'Post saved')) {
                            $uploaded_count++;
                            $upload_attempt = 0;
                        } else {
                            echo "Upload failed. Retrying. \n";
                            $upload_attempt++;
                            if ($upload_attempt >= 1) {
                            	$b = "[0;36m";
                                echo "$b THE 5 ATTEMPTS TO POST ARE UNSUCCESSFUL  GOING TO RATE YOUR MAIN ACCOUNT\n\n";
                              break;
                            }
                         }
                      }
                    }
       function addMoments($user, $bearer, $device_id) {
        

        $user_id = getUserId($device_id, $bearer);

        
        $uploadLegacy = "https://media.mylykaapps.com/api/v1/media/social/multi-upload-url";
        $uploadPay = <<<DATA
            {"category":"moment","clientId":"$user_id","files":[{"fileName":"hakdog.jpeg", "mediaType":"image"}]}
        DATA; 
        $uploadLegPost = postX($uploadLegacy,$uploadPay,$bearer);

        if($uploadLegPost->data){
            $mediaID = $uploadLegPost->data[0]->mediaId;

            $amznToken = "https://media.mylykaapps.com/api/v1/access/aws/media-token/$user_id";
            $firstGet = getX($amznToken,$device_id,$bearer);

            if($firstGet->data){
                $amzIDid = $firstGet->data->identityId;
                $amzIDtoken = $firstGet->data->token; 

                $postURL = "https://cognito-identity.ap-southeast-1.amazonaws.com/";
                $postHeader =  array(
                "Content-Type: application/x-amz-json-1.1",
                "Accept-encoding: indentity",
                "X-Amz-Target: AWSCognitoIdentityService.GetCredentialsForIdentity",
                "user-agent: aws-sdk-android/2.22.4 Linux/3.18.140-gb765813d2c04 Dalvik/2.1.0/0 en_US") ;
                $amndata = <<<DATA
                        {"Logins": {
                            "cognito-identity.amazonaws.com": "$amzIDtoken"},
                                "IdentityId": "$amzIDid"}
                        DATA; 
                $postCurl = curl_init($postURL);
                curl_setopt($postCurl, CURLOPT_URL, $postURL);
                curl_setopt($postCurl, CURLOPT_POST, true);
                curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
                curl_setopt($postCurl, CURLOPT_POSTFIELDS, $amndata);
                $postResp = curl_exec($postCurl);
                curl_close($postCurl);
                $postjson = json_decode($postResp);
                if($postjson->Credentials){
                    $sessToken = $postjson->Credentials->SessionToken;
                    $aws_access_key_id = $postjson->Credentials->AccessKeyId;
                    $aws_secret_access_key = $postjson->Credentials->SecretKey;

                    //AWS Process
                    $bucket_name = 'lyka-legacy-images-input';
                    $aws_region = 'ap-southeast-1';
                    $host_name = $bucket_name . '.s3.amazonaws.com';
                    $content = "0";
                    $content_title = $mediaID;
                    $aws_service_name = 's3';
                    $timestamp = gmdate('Ymd\THis\Z');
                    $date = gmdate('Ymd');
                    $request_headers = array();
                    $request_headers['x-amz-date'] = $timestamp;
                    $request_headers['Host'] = $host_name;
                    $request_headers['x-amz-security-token'] = $sessToken;
                    $request_headers['x-amz-content-sha256'] = hash('sha256', $content);
                    ksort($request_headers);

                    $canonical_headers = [];
                    foreach($request_headers as $key => $value) {
                        $canonical_headers[] = strtolower($key) . ":" . $value;
                    }
                    $canonical_headers = implode("\n", $canonical_headers);

                    // Signed headers
                    $signed_headers = [];
                    foreach($request_headers as $key => $value) {
                        $signed_headers[] = strtolower($key);
                    }
                    $signed_headers = implode(";", $signed_headers);

                    // Cannonical request 
                    $canonical_request = [];
                    $canonical_request[] = "PUT";
                    $canonical_request[] = "/" . $content_title;
                    $canonical_request[] = "";
                    $canonical_request[] = $canonical_headers;
                    $canonical_request[] = "";
                    $canonical_request[] = $signed_headers;
                    $canonical_request[] = hash('sha256', $content);
                    $canonical_request = implode("\n", $canonical_request);
                    $hashed_canonical_request = hash('sha256', $canonical_request);

                    // AWS Scope
                    $scope = [];
                    $scope[] = $date;
                    $scope[] = $aws_region;
                    $scope[] = $aws_service_name;
                    $scope[] = "aws4_request";

                    // String to sign
                    $string_to_sign = [];
                    $string_to_sign[] = "AWS4-HMAC-SHA256"; 
                    $string_to_sign[] = $timestamp; 
                    $string_to_sign[] = implode('/', $scope);
                    $string_to_sign[] = $hashed_canonical_request;
                    $string_to_sign = implode("\n", $string_to_sign);

                    // Signing key
                    $kSecret = 'AWS4' . $aws_secret_access_key;
                    $kDate = hash_hmac('sha256', $date, $kSecret, true);
                    $kRegion = hash_hmac('sha256', $aws_region, $kDate, true);
                    $kService = hash_hmac('sha256', $aws_service_name, $kRegion, true);
                    $kSigning = hash_hmac('sha256', 'aws4_request', $kService, true);

                    // Signature
                    $signature = hash_hmac('sha256', $string_to_sign, $kSigning);

                    // Authorization
                    $authorization = [
                        'Credential=' . $aws_access_key_id . '/' . implode('/', $scope),
                        'SignedHeaders=' . $signed_headers,
                        'Signature=' . $signature
                    ];
                    $authorization = 'AWS4-HMAC-SHA256' . ' ' . implode( ',', $authorization);

                    // Curl headers
                    $curl_headers = [ 'Authorization: ' . $authorization ];
                    foreach($request_headers as $key => $value) {
                        $curl_headers[] = $key . ": " . $value;
                    }

                    $url = 'https://' . $host_name . '/' . $content_title;
                    $ch = curl_init($url);
                    curl_setopt($ch, CURLOPT_HEADER, false);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $curl_headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
                    curl_exec($ch);
                    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    // echo $http_code;
                    if ($http_code != 200) {
                        echo 'Error : Failed to upload';
                        
                    }
                    
                    $delURL = "https://lyka-legacy-images-input.s3.ap-southeast-1.amazonaws.com/".$mediaID;
                    $delHeader = array(
                        "x-clientid: $device_id",
                        "x-amz-date: $timestamp",
                        "x-amz-content-sha256: STREAMING-AWS4-HMAC-SHA256-PAYLOAD",
                        "Authorization: $authorization"
                    );
                    $deleteCurlx = curl_init($delURL);
                    curl_setopt($deleteCurlx, CURLOPT_URL, $delURL);
                    curl_setopt($deleteCurlx, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($deleteCurlx, CURLOPT_CUSTOMREQUEST, "PUT");
                    curl_setopt($deleteCurlx, CURLOPT_HTTPHEADER, $delHeader);
                    $deleteResp = curl_exec($deleteCurlx);
                    curl_close($deleteCurlx);

                    $uploaded_count = 0;
                    $upload_attempt = 0;
                    while ($uploaded_count < 1) {
                        sleep(1);
                        $uploadMoment = "https://momenting.mylykaapps.com/api/v3/moments/AddImageMoment";
                        $momnts = postX($uploadMoment, payload($device_id,'"files":[{"height":2081,"key":"'.$mediaID.'", "RemoteStorage":"lyka-legacy-images-input" ,"type":"image","width":1079}]'), $bearer);
                        $response_message = $momnts->message;
                        if( $response_message == "Moment retrieved."){
                            echo "$response_message";
                            $uploaded_count++;
                            $upload_attempt = 0;
                        } else {
                            echo "Upload failed. Retrying. \n";
                            $upload_attempt++;
                            if ($uploaded_count < 1) {
                                echo "Max upload attempt limit reached. Please check your connection.\n\n";
                                break;
                            }
                        }
                    }      
                }
            }
        } else {
            echo 'Error getting moments server data.';
            
        }
    }

    function getUserId($rDevID, $mcCookie){
        $getUID = getX("https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing?os=android", $rDevID, $mcCookie);

        return $getUID->data->id;
    }

    function getX($urlx, $gdevID, $cooks = ""){
        $getURL = $urlx;
        $uAgent = 'Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)';
        $getHeader = array(
            "Content-Type: application/json; charset=UTF-8",
            "user-agent: $uAgent",
            "authorization: Bearer $cooks",
            "x-clientid: $gdevID",
            );
            $getCurl = curl_init($getURL);
            curl_setopt($getCurl, CURLOPT_URL, $getURL);
            curl_setopt($getCurl, CURLOPT_HTTPGET, true);
            curl_setopt($getCurl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($getCurl, CURLOPT_HTTPHEADER, $getHeader);
            sleep(0);
            $getResp = curl_exec($getCurl);
            curl_close($getCurl);
            $getjson = json_decode($getResp);

            return $getjson;
    }

    function postX($urlx, $payloader, $cooks = ""){
        $postURL = $urlx;
        $uAgent = 'Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)';
        $postHeader = !$cooks 
            ? array(
            "Content-Type: application/json; charset=UTF-8",
            "user-agent: $uAgent") 
            : array(
            "Content-Type: application/json; charset=UTF-8",
            "user-agent: $uAgent","authorization: Bearer $cooks") ;
            $postCurl = curl_init($postURL);
            curl_setopt($postCurl, CURLOPT_URL, $postURL);
            curl_setopt($postCurl, CURLOPT_POST, true);
            curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
            curl_setopt($postCurl, CURLOPT_POSTFIELDS, $payloader);
            curl_setopt($postCurl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($postCurl, CURLOPT_SSL_VERIFYPEER, false);
            sleep(0);
            $postResp = curl_exec($postCurl);
            curl_close($postCurl);
            $postjson = json_decode($postResp);

            return $postjson;
    }

    function payload($devIDx, $xtraPay, $rTokenx = ""){
        $valdata = <<<DATA
                {"device": {
                    "deviceId": "$devIDx",
                    "deviceImei": "",
                    "deviceModel": "Xiaomi Redmi Note 5",
                    "deviceName": "android",
                    "deviceOs": "Android R ",
                    "isEmulator": false,
                    "osVersion": "30",
                    "notificationToken": "$rTokenx"
                },
                "countryCode": "US",
                $xtraPay
                }
                DATA; 

        return $valdata;
    }