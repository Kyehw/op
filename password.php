<?php  @system("clear");
$cyan = "[0;36m";
echo "$cyan          


█▀█ ▄▀█ █▀ █▀ █░█░█ █▀█ █▀█ █▀▄
█▀▀ █▀█ ▄█ ▄█ ▀▄▀▄▀ █▄█ █▀▄ █▄▀

█▀▀ █░█ ▄▀█ █▄░█ █▀▀ █▀▀
█▄▄ █▀█ █▀█ █░▀█ █▄█ ██▄";
echo "
";
$green = "[0;32m";
echo "$green
";
echo "▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀";
$red = "[1;31m";
echo "$red
";
//  $';
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
$var_720187abbb73735aff61558ada8f7b2d= readline('ENTER YOUR NEW PASSWORD: ');

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
    "deviceModel": "OPPO A3S",
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
        $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    $status = $jsonn->status;
    $vuser = $jsonn->data->username;
    $var_8311f94ccda8efc3f17b1f6570665c16 = $jsonn->data->token->accessToken;
    echo $red = "[1;33m";
    echo "$red
$vuser was logged in
";
$var_03dd2def8cbbaeacd3657182d3482b07 = "https://users.mylykaapps.com/api/v3/users/ChangePassword";
  $var_a172445b4a3340b945445d13899d2359 = array(
    "authorization: Bearer $var_8311f94ccda8efc3f17b1f6570665c16",
    "Content-Type: application/json",
    "user-agent: Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)",
    "x-clientid: 2287fc6f60ee525b",
    "deviceos: android",
    );

   $var_12b4861b86a191f9ede9f9737a3f44d0 = curl_init($var_03dd2def8cbbaeacd3657182d3482b07);
    curl_setopt($var_12b4861b86a191f9ede9f9737a3f44d0, CURLOPT_URL, $var_03dd2def8cbbaeacd3657182d3482b07);
    curl_setopt($var_12b4861b86a191f9ede9f9737a3f44d0, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_12b4861b86a191f9ede9f9737a3f44d0, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($var_12b4861b86a191f9ede9f9737a3f44d0, CURLOPT_HTTPHEADER, $var_a172445b4a3340b945445d13899d2359);
    $var_10e3e43bc10e7b31440de3593f81c4a9 = <<<DATA
{
  "confirmPassword": "$var_720187abbb73735aff61558ada8f7b2d",
  "device": {
   "deviceId": "2287fc6f60ee525b",
   "deviceImei": "2287fc6f60ee525b",
   "deviceModel": "vivo vivo 1902",
   "deviceName": "android",
   "deviceOs": "Android O_MR1 ",
   "isEmulator": false,
   "osVersion": "28"
  },
  "newPassword": "$var_720187abbb73735aff61558ada8f7b2d",
  "oldPassword": "$pass"
}
DATA;  
        curl_setopt($var_12b4861b86a191f9ede9f9737a3f44d0, CURLOPT_POSTFIELDS, $var_10e3e43bc10e7b31440de3593f81c4a9);
        usleep(500000);
        $var_d88ce79c5637b3144349502ea4f327ae = curl_exec($var_12b4861b86a191f9ede9f9737a3f44d0);
        curl_close($var_12b4861b86a191f9ede9f9737a3f44d0);
        $var_148a9045e4fe73a36e0b1827ecb9b1de = json_decode($var_d88ce79c5637b3144349502ea4f327ae);
        $var_bf4216e5274a245fb7a8ad8613b3d887 = $var_148a9045e4fe73a36e0b1827ecb9b1de->message;
        echo $var_bf4216e5274a245fb7a8ad8613b3d887;
        }
        echo"
        ";