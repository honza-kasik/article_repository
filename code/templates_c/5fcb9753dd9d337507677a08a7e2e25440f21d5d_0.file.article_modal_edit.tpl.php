<?php
/* Smarty version 3.1.30, created on 2017-11-26 21:34:51
  from "/code/templates/article_modal_edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1b337b87a8a2_35415818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fcb9753dd9d337507677a08a7e2e25440f21d5d' => 
    array (
      0 => '/code/templates/article_modal_edit.tpl',
      1 => 1511732080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:article_form.tpl' => 1,
  ),
),false)) {
function content_5a1b337b87a8a2_35415818 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Modal -->
<div class="modal fade articleModal" id="<?php echo $_smarty_tpl->tpl_vars['modal_id']->value;?>
" role="dialog" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php $_smarty_tpl->_subTemplateRender("file:article_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['article']->value,'form_id'=>$_smarty_tpl->tpl_vars['article']->value->getId()), 0, false);
?>

      </div>
    </div>
  </div>
</div>
<?php }
}
