<!--div class="form-group">
    <input type="text" class="form-control" id="articles-filter" onkeyup="filterArticles()" placeholder="Filter articles">
</div-->

<div class="list-group" id="articles-list">
{foreach from=$articles item=article}
    <article class="list-group-item list-group-item-action flex-column align-items-start">
        <p class="mb-1">
           {foreach from=$article->getAuthors() item=author name=articleAuthorLoop}
               <em>{$author->getLastName()} {$author->getFirstName()|substr:0:1}.</em>{if not $smarty.foreach.articleAuthorLoop.last}, {/if}{/foreach}:
           {$article->getName()}.<br/>
           {assign var="pub" value=$article->getPublication()}
           <strong>{$pub->getName()}, {$pub->getIssue()}</strong>({$pub->getPages()})({$pub->getYear()})<br/>
           <small>[{$pub->getIssuer()}, ISSN {$pub->getIssn()}, doi:{$pub->getDoi()}]
           {if $pub->getLink() !== null and $pub->getLink() !== ""}<a href="{$pub->getLink()}">PDF</a>{/if}</small>

        </p>
        <a href="#edit-article" data-toggle="modal" data-target="#articleModal_{$article->getId()}">Edit</a> |
        <a href="{$CONTROLLER_PATH}/ArticleController.php?action=remove&id={$article->getId()}">Remove</a> |
        <a href="#generate-bibtex" data-toggle="modal" data-target="#articleBibtex_{$article->getId()}">Bibtex</a>

        {include file="article_modal_edit.tpl" article=$article modal_id="articleModal_{$article->getId()}"}
        {include file="article_modal_bibtex.tpl" article=$article modal_id="articleBibtex_{$article->getId()}"}
    </article>
{/foreach}
</div>
