{include file="headerAdmin.tpl"}
<!--MODAL agregar category-->
<div class="modal face" id="Modaladdcategory" tabindex="-1" role="dialog" aria-labelledby="ModaladdcategoryTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModaladdcategoryTitle">NEW CATEGORY</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="insertCategory" method="get">
                    <div class="form-group">
                        <label for="name">Category</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name category">
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">

        {include file="navAdmin.tpl"}

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Categories</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#Modaladdcategory">New category</button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$categories item=$category}
                        <tr>
                            <td>
                                {$category['id_category']}
                            </td>
                            <td>
                                <a href="showCategory/{$category['id_category']}">
                                    {$category['name']}
                                </a>
                            </td>
                            <td>
                                <a href="#"><span data-feather="edit"></span></a>
                                <a href="deleteCategory/{$category['id_category']}"><span data-feather="trash"></span></a>
                            </td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
{include file="footerAdmin.tpl"}