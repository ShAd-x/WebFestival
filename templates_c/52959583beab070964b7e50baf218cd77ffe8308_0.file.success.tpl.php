<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-07 15:24:01
  from 'C:\Users\alexi\OneDrive\Cours\SEMESTRE 3\Web\tps\projet_festival\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61af7c910797e1_12166222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52959583beab070964b7e50baf218cd77ffe8308' => 
    array (
      0 => 'C:\\Users\\alexi\\OneDrive\\Cours\\SEMESTRE 3\\Web\\tps\\projet_festival\\templates\\success.tpl',
      1 => 1638890639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61af7c910797e1_12166222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155723989961af7c9106f544_40371596', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29671759361af7c91070dd5_98308347', 'head');
?>

</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188821664361af7c91071469_92037115', 'menu');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37644602261af7c91078b19_88210661', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_155723989961af7c9106f544_40371596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_155723989961af7c9106f544_40371596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Réussite<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_29671759361af7c91070dd5_98308347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_29671759361af7c91070dd5_98308347',
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
class Block_188821664361af7c91071469_92037115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_188821664361af7c91071469_92037115',
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
class Block_37644602261af7c91078b19_88210661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_37644602261af7c91078b19_88210661',
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
