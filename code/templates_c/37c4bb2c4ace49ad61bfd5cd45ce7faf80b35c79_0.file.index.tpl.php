<?php
/* Smarty version 3.1.30, created on 2017-11-25 16:57:11
  from "/code/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a19a0e7c53dc9_54667726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37c4bb2c4ace49ad61bfd5cd45ce7faf80b35c79' => 
    array (
      0 => '/code/templates/index.tpl',
      1 => 1511628968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:articles.tpl' => 1,
    'file:authors.tpl' => 1,
    'file:author_form.tpl' => 1,
    'file:article_form.tpl' => 1,
  ),
),false)) {
function content_5a19a0e7c53dc9_54667726 (Smarty_Internal_Template $_smarty_tpl) {
?>
 
<!DOCTYPE html>
<html lang="en">
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    function filter(inputID, listID) {
        // Declare variables
        var input, filter, ul, li, a, i;
        input = document.getElementById(inputID);
        filter = input.value.toUpperCase();
        ul = document.getElementById(listID);
        li = ul.getElementsByTagName('li');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }

    function filterArticles() {
        filter("articles-filter", "articles-list");
    }

    function filterAuthors() {
        filter("authors-filter", "authors-list");
    }

    $(document).ready(function() {
        var engine = new Bloodhound({
            remote: {
                url: '/src/controller/AuthorController.php?action=suggest&query=%QUERY',
                wildcard: '%QUERY'
            },
            datumTokenizer: function(datum) {
                return Bloodhound.tokenizers.whitespace(datum.value);
            },
            queryTokenizer: Bloodhound.tokenizers.whitespace
        });

        engine.initialize();
        $('#articleAuthors').tokenfield({
            typeahead: [null, {
                display: 'label',
                source: engine.ttAdapter()
            }]
        });
    });
<?php echo '</script'; ?>
>

<body>

    <div class="container">
        <h2>Configuration</h2>
        <p>Here you can add or remove authors and articles</p>

        <ul class="nav nav-tabs">
            <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#list-articles" role="tab">List articles</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#list-authors" role="tab">List authors</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-author" role="tab">Add author</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-article" role="tab">Add article</a></li>
        </ul>

        <div class="tab-content">
            <div id="list-articles" class="tab-pane active fade show">
                <hr /> <?php $_smarty_tpl->_subTemplateRender("file:articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div id="list-authors" class="tab-pane fade">
                <hr /> <?php $_smarty_tpl->_subTemplateRender("file:authors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div id="add-author" class="tab-pane fade">
                <h3>Add new author</h3> <?php $_smarty_tpl->_subTemplateRender("file:author_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div id="add-article" class="tab-pane fade">
                <h3>Add new article</h3> <?php $_smarty_tpl->_subTemplateRender("file:article_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
</body>

</html>
<?php }
}
