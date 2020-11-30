<?php
///
#màu sắc
$res="\033[1;3m";//trắbg
$red="\033[1;3;31m";//đỏ
$blud="\033[1;3;34m";///blu
$xanhnc="\033[1;3;36m";//xanh nước
$tim="\033[1;3;35m"; ///tím
$green="\033[1;3;32m";//xanh lá
$yellow="\033[1;3;33m";///vàng,1/2 đỏ
$white= "\033[1;3;37m";//trắng
$logo= "\033[1;3;39m";// đỏ

sleep(5);
echo $yellow."

  Anh dừng chân, ngước nhìn trời cao và muôn ánh sao.
";
sleep(1);
echo $yellow. "Để buồn đau phủ lên bờ vai hao gầy";
for ($j=0;$j<5;$j++){
  echo $yellow. ".";
  sleep(1);
}
echo "\n";
sleep(5);                  
#màu sắc
$res="\033[1;3m";//trắbg
$red="\033[1;3;31m";//đỏ
$blud="\033[1;3;34m";///blu
$xanhnc="\033[1;3;36m";//xanh nước
$tim="\033[1;3;35m"; ///tím
$green="\033[1;3;32m";//xanh lá
$yellow="\033[1;3;33m";///vàng,1/2 đỏ
$white= "\033[1;3;37m";//trắng
$pink="\033[35;40m";
///xóa tất cả phía trên
@system('clear');
echo $tim. "API key: ";
$key=trim(fgets(STDIN));
echo $pink. "Khong co key nhung iu ban 36...";
for($d=0;$d<3;$d++){
  echo $pink. ".";
  sleep(1);
}
sleep(1);
///xóa tất cả phía trên
@system('clear');
///logo

?>
<?php
#màu
$res="\033[1;3m";//trắbg
$red="\033[1;3;31m";//đỏ
$blud="\033[1;3;34m";///blu
$xanhnc="\033[1;3;36m";//xanh nước
$tim="\033[1;3;35m"; ///tím
$green="\033[1;3;32m";//xanh lá
$yellow="\033[1;3;33m";///vàng
$white= "\033[1;3;37m";//trắng
@system('clear');



#thgian
date_default_timezone_set('Asia/Ho_Chi_Minh');

$thoigian = date('H:i');
@system('clear');
sleep(5);

echo "\n";
for ($y=0;$y<86;$y++){
  echo $green. "_";
  sleep(0.5);
}
echo "\n";

    echo "\033[1;31m \033[1;36m Nhập cookie facebook: \033[1;33m";
    $cookie = trim(fgets(STDIN));
    sleep(0.5);
    echo" => Đã Lưu cookie Facebook\n";
    sleep(0.5);
    echo "\033[1;31m \033[1;36m Nhập cookie TTC: \033[1;33m";
    $cookieTTC  = trim(fgets(STDIN));
    sleep(0.5);
    echo" => Đã Lưu cookie TTC\n";
    sleep(0.5);
    $content = auto('https://mbasic.facebook.com/home.php?sk=h_chr', $cookie);
    preg_match('#target" value="(.+?)"#is', $content, $account_id);
    $account_id = $account_id['1'];
    ///lưu tài khoản vào mục download/config.js
	
    
@system("clear");
/////




///

echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mĐang Tool Cho ID : \033[1;35m$account_id\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mThời Gian Bắt Đầu : \033[1;35m$thoigian\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập 1 Chế Độ Auto Sub\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập 2 Chế Độ Auto Like\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập 3 Chế Độ Auto Like Page\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập 4 Chế Độ Random Like Sub\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập 5 Chế Độ Random Page Sub\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập 6 Chế Độ Random Like Sub Page\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mVui Lòng Nhập Chế Độ : \033[1;35m";
$chedo = trim(fgets(STDIN));
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mNhập Time Delay : \033[1;35m";
$lon = trim(fgets(STDIN));
echo $tim. "Thời gian nghỉ tránh block: ";
$buoi = trim(fgets(STDIN));
echo"\033[1;3;33m ------------------------------------------------------------------\n";
for ($y=0;$y<86;$y++){
  echo $green. "_";
  sleep(0.5);
}
echo "\n";
echo $yellow."
Copyright: Thaocoiii93\n
Zalo: 0328699262\n
Momo: 0328699262\n
♤♡◇♧
\n\n
";
for ($y=0;$y<86;$y++){
  echo $green. "_";
  sleep(0.5);
}
echo "\n";
if ($chedo == '1') {
    while (true) {
        chaysub($cookieTTC, $lon, $cookie, $congtien);
    }
} elseif ($chedo == '2') {
    while (true) {
        chaylike($cookieTTC, $lon, $cookie, $congtien);
    }
} elseif ($chedo == '3') {
    while (true) {
        chaypage($cookieTTC, $lon, $cookie, $congtien);
    }
} elseif ($chedo == '4') {
    while (true) {
        $RDLike = chaylike($cookieTTC, $lon, $cookie, $congtien);
        $RDSub  = chaysub($cookieTTC, $lon, $cookie, $congtien);
        $random = array(
            $RDLike,
            $RDSub
        );
        $random[array_rand($random)];
    }
} elseif ($chedo == '5') {
    while (true) {
        $RDSub  = chaysub($cookieTTC, $lon, $cookie, $congtien);
        $RDPage = chaypage($cookieTTC, $lon, $cookie, $congtien);
        $random = array(
            $RDPage,
            $RDSub
        );
        $random[array_rand($random)];
    }
} elseif ($chedo == '6') {
    while (true) {
        $RDLike = chaylike($cookieTTC, $lon, $cookie, $congtien);
        $RDSub  = chaysub($cookieTTC, $lon, $cookie, $congtien);
        $RDPage = chaypage($cookieTTC, $lon, $cookie, $congtien);
        $random = array(
            $RDLike,
            $RDSub,
            $RDPage
        );
        $random[array_rand($random)];
        
    }
}





function chaysub($cookieTTC, $lon, $cookie, $congtien)
{
    $info = listpostsub($cookieTTC);
    if (is_array($info)) {
        foreach ($info as $info) {
            $post_id = $info["idpost"];
            sub($post_id, $account_id, $cookie);
            sleep(1);
            $hoanthanh = hoanthanhsub($post_id, $cookieTTC);
                $url = "https://tuongtaccheo.com/home.php";
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array("Cookie:$cookieTTC"
  )
  ));
$data = curl_exec($curl);
curl_close($curl);
preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
$sodu = $sd["1"];
            $suc       = $hoanthanh["mess"];
            $err       = $hoanthanh["error"];
            if($thoigian=date('H:i')){date_default_timezone_set('Asia/Ho_Chi_Minh');

            $stt=$stt+1;
            if (strlen($suc) > 10) {
                
                echo "\033[1;31m \033[1;33m [$stt]\033[1;37m [$thoigian]\033[1;34m FOLOW:\033[1;37m \033[1;35m$post_id \033[1;32m+600\033[1;36m [$sodu XU] \033[1;33mTHÀNH CÔNG\033[1;31m \n";
            }} else {
                echo "\033[1;37m~\033[1;33m[\033[1;31mFALSE\033[1;33m] \033[1;37m=> \033[1;31m$err\n";
                //unsub($post_id,$account_id,$cookie);
            }
        for ( $x = $lon; $x--; $x ) {
        echo"    \033[1;33m~>\033[1;36m vui lòng chờ\033[1;32m [$x]\033[1;33m <~\r";
        sleep(1);
        }
        }
    } else {
            
            print "\033[1;34m~ Không tải được nhiệm vụ !!!\n";
            sleep(20);
    }
}

function chaylike($cookieTTC, $lon, $cookie, $congtien)
{
  
    
    $info = listpost($cookieTTC);
    if (is_array($info)) {
        foreach ($info as $info) {
            $post_id = $info["idpost"];
            like($post_id, $account_id, $cookie);
            sleep(1);
            $hoanthanh = hoanthanh($post_id, $cookieTTC);
                $url = "https://tuongtaccheo.com/home.php";
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array("Cookie:$cookieTTC"
  )
  ));
$data = curl_exec($curl);
curl_close($curl);
preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
$sodu = $sd["1"];
            $suc       = $hoanthanh["mess"];
            $err       = $hoanthanh["error"];
            if($thoigian=date('H:i')){date_default_timezone_set('Asia/Ho_Chi_Minh');

            $stt=$stt+1;
            if (strlen($suc) > 10) {
                
                echo " \033[35;40m~~> \033[1;31m \033[1;33m [$stt]\033[1;37m [$thoigian]\033[1;34m LIKE:\033[1;37m \033[1;35m$post_id \033[1;32m+200\033[1;36m [$sodu XU] \033[1;33mTHÀNH CÔNG\033[1;31m \n";
            }} else {
                echo "\033[1;37m~\033[1;33m[\033[1;31mFALSE\033[1;33m] \033[1;37m=> \033[1;31m$err\n";
            }
      for ( $x = $lon; $x--; $x ) {
        echo"    \033[1;33m~>\033[1;36m vui lòng chờ\033[1;32m [$x]\033[1;33m <~\r";
        sleep(1);
        }

}
      
    }
}

