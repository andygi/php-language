<?php

//variable passing mode example.php?locale=it_IT

require_once('lib/language-tools.php');

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Translation</title>
</head>
<body>

<?php echo(__('hello world')); ?>

</body>
</html>
