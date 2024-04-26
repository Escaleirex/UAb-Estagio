<?= view('Modules\InventarioEquipamentos\Views\templates\headerTemplate', [
    'title'=>lang('InventarioEquipamentos.list'),
]); 

helper('form');
?>

<section>
    <!-- Modal para Adicionar -->
    <div class="modal modal-xl" tabindex="-1" id="addModal">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar Equipamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php if(isset($validation)): ?>
                    <?php echo $validation->listErrors(); ?>
                <?php endif; ?>
                <form id="addForm" role="form" method="post" action="submitForm">
                <div class="p-3 mb-3">
                        <div class="row row-cols-4 mb-2">
                            <div class="col-md-3">
                                <label class="form-label">NI</label>
                                <input class="form-control" name="ni" type="text" value="" aria-label="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Número de Série</label>
                                <input class="form-control" name="sn" type="text" value="" aria-label="">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Tipo</label>
                                <select class="form-select" name="tipo" aria-label="">
                                    <option selected>Portátil</option>
                                    <option value="1">Auscultadores	</option>
                                    <option value="2">Computador</option>
                                    <option value="3">Monitor</option>
                                    <option value="4">Webcam</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <label class="form-label mb-1">Estado</label>
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="ativo" id="stateRadioAdd" value="1">
                                        <label class="form-check-label" for="stateRadioAdd">
                                            Ativo
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="ativo" id="stateRadioAdd2" value="0" checked>
                                        <label class="form-check-label" for="stateRadioAdd2">
                                            Inativo
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-3 mb-2">
                            <div class="col-md-5">
                                <label class="form-label">Marca</label>
                                <input class="form-control" name="marca" type="text" value="" aria-label="">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label">Modelo</label>
                                <input class="form-control" name="modelo" type="text" value="" aria-label="">
                            </div>
                            <div class="row row-cols-1 col-md-2">
                                <label class="form-label mb-1">Disponivel</label>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="disponivel" id="stateRadioAdd" value="1">
                                    <label class="form-check-label" for="stateRadioAdd">
                                        Sim
                                    </label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="disponivel" id="stateRadioAdd2" value="0" checked>
                                    <label class="form-check-label" for="stateRadioAdd2">
                                        Não
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-3 mb-2">
                            <div class="col-4">
                                    <label class="form-label">Localização</label>
                                    <input class="form-control" name="localizacao" type="text" value="" aria-label="">
                            </div>
                            <div class="col-4">
                                <label class="form-label">Piso</label>
                                <input class="form-control" name="piso" type="text" value="" aria-label="">
                            </div>
                            <div class="col-4">
                                <label class="form-label">Sala</label>
                                <input class="form-control" name="sala" type="text" value="" aria-label="">
                            </div>
                        </div>
                        <div class="row row-cols-1 mb-2">
                            <div class="col-6">
                                <label class="form-label">Serviço</label>
                                <input class="form-control" name="servico" type="text" value="" aria-label="">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Data de Aquisição</label>
                                <input class="form-control" name="aquisicaoDtm" type="datetime-local" value="">
                            </div>
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Nota</label>
                            <textarea class="form-control" name="notas" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal para Editar -->
    <div class="modal modal-xl" tabindex="-1" id="editModal">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Equipamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editForm" role="form" method="post" action="updateItemForm">
                <div class="p-3 mb-3">
                        <div class="row row-cols-5 mb-2">
                            <div class="col-2">
                                <label class="form-label">ID</label>
                                <input class="form-control" id="editID" type="text" value="Mostrar ID Aqui" aria-label="Mostrar ID Aqui" disabled readonly>
                            </div>
                            <div class="col-auto">
                                <label class="form-label">NI</label>
                                <input class="form-control" type="text" id="editNI" value="NI Aqui" aria-label="NI Aqui">
                            </div>
                            <div class="col-auto">
                                <label class="form-label">Número de Série</label>
                                <input class="form-control" type="text" id="editSN" value="Número de Série Aqui" aria-label="Número de Série Aqui">
                            </div>
                            <div class="col-md-3 me-2">
                                <label class="form-label">Tipo</label>
                                <select class="form-select" id="editTipo" aria-label="Tipo">
                                    <option value="1" selected>Portátil</option>
                                    <option value="2">Auscultadores</option>
                                    <option value="3">Computador</option>
                                    <option value="4">Monitor</option>
                                    <option value="5">Webcam</option>
                                </select>
                            </div>
                            <div class="col col-md-2">
                                <label class="form-label mb-1">Estado</label>
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="editRadioState" id="editRadioState1" value="1" checked>
                                        <label class="form-check-label" for="editRadioState1">
                                            Ativo
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="editRadioState" id="editRadioState2" value="0">
                                        <label class="form-check-label" for="editRadioState2">
                                            Inativo
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-3 mb-2">
                            <div class="col-md-5">
                                <label class="form-label">Marca</label>
                                <input class="form-control" type="text" value="Mostrar Marca Aqui" id="editMarca" aria-label="Mostrar Marca Aqui">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label">Modelo</label>
                                <input class="form-control" type="text" value="Mostrar Modelo Aqui" id="editModelo" aria-label="Mostrar Modelo Aqui">
                            </div>
                            <div class="row row-cols-1 col-md-2">
                                <label class="form-label mb-1">Disponivel</label>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="disponivel" id="stateRadioEdit1" value="1">
                                    <label class="form-check-label" for="stateRadioEdit1">
                                        Sim
                                    </label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="disponivel" id="stateRadioEdit2" value="0" checked>
                                    <label class="form-check-label" for="stateRadioEdit2">
                                        Não
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-3 mb-2">
                            <div class="col-4">
                                    <label class="form-label">Localização</label>
                                    <input class="form-control" type="text" value="Mostrar Localização Aqui" id="editLocalizacao" aria-label="Mostrar Localização Aqui">
                            </div>
                            <div class="col-4">
                                <label class="form-label">Piso</label>
                                <input class="form-control" type="text" value="Mostrar Piso Aqui" id="editPiso" aria-label="Mostrar Piso Aqui">
                            </div>
                            <div class="col-4">
                                <label class="form-label">Sala</label>
                                <input class="form-control" type="text" value="Mostrar Sala Aqui" id="editSala" aria-label="Mostrar Sala Aqui">
                            </div>
                        </div>
                        <div class="row row-cols-2 mb-2">
                            <div class="col-6">
                                <label class="form-label">Serviço</label>
                                <input class="form-control" id="editServico" name="servico" type="text" value="" aria-label="">
                            </div>
                            <div class="col-3">
                                    <label class="form-label">Data de Aquisição</label>
                                    <input class="form-control" id="editAquisicaoDtm" type="datetime-local" >
                            </div>
                            <div class="col-3">
                                <label class="form-label">Ultimo Update</label>
                                <input class="form-control" id="editUpdatedDtm" type="datetime-local" disabled readonly>
                            </div>
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Nota</label>
                            <textarea class="form-control" id="editNotas" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table class="table table-striped" id="tbl">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal" > Adicionar </button>
        <thead>
            <tr>
                <th scope="col"><?=lang('InventarioEquipamentos.id')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.ativo')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.ni')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.sn')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.tipo')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.marca')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.modelo')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.localizacao')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.piso')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.sala')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.servico')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.disponivel')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.emprestimo_id')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.notas')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.aquisicaoDtm')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.updatedDtm')?></th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
                if(!empty($equipamentos??null)):
                    $i = 0;
                    foreach($equipamentos as $equipamentos):?>
                        <tr>
                            <th scope="row"><?= $equipamentos['id']?></th>
                            <?php if($equipamentos['ativo'] == 1):?>
                                <td><?=lang('InventarioEquipamentos.active')?></td>
                            <?php else: ?>
                                <td><?=lang('InventarioEquipamentos.inactive')?></td>
                            <?php endif; ?>
                            <td><?= $equipamentos['ni']?></td>
                            <td><?= $equipamentos['sn']?></td>
                            <td><?= $equipamentos['tipo']?></td>
                            <td><?= $equipamentos['marca']?></td>
                            <td><?= $equipamentos['modelo']?></td>
                            <td><?= $equipamentos['localizacao']?></td>
                            <td><?= $equipamentos['piso']?></td>
                            <td><?= $equipamentos['sala']?></td>
                            <td><?= $equipamentos['servico']?></td>
                            <?php if($equipamentos['disponivel'] == 1):?>
                                <td><?=lang('InventarioEquipamentos.yes')?></td>
                            <?php else: ?>
                                <td><?=lang('InventarioEquipamentos.no')?></td>
                            <?php endif; ?>
                            <td><?= $equipamentos['emprestimo_id']?></td>
                            <td><?= $equipamentos['notas']?></td>
                            <td><?= $equipamentos['aquisicaoDtm']?></td>
                            <td><?= $equipamentos['updatedDtm']?></td>
                            <td>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="col-md-10">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" 
                                                onclick="
                                                    getEditData(this, 
                                                        '<?php echo $equipamentos['id']?>', 
                                                        '<?php echo $equipamentos['ativo']?>', 
                                                        '<?php echo $equipamentos['ni']?>', 
                                                        '<?php echo $equipamentos['sn']?>', 
                                                        '<?php echo $equipamentos['tipo']?>', 
                                                        '<?php echo $equipamentos['marca']?>', 
                                                        '<?php echo $equipamentos['modelo']?>', 
                                                        '<?php echo $equipamentos['localizacao']?>', 
                                                        '<?php echo $equipamentos['piso']?>', 
                                                        '<?php echo $equipamentos['sala']?>', 
                                                        '<?php echo $equipamentos['servico']?>', 
                                                        '<?php echo $equipamentos['disponivel']?>', 
                                                        '<?php echo $equipamentos['emprestimo_id']?>', 
                                                        '<?php echo $equipamentos['notas']?>', 
                                                        '<?php echo $equipamentos['aquisicaoDtm']?>', 
                                                        '<?php echo $equipamentos['updatedDtm']?>', 
                                                    );">
                                            <i class="bi bi-pencil-fill"></i></button>
                                        </div> 
                                    </div>
                                    <div class="col-md-1">
                                        <div class="col-md-10">
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash-fill"></i></button>
                                        </div> 
                                    </div>
                                </div>
                            </td>
                        </tr>
            <?php   $i++;
                    endforeach;
                else:?>
                    <tr>
                        <td colspan='4'><?=lang('InventarioEquipamentos.no-data')?></td>
                    </tr>
        <?php   endif;?>
        </tbody>
    </table>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function(){
        let tbl = new DataTable('#tbl', {
            scrollX: true,
            layout: {
                bottomEnd: {
                    paging: {
                        boundaryNumbers: true
                    }
                }
            }
        });
    });

    function convertDateFormat(inputDate) {
        // Split the date and time parts
        var parts = inputDate.split(" ");
        var datePart = parts[0]; // "0000-00-00"
        var timePart = parts[1]; // "00:00:00"

        // Split the date part into year, month, and day
        var dateParts = datePart.split("-");
        var year = dateParts[0];
        var month = dateParts[1];
        var day = dateParts[2];

        // Construct the new date string in the required format
        var newDateString = year + "-" + month + "-" + day + "T" + timePart;

        return newDateString;
    }

    function getEditData(e, id, ativo, ni, sn, tipo, marca, modelo, localizacao, piso, sala, servico, disponivel, emprestimo_id, notas, aquisicaoDtm, updatedDtm) {
        console.log(id, ativo, ni, sn, tipo, marca, modelo, localizacao, piso, sala, servico, disponivel, emprestimo_id, notas, aquisicaoDtm, updatedDtm);
        document.getElementById("editID").value = id;
        
        if(ativo == '1') {
            document.getElementById("editRadioState1").checked = true;
        } else {
            document.getElementById("editRadioState2").checked = true;
        }

        if(ni !== '') {
            document.getElementById("editNI").value = ni;
        } else {
            document.getElementById("editNI").value = "Sem Valor";
        }

        if(sn !== '') {
            document.getElementById("editSN").value = sn;
        } else {
            document.getElementById("editSN").value = "Sem Valor";
        }

        if(tipo !== '') {
            if(tipo=='Portátil'){
                document.getElementById("editTipo").value = '1';
            } else if(tipo=='Auscultadores'){
                document.getElementById("editTipo").value = '2';
            } else if(tipo=='Computador'){
                document.getElementById("editTipo").value = '3';
            } else if(tipo=='Monitor'){
                document.getElementById("editTipo").value = '4';
            } else if(tipo=='Webcam'){
                document.getElementById("editTipo").value = '5';
            }
        } else {
            document.getElementById("editTipo").value = '';
        }
        
        if(marca !== '') {
            document.getElementById("editMarca").value = marca;
        } else {
            document.getElementById("editMarca").value = "Sem Valor";
        }
        
        if(modelo !== '') {
            document.getElementById("editModelo").value = modelo;
        } else {
            document.getElementById("editModelo").value = "Sem Valor";
        }

        if(localizacao !== '') {
            document.getElementById("editLocalizacao").value = localizacao;
        } else {
            document.getElementById("editLocalizacao").value = "Sem Valor";
        }

        if(piso !== '') {
            document.getElementById("editPiso").value = piso;
        } else {
            document.getElementById("editPiso").value = "Sem Valor";
        }

        if(sala !== '') {
            document.getElementById("editSala").value = sala;
        } else {
            document.getElementById("editSala").value = "Sem Valor";
        }

        if(servico !== '') {
            document.getElementById("editServico").value = servico;
        } else {
            document.getElementById("editServico").value = "Sem Valor";
        }

        if(disponivel == '1') {
            document.getElementById("stateRadioEdit1").checked = true;
        } else {
            document.getElementById("stateRadioEdit2").checked = true;
        }

        if(notas !== '') {
            document.getElementById("editNotas").value = notas;
        } else {
            document.getElementById("editNotas").value = "Sem Valor";
        }

        // // document.getElementById("editDisponivel").value = disponivel;
        // // document.getElementById("editEmprestimoID").value = "My value";
        document.getElementById("editAquisicaoDtm").value = convertDateFormat(aquisicaoDtm);
        document.getElementById("editUpdatedDtm").value = convertDateFormat(updatedDtm);
    }
</script>

<?= view('Modules\InventarioEquipamentos\Views\templates\footerTemplate') ?>
