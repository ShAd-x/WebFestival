<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-09 15:50:37
  from 'D:\Cours_de_2eme_annee\1er_semestre\DocRoot\tps\WebFestival\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b225cddce171_23859662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5ccc21e421b4f671f1b1157fa6913a0cdfccb8c' => 
    array (
      0 => 'D:\\Cours_de_2eme_annee\\1er_semestre\\DocRoot\\tps\\WebFestival\\templates\\success.tpl',
      1 => 1639062512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b225cddce171_23859662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9743416961b225cdd479e0_66683388', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133886443261b225cdd48101_97221383', 'head');
?>

</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83534065661b225cdd48766_08167296', 'menu');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135843990561b225cddcd975_57789245', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_9743416961b225cdd479e0_66683388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9743416961b225cdd479e0_66683388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Réussite<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_133886443261b225cdd48101_97221383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_133886443261b225cdd48101_97221383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    <style>
    #main,footer{ padding:1em }
    </style>
    <link rel="stylesheet" href="templates/style.css">
    <?php
}
}
/* {/block 'head'} */
/* {block 'menu'} */
class Block_83534065661b225cdd48766_08167296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_83534065661b225cdd48766_08167296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href='./'>Accueil</a>
    <?php if (((isset($_smarty_tpl->tpl_vars['_session_']->value)))) {?>
        <a href='candidature'>Candidature</a>
        <a href='logout'>Déconnexion</a>
    <?php } else { ?>
        <a href='register'>Inscription</a>
        <a href='login'>Connexion</a>
    <?php }?>
    <?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_135843990561b225cddcd975_57789245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_135843990561b225cddcd975_57789245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>Votre inscription s'est bien déroulée</p>
    <a href='login'>Se connecter</a>
    <?php
}
}
/* {/block 'body'} */
}
