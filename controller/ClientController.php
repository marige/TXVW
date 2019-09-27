<?php


class ClientController extends Controller {
    
	public function pu_index($param=NULL){
	if(isset($this->request->data->action)){
            $var=$this->request->data->action;
            $param=$this->$var($this->request->data);
	}
        
        
        if(($param=="signin"||$param=="signup"||$param=="reset")&& !isset($_SESSION["clientInfoID"]))
        {
        //Afficher les fenetres login register... lorsque la personne n'est pas connecté
          //  $this->render($param,"clientlayout");
            $this->render($param);
        } 
        elseif ($param=="terms_of_use") {
            $this->render($param,"clientlayout");
        }
        else {
            $this->render('/main/index'); 
        }
        		
    }
    
 
    public function signin($data){       
        $this->loadModel('Client');
        if(!$this->valideMail($data->email)){
         $this->Session->setFlash("<h6><b>Please write a correct email </b></h6>","danger");
         return "signin";				   
        }
       
        $user=$this->Client->authClient($data->email,$data->password);
                                if(isset($user[0])){
                                    $this->Session->setLogged($user[0]->idclient);
                                    $this->Session->write("clientInfoID",$user[0]->idclient);
                                    $this->Session->write("clientStatut",$user[0]->statut);
                                    $this->Session->write("clientInfoEmail",$user[0]->email);
                                    $this->Session->setFlash("<h6>Welcome <b>".$user[0]->email."</b> </h6>","success");
                                    $this->render('client_order','dashboard_client');
                                    die();
                                }
                                else
				{
                                    $this->Session->setFlash("<h6><b>Invalid login or password</b></h6>","danger");                                
                                    $this->Session->setError();	
                                    return "signin";
                                }
    }
    

    public function signup($data){   
        $this->loadModel('Client');
        if (isset($data->password) & ($data->password!=$data->repass)) {
            $this->Session->setFlash("<h6><b>Your password and re-password don't match </b></h6>","warning");
            return "signup";
        }
        if(!isset($data->name)){
            $this->Session->setFlash("<h6><b>You need to provide a valid name </b></h6>","warning");
            return "signup";
        }
            
        
	if(!$this->valideMail($data->email)){
         $this->Session->setFlash("<h6><b>Please write a correct email </b></h6>","danger");
         return "signup";			   
        }
        
        if($this->Client->getValideClient($data->email)){
            $this->Session->setFlash("<h6><b>The account with $data->email exist. You just need to sign in</b></h6>","warning");
            return "signin";
        }
                    
        $tab4 = array(); 
        $tab4['email'] =$data->email;
        $tab4['name'] = $this->secureInput($data->name);
        $tab4['statut'] ="0";
        $tab4['password'] = sha1($data->password);     
                $clientInfoID=$this->Client->insert($tab4);  
        if(isset($clientInfoID)){
            $this->pu_confirme_mail($tab4['email']);
            $this->Session->setFlash("<h6>You've successful registered !!!\n Please check your mailbox: <b>".$tab4['email']."</b> to activate your account </h6>","info");
            return "signup";
        }else{
            $this->Session->setFlash("<h6><b>Something went wrong, try again please</b></h6>","warning");
            return "signin";
        }
        
    }
				
    
    public function reset($data){
       
        if(!isset($this->Client)){
         $this->loadModel('Client');
        }
        
        if(!$this->valideMail($data->email)){
         $this->Session->setFlash("<h6><b>Invalid mail address  </b></h6>","danger");
         return;			   
        }
        
        $idClient=$this->Client->getValideClient($data->email);
        
        if($idClient)
            {
      
            $this->Session->setFlash("<h6><b>Veuillez consulter votre boite mail pour la suite  </b></h6>","success");
            $code=$this->tokenGenerator($data->email);
            $textMail="Une demande de reinitialisation de mot de passe de votre compte a été lancé."
                    . "<br/>"
                    . "<br/> Si la demande vient de vous, veuillez  :"
                    . ""
                    . " <button  href='https://".DOMAINE."/client/pu_recorver/".$idClient."/".$code."' > Cliquer ICI</button> "
                    . "<br/><br/> ou coller ce lien : https://".DOMAINE."/client/pu_recorver/".$idClient."/".$code
                    . ""
                    . '<br/>'
                    . "<br/> Le lien est valide pour une duree d'une heure."
                    . "<br/>"
                    . "<br/> Si cela ne vient pas de vous , veuillez ignorer ce message."
                    . "<br/>Merci "
                    . "<br/>Admin IZI Change";
            $emailArray=array($data->email => '');
            $this->sendMail($emailArray, $textMail,"REINITIALISATION ");
         }
         else {
     $this->Session->setFlash("<h6><b> L'utilisateur n'est pas enregistré, Veuillez vous inscrire  </b></h6>","warning");
            
            }
    }

