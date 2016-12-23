/**
 * Initialise le tabelau des matériel
 * @param idTable Identifaitn de la table
 * @param url URL permettatn de réupérer la liste du matériel
 * @param langFilePath le chemin vers le fichier lang
 * @param editUrl L'URL pour l'édition d'un matériel
 * @param deleteUrl L'URL pour la suppression d'un matériel
 * @param activationUrl L'URL pour activer/désactiver un matériel
 */
function initTable(idTable, url, langFilePath, editUrl, deleteUrl, activationUrl, actionTitle, imageDir) {
    // TODO MAJ boutons
    // TODO refacto : code dupliqué avec reseration/public/js/tableau.js

    var buttons = '\
    <span class="btn-group btn-group-xs" role="group">\
        <a class="btn btn-default editbtn"\
            title="Editer"\
            data-href="' + editUrl + '">\
            <span class="glyphicon glyphicon-edit"></span>\
        </a>\
        <a class="btn btn-danger deletebtn"\
            data-confirm="Etes-vous certain de vouloir supprimer ?"\
            data-href="' + deleteUrl + '"\
            title="Supprimer">\
            <span class="glyphicon glyphicon-remove delete deleteBtn"></span>\
        </a>\
        <a class="btn btn-success actionbtn" \
            data-href="' + activationUrl + '"\
            title="' + actionTitle + '">\
            <span class="glyphicon glyphicon-check actionBtn"></span>\
        </a>\
        </span>';

    var table = $('#' + idTable).DataTable(
        {
            "ajax": url,
            "language": {
                "url": langFilePath
            },
            "rowId": 'id',
            "columns": [
                {
                    "data": "image",
                    'render': function (data, type, row, meta) {
                        if (data) {
                            return '<img class="thumbnail" src="' + data + '" height="75px"/>';
                        }
                        return '';
                    }
                },
                {"data": "reference"},
                {"data": "designation"},
                {"data": "marque"},
                {"data": "modele"},
                {
                    "data": "categories",
                    'render': function (data, type, row, meta) {
                        return data.reduce(function (ret, cat) {
                            return ret + "<kbd>" + cat + "</kbd>";
                        }, "");
                    }
                },
                {"data": "commentaire"},
                {
                    "data": "disponibilite",
                    "defaultContent": "OK",
                    'render': function (data, type, row, meta) {
                        if (data) {
                            return data;
                        }
                        return 'OK';
                    }
                },
                {"data": "dateAchat"},
                {
                    "className": 'actions',
                    "orderable": false,
                    "searchable": false,
                    "data": null,
                    "defaultContent": buttons
                }
            ],
            "autoWidth": false
        })
        ;

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
    // Activation/désactivation de l'entité
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

