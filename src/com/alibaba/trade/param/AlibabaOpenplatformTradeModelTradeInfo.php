<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaOpenplatformTradeModelGuaranteeTermsInfo.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaOpenplatformTradeModelInternationalLogisticsInfo.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaOpenplatformTradeModelNativeLogisticsInfo.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaOpenplatformTradeModelProductItemInfo.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaOpenplatformTradeModelTradeTermsInfo.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaOpenplatformTradeKeyValuePair.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaTradeOrderRateInfo.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaInvoiceOrderInvoiceModel.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaTradeCustoms.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaTradeOverseasExtraAddress.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaOpenplatformTradeModelOrderBaseInfo.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaOrderBizInfo.class.php');
include_once ('AlibabaTradeGetSellerOrderListParam/AlibabaOrderDetailCaigouQuoteInfo.class.php');

class AlibabaOpenplatformTradeModelTradeInfo extends SDKDomain {

       	
    private $guaranteesTerms;
    
        /**
    * @return 保障条款
    */
        public function getGuaranteesTerms() {
        return $this->guaranteesTerms;
    }
    
    /**
     * 设置保障条款     
     * @param AlibabaOpenplatformTradeModelGuaranteeTermsInfo $guaranteesTerms     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGuaranteesTerms(AlibabaOpenplatformTradeModelGuaranteeTermsInfo $guaranteesTerms) {
        $this->guaranteesTerms = $guaranteesTerms;
    }
    
        	
    private $internationalLogistics;
    
        /**
    * @return 国际物流
    */
        public function getInternationalLogistics() {
        return $this->internationalLogistics;
    }
    
    /**
     * 设置国际物流     
     * @param AlibabaOpenplatformTradeModelInternationalLogisticsInfo $internationalLogistics     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInternationalLogistics(AlibabaOpenplatformTradeModelInternationalLogisticsInfo $internationalLogistics) {
        $this->internationalLogistics = $internationalLogistics;
    }
    
        	
    private $nativeLogistics;
    
        /**
    * @return 国内物流
    */
        public function getNativeLogistics() {
        return $this->nativeLogistics;
    }
    
    /**
     * 设置国内物流     
     * @param AlibabaOpenplatformTradeModelNativeLogisticsInfo $nativeLogistics     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNativeLogistics(AlibabaOpenplatformTradeModelNativeLogisticsInfo $nativeLogistics) {
        $this->nativeLogistics = $nativeLogistics;
    }
    
        	
    private $productItems;
    
        /**
    * @return 商品条目信息
    */
        public function getProductItems() {
        return $this->productItems;
    }
    
    /**
     * 设置商品条目信息     
     * @param array include @see AlibabaOpenplatformTradeModelProductItemInfo[] $productItems     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductItems(AlibabaOpenplatformTradeModelProductItemInfo $productItems) {
        $this->productItems = $productItems;
    }
    
        	
    private $tradeTerms;
    
        /**
    * @return 交易条款
    */
        public function getTradeTerms() {
        return $this->tradeTerms;
    }
    
    /**
     * 设置交易条款     
     * @param array include @see AlibabaOpenplatformTradeModelTradeTermsInfo[] $tradeTerms     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeTerms(AlibabaOpenplatformTradeModelTradeTermsInfo $tradeTerms) {
        $this->tradeTerms = $tradeTerms;
    }
    
        	
    private $extAttributes;
    
        /**
    * @return 订单扩展属性
    */
        public function getExtAttributes() {
        return $this->extAttributes;
    }
    
    /**
     * 设置订单扩展属性     
     * @param array include @see AlibabaOpenplatformTradeKeyValuePair[] $extAttributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExtAttributes(AlibabaOpenplatformTradeKeyValuePair $extAttributes) {
        $this->extAttributes = $extAttributes;
    }
    
        	
    private $orderRateInfo;
    
        /**
    * @return 订单评价信息
    */
        public function getOrderRateInfo() {
        return $this->orderRateInfo;
    }
    
