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
                                <input class="form-control" id="editID" type="text" value="Mostrar ID Aqui" aria-label="Mostrar ID Aqui" name="id" disabled readonly>
                            </div>
                            <div class="col-auto">
                                <label class="form-label">NI</label>
                                <input class="form-control" type="text" id="editNI" value="NI Aqui" name="ni" aria-label="NI Aqui">
                            </div>
                            <div class="col-auto">
                                <label class="form-label">Número de Série</label>
                                <input class="form-control" type="text" id="editSN" value="Número de Série Aqui" name="sn" aria-label="Número de Série Aqui">
                            </div>
                            <div class="col-md-3 me-2">
                                <label class="form-label">Tipo</label>
                                <select class="form-select" id="editTipo" aria-label="Tipo" name="tipo">
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
                                        <input class="form-check-input" type="radio" name="editRadioState" id="editRadioState1" name="ativo" value="1" checked>
                                        <label class="form-check-label" for="editRadioState1">
                                            Ativo
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="editRadioState" id="editRadioState2" name="ativo" value="0">
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
                                <input class="form-control" type="text" value="Mostrar Marca Aqui" id="editMarca" name="marca" aria-label="Mostrar Marca Aqui">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label">Modelo</label>
                                <input class="form-control" type="text" value="Mostrar Modelo Aqui" id="editModelo" name="modelo" aria-label="Mostrar Modelo Aqui">
                            </div>
                            <div class="row row-cols-1 col-md-2">
                                <label class="form-label mb-1">Disponivel</label>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="disponivel" id="stateRadioEdit1" name="disponivel" value="1">
                                    <label class="form-check-label" for="stateRadioEdit1">
                                        Sim
                                    </label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="disponivel" id="stateRadioEdit2" name="disponivel" value="0" checked>
                                    <label class="form-check-label" for="stateRadioEdit2">
                                        Não
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-3 mb-2">
                            <div class="col-4">
                                    <label class="form-label">Localização</label>
                                    <input class="form-control" type="text" value="Mostrar Localização Aqui" id="editLocalizacao" name="localizacao" aria-label="Mostrar Localização Aqui">
                            </div>
                            <div class="col-4">
                                <label class="form-label">Piso</label>
                                <input class="form-control" type="text" value="Mostrar Piso Aqui" id="editPiso" name="piso" aria-label="Mostrar Piso Aqui">
                            </div>
                            <div class="col-4">
                                <label class="form-label">Sala</label>
                                <input class="form-control" type="text" value="Mostrar Sala Aqui" id="editSala" name="sala" aria-label="Mostrar Sala Aqui">
                            </div>
                        </div>
                        <div class="row row-cols-2 mb-2">
                            <div class="col-6">
                                <label class="form-label">Serviço</label>
                                <input class="form-control" id="editServico" name="servico" name="servico" type="text" value="" aria-label="">
                            </div>
                            <div class="col-3">
                                <label class="form-label">Data de Aquisição</label>
                                <input class="form-control" id="editAquisicaoDtm" name="aquisicaoDtm" type="datetime-local" >
                            </div>
                            <div class="col-3">
                                <label class="form-label">Ultimo Update</label>
                                <input class="form-control" id="editUpdatedDtm" name="updatedDtm" type="datetime-local" disabled readonly>
                            </div>
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Nota</label>
                            <textarea class="form-control" id="editNotas" name="notas" rows="3"></textarea>
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
                                                    getEditData(this, '<?php echo $equipamentos['id']?>');">
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
        var parts = inputDate.split(" ");
        var datePart = parts[0]; // "0000-00-00"
        var timePart = parts[1]; // "00:00:00"
        var dateParts = datePart.split("-");
        var year = dateParts[0];
        var month = dateParts[1];
        var day = dateParts[2];
        var newDateString = year + "-" + month + "-" + day + "T" + timePart;

        return newDateString;
    }

    const getItemById = async (id) => {
        try {
            const response = await fetch(`/InventarioEquipamentos/getItemById/${id}`);
            if (!response.ok) {
                throw new Error('Failed to fetch item');
            }
            const data = await response.json();
            if (!data) {
                throw new Error('Empty response or invalid JSON');
            }
            console.log(response, data);
            return data;
        } catch (error) {
            console.error(error);
        }
    };



    const getEditData = async (e, id) => {
        document.getElementById("editID").value = id;
        const itemRequest = await getItemById(id);
        const item = itemRequest[0];
        console.log(item);

        if(item.ativo == '1' || null) {
            document.getElementById("editRadioState1").checked = true;
        } else {
            document.getElementById("editRadioState2").checked = true;
        }

        if(item.ni !== '' || null) {
            document.getElementById("editNI").value = item.ni;
        } else {
            document.getElementById("editNI").value = "Sem Valor";
        }

        if(item.sn !== '' || null) {
            document.getElementById("editSN").value = item.sn;
        } else {
            document.getElementById("editSN").value = "Sem Valor";
        }

        if(item.tipo !== '' || null) {
            if(item.tipo=='Portátil'){
                document.getElementById("editTipo").value = '1';
            } else if(item.tipo=='Auscultadores'){
                document.getElementById("editTipo").value = '2';
            } else if(item.tipo=='Computador'){
                document.getElementById("editTipo").value = '3';
            } else if(item.tipo=='Monitor'){
                document.getElementById("editTipo").value = '4';
            } else if(item.tipo=='Webcam'){
                document.getElementById("editTipo").value = '5';
            }
        } else {
            document.getElementById("editTipo").value = '';
        }
        
        if(item.marca !== '' || null) {
            document.getElementById("editMarca").value = item.marca;
        } else {
            document.getElementById("editMarca").value = "Sem Valor";
        }
        
        if(item.modelo !== '' || null) {
            document.getElementById("editModelo").value = item.modelo;
        } else {
            document.getElementById("editModelo").value = "Sem Valor";
        }

        if(item.localizacao !== '' || null) {
            document.getElementById("editLocalizacao").value = item.localizacao;
        } else {
            document.getElementById("editLocalizacao").value = "Sem Valor";
        }

        if(item.piso !== '' || null) {
            document.getElementById("editPiso").value = item.piso;
        } else {
            document.getElementById("editPiso").value = "Sem Valor";
        }

        if(item.sala !== '' || null) {
            document.getElementById("editSala").value = item.sala;
        } else {
            document.getElementById("editSala").value = "Sem Valor";
        }

        if(item.servico !== '' || null) {
            document.getElementById("editServico").value = item.servico;
        } else {
            document.getElementById("editServico").value = "Sem Valor";
        }

        if(item.disponivel == '1') {
            document.getElementById("stateRadioEdit1").checked = true;
        } else {
            document.getElementById("stateRadioEdit2").checked = true;
        }

        if(item.notas !== '' || null) {
            document.getElementById("editNotas").value = item.notas;
        } else {
            document.getElementById("editNotas").value = "Sem Valor";
        }

        // // document.getElementById("editEmprestimoID").value = "My value";
        document.getElementById("editAquisicaoDtm").value = convertDateFormat(item.aquisicaoDtm);

        if(item.updatedDtm !== '' || null) {
            document.getElementById("editUpdatedDtm").value = convertDateFormat(item.updatedDtm);
        }
        else {
            document.getElementById("editUpdatedDtm").placeholder = 'No date available'
        }
    }
</script>

<?= view('Modules\InventarioEquipamentos\Views\templates\footerTemplate') ?>
