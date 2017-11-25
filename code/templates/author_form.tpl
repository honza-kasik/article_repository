{* Smarty *}

<form action="{$CONTROLLER_PATH}/AuthorController.php?action=create" method="post">
    <div class="form-group">
        <label for="titleBefore">Title before name:</label>
        <input type="text" class="form-control" id="titleBefore" name="titleBefore">
    </div>
    <div class="form-group">
        <label for="firstName">First name:</label>
        <input type="text" class="form-control" id="firstName" name="firstName">
    </div>
    <div class="form-group">
        <label for="lastName">Last name:</label>
        <input type="text" class="form-control" id="lastName" name="lastName">
    </div>
    <div class="form-group">
        <label for="titleAfter">Title after name:</label>
        <input type="text" class="form-control" id="titleAfter" name="titleAfter">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