    public function pu_disconnect(){
            $this->Session->disconnect();
            unset($_SESSION["clientInfoEmail"]);
            unset($_SESSION["clientInfoID"]);
            unset($_SESSION["clientStatut"]);
            $this->pu_index('signin');
    }
    
    
    public function pu_order(){
        $this->render('client_order','dashboard_client');
    }
    
    
    public function pu_save_order(){
        if (isset($this->request->data->iddestination)){
            $this->loadModel('Commande');
            $tab4 = array(); 
            $tab4['idclient']  =$_SESSION['clientInfoID'];
            $tab4['iddestination']  =$this->secureInput($this->request->data->iddestination);
            $tab4['iditinerary']    =$this->secureInput($this->request->data->iditinerary);
            $tab4['idtaxi']         =$this->secureInput($this->request->data->idtaxi);
            $tab4['date_choose']    =$this->secureInput($this->request->data->date_choose);     
            $this->Commande->insert($tab4);
            $this->Session->setFlash("<h6>Order saved <b></b></h6>","success");
            $this->renderNotif("Order saved ", "success", "/client/pu_order", "dashboard_client");
        }
        $this->render('client_order','dashboard_client');
    }

    
    public function pu_commande_state(){
        
         $this->render('timeline','dashboard_client');
    }

    public function pu_message(){       
           if(isset($this->request->data->action))
           {
                   $tab4 = array();
                   $destinataire=array();
                       
            $tab4['email_users'] = htmlspecialchars($this->request->data->replyto);
            $tab4['name'] = $this->secureInput($this->request->data->name);
            //$tab4['subject'] = "Demande";
            $tab4['message'] = $this->secureInput($this->request->data->message);
                
                $destinataire["communication@izichange.com"]="Communication";
                $subject = $tab4['subject'];
     		$message ='. Je suis '.$tab4['name'].' ; '.$tab4['message'];
                $this->sendMail($destinataire, $message, $subject,$tab4['email_users']);
                $this->Session->setFlash("<h6>Message reçu!  <b>".$tab4['name']."</b></h6>","success");
            }
                

           $this->pu_auth();

    }
         
         
         
    public function tokenGenerator($email){
        if(!isset($this->Client)){
         $this->loadModel('Client');
        }
        return $this->Client->getToken($email);
    }

    
    public function pu_recorver($id,$token){
    
        if(!isset($this->Client)){
         $this->loadModel('Client');
        }
        
        if(isset($this->Client->getClient($id)[0]->idclient))
            {
                $result=$this->Client->checkToken($id,$token);

                if($result===0){
                    $this->Session->setFlash("<b>Lien incorrect  </b>","danger");
                    $this->pu_auth();                 
                }
                else if($result===2){
                    $this->Session->setFlash("<b>Lien Expiré  </b>","warning");
                    $this->pu_auth();
                   
                }
                else if($result===1){
                    $this->Session->setFlash("<b>Veuillez choisir votre nouveau mot de pass  </b>","success");
                    $this->set("token",$token);
                    $this->set("idclient",$id);
                    $this->render('recorver','nolayout');                    
                }
            }
       
        
    }
    
