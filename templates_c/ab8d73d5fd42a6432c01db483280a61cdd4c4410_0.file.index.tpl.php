<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-09 15:52:09
  from 'D:\Cours_de_2eme_annee\1er_semestre\DocRoot\tps\WebFestival\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b2262970ae64_29562012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab8d73d5fd42a6432c01db483280a61cdd4c4410' => 
    array (
      0 => 'D:\\Cours_de_2eme_annee\\1er_semestre\\DocRoot\\tps\\WebFestival\\templates\\index.tpl',
      1 => 1639062512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b2262970ae64_29562012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9912930461b22629705f66_39531309', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199449450561b226297067f1_61492192', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'success.tpl');
}
/* {block 'title'} */
class Block_9912930461b22629705f66_39531309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9912930461b22629705f66_39531309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_199449450561b226297067f1_61492192 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_199449450561b226297067f1_61492192',
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
