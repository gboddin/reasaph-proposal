<?php
/**
 * For code completion :
 * @var \League\Plates\Template\Template $this
 * @var \Config\Config $config
 */
?>
<html>
<head>
    <title><?=$config->get('site.name') ?></title>
</head>
<body>
<h1><?=$this->e($config->get('site.description')) ?></h1>
</body>
</html>
