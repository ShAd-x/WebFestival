<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-15 19:56:18
  from 'D:\Cours_de_2eme_annee\1er_semestre\DocRoot\tps\WebFestival\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ba486242b5e2_90299166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab8d73d5fd42a6432c01db483280a61cdd4c4410' => 
    array (
      0 => 'D:\\Cours_de_2eme_annee\\1er_semestre\\DocRoot\\tps\\WebFestival\\templates\\index.tpl',
      1 => 1639598176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ba486242b5e2_90299166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185980590161ba486238c805_31015725', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73328380161ba486238d9f9_50991590', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'success.tpl');
}
/* {block 'title'} */
class Block_185980590161ba486238c805_31015725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_185980590161ba486238c805_31015725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_73328380161ba486238d9f9_50991590 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_73328380161ba486238d9f9_50991590',
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
        <p>Vous souhaitez participer au festival ?
            <a href="register">S'inscrire</a>
            ou
            <a href="login">Se connecter</a>
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
