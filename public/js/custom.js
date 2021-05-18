$(document).ready(function() {
    var isFormValid = true;
    $("#zip").change(function(){
        var allowed_zipcode_lengths = [5,9];
        var zipcode_length = this.value.length;
        if(!allowed_zipcode_lengths.includes(zipcode_length)){
            console.log("Please enter correct zipcode");
            $('.zipcode').css("display", "block");
            isFormValid = false;
        } else {
            $('.zipcode').css("display", "none");
            isFormValid = true;
        }
    });

    $("#country").change(function(){
        var selectedCountry = this.value;
        console.log(selectedCountry);
        if(selectedCountry !== null && selectedCountry!== '' && selectedCountry!= 'US'){
            $('.country').css("display", "block");
            isFormValid = false;
        } else {
            $('.country').css("display", "none");
            isFormValid = true;
        }
    });

    $("#register").click(function(event){
        if(isFormValid == false){
            event.preventDefault();
        }
    });
});