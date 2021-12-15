<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-15 17:34:25
  from 'C:\Users\alexi\OneDrive\Cours\SEMESTRE 3\Web\tps\projet_festival\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ba2721dfcef6_08665341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bbcbd164b46490d5c6d932e32356fa8969a52e8' => 
    array (
      0 => 'C:\\Users\\alexi\\OneDrive\\Cours\\SEMESTRE 3\\Web\\tps\\projet_festival\\templates\\index.tpl',
      1 => 1639589177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ba2721dfcef6_08665341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204321983161ba2721df25f7_99918580', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64673438561ba2721df30e4_52832955', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'success.tpl');
}
/* {block 'title'} */
class Block_204321983161ba2721df25f7_99918580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_204321983161ba2721df25f7_99918580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_64673438561ba2721df30e4_52832955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_64673438561ba2721df30e4_52832955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
    <h1>Accueil</h1>
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
<?php
}
}
/* {/block 'body'} */
}