    public function pu_savePass(){
        $this->loadModel('Client');
        
        if($this->Client->checkToken($this->request->data->id,$this->request->data->token)===1){
            if($this->request->data->repassword==$this->request->data->password){
                
                $this->Client->updatePass($this->request->data);
                $this->Session->setFlash("<b>Mot de passe changé avec succès  </b>","success");
                $this->pu_auth();
                 return 0;    
            }
            $this->Session->setFlash("<b>Mot de passe non identique  </b>","warning");
            $this->set("token",$this->request->data->token);
            $this->set("idclient",$this->request->data->id);
            $this->render('recorver','nolayout');   
        }
    }
    
    
    public function pu_liste(){
        $this->loadModel('Commande');
        
        $this->isClientLevelOne();
        $this->set('operations_client',$this->Commande->getClientTransactions($_SESSION['clientInfoID']));
        $this->render('historique','layout'); 
    }
    
    
    public function pu_save_Id(){
        
        $this->isClientConnected();
        $this->loadModel('Client');
        $client=$this->Client->getClient($_SESSION['clientInfoID']);
        if(isset($this->request->data->nom)&& $client[0]->verification_id=='0'){
            $data['nom']=$this->secureInput($this->request->data->nom);
            $data['prenom']=$this->secureInput($this->request->data->prenom);
            $data['contact']=$this->secureInput($this->request->data->contact);
            
            $data['idclient']=$_SESSION['clientInfoID'];
            $data['statut']='1';
            
            if($this->Client->update($data)){
            $_SESSION['clientStatut']='1';
            unset($this->request->data->nom);
            $this->renderNotif("Données sauvegarder avec succès. Cliquer ===> ",'success', '/client/pu_profil','layout');
   
            }
        }
        
         $this->renderNotif("Modification non authorisée. Cliquer ===> ",'warning', '/client/pu_profil','layout');
     }
    
    
     public function pu_save_adress(){
        
        $this->isClientConnected();
        $this->loadModel('Client');
        $client=$this->Client->getClient($_SESSION['clientInfoID']);
        if(isset($this->request->data->pays) && $client[0]->verification_adress=='0'){
            $data['pays']=$this->secureInput($this->request->data->pays);
            $data['town']=$this->secureInput($this->request->data->town);
            $data['region']=$this->secureInput($this->request->data->region);
            $data['adress']=$this->secureInput($this->request->data->adress);
            
            $data['idclient']=$_SESSION['clientInfoID'];
            $data['statut']='1';
            
            if($this->Client->update($data)){
            $_SESSION['clientStatut']='1';
           $this->renderNotif("Données sauvegarder avec succès. Cliquer ===> ",'success', '/client/pu_profil','layout');
            }
        }
        $this->renderNotif("Modification non authorisée. Cliquer ===> ",'warning', '/client/pu_profil','layout');
    }
    
    public function pu_save_document_id(){
        $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
        $target_file = "documents_client/".$_SESSION['clientInfoID']."_card_".time().".".$imageFileType ;
        $uploadOk = $this->controle_image($_FILES["fileToUpload"],$imageFileType );
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk !== 0) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                 $datas['client_id']     =$_SESSION['clientInfoID'];
                 $datas['type_document'] ='card';
                 $datas['lib_document']  =$target_file;
                 
