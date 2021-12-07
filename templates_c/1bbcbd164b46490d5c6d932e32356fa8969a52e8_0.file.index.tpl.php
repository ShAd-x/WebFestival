<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-07 15:25:50
  from 'C:\Users\alexi\OneDrive\Cours\SEMESTRE 3\Web\tps\projet_festival\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61af7cfecdddd5_23162214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bbcbd164b46490d5c6d932e32356fa8969a52e8' => 
    array (
      0 => 'C:\\Users\\alexi\\OneDrive\\Cours\\SEMESTRE 3\\Web\\tps\\projet_festival\\templates\\index.tpl',
      1 => 1638890749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61af7cfecdddd5_23162214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42897723561af7cfecd9e48_32755608', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29661833961af7cfecda799_04724269', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'success.tpl');
}
/* {block 'title'} */
class Block_42897723561af7cfecd9e48_32755608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_42897723561af7cfecd9e48_32755608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_29661833961af7cfecda799_04724269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_29661833961af7cfecda799_04724269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
    <h1>Accueil</h1>
    <p>Bienvenue sur le site du festival d'Amiens !</p>
    <?php if (((isset($_smarty_tpl->tpl_vars['_session_']->value)))) {?>
        <p>Pas encore inscris au festival ? Inscrivez vous dès maintenant !
            <a href="candidature">S'inscrire au festival</a>
        </p>
    <?php } else { ?>
        <p>Vous souhaitez participer au festival ?
            <a href="register">S'inscrire</a>
            ou
            <a href="login">Se connecter</a>
        </p>
    <?php }?>
    <br><br>
    <p>Les candidatures déjà déposées :</p>
</div>
<?php
}
}
/* {/block 'body'} */
}
