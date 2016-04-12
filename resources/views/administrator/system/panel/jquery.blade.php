<script type="text/javascript">
    $( document ).ready(function() {
        $('#isOffline').change(function() {
            $('input[name="offline_msg"]').prop("readonly", !$(this).is(":checked"));
        });
    });
</script>