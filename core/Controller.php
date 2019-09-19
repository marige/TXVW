<?php
/**
 * Controller générale
 */
 class Controller
 {  
 	public $request;
 	private $vars = array();
 	public $layout = 'home';
 	public $rendered  = false;

 	/**
 	 * [__construct constructeur de la class]
 	 * @param [Objet] $request [initialise l'objet request]
 	 */
 	function __construct($request =null){
 		$this->Session = new Session();
		$this->Form = new Form($this);
		$this->Helper = new Helper($this);

 		if($request){

 		$this->request = $request;
 		//require ROOT.DS.'config'.DS.'hook.php';
 		}
 	}
        
       function sendMailElastic($destinataire,$message,$nomsender="IZICHANGE",$mailsender="communication@izichange.com"){
            $configuration = new \ElasticEmailClient\ApiConfiguration([
                'apiUrl' => 'https://api.elasticemail.com/v2/',
                'apiKey' => $this->getBanderoleVal("elastic")
            ]);
            $client = new \ElasticEmailClient\ElasticClient($configuration);              
            $client->Email->Send(
               "IZICHANGE",
               $mailsender,
               $nomsender,
                null,
                null,
                null,
                null,
                $mailsender,
                "Izichange",
                array($destinataire),
                array(),
                array(),
                array(),
                array(),
                array(),
                null,
                null,
                null,
                $message,
                null,
                "utf-8"
            );
            
        }
        
        
        function sendMail($ArrayNameMail,$message,$object=null,$replyTo=null){ 
            if($object==null){
               $object='TAXI AT THE PIER';
               }
            if($replyTo==null){
                $replyTo="noreply@taxiatpier.com";
            }
        
            foreach($ArrayNameMail as $email=>$nom){ 
                //to avoid infinity loop  
                    $subject = $object;
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: TAXI AT PIER <admin@taxipier.com>' . "\r\n" .
                    'Reply-To: '.$replyTo. "\r\n";
                    if(isset($nom) && !empty($nom) )
                    {
                         $name=$nom;
                        
                    } 
                    else{
                       $name="Dear Customer";
                    }
                    $salutation='Hey '.$name;
                    $mailContent= $message;
                    $template='<body style="padding:0; margin: 0;"><table style="height: 100%; width: 100%;" align="center"><tbody><tr><td  id="dbody" data-version="2.31" valign="top" style="width: 100%; height: 100%;"><table class="layer_1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="drow" valign="top" align="center"><div class="addnewrow  hideborder" data-x="0" data-y="-1" data-dir="before">&nbsp;</div><div class="dwrap" style="max-width:600px" data-y="0" data-x="0"><div class="layer_2" style=""><table class="edcontent" style="border-collapse: collapse;width:100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td align="center" class="edimg" valign="top"><img src="https://izichange.com/theme3/images/logo_mail.png" alt="Image" style="border-width: 0px; border-style: none; max-width: 141px; width: 100%;" align="center" width="141"></td></tr></tbody></table></div></div><div class="addnewrow  hideborder" data-x="0" data-y="0" data-dir="after" >&nbsp;</div></td></tr><tr><td class="drow" valign="top" align="center"><div class="dwrap" style="max-width:600px" data-y="1" data-x="0"><div class="layer_2" style=""><table class="edcontent" style="border-collapse: collapse;width:100%" cellspacing="0" border="0"><tbody><tr><td class="edtext" valign="top"><p class="style2 text-center">'.$salutation.'</p></td></tr></tbody></table></div></div></td></tr><tr><td class="drow" valign="top" align="center"><div class="dwrap" style="max-width:600px" data-y="2" data-x="0"><div class="layer_2" style=""><table class="edcontent" style="border-collapse: collapse;width:100%" cellspacing="0" border="0"><tbody><tr><td class="edtext" valign="top"><p>'.$mailContent.' <br></p></td></tr></tbody></table></div></div></td></tr><tr><td class="drow" valign="top" align="center"><div class="dwrap" style="max-width:596px" data-y="3" data-x="0"><div class="layer_2" style=""><table class="edcontent" style="border-collapse: collapse;width:100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td class="emptycell" valign="top"></td></tr></tbody></table></div></div><div class="addnewrow  hideborder" data-x="0" data-y="3" data-dir="after">&nbsp;</div></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: rgb(0, 168, 168);"><div class="dwrap" style="max-width:600px" data-y="4" data-x="0"><div class="layer_2" style=""><table class="edcontent" style="border-collapse: collapse;width:100%" cellspacing="0" border="0"><tbody><tr><td class="edsocialfollow" valign="top"><table style="margin:0 auto" class="edsocialfollowcontainer" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td><p><a href="https://fb.com/changeizi" target="_blank" style="text-decoration: none;"><img alt="icon-face" src="http://izichange.com/theme3/images/icon-facebook.png" style="height:32px; margin-left:10px; margin-right:5px; width:32px; " />&nbsp;&nbsp; </a><a href="https://twitter.com/izichange" target="_blank" style="text-decoration: none;"><img alt="twitter" src="http://izichange.com/theme3/images/icon-twitter.png" style="height:32px; margin-left:5px; margin-right:5px; width:32px" /> </a><a href="https://t.me/izichange" target="_blank" style="text-decoration: none;"><img alt="telegram" src="http://izichange.com/theme3/images/icon-telegram.png" style="height:32px; margin-left:5px; margin-right:10px; width:32px" /> </a><a href="https://www.youtube.com/channel/UCr8rkaCWDOFuknWOM4mJdUg" target="_blank" style="text-decoration: none;"><img alt="youtube" src="http://izichange.com/theme3/images/icon-youtube.jpg" style="height:32px; margin-left:10px; margin-right:10px; width:32px" /></a></p> <p style="margin-left:10px; color: rgb(255, 255, 255);"><strong> IZICHANGE, innover pour servir. </strong></p></td></tr></tbody></table></td></tr></tbody></table></div></div><div class="addnewrow  hideborder" data-x="0" data-y="4" data-dir="after">&nbsp;</div></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: rgb(239, 239, 239);"><div class="dwrap" style="max-width:600px" data-y="5" data-x="0"><div class="layer_2" style=""><table class="edcontent" style="border-collapse: collapse;width:100%" cellspacing="0" border="0"><tbody><tr><td class="edtext" valign="top"><p style="text-align: center; font-size: 4px;">Si vous ne souhaitez plus recevoir de courrier de notre part, vous pouvez <a href="{unsubscribe}" style="background-color: initial; font-size: 4px; color: rgb(130, 130, 130); font-family: Helvetica, Arial, sans-serif;text-decoration: none;"> désinscrire</a><br></p></td></tr></tbody></table></div></div><div class="addnewrow  hideborder" data-x="0" data-y="5" data-dir="after">&nbsp;</div></td></tr></tbody></table></td></tr></tbody></table><div class="addnewcell  hideborder" data-y="0" data-x="0" id="addnewcell0-0" data-dir="before" style="height:85px;top:32px;left:95px">&nbsp;</div><div class="addnewcell hideborder" data-y="0" data-x="0" id="addnewcell0-1" data-dir="after" style="height:85px;top:32px;left:695px">&nbsp;</div><div class="addnewcell  hideborder" data-y="1" data-x="0" id="addnewcell1-0" data-dir="before" style="height:72px;top:117px;left:95px">&nbsp;</div><div class="addnewcell hideborder" data-y="1" data-x="0" id="addnewcell1-1" data-dir="after" style="height:72px;top:117px;left:695px">&nbsp;</div><div class="addnewcell  hideborder" data-y="2" data-x="0" id="addnewcell2-0" data-dir="before" style="height:104px;top:189px;left:95px">&nbsp;</div><div class="addnewcell hideborder" data-y="2" data-x="0" id="addnewcell2-1" data-dir="after" style="height:104px;top:189px;left:695px">&nbsp;</div><div class="addnewcell  hideborder" data-y="3" data-x="0" id="addnewcell3-0" data-dir="before" style="height:40px;top:293px;left:97px">&nbsp;</div><div class="addnewcell hideborder" data-y="3" data-x="0" id="addnewcell3-1" data-dir="after" style="height:40px;top:293px;left:693px">&nbsp;</div><div class="addnewcell  hideborder" data-y="4" data-x="0" id="addnewcell4-0" data-dir="before" style="height:82px;top:333px;left:95px">&nbsp;</div><div class="addnewcell hideborder" data-y="4" data-x="0" id="addnewcell4-1" data-dir="after" style="height:82px;top:333px;left:695px">&nbsp;</div><div class="addnewcell  hideborder" data-y="5" data-x="0" id="addnewcell5-0" data-dir="before" style="height:62px;top:415px;left:95px">&nbsp;</div><div class="addnewcell hideborder" data-y="5" data-x="0" id="addnewcell5-1" data-dir="after" style="height:62px;top:415px;left:695px">&nbsp;</div></body>';
                   // $this->sendMailElastic($email,$template);
                    mail($email, $subject,$salutation." \n". $message, $headers); 
            }
        }
    
        public function renderNotif($message,$typenotif,$methodeRedir,$layout =null){
            $this->set('message', $message);
            $this->set('typemessage', $typenotif);
            $this->set('methode', $methodeRedir);
            
        if(isset($layout)) $this->layout = $layout;
 		if($this->rendered) return false;
 		else {
                    extract($this->vars);		 		
                    $view = ROOT.DS.'view'.DS.'redirect'.DS.'redirect.php';
                    ob_start();           
                    require($view);                        
                    $content_for_layout = ob_get_clean();
                    $controller = $this->request->controller;                 
                    require ROOT.DS.'view'.DS.'layout'.DS.$this->layout.'.php';      
                    $this->rendered = true;
	 	}
 	}
        
        

 	/**
 	 * [render Affiche la vue]
 	 * @param  [type] $view [Nom de la vue]
 	 * @return [type]       [retourne la vue]
 	 */
 	public function render($view,$layout =null){
         
        if(isset($layout)) $this->layout = $layout;
 		if($this->rendered) return false;
 		else {
		 		extract($this->vars);
		 		if(strpos($view, '/') === 0){
		 		$view = ROOT.DS.'view'.$view.'.php';
		 		}
	 			else {
			 	$view = ROOT.DS.'view'.DS.$this->request->controller.DS.$view.'.php';
			 		}

	 		ob_start();
            $temporal=explode("#", $view);
            if(isset($temporal[1]))
                {
                    require($temporal[0]);
                }else{
	 		require($view);
                        
                }
	 		$content_for_layout = ob_get_clean();
	 		$controller = $this->request->controller;
             //if($controller=='users' AND $this->Session->isLogged() == false ){ 
             /*if(!isset($_SESSION["userInfoID"])){
          
                require  ROOT.DS.'view'.DS.'users'.DS."auth".'.php';
                 }*/
            /*else{*/if(isset($temporal[1])){
                require ROOT.DS.'view'.DS.'layout'.DS.$this->layout.'.php#'.$temporal[1];
            }else{
             require ROOT.DS.'view'.DS.'layout'.DS.$this->layout.'.php';
            }
            /*     }*/
	 		$this->rendered = true;
	 		}
 	}
 	/**
 	 * [set Permet de passer un ou plusieurs les variables à la vue]
 	 * @param [var] $key   nom de la variable ou tableau de variables
 	 * @param [var] $value Valeur de la variable
 	 */
 	public function set($key,$value = null){
 		if(is_array($key)) {
 			$this->vars += $key;
 		}
 		else {
			$this->vars[$key] = $value;
			}
 	}

 	/**
 	 * [loadModel pour charger un model]
 	 * @param  [string] $name [Nom du model a chargé]
 	 * @return [Objet]       [Retourne un objet]
 	 */
 	public function loadModel($name, $baseDonnee = NULL){
 	    $file = ROOT.DS.'model'.DS.$name.'.php';
        require_once($file);

        if(!isset($this->$name)){
            $this->$name = new $name($baseDonnee);

 		}
 		else {
 			//echo "Le modèle ".$name." n'est pas chargé";
 		}
 	}


 	public function e404($message){
 	//	header('HTTP/1.0 404 not found');
 		$this->set('message',$message);
 		$this->render('/errors/404','nolayout');
 		die();
 	}

 	/**
 	 * [request description] Permet d'appeler un controller depuis n'importe quelle vue
 	 * @param  [type] $controller [le controlleur a appeler]
 	 * @param  [type] $action     [l'action ]
 	 * @return [type]              les actions du controller applé
 	 */
 	public function request($controller, $action){

 				$controller .= 'Controller';
 				require ROOT.DS.'controller'.DS.$controller.'.php';
 				$c = new $controller();
 				return $c->$action();


 	}
     
        
 	public function redirect($url,$code = null){

 		if($code == 30){
                header("HTTP/1.1 301 Moved Permanently");
 		header("Location:".Router::url($url));
 		}else{
                    header("Location:".Router::url($url));
                }
                        
 	}


 	 public  function objectToArray($d) {
        if (is_object($d)) {
            // Gets the properties of the given object
            // with get_object_vars function
            $d = get_object_vars($d);
        }

        if (is_array($d)) {
            /*
            * Return array converted to object
            * Using __FUNCTION__ (Magic constant)
            * for recursive call
            */
            return array_map(__FUNCTION__, $d);
        }
        else {
            // Return array
            return $d;
        }
    }

    public function arrayToObject($array){

        if(is_array($array)){

            $obj = (object) $array;
        }

        return $obj;
    }

   public function encrypt($data) {
        $key = "whats";  // Clé de 8 caractères max
        $data = serialize($data);
        $td = mcrypt_module_open(MCRYPT_DES,"",MCRYPT_MODE_ECB,"");
        $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
        mcrypt_generic_init($td,$key,$iv);
        $data = base64_encode(mcrypt_generic($td, '!'.$data));
        mcrypt_generic_deinit($td);
        return $data;
    }

    public function decrypt($data) {
        if(!empty($data)) {
            $key = "whats";
            $td = mcrypt_module_open(MCRYPT_DES,"",MCRYPT_MODE_ECB,"");
            $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
            mcrypt_generic_init($td,$key,$iv);
            $data = mdecrypt_generic($td, base64_decode($data));
            mcrypt_generic_deinit($td);

            if (substr($data,0,1) != '!')
                return false;

            $data = substr($data,1,strlen($data)-1);
            return unserialize($data);
        }
        else return 0;
    }

    
    public function getBanderoleVal($libbanderole){
         $this->loadModel("Banderole");
         return $this->Banderole->find(array('conditions' => 'libbanderole ="'.$libbanderole.'"'))[0]->valbanderole;      
       
    }
    
    // @param email à valider , retourne false ou true
    public function valideMail($email){     
    $email_Clean = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (filter_var($email_Clean, FILTER_VALIDATE_EMAIL) === false 
                || $email_Clean != $email
                ||strlen($email)>30) 
            return FALSE;
            
    return TRUE;
            
    }
  
    
    public function secureInput($input){    
        $input = str_replace(' ', '-', $input); // Replaces all spaces with hyphens.
        return preg_replace('/[^A-Za-z0-9\-]/', '', $input); // Removes special chars.   
    }
    
    
    
    
    
    
    
    
 }
