<?php 
/**
* Permet de parser une URL
*/

class Router 
{
        
	static $prefixes = array();
	
	static function prefix($url, $prefix){
		self::$prefixes[$url] = $prefix;

	}


	/**
	*Permet de parser une url
	*@param $url URL à parser
	*@return tableau contenant les paramètres
	**/
	static function parse($url,$request){
                              
		$url = trim($url,'/');
                 
		$params = explode('/', $url);
		if(in_array($params[0],array_keys(self::$prefixes))){
			$request->prefix = self::$prefixes[$params[0]];
			array_shift($params);			 
		}
   
		$request->controller = $params[0];
		$request->action = isset($params[1]) ? $params[1] : 'pu_index';
		$request->params = array_slice($params, 2);
                
                $params[1]=isset($params[1])?$params[1]:'pu_index';
               
                //check pub methode
                if(mb_substr($params[1],0, 3, 'utf-8')=='pu_')    
                       return true;             
                else if(!isset($_SESSION['userInfoProfil'])){
                    $request->controller='dashboard';
                    $request->action='pu_echange';               
                }
                else if($_SESSION['userInfoProfil']==99)
                    return true;            
                else if(!Router::isAcces($params[0], $params[1])){
                    $request->controller='control';
                    $request->action='pu_denied';
                };
		return true;             
	}
        
            
        static function isAcces($controller,$action){                      
            $listAcces=$_SESSION['userAcces'];         
            foreach($listAcces as $key=>$value){            
                if(strtolower($value->control)==strtolower($controller.'controller'.$action)){
                        return true;
                }
            }        
            return false;
        }
        

	static function connect($redir,$origin){


	}

	/**
	 * Permet d'afficher une URL
	 * @param  [type] $url [description]
	 * @return [type]      [description]
	 */
	static function url($url){

	
		// return BASE_URL.DS.'controller'.DS.$url.'.php';
		return BASE_URL.DS.$url;


	}
}

 ?>