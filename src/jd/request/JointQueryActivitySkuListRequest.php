<?php
class JointQueryActivitySkuListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.joint.queryActivitySkuList";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $jointActivityId;
    	                        
	public function setJointActivityId($jointActivityId){
		$this->jointActivityId = $jointActivityId;
         $this->apiParas["jointActivityId"] = $jointActivityId;
	}

	public function getJointActivityId(){
	  return $this->jointActivityId;
	}

                                                    	                                            		                                    	                   			private $accessPin;
    	                        
	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                   			private $authType;
    	                        
	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                        	                        	                        	                        	                            }





        
 

