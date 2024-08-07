<?= $this->Form->create(NULL, ['method' => 'POST']); ?>
    <style>
        .action-button {
            width: 100px;
        }
    </style>
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">
                Rascunho Solicitação PGM
            </h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-5">
                    <?= $this->Form->input('nome_razao_social', ['label' => 'Responsável', 'value' => '', 'readonly' => true]); ?>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-paper-plane"></i> Enviar para PGM
            </button>
        </div>
    </div>
<?= $this->Form->end(); ?>