<?php
$result = htmlspecialchars($_REQUEST);
file_put_contents($_SERVER["DOCUMENT_ROOT"] . "/log.txt", var_export($result, true));