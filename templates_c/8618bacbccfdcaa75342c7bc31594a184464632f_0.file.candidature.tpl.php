<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-15 19:54:33
  from 'D:\Cours_de_2eme_annee\1er_semestre\DocRoot\tps\WebFestival\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ba47f9676543_56886561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8618bacbccfdcaa75342c7bc31594a184464632f' => 
    array (
      0 => 'D:\\Cours_de_2eme_annee\\1er_semestre\\DocRoot\\tps\\WebFestival\\templates\\candidature.tpl',
      1 => 1639598071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ba47f9676543_56886561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167930593961ba47f9658fe8_25041120', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153419105961ba47f96598f0_37958867', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'success.tpl');
}
/* {block 'title'} */
class Block_167930593961ba47f9658fe8_25041120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_167930593961ba47f9658fe8_25041120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dépôt de candidature<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_153419105961ba47f96598f0_37958867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_153419105961ba47f96598f0_37958867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id='main'>
        <h1>Dépôt de candidature</h1>
        <form class="pure-form pure-form-stacked" action="candidature" method="post">
            <fieldset>
                <div class="formulaire">
                    <legend>Formulaire</legend>

                    <p style="color:red">Les champs marqué d'une '*' sont obligatoires</p>
                    <p>Vous êtes le représentant du groupe.</p>

                    <label for="nomgr">Nom du groupe* :</label>
                    <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nomgr'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="nomgr" name="nomgr" placeholder="Nom du groupe"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['nomgr'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="departement">Département* :</label>
                    <select>
                        <option value="1">1 - Ain</option>
                        <option value="2">2 - Aisne</option>
                        <option value="3">3 - Allier</option>
                        <option value="4">4 - Alpes-de-Haute-Provence</option>
                        <option value="5">5 - Hautes-Alpes</option>
                        <option value="6">6 - Alpes-Maritimes</option>
                        <option value="7">7 - Ardèche</option>
                        <option value="8">8 - Ardennes</option>
                        <option value="9">9 - Ariège</option>
                        <option value="10">10 - Aube</option>
                        <option value="11">11 - Aude</option>
                        <option value="12">12 - Aveyron</option>
                        <option value="13">13 - Bouches-du-Rhône</option>
                        <option value="14">14 - Calvados</option>
                        <option value="15">15 - Cantal</option>
                        <option value="16">16 - Charente</option>
                        <option value="17">17 - Charente-Maritime</option>
                        <option value="18">18 - Cher</option>
                        <option value="19">19 - Corrèze</option>
                        <option value="21">21 - Côte-d'Or</option>
                        <option value="22">22 - Côtes-d'Armor</option>
                        <option value="23">23 - Creuse</option>
                        <option value="24">24 - Dordogne</option>
                        <option value="25">25 - Doubs</option>
                        <option value="26">26 - Drôme</option>
                        <option value="27">27 - Eure</option>
                        <option value="28">28 - Eure-et-Loir</option>
                        <option value="29">29 - Finistère</option>
                        <option value="2A">2A - Corse-du-Sud</option>
                        <option value="2B">2B - Haute-Corse</option>
                        <option value="30">30 - Gard</option>
                        <option value="31">31 - Haute-Garonne</option>
                        <option value="32">32 - Gers</option>
                        <option value="33">33 - Gironde</option>
                        <option value="34">34 - Hérault</option>
                        <option value="35">35 - Ille-et-Vilaine</option>
                        <option value="36">36 - Indre</option>
                        <option value="37">37 - Indre-et-Loire</option>
                        <option value="38">38 - Isère</option>
                        <option value="39">39 - Jura</option>
                        <option value="40">40 - Landes</option>
                        <option value="41">41 - Loir-et-Cher</option>
                        <option value="42">42 - Loire</option>
                        <option value="43">43 - Haute-Loire</option>
                        <option value="44">44 - Loire-Atlantique</option>
                        <option value="45">45 - Loiret</option>
                        <option value="46">46 - Lot</option>
                        <option value="47">47 - Lot-et-Garonne</option>
                        <option value="48">48 - Lozère</option>
                        <option value="49">49 - Maine-et-Loire</option>
                        <option value="50">50 - Manche</option>
                        <option value="51">51 - Marne</option>
                        <option value="52">52 - Haute-Marne</option>
                        <option value="53">53 - Mayenne</option>
                        <option value="54">54 - Meurthe-et-Moselle</option>
                        <option value="55">55 - Meuse</option>
                        <option value="56">56 - Morbihan</option>
                        <option value="57">57 - Moselle</option>
                        <option value="58">58 - Nièvre</option>
                        <option value="59">59 - Nord</option>
                        <option value="60">60 - Oise</option>
                        <option value="61">61 - Orne</option>
                        <option value="62">62 - Pas-de-Calais</option>
                        <option value="63">63 - Puy-de-Dôme</option>
                        <option value="64">64 - Pyrénées-Atlantiques</option>
                        <option value="65">65 - Hautes-Pyrénées</option>
                        <option value="66">66 - Pyrénées-Orientales</option>
                        <option value="67">67 - Bas-Rhin</option>
                        <option value="68">68 - Haut-Rhin</option>
                        <option value="69">69 - Rhône</option>
                        <option value="70">70 - Haute-Saône</option>
                        <option value="71">71 - Saône-et-Loire</option>
                        <option value="72">72 - Sarthe</option>
                        <option value="73">73 - Savoie</option>
                        <option value="74">74 - Haute-Savoie</option>
                        <option value="75">75 - Paris</option>
                        <option value="76">76 - Seine-Maritime</option>
                        <option value="77">77 - Seine-et-Marne</option>
                        <option value="78">78 - Yvelines</option>
                        <option value="79">79 - Deux-Sèvres</option>
                        <option value="80">80 - Somme</option>
                        <option value="81">81 - Tarn</option>
                        <option value="82">82 - Tarn-et-Garonne</option>
                        <option value="83">83 - Var</option>
                        <option value="84">84 - Vaucluse</option>
                        <option value="85">85 - Vendée</option>
                        <option value="86">86 - Vienne</option>
                        <option value="87">87 - Haute-Vienne</option>
                        <option value="88">88 - Vosges</option>
                        <option value="89">89 - Yonne</option>
                        <option value="90">90 - Territoire de Belfort</option>
                        <option value="91">91 - Essonne</option>
                        <option value="92">92 - Hauts-de-Seine</option>
                        <option value="93">93 - Seine-Saint-Denis</option>
                        <option value="94">94 - Val-de-Marne</option>
                        <option value="95">95 - Val-d'Oise</option>
                        <option value="100">Autre</option>
                    </select>

                    <label for="type">Type de scène* :</label>
                    <select>
                        <option value="1">1 - Tribute</option>
                        <option value="2">2 - Acoustique/Folk</option>
                        <option value="3">3 - Amplifié/Rock</option>
                    </select>

                    <label for="style">Style musical* :</label>
                    <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['style'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="style" name="style" placeholder="Style musical du groupe"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['style'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="annee_crea">Année de création* :</label>
                    <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['annee_crea'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="annee_crea" name="annee_crea" placeholder="Année de création"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['annee_crea'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="presentation">Courte présentation* :</label>
                    <textarea required style="resize: vertical;" id="presentation" name="presentation" maxlength="500"></textarea>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['presentation'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="exp">Expérience scéniques* :</label>
                    <textarea required style="resize: vertical;" id="exp" name="exp" maxlength="500"></textarea>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['exp'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="network">Site ou page Facebook :</label>
                    <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['network'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="network" name="network" placeholder="Site ou page Facebook"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['network'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="soundcloud">SoundCloud :</label>
                    <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['soundcloud'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="soundcloud" name="soundcloud" placeholder="Lien vers un soundcloud"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['soundcloud'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="ytb">Youtube :</label>
                    <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['ytb'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="ytb" name="ytb" placeholder="Lien vers une chaîne Youtube"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['ytb'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <!-- Mettre les 8 membres du groupe -->
                    <label for="membre1">Premier membre du groupe* :</label>
                    <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['membre1nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="membre1nom" name="membre1nom" placeholder="Nom du membre"/>
                    <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['membre1prenom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="membre1prenom" name="membre1prenom" placeholder="Prénom du membre"/>
                    <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['membre1instrument'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="membre1instrument" name="membre1instrument" placeholder="Instrument du membre"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['membre1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="membre2">Deuxième membre du groupe* :</label>
                    <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['membre2nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="membre2nom" name="membre2nom" placeholder="Nom du membre"/>
                    <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['membre2prenom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="membre2prenom" name="membre2prenom" placeholder="Prénom du membre"/>
                    <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['membre2instrument'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="membre2instrument" name="membre2instrument" placeholder="Instrument du membre"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['membre2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="membre3">Troisième membre du groupe :</label>
                    <input type="text" id="membre3nom" name="membre3nom" placeholder="Nom du membre"/>
                    <input type="text" id="membre3prenom" name="membre3prenom" placeholder="Prénom du membre"/>
                    <input type="text" id="membre3instrument" name="membre3instrument" placeholder="Instrument du membre"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['membre3'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="membre4">Quatrième membre du groupe :</label>
                    <input type="text" id="membre4nom" name="membre4nom" placeholder="Nom du membre"/>
                    <input type="text" id="membre4prenom" name="membre4prenom" placeholder="Prénom du membre"/>
                    <input type="text" id="membre4instrument" name="membre4instrument" placeholder="Instrument du membre"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['membre4'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="membre5">Cinquième membre du groupe :</label>
                    <input type="text" id="membre5nom" name="membre5nom" placeholder="Nom du membre"/>
                    <input type="text" id="membre5prenom" name="membre5prenom" placeholder="Prénom du membre"/>
                    <input type="text" id="membre5instrument" name="membre5instrument" placeholder="Instrument du membre"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['membre5'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="membre6">Sixième membre du groupe :</label>
                    <input type="text" id="membre6nom" name="membre6nom" placeholder="Nom du membre"/>
                    <input type="text" id="membre6prenom" name="membre6prenom" placeholder="Prénom du membre"/>
                    <input type="text" id="membre6instrument" name="membre6instrument" placeholder="Instrument du membre"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['membre6'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="membre7">Septième membre du groupe :</label>
                    <input type="text" id="membre7nom" name="membre7nom" placeholder="Nom du membre"/>
                    <input type="text" id="membre7prenom" name="membre7prenom" placeholder="Prénom du membre"/>
                    <input type="text" id="membre7instrument" name="membre7instrument" placeholder="Instrument du membre"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['membre7'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="membre8">Huitième membre du groupe :</label>
                    <input type="text" id="membre8nom" name="membre8nom" placeholder="Nom du membre"/>
                    <input type="text" id="membre8prenom" name="membre8prenom" placeholder="Prénom du membre"/>
                    <input type="text" id="membre8instrument" name="membre8instrument" placeholder="Instrument du membre"/>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['membre8'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="stat_assoc">Statut associatif* :</label>
                    <select name="stat_assoc">
                        <option value=TRUE>Oui</option>
                        <option value=FALSE>Non</option>
                    </select>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['stat_assoc'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="sacem">SACEM* :</label>
                    <select name="sacem">
                        <option value=TRUE>Oui</option>
                        <option value=FALSE>Non</option>
                    </select>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['sacem'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="producteur">Producteur* :</label>
                    <select name="producteur">
                        <option value=TRUE>Oui</option>
                        <option value=FALSE>Non</option>
                    </select>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['producteur'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="files">Fichiers mp3* :</label>
                    <div>
                        <form action="envoi" method="post" enctype="multipart/form-data">
                            <input name="mp3_1" type="file">
                            <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['mp3_1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
                        <form action="envoi" method="post" enctype="multipart/form-data">
                            <input name="mp3_2" type="file">
                            <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['mp3_2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
                        <form action="envoi" method="post" enctype="multipart/form-data">
                            <input name="mp3_3" type="file">
                            <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['mp3_3'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
                    </div>

                
                    <label for="dossier">Dossier de presse :</label>
                    <form action="envoi" method="post" enctype="multipart/form-data">
                        <input name="dossier" type="file">
                        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['dossier'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="photo_grp">Photo de groupe* :</label>
                    <div>
                        <form action="envoi" method="post" enctype="multipart/form-data">
                            <input name="pic_1" type="file">
                            <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['pic_1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
                        <form action="envoi" method="post" enctype="multipart/form-data">
                            <input name="pic_2" type="file">
                            <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['pic_2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
                    </div>


                    <label for="tech_file">Fiche technique* :</label>
                    <form action="envoi" method="post" enctype="multipart/form-data">
                        <input name="tech_file" type="file">
                        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['tech_file'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <label for="sacem_file">Document SACEM* :</label>
                    <form action="envoi" method="post" enctype="multipart/form-data">
                        <input name="sacem_file" type="file">
                        <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['sacem_file'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                    <br><br>
                    <button type="submit" class="pure-button pure-button-primary">Inscription du groupe</button>
                </div>
            </fieldset>
        </form>
    </div>
<?php
}
}
/* {/block 'body'} */
}