                 $info['idclient']       =$_SESSION['clientInfoID'];
                 $info['verification_id']=9;
               $this->loadModel('Client_documents');
               $this->loadModel('Client');
               $this->Client_documents->insert($datas);
               $this->Client->update($info);
               $this->renderNotif("Fichier Sauvegardé avec succès. Cliquer ===> ",'success', '/client/pu_profil','layout');
            } else {
                 $this->renderNotif("Sauvegarde échoué Veuillez reprendre. Cliquer ===> ",'danger', '/client/pu_profil','layout');
           }
        }
        
        $this->pu_profil();
    }
    
    public function pu_save_document_adress(){
        $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
        $target_file = "documents_client/".$_SESSION['clientInfoID']."_adress_".time().".".$imageFileType ;
        $uploadOk = $this->controle_image($_FILES["fileToUpload"],$imageFileType );
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk !== 0) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                 $this->Session->setFlash("Fichier Sauvegardé ","success");
                 $datas['client_id']     =$_SESSION['clientInfoID'];
                 $datas['type_document'] ='adress';
                 $datas['lib_document']  =$target_file;
                 
                 $info['idclient']       =$_SESSION['clientInfoID'];
                 $info['verification_adress']=9;
               $this->loadModel('Client_documents');
               $this->loadModel('Client');
               $this->Client_documents->insert($datas);
               $this->Client->update($info);
            } else {
                 $this->Session->setFlash("Sauvegarde échoué Veuillez reprendre.","danger");
            }
        }
        
        $this->pu_profil();
    }
    
    public function controle_image($data,$imageFileType ){
        // Check if image file is a actual image or fake image
            $check = getimagesize($data["tmp_name"]);
            if($check == false) {
             $this->renderNotif("Le fichier n'est pas une image. Cliquer ===> ",'danger', '/client/pu_profil','layout');
             return 0;
            }
    
        // Check file size
        if ($data["size"] > 5000000) {
            $this->renderNotif("Le fichier est trop volumineux. Cliquer ===> ",'danger', '/client/pu_profil','layout');
            return 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $this->renderNotif("Seul les JPG, JPEG, PNG & GIF files sont authorisé. Cliquer ===> ",'danger', '/client/pu_profil','layout');
             return 0;
        }
        
        return 1;
    }

        public function  pu_listeFieul(){
         $this->isClientLevelOne();
         $this->loadModel('Client');
         $this->set('list_fieuls',$this->Client->getListFieuil($_SESSION["clientInfoID"]));
         $this->render('listfieul','layout'); 
    }
    
    public function pu_profil(){
       // $this->isClientLevelOne();
        
        if(!isset($this->Client)){
       // $this->loadModel('Client');
        }
        
       // $this->set("client",$this->Client->getClient($_SESSION['clientInfoID']));
        $this->render('profil_client','dashboard_client');
    }
    
    public function pu_view_profil(){
       // $this->isClientLevelOne();
        
        if(!isset($this->Client)){
       // $this->loadModel('Client');
        }
        
       // $this->set("client",$this->Client->getClient($_SESSION['clientInfoID']));
        $this->render('infoclient','dashboard_client');
    }
    
    
    
    public function isClientConnected(){
         if(!isset($_SESSION['clientStatut'])){
         $this->Session->setFlash("<b>Veuillez vous connecter </b>","warning");
         $this->pu_auth();
        }
    }
    
    public function isClientLevelOne(){
        $this->isClientConnected();
        if($_SESSION['clientStatut']=='-1'){
         $this->Session->setFlash("<b>Veuillez confirmer votre Email pour avoir accès click <a class='btn btn-info' href='https://".DOMAINE."/client/pu_confirme_mail/".$_SESSION['clientInfoEmail']."'>ICI</a> </b>","warning");
         $this->pu_auth(); 
         
        }
         if($_SESSION['clientStatut']=='0'){
         $this->Session->setFlash("<b>Veuillez complèter votre profil pour avoir accès </b>","warning");
         $this->render('profil_client','layout');
       
        }
    }
    
    public function pu_referral(){
        $this->isClientLevelOne();
        
        if(!isset($this->Client)){
        $this->loadModel('Client');
        }
	$this->loadModel('Compte');
        $this->loadModel('Bonus_paiement');
        
	$this->set("bonus_pending", $this->Bonus_paiement->getBonusPending($_SESSION['clientInfoID']));
        $this->set("historique",$this->Bonus_paiement->getListeBonus());
	$this->set('liste_compte_in', $this->Compte->listCompteValideEntre());
        $this->set("client",$this->Client->getClient($_SESSION['clientInfoID']));
        $this->render('referral','layout');
    }
    
    
    public function pu_confirme_mail($email){
        if(!isset($this->Client)){
            $this->loadModel('Client');
        }
        $idClient=$this->Client->getClientByMail($email);
        
        if($idClient!=0)
            {
            $code=$this->tokenGenerator($email);
            $this->send_mail_validation($idClient,$code,$email);
         }else{
            $client_temp_data= $this->Client->recordTemporalClient($email);
            $code=$this->tokenGenerator($email);
            $this->send_mail_validation($client_temp_data,$code,$email);
            }
        $this->Session->setFlash("<h6><b>You've succesfull  registered </b> check your mailbox to activate your account</h6>","success");
         
    }
  
    private function send_mail_validation($idClient,$code,$email){
        $textMail="A request to reset your account password has been started."
                    . "<br/>"
                    . "<br/> If the request comes from you, please :"
                    . ""
                    . " <a href='https://".DOMAINE."/client/pu_confirme_mail_validation/".$idClient."/".$code."' > Cliquer ICI </a> "
                    . "<br/><br/> "
                    . "or paste this link : https://".DOMAINE."/client/pu_confirme_mail_validation/".$idClient."/".$code
                    . ""
                    . '<br/> '
                    . "<br/> The link is valid for one hour."
                    . "<br/>"
                    . "<br/> If this does not come from you, please ignore this message."
                    . "<br/> https://".DOMAINE
                    . "<br/>Admin TAXI AT THE PIER";
        $emailArray=array($email => '');
        $this->sendMail($emailArray, $textMail,"Validation Mail ");

    }

   
    public function pu_confirme_mail_validation($idClient,$code){
        if(!isset($this->Client)){
            $this->loadModel('Client');
        }
     
        if(isset($this->Client->getClient($idClient)[0]->idclient))
            {
                $result=$this->Client->checkToken($idClient,$code);

                if($result===0){
                    $this->Session->setFlash("<b>Lien incorrect  </b>","danger");
                    $this->render("auth", "nolayout");                  
                }
                else if($result===2){
                    $this->Session->setFlash("<b>Lien Expiré  </b>","warning");
                    $this->render("auth", "nolayout");               
                }
               else if($result===1){
                    $this->Session->setFlash("<b>Mail confirmé avec success  </b>","success");
                    $this->Client->setMailValide($idClient);
                    $_SESSION['clientStatut']='0';
                     $this->render("auth", "nolayout");                  
                }
            }
    }
    
    public function pu_mail_etat($email){
         $this->loadModel('Client');
         echo $this->Client->getMailValide($email);
        return 0;
    }
   
     
            
}

