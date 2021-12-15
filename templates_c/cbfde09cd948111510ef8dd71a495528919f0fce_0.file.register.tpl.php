<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-15 13:54:59
  from 'C:\Users\alexi\OneDrive\Cours\SEMESTRE 3\Web\tps\projet_festival\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b9f3b3b2e599_59290105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbfde09cd948111510ef8dd71a495528919f0fce' => 
    array (
      0 => 'C:\\Users\\alexi\\OneDrive\\Cours\\SEMESTRE 3\\Web\\tps\\projet_festival\\templates\\register.tpl',
      1 => 1639576497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b9f3b3b2e599_59290105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37000707061b9f3b3b0e437_12135598', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127103258261b9f3b3b0f1c4_47855425', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'success.tpl');
}
/* {block 'title'} */
class Block_37000707061b9f3b3b0e437_12135598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_37000707061b9f3b3b0e437_12135598',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Inscription<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_127103258261b9f3b3b0f1c4_47855425 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_127103258261b9f3b3b0f1c4_47855425',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Création de compte</h1>
<form class="pure-form pure-form-stacked" action="register" method="post">
    <fieldset>
        <legend>Inscription</legend>

        <p>Les champs marqué d'une '*' sont obligatoires</p>

        <label for="name">Nom* :</label>
        <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="name" name="nom" placeholder="Nom"/>
        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

        <label for="prenom">Prenom* :</label>
        <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['prenom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="prenom" name="prenom" placeholder="Prénom"/>
        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['prenom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

        <label for="adresse">Adresse* :</label>
        <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['adresse'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="adresse" name="adresse" placeholder="Adresse"/>
        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['adresse'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

        <label for="codepostal">Code postal* :</label>
        <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['codepostal'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="codepostal" name="codepostal" placeholder="Code postal"/>
        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['codepostal'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

        <label for="stacked-email">Email* :</label>
        <input type="email" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['mail'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="stacked-email" name="mail" placeholder="Email"/>
        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['mail'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

        <label for="numero">Numéro de téléphone* :</label>
        <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['numero'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="numero" name="numero" placeholder="Numero"/>
        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['numero'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

        <label for="stacked-password">Mot de passe* :</label>
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
