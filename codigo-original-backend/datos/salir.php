<?php
session_start();
      session_destroy();
        echo '
        <script>
          alert("Session CERRADA");
          location.href = "../index.php";
        </script>
        ';
?>