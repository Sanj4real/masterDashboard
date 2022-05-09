<!-- library -->
<script src="app/js/jquery.min.js"></script>
<script src="app/js/bootstrap.bundle.min.js"></script>
<script src="app/js/jquery.fancybox.min.js"></script>
<script src="app/js/progressbar.min.js"></script>


<script src="app/js/chart.min.js"></script>
<script src="app/js/script.js"></script>

<script>
$(document).ready(function() {
    $("#type").change(function() {
        var val = $(this).val();
        if (val == "item1") {
            $("#size").html(
                "<option value='item1'>khkjsdhfjdsh</option><option value='item-1'>child</option>"
            );
        } else if (val == "item2") {
            $("#size").html(
                "<option value='test'>item2: test 1</option><option value='test2'>item2: test 2</option>"
            );
        } else if (val == "item3") {
            $("#size").html(
                "<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>"
            );
        } else if (val == "item0") {
            $("#size").html("<option value=''>--select one--</option>");
        };
    });
});
</script>

</body>


</html>