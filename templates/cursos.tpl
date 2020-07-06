{include file="header.tpl"}
<article>
    {if isset($category)}
    <section id="testimonial">
        <div class="container-fluid">
            <p class="h3 mb-2">"{$category['name']}"</p>
        </div>
    </section>
    {else}
    <section id="testimonial">
        <div class="container-fluid">
            <p class="h3 mb-2">"Todos los cursos"</p>
        </div>
    </section>
    {/if}{if $courses|@count == 0}
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="container-image">
                        <img src="image/pensandocurso.jpg" alt="cursos">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="container-data">
                        <h2>Aun no tenemos cursos de {$category['name']}...</h2>
                        <hr>
                        <p>
                            1000 disculpas....
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {else} {foreach from=$courses key=$id item=$course} {if $id % 2 == 0}
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
    </section>{else}
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
                            <li>D&iacutea y horario: A coordinar con alumnas</li>
                            <li>Duraci&oacuten: {$course['duration']}</li>
                            <li>Especialidad: {$course['name']}</li>
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
    {/if} {/foreach} {/if}
</article>
{include file="footer.tpl"}