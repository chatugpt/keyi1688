<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaCreditOrderForDetail.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaOrderPreOrderForRead.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaLstTradeInfo.class.php');

class AlibabaOrderBizInfo extends SDKDomain {

       	
    private $odsCyd;
    
        /**
    * @return 是否采源宝订单
    */
        public function getOdsCyd() {
        return $this->odsCyd;
    }
    
    /**
     * 设置是否采源宝订单     
     * @param Boolean $odsCyd     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setOdsCyd( $odsCyd) {
        $this->odsCyd = $odsCyd;
    }
    
        	
    private $accountPeriodTime;
    
        /**
    * @return 账期交易订单的到账时间
    */
        public function getAccountPeriodTime() {
        return $this->accountPeriodTime;
    }
    
    /**
     * 设置账期交易订单的到账时间     
     * @param String $accountPeriodTime     
     * 参数示例：<pre>yyyy-MM-dd HH:mm:ss</pre>     
     * 此参数必填     */
    public function setAccountPeriodTime( $accountPeriodTime) {
        $this->accountPeriodTime = $accountPeriodTime;
    }
    
        	
    private $creditOrder;
    
        /**
    * @return 为true，表示下单时选择了诚e赊交易方式。注意不等同于“诚e赊支付”，支付时有可能是支付宝付款，具体支付方式查询tradeTerms.payWay
    */
        public function getCreditOrder() {
        return $this->creditOrder;
    }
    
    /**
     * 设置为true，表示下单时选择了诚e赊交易方式。注意不等同于“诚e赊支付”，支付时有可能是支付宝付款，具体支付方式查询tradeTerms.payWay     
     * @param Boolean $creditOrder     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setCreditOrder( $creditOrder) {
        $this->creditOrder = $creditOrder;
    }
    
        	
    private $creditOrderDetail;
    
        /**
    * @return 诚e赊支付详情，只有使用诚e赊付款时返回
    */
        public function getCreditOrderDetail() {
        return $this->creditOrderDetail;
    }
    
    /**
     * 设置诚e赊支付详情，只有使用诚e赊付款时返回     
     * @param AlibabaCreditOrderForDetail $creditOrderDetail     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCreditOrderDetail(AlibabaCreditOrderForDetail $creditOrderDetail) {
        $this->creditOrderDetail = $creditOrderDetail;
    }
    
        	
    private $preOrderInfo;
    
        /**
    * @return 预订单信息
    */
        public function getPreOrderInfo() {
        return $this->preOrderInfo;
    }
    
    /**
     * 设置预订单信息     
     * @param AlibabaOrderPreOrderForRead $preOrderInfo     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setPreOrderInfo(AlibabaOrderPreOrderForRead $preOrderInfo) {
        $this->preOrderInfo = $preOrderInfo;
    }
    
        	
    private $lstOrderInfo;
    
        /**
    * @return 零售通订单信息
    */
        public function getLstOrderInfo() {
        return $this->lstOrderInfo;
    }
    
    /**
     * 设置零售通订单信息     
     * @param AlibabaLstTradeInfo $lstOrderInfo     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setLstOrderInfo(AlibabaLstTradeInfo $lstOrderInfo) {
        $this->lstOrderInfo = $lstOrderInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "odsCyd", $this->stdResult )) {
    				$this->odsCyd = $this->stdResult->{"odsCyd"};
    			}
    			    		    				    			    			if (array_key_exists ( "accountPeriodTime", $this->stdResult )) {
    				$this->accountPeriodTime = $this->stdResult->{"accountPeriodTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "creditOrder", $this->stdResult )) {
    				$this->creditOrder = $this->stdResult->{"creditOrder"};
    			}
    			    		    				    			    			if (array_key_exists ( "creditOrderDetail", $this->stdResult )) {
    				$creditOrderDetailResult=$this->stdResult->{"creditOrderDetail"};
    				$this->creditOrderDetail = new AlibabaCreditOrderForDetail();
    				$this->creditOrderDetail->setStdResult ( $creditOrderDetailResult);
    			}
    			    		    				    			    			if (array_key_exists ( "preOrderInfo", $this->stdResult )) {
    				$preOrderInfoResult=$this->stdResult->{"preOrderInfo"};
    				$this->preOrderInfo = new AlibabaOrderPreOrderForRead();
    				$this->preOrderInfo->setStdResult ( $preOrderInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "lstOrderInfo", $this->stdResult )) {
    				$lstOrderInfoResult=$this->stdResult->{"lstOrderInfo"};
    				$this->lstOrderInfo = new AlibabaLstTradeInfo();
    				$this->lstOrderInfo->setStdResult ( $lstOrderInfoResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "odsCyd", $this->arrayResult )) {
    			$this->odsCyd = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "accountPeriodTime", $this->arrayResult )) {
    			$this->accountPeriodTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "creditOrder", $this->arrayResult )) {
    			$this->creditOrder = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "creditOrderDetail", $this->arrayResult )) {
    		$creditOrderDetailResult=$arrayResult['${paramType.paramName}'];
    			    			$this->creditOrderDetail = new AlibabaCreditOrderForDetail();
    			    			$this->creditOrderDetail->setStdResult ( $creditOrderDetailResult);
    		}
    		    	    			    		    		if (array_key_exists ( "preOrderInfo", $this->arrayResult )) {
    		$preOrderInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->preOrderInfo = new AlibabaOrderPreOrderForRead();
    			    			$this->preOrderInfo->setStdResult ( $preOrderInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "lstOrderInfo", $this->arrayResult )) {
    		$lstOrderInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->lstOrderInfo = new AlibabaLstTradeInfo();
    			    			$this->lstOrderInfo->setStdResult ( $lstOrderInfoResult);
    		}
    		    	    		}
 
   
}
?>