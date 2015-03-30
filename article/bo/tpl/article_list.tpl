<a href="index.php?page=article_edit">Créer un article</a>
<table>
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Date de création</th>
        <th>Date de modification</th>
        <th>Actions</th>
    </tr>
    {foreach val=$articleList var='article'}
     <tr>
         <td>$article['id']</td>
         <td>$article['title']</td>
         <td>$article['author']</td>
         <td>$article['dateCreation']</td>
         <td>$article['dateModification']</td>
         <td>
                <a href="index.php?page=article_edit&article_id={$article['id']}">
                        <img src="article_edit.png" />
                </a>
                <a href="index.php?page=article_delete&article_id={$article['id']}">
                    <img src="article_delete.png"/>
                </a>
         </td>
     </tr>
    {/foreach}
</table>