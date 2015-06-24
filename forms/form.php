<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-biz-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-biz-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-biz-green" style="background-color:#1A2223;font-size:14px;font-family:'Open Sans','Helvetica Neue', 'Helvetica', Arial, Verdana, sans-serif;color:#ECECEC;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Mode 4</h2></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>"><label class="title"></label>		<div class="column column1"><label><input type="checkbox" name="checkbox[]" value="Select"/ ><span>Select</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-number<?php frmd_add_class("number"); ?>"><label class="title"></label><input class="large" type="text" min="1" max="100" name="number" placeholder="Numero de tazas" value=""/></div>
<div class="submit"><input type="submit" value="Feed"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-biz-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>