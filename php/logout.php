<?php

if (count($_COOKIE) > 0)
{
   foreach ($_COOKIE as $key => $value)
   {
      setcookie($key, '', time() - 3600);  
   }
}

else{
}

?>