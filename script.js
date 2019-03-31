
$(document).ready(function () {
    // Call Geo Complete
    // $("#address").geocomplete({details:"form#property"});
    $(".admin-sidebar a").click(function () {
        $(this).addClass(active);
    });
    $("#bookform").hide();
    $("#bookformbutton").click(function () {
        $("#bookform").show();

    })
    $('#from').datepicker({
        minDate: "0",
        dateFormat: 'dd-mm-yy'
    });
    $('#to').datepicker({
        minDate: "0",
        dateFormat: 'dd-mm-yy'
    });
    $("#to").change(function () {
        document.getElementById("totalprice").value = getFinalPrice();
    })
    $("#to").change(function () {
        document.getElementById("days").value = getNumberOfDays();
    })
    function getNumberOfDays() {
        var fromdate=$('#from').datepicker("getDate");
        var todate=$('#to').datepicker("getDate");
        var price=document.getElementById("price").value;
        var startDate = Date.parse(fromdate);
        var endDate = Date.parse(todate);
        var timeDiff = endDate - startDate;
        daysDiff = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
        return daysDiff;
    }
    function getFinalPrice() {
        var fromdate=$('#from').datepicker("getDate");
        var todate=$('#to').datepicker("getDate");
        var price=document.getElementById("price").value;
        var startDate = Date.parse(fromdate);
        var endDate = Date.parse(todate);
        var timeDiff = endDate - startDate;
        daysDiff = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
        return price*daysDiff;
    }
});

