<?php
/* Smarty version 3.1.30, created on 2017-11-27 10:05:50
  from "/code/templates/articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1be37e77a2f6_92283866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7a78de22f37259797430b4030bbf25bf0839877' => 
    array (
      0 => '/code/templates/articles.tpl',
      1 => 1511777145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:article_modal_edit.tpl' => 1,
    'file:article_modal_bibtex.tpl' => 1,
  ),
),false)) {
function content_5a1be37e77a2f6_92283866 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
    <input type="text" class="form-control" id="articles-filter" onkeyup="filterArticles()" placeholder="Filter articles">
</div>

<div class="list-group" id="articles-list">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <article class="list-group-item list-group-item-action flex-column align-items-start">
        <p class="mb-1">
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author', false, NULL, 'articleAuthorLoop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_articleAuthorLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_articleAuthorLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_articleAuthorLoop']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_articleAuthorLoop']->value['total'];
?>
               <em><?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo substr($_smarty_tpl->tpl_vars['author']->value->getFirstName(),0,1);?>
.</em><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_articleAuthorLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_articleAuthorLoop']->value['last'] : null)) {?>, <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
:
           <?php echo $_smarty_tpl->tpl_vars['article']->value->getName();?>
.<br/>
           <?php $_smarty_tpl->_assignInScope('pub', $_smarty_tpl->tpl_vars['article']->value->getPublication());
?>
           <strong><?php echo $_smarty_tpl->tpl_vars['pub']->value->getName();?>
, <?php echo $_smarty_tpl->tpl_vars['pub']->value->getIssue();?>
</strong>(<?php echo $_smarty_tpl->tpl_vars['pub']->value->getPages();?>
)(<?php echo $_smarty_tpl->tpl_vars['pub']->value->getYear();?>
)<br/>
           <small>[<?php echo $_smarty_tpl->tpl_vars['pub']->value->getIssuer();?>
, ISSN <?php echo $_smarty_tpl->tpl_vars['pub']->value->getIssn();?>
, doi:<?php echo $_smarty_tpl->tpl_vars['pub']->value->getDoi();?>
]
           <?php if ($_smarty_tpl->tpl_vars['pub']->value->getLink() !== null && $_smarty_tpl->tpl_vars['pub']->value->getLink() !== '') {?><a href="<?php echo $_smarty_tpl->tpl_vars['pub']->value->getLink();?>
">PDF</a><?php }?></small>

        </p>
        <a href="#edit-article" data-toggle="modal" data-target="#articleModal_<?php echo $_smarty_tpl->tpl_vars['article']->value->getId();?>
">Edit</a> |
        <a href="<?php echo $_smarty_tpl->tpl_vars['CONTROLLER_PATH']->value;?>
/ArticleController.php?action=remove&id=<?php echo $_smarty_tpl->tpl_vars['article']->value->getId();?>
">Remove</a> |
        <a href="#generate-bibtex" data-toggle="modal" data-target="#articleBibtex_<?php echo $_smarty_tpl->tpl_vars['article']->value->getId();?>
">Bibtex</a>

        <?php $_smarty_tpl->_subTemplateRender("file:article_modal_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['article']->value,'modal_id'=>"articleModal_".((string)$_smarty_tpl->tpl_vars['article']->value->getId())), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:article_modal_bibtex.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['article']->value,'modal_id'=>"articleBibtex_".((string)$_smarty_tpl->tpl_vars['article']->value->getId())), 0, true);
?>

    </article>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<?php }
}
