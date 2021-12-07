<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-07 14:31:04
  from 'C:\Users\alexi\OneDrive\Cours\SEMESTRE 3\Web\tps\projet_festival\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61af7028a75031_92063098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52959583beab070964b7e50baf218cd77ffe8308' => 
    array (
      0 => 'C:\\Users\\alexi\\OneDrive\\Cours\\SEMESTRE 3\\Web\\tps\\projet_festival\\templates\\success.tpl',
      1 => 1638887463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61af7028a75031_92063098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1836865761af7028a728d0_73373480', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131493878561af7028a73e66_60953033', 'head');
?>

</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84058381461af7028a74587_62587134', 'menu');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181577056361af7028a74b44_79313665', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_1836865761af7028a728d0_73373480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1836865761af7028a728d0_73373480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Réussite<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_131493878561af7028a73e66_60953033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_131493878561af7028a73e66_60953033',
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
class Block_84058381461af7028a74587_62587134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_84058381461af7028a74587_62587134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href='./'>Accueil</a>
    <a href='candidature'>Candidature</a>
    <a href='register'>Inscription</a>
    <a href='login'>Connexion</a>
    <a href='logout'>Déconnexion</a>
    <?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_181577056361af7028a74b44_79313665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_181577056361af7028a74b44_79313665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>Inscription réussi</p>
    <a href='candidature'>S'inscrire au festival</a>
    <?php
}
}
/* {/block 'body'} */
}
