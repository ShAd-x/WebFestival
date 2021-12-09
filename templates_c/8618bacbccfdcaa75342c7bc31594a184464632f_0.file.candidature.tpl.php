<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-09 16:48:10
  from 'D:\Cours_de_2eme_annee\1er_semestre\DocRoot\tps\WebFestival\templates\candidature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b2334a55a704_42258967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8618bacbccfdcaa75342c7bc31594a184464632f' => 
    array (
      0 => 'D:\\Cours_de_2eme_annee\\1er_semestre\\DocRoot\\tps\\WebFestival\\templates\\candidature.tpl',
      1 => 1639068465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b2334a55a704_42258967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70984381661b2334a53c363_25119894', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124455092361b2334a53cd36_80647112', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'success.tpl');
}
/* {block 'title'} */
class Block_70984381661b2334a53c363_25119894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_70984381661b2334a53c363_25119894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dépôt de candidature<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_124455092361b2334a53cd36_80647112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_124455092361b2334a53cd36_80647112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id='main'>
        <h1>Dépôt de candidature</h1>
        <form class="pure-form pure-form-stacked" action="candidature" method="post">
            <fieldset>
                <legend>Formulaire</legend>

                <label for="nomgr">Nom du groupe :</label>
                <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['nomgr'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="nomgr" name="nomgr" placeholder="Nom du groupe"/>
                <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['nomgr'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                <label for="departement">Département :</label>
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
                    <option value="971">971 - Guadeloupe</option>
                    <option value="972">972 - Martinique</option>
                    <option value="973">973 - Guyane</option>
                    <option value="974">974 - La Réunion</option>
                    <option value="976">976 - Mayotte</option>
                </select>

                <label for="type">Type de scène :</label>
                <select>
                    <option value="1">1 - Tribute</option>
                    <option value="2">2 - Acoustique/Folk</option>
                    <option value="3">3 - Amplifié/Rock</option>
                </select>

                <label for="representant">Représentant du groupe :</label>
                <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['representantnom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="representantnom" name="representantnom" placeholder="Nom du représentant"/>
                <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['representantnom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['representantprenom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="representantprenom" name="representantprenom" placeholder="Prénom du représentant"/>
                <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['representantprenom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
                
                <label for="annee_crea">Année de création :</label>
                <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['annee_crea'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="annee_crea" name="annee_crea" placeholder="Année de création"/>
                <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['annee_crea'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                <label for="presentation">Présentation</label>
                <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['presentation'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="presentation" name="presentation" maxlength="500" placeholder="Courte présentation"/>
                <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['presentation'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                <label for="exp">Expérience</label>
                <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['exp'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="exp" name="exp" placeholder="Expérience potentielle"/>
                <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['exp'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                <label for="network">Site ou page Facebook</label>
                <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['network'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="network" name="network" placeholder="Site ou page Facebook"/>
                <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['network'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                <label for="soundcloud">SoundCloud</label>
                <input type="soundcloud" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['soundcloud'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="soundcloud" name="soundcloud" placeholder="Lien vers un soundcloud"/>
                <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['soundcloud'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                <label for="ytb">Youtube</label>
                <input type="text" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['exp'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="ytb" name="ytb" placeholder="Lien vers une chaîne Youtube"/>
                <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['exp'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                <!-- Mettre les 8 membres du groupe -->

                <label for="stat_assoc">Statut associatif</label>
                <div>
                    <div>
                        <label for="oui">Oui</label>
                        <input type="radio" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['stat_assoc'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="oui" name="stat_assoc"/>         
                    </div>
                    <div>
                        <label for="non">Non</label>  
                        <input type="radio" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['stat_assoc'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="non" name="stat_assoc"/>
                    </div>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['stat_assoc'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
                </div>

                <label for="sacem">SACEM</label>
                <div>
                    <div>
                        <label for="oui">Oui</label>
                        <input type="radio" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['stat_assoc'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="oui" name="sacem"/>             
                    </div>
                    <div>
                        <label for="non">Non</label> 
                        <input type="radio" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['stat_assoc'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="non" name="sacem"/>
                    </div>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['sacem'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
                </div>

                <label for="producteur">Producteur</label>
                <div>
                    <div>
                        <label for="oui">Oui</label>
                        <input type="radio" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['stat_assoc'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="oui" name="producteur"/>             
                    </div>
                    <div>
                        <label for="non">Non</label> 
                        <input type="radio" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['stat_assoc'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="non" name="producteur"/>
                    </div>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['producteur'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
                </div>

                <label for="files">Fichiers mp3</label>
                <div>
                    <div>
                        <input type="file" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['files'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="first_file" name="files" placeholder="Premier fichier"/>
                        <input type="file" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['files'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="second_file" name="files" placeholder="Deuxième fichier"/>
                        <input type="file" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['files'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="third_file" name="files" placeholder="Troisième fichier"/>
                    </div>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['files'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
                </div>
              
                <label for="dossier">Dossier de presse</label>
                <input type="file" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['dossier'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="dossier" name="dossier"/>
                <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['dossier'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                <label for="photo_grp">Photo de groupe</label>
                <div>
                    <div>
                        <input type="file" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['photo_grp'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="first_picture" name="photo_grp"/>
                        <input type="file" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['photo_grp'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="second_picture" name="photo_grp"/>
                    </div>
                    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['photo_grp'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>
                </div>                

                <label for="tech_file">Fiche technique</label>
                <input type="file" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['tech_file'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="tech_file" name="tech_file"/>
                <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['tech_file'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                <label for="sacem_file">Document SACEM</label>
                <input type="file" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['sacem_file'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" id="sacem_file" name="sacem_file"/>
                <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['sacem_file'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span>

                <br><br>
                <button type="submit" class="pure-button pure-button-primary">Inscription du groupe</button>
            </fieldset>
        </form>
    </div>
<?php
}
}
/* {/block 'body'} */
}
