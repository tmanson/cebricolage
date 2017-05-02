$(document).ready(function () {
    $.fn.dataTable.moment('DD/MM/YYYY');
});

function initTable(idTable, url, langFilePath, editUrl, showUrl) {
    var buttons = '\
    <div class="btn-toolbar">\
        <div class="btn-group btn-group-xs" role="group">\
            <div class="btn-group btn-group-xs col-md-12" role="group">\
                <a class="btn btn-default editbtn col-md-6"\
                    title="Editer"\
                    data-href="' + editUrl + '">\
                    <span class="glyphicon glyphicon-edit"></span>\
                </a>\
                <a class="btn btn-default showbtn col-md-6"\
                    data-href="' + showUrl + '"\
                    title="Voir">\
                    <span class="glyphicon glyphicon-user showBtn"></span>\
                </a>\
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
                {"data": "identifiant"},
                {"data": "name"},
                {"data": "firstname"},
                {"data": "email"},
                {"data": "phoneNumber"},
                {
                    "className": 'actions',
                    "orderable": false,
                    "searchable": false,
                    "data": null,
                    "defaultContent": buttons
                }
            ],
            "autoWidth": false,
            "pageLength" : 25,
            "order": [[1, 'asc']]
        });

    // Edition de l'entité
    $('#' + idTable).on('click', 'a.editbtn', function (event) {
        callUrl(this, event);
    });
    // Consultation de l'entité
    $('#' + idTable).on('click', 'a.showbtn', function (event) {
        callUrl(this, event);
    });

    function callUrl (elt, event) {
        var tr = $(elt).closest('tr');
        var row = table.row(tr);
        var entityId = row.id();
        var button = $(event.currentTarget);
        var url = button.data('href').replace(':ID', entityId);
        $(location).attr("href", url);
    };
}

