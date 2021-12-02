<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-02 10:00:06
  from 'C:\Users\alexi\OneDrive\Cours\SEMESTRE 3\Web\tps\projet_festival\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a899267b8ac9_12707243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52959583beab070964b7e50baf218cd77ffe8308' => 
    array (
      0 => 'C:\\Users\\alexi\\OneDrive\\Cours\\SEMESTRE 3\\Web\\tps\\projet_festival\\templates\\success.tpl',
      1 => 1638439203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a899267b8ac9_12707243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo '<?php
    ';?>
session_start();
    $id_session = session_id();
<?php echo '?>';?>

<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18253067661a899267af573_95274243', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9984256261a899267b0368_79590094', 'head');
?>

</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181729430661a899267b0d91_54909105', 'menu');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201867038861a899267b8253_46375036', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_18253067661a899267af573_95274243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18253067661a899267af573_95274243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Réussite<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_9984256261a899267b0368_79590094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_9984256261a899267b0368_79590094',
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
class Block_181729430661a899267b0d91_54909105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_181729430661a899267b0d91_54909105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<?php
        ';?>
if($id_session){
            echo 'ID de session (récupéré via session_id()) : '
            . $id_session;
        }
    <?php echo '?>';?>

    <a href='./'>Accueil</a>
    <?php if (((isset($_smarty_tpl->tpl_vars['_SESSION']->value['user'])))) {?>
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
class Block_201867038861a899267b8253_46375036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_201867038861a899267b8253_46375036',
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
