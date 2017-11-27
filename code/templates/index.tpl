 {* Smarty *}
<!DOCTYPE html>
<html lang="en">
{include file="header.tpl"}

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
                {include file="articles.tpl"}
            </div>
            <div id="list-authors" class="tab-pane fade" role="tabpanel">
                {include file="authors.tpl"}
            </div>
            <div id="add-author" class="tab-pane fade" role="tabpanel">
                <h3>Add new author</h3>
                {include file="author_form.tpl"}
            </div>
            <div id="add-article" class="tab-pane fade" role="tabpanel">
                <h3>Add new article</h3>
                {include file="article_form.tpl" form_id="mainAddForm"}
            </div>
        </div>
    </div>

    <script>
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

    </script>

</body>

</html>