    /**
     * 设置订单评价信息     
     * @param AlibabaTradeOrderRateInfo $orderRateInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderRateInfo(AlibabaTradeOrderRateInfo $orderRateInfo) {
        $this->orderRateInfo = $orderRateInfo;
    }
    
        	
    private $orderInvoiceInfo;
    
        /**
    * @return 发票信息
    */
        public function getOrderInvoiceInfo() {
        return $this->orderInvoiceInfo;
    }
    
    /**
     * 设置发票信息     
     * @param AlibabaInvoiceOrderInvoiceModel $orderInvoiceInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderInvoiceInfo(AlibabaInvoiceOrderInvoiceModel $orderInvoiceInfo) {
        $this->orderInvoiceInfo = $orderInvoiceInfo;
    }
    
        	
    private $customs;
    
        /**
    * @return 跨境报关信息
    */
        public function getCustoms() {
        return $this->customs;
    }
    
    /**
     * 设置跨境报关信息     
     * @param AlibabaTradeCustoms $customs     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCustoms(AlibabaTradeCustoms $customs) {
        $this->customs = $customs;
    }
    
        	
    private $overseasExtraAddress;
    
        /**
    * @return 跨境地址扩展信息
    */
        public function getOverseasExtraAddress() {
        return $this->overseasExtraAddress;
    }
    
    /**
     * 设置跨境地址扩展信息     
     * @param AlibabaTradeOverseasExtraAddress $overseasExtraAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOverseasExtraAddress(AlibabaTradeOverseasExtraAddress $overseasExtraAddress) {
        $this->overseasExtraAddress = $overseasExtraAddress;
    }
    
        	
    private $baseInfo;
    
        /**
    * @return 订单基础信息
    */
        public function getBaseInfo() {
        return $this->baseInfo;
    }
    
    /**
     * 设置订单基础信息     
     * @param AlibabaOpenplatformTradeModelOrderBaseInfo $baseInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBaseInfo(AlibabaOpenplatformTradeModelOrderBaseInfo $baseInfo) {
        $this->baseInfo = $baseInfo;
    }
    
        	
    private $orderBizInfo;
    
        /**
    * @return 订单业务信息
    */
        public function getOrderBizInfo() {
        return $this->orderBizInfo;
    }
    
    /**
     * 设置订单业务信息     
     * @param AlibabaOrderBizInfo $orderBizInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderBizInfo(AlibabaOrderBizInfo $orderBizInfo) {
        $this->orderBizInfo = $orderBizInfo;
    }
    
        	
    private $quoteList;
    
        /**
    * @return 采购单详情列表，为大企业采购订单独有域。
    */
        public function getQuoteList() {
        return $this->quoteList;
    }
    
