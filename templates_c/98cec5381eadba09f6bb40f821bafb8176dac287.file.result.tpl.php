<?php /* Smarty version Smarty-3.1.8, created on 2012-04-25 21:33:15
         compiled from ".\templates\result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89304f986d75c51744-24093896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98cec5381eadba09f6bb40f821bafb8176dac287' => 
    array (
      0 => '.\\templates\\result.tpl',
      1 => 1335389594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89304f986d75c51744-24093896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f986d75cf1d87_09818513',
  'variables' => 
  array (
    'result' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f986d75cf1d87_09818513')) {function content_4f986d75cf1d87_09818513($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br /> 
		<?php } ?><?php }} ?>