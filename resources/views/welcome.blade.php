<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.0.0/parsley.js" integrity="sha512-BM1SgagzcQFKwHK8+ZRxqVQ5TFK46UZ1Vklk+dLbXhH5U95/+062uI34JSUJpoS6Dz1VCKFXWfDmDJz8pxqzTg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js" integrity="sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-end">
            <div class="">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-bookmark-plus-fill"></i>Crear Alumno</button>
            </div>
        </div>

        <div id="table" class="mt-4">
            <table id="tableRegistros" class="table">
                <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>Identidad</th>
                        <th>Nombre completo</th>
                        <th>Fecha Nacimiento</th>
                        <th>Fecha Ingreso</th>
                        <th>Grado Actual</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>


            </table>
        </div>
    </div>
    <!--modal de registro -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Alumno</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="" class="form-group">
                        <label for="pnombre" class="form-label">Primer Nombre</label>
                        <input id="pnombre" type="text" class="form-control">
                        <label for="snombre" class="form-label mt-2">Segundo Nombre</label>
                        <input id="snombre" type="text" class="form-control">
                        <label for="papellido" class="form-label mt-2">Primer Apellido</label>
                        <input id="papellido" type="text" class="form-control">
                        <label for="sapellido" class="form-label mt-2">Segundo Apellido</label>
                        <input id="sapellido" type="text" class="form-control">

                        <label for="identidad" class="form-label mt-2">Numero de Identidad</label>
                        <input id="identidad" type="number" class="form-control">



                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="masculino" value="1">
                            <label class="form-check-label" for="masculino">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="femenino" value="2">
                            <label class="form-check-label" for="femenino">
                                Femenino
                            </label>
                        </div>

                        <label for="fechaNacimiento" class="form-label mt-4">Fecha de Nacimiento</label>
                        <input id="fechaNacimiento" type="date" class="form-control">

                        <label for="fechaIngreso" class="form-label mt-4">Fecha de Ingreso</label>
                        <input id="fechaIngreso" type="date" class="form-control">


                        <select id="grados" class="form-select mt-4 " aria-label="Default select example">
                            <option selected value="0">Seleccione un grado</option>
                            <option value="1">Primer Grado</option>
                            <option value="2">Segundo Grado</option>
                            <option value="3">Tercer Grado</option>
                            <option value="4">Cuarto Grado</option>
                            <option value="5">Quinto Grado</option>
                            <option value="6">Sexto Grado</option>
                            <option value="7">Septimo Grado</option>
                        </select>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="guardarRegistro()">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!--modal de editar -->
    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditar" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditar">Editar Datos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="" class="form-group">
                        <label for="pnombreEdit" class="form-label">Primer Nombre</label>
                        <input id="pnombreEdit" type="text" class="form-control">
                        <label for="snombreEdit" class="form-label mt-2">Segundo Nombre</label>
                        <input id="snombreEdit" type="text" class="form-control">
                        <label for="papellidoEdit" class="form-label mt-2">Primer Apellido</label>
                        <input id="papellidoEdit" type="text" class="form-control">
                        <label for="sapellidoEdit" class="form-label mt-2">Segundo Apellido</label>
                        <input id="sapellidoEdit" type="text" class="form-control">

                        <label for="identidadEdit" class="form-label mt-2">Numero de Identidad</label>
                        <input id="identidadEdit" type="number" class="form-control">



                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="masculinoEdit" value="1">
                            <label class="form-check-label" for="masculino">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="femeninoEdit" value="2">
                            <label class="form-check-label" for="femenino">
                                Femenino
                            </label>
                        </div>

                        <label for="fechaNacimientoEdit" class="form-label mt-4">Fecha de Nacimiento</label>
                        <input id="fechaNacimientoEdit" type="date" class="form-control">

                        <label for="fechaIngresoEdit" class="form-label mt-4">Fecha de Ingreso</label>
                        <input id="fechaIngresoEdit" type="date" class="form-control">


                        <select id="gradosEdit" class="form-select mt-4  " aria-label="Default select example" >
                            <option selected value="0">Seleccione un grado</option>
                            <option value="1">Primer Grado</option>
                            <option value="2">Segundo Grado</option>
                            <option value="3">Tercer Grado</option>
                            <option value="4">Cuarto Grado</option>
                            <option value="5">Quinto Grado</option>
                            <option value="6">Sexto Grado</option>
                            <option value="7">Septimo Grado</option>
                        </select>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="guardarEdicion()">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!--modal Eliminar-->
    <!-- Modal -->
<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="eliminar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h5 class="modal-title" id="eliminar">¿Desea elimar este estudiante?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger" onclick="borrarAlumno()">Confirmar</button>
      </div>
    </div>
  </div>
