<?php /* Smarty version Smarty-3.1.8, created on 2012-05-24 16:59:11
         compiled from ".\templates\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152344f98545e9883c5-53888407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3560a33b9d7564d5295de47eeead6f903f3318a0' => 
    array (
      0 => '.\\templates\\form.tpl',
      1 => 1335389881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152344f98545e9883c5-53888407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f98545e99e4d0_84352717',
  'variables' => 
  array (
    'nom' => 0,
    'prenom' => 0,
    'supinternet' => 0,
    'like' => 0,
    'elephant' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f98545e99e4d0_84352717')) {function content_4f98545e99e4d0_84352717($_smarty_tpl) {?>		<form action="index.php?page=form" method="post">
		
			<br /></br>
			<?php if (!isset($_smarty_tpl->tpl_vars['nom']->value)){?><span class="error">*Nom</span><?php }else{ ?>Nom<?php }?> <br /><input type="text" name="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['nom']->value)){?><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
<?php }?>" />
			<?php if (!isset($_smarty_tpl->tpl_vars['nom']->value)){?><span class="error">Ce champ est obligatoire!</span><?php }?>
			
			<br /><br />
			<?php if (!isset($_smarty_tpl->tpl_vars['prenom']->value)){?><span class="error">*Prénom</span><?php }else{ ?>Prénom<?php }?> <br /><input type="text" name="prenom" value="<?php if (isset($_smarty_tpl->tpl_vars['prenom']->value)){?><?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
<?php }?>"/>
			<?php if (!isset($_smarty_tpl->tpl_vars['prenom']->value)){?><span class="error">Ce champ est obligatoire!</span><?php }?>
			
			<br /><br />
			<?php if (!isset($_smarty_tpl->tpl_vars['supinternet']->value)){?><span class="error">*SUP'Internet :</span><?php }else{ ?>SUP'Internet :<?php }?><br /> 
			<input type="radio" name="supinternet" value="rox" <?php if (isset($_smarty_tpl->tpl_vars['supinternet']->value)&&$_smarty_tpl->tpl_vars['supinternet']->value=="rox"){?>CHECKED<?php }?> /> c'est roxxatif<br />
			<input type="radio" name="supinternet" value="maman" <?php if (isset($_smarty_tpl->tpl_vars['supinternet']->value)&&$_smarty_tpl->tpl_vars['supinternet']->value=="maman"){?>CHECKED<?php }?>/> ca fait rever maman<br />
			<input type="radio" name="supinternet" value="test" <?php if (isset($_smarty_tpl->tpl_vars['supinternet']->value)&&$_smarty_tpl->tpl_vars['supinternet']->value=="test"){?>CHECKED<?php }?>/> tu peux pas test<br />
			<input type="radio" name="supinternet" value="d" <?php if (isset($_smarty_tpl->tpl_vars['supinternet']->value)&&$_smarty_tpl->tpl_vars['supinternet']->value=="d"){?>CHECKED<?php }?>/> la réponde D<br />
			<?php if (!isset($_smarty_tpl->tpl_vars['supinternet']->value)){?><span class="error">Vous devez cocher au moins une case!</span><?php }?>
			
			<br /><br />
			<?php if (!isset($_smarty_tpl->tpl_vars['like']->value)){?><span class="error">*J'aime :</span><?php }else{ ?>J'aime :<?php }?><br />
			<input type="checkbox" name="like[]" value="cactus" /> les cactus<br />
			<input type="checkbox" name="like[]" value="margarine" /> la margarine<br />
			<input type="checkbox" name="like[]" value="tabourets" /> les tabourets<br />
			<input type="checkbox" name="like[]" value="meduses" /> les meduses<br />
			<?php if (!isset($_smarty_tpl->tpl_vars['like']->value)){?><span class="error">Vous devez cocher au moins une case!</span><?php }?>
			
			<br /><br />
			<?php if (!isset($_smarty_tpl->tpl_vars['elephant']->value)){?><span class="error">*Un bon éléphant :</span><?php }else{ ?>Un bon éléphant :<?php }?><br /><select name="elephant">
				<option value="" selected="selected"></option>
				<option value="trompe" <?php if (isset($_smarty_tpl->tpl_vars['elephant']->value)&&$_smarty_tpl->tpl_vars['elephant']->value=="trompe"){?>selected<?php }?> >trompe enormement</option>
				<option value="php" <?php if (isset($_smarty_tpl->tpl_vars['elephant']->value)&&$_smarty_tpl->tpl_vars['elephant']->value=="php"){?>selected<?php }?>>est bleu et arbore fierement le logo d'une technologie futuriste</option>
				<option value="mange" <?php if (isset($_smarty_tpl->tpl_vars['elephant']->value)&&$_smarty_tpl->tpl_vars['elephant']->value=="mange"){?>selected<?php }?>>mange cinq fruits et legumes par jour</option>
				<option value="amazing" <?php if (isset($_smarty_tpl->tpl_vars['elephant']->value)&&$_smarty_tpl->tpl_vars['elephant']->value=="amazing"){?>selected<?php }?>>is amazing</option>
			</select>
			
			<br /><br />				
			<?php if (!isset($_smarty_tpl->tpl_vars['text']->value)){?><span class="error">*pourquoi smarty a changé ma vie ?</span><?php }else{ ?>pourquoi smarty a changé ma vie ?<?php }?><br />
			<textarea name="text" value="<?php if (isset($_smarty_tpl->tpl_vars['text']->value)){?><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php }?>" rows="10" cols="30"></textarea><br />
			<?php if (!isset($_smarty_tpl->tpl_vars['like']->value)){?><span class="error">Vous devez répondre à cette question!</span><br /><br /><?php }?>
			
			<input type="submit" value="Submit" />
		</form><?php }} ?>