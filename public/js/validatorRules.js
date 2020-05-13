$("#validateForm").validate({
    rules: {
        phone:{
            required: true,
            number: true,
            minlength: 11,
            maxlength: 11,
            phoneUS : true,
        }
    }
});
jQuery.validator.addMethod("phoneUS", function (phone, element) {
    phone = phone.replace(/\s+/g, "");
    return this.optional(element) || phone.length > 9 &&
    // phone.match(/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/);
    phone.match(/(^(01){1}[3456789]{1}(\d){8})$/);
}, "Please enter a valid phone number eg.(01900110011)");
