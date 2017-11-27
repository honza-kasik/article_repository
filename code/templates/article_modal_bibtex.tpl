<!-- Modal -->
<div class="modal fade articleBibtex" id="{$modal_id}" role="dialog" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Article bibtex</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          {assign var=result value=''}
                      {foreach from=$article->getAuthors() item=author name=foo}
                          {assign var=temp value=$author->asString()}
                          {assign var=result value="$result$temp"}
                          {if not $smarty.foreach.foo.last}
                           {assign var=result value="$result and "}
                           {/if}
                      {/foreach}
          <pre>
@article{
    author    = "{$result}",
    title     = "{$article->getName()}",
    journal   = "{$article->getPublication()->getName()}",
    volume    = "{$article->getPublication()->getIssue()}",
    publisher = "{$article->getPublication()->getIssuer()}",
    year      = "{$article->getPublication()->getYear()}",
    issn      = "{$article->getPublication()->getIssn()}"
}
          </pre>
      </div>
    </div>
  </div>
</div>
