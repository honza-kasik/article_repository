<?php
/* Smarty version 3.1.30, created on 2017-11-25 17:13:47
  from "/code/templates/articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a19a4cbbd1c37_30659657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7a78de22f37259797430b4030bbf25bf0839877' => 
    array (
      0 => '/code/templates/articles.tpl',
      1 => 1511630024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a19a4cbbd1c37_30659657 (Smarty_Internal_Template $_smarty_tpl) {
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
       <?php $_smarty_tpl->_assignInScope('article_authors', $_smarty_tpl->tpl_vars['article']->value->getAuthors());
?>
       <p class="mb-1"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_authors']->value, 'author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
           <em><?php echo $_smarty_tpl->tpl_vars['author']->value->lastName;?>
, <?php echo $_smarty_tpl->tpl_vars['article']->value->firstName;?>
</em>
           Article_author: <?php echo $_smarty_tpl->tpl_vars['author']->value;?>

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
