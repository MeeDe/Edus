<script>
   $( document ).ready(function() {
      $("input[name='modalBtn']").click(function() {
         var html = '<div>Drink with me</div>';

         $("#myModal").find(".modal-body").html(html);
         $("#myModal").modal('show');
      });
   });
</script>