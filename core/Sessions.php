<?php 
/**
* 
*/
class Session  
{
	
	function __construct()
	{
		if(!isset($_SESSION)){
			session_start();
		}
	}

/**
 * [setFlash Pour definir une variable de session]
 * @param [type] $message [description]
 * @param [type] $type    [description]
 */
	function setFlash($message,$type){

		$_SESSION['flash'] = array(
			'message' => $message,
			'type' => $type);
	}


/**
 * [flash Pour afficher un message flash en session
 * @return [type] [description]
 */
	public function flash(){
		if(isset($_SESSION['flash']) && !empty($_SESSION['flash']) ){
			$flash = $_SESSION['flash'];
			$html ='<div class="alert alert-'.$_SESSION['flash']['type'].' alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               '.$_SESSION['flash']['message'].'
                            </div>';
		$_SESSION['flash'] = array();

		return $html;
		}
	}


	public function write($key, $value){
		$_SESSION[$key] = $value;
	}


/**
 * Permet de lire une session
 * @param  [type] $key [description]
 * @return [type]      [description]
 */
	public function read($key = null){
		if($key){
			if(isset($_SESSION[$key])){
				return $_SESSION[$key];
			}else return false;
		}
		else return $_SESSION;
	}


/**
 * Permet de savoir si une session a déjà été defini
 * @return boolean [description]
 */
	public function isLogged(){
		
		return isset($this->Session->id);

	}


	public function setLogged($id){

		$_SESSION['id'] = $id;
	}



	public function disconnect(){
		unset($_SESSION['id']);
	}

	public function setError(){

		$_SESSION['err'] = 'ok';
	}
        
        
        /*
         * @param $messageText le message à afficher par le bot
         * @param $channel le canal vers le quel le message sera diffuser
         * "reply_markup": {
            "inline_keyboard": [[
                {
                    "text": "A",
                    "callback_data": "A1"            
                }, 
                {
                    "text": "B",
                    "callback_data": "C1"            
                }]
            ]
        }
         */
        
        public function messageIziRo($messageText){
            $this->messageBot($messageText);
        }
        public function  messageBot($messageText, $channel=null,$reply_markup=NULL ){
            
            $apiToken = "527232391:AAFVg9l3RI_7atwPmg086aQ888C9e2JhF3g";
            
            if ($channel === null) {
            $channel = '@changeBusiness';
            }
   
            if($reply_markup===NULL){
                $data = [
                        'chat_id'       => $channel,
                        'text'          => $messageText,
                        'parse_mode'    =>"HTML"
                        ];
            }else{
                $data = [
                        'chat_id'       => $channel,
                        'text'          => $messageText,
                        'reply_markup'  => $reply_markup,
                        'parse_mode'    =>"HTML"
                        ];
            }
        
           $response ="https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data) ;

           file_get_contents($response);
        }
}
