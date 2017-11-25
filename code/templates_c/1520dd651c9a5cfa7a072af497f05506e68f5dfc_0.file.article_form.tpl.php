<?php
/* Smarty version 3.1.30, created on 2017-11-25 13:45:52
  from "/code/templates/article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1974104dc690_47355485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1520dd651c9a5cfa7a072af497f05506e68f5dfc' => 
    array (
      0 => '/code/templates/article_form.tpl',
      1 => 1511617546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1974104dc690_47355485 (Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['CONTROLLER_PATH']->value;?>
/ArticleController.php?action=create" method="post">
    <div class="form-group">
        <label for="articleName">Article name:</label>
        <input type="text" class="form-control" id="articleName" name="articleName" required>
    </div>
    <div class="form-group">
        <label for="articleAuthors">Authors:</label>
        <input type="text" class="form-control" id="articleAuthors" name="articleAuthors" required>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="articlePublicationName">Publication name:</label>
            <input type="text" class="form-control" id="publicationName" name="publicationName" required>
        </div>
        <div class="form-group col-md-6">
            <label for="publicationIssuer">Publication issuer:</label>
            <input type="text" class="form-control" id="publicationIssuer" name="publicationIssuer" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <label for="publicationIssue">Publication issue:</label>
            <input type="text" class="form-control" id="publicationIssue" name="publicationIssue" required>
        </div>
        <div class="form-group col-md-4">
            <label for="publicationYear">Publication year:</label>
            <input type="text" class="form-control" id="publicationYear" name="publicationYear" required pattern="\d{4}">
        </div>
        <div class="form-group col-md-4">
            <label for="publicationPages">Publication pages:</label>
            <input type="text" class="form-control" id="publicationPages" name="publicationPages" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="publicationISSN">Publication ISSN:</label>
            <input type="text" class="form-control" id="publicationISSN" name="publicationISSN" required>
        </div>
        <div class="form-group col-md-6">
            <label for="publicationDOI">Publication DOI:</label>
            <input type="text" class="form-control" id="publicationDOI" name="publicationDOI">
        </div>
    </div>
    <div class="form-group">
        <label for="publicationLink">Publication link:</label>
        <input type="text" class="form-control" id="publicationLink" name="publicationLink">
    </div>
    <button type="submit" class="btn btn-default">Add new article</button>
</form>
<?php }
}
