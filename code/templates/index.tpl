 {* Smarty *}
<!DOCTYPE html>
<html lang="en">
{include file="header.tpl"}

<script>
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
</script>

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
                <hr /> {include file="articles.tpl"}
            </div>
            <div id="list-authors" class="tab-pane fade">
                <hr /> {include file="authors.tpl"}
            </div>
            <div id="add-author" class="tab-pane fade">
                <h3>Add new author</h3> {include file="author_form.tpl"}
            </div>
            <div id="add-article" class="tab-pane fade">
                <h3>Add new article</h3> {include file="article_form.tpl"}
            </div>
        </div>
    </div>
</body>

</html>
