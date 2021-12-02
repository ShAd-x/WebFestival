<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-02 16:30:43
  from 'C:\Users\alexi\OneDrive\Cours\SEMESTRE 3\Web\tps\projet_festival\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a8f4b38b40b4_91728858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52959583beab070964b7e50baf218cd77ffe8308' => 
    array (
      0 => 'C:\\Users\\alexi\\OneDrive\\Cours\\SEMESTRE 3\\Web\\tps\\projet_festival\\templates\\success.tpl',
      1 => 1638462631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a8f4b38b40b4_91728858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136831008261a8f4b38a5a08_78154487', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128137693761a8f4b38a6625_33625635', 'head');
?>

</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180781046261a8f4b38a7050_03780018', 'menu');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79408881361a8f4b38b3813_15418118', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_136831008261a8f4b38a5a08_78154487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_136831008261a8f4b38a5a08_78154487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Réussite<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_128137693761a8f4b38a6625_33625635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_128137693761a8f4b38a6625_33625635',
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
class Block_180781046261a8f4b38a7050_03780018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_180781046261a8f4b38a7050_03780018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href='./'>Accueil</a>
    <?php if (((isset($_smarty_tpl->tpl_vars['_SESSION']->value["user"])))) {?>
        <a href='profil'>Profil</a>
        <a href='deco'>Déconnexion</a>
    <?php } else { ?>
        <a href='register'>Inscription</a>
        <a href='login'>Connexion</a>
    <?php }?>
    <?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_79408881361a8f4b38b3813_15418118 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_79408881361a8f4b38b3813_15418118',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <p>Inscription réussi</p>
        <a href='#'>S'inscrire au festival</a>
    <?php
}
}
/* {/block 'body'} */
}
