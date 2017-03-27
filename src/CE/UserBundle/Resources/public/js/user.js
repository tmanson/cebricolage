/**
 * Created by T0139828 on 20/09/2016
 */
var $collectionHolder;
var $addTagLink;

jQuery(document).ready(function () {

    $(".toogleCheckbox").bootstrapSwitch();

    $(".banPeriods").find('.startDate').datepicker();
    $(".banPeriods").find('.endDate').datepicker();
    $(".banPeriods").each(function (key, value) {
        addResaFormDeleteLink($(value));
    });
    $(".startDate").on('change', function () {
        $(".endDate")[0].value = null;
    });
    $addTagLink = $('#addBanPeriodLink');
    // Get the ul that holds the collection of tags
    $collectionHolder = $('#bannedPeriods');

    // add the "add a tag" anchor and li to the tags ul
    //$collectionHolder.append($addTagLink);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $(".banPeriods").length);

    $addTagLink.on('click', function (e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();
        // add a new tag form (see next code block)
        addBanPeriodForm($collectionHolder);
    });
});


function addBanPeriodForm($collectionHolder) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li

    $newFormLi = $(newForm);
    $newFormLi.find('.startDate').datepicker();
    $newFormLi.find('.endDate').datepicker();
    $collectionHolder.after($newFormLi);
    addResaFormDeleteLink($newFormLi);
    $("#emptyBanPeriods").hide();
}

function addResaFormDeleteLink($formLi) {
    var $removeFormA = $('<a class="btn btn-sm btn-danger del_resa_link" title="Supprimer"><span class="glyphicon glyphicon-remove"></span></a>');
    $formLi.append($removeFormA);

    $removeFormA.on('click', function (e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();
        // remove the li for the tag form
        $formLi.remove();
        var index = $collectionHolder.data('index');
        $collectionHolder.data('index', index - 1);
        $addTagLink.show();
        if (index == 1) {
            $("#emptyBanPeriods").show();
        }
    });
}

function sendResetMail($url, $username) {
    $.post($url, {'username': $username})
        .done(function (data) {
            alert('Email sent');
        })
        .fail(function (data) {
            alert('Email not sent');
        })
    ;
}