<?php

namespace mengsen\jtt;

use mengsen\jtt\Util;

class TopClient
{
    public $appId;
    public $appkey;
    public $gatewayUrl = "http://japi.jingtuitui.com/";
    public $format = "json";
    public $connectTimeout;
    public $readTimeout;
    protected $signMethod = "md5";

    public function __construct($appId = "",$appkey = "")
    {
        $this->appId = $appId;
        $this->appkey = $appkey;
    }

    public function getAppkey()
    {
        return $this->appkey;
    }

    public function setGatewayUrl($gatewayUrl)
    {
        $this->gatewayUrl = $gatewayUrl;
    }

    public function setFormat($format)
    {
        $this->format = $format;
    }

    // 请求
    public function execute($url, $param)
    {

        $data["appid"] = $this->appId;
        $data["appkey"] = $this->appkey;
        // $data["timestamp"] = date('Y-m-d H:i:s');
        if(!empty($param)){
            $data = array_merge($data,$param);
        }
        
        $result = Util::http($this->gatewayUrl . $url, $data);
        $result = json_decode($result, true);
        // $str = str_replace(".", "_", $data['method']) . '_response';
        return json_decode($result, true);
    }
}
