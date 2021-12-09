<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-07 07:46:03
  from 'D:\Cours_de_2eme_annee\1er_semestre\DocRoot\tps\WebFestival\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61af113b136d31_07833584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b9683c364394cdba6bfe2e4390d2b8e139aecb3' => 
    array (
      0 => 'D:\\Cours_de_2eme_annee\\1er_semestre\\DocRoot\\tps\\WebFestival\\templates\\login.tpl',
      1 => 1638862035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61af113b136d31_07833584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100986702361af113b120897_96401809', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92785524661af113b1226f1_88678569', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'success.tpl');
}
/* {block 'title'} */
class Block_100986702361af113b120897_96401809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_100986702361af113b120897_96401809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_92785524661af113b1226f1_88678569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_92785524661af113b1226f1_88678569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Login</h1>
<form class="pure-form pure-form-stacked" action="login" method="post">
    <fieldset>
        <legend>Connexion</legend>

        <label for="stacked-email">Email :</label>
        <input type="email" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['mail'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="stacked-email" name="mail" placeholder="Email"/>
        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['mail'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

        <label for="stacked-password">Mot de passe :</label>
        <input type="password" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['mdp'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="stacked-password" name="mdp" placeholder="Mot de passe"/>
        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['mdp'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
        <br><br>
        <button type="submit" class="pure-button pure-button-primary">Se connecter</button>
    </fieldset>
</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
