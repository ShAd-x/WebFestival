{extends file='success.tpl'}
{block name=title}Dépôt de candidature{/block}
{block name=body}
    <div id='main'>
        <h1>Dépôt</h1>
        <form class="pure-form pure-form-stacked" action="candidature" method="post">
            <fieldset>
                <legend>Dépôt</legend>

                <label for="nomgr">Nom du groupe :</label>
                <input type="text" value="{$valeurs.nomgr|escape|default:''}" id="nomgr" name="nomgr" placeholder="Nom du groupe"/>
                <span>{$messages.nomgr|escape|default:''}</span>

                <button type="submit" class="pure-button pure-button-primary">Inscription du groupe</button>
            </fieldset>
        </form>
    </div>
{/block}