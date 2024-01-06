<?php
    // session start:
    session_start();
    // session unset:
    session_unset();
    // session destroy:
    session_destroy();
    // user redirect to login page:
    echo "<script>alert(`logout successfully`)</script>";
    echo "<script>window.location.assign(`index11.php`)</script>";
?>