{include file="header.tpl"}
<article>
    {foreach from=$courses item=$course}
    <section>
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 p-0">
                    <div class="container-image">
                        <img src="image/curso1.jpg" alt="cursos">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="container-data">
                        <h2>{$course['course']}</h2>
                        <hr>
                        <p>
                            {$course['description']}
                        </p>
                        <ul>
                            <li>D&iacutea y horario: A coordinar con alumnas</li>
                            <li>Duraci&oacuten: {$course['duration']}</li>
                            <li>Especialidad: {$course['name']}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="container-data">
                        <h2>{$course['course']}</h2>
                        <hr>
                        <p>
                            {$course['description']}
                        </p>
                        <ul>
                            <li>Nivel inicial y avanzado</li>
                            <li>D&iacutea y horario a coordinar con alumnas</li>
                            <li>Duraci&oacuten 24hrs</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="container-image">
                        <img src="image/curso2.jpg" alt="cursos">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {/foreach}
</article>

{include file="footer.tpl"}