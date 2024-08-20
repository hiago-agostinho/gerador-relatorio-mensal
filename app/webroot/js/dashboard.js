$(document).ready(function() {
    $('#addRow').on('click', function() {
        var arquivos = $('#arquivos').val();
        var tabela = $('#tabelaRelatorios tbody');
        var novaLinha = $('<tr><td>' + arquivos + '</td><td><button class="btn btn-danger btn-sm btn-remove"><i class="bi bi-dash" style="font-size: 24px;"></i></button></td></tr>');
    
        tabela.append(novaLinha);

        $('#arquivos').val('');
    });

    $(document).on('click', '.btn-remove', function() {
        $(this).closest('tr').remove();
    });
});