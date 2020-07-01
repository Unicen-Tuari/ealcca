{include file="headerAdmin.tpl"}
<!--MODAL agregar course-->
<div class="modal face" id="Modaladdcourse" tabindex="-1" role="dialog" aria-labelledby="ModaladdcourseTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModaladdcourseTitle">NEW COURSE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="insertCourse" method="get">
                    <div class="form-group">
                        <label for="course">Course</label>
                        <input type="text" class="form-control" id="course" name="course" placeholder="Titulo del curso">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" id="duration" name="duration" placeholder="duracion del curso">
                    </div>
                    <div class="form-group">
                        <label for="id_category">Category</label>
                        <select class="form-control" id="id_category" name="id_category"> 
                            {foreach from=$categories item=$category}
                                <option value="{$category['id_category']}">{$category['name']}</option>
                            {/foreach}                                   
                        </select>
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

<!--MODAL show course-->
<div class="modal face" id="Modalinfocourse" tabindex="-1" role="dialog" aria-labelledby="ModalinfocourseTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalinfocourseTitle">COURSE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
<!---->

<div class="container-fluid">
    <div class="row">

        {include file="navAdmin.tpl"}

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Courses</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#Modaladdcourse">New course</button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Course</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Published</th>
                            <th>Actionss</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$courses item=$course}
                        <tr>
                            <td>
                                {$course['id_course']}
                            </td>
                            <td>
                                <a href="showCourse/{$course['id_course']}">
                                                {$course['course']}
                                </a>
                            </td>
                            <td>
                                {$course['description']}
                            </td>
                            <td>
                                {$course['name']}
                            </td>
                            <td><span data-feather="slash"></span></td>
                            <td>
                                <a href="#"><span data-feather="edit"></span></a>
                                <a href="deleteCourse/{$course['id_course']}"><span data-feather="trash"></span></a>
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