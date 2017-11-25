{* Smarty *}

<form action="{$CONTROLLER_PATH}/ArticleController.php?action=create" method="post">
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
            <input type="text" class="form-control" id="publicationYear" name="publicationYear" required pattern="\d{literal}{4}{/literal}">
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