</div>

    <script>
        var idEstudianteEliminar = null;
        var idEstudianteEditar = null;
        this.obtenerGrados();
        $(document).ready(tablaRegistros());

        function obtenerGrados() {
            axios.get('/obtener/grados')
                .then(response => {
                    console.log(response.data.grados);

                })
                .catch(err => {
                    console.log(err);
                })
        }

        function guardarRegistro() {
            let pnombre = document.getElementById('pnombre').value;
            let snombre = document.getElementById('snombre').value;
            let papellido = document.getElementById('papellido').value;
            let sapellido = document.getElementById('sapellido').value;
            let identidad = document.getElementById('identidad').value;

            let masculino = document.getElementById('masculino').value;
            let masculinoCkech = document.getElementById('masculino').checked;

            let femenino = document.getElementById('femenino').value;
            let femeninoCkech = document.getElementById('femenino').checked;

            let fechaNacimiento = document.getElementById('fechaNacimiento').value;
            let fechaIngreso = document.getElementById('fechaIngreso').value

            let option = document.getElementById("grados");
            let gradoValor = option.options[option.selectedIndex].value;

            var sexo = 0;




            if (!pnombre) {
                alert("El primer nombre es requerido");
                return;
            }

            if (!snombre) {
                alert("El segundo nombre es requerido");
                return;
            }

            if (!papellido) {
                alert("El primer apellido es requerido");
                return;
            }

            if (!sapellido) {
                alert("El segundo apellido es requerido");
                return;
            }

            if (!identidad) {
                alert("El numero de identidad es requerido");
                return;
            }

            if (masculinoCkech == false && femeninoCkech == false) {
                alert("Por favor seleccione el sexo del estudiante");
                return;
            }

            if (!fechaNacimiento) {
                alert("El campo fecha de nacimiento es requerido");
                return;
            }

            if (!fechaIngreso) {
                alert("El campo fecha de ingreso es requerido");
                return;
            }

            if (gradoValor == 0) {
                alert("Por favor seleccione el grado del estudiante");
                return;
            }

            if (femeninoCkech) {
                sexo = 2;
            }

            if (masculinoCkech) {
                sexo = 1;
            }


            //console.log(masculinoCkech, masculino, identidad, gradoValor)

            axios.post('/guardar/registro', {
                    pNombre: pnombre,
                    sNombre: snombre,
                    pApellido: papellido,
                    sApellido: sapellido,
                    identidad: identidad,
                    sexo: sexo,
                    fechaNacimiento: fechaNacimiento,
                    fechaIngreso: fechaIngreso,
                    gradoValor: gradoValor
                })
                .then(response => {
                   // console.log(response.data);
                    $("#tableRegistros").DataTable().ajax.reload();
                    
                    Swal.fire({
                        title: 'Exito!',
                        text: 'Registro guardado con exito.',
                        icon: 'success',
                        confirmButtonText: 'Cerrar',
                        timer: 5000
                    })
                    $("#exampleModalLabel").modal("hide");
                    
                })
                .catch(err => {
                    console.log(err.response.data);
                    Swal.fire({
                        title: 'Error!',
                        text: 'Ha ocurrido un error.',
                        icon: 'error',
                        confirmButtonText: 'Cerrar'
                    })
                })


        }

        function tablaRegistros() {

            $("#tableRegistros").DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
                },
                ajax: "/listar/registros",
                processing: true,
                serverSide: true,
                columns: [{
                        data: "id",
                        name: "id"
                    },
                    {
                        data: "identidad",
                        name: "identidad"
                    },
                    {
                        data: "nombre_completo",
                        name: "nombre_completo"
                    },
                    {
                        data: "fecha_nacimiento",
                        name: "fecha_nacimiento"
                    },
                    {
                        data: "fecha_ingreso",
                        name: "fecha_ingreso"
                    },
                    {
                        data: "grado_actual",
                        name: "grado_actual"
                    },
                    {
                        data: "estado",
                        name: "estado"
                    },
                    {
                        data: "acciones",
                        name: "acciones",
                        orderable: false,
                        searchable: false,
                    },
                ],
            });

          
        }

        function modalEditarDesplegar(id){
            axios.post('/editar/'+id)
            .then( response =>{
               // console.log(response.data);
               this.idEstudianteEditar = id;
                document.getElementById('pnombreEdit').value = response.data.alumno[0].primer_nombre;
                document.getElementById('snombreEdit').value = response.data.alumno[0].segundo_nombre;
                document.getElementById('papellidoEdit').value = response.data.alumno[0].primer_apellido;
                document.getElementById('sapellidoEdit').value = response.data.alumno[0].segundo_apellido;
                document.getElementById('identidadEdit').value = response.data.alumno[0].identidad;
                document.getElementById('fechaIngresoEdit').value = response.data.alumno[0].fecha_ingreso;
                document.getElementById('fechaNacimientoEdit').value = response.data.alumno[0].fecha_nacimiento;

                if(response.data.alumno[0].sexo_id == 1){
                    document.getElementById('masculinoEdit').checked = true;
                }else{
                    document.getElementById('femeninoEdit').checked = true;
                }

                let opcion = document.getElementById('gradosEdit');
                opcion.value = response.data.alumno[0].clase_id
                opcion.selectedIndex = response.data.alumno[0].clase_id
                opcion.disabled = true;

                //form-select mt-4
                opcion.setAttribute("class","form-select mt-4  bg-secondary text-white ")
               // console.log(this.idEstudianteEditar)
                $("#modalEditar").modal("show");
            })
            .catch( err => {
                console.log(err);
                Swal.fire({
                        title: 'Error!',
                        text: 'Ha ocurrido un error.',
                        icon: 'error',
                        confirmButtonText: 'Cerrar'
                    })

            })

          
    } 

    function confirmarBorrar(id){
        this.idEstudianteEliminar = id;
        $("#eliminar").modal("show");
    }

    function borrarAlumno(){
        //console.log(id);
        let id = this.idEstudianteEliminar;

        axios.post('/eliminar/estudiante', {
            idEstudiante: id
        })
        .then( response =>{
            $("#tableRegistros").DataTable().ajax.reload();
            Swal.fire({
                        title: 'Exito!',
                        text: 'Registro eliminado con exito.',
                        icon: 'success',
                        confirmButtonText: 'Cerrar'
                    })
            

        })
        .catch( err => {
            console.log(err.response.data);
            Swal.fire({
                        title: 'Error!',
                        text: 'Ha ocurrido un error al eliminar el registro.',
                        icon: 'error',
                        confirmButtonText: 'Cerrar'
                    })
            
        })

        

    }

     function guardarEdicion(){
        let pnombre = document.getElementById('pnombreEdit').value;
            let snombre = document.getElementById('snombreEdit').value;
            let papellido = document.getElementById('papellidoEdit').value;
            let sapellido = document.getElementById('sapellidoEdit').value;
            let identidad = document.getElementById('identidadEdit').value;

            let masculino = document.getElementById('masculinoEdit').value;
            let masculinoCkech = document.getElementById('masculinoEdit').checked;

            let femenino = document.getElementById('femeninoEdit').value;
            let femeninoCkech = document.getElementById('femeninoEdit').checked;

            let fechaNacimiento = document.getElementById('fechaNacimientoEdit').value;
            let fechaIngreso = document.getElementById('fechaIngresoEdit').value

            let option = document.getElementById("gradosEdit");
            let gradoValor = option.options[option.selectedIndex].value;

            var sexo = 0;




            if (!pnombre) {
                alert("El primer nombre es requerido");
                return;
            }

            if (!snombre) {
                alert("El segundo nombre es requerido");
                return;
            }

            if (!papellido) {
                alert("El primer apellido es requerido");
                return;
            }

            if (!sapellido) {
                alert("El segundo apellido es requerido");
                return;
            }

            if (!identidad) {
                alert("El numero de identidad es requerido");
                return;
            }

            if (masculinoCkech == false && femeninoCkech == false) {
                alert("Por favor seleccione el sexo del estudiante");
                return;
            }

            if (!fechaNacimiento) {
                alert("El campo fecha de nacimiento es requerido");
                return;
            }

            if (!fechaIngreso) {
                alert("El campo fecha de ingreso es requerido");
                return;
            }

            if (gradoValor == 0) {
                alert("Por favor seleccione el grado del estudiante");
                return;
            }

            if (femeninoCkech) {
                sexo = 2;
            }

            if (masculinoCkech) {
                sexo = 1;
            }


            //console.log(masculinoCkech, masculino, identidad, gradoValor)

            axios.post('/actualizar/registro', {
                    pNombre: pnombre,
                    sNombre: snombre,
                    pApellido: papellido,
                    sApellido: sapellido,
                    identidad: identidad,
                    sexo: sexo,
                    fechaNacimiento: fechaNacimiento,
                    fechaIngreso: fechaIngreso,
                    gradoValor: gradoValor,
                    idEstudiante: this.idEstudianteEditar
                })
                .then(response => {
                   // console.log(response.data);
                    $("#tableRegistros").DataTable().ajax.reload();
                    
                    Swal.fire({
                        title: 'Exito!',
                        text: 'Registro actualizado con exito.',
                        icon: 'success',
                        confirmButtonText: 'Cerrar',
                        timer: 5000
                    })
                    $("#modalEditar").modal("hide");
                    
                })
                .catch(err => {
                    console.log(err.response.data);
                    Swal.fire({
                        title: 'Error!',
                        text: 'Ha ocurrido un error.',
                        icon: 'error',
                        confirmButtonText: 'Cerrar'
                    })
                })


    }
    </script>

</body>

</html>