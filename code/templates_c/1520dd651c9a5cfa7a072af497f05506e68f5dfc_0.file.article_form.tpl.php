<?php
/* Smarty version 3.1.30, created on 2017-11-26 18:46:22
  from "/code/templates/article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1b0bfeb26ec0_19381128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1520dd651c9a5cfa7a072af497f05506e68f5dfc' => 
    array (
      0 => '/code/templates/article_form.tpl',
      1 => 1511721980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1b0bfeb26ec0_19381128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'form_input' => 
  array (
    'compiled_filepath' => '/code/templates_c/1520dd651c9a5cfa7a072af497f05506e68f5dfc_0.file.article_form.tpl.php',
    'uid' => '1520dd651c9a5cfa7a072af497f05506e68f5dfc',
    'call_name' => 'smarty_template_function_form_input_19624220145a1b0bfeaf29c8_17953704',
  ),
));
?>




<form action="<?php echo $_smarty_tpl->tpl_vars['CONTROLLER_PATH']->value;?>
/ArticleController.php?action=create" method="post">
    <div class="form-group">
        <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'form_input', array('label'=>"Article name",'inputName'=>"articleName",'value'=>'{$article->getName()}'), true);?>

    </div>
    <div class="form-group">
        <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'form_input', array('label'=>"Authors",'inputName'=>"articleAuthors"), true);?>

    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'form_input', array('label'=>"Publication name",'inputName'=>"articlePublicationName",'value'=>'{$article->getPublication()->getName()}'), true);?>

        </div>
        <div class="form-group col-md-6">
            <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'form_input', array('label'=>"Publication issuer",'inputName'=>"articlePublicationIssuer",'value'=>'{$article->getPublication()->getIssuer()}'), true);?>

        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'form_input', array('label'=>"Publication issue",'inputName'=>"articlePublicationIssue",'value'=>'{$article->getPublication()->getIssue()}'), true);?>

        </div>
        <div class="form-group col-md-4">
            <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'form_input', array('label'=>"Publication year",'inputName'=>"articlePublicationYear",'value'=>'{$article->getPublication()->getYear()}'), true);?>

        </div>
        <div class="form-group col-md-4">
            <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'form_input', array('label'=>"Publication pages",'inputName'=>"articlePublicationPages",'value'=>'{$article->getPublication()->getPages()}'), true);?>

        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'form_input', array('label'=>"Publication ISSN",'inputName'=>"articlePublicationISSN",'value'=>'{$article->getPublication()->getIssn()}'), true);?>

        </div>
        <div class="form-group col-md-6">
            <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'form_input', array('label'=>"Publication DOI",'inputName'=>"articlePublicationDOI",'value'=>'{$article->getPublication()->getDoi()}'), true);?>

        </div>
    </div>
    <div class="form-group">
        <?php $_smarty_tpl->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'form_input', array('label'=>"Publication link",'inputName'=>"articlePublicationLink",'value'=>'{$article->getPublication()->getLink()}','required'=>false), true);?>

    </div>
    <button type="submit" class="btn btn-default">Add new article</button>
</form>
<?php }
/* smarty_template_function_form_input_19624220145a1b0bfeaf29c8_17953704 */
if (!function_exists('smarty_template_function_form_input_19624220145a1b0bfeaf29c8_17953704')) {
function smarty_template_function_form_input_19624220145a1b0bfeaf29c8_17953704($_smarty_tpl,$params) {
$params = array_merge(array('type'=>'text','required'=>true), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
    <label for="<?php echo $_smarty_tpl->tpl_vars['inputName']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
    <input
        type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"
        class="form-control"
        id="<?php echo $_smarty_tpl->tpl_vars['inputName']->value;?>
"
        name="<?php echo $_smarty_tpl->tpl_vars['inputName']->value;?>
"
        placeholder="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
"
        <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>
            required
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['article']->value)) {?>
            value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['evaledValue']->value)===null||$tmp==='' ? '' : $tmp);?>
"
        <?php }?>
        />
<?php
}}
/*/ smarty_template_function_form_input_19624220145a1b0bfeaf29c8_17953704 */
}
