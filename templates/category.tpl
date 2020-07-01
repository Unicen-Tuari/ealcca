{include file="headerAdmin.tpl"}
<div class="container-fluid">
    <div class="row">

        {include file="navAdmin.tpl"}

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Category</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="categories"><button type="button" class="btn btn-sm btn-outline-secondary">Volver</button></a>
                    </div>
                </div>
            </div>
            <div class="card text-white bg-info mb-3 infoCourse">
                <div class="card-header">{$infoCategory['id_category']}</div>
                <div class="card-body">
                    <h4 class="card-title">{$infoCategory['name']}</h4>
                    <p class="card-text text-white"></p>
                </div>
            </div>
        </main>
    </div>
</div>
{include file="footerAdmin.tpl"}