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


    $('#fos_user_profile_form_identifiant').on('keyup', function () {
        toogleSaveChangeBtn('applychangeBtn', this);
    });
    $('#fos_user_profile_form_name').on('keyup', function () {
        var newUsername = $('#fos_user_profile_form_firstname').val() + '.' + $('#fos_user_profile_form_name').val();
        $('#fos_user_profile_form_username').val(newUsername)
        toogleSaveChangeBtn('applychangeBtn', this);
    });
    $('#fos_user_profile_form_firstname').on('keyup', function () {
        var newUsername = $('#fos_user_profile_form_firstname').val() + '.' + $('#fos_user_profile_form_name').val();
        $('#fos_user_profile_form_username').val(newUsername)
        toogleSaveChangeBtn('applychangeBtn', this);
    });
    $('#fos_user_profile_form_email').on('keyup', function () {
        toogleSaveChangeBtn('applychangeBtn', this);
    });
    $('#fos_user_profile_form_phoneNumber').on('keyup', function () {
        toogleSaveChangeBtn('applychangeBtn', this);
    });
    $('#fos_user_profile_form_current_password').on('keyup', function () {
        toogleSaveChangeBtn('fos_user_profile_form_submitBtn', this);
    });
});

function toogleSaveChangeBtn($idBtn, $elt) {
    if ($($elt).val().length != 0) {
        $('#'+$idBtn).attr('disabled', false);
    }
    else {
        $('#'+$idBtn).attr('disabled', true);
    }
};


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

function sendResetMail($url, $username, $email) {
    $('#resetPwdBtn').prop('disabled', true);
    $('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate" id="btnSpinner"></span>').insertBefore('#resetPwdBtn');
    $.post($url, {'username': $username})
        .done(function (data) {
            $('#flashs').html('<div class="alert alert-success" role="alert">Un email a été envoyé à l\'adresse ' + $email +
                '</div>'
            );
        })
        .fail(function (data) {
            $('#flashs').html('<div class="alert alert-danger" role="alert">Erreur lors de la réinitialisation du mot de passe</div>');
        })
        .always(function (data) {
            $('#btnSpinner').detach();
            $('#resetPwdBtn').prop('disabled', false);
        })
    ;
}