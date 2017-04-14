
function initTable(idTable, url, langFilePath, editUrl, deleteUrl, actionUrl, actionTitle) {
    var buttons = '\
    <div class="btn-toolbar">\
        <div class="btn-group-vertical btn-group-xs" role="group">\
            <div class="row">\
                <div class="btn-group btn-group-xs col-md-12" role="group">\
                    <a class="btn btn-default editbtn col-md-6"\
                        title="Editer"\
                        data-href="' + editUrl + '">\
                        <span class="glyphicon glyphicon-edit"></span>\
                    </a>\
                    <a class="btn btn-danger deletebtn col-md-6"\
                        data-confirm="Etes-vous certain de vouloir supprimer ?"\
                        data-href="' + deleteUrl + '"\
                        title="Supprimer">\
                        <span class="glyphicon glyphicon-remove delete deleteBtn"></span>\
                    </a>\
                </div>\
            </div>\
            <div class="row">\
                <div class="col-md-12">\
                    <a class="btn btn-xs btn-success actionbtn col-md-12" \
                        data-href="' + actionUrl + '"\
                        title="' + actionTitle + '">\
                        <span class="glyphicon glyphicon-check actionBtn"></span>\
                    </a>\
                </div>\
            </div>\
        </div>\
    </div>';
    var table = $('#' + idTable).DataTable(
        {
            "ajax": url,
            "language": {
                "url": langFilePath
            },
            "rowId": 'id',
            "columns": [
                {"data": "device"},
                {"data": "user"},
                {"data": "startDate"},
                {"data": "endDate"},
                {
                    "className": 'actions',
                    "orderable": false,
                    "searchable": false,
                    "data": null,
                    "defaultContent": buttons
                }
            ],
            "autoWidth": false
        });

    // Edition de l'entité
    $('#' + idTable).on('click', 'a.editbtn', function (event) {
        var tr = $(this).closest('tr');
        var row = table.row(tr);
        var entityId = row.id();
        var button = $(event.currentTarget);
        var editUrl = button.data('href').replace(':ID', entityId);
        $(location).attr("href", editUrl);
    });
    // Suppression de l'entité
    $('#' + idTable).on('click', 'a.deletebtn', function (event) {
        var button = $(event.currentTarget);
        var recipient = button.data('confirm');
        $('#dataConfirmModal').find('.modal-body').html(recipient);
        var tr = $(this).closest('tr');
        var row = table.row(tr);
        var entityId = row.id();
        $("#dataConfirmModal").modal();
        var delUrl = button.data('href');
        $('#dataConfirmOK').on('click', function () {
            $.ajax(
                {
                    url: delUrl,
                    type: 'DELETE',
                    async: false,
                    data: {id: entityId},
                    cache: false,
                    complete: function (response, status) {
                        if (status != 'success') {
                            alert('La suppression a échouée !')
                        } else {
                            table.ajax.reload();
                        }
                        $("#dataConfirmModal").modal('hide');
                    }
                }
            )
        })
    });
    // Emprunt/restitution de l'entité
    $('#' + idTable).on('click', 'a.actionbtn', function (event) {
        var button = $(event.currentTarget);
        var tr = $(this).closest('tr');
        var row = table.row(tr);
        var entityId = row.id();
        var actionUrl = button.data('href');
        $.ajax(
            {
                url: actionUrl,
                type: 'POST',
                async: false,
                data: {id: entityId},
                cache: false,
                complete: function (response, status) {
                    if (status != 'success') {
                        alert('L\'action a échouée !')
                    } else {
                        // reload les deux tables
                        $.fn.dataTable.tables({visible: true, api: true}).ajax.reload();
                    }
                }
            });
    });
}

