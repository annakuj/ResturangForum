<?php
session_start();
if(session_destroy()) // Removes all sessions
{
header("Location: ../index.php");
}
?>