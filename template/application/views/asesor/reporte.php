<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Reporte </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="card">
                <div class="card-body">
                    <form method="post" id="import_form2" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="flujo">Flujo</label>
                                <select class="form-select" id="flujo">
                                    <option>Confirmación de Citas</option>
                                    <option>Lectura de resultados</option>
                                    <!-- <option>Flujo 3</option> -->
                                </select>
                            </div>

                            <div class="form-group col-4">
                                <label for="base">Nombre Base</label>
                                <select class="form-select" id="base">
                                    <option>base_21032024</option>
                                    <option>base_04042024</option>
                                    <!-- <option>Flujo 3</option> -->
                                </select>
                            </div>

                            <!-- <div class="form-group col-3">
                                        <label for="fechainicio">Fecha Inicio</label>
                                        <input class="form-control" type="date" id="fechainicio"></input>
                                    </div>    
                                
                                    <div class="form-group col-3">
                                        <label for="fechafin">Fecha Fin</label>
                                        <input class="form-control" type="date" id="fechafin"></input>
                                        
                                    </div>    -->

                            <!-- <div class="form-group col-1 ">
                                </br>
                                <input type="submit" name="buscar" id="buscar" value="Buscar" class="btn btn-md btn-info">

                            </div>
                            <div class="form-group col-1">
                                </br>
                                <input type="submit" name="exportar" id="exportar" value="Exportar" class="btn btn-md btn-warning">

                            </div> -->

                            <div class="form-group col-5 d-flex align-items-end">
                                <input type="submit" name="buscar" id="buscar" value="Buscar" class="btn btn-md btn-info me-2">
                                <input type="submit" name="exportar" id="exportar" value="Exportar" class="btn btn-md btn-warning">
                            </div>
                            
                        </div>

                        <div class="row">



                        </div>

                    </form>
                </div>
                <!-- -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-base" class="datatable-bases table table-hover table-centered mb-0">

                            <thead>
                                <tr>

                                    <th style="text-align: center;">Nombre Paciente</th>
                                    <th style="text-align: center;">Telefono</th>
                                    <th style="text-align: center;">Email</th>
                                    <th style="text-align: center;">Sexo</th>
                                    <th style="text-align: center;">Fecha</th>
                                    <th style="text-align: center;">Seguro 1</th>
                                    <th style="text-align: center;">Hora Cita</th>
                                    <th style="text-align: center;">Fecha Cita</th>
                                    <th style="text-align: center;">Confirmacion</th>
                                    <th style="text-align: center;">Fecha Confirmacion</th>

                                </tr>
                            </thead>
                            <tbody id="listar">
                                <tr style="text-align: center;">
                                    <td>MELGAREJO SERPA JUANA CECILIA</td>
                                    <td>998156151</td>
                                    <td>CECILIA.MELGAREJO@PERI.COM.PE</td>
                                    <td>MASCULINO</td>
                                    <td>20/06/1977</td>
                                    <td>AUNA_SALUD</td>
                                    <td>09:20</td>
                                    <td>04/04/2024</td>
                                    <td>(BOT) Confirmación exitosa - Chat</td>
                                    <td>14/04/2024</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td>BERROSPI CONDE DE ARTETA GLORIA LUCIA</td>
                                    <td>959100075</td>
                                    <td>gloriaberrospi58@gmail.com</td>
                                    <td>MASCULINO</td>
                                    <td>05/04/1958</td>
                                    <td>AUNA_SALUD</td>
                                    <td>09:40</td>
                                    <td>04/04/2024</td>
                                    <td>(BOT) Reprogramación - Chat</td>
                                    <td>14/04/2024</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td>MELGAREJO SERPA JUANA CECILIA</td>
                                    <td>998156151</td>
                                    <td>CECILIA.MELGAREJO@PERI.COM.PE</td>
                                    <td>MASCULINO</td>
                                    <td>20/06/1977</td>
                                    <td>AUNA_SALUD</td>
                                    <td>10:05</td>
                                    <td>04/04/2024</td>
                                    <td>(BOT) Anulación - Chat</td>
                                    <td>14/04/2024</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td>VERA CEPEDA ROSA AZUCENA</td>
                                    <td>949038666</td>
                                    <td>blankazucena1913@gmail.com</td>
                                    <td>MASCULINO</td>
                                    <td>19/05/1961</td>
                                    <td>AUNA_SALUD</td>
                                    <td>10:40</td>
                                    <td>04/04/2024</td>
                                    <td>(BOT) Confirmación exitosa - llamada</td>
                                    <td>14/04/2024</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td>CAZORLA CORNEJO DE KALINOWSKI ADRIANA TERESA</td>
                                    <td>984970100</td>
                                    <td>cazorlaadriana@gmail.com</td>
                                    <td>FEMENINO</td>
                                    <td>29/03/1964</td>
                                    <td>AUNA_SALUD</td>
                                    <td>11:00</td>
                                    <td>04/04/2024</td>
                                    <td>(BOT) Reprogramación - Llamada</td>
                                    <td>14/04/2024</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td>PONCE MARAÑON LUIS ALBERTO</td>
                                    <td>959755251</td>
                                    <td>luisaponcem@gmail.com</td>
                                    <td>FEMENINO</td>
                                    <td>03/08/1951</td>
                                    <td>AUNA_SALUD</td>
                                    <td>11:00</td>
                                    <td>04/04/2024</td>
                                    <td>(BOT) Anulación - Llamada</td>
                                    <td>15/04/2024</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td>MOLINA GREEN CARLA MICHELLE KIMBERLY PAULA NOELI</td>
                                    <td>978882409</td>
                                    <td>CARLAMICHELLEGREEN@GMAIL.COM</td>
                                    <td>FEMENINO</td>
                                    <td>02/02/1994</td>
                                    <td>AUNA_SALUD</td>
                                    <td>11:00</td>
                                    <td>04/04/2024</td>
                                    <td>(BOT) Número errado/suspendido</td>
                                    <td>15/04/2024</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td>QUITO CORDOVA JOZSET HENRI</td>
                                    <td>922920863</td>
                                    <td>GAPONTE1@HOTMAIL.COM</td>
                                    <td>FEMENINO</td>
                                    <td>08/06/1986</td>
                                    <td>AUNA_SALUD</td>
                                    <td>11:20</td>
                                    <td>04/04/2024</td>
                                    <td>(BOT) Confirmación no exitosa - chat/llamada</td>
                                    <td>15/04/2024</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td>SALINAS DE CORDOVA ELSA LUISA</td>
                                    <td>997920682</td>
                                    <td>LIASASA@HOTMAIL.COM</td>
                                    <td>MASCULINO</td>
                                    <td>25/08/1950</td>
                                    <td>AUNA_SALUD_EMPRESA</td>
                                    <td>11:30</td>
                                    <td>04/04/2024</td>
                                    <td>(BOT) Anulación - Chat</td>
                                    <td>15/04/2024</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td>CORTEZ COTRINA MAURICIO SEBASTIAN</td>
                                    <td>977652055</td>
                                    <td>cortezperez.edson@gmail.com</td>
                                    <td>MASCULINO</td>
                                    <td>23/11/2022</td>
                                    <td>AUNA_SALUD_EMPRESA</td>
                                    <td>11:30</td>
                                    <td>04/04/2024</td>
                                    <td>(BOT) Confirmación exitosa - llamada</td>
                                    <td>15/04/2024</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>



        </div>




    </div> <!-- container -->
</div> <!-- content -->