<?= view('Modules\InventarioEquipamentos\Views\templates\headerTemplate', [
    'title'=>lang('InventarioEquipamentos.register'),
]);

helper('form');
?>

<div class="container mb-5">
    <div class=" text-center mt-5 mb-5">
        <h1><?=lang('InventarioEquipamentos.register-device')?></h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto" style="margin-bottom:4.75rem">
            <div class="card mt-2 mx-auto p-3 bg-light">
                <div class="card-body bg-light">
                    <div class = "container">
                        <?php if(isset($validation)): ?>
                            <?php echo $validation->listErrors(); ?>
                        <?php endif; ?>
                        <form id="contact-form" role="form" method="post" action="submitForm">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name"><?=lang('InventarioEquipamentos.name')?> *</label>
                                            <input id="name" type="text" name="name" class="form-control" placeholder="<?=lang('InventarioEquipamentos.placeholder-name')?>" required="required" data-error="<?=lang('InventarioEquipamentos.required-name')?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date"><?=lang('InventarioEquipamentos.registration-date')?> *</label>
                                            <input id="date" type="datetime-local" name="date" class="form-control" required="required" data-error="<?=lang('InventarioEquipamentos.required-date')?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description"><?=lang('InventarioEquipamentos.description')?></label>
                                            <textarea id="description" name="description" class="form-control" placeholder="<?=lang('InventarioEquipamentos.placeholder-description')?>" rows="4"></textarea
                                                >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block mt-3
                                            " value="<?=lang('InventarioEquipamentos.submit')?>" >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= view('Modules\InventarioEquipamentos\Views\templates\footerTemplate') ?>