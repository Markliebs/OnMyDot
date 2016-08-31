// $(document).ready(function () {

$(document).on('click', '.submitButton', function () {
    // alert("Test!");
    console.log("heyyohhhhhhh");
    // var dfs = $(this).data('distanceFromSideline');
    var sw = $('#selectSide').find(":selected").text();
    var sl = $('#selectLine').find(":selected").text();
    var si = $('#selectIn').find(":selected").text();
    var dfl = $('#distanceFromYardline').find(":selected").text();
    var dfs = $('#distanceFromSideline').find(":selected").text();
    console.log(sw);
    console.log(sl);
    console.log(si);
    console.log(dfl);
    console.log(dfs);
    return false;
});
// });


