<?php
/* Smarty version 3.1.30, created on 2017-11-19 17:34:58
  from "/code/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a11c0c2917615_36940652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37c4bb2c4ace49ad61bfd5cd45ce7faf80b35c79' => 
    array (
      0 => '/code/templates/index.tpl',
      1 => 1511112893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5a11c0c2917615_36940652 (Smarty_Internal_Template $_smarty_tpl) {
?>



<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


Hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, welcome to Smarty! Foobar
<?php }
}
