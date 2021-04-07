<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeQueryOrderByInsureParam/AlibabaOceanOpenplatformBizTradeParamTradeProtectParam.class.php');

class AlibabaTradeQueryOrderByInsureParam {

        
        /**
    * @return 请求参数
    */
        public function getTradeProtectParam() {
        $tempResult = $this->sdkStdResult["tradeProtectParam"];
        return $tempResult;
    }
    
    /**
     * 设置请求参数     
     * @param AlibabaOceanOpenplatformBizTradeParamTradeProtectParam $tradeProtectParam     
     * 参数示例：<pre>{"type":"lp","protectId":"91275389"}</pre>     
     * 此参数必填     */
    public function setTradeProtectParam(AlibabaOceanOpenplatformBizTradeParamTradeProtectParam $tradeProtectParam) {
        $this->sdkStdResult["tradeProtectParam"] = $tradeProtectParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>