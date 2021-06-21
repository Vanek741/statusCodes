<?php var_dump(http_response_code(301)); var_dump(http_response_code()); header("HTTP/1.1 301 Перемещено навсегда"); header("Теперь оно здесь: https://nesaweb.xyz/ivan/chat/index.php"); exit(); ?>
