<?php

/* made by arsalan */
/**
 * dibuat karna sedang patah hati :(
 *	
 *	
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 * @package	Krakken Framwork
 * @author Muhammad Arsalan diponegoro
 * @copyright	Copyright (c) 2016 - 2017, 
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://gambut-network.ga/
 * @since	Version 0.0.1
 * @filesource
 */

//set variable root to your server/hosting

function lfi($param){

   if($param == 'TRUE'){

      $lfi =    '../';

      $lfi_1 = '../../';

      $lfi_2 = '../../../';

      $lfi_3 = '../../../../';

      $lfi_4 = '../../../../../';

      $lfi_5 = '../../../../../../';

      $lfi_6 = '../../../../../../../';

      $lfi_7 = '../../../../../../../../';

      $lfi_8 = '../../../../../../../../../';

      $lfi_9 = '../../../../../../../../../../';

      $lfi_10= '../../../../../../../../../../../';

      $lfi_11= '../../../../../../../../../../../../../';


      //you can add more or make a different

      /*

      *  it will protect your web app by lfi
         
      *  page will protected from lfi

      */
      if($_GET['page'] == $lfi   | 
         $_GET['page'] == $lfi_1 |
         $_GET['page'] == $lfi_2 | 
         $_GET['page'] == $lfi_3 |
         $_GET['page'] == $lfi_4 |
         $_GET['page'] == $lfi_5 |
         $_GET['page'] == $lfi_6 |
         $_GET['page'] == $lfi_7 |
         $_GET['page'] == $lfi_8 |
         $_GET['page'] == $lfi_9 |
         $_GET['page'] == $lfi_10 |
         $_GET['page'] == $lfi_11 

         )
      {

         echo "<script>window.location='index.php'</script>";

      }
      
   }

}
