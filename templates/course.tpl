{include file="headerAdmin.tpl"}
<div class="container-fluid">
    <div class="row">

        {include file="navAdmin.tpl"}

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Course</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="admin"><button type="button" class="btn btn-sm btn-outline-secondary">Volver</button></a>
                    </div>
                </div>
            </div>

            <div class="card text-white bg-info mb-3 infoCourse">
                <div class="card-header">{$infoCourse['name']}</div>
                <div class="card-body">
                    <h4 class="card-title">{$infoCourse['course']}</h4>
                    <p class="card-text text-white">{$infoCourse['description']}</p>
                    <li>Duraci&oacuten del curso: {$infoCourse['duration']}</li>
                </div>
            </div>
        </main>
    </div>
</div>
{include file="footerAdmin.tpl"}