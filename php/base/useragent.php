<?php
echo $_SERVER['HTTP_USER_AGENT'];


if ($pos=strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) 
{
  echo "<br>position is".$pos.'<br>���Ȃ���Internet Explorer���g�p���Ă��܂�<br/>';
  }
  
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
    {
    echo '<br>I see you are using Mozilla Firefox browser.<br>';
    }
?>
