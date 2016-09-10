$(document).on('click', '.submitButton', function () {
    // alert("Test!");
    console.log("heyyohhhhhhh");

    // <?php
    // $sql = "INSERT INTO dot_tables (ss, sl, si, dfl, hm, fb, sfh)
    // VALUES ('ss', 'sl', 'si', 'dfl', 'hm', 'fb', 'sfh');"; 
    
    // ?>

    // var dfs = $(this).data('distanceFromSideline');
    var ss = $('#selectSide').find(":selected").text();
    var sl = $('#selectLine').find(":selected").text();
    var si = $('#selectIn').find(":selected").text();
    var dfl = $('#distanceFromYardLine').find(":selected").text();
    var hm = $('#hashMark').find(":selected").text();
    var fb = $('#fOrb').find(":selected").text();
    var sfh = $('#stepsFromHash').find(":selected").text();
    
    console.log(ss);
    console.log(sl);
    console.log(si);
    console.log(dfl);
    console.log(hm);
    console.log(fb);
    console.log(sfh);

    return false;
});