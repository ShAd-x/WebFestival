{extends file='success.tpl'}
{block name=title}Dépôt de candidature{/block}
{block name=body}
    <div id='main'>
        <h1>Dépôt de candidature</h1>
        <form class="pure-form pure-form-stacked" action="candidature" method="post">
            <fieldset>
                <div class="formulaire">
                    <legend>Formulaire</legend>

                    <p style="color:red">Les champs marqué d'une '*' sont obligatoires</p>
                    <p>Vous êtes le représentant du groupe.</p>

                    <span>{$messages.erreur|escape|default:''}</span>

                    <label for="nomgr">Nom du groupe* :</label>
                    <input type="text" value="{$valeurs.nomgr|escape|default:''}" id="nomgr" name="nomgr" placeholder="Nom du groupe"/>
                    <span>{$messages.nomgr|escape|default:''}</span>

                    <label for="departement">Département* :</label>
                    <select name="departement">
                        <option value="1-Ain">Ain</option>
                        <option value="2-Aisne">Aisne</option>
                        <option value="3-Allier">Allier</option>
                        <option value="4-Alpes-de-Haute-Provence">Alpes-de-Haute-Provence</option>
                        <option value="5-Hautes-Alpes">Hautes-Alpes</option>
                        <option value="6-Alpes-Maritimes">Alpes-Maritimes</option>
                        <option value="7-Ardèche">Ardèche</option>
                        <option value="8-Ardennes">Ardennes</option>
                        <option value="9-Ariège">Ariège</option>
                        <option value="10-Aube">Aube</option>
                        <option value="11-Aude">Aude</option>
                        <option value="12-Aveyron">Aveyron</option>
                        <option value="13-Bouches-du-Rhône">Bouches-du-Rhône</option>
                        <option value="14-Calvados">Calvados</option>
                        <option value="15-Cantal">Cantal</option>
                        <option value="16-Charente">Charente</option>
                        <option value="17-Charente-Maritime">Charente-Maritime</option>
                        <option value="18-Cher">Cher</option>
                        <option value="19-Corrèze">Corrèze</option>
                        <option value="21-Côte-d'Or">Côte-d'Or</option>
                        <option value="22-Côtes-d'Armor">Côtes-d'Armor</option>
                        <option value="23-Creuse">Creuse</option>
                        <option value="24-Dordogne">Dordogne</option>
                        <option value="25-Doubs">Doubs</option>
                        <option value="26-Drôme">Drôme</option>
                        <option value="27-Eure">Eure</option>
                        <option value="28-Eure-et-Loir">Eure-et-Loir</option>
                        <option value="29-Finistère">Finistère</option>
                        <option value="30-Gard">Gard</option>
                        <option value="31-Haute-Garonne">Haute-Garonne</option>
                        <option value="32-Gers">Gers</option>
                        <option value="33-Gironde">Gironde</option>
                        <option value="34-Hérault">Hérault</option>
                        <option value="35-Ille-et-Vilaine">Ille-et-Vilaine</option>
                        <option value="36-Indre">Indre</option>
                        <option value="37-Indre-et-Loire">Indre-et-Loire</option>
                        <option value="38-Isère">Isère</option>
                        <option value="39-Jura">Jura</option>
                        <option value="40-Landes">Landes</option>
                        <option value="41-Loir-et-Cher">Loir-et-Cher</option>
                        <option value="42-Loire">Loire</option>
                        <option value="43-Haute-Loire">Haute-Loire</option>
                        <option value="44-Loire-Atlantique">Loire-Atlantique</option>
                        <option value="45-Loiret">Loiret</option>
                        <option value="46-Lot">Lot</option>
                        <option value="47-Lot-et-Garonne">Lot-et-Garonne</option>
                        <option value="48-Lozère">Lozère</option>
                        <option value="49-Maine-et-Loire">Maine-et-Loire</option>
                        <option value="50-Manche">Manche</option>
                        <option value="51-Marne">Marne</option>
                        <option value="52-Haute-Marne">Haute-Marne</option>
                        <option value="53-Mayenne">Mayenne</option>
                        <option value="54-Meurthe-et-Moselle">Meurthe-et-Moselle</option>
                        <option value="55-Meuse">Meuse</option>
                        <option value="56-Morbihan">Morbihan</option>
                        <option value="57-Moselle">Moselle</option>
                        <option value="58-Nièvre">Nièvre</option>
                        <option value="59-Nord">Nord</option>
                        <option value="60-Oise">Oise</option>
                        <option value="61-Orne">Orne</option>
                        <option value="62-Pas-de-Calais">Pas-de-Calais</option>
                        <option value="63-Puy-de-Dôme">Puy-de-Dôme</option>
                        <option value="64-Pyrénées-Atlantiques">Pyrénées-Atlantiques</option>
                        <option value="65-Hautes-Pyrénées">Hautes-Pyrénées</option>
                        <option value="66-Pyrénées-Orientales">Pyrénées-Orientales</option>
                        <option value="67-Bas-Rhin">Bas-Rhin</option>
                        <option value="68-Haut-Rhin">Haut-Rhin</option>
                        <option value="69-Rhône">Rhône</option>
                        <option value="70-Haute-Saône">Haute-Saône</option>
                        <option value="71-Saône-et-Loire">Saône-et-Loire</option>
                        <option value="72-Sarthe">Sarthe</option>
                        <option value="73-Savoie">Savoie</option>
                        <option value="74-Haute-Savoie">Haute-Savoie</option>
                        <option value="75-Paris">Paris</option>
                        <option value="76-Seine-Maritime">Seine-Maritime</option>
                        <option value="77-Seine-et-Marne">Seine-et-Marne</option>
                        <option value="78-Yvelines">Yvelines</option>
                        <option value="79-Deux-Sèvres">Deux-Sèvres</option>
                        <option value="80-Somme">Somme</option>
                        <option value="81-Tarn">Tarn</option>
                        <option value="82-Tarn-et-Garonne">Tarn-et-Garonne</option>
                        <option value="83-Var">Var</option>
                        <option value="84-Vaucluse">Vaucluse</option>
                        <option value="85-Vendée">Vendée</option>
                        <option value="86-Vienne">Vienne</option>
                        <option value="87-Haute-Vienne">Haute-Vienne</option>
                        <option value="88-Vosges">Vosges</option>
                        <option value="89-Yonne">Yonne</option>
                        <option value="90-Territoire de Belfort">Territoire de Belfort</option>
                        <option value="91-Essonne">Essonne</option>
                        <option value="92-Hauts-de-Seine">Hauts-de-Seine</option>
                        <option value="93-Seine-Saint-Denis">Seine-Saint-Denis</option>
                        <option value="94-Val-de-Marne">Val-de-Marne</option>
                        <option value="95-Val-d'Oise">Val-d'Oise</option>
                        <option value="100-Autre">Autre</option>
                    </select>

                    <label for="type">Type de scène* :</label>
                    <select name="type">
                        <option value="1">1 - Tribute</option>
                        <option value="2">2 - Acoustique/Folk</option>
                        <option value="3">3 - Amplifié/Rock</option>
                    </select>

                    <label for="style">Style musical* :</label>
                    <input type="text" value="{$valeurs.style|escape|default:''}" id="style" name="style" placeholder="Style musical du groupe"/>
                    <span>{$messages.style|escape|default:''}</span>

                    <label for="annee_crea">Année de création* :</label>
                    <input type="text" value="{$valeurs.annee_crea|escape|default:''}" id="annee_crea" name="annee_crea" placeholder="Année de création"/>
                    <span>{$messages.annee_crea|escape|default:''}</span>

                    <label for="presentation">Courte présentation* :</label>
                    <textarea required style="resize: vertical;" id="presentation" name="presentation" maxlength="500"></textarea>
                    <span>{$messages.presentation|escape|default:''}</span>

                    <label for="exp">Expérience scéniques* :</label>
                    <textarea required style="resize: vertical;" id="exp" name="exp" maxlength="500"></textarea>
                    <span>{$messages.exp|escape|default:''}</span>

                    <label for="network">Site ou page Facebook :</label>
                    <input type="text" value="{$valeurs.network|escape|default:''}" id="network" name="network" placeholder="Site ou page Facebook"/>
                    <span>{$messages.network|escape|default:''}</span>

                    <label for="soundcloud">SoundCloud :</label>
                    <input type="text" value="{$valeurs.soundcloud|escape|default:''}" id="soundcloud" name="soundcloud" placeholder="Lien vers un soundcloud"/>
                    <span>{$messages.soundcloud|escape|default:''}</span>

                    <label for="ytb">Youtube :</label>
                    <input type="text" value="{$valeurs.ytb|escape|default:''}" id="ytb" name="ytb" placeholder="Lien vers une chaîne Youtube"/>
                    <span>{$messages.ytb|escape|default:''}</span>

                    <!-- Mettre les 8 membres du groupe -->
                    <label for="membre1">Premier membre du groupe* :</label>
                    <input type="text" value="{$valeurs.membrenom1|escape|default:''}" id="membrenom1" name="membrenom1" placeholder="Nom du membre"/>
                    <input type="text" value="{$valeurs.membreprenom1|escape|default:''}" id="membreprenom1" name="membreprenom1" placeholder="Prénom du membre"/>
                    <input type="text" value="{$valeurs.membreinstrument1|escape|default:''}" id="membreinstrument1" name="membreinstrument1" placeholder="Instrument du membre"/>
                    <span>{$messages.membre1|escape|default:''}</span>

                    <label for="membre2">Deuxième membre du groupe* :</label>
                    <input type="text" value="{$valeurs.membrenom2|escape|default:''}" id="membrenom2" name="membrenom2" placeholder="Nom du membre"/>
                    <input type="text" value="{$valeurs.membreprenom2|escape|default:''}" id="membreprenom2" name="membreprenom2" placeholder="Prénom du membre"/>
                    <input type="text" value="{$valeurs.membreinstrument2|escape|default:''}" id="membreinstrument2" name="membreinstrument2" placeholder="Instrument du membre"/>
                    <span>{$messages.membre2|escape|default:''}</span>

                    <label for="membre3">Troisième membre du groupe :</label>
                    <input type="text" value="{$valeurs.membrenom3|escape|default:''}" id="membrenom3" name="membrenom3" placeholder="Nom du membre"/>
                    <input type="text" value="{$valeurs.membreprenom3|escape|default:''}" id="membreprenom3" name="membreprenom3" placeholder="Prénom du membre"/>
                    <input type="text" value="{$valeurs.membreinstrument3|escape|default:''}" id="membreinstrument3" name="membreinstrument3" placeholder="Instrument du membre"/>
                    <span>{$messages.membre3|escape|default:''}</span>

                    <label for="membre4">Quatrième membre du groupe :</label>
                    <input type="text" value="{$valeurs.membrenom4|escape|default:''}" id="membrenom4" name="membrenom4" placeholder="Nom du membre"/>
                    <input type="text" value="{$valeurs.membreprenom4|escape|default:''}" id="membreprenom4" name="membreprenom4" placeholder="Prénom du membre"/>
                    <input type="text" value="{$valeurs.membreinstrument4|escape|default:''}" id="membreinstrument4" name="membreinstrument4" placeholder="Instrument du membre"/>
                    <span>{$messages.membre4|escape|default:''}</span>

                    <label for="membre5">Cinquième membre du groupe :</label>
                    <input type="text" value="{$valeurs.membrenom5|escape|default:''}" id="membrenom5" name="membrenom5" placeholder="Nom du membre"/>
                    <input type="text" value="{$valeurs.membreprenom5|escape|default:''}" id="membreprenom5" name="membreprenom5" placeholder="Prénom du membre"/>
                    <input type="text" value="{$valeurs.membreinstrument5|escape|default:''}" id="membreinstrument5" name="membreinstrument5" placeholder="Instrument du membre"/>
                    <span>{$messages.membre5|escape|default:''}</span>

                    <label for="membre6">Sixième membre du groupe :</label>
                    <input type="text" value="{$valeurs.membrenom6|escape|default:''}" id="membrenom6" name="membrenom6" placeholder="Nom du membre"/>
                    <input type="text" value="{$valeurs.membreprenom6|escape|default:''}" id="membreprenom6" name="membreprenom6" placeholder="Prénom du membre"/>
                    <input type="text" value="{$valeurs.membreinstrument6|escape|default:''}" id="membreinstrument6" name="membreinstrument6" placeholder="Instrument du membre"/>
                    <span>{$messages.membre6|escape|default:''}</span>

                    <label for="membre7">Septième membre du groupe :</label>
                    <input type="text" value="{$valeurs.membrenom7|escape|default:''}" id="membrenom7" name="membrenom7" placeholder="Nom du membre"/>
                    <input type="text" value="{$valeurs.membreprenom7|escape|default:''}" id="membreprenom7" name="membreprenom7" placeholder="Prénom du membre"/>
                    <input type="text" value="{$valeurs.membreinstrument7|escape|default:''}" id="membreinstrument7" name="membreinstrument7" placeholder="Instrument du membre"/>
                    <span>{$messages.membre7|escape|default:''}</span>

                    <label for="membre8">Huitième membre du groupe :</label>
                    <input type="text" value="{$valeurs.membrenom8|escape|default:''}" id="membrenom8" name="membrenom8" placeholder="Nom du membre"/>
                    <input type="text" value="{$valeurs.membreprenom8|escape|default:''}" id="membreprenom8" name="membreprenom8" placeholder="Prénom du membre"/>
                    <input type="text" value="{$valeurs.membreinstrument8|escape|default:''}" id="membreinstrument8" name="membreinstrument8" placeholder="Instrument du membre"/>
                    <span>{$messages.membre8|escape|default:''}</span>

                    <label for="stat_assoc">Statut associatif* :</label>
                    <select name="stat_assoc">
                        <option value=TRUE>Oui</option>
                        <option value=FALSE>Non</option>
                    </select>
                    <span>{$messages.stat_assoc|escape|default:''}</span>

                    <label for="sacem">SACEM* :</label>
                    <select name="sacem">
                        <option value=TRUE>Oui</option>
                        <option value=FALSE>Non</option>
                    </select>
                    <span>{$messages.sacem|escape|default:''}</span>

                    <label for="producteur">Producteur* :</label>
                    <select name="producteur">
                        <option value=TRUE>Oui</option>
                        <option value=FALSE>Non</option>
                    </select>
                    <span>{$messages.producteur|escape|default:''}</span>

                    <label for="files">Fichiers mp3* : (MP3)</label>
                    <div>
                        <form action="envoi" method="post" enctype="multipart/form-data">
                            <input name="mp3_1" value="{$valeurs.mp3_1|escape|default:''}" type="file">
                            <span>{$messages.mp3_1|escape|default:''}</span>
                            <input name="mp3_2" value="{$valeurs.mp3_2|escape|default:''}" type="file">
                            <span>{$messages.mp3_2|escape|default:''}</span>
                            <input name="mp3_3" value="{$valeurs.mp3_3|escape|default:''}" type="file">
                            <span>{$messages.mp3_3|escape|default:''}</span>
                    </div>

                
                    <label for="dossier">Dossier de presse : (PDF)</label>
                    <form action="envoi" method="post" enctype="multipart/form-data">
                        <input name="dossier" type="file">
                        <span>{$messages.dossier|escape|default:''}</span>

                    <label for="photo_grp">Photo de groupe* : (PNG / JPG / JPEG)</label>
                    <div>
                        <form action="envoi" method="post" enctype="multipart/form-data">
                            <input name="pic_1" type="file">
                            <span>{$messages.pic_1|escape|default:''}</span>
                        <form action="envoi" method="post" enctype="multipart/form-data">
                            <input name="pic_2" type="file">
                            <span>{$messages.pic_2|escape|default:''}</span>
                    </div>


                    <label for="tech_file">Fiche technique* : (PDF)</label>
                    <form action="envoi" method="post" enctype="multipart/form-data">
                        <input name="tech_file" type="file">
                        <span>{$messages.tech_file|escape|default:''}</span>

                    <label for="sacem_file">Document SACEM* : (PDF)</label>
                    <form action="envoi" method="post" enctype="multipart/form-data">
                        <input name="sacem_file" type="file">
                        <span>{$messages.sacem_file|escape|default:''}</span>

                    <br><br>
                    <button type="submit" class="pure-button pure-button-primary">Inscription du groupe</button>
                </div>
            </fieldset>
        </form>
    </div>
{/block}