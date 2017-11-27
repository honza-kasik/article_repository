<?php
/* Smarty version 3.1.30, created on 2017-11-27 07:45:36
  from "/code/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1bc2a01c9956_49283627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37c4bb2c4ace49ad61bfd5cd45ce7faf80b35c79' => 
    array (
      0 => '/code/templates/index.tpl',
      1 => 1511768685,
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
function content_5a1bc2a01c9956_49283627 (Smarty_Internal_Template $_smarty_tpl) {
?>
 
<!DOCTYPE html>
<html lang="en">
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<style>
.tab-pane {
  margin-top: 1.25rem;
}
.container {
    margin-top: 1.25rem;
}
</style>

<body>

    <div class="container">
        <h1>Article repository</h1>
        <p>Simple article repository project</p>

        <ul class="nav nav-tabs">
            <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#list-articles" role="tab">List articles</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#list-authors" role="tab">List authors</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-author" role="tab">Add author</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#add-article" role="tab">Add article</a></li>
        </ul>

        <div class="tab-content">
            <div id="list-articles" class="tab-pane active fade show" role="tabpanel">
                <?php $_smarty_tpl->_subTemplateRender("file:articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div id="list-authors" class="tab-pane fade" role="tabpanel">
                <?php $_smarty_tpl->_subTemplateRender("file:authors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div id="add-author" class="tab-pane fade" role="tabpanel">
                <h3>Add new author</h3>
                <?php $_smarty_tpl->_subTemplateRender("file:author_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div id="add-article" class="tab-pane fade" role="tabpanel">
                <h3>Add new article</h3>
                <?php $_smarty_tpl->_subTemplateRender("file:article_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form_id'=>"mainAddForm"), 0, false);
?>

            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            $('.articleAuthorsSuggesting').select2({
                    width: "100%",
                    minimumInputLength: 1,
                    palceholder: "Select authors",
                    ajax: {
                        url: '/src/controller/AuthorController.php',
                        dataType: 'json',
                        data: function(params) {
                            return {
                                action: 'suggest',
                                query: params.term,
                            }
                        }
                    }
                });
            });
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

    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
