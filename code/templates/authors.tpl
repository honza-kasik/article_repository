<div class="form-group">
    <input type="text" class="form-control" id="authors-filter" onkeyup="filterAuthors()" placeholder="Filter authors">
</div>

<ul class="list-group" id="authors-list">
{foreach from=$authors item=author}
    <li class="list-group-item" data-author-id="{$author->getId()}">
        {assign var="tAfter" value=$author->getTitleAfter()}
        {$author->getTitleBefore()} {$author->getFirstName()} {$author->getLastName()}{if $tAfter !== null and $tAfter !== ""},
        {$tAfter}
        {/if}
    </li>
{/foreach}
</ul>
