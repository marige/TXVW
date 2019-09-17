<?php
/**
 * Conf Class de configuration des parametres à la base de données
 */
class Conf
{
		static $debug = 1;
		static $databases = array(
			'default' => array(
					'host'        =>'sg1-ls5.a2hosting.com',
					'login'       =>'izichang_admin',
					'password'    =>'G10passe@it123ql',
					'database'    =>'izichang_db_ops'
				),
				'planning' => array(
					'host'        =>'localhost',
					'login'        =>'root',
					'password'    =>'toor',
					'database'    =>'planningDB'
				 )
	);

}

//Router::prefix('dsi','admin');
