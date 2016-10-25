/*****************************************************************************

						 _               _    
						| |    ___  __ _| | __
						| |   / _ \/ _` | |/ /
						| |__|  __/ (_| |   < 
						|_____\___|\__,_|_|\_\ 
											a lightweight php framework

by: Muhammad Arsalan Diponegoro
******************************************************************************/

function version_0.1($preview){

	private $web;
		function __construct($php){

			$__feature = array(

								anti_xss	=>	'Y',
								anti_lfi	=>	'Y',
								anti_rfi	=>	'Y',
								PDO_support =>	'Y',
								lighweight	=>	'Very'

			);		

			$__sys_requiretment = array(

								os			=> 'linux , windows , osx , bsd',
								php_version	=> '5++',
								web_server	=> 'apache , nginx , lighttpd',
								database	=> 'mysql/mariadb',
								pdo_driver	=> 'Y'
			);

		}
}
