<?php
// INTENTIONALLY VULNERABLE
if (isset($_GET['cmd'])) {
    system($_GET['cmd']);
}
echo "<h1>100% Secure Page</h1>";
?>