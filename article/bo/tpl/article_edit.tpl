<form name="form_article_edit" action="index.php&page=article_edit" method="post">
    {if !is_null($article)}
    <input type="hidden" name="article_id" value="{$article['id']}" />
    <input type="hidden" name="nb_contents" value="{$nbContents}" />
    {/if}
    <label for="article_id">ID:</label>
    <span id="article_id">{if !is_null($article)}{$article['id']}{/if}</span>
    <label for="article_title">Titre:</label>
    <input type="text" name="article_title" id="article_title" />
</form>
<div id="contentsToolBox">
    <div class="contentSelector">
        <span class="contentType">Paragraphe</span>
    </div>
</div>