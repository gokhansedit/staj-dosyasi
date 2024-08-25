<?php
 //the URL for the example here: http://mydomain.com/?id=post/my-article
 if($_GET['id'])
 {
   //breaks the variable apart, removes any empty array values and reorders the index
   $myParams = array_values(array_filter(explode('/', $_GET['id'])));
   if(count($myParams > 1)
   {
       $sql = "SELECT * FROM post_table WHERE slug = '".mysql_real_escape_string($myParams[1])."'";
       $result = mysql_query($sql);
   }

 }
?>