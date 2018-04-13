<?php

/**
 * @Author: Yeasir Arafat
 * @Date:   2018-04-13 16:30:23
 * @Last Modified by:   Yeasir Arafat
 * @Last Modified time: 2018-04-13 16:33:08
 */


$text = "Anything";
$var_str = var_export($text, true);
$var = "<?php\n\n\$text = $var_str;\n\necho 'hi there';\n\necho'<br/>$text';?>";
file_put_contents('filename.php', $var);