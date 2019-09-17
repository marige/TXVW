<?php
/**
* Model princial
*/
class Model
{ 
	static $connections = array();
	public $table = false;
	public $db;
	public $primarykey = 'id';
        public $confs = 'default';

	public function __construct($confs = NULL)
	{
            /*
		if ($confs == NULL) {
			$confs = $this->confs;
		}
		 
             */
		 //Récupere le nom de la table automatiquement
		 if($this->table  === false) {
		 	$this->table = strtolower(get_class($this));
		 }
	/*	$conf = Conf::$databases[$confs];
		 
		// if(Model::$connections[$conf] != NULL){
		// 	$this->db = Model::$connections[$conf];
		// 	return true;
		// }

		// debug(Model::$connections[$conf]);
		// if( isset(Model::$connections[$conf]) ){
		// 	$this->db = Model::$connections[$conf];
		// 	return true;
		// }

		try {
			$pdo = new PDO('mysql:host='.$conf['host'].';dbname='.$conf['database'].';',$conf['login'],$conf['password'],
				array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8') );

			// a supprimer après la phase de développement
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
			//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//	Model::$connections[$conf] = $pdo;
			$this->db = $pdo;
                        $pdo=null;
		 }
		 catch(PDOException $e){
		 	if(Conf::$debug == 1) {
		 		die($e->getMessage());
		 	}
		 	else
		 	{
		 		echo "Impossible de charger la base de données";
		 	}
		 }
*/
	}

