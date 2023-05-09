<?php include 'Template/header2.php' ?>
<?php
    include_once "Model/ConexionBD.php";
    $sentenciaBD = $bd -> query("select * from pacientes");
    $pacientes = $sentenciaBD->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Lista de pacientes
                </div>
                <div class="p-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nro</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Fecha ingreso</th>
                                <th scope="col">hora entrada</th>
                                <th scope="col">hora salida</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($pacientes as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->codigo; ?></td>
                                <td><?php echo $dato->nombres; ?></td>
                                <td><?php echo $dato->apellidos; ?></td>
                                <td><?php echo $dato->fecha_ingreso; ?></td>
                                <td><?php echo $dato->hora_llegada; ?></td>
                                <td><?php echo $dato->hora_salida; ?></td>
                                <td><a class="text-success" href="EditarDatos.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="EliminarDatos.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text" href="EliminarDatos.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>