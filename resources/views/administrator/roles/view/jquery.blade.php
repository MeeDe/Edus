<script>
    $( document ).ready(function() {
        $("a[name='modalRoleBtn']").click(function() {
            var link="/administrator/roles/" + $(this).data('id') + "/view";
            $.get( link, function( data ) {
                var html = $(data).find('.panel-body').html();
                $("#myModal").find(".modal-body").html(html);
                $("#myModal").modal('show');
            });
        });
    });
</script>