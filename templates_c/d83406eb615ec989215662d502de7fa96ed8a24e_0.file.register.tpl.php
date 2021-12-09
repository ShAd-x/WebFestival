<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-09 15:50:37
  from 'D:\Cours_de_2eme_annee\1er_semestre\DocRoot\tps\WebFestival\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b225cdb3be36_27380889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd83406eb615ec989215662d502de7fa96ed8a24e' => 
    array (
      0 => 'D:\\Cours_de_2eme_annee\\1er_semestre\\DocRoot\\tps\\WebFestival\\templates\\register.tpl',
      1 => 1639062512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b225cdb3be36_27380889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7785161061b225cd7410f9_43256425', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7886671761b225cd74c847_86851223', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'success.tpl');
}
/* {block 'title'} */
class Block_7785161061b225cd7410f9_43256425 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7785161061b225cd7410f9_43256425',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inscription<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_7886671761b225cd74c847_86851223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7886671761b225cd74c847_86851223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Création de compte</h1>
<form class="pure-form pure-form-stacked" action="register" method="post">
    <fieldset>
        <legend>Inscription</legend>

        <label for="name">Nom :</label>
        <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="name" name="nom" placeholder="Nom"/>
        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

        <label for="prenom">Prenom :</label>
        <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="prenom" name="prenom" placeholder="Prénom"/>
        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['prenom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

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
        <button type="submit" class="pure-button pure-button-primary">Inscription</button>
    </fieldset>
</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
