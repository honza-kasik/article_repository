<?php
/* Smarty version 3.1.30, created on 2017-11-25 06:07:01
  from "/code/templates/authors.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1908856f9b66_12431315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5262431132e5039e22e8d75af298b86c2f50d84' => 
    array (
      0 => '/code/templates/authors.tpl',
      1 => 1511590017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1908856f9b66_12431315 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="text" class="form-control" id="authors-filter" onkeyup="filterAuthors()">

<ul class="list-group" id="authors-list">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
    <li class="list-group-item" data-author-id="<?php echo $_smarty_tpl->tpl_vars['author']->value->getId();?>
">
        <?php $_smarty_tpl->_assignInScope('tAfter', $_smarty_tpl->tpl_vars['author']->value->getTitleAfter());
?>
        <?php echo $_smarty_tpl->tpl_vars['author']->value->getTitleBefore();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();
if ($_smarty_tpl->tpl_vars['tAfter']->value !== null && $_smarty_tpl->tpl_vars['tAfter']->value !== '') {?>,
        <?php echo $_smarty_tpl->tpl_vars['tAfter']->value;?>

        <?php }?>
    </li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
