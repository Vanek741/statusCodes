<?php var_dump(http_response_code(302)); var_dump(http_response_code()); header("HTTP/1.1 302 Временно перемещено"); header("А именно вот сюда: https://nesaweb.xyz/ivan/chat/index.php"); exit(); ?>
