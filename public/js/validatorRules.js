$("#validateForm").validate({
    rules: {
        phone_number:{
            required: true,
            number: true,
            minlength: 11,
            maxlength: 11,
            phoneUS : true,
        }
    }
});
jQuery.validator.addMethod("phoneUS", function (phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 9 &&
    // phone_number.match(/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/);
    phone_number.match(/(^(01){1}[3456789]{1}(\d){8})$/);
}, "Please enter a valid phone number eg.(01900110011)");
