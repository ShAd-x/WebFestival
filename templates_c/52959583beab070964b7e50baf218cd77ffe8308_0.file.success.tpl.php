<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-18 21:39:52
  from 'C:\Users\alexi\OneDrive\Cours\SEMESTRE 3\Web\tps\projet_festival\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61be5528762aa1_09757721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52959583beab070964b7e50baf218cd77ffe8308' => 
    array (
      0 => 'C:\\Users\\alexi\\OneDrive\\Cours\\SEMESTRE 3\\Web\\tps\\projet_festival\\templates\\success.tpl',
      1 => 1639863590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61be5528762aa1_09757721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212521690261be5528758403_41158022', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24094115361be552875adf5_72276729', 'head');
?>

</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172246955661be552875b8c1_59998778', 'menu');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7092455161be55287620a4_32975728', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_212521690261be5528758403_41158022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_212521690261be5528758403_41158022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Réussite<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_24094115361be552875adf5_72276729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_24094115361be552875adf5_72276729',
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
class Block_172246955661be552875b8c1_59998778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_172246955661be552875b8c1_59998778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="index">
        <a href='./'>Accueil</a>
        <?php if (((isset($_smarty_tpl->tpl_vars['_session_']->value)))) {?>
            <a href='candidature'>Candidature</a>
            <?php if (((isset($_smarty_tpl->tpl_vars['_admin_']->value)))) {?>
                <a href='listecandidature'>Liste des candidatures</a>
                <a href='listemembre'>Liste des membres</a>
            <?php }?>
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
class Block_7092455161be55287620a4_32975728 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7092455161be55287620a4_32975728',
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
