/**
 * Created by visitor on 2/13/2016.
 */
jQuery(function($){
    $('#msform').submit(function(){
        console.log(this);
        var firstname = $(this.elements.firstname).val();
        var lastname =$(this.elements.lastname).val();
        var phonenumber = $(this.elements.phonenumer).val();
        var email = $(this.elements.email).val();
        var Password =$(this.elements.Password).val();
        var data = {firstname: firstname, lastname: lastname, phonenumber: phonenumber, email: email, Password: Password};
        $.post("SighinPage.php", data, function (result) {
            console.log(result);
        });
        return false;
    });
});