<?php
/* Smarty version 3.1.30, created on 2017-11-24 21:42:52
  from "/code/templates/author_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a18925c97c269_15493505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19370e257ca6d5014d54ea11ae6de167a292b2ab' => 
    array (
      0 => '/code/templates/author_form.tpl',
      1 => 1511559638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a18925c97c269_15493505 (Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['CONTROLLER_PATH']->value;?>
/AuthorController.php?action=create" method="post">
    <div class="form-group">
        <label for="titleBefore">Title before name:</label>
        <input type="text" class="form-control" id="titleBefore" name="titleBefore">
    </div>
    <div class="form-group">
        <label for="firstName">First name:</label>
        <input type="text" class="form-control" id="firstName" name="firstName">
    </div>
    <div class="form-group">
        <label for="lastName">Last name:</label>
        <input type="text" class="form-control" id="lastName" name="lastName">
    </div>
    <div class="form-group">
        <label for="titleAfter">Title after name:</label>
        <input type="text" class="form-control" id="titleAfter" name="titleAfter">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php }
}
