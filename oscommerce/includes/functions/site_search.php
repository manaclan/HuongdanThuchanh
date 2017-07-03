<?php
/*
  $Id: site_search.php,v 1.00 2003/10/03 Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

////
//search the indicated direcory for the search term
function CheckFileContents($dir, $searchTerm, &$fileList)
{  
   $matches = glob($dir . '/*'); 
   
   if (is_array($matches)) 
   {  
      foreach ($matches as $filePath) 
      { 
         if (is_dir($filePath)) 
         {
            CheckFileContents($filePath, $searchTerm, $fileList);
         } 
         else  
         {
           $fileName = end(explode("/", $filePath));
           if (end(explode(".", $fileName)) == 'php') //NOTE: fails if there's an extenstion such file.php.old
           {
      		  $contents = file_get_contents($filePath);
             
              if (strpos(strtolower($contents), strtolower($searchTerm))) 
      	     { 
                 if (file_exists(DIR_FS_CATALOG . '/' . $fileName))     
                 {
                    $fileList[] = $fileName;
                 }  
              } 
           }  
         }  
      } 
   } 
   return $fileList;
} 
?>
