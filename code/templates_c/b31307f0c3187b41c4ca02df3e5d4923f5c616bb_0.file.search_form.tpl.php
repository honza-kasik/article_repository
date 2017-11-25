<?php
/* Smarty version 3.1.30, created on 2017-11-25 16:29:23
  from "/code/templates/search_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a199a63c1e5e9_57326259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b31307f0c3187b41c4ca02df3e5d4923f5c616bb' => 
    array (
      0 => '/code/templates/search_form.tpl',
      1 => 1511623531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a199a63c1e5e9_57326259 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="list-group" id="articles-list" onkeyup="filterArticles()">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
       <div class="d-flex justify-content-between">
         <h5 class="mb-1"><?php echo $_smarty_tpl->tpl_vars['article']->value->getName();?>
</h5>
       </div>
       <p class="mb-1"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
           <em>$author->getLastName(), $article->getFirstName()</em>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
echo $_smarty_tpl->tpl_vars['article']->value->getPublication()->getName();?>
</p>
     </a>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<?php }
}
