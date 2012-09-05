<?php
Class HelperUserInfo {
public $user_info = array();
public $browsers = array(
    'mozilla',
    'ie',
    'safari',
    'opera',
    'chrome'
    );

public $devices = array(
    'ipad',
    'ipod',
    'android',
    'opera_mini',
    'blackberry'
    );

public function __construct() {
   $agent = $_SERVER['HTTP_USER_AGENT'];
   $info = array();
   $info['device'] = "none";
   foreach($this->browsers as $browser){
        $str = '/'.$browser.'/i';
        if(preg_match($str,$agent)){
           $info['browser'] = $browser;
        }
   }
   foreach($this->devices as $device){
        $str = '/'.$device.'/i';
        if(preg_match($str,$agent)){
           $info['device'] = $device;
        }
   }
   $b = $this->getBrowser();
   $info['browser'] = $b['name'];
   $info['browser_version'] = $b['version'];
   $info['agent'] = $b['userAgent'];
   $info['platform'] = $b['platform'];
   $info['browser_css'] = $this->browserCSS($b);
   $this->user_info = $info;

}

public function getUserInfo(){
    return $this->user_info;
}

function browserCSS($b){
    if($b['abrv']=='firefox'){
        return false;
    }
    $version = '';
    if($b['abrv'] == 'ie'){
        if($b['version']<7){
            $version = '_6';
        } elseif ($b['version']<8) {
             $version = '_7';
        } elseif ($b['version']<9) {
             $version = '_8';
        } elseif($b['version']<10) {
             $version = '_9';
        }
    }
    $b_css = $b['abrv'].$version;
    return $b_css;
}

function getBrowser(){

     $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'ie';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'netscape';
        $ub = "Netscape";
    }

    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }

    // check if we have a number
    if ($version==null || $version=="") {$version="?";}

    return array(
        'userAgent' => $u_agent,
        'name'      => $ub,
        'version'   => $version,
        'platform'  => $platform,
        'abrv'      => $bname,
        'pattern'    => $pattern
    );


    }


}
?>
