function multipurpose_ecommerce_openCity(evt, cityName) {
    var multipurpose_ecommerce_i, multipurpose_ecommerce_tabcontent, multipurpose_ecommerce_tablinks;
    multipurpose_ecommerce_tabcontent = document.getElementsByClassName("tabcontent");
    for (multipurpose_ecommerce_i = 0; multipurpose_ecommerce_i < multipurpose_ecommerce_tabcontent.length; multipurpose_ecommerce_i++) {
        multipurpose_ecommerce_tabcontent[multipurpose_ecommerce_i].style.display = "none";
    }
    multipurpose_ecommerce_tablinks = document.getElementsByClassName("tablinks");
    for (multipurpose_ecommerce_i = 0; multipurpose_ecommerce_i < multipurpose_ecommerce_tablinks.length; multipurpose_ecommerce_i++) {
        multipurpose_ecommerce_tablinks[multipurpose_ecommerce_i].className = multipurpose_ecommerce_tablinks[multipurpose_ecommerce_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}