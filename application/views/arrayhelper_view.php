<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <title>arrayH</title>
</head>
<body>
<pre>
<?PHP
print_r($seo);
?>
<p>1.Element()</p>
    <?= element("title",$seo); ?>
    <p>2.Random_Element()</p>
    <?= random_element($seo); ?>
</pre>
</body>
</html>

