{extends file='success.tpl'}
{block name=title}Dépôt de candidature{/block}
{block name=body}
    <div id='main'>
        <h1>Dépôt de candidature</h1>
        <form class="pure-form pure-form-stacked" action="candidature" method="post">
            <fieldset>
                <legend>Formulaire</legend>

                <label for="nomgr">Nom du groupe :</label>
                <input type="text" value="{$valeurs.nomgr|escape|default:''}" id="nomgr" name="nomgr" placeholder="Nom du groupe"/>
                <span>{$messages.nomgr|escape|default:''}</span>

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
                <input type="text" value="{$valeurs.representantnom|escape|default:''}" id="representantnom" name="representantnom" placeholder="Nom du représentant"/>
                <span>{$messages.representantnom|escape|default:''}</span>

                <input type="text" value="{$valeurs.representantprenom|escape|default:''}" id="representantprenom" name="representantprenom" placeholder="Prénom du représentant"/>
                <span>{$messages.representantprenom|escape|default:''}</span>
                
                <label for="annee_crea">Année de création :</label>
                <input type="text" value="{$valeurs.annee_crea|escape|default:''}" id="annee_crea" name="annee_crea" placeholder="Année de création"/>
                <span>{$messages.annee_crea|escape|default:''}</span>

                <label for="presentation">Présentation</label>
                <input type="text" value="{$valeurs.presentation|escape|default:''}" id="presentation" name="presentation" maxlength="500" placeholder="Courte présentation"/>
                <span>{$messages.presentation|escape|default:''}</span>

                <label for="exp">Expérience</label>
                <input type="text" value="{$valeurs.exp|escape|default:''}" id="exp" name="exp" placeholder="Expérience potentielle"/>
                <span>{$messages.exp|escape|default:''}</span>

                <label for="network">Site ou page Facebook</label>
                <input type="text" value="{$valeurs.network|escape|default:''}" id="network" name="network" placeholder="Site ou page Facebook"/>
                <span>{$messages.network|escape|default:''}</span>

                <label for="soundcloud">SoundCloud</label>
                <input type="soundcloud" value="{$valeurs.soundcloud|escape|default:''}" id="soundcloud" name="soundcloud" placeholder="Lien vers un soundcloud"/>
                <span>{$messages.soundcloud|escape|default:''}</span>

                <label for="ytb">Youtube</label>
                <input type="text" value="{$valeurs.exp|escape|default:''}" id="ytb" name="ytb" placeholder="Lien vers une chaîne Youtube"/>
                <span>{$messages.exp|escape|default:''}</span>

                <!-- Mettre les 8 membres du groupe -->

                <label for="stat_assoc">Statut associatif</label>
                <div>
                    <div>
                        <label for="oui">Oui</label>
                        <input type="radio" value="{$valeurs.stat_assoc|escape|default:''}" id="oui" name="stat_assoc"/>         
                    </div>
                    <div>
                        <label for="non">Non</label>  
                        <input type="radio" value="{$valeurs.stat_assoc|escape|default:''}" id="non" name="stat_assoc"/>
                    </div>
                    <span>{$messages.stat_assoc|escape|default:''}</span>
                </div>

                <label for="sacem">SACEM</label>
                <div>
                    <div>
                        <label for="oui">Oui</label>
                        <input type="radio" value="{$valeurs.stat_assoc|escape|default:''}" id="oui" name="sacem"/>             
                    </div>
                    <div>
                        <label for="non">Non</label> 
                        <input type="radio" value="{$valeurs.stat_assoc|escape|default:''}" id="non" name="sacem"/>
                    </div>
                    <span>{$messages.sacem|escape|default:''}</span>
                </div>

                <label for="producteur">Producteur</label>
                <div>
                    <div>
                        <label for="oui">Oui</label>
                        <input type="radio" value="{$valeurs.stat_assoc|escape|default:''}" id="oui" name="producteur"/>             
                    </div>
                    <div>
                        <label for="non">Non</label> 
                        <input type="radio" value="{$valeurs.stat_assoc|escape|default:''}" id="non" name="producteur"/>
                    </div>
                    <span>{$messages.producteur|escape|default:''}</span>
                </div>

                <label for="files">Fichiers mp3</label>
                <div>
                    <div>
                        <input type="file" value="{$valeurs.files|escape|default:''}" id="first_file" name="files" placeholder="Premier fichier"/>
                        <input type="file" value="{$valeurs.files|escape|default:''}" id="second_file" name="files" placeholder="Deuxième fichier"/>
                        <input type="file" value="{$valeurs.files|escape|default:''}" id="third_file" name="files" placeholder="Troisième fichier"/>
                    </div>
                    <span>{$messages.files|escape|default:''}</span>
                </div>
              
                <label for="dossier">Dossier de presse</label>
                <input type="file" value="{$valeurs.dossier|escape|default:''}" id="dossier" name="dossier"/>
                <span>{$valeurs.dossier|escape|default:''}</span>

                <label for="photo_grp">Photo de groupe</label>
                <div>
                    <div>
                        <input type="file" value="{$valeurs.photo_grp|escape|default:''}" id="first_picture" name="photo_grp"/>
                        <input type="file" value="{$valeurs.photo_grp|escape|default:''}" id="second_picture" name="photo_grp"/>
                    </div>
                    <span>{$messages.photo_grp|escape|default:''}</span>
                </div>                

                <label for="tech_file">Fiche technique</label>
                <input type="file" value="{$valeurs.tech_file|escape|default:''}" id="tech_file" name="tech_file"/>
                <span>{$valeurs.tech_file|escape|default:''}</span>

                <label for="sacem_file">Document SACEM</label>
                <input type="file" value="{$valeurs.sacem_file|escape|default:''}" id="sacem_file" name="sacem_file"/>
                <span>{$valeurs.sacem_file|escape|default:''}</span>

                <br><br>
                <button type="submit" class="pure-button pure-button-primary">Inscription du groupe</button>
            </fieldset>
        </form>
    </div>
{/block}