/**
 * Initialise le tabelau des matériel
 * @param idTable Identifaitn de la table
 * @param url URL permettatn de réupérer la liste du matériel
 * @param langFilePath le chemin vers le fichier lang
 * @param editUrl L'URL pour l'édition d'un matériel
 * @param deleteUrl L'URL pour la suppression d'un matériel
 * @param changeStateUrl L'URL pour activer/désactiver un matériel
 */
function initTable(idTable, url, langFilePath, editUrl, deleteUrl, activateUrl, deactivateUrl) {
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
        <a class="btn btn-success activateButton" \
            data-href="' + activateUrl + '"\
            title="Activer">\
            <span class="glyphicon glyphicon-eye-open actionBtn"></span>\
        </a>\
        <a class="btn btn-xs btn-info pull-left open-disponibleModal deactivateButton" \
            data-toggle="modal" data-href="' + deactivateUrl + '"\
            data-target="#disponibleModal" data-id="{{ device.id }}" data-label="{{ device.libelle }}"\
            data-marque="{{ device.marque }}" data-modele="{{ device.modele }}">\
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>\
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
                        return renderCategories(data);
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
            "autoWidth": false,
            "rowCallback": function (row, data, index) {
                var dispo = data.disponible;
                if (dispo) {
                    // Affiche bouton desativation
                    $(row).find('.deactivateButton').show();
                    $(row).find('.activateButton').hide();
                } else {
                    // Affiche bouton activation
                    $(row).find('.deactivateButton').hide();
                    $(row).find('.activateButton').show();
                }
            }
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
    // Activation de l'entité
    $('#' + idTable).on('click', 'a.activateButton', function (event) {
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
                        table.ajax.reload();
                    }
                }
            });
    });
    // Désactivation de l'entité
    $('#disponibleModal').on('click', 'button.submitDeactivateBtn', function (event) {
        var deviceID = $(".modal-body #deviceId").val();
        var comment = $(".modal-body #inactivationComment").val();
        $.ajax(
            {
                url: deactivateUrl,
                type: 'POST',
                async: false,
                data: {id: deviceID, commentaire: comment},
                cache: false,
                complete: function (response, status) {
                    if (status != 'success') {
                        alert('L\'action a échouée !')
                    } else {
                        table.ajax.reload();
                    }
                }
            });
    });
    // triggered when modal is about to be shown
    $('#disponibleModal').on('shown.bs.modal', function (e) {
        //get data-id attribute of the clicked element
        var tr = e.relatedTarget.closest('tr');
        var row = table.row(tr);
        var deviceId = row.id();
        var deviceRef = row.data().reference;
        var deviceLabel = row.data().designation;
        var deviceMarque = row.data().marque;
        var deviceModele = row.data().modele;
        var deviceCat = row.data().categories;
        //populate the textbox
        $(".modal-body #deviceId").val(deviceId);
        $(".modal-body #deviceReference").val(deviceRef);
        $(".modal-body #deviceLabel").val(deviceLabel);
        $(".modal-body #deviceMarque").val(deviceMarque);
        $(".modal-body #deviceModele").val(deviceModele);
        $(".modal-body #deviceCategories").html(renderCategories(deviceCat));
        $(".modal-body #inactivationComment").focusout();
        $(".modal-body #inactivationComment").focus();

    });
    function renderCategories(data) {
        return data.reduce(function (ret, cat) {
            return ret + "<kbd>" + cat + "</kbd>";
        }, "");
    }
}





