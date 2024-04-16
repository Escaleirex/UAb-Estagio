<?= view('Modules\InventarioEquipamentos\Views\templates\headerTemplate', [
    'title'=>lang('InventarioEquipamentos.list'),
]) ?>

<section>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"><?=lang('InventarioEquipamentos.id')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.name')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.description')?></th>
                <th scope="col"><?=lang('InventarioEquipamentos.registration-date')?></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
                if(!empty($equipamentos??null)):
                    foreach($equipamentos as $equipamentos):?>
                        <tr>
                            <th scope="row"><?= $equipamentos['id']?></th>
                            <td><?= $equipamentos['name']?></td>
                            <td><?= $equipamentos['description']?></td>
                            <td><?= $equipamentos['date']?></td>
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

<?= view('Modules\InventarioEquipamentos\Views\templates\footerTemplate') ?>
