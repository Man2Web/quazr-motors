<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<?php
date_default_timezone_set("Asia/kolkata");
$db = new mysqli("localhost","root", "","quazar");

if($db->connect_error)
{
    echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("ERROR","DB connect exception. Contact developer","error");';
  echo '}, 1000);</script>';
}

?>
