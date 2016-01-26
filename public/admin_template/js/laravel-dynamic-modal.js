
//Initialize modalRoute check filte resources\views\admin\user-controller\add.blade.php
//Refactor this code create class with default values
var ModalClass = '.laravel-dynamic-modal';
$(ModalClass).modal('show');
var adminModal = new AdminAjaxLoader();
$(ModalClass).on('click', '[type=submit]', function (event) {
    button = $(this);
    button.hide();
    event.preventDefault();
    event.stopPropagation();
    adminModal.data = $(this).closest('form').serialize();
    adminModal.url = modalRoute;
    adminModal.cssPath = '#extradata';
    adminModal.type = $(this).closest('form').attr('method');
    adminModal.succesFunction = function (data) {
        button.show();
        if (data['status'] === true) {
            $(ModalClass).modal('hide');
            setTimeout(function () {
                $(ModalClass).parent().empty();
                displayInfo(data['info']);
            }, 1000);
        } else {
            $(ModalClass).children('.modal-dialog').prepend(data['info']);
            console.log($(ModalClass));
        }

    };
    adminModal.failFunction = function (data) {
        $(ModalClass).modal('hide');
        setTimeout(function () {
            $(ModalClass).parent().empty();
            displayInfo(data['info']);
        }, 1000);
    };
    adminModal.lodAjax();
}
);