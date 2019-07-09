<html>
<head><title>Apache modules</title></head>
<body>
<h1>Apache modules</h1>
<pre>
<?php
if (is_mod_rewrite_enabled()) {
  print "The apache module mod_rewrite is enabled.<br/>\n";
} else {
  print "The apache module mod_rewrite is NOT enabled.<br/>\n";
}

/**
 * Verifies if the mod_rewrite module is enabled
 *
 * @return boolean True if the module is enabled.
 */
function is_mod_rewrite_enabled() {
  if ($_SERVER['HTTP_MOD_REWRITE'] == 'On') {
    return TRUE;
  } else {
    return FALSE;
  }
}
?>
</pre>
</body>
</html>
