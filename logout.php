<?php 
 
session_destroy();

 if (!isset($_SESSION['username']))
   {
   header("Location: home.php");
   }
   $_SESSION = array();
   // If it's desired to kill the session, also delete the session cookie.
   // Note: This will destroy the session, and not just the session data!
   if (isset($_COOKIE[session_name()])) {
       setcookie(session_name(), '', time()-42000, '/');
       
   }
   // Finally, destroy the session.
   session_destroy();
   exit();
 ?>
 <script type="text/javascript">
function back_block()
{
window.history.foward(1)
}
</script>