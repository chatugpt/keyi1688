<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeUploadRefundVoucherParam/AlibabaOceanOpenplatformCommonOrderRefundUploadVoucherResult.class.php');

class AlibabaTradeUploadRefundVoucherResult {

        	
    private $result;
    
        /**
    * @return 返回结果
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置返回结果     
     * @param AlibabaOceanOpenplatformCommonOrderRefundUploadVoucherResult $result     
          
     * 此参数必填     */
    public function setResult(AlibabaOceanOpenplatformCommonOrderRefundUploadVoucherResult $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaOceanOpenplatformCommonOrderRefundUploadVoucherResult();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    			    			$this->result = new AlibabaOceanOpenplatformCommonOrderRefundUploadVoucherResult();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>