<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-16 19:47:48
  from 'D:\Cours_de_2eme_annee\1er_semestre\DocRoot\tps\WebFestival\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61bb97e4a41c40_31585737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab8d73d5fd42a6432c01db483280a61cdd4c4410' => 
    array (
      0 => 'D:\\Cours_de_2eme_annee\\1er_semestre\\DocRoot\\tps\\WebFestival\\templates\\index.tpl',
      1 => 1639684062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bb97e4a41c40_31585737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106560312561bb97e4a3a981_78921826', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110758872461bb97e4a3b224_91161875', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'success.tpl');
}
/* {block 'title'} */
class Block_106560312561bb97e4a3a981_78921826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_106560312561bb97e4a3a981_78921826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_110758872461bb97e4a3b224_91161875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_110758872461bb97e4a3b224_91161875',
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
    <p>Les candidatures déjà déposées :</p>
    <?php echo '<?php
        ';?>
$checkCandid = Flight::get('pdo')=prepare("select * from candidature");
        if($checkCandid=rowCount() == 0){
            echo "Il n'y a aucune candidature de déposée.";
        } else {
            echo "<table>";

            echo "</table>";
        }
    <?php echo '?>';?>

    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
