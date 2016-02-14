/**
 * Created by visitor on 2/13/2016.
 */
function newPage() {
    window.open("/");
}
function newPage2() {
    window.open("/");
}

jQuery(function ($) {
    $('#msform').submit(function () {
        console.log(this);
        var email = $(this.elements.email).val();
        var Password = $(this.elements.Password).val();
        var data = {username: email, password: Password};
        $.post("login.php", data, function (result) {
            console.log(result);
        });
        return false;
    });
});