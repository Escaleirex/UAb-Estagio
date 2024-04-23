<?= view('Modules\InventarioEquipamentos\Views\templates\headerTemplate', [
    'title'=>lang('InventarioEquipamentos.list'),
]) ?>

<section>
    <!-- Modal para Adicionar -->
    <div class="modal modal-xl" tabindex="-1" id="addModal">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar Equipamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                <div class="p-3 mb-3">
                        <div class="row row-cols-4 mb-2">
                            <div class="col-auto">
                                <label class="form-label mb-1">Estado</label>
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Ativo
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Inativo
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">NI</label>
                                <input class="form-control" type="text" value="" aria-label="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Número de Série</label>
                                <input class="form-control" type="text" value="" aria-label="">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Tipo</label>
                                <select class="form-select" aria-label="">
                                    <option selected>Portátil</option>
                                    <option value="1">Auscultadores	</option>
                                    <option value="2">Computador</option>
                                    <option value="3">Monitor</option>
                                    <option value="4">Webcam</option>
                                </select>
                            </div>
                        </div>
                        <div class="row row-cols-2 mb-2">
                            <div class="col-md-6">
                                <label class="form-label">Marca</label>
                                <input class="form-control" type="text" value="" aria-label="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Modelo</label>
                                <input class="form-control" type="text" value="" aria-label="">
                            </div>
                        </div>
                        <div class="row row-cols-3 mb-2">
                            <div class="col-4">
                                    <label class="form-label">Localização</label>
                                    <input class="form-control" type="text" value="" aria-label="">
                            </div>
                            <div class="col-4">
                                <label class="form-label">Piso</label>
                                <input class="form-control" type="text" value="" aria-label="">
                            </div>
                            <div class="col-4">
                                <label class="form-label">Sala</label>
                                <input class="form-control" type="text" value="" aria-label="">
                            </div>
                        </div>
                        <div class="row row-cols-1 mb-2">
                            <div class="col-12">
                                    <label class="form-label">Data de Aquisição</label>
                                    <input class="form-control" type="datetime-local" value="">
                            </div>
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Nota</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                <form>
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
                <form>
                <div class="p-3 mb-3">
                        <div class="row row-cols-5 mb-2">
                            <div class="col-auto">
                                <label class="form-label">ID</label>
                                <input class="form-control" type="text" value="Mostrar ID Aqui" aria-label="Mostrar ID Aqui" disabled readonly>
                            </div>
                            <div class="col-auto">
                                <label class="form-label mb-1">Estado</label>
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Ativo
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Inativo
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <label class="form-label">NI</label>
                                <input class="form-control" type="text" value="NI Aqui" aria-label="NI Aqui">
                            </div>
                            <div class="col-auto">
                                <label class="form-label">Número de Série</label>
                                <input class="form-control" type="text" value="Número de Série Aqui" aria-label="Número de Série Aqui">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Tipo</label>
                                <select class="form-select" aria-label="Tipo">
                                    <option selected>Portátil</option>
                                    <option value="1">Auscultadores	</option>
                                    <option value="2">Computador</option>
                                    <option value="3">Monitor</option>
                                    <option value="4">Webcam</option>
                                </select>
                            </div>
                        </div>
                        <div class="row row-cols-2 mb-2">
                            <div class="col-md-6">
                                <label class="form-label">Marca</label>
                                <input class="form-control" type="text" value="Mostrar Marca Aqui" aria-label="Mostrar Marca Aqui">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Modelo</label>
                                <input class="form-control" type="text" value="Mostrar Modelo Aqui" aria-label="Mostrar Modelo Aqui">
                            </div>
                        </div>
                        <div class="row row-cols-3 mb-2">
                            <div class="col-4">
                                    <label class="form-label">Localização</label>
                                    <input class="form-control" type="text" value="Mostrar Localização Aqui" aria-label="Mostrar Localização Aqui">
                            </div>
                            <div class="col-4">
                                <label class="form-label">Piso</label>
                                <input class="form-control" type="text" value="Mostrar Piso Aqui" aria-label="Mostrar Piso Aqui">
                            </div>
                            <div class="col-4">
                                <label class="form-label">Sala</label>
                                <input class="form-control" type="text" value="Mostrar Sala Aqui" aria-label="Mostrar Sala Aqui">
                            </div>
                        </div>
                        <div class="row row-cols-2 mb-2">
                            <div class="col-6">
                                    <label class="form-label">Data de Aquisição</label>
                                    <input class="form-control" type="datetime-local" value="2018-07-22T00:00" aria-label="2018-07-22T00:00">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Ultimo Update</label>
                                <input class="form-control" type="datetime-local" value="2018-07-22T00:00" aria-label="2018-07-22T00:00">
                            </div>
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Nota</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                <form>
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
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-fill"></i></button>
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
            <?php   endforeach;
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
</script>

<?= view('Modules\InventarioEquipamentos\Views\templates\footerTemplate') ?>
