<div class="list-group" id="articles-list" onkeyup="filterArticles()">
{foreach from=$articles item=article}
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
       <div class="d-flex justify-content-between">
         <h5 class="mb-1">{$article->getName()}</h5>
       </div>
       {assign var="article_authors" value=$article->getAuthors()}
       <p class="mb-1">
       {foreach from=$article->getAuthors() item=author}
           <em></em>
           {$author->getFirstName()}
       {/foreach}
        {$article->getPublication()->getName()}</p>
     </a>
{/foreach}
</div>
