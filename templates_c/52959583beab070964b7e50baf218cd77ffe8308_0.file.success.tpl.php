<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 20:34:09
  from 'C:\Users\alexi\OneDrive\Cours\SEMESTRE 3\Web\tps\projet_festival\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bba2c19279b1_66219331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52959583beab070964b7e50baf218cd77ffe8308' => 
    array (
      0 => 'C:\\Users\\alexi\\OneDrive\\Cours\\SEMESTRE 3\\Web\\tps\\projet_festival\\templates\\success.tpl',
      1 => 1639686840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bba2c19279b1_66219331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135243374561bba2c1826c87_21846362', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34926333861bba2c1827894_24247282', 'head');
?>

</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3945382261bba2c18283b9_04996753', 'menu');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13781676061bba2c19265a8_21972335', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_135243374561bba2c1826c87_21846362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_135243374561bba2c1826c87_21846362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Réussite<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_34926333861bba2c1827894_24247282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_34926333861bba2c1827894_24247282',
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
class Block_3945382261bba2c18283b9_04996753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_3945382261bba2c18283b9_04996753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="index">
        <a href='./'>Accueil</a>
        <?php if (((isset($_smarty_tpl->tpl_vars['_session_']->value)))) {?>
            <a href='candidature'>Candidature</a>
            <a href='logout'>Déconnexion</a>
        <?php } else { ?>
            <a href='register'>Inscription</a>
            <a href='login'>Connexion</a>
        <?php }?>
    </div>
    <?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_13781676061bba2c19265a8_21972335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13781676061bba2c19265a8_21972335',
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