function chaypage($cookieTTC, $lon, $cookie, $congtien)
{
    $info = listpage($cookieTTC);
    if (is_array($info)) {
        foreach ($info as $info) {
            $post_id = $info["idpost"];
            page($post_id, $account_id, $cookie);
            sleep(1);
            $hoanthanh = hoanthanhpage($post_id, $cookieTTC);
                $url = "https://tuongtaccheo.com/home.php";
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array("Cookie:$cookieTTC"
  )
  ));
$data = curl_exec($curl);
curl_close($curl);
preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
$sodu = $sd["1"];
            $suc       = $hoanthanh["mess"];
            $err       = $hoanthanh["error"];
            if($thoigian=date('H:i')){date_default_timezone_set('Asia/Ho_Chi_Minh');
            $stt=$stt+1;
            
            if (strlen($suc) > 10) {
           
                echo "\033[1;31m ●\033[1;33m [$stt]\033[1;37m [$thoigian]\033[1;34m PAGE:\033[1;37m \033[1;35m$post_id \033[1;32m+700\033[1;36m [$sodu XU] \033[1;33mTHÀNH CÔNG\033[1;31m ●\n";
            }} else {
                echo "\033[1;37m~\033[1;33m[\033[1;31mFALSE\033[1;33m] \033[1;37m=> \033[1;31m$err\n";
            }
         for ( $x = $lon; $x--; $x ) {
        echo"    \033[1;33m~>\033[1;36m vui lòng chờ\033[1;32m [$x]\033[1;33m <~\r";
        sleep(1);
        }
        }
    } else {
           
            print "\033[1;34m~ Không tải được nhiệm vụ!!!\n";
         sleep(20);
    }
}

