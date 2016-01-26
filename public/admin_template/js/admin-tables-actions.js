

var adminTableActionController = new AdminAjaxLoader();


$(document.body).ready(function () {
    $(document.body).on('click', '.dataTable_wrapper a', function (event) {
        event.preventDefault();
        event.stopPropagation();
        console.log($(this).attr('href'));
        adminTableActionController.url = $(this).attr('href');
        adminTableActionController.type = $(this).attr('type');
        adminTableActionController.cssPath = '#extradata';
        adminTableActionController.failFunction = function (data) {
            $(this.cssPath).empty();
            $(this.cssPath).html(data);
            displayInfo('');
        };
        adminTableActionController.succesFunction = function (data) {
            $(this.cssPath).empty();
            $(this.cssPath).html(data);
            displayInfo(data['info']);
        };
        adminTableActionController.lodAjax();
    }
    );


});


function displayInfo(message) {
    if (message != 'undefined') {
        $('#page-wrapper').prepend(message);
    }
}
