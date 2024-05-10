<?= view('Modules\InventarioEquipamentos\Views\templates\headerTemplate', [
    'title'=>lang('InventarioEquipamentos.list'),
]); 

helper('form');
?>

<section>
    <!-- Modal para Remover -->
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel"><?=lang('InventarioEquipamentos.remove')?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="deleteForm" role="form" method="post" action="<?= url_to('equipamentos-deleteform'); ?>">
                    <div class="modal-body">
                        <input type="hidden" id="deleteModalID" name="id">
                        <?=lang('InventarioEquipamentos.areyousureremove')?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?=lang('InventarioEquipamentos.cancel')?></button>
                        <button type="submit" class="btn btn-primary"><?=lang('InventarioEquipamentos.confirm')?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal para Adicionar -->
    <div class="modal modal-xl" tabindex="-1" id="addModal">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title"><?=lang('InventarioEquipamentos.register-device')?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php if(isset($validation)): ?>
                    <?php echo $validation->listErrors(); ?>
                <?php endif; ?>
                <form id="addForm" role="form" method="post" action="<?= url_to('equipamentos-submitform'); ?>">
                <div class="p-3 mb-3">
                        <div class="row row-cols-4 mb-2">
                            <div class="col-md-3">
                                <label class="form-label"><?=lang('InventarioEquipamentos.ni')?></label>
                                <input class="form-control" name="ni" type="text" value="" aria-label="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label"><?=lang('InventarioEquipamentos.sn')?></label>
                                <input class="form-control" name="sn" type="text" value="" aria-label="">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><?=lang('InventarioEquipamentos.tipo')?></label>
                                <select class="form-select" name="tipo" aria-label="">
                                    <option value="Portátil" selected><?=lang('InventarioEquipamentos.portatil')?></option>
                                    <option value="Auscultadores"><?=lang('InventarioEquipamentos.auscultadores')?></option>
                                    <option value="Computador"><?=lang('InventarioEquipamentos.computador')?></option>
                                    <option value="Monitor"><?=lang('InventarioEquipamentos.monitor')?></option>
                                    <option value="Webcam"><?=lang('InventarioEquipamentos.webcam')?></option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <label class="form-label mb-1"><?=lang('InventarioEquipamentos.ativo')?></label>
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="ativo" id="stateRadioAdd" value="1">
                                        <label class="form-check-label" for="stateRadioAdd">
                                            <?=lang('InventarioEquipamentos.active')?>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="ativo" id="stateRadioAdd2" value="0" checked>
                                        <label class="form-check-label" for="stateRadioAdd2">
                                            <?=lang('InventarioEquipamentos.inactive')?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-3 mb-2">
                            <div class="col-md-5">
                                <label class="form-label"><?=lang('InventarioEquipamentos.marca')?></label>
                                <input class="form-control" name="marca" type="text" value="" aria-label="">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label"><?=lang('InventarioEquipamentos.modelo')?></label>
                                <input class="form-control" name="modelo" type="text" value="" aria-label="">
                            </div>
                            <div class="row row-cols-1 col-md-2">
                                <label class="form-label mb-1"><?=lang('InventarioEquipamentos.disponivel')?></label>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="disponivel" id="stateRadioAdd" value="1">
                                    <label class="form-check-label" for="stateRadioAdd">
                                        <?=lang('InventarioEquipamentos.yes')?>
                                    </label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="disponivel" id="stateRadioAdd2" value="0" checked>
                                    <label class="form-check-label" for="stateRadioAdd2">
                                        <?=lang('InventarioEquipamentos.no')?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-3 mb-2">
                            <div class="col-4">
                                    <label class="form-label"><?=lang('InventarioEquipamentos.localizacao')?></label>
                                    <input class="form-control" name="localizacao" type="text" value="" aria-label="">
                            </div>
                            <div class="col-4">
                                <label class="form-label"><?=lang('InventarioEquipamentos.piso')?></label>
                                <input class="form-control" name="piso" type="text" value="" aria-label="">
                            </div>
                            <div class="col-4">
                                <label class="form-label"><?=lang('InventarioEquipamentos.sala')?></label>
                                <input class="form-control" name="sala" type="text" value="" aria-label="">
                            </div>
                        </div>
                        <div class="row row-cols-1 mb-2">
                            <div class="col-6">
                                <label class="form-label"><?=lang('InventarioEquipamentos.servico')?></label>
                                <input class="form-control" name="servico" type="text" value="" aria-label="">
                            </div>
                            <div class="col-6">
                                <label class="form-label"><?=lang('InventarioEquipamentos.aquisicaoDtm')?></label>
                                <input class="form-control" name="aquisicaoDtm" type="datetime-local" value="">
                            </div>
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label"><?=lang('InventarioEquipamentos.notas')?></label>
                            <textarea class="form-control" name="notas" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?=lang('InventarioEquipamentos.cancel')?></button>
                        <button type="submit" class="btn btn-primary"><?=lang('InventarioEquipamentos.save')?></button>
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
                    <h5 class="modal-title"><?=lang('InventarioEquipamentos.edititem')?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?=lang('InventarioEquipamentos.close')?>"></button>
                </div>
                <?php if(isset($validation2)): ?>
                    <?php echo $validation2->listErrors(); ?>
                <?php endif; ?>
                <form id="editForm" role="form" method="post" action="<?= url_to('equipamentos-updateitemform'); ?>">
                <div class="p-3 mb-3">
                        <div class="row row-cols-4 mb-2">
                            <input class="form-control" id="editID" type="hidden" value="" aria-label="" name="id">
                            <div class="col-md-3">
                                <label class="form-label"><?=lang('InventarioEquipamentos.ni')?></label>
                                <input class="form-control" type="text" id="editNI" value="" name="ni" aria-label="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label"><?=lang('InventarioEquipamentos.sn')?></label>
                                <input class="form-control" type="text" id="editSN" value="" name="sn" aria-label="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label"><?=lang('InventarioEquipamentos.tipo')?></label>
                                <select class="form-select" id="editTipo" aria-label="" name="tipo">
                                    <option value="Portátil" selected><?=lang('InventarioEquipamentos.portatil')?></option>
                                    <option value="Auscultadores"><?=lang('InventarioEquipamentos.auscultadores')?></option>
                                    <option value="Computador"><?=lang('InventarioEquipamentos.computador')?></option>
                                    <option value="Monitor"><?=lang('InventarioEquipamentos.monitor')?></option>
                                    <option value="Webcam"><?=lang('InventarioEquipamentos.webcam')?></option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label mb-1"><?=lang('InventarioEquipamentos.ativo')?></label>
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="editRadioState" id="editRadioState1" name="ativo" value="1" checked>
                                        <label class="form-check-label" for="editRadioState1">
                                            <?=lang('InventarioEquipamentos.active')?>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="editRadioState" id="editRadioState2" name="ativo" value="0">
                                        <label class="form-check-label" for="editRadioState2">
                                            <?=lang('InventarioEquipamentos.inactive')?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-3 mb-2">
                            <div class="col-md-5">
                                <label class="form-label"><?=lang('InventarioEquipamentos.marca')?></label>
                                <input class="form-control" type="text" value="" id="editMarca" name="marca" aria-label="">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label"><?=lang('InventarioEquipamentos.modelo')?></label>
                                <input class="form-control" type="text" value="" id="editModelo" name="modelo" aria-label="">
                            </div>
                            <div class="row row-cols-1 col-md-2">
                                <label class="form-label mb-1"><?=lang('InventarioEquipamentos.disponivel')?></label>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="disponivel" id="stateRadioEdit1" name="disponivel" value="1">
                                    <label class="form-check-label" for="stateRadioEdit1">
                                        <?=lang('InventarioEquipamentos.yes')?>
                                    </label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="disponivel" id="stateRadioEdit2" name="disponivel" value="0" checked>
                                    <label class="form-check-label" for="stateRadioEdit2">
                                        <?=lang('InventarioEquipamentos.no')?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-3 mb-2">
                            <div class="col-4">
                                    <label class="form-label"><?=lang('InventarioEquipamentos.localizacao')?></label>
                                    <input class="form-control" type="text" value="" id="editLocalizacao" name="localizacao" aria-label="">
                            </div>
                            <div class="col-4">
                                <label class="form-label"><?=lang('InventarioEquipamentos.piso')?></label>
                                <input class="form-control" type="text" value="" id="editPiso" name="piso" aria-label="">
                            </div>
                            <div class="col-4">
                                <label class="form-label"><?=lang('InventarioEquipamentos.sala')?></label>
                                <input class="form-control" type="text" value="" id="editSala" name="sala" aria-label="">
                            </div>
                        </div>
                        <div class="row row-cols-2 mb-2">
                            <div class="col-6">
                                <label class="form-label"><?=lang('InventarioEquipamentos.servico')?></label>
                                <input class="form-control" id="editServico" name="servico" name="servico" type="text" value="" aria-label="">
                            </div>
                            <div class="col-3">
                                <label class="form-label"><?=lang('InventarioEquipamentos.aquisicaoDtm')?></label>
                                <input class="form-control" id="editAquisicaoDtm" name="aquisicaoDtm" type="datetime-local" >
                            </div>
                            <div class="col-3">
                                <label class="form-label"><?=lang('InventarioEquipamentos.updatedDtm')?></label>
                                <input class="form-control" id="editUpdatedDtm" name="updatedDtm" type="datetime-local" disabled readonly>
                            </div>
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label"><?=lang('InventarioEquipamentos.notas')?></label>
                            <textarea class="form-control" id="editNotas" name="notas" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?=lang('InventarioEquipamentos.cancel')?></button>
                        <button type="submit" class="btn btn-primary"><?=lang('InventarioEquipamentos.save')?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table class="table table-striped" id="tbl">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal" > <?=lang('InventarioEquipamentos.add')?> </button>
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
                <th scope="col"><?=lang('InventarioEquipamentos.actions')?></th>
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
                                            <button type="button" class="btn btn-danger btn-sm" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" 
                                                onclick="
                                                    setDeleteID(this, '<?php echo $equipamentos['id']?>');">
                                                <i class="bi bi-trash-fill"></i></button>
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

    function setDeleteID(e, id) {
        document.getElementById("deleteModalID").value = id;
    }

    const getEditData = async (e, id) => {
        document.getElementById("editID").value = id;
        const itemRequest = await getItemById(id);
        const item = itemRequest;
        console.log(item);

        if(item.ativo == '1' || null) {
            document.getElementById("editRadioState1").checked = true;
        } else {
            document.getElementById("editRadioState2").checked = true;
        }

        if(item.ni !== '' || null) {
            document.getElementById("editNI").value = item.ni;
        } else {
            document.getElementById("editNI").value = "";
        }

        if(item.sn !== '' || null) {
            document.getElementById("editSN").value = item.sn;
        } else {
            document.getElementById("editSN").value = "";
        }

        if(item.tipo !== '' || null) {
            document.getElementById("editTipo").value = item.tipo;
        } else {
            document.getElementById("editTipo").value = '';
        }
        
        if(item.marca !== '' || null) {
            document.getElementById("editMarca").value = item.marca;
        } else {
            document.getElementById("editMarca").value = "";
        }
        
        if(item.modelo !== '' || null) {
            document.getElementById("editModelo").value = item.modelo;
        } else {
            document.getElementById("editModelo").value = "";
        }

        if(item.localizacao !== '' || null) {
            document.getElementById("editLocalizacao").value = item.localizacao;
        } else {
            document.getElementById("editLocalizacao").value = "";
        }

        if(item.piso !== '' || null) {
            document.getElementById("editPiso").value = item.piso;
        } else {
            document.getElementById("editPiso").value = "";
        }

        if(item.sala !== '' || null) {
            document.getElementById("editSala").value = item.sala;
        } else {
            document.getElementById("editSala").value = "";
        }

        if(item.servico !== '' || null) {
            document.getElementById("editServico").value = item.servico;
        } else {
            document.getElementById("editServico").value = "";
        }

        if(item.disponivel == '1') {
            document.getElementById("stateRadioEdit1").checked = true;
        } else {
            document.getElementById("stateRadioEdit2").checked = true;
        }

        if(item.notas !== '' || null) {
            document.getElementById("editNotas").value = item.notas;
        } else {
            document.getElementById("editNotas").value = "";
        }

        // // document.getElementById("editEmprestimoID").value = "My value";
        document.getElementById("editAquisicaoDtm").value = convertDateFormat(item.aquisicaoDtm);

        const currentdate = new Date().toISOString();
        document.getElementById("editUpdatedDtm").value = currentdate;
    }
</script>

<?= view('Modules\InventarioEquipamentos\Views\templates\footerTemplate') ?>
