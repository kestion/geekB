<?php /* Smarty version Smarty-3.1.8, created on 2012-04-25 21:32:37
         compiled from "views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84784f97cdd79929c8-27385325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3fd37e6f529e330906b3654bbe2b19ae9511a7' => 
    array (
      0 => 'views\\index.tpl',
      1 => 1335389484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84784f97cdd79929c8-27385325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f97cdd79c7b28_33094858',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f97cdd79c7b28_33094858')) {function content_4f97cdd79c7b28_33094858($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  
	<head>
       <title>Decathlon</title>	 
       
      <link rel="stylesheet" type="text/css" href="styles/style.css" />
         
   </head>
  
	<body>
	
		<?php if (isset($_smarty_tpl->tpl_vars['result']->value)){?>
			<?php echo $_smarty_tpl->getSubTemplate ('result.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }else{ ?>
			<?php echo $_smarty_tpl->getSubTemplate ('form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
		
	</body>
	
</html><?php }} ?>