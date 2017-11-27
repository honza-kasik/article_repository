<!-- Modal -->
<div class="modal fade articleModal" id="{$modal_id}" role="dialog" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          {include file="article_form.tpl" article=$article form_id=$article->getId()}
      </div>
    </div>
  </div>
</div>
