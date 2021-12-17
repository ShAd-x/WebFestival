<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-17 11:12:58
  from 'C:\Users\alexi\OneDrive\Cours\SEMESTRE 3\Web\tps\projet_festival\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bc70ba63f7e5_71598882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bbcbd164b46490d5c6d932e32356fa8969a52e8' => 
    array (
      0 => 'C:\\Users\\alexi\\OneDrive\\Cours\\SEMESTRE 3\\Web\\tps\\projet_festival\\templates\\index.tpl',
      1 => 1639739322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bc70ba63f7e5_71598882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65983344161bc70ba633e80_69913599', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169034068661bc70ba634792_03783493', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'success.tpl');
}
/* {block 'title'} */
class Block_65983344161bc70ba633e80_69913599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_65983344161bc70ba633e80_69913599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_169034068661bc70ba634792_03783493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_169034068661bc70ba634792_03783493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
    <h1>Accueil</h1>
    <div class="accueil">
    <p>Bienvenue sur le site du festival d'Amiens !</p>
    <?php if (((isset($_smarty_tpl->tpl_vars['_session_']->value)))) {?>
        <p>Pas encore inscris au festival ? Inscrivez vous dès maintenant !
            <a href="candidature">S'inscrire au festival</a>
        </p>
    <?php } else { ?>
        <p class="index">
            Vous souhaitez participer au festival ? <a href="register">S'inscrire</a> ou <a href="login">Se connecter</a>
        </p>
    <?php }?>
    <br><br>
    <?php if (((isset($_smarty_tpl->tpl_vars['_session_']->value)))) {?>
    <p>Les candidatures déjà déposées (<?php echo count($_smarty_tpl->tpl_vars['candidature']->value);?>
 candidature(s)) :</p>
    <table style="border: 1px solid black">
    <thead><tr><th>Candidatures :</th></tr></thead>
    <tbody>
    <tr><td>Nom du groupe</td><td>Département</td><td>Style Musical</td><td>Année de création</td><td>Lien vers cette candidature</td></tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['candidature']->value, 'candid');
$_smarty_tpl->tpl_vars['candid']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['candid']->value) {
$_smarty_tpl->tpl_vars['candid']->do_else = false;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['candid']->value[0];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['candid']->value[1];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['candid']->value[4];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['candid']->value[5];?>
</td><td><a href="./candidature-<?php echo $_smarty_tpl->tpl_vars['candid']->value[0];?>
">Candidature <?php echo $_smarty_tpl->tpl_vars['candid']->value[0];?>
</a></td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
    <?php }?>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
