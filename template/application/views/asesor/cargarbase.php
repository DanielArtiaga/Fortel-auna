<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Cargar Base </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="card">

                <div class="card-body">
                    <!-- <legend>Carga</legend> -->
                    <form method="post" id="import_form2" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="flujo">Flujo</label>
                                <select class="form-select" id="flujo">
                                    <option>Confirmación de Citas</option>
                                    <option>Lectura de resultados</option>
                                </select>
                            </div>

                            <div class="form-group col-5">
                                <label for="file">Base</label>
                                <input type="file" id="file" name="file" accept=".xsls, .xlsx" class="form-control">
                            </div>
                            <div class="form-group col-2">
                                <label for="flujo">Flujo</label>
                                <select class="form-select" id="reintento">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>

                            <div class="form-group col-1 ">
                                </br>
                                <!-- <div class="row justify-content-center"> -->
                                <input type="submit" name="import2" id="import2" value="Cargar" class="btn btn-md btn-info">
                                <!-- </div> -->
                            </div>

                        </div>
                        <hr>


                    </form>
                </div>

                <div class="card-body">
                    <!-- <legend>Carga</legend> -->
                    <form method="post" id="filtrobase" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="flujo">Filtro por Flujo</label>
                                <select class="form-select" id="fil-flujo">
                                    <option>Seleccione 1</option>
                                    <option>Seleccione 2</option>
                                </select>
                            </div>

                            <div class="form-group col-3">
                                <label for="file">Fecha Inicio</label>
                                <input type="date" id="fechaini" name="fechaini" accept=".xsls, .xlsx" class="form-control">
                            </div>
                            <div class="form-group col-3">
                                <label for="file">Fecha Fin</label>
                                <input type="date" id="fechafin" name="fechafin" accept=".xsls, .xlsx" class="form-control">
                            </div>

                            <div class="form-group col-2 ">
                                </br>
                                <!-- <div class="row justify-content-center"> -->
                                <input type="submit" name="import2" id="import2" value="Buscar" class="btn btn-md btn-info">
                                <!-- </div> -->
                            </div>

                        </div>
                        <hr>


                    </form>
                </div>
                <!-- -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-base" class="datatable-bases table table-hover table-centered mb-0">

                            <thead>
                                <tr>

                                    <th style="text-align: center;">Id</th>
                                    <th style="text-align: center;">Flujo</th>
                                    <th style="text-align: center;">Nombre Base</th>
                                    <th style="text-align: center;">Fecha Carga</th>
                                    <th style="text-align: center;">Usuario</th>
                                    <th style="text-align: center;">Estado</th>
                                    <th style="text-align: center;">Cantidad</th>
                                </tr>
                            </thead>
                            <tbody id="listar">
                                <tr style="text-align: center;">
                                    <td>1</td>
                                    <td>Confirmación de Citas</td>
                                    <td>base_24</td>
                                    <td>12/04/2024</td>
                                    <td>Juan Perez</td>
                                    <td><span class="badge bg-success">Cargado</span></td>
                                    <td>200</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td>2</td>
                                    <td>Lectura de resultados</td>
                                    <td>base_11</td>
                                    <td>15/04/2024</td>
                                    <td>Raul Lopez</td>
                                    <td><span class="badge bg-danger">Error</span></td>
                                    <td>150</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>



        </div>




    </div> <!-- container -->
</div> <!-- content -->