    /**
     * 设置采购单详情列表，为大企业采购订单独有域。     
     * @param array include @see AlibabaOrderDetailCaigouQuoteInfo[] $quoteList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setQuoteList(AlibabaOrderDetailCaigouQuoteInfo $quoteList) {
        $this->quoteList = $quoteList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "guaranteesTerms", $this->stdResult )) {
    				$guaranteesTermsResult=$this->stdResult->{"guaranteesTerms"};
    				$this->guaranteesTerms = new AlibabaOpenplatformTradeModelGuaranteeTermsInfo();
    				$this->guaranteesTerms->setStdResult ( $guaranteesTermsResult);
    			}
    			    		    				    			    			if (array_key_exists ( "internationalLogistics", $this->stdResult )) {
    				$internationalLogisticsResult=$this->stdResult->{"internationalLogistics"};
    				$this->internationalLogistics = new AlibabaOpenplatformTradeModelInternationalLogisticsInfo();
    				$this->internationalLogistics->setStdResult ( $internationalLogisticsResult);
    			}
    			    		    				    			    			if (array_key_exists ( "nativeLogistics", $this->stdResult )) {
    				$nativeLogisticsResult=$this->stdResult->{"nativeLogistics"};
    				$this->nativeLogistics = new AlibabaOpenplatformTradeModelNativeLogisticsInfo();
    				$this->nativeLogistics->setStdResult ( $nativeLogisticsResult);
    			}
    			    		    				    			    			if (array_key_exists ( "productItems", $this->stdResult )) {
    			$productItemsResult=$this->stdResult->{"productItems"};
    				$object = json_decode ( json_encode ( $productItemsResult ), true );
					$this->productItems = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOpenplatformTradeModelProductItemInfoResult=new AlibabaOpenplatformTradeModelProductItemInfo();
						$AlibabaOpenplatformTradeModelProductItemInfoResult->setArrayResult($arrayobject );
						$this->productItems [$i] = $AlibabaOpenplatformTradeModelProductItemInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "tradeTerms", $this->stdResult )) {
    			$tradeTermsResult=$this->stdResult->{"tradeTerms"};
    				$object = json_decode ( json_encode ( $tradeTermsResult ), true );
					$this->tradeTerms = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOpenplatformTradeModelTradeTermsInfoResult=new AlibabaOpenplatformTradeModelTradeTermsInfo();
						$AlibabaOpenplatformTradeModelTradeTermsInfoResult->setArrayResult($arrayobject );
						$this->tradeTerms [$i] = $AlibabaOpenplatformTradeModelTradeTermsInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "extAttributes", $this->stdResult )) {
    			$extAttributesResult=$this->stdResult->{"extAttributes"};
    				$object = json_decode ( json_encode ( $extAttributesResult ), true );
					$this->extAttributes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOpenplatformTradeKeyValuePairResult=new AlibabaOpenplatformTradeKeyValuePair();
						$AlibabaOpenplatformTradeKeyValuePairResult->setArrayResult($arrayobject );
						$this->extAttributes [$i] = $AlibabaOpenplatformTradeKeyValuePairResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "orderRateInfo", $this->stdResult )) {
    				$orderRateInfoResult=$this->stdResult->{"orderRateInfo"};
    				$this->orderRateInfo = new AlibabaTradeOrderRateInfo();
    				$this->orderRateInfo->setStdResult ( $orderRateInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "orderInvoiceInfo", $this->stdResult )) {
    				$orderInvoiceInfoResult=$this->stdResult->{"orderInvoiceInfo"};
    				$this->orderInvoiceInfo = new AlibabaInvoiceOrderInvoiceModel();
    				$this->orderInvoiceInfo->setStdResult ( $orderInvoiceInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "customs", $this->stdResult )) {
    				$customsResult=$this->stdResult->{"customs"};
    				$this->customs = new AlibabaTradeCustoms();
    				$this->customs->setStdResult ( $customsResult);
    			}
    			    		    				    			    			if (array_key_exists ( "overseasExtraAddress", $this->stdResult )) {
    				$overseasExtraAddressResult=$this->stdResult->{"overseasExtraAddress"};
    				$this->overseasExtraAddress = new AlibabaTradeOverseasExtraAddress();
    				$this->overseasExtraAddress->setStdResult ( $overseasExtraAddressResult);
    			}
    			    		    				    			    			if (array_key_exists ( "baseInfo", $this->stdResult )) {
    				$baseInfoResult=$this->stdResult->{"baseInfo"};
    				$this->baseInfo = new AlibabaOpenplatformTradeModelOrderBaseInfo();
    				$this->baseInfo->setStdResult ( $baseInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "orderBizInfo", $this->stdResult )) {
    				$orderBizInfoResult=$this->stdResult->{"orderBizInfo"};
    				$this->orderBizInfo = new AlibabaOrderBizInfo();
    				$this->orderBizInfo->setStdResult ( $orderBizInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "quoteList", $this->stdResult )) {
    			$quoteListResult=$this->stdResult->{"quoteList"};
    				$object = json_decode ( json_encode ( $quoteListResult ), true );
					$this->quoteList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaOrderDetailCaigouQuoteInfoResult=new AlibabaOrderDetailCaigouQuoteInfo();
						$AlibabaOrderDetailCaigouQuoteInfoResult->setArrayResult($arrayobject );
						$this->quoteList [$i] = $AlibabaOrderDetailCaigouQuoteInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "guaranteesTerms", $this->arrayResult )) {
    		$guaranteesTermsResult=$arrayResult['${paramType.paramName}'];
    			    			$this->guaranteesTerms = new AlibabaOpenplatformTradeModelGuaranteeTermsInfo();
    			    			$this->guaranteesTerms->setStdResult ( $guaranteesTermsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "internationalLogistics", $this->arrayResult )) {
    		$internationalLogisticsResult=$arrayResult['${paramType.paramName}'];
    			    			$this->internationalLogistics = new AlibabaOpenplatformTradeModelInternationalLogisticsInfo();
    			    			$this->internationalLogistics->setStdResult ( $internationalLogisticsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "nativeLogistics", $this->arrayResult )) {
    		$nativeLogisticsResult=$arrayResult['${paramType.paramName}'];
    			    			$this->nativeLogistics = new AlibabaOpenplatformTradeModelNativeLogisticsInfo();
    			    			$this->nativeLogistics->setStdResult ( $nativeLogisticsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productItems", $this->arrayResult )) {
    		$productItemsResult=$arrayResult['${paramType.paramName}'];
    			$this->productItems = new AlibabaOpenplatformTradeModelProductItemInfo();
    			$this->productItems->setStdResult ( $productItemsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "tradeTerms", $this->arrayResult )) {
    		$tradeTermsResult=$arrayResult['${paramType.paramName}'];
    			$this->tradeTerms = new AlibabaOpenplatformTradeModelTradeTermsInfo();
    			$this->tradeTerms->setStdResult ( $tradeTermsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "extAttributes", $this->arrayResult )) {
    		$extAttributesResult=$arrayResult['${paramType.paramName}'];
    			$this->extAttributes = new AlibabaOpenplatformTradeKeyValuePair();
    			$this->extAttributes->setStdResult ( $extAttributesResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orderRateInfo", $this->arrayResult )) {
    		$orderRateInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->orderRateInfo = new AlibabaTradeOrderRateInfo();
    			    			$this->orderRateInfo->setStdResult ( $orderRateInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orderInvoiceInfo", $this->arrayResult )) {
    		$orderInvoiceInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->orderInvoiceInfo = new AlibabaInvoiceOrderInvoiceModel();
    			    			$this->orderInvoiceInfo->setStdResult ( $orderInvoiceInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "customs", $this->arrayResult )) {
    		$customsResult=$arrayResult['${paramType.paramName}'];
    			    			$this->customs = new AlibabaTradeCustoms();
    			    			$this->customs->setStdResult ( $customsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "overseasExtraAddress", $this->arrayResult )) {
    		$overseasExtraAddressResult=$arrayResult['${paramType.paramName}'];
    			    			$this->overseasExtraAddress = new AlibabaTradeOverseasExtraAddress();
    			    			$this->overseasExtraAddress->setStdResult ( $overseasExtraAddressResult);
    		}
    		    	    			    		    		if (array_key_exists ( "baseInfo", $this->arrayResult )) {
    		$baseInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->baseInfo = new AlibabaOpenplatformTradeModelOrderBaseInfo();
    			    			$this->baseInfo->setStdResult ( $baseInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orderBizInfo", $this->arrayResult )) {
    		$orderBizInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->orderBizInfo = new AlibabaOrderBizInfo();
    			    			$this->orderBizInfo->setStdResult ( $orderBizInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "quoteList", $this->arrayResult )) {
    		$quoteListResult=$arrayResult['${paramType.paramName}'];
    			$this->quoteList = new AlibabaOrderDetailCaigouQuoteInfo();
    			$this->quoteList->setStdResult ( $quoteListResult);
    		}
    		    	    		}
 
   
}
?>