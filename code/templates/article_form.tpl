{* Smarty *}

{function form_input type=text required=true}
    <label for="{$inputName}">{$label}</label>
    <input
        type="{$type}"
        class="form-control"
        id="{$inputName}"
        name="{$inputName}"
        placeholder="{$label}"
        {if $required}
            required
        {/if}
        {if isset($article)}
            value="{eval var=$value|default:''}"
        {/if}
        />
{/function}

<form action="{$CONTROLLER_PATH}/ArticleController.php?action=create" method="post">
    <div class="form-group">
        {form_input label="Article name" inputName="articleName" value='{$article->getName()}'}
    </div>
    <div class="form-group">
        {form_input label="Authors" inputName="articleAuthors"}
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            {form_input label="Publication name" inputName="articlePublicationName" value='{$article->getPublication()->getName()}'}
        </div>
        <div class="form-group col-md-6">
            {form_input label="Publication issuer" inputName="articlePublicationIssuer" value='{$article->getPublication()->getIssuer()}'}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            {form_input label="Publication issue" inputName="articlePublicationIssue" value='{$article->getPublication()->getIssue()}'}
        </div>
        <div class="form-group col-md-4">
            {form_input label="Publication year" inputName="articlePublicationYear" value='{$article->getPublication()->getYear()}'}
        </div>
        <div class="form-group col-md-4">
            {form_input label="Publication pages" inputName="articlePublicationPages" value='{$article->getPublication()->getPages()}'}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            {form_input label="Publication ISSN" inputName="articlePublicationISSN" value='{$article->getPublication()->getIssn()}'}
        </div>
        <div class="form-group col-md-6">
            {form_input label="Publication DOI" inputName="articlePublicationDOI" value='{$article->getPublication()->getDoi()}'}
        </div>
    </div>
    <div class="form-group">
        {form_input label="Publication link" inputName="articlePublicationLink" value='{$article->getPublication()->getLink()}' required=false}
    </div>
    <button type="submit" class="btn btn-default">Add new article</button>
</form>
