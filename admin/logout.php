<?php
//退出操作，设置cookie有效期-1小时
setcookie("user_name", $username, time()-3600);
session_write_close();
header("location: index.php ");