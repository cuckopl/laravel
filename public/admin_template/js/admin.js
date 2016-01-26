$(document).ready(function () {

});



function AdminAjaxLoader() {
    this.url = '';
    this.cssPath = '';
    this.type = "GET";
    this.data = "";
    this.loaderData;
    this.errorMessage = '<div class="text-center btn-lg" style="padding-top:200px;">An error occured when sednig data. Try Again</div>';

    this.validData = false;



    this.startPreLoader = function () {
        $(this.cssPath).html(this.loaderData);
    };

    this.succesFunction = function (data) {

        $(this.cssPath).empty();
        $(this.cssPath).html(data);
    };

    this.failFunction = function (data) {

        $(this.cssPath).empty();
        $(this.cssPath).html(this.errorMessage);
    };


    this.checkUrl = function () {
        if (this.url === '#') {
            return false;
        }
        return true;
    };

    this.validateData = function () {
        this.validData = this.checkUrl();

        return this.validData;  //iterate throug all variables
    };

    this.lodAjax = function () {
        if (!this.validateData()) {
            return false;
        }
        this.startPreLoader();
        this.run();

    };

    this.run = function () {
        $.ajax({
            type: this.type,
            url: this.url,
            beforeSend: function (request)
            {
                request.setRequestHeader('X-CSRF-Token', $('input[name="_token"]').val());
            },
            context: this, //verry important to use this context
            data: this.data,
            cache: false,
            success: function (data) {
                this.succesFunction(data);
            }

        }).fail(function () {
            this.failFunction();
        });
    };



}





var adminAjaxLoader = new AdminAjaxLoader();

adminAjaxLoader.loaderData = '<div class="text-center btn-lg" style="padding-top:200px;">Loading ...</div>';

$(document).ready(function () {
    $('ul li a').click(function (event) {
        event.preventDefault();
        adminAjaxLoader.url = $(this).attr('href');
        adminAjaxLoader.cssPath = '#page-wrapper';
        adminAjaxLoader.lodAjax();
    }
    );


});