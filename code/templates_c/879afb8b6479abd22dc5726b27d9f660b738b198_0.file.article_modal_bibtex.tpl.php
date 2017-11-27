<?php
/* Smarty version 3.1.30, created on 2017-11-26 22:39:16
  from "/code/templates/article_modal_bibtex.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1b42943729a8_06373799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '879afb8b6479abd22dc5726b27d9f660b738b198' => 
    array (
      0 => '/code/templates/article_modal_bibtex.tpl',
      1 => 1511735952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1b42943729a8_06373799 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Modal -->
<div class="modal fade articleBibtex" id="<?php echo $_smarty_tpl->tpl_vars['modal_id']->value;?>
" role="dialog" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Article bibtex</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php $_smarty_tpl->_assignInScope('result', '');
?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author', false, NULL, 'foo', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'];
?>
                          <?php $_smarty_tpl->_assignInScope('temp', $_smarty_tpl->tpl_vars['author']->value->asString());
?>
                          <?php $_smarty_tpl->_assignInScope('result', ((string)$_smarty_tpl->tpl_vars['result']->value).((string)$_smarty_tpl->tpl_vars['temp']->value));
?>
                          <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] : null)) {?>
                           <?php $_smarty_tpl->_assignInScope('result', ((string)$_smarty_tpl->tpl_vars['result']->value)." and ");
?>
                           <?php }?>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          <pre>
@article{
    author    = "<?php echo $_smarty_tpl->tpl_vars['result']->value;?>
",
    title     = "<?php echo $_smarty_tpl->tpl_vars['article']->value->getName();?>
",
    journal   = "<?php echo $_smarty_tpl->tpl_vars['article']->value->getPublication()->getName();?>
",
    volume    = "<?php echo $_smarty_tpl->tpl_vars['article']->value->getPublication()->getIssue();?>
",
    publisher = "<?php echo $_smarty_tpl->tpl_vars['article']->value->getPublication()->getIssuer();?>
",
    year      = "<?php echo $_smarty_tpl->tpl_vars['article']->value->getPublication()->getYear();?>
",
    issn      = "<?php echo $_smarty_tpl->tpl_vars['article']->value->getPublication()->getIssn();?>
"
}
          </pre>
      </div>
    </div>
  </div>
</div>
<?php }
}