        public function openConnec(){
            
            $conf = Conf::$databases['default'];
            try {
			$pdo = new PDO('mysql:host='.$conf['host'].';dbname='.$conf['database'].';',$conf['login'],$conf['password'],
				array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8') );

			// a supprimer après la phase de développement
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
			//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//	Model::$connections[$conf] = $pdo;
			$this->db = $pdo;
                        $pdo=null;
		 }
		 catch(PDOException $e){
		 	if(Conf::$debug == 1) {
		 		die($e->getMessage());
		 	}
		 	else
		 	{
		 		echo "Impossible de charger la base de données";
		 	}
		 }
        }
	/**
	 * [find description]
	 * @param  [type] $req [description]
	 * @return [type]      [description]
	 */
	public function find($req = null)
	{
            $this->openConnec();
            
	    $sql = 'SELECT ';

	    if(isset($req['fields'])){
	    	if(is_array($req['fields'])){

	    		$sql .= implode(', ',$req['fields']);
	    	}
	    	else{

	    		$sql .= $req['fields'];
	    	}
	    }
	    else {
	    	$sql .= ' * ';
	    }

	    $sql .= ' FROM '.$this->table.' as '.get_class($this).'';

	    if(isset($req['conditions'])){
	    	$sql .= ' WHERE ';
	    	if(!is_array($req['conditions'])){
	    		$sql .= $req['conditions'];
	    	}
	    	else {
	    		$cond = array();
	    			foreach ($req['conditions'] as $k => $v) {
	    				if(!is_numeric($v)){
	    					$v = '"'.$this->db->quote($v).'"';
	    				}
	    				$cond[] = "$k = $v";

	    			}
	    		$sql .= implode(' AND ', $cond);
	    	}


	    }

	    if(isset($req['limit'])){

	    	$sql .= ' LIMIT '.$req['limit'];
	    }

 // debug($sql);
 //echo $sql;
		try{

			$pre = $this->db->prepare($sql);
			$pre->execute();
                        
			return   $pre->fetchAll(PDO::FETCH_OBJ);
		}
		catch (PDOException $e)
		 {

		 	if(Conf::$debug == 1) {

                  debug($e->getMessage());
            }
            else{
               debug("Erreur au niveau de la requête SAVE du Model");

            }
		 }
                    finally {
                        $this->closeConnec();
                    }
                 
	}

	public function findfirst($req){

		return current($this->find($req));
	}

        public function findlast($req){

		return end($this->find($req));
	}

	public function findcount($conditions){
		   $res = $this->findfirst(array(
				'fields' => 'COUNT('.$this->primarykey.''.$this->table.') as count ',
				'conditions' => $conditions

				));

		   	return $res->count;
				}


	public function delete($id){
                $this->openConnec();
		$key = $this->primarykey.''.$this->table;
		$sql = "DELETE FROM {$this->table} WHERE {$key} = $id";
		$this->db->query($sql);
                $this->closeConnec();
	}

	public function deleteFromTable($latable, $id)
	{
                $this->openConnec();
		$key = $this->primarykey.''.$latable;
		$sql = "DELETE FROM {$latable} WHERE {$key} = $id";
		$this->db->query($sql);
                  $this->closeConnec();
	}

	public function insert($data){
            $this->openConnec();
		$fields =array();
		$d =array();
		foreach ($data as $k => $v) {
			$fields[] = "$k=:$k";
			$d[":$k"] = $v;
		}
		       $sql = "INSERT INTO ".$this->table." (";
			foreach ($data as $key => $value) {
				$sql .= "$key,";
			}
			$sql = 	substr($sql, 0, -1);
			$sql .= ") VALUES (";
			foreach ($data as $value) {
				$value = addslashes($value);
				$sql .= "'$value',";
			}
			$sql = substr($sql, 0, -1);
			$sql .= ")";

			$pre = $this->db->prepare($sql);
	 	        $pre->execute($d);
	   		 
                        $id_last=$this->db->LastInsertId();
                        $this->closeConnec();
                        return $id_last;
	}
    
        public function update($data){
                $this->openConnec();
		$fields =array();
                $keyPrimaire=$this->primarykey.''.$this->table;
		$d =array();
		foreach ($data as $k => $v) {
			$fields[] = "$k=:$k";
			$d[":$k"] = $v;
		}		 
		if(isset($data[$keyPrimaire]) && !empty($data[$keyPrimaire]) ){
		 	$sql = 'UPDATE '.$this->table.' SET '.implode(',',$fields).' WHERE '.$keyPrimaire.'=:'.$keyPrimaire;
	//	 	debug($sql);
        //var_dump($sql);
		    $pre = $this->db->prepare($sql);
		    $pre->execute($d);
                    $this->closeConnec();
		    return $data[$keyPrimaire];
		}

	}

	/**
	 * Sauvegarder dans une table
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function insertInTable($latable, $data){
                $this->openConnec();
		$fields =array();
		$d =array();
			foreach ($data as $k => $v) {
				$fields[] = "$k=:$k";
				$d[":$k"] = $v;
			}

			$sql = "INSERT INTO ".$latable." (";
			foreach ($data as $key => $value) {
				$sql .= "$key,";
			}
			$sql = 	substr($sql, 0, -1);
			$sql .= ") VALUES (";
			foreach ($data as $value) {
				$sql .= "'$value',";
			}
			$sql = substr($sql, 0, -1);
			$sql .= ")";

			$pre = $this->db->prepare($sql);
	 	        $pre->execute($d);
                        $last_data=$this->db->LastInsertId();
                        $this->closeConnec();
	   		return $last_data;

	}    
        
        
        public function updateInTable($latable, $data){
                $this->openConnec();
		$fields =array();
		$d =array();
                $keyPrimaire=$this->primarykey.''.$latable;
                
			foreach ($data as $k => $v) {
				$fields[] = "$k=:$k";
				$d[":$k"] = $v;
			}
		if(isset($data[$keyPrimaire]) && !empty($data[$keyPrimaire]) ){
			 $sql = 'UPDATE '.$latable.' SET '.implode(',',$fields).' WHERE '.$keyPrimaire.'=:'.$keyPrimaire;
                         $pre = $this->db->prepare($sql);
		    $pre->execute($d);
                    $this->closeConnec();
	   		return true;
		}
	
	}




/**
		* Permet de récupérer plusieurs lignes d'une table spécifique dans la base de données
		*
		* @param $data conditions de récupération
		* @param $latable Table spécifique sur laquelle la requete sera executée
		*
		**/
		// public function findInTable($latable, $conditions = null){
		// 	$conditions = "1=1";
		// 	$fields = "*";
		// 	$limit = "";
		// 	$order = "id DESC";
		// 	//extract($data);

		// 	//if (isset($data["limit"])) { $limit = "LIMIT ".$data["limit"]; }
		// 	$sql = "SELECT $fields FROM ".$latable;
		// 	if(is_array($conditions)){

		// 		$sql .= " WHERE $contions";
		// 	}

		//     $pre = $this->db->prepare($sql);
		// 	$pre->execute();
		// 	return   $pre->fetchAll(PDO::FETCH_OBJ);

		// }



	/**
	 * [find description]
	 * @param  [type] $req [description]
	 * @return [type]      [description]
	 */
	public function findInTable($latable, $req = null)
	{
            $this->openConnec();
	    $sql = 'SELECT ';

	    if(isset($req['fields'])){
	    	if(is_array($req['fields'])){

	    		$sql .= implode(', ',$req['fields']);
	    	}
	    	else{

	    		$sql .= $req['fields'];
	    	}
	    }
	    else {
	    	$sql .= ' * ';
	    }

	    $sql .= ' FROM '.$latable.' as '.get_class($this).'';

	    if(isset($req['conditions'])){
	    	$sql .= ' WHERE ';
	    	if(!is_array($req['conditions'])){
	    		$sql .= $req['conditions'];
	    	}
	    	else {
	    		$cond = array();
	    			foreach ($req['conditions'] as $k => $v) {
	    				if(!is_numeric($v)){
	    					$v = '"'.$this->db->quote($v).'"';
	    				}
	    				$cond[] = "$k = $v";

	    			}
	    		$sql .= implode(' AND ', $cond);
	    	}


	    }

	    if(isset($req['limit'])){

	    	$sql .= ' LIMIT '.$req['limit'];
	    }

		$pre = $this->db->prepare($sql);
		$pre->execute();
                $this->closeConnec();
		return   $pre->fetchAll(PDO::FETCH_OBJ);
	}
        


	public function findfirstInTable($req){

		return current($this->findInTable($req));
	}
        
        public function findWithRequest($req){ 
                $this->openConnec();
                 $pre = $this->db->prepare($req);
                 $pre->execute();
                 $this->closeConnec();
                 if($pre->rowCount()>0)
                    return $pre->fetchAll(PDO::FETCH_OBJ);
                 else 
                     return null;                 
        }
        
         public function updateInsertWithRequest($req){ 
                $this->openConnec();
                 $pre = $this->db->prepare($req);
                 $pre->execute();
                 $this->closeConnec();
                 return true;
        }
        
        public function __destruct() {
            $this->closeConnec();
        }


        public function closeConnec(){
            if(isset($this->db))
                $this->db=null;
        }
        
        public function insertOperation($data){
            $this->openConnec();
            $sql = "INSERT INTO operations(typeoperation_id, client_id, parrain_id,bonus,"
                    . "montant_envoye_par_client,reception_acount_client,compte_business_in_id,"
                    . "compte_business_out_id,hash_transaction,montant_recu_par_client,etat,"
                    . "unique_id_transaction,fraistransfert,idshift,randcode,ip_operation,mac_demande,bonus_partenaire)"
                    . " VALUES (:typeoperation_id, :client_id, :parrain_id,:bonus,:montant_envoye_par_client,"
                    . ":reception_acount_client,:compte_business_in_id,:compte_business_out_id,:hash_transaction,"
                    . ":montant_recu_par_client,:etat,:unique_id_transaction,:fraistransfert,:idshift,:randcode,"
                    . ":ip_operation,:mac_demande,:bonus_partenaire)";
            $stmt= $this->db->prepare($sql);
            $stmt->execute($data);
            $id_last=$this->db->LastInsertId();
            $this->closeConnec();
            return $id_last;
        }
        
        public function getOperationByHash($hash,$is_uniquehash=false){
            $this->openConnec();
            $champ=$is_uniquehash?'hash_transaction':'unique_id_transaction';
            $sql = 'SELECT * FROM operations
                WHERE '.$champ.' like :hash_transaction and etat in(0,1,9,-1)';
            $pre = $this->db->prepare($sql);
            $pre->execute(array(':hash_transaction' =>'%'.$hash.'%'));      
              $this->closeConnec();
            return $pre->rowCount()>0?$pre->fetchAll(PDO::FETCH_OBJ)[0]->idoperations:null;                
        }
        

}