function listpost($cookieTTC)
{
    $url  = "https://tuongtaccheo.com/kiemtien/getpost.php";
    $head = array(
        "Host: tuongtaccheo.com",
        "accept: application/json, text/javascript, *" . "/" . "*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "referer: https://tuongtaccheo.com/kiemtien/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIE => $cookieTTC,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    return json_decode(curl_exec($ch), true);
}

function listpostsub($cookieTTC)
{
    $url  = "https://tuongtaccheo.com/kiemtien/subcheo/getpost.php";
    $head = array(
        "Host: tuongtaccheo.com",
        "accept: application/json, text/javascript, *" . "/" . "*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "referer: https://tuongtaccheo.com/kiemtien/subcheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIE => $cookieTTC,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    return json_decode(curl_exec($ch), true);
}

function listpage($cookieTTC)
{
    $url  = "https://tuongtaccheo.com/kiemtien/likepagecheo/getpost.php";
    $head = array(
        "Host: tuongtaccheo.com",
        "accept: application/json, text/javascript, *" . "/" . "*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "referer: https://tuongtaccheo.com/kiemtien/likepagecheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIE => $cookieTTC,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    return json_decode(curl_exec($ch), true);
}

function hoanthanh($post_id, $cookieTTC)
{
    $url  = "https://tuongtaccheo.com/kiemtien/nhantien.php";
    $data = "id=" . $post_id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIE => $cookieTTC,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}

function hoanthanhsub($post_id, $cookieTTC)
{
    $url  = "https://tuongtaccheo.com/kiemtien/subcheo/nhantien.php";
    $data = "id=" . $post_id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/subcheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIE => $cookieTTC,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}

function hoanthanhpage($post_id, $cookieTTC)
{
    $url  = "https://tuongtaccheo.com/kiemtien/likepagecheo/nhantien.php";
    $data = "id=" . $post_id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/likepagecheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIE => $cookieTTC,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}

function sub($post_id, $account_id, $cookie)
{
    $url  = "https://mbasic.facebook.com/" . $post_id;
    $head = array(
        "Host: mbasic.facebook.com",
        "upgrade-insecure-requests: 1",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_HEADER => true,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    if (strpos($data, "xs=deleted") == true) {
        echo "\033[1;37m~\033[1;33m[\033[1;31mFALSE\033[1;33m] \033[1;37m=> \033[1;31mPhiên Bản Cookie Hết Hạn !!!!\n";
        system("rm config.json");
        exit();
    } else {
        $one = explode("location: ", $data);
        $two = explode("rdr", $one[1]);
        $url = $two[0] . "rdr";
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
        $one  = explode("/a/subscribe.php?", $data);
        $two  = explode('"', $one[1]);
        
        $url = "https://mbasic.facebook.com/a/subscribe.php?" . htmlspecialchars_decode($two[0]);
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
    }
}


function like($post_id, $account_id, $cookie)
{
    $url  = "https://mbasic.facebook.com/" . $post_id;
    $head = array(
        "Host: mbasic.facebook.com",
        "upgrade-insecure-requests: 1",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_HEADER => true,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    if (strpos($data, "xs=deleted") == true) {
        echo "\033[1;37m~\033[1;33m[\033[1;31mFALSE\033[1;33m] \033[1;37m=> \033[1;31mPhiên Bản Cookie Hết Hạn !!!!\n";
        system("rm config.json");
        exit();
    } else {
        $one = explode("location: ", $data);
        $two = explode("rdr", $one[1]);
        $url = $two[0] . "rdr";
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
        $one  = explode("/a/like.php?", $data);
        $two  = explode('"', $one[1]);
        
        $url = "https://mbasic.facebook.com/a/like.php?" . htmlspecialchars_decode($two[0]);
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
    }
}

function page($post_id, $account_id, $cookie)
{
    $url  = "https://mbasic.facebook.com/" . $post_id;
    $head = array(
        "Host: mbasic.facebook.com",
        "upgrade-insecure-requests: 1",
        "save-data: on",
        "user-agent: Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_HEADER => true,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_ENCODING => TRUE
    ));
    $data = curl_exec($ch);
    if (strpos($data, "xs=deleted") == true) {
        echo "\033[1;37m~\033[1;33m[\033[1;31mFALSE\033[1;33m] \033[1;37m=> \033[1;31mPhiên Bản Cookie Hết Hạn !!!!\n";
        system("rm config.json");
        exit();
    } else {
        $one = explode("location: ", $data);
        $two = explode("rdr", $one[1]);
        $url = $two[0] . "rdr";
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
        $one  = explode("/a/profile.php?fan", $data);
        $two  = explode('"', $one[1]);
        
        $url = "https://mbasic.facebook.com/a/profile.php?fan" . htmlspecialchars_decode($two[0]);
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $data = curl_exec($ch);
    }
}

function auto($url, $cookie, $post = '')
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 60);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_COOKIE, $cookie);
    if ($post)
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
    $data = curl_exec($curl);
    curl_close($curl);
    return $data;
}


?>
