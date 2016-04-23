<script>
    $( document ).ready(function() {
            $( "#date_from_sbu" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3,
                dateFormat: 'dd/mm/yy',
                onClose: function( selectedDate ) {
                    $( "#date_to_sbu" ).datepicker( "option", "minDate", selectedDate );
                }
            });
            $( "#date_to_sbu" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3,
                dateFormat: 'dd/mm/yy',
                onClose: function( selectedDate ) {
                    $( "#date_from_sbu" ).datepicker( "option", "maxDate", selectedDate );
                }
            });

            $( "#date_from_sbt" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3,
                dateFormat: 'dd/mm/yy',
                onClose: function( selectedDate ) {
                    $( "#date_to_sbt" ).datepicker( "option", "minDate", selectedDate );
                }
            });
            $( "#date_to_sbt" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3,
                dateFormat: 'dd/mm/yy',
                onClose: function( selectedDate ) {
                    $( "#date_from_sbt" ).datepicker( "option", "maxDate", selectedDate );
                }
            });

        $('#date_from_sbu, #date_to_sbu, #date_from_sbt, #date_to_sbt').mask('99/99/9999', {
            placeholder: '__/__/____'
        });

        $('a[name="logDetails"]').click(function() {
            var index = $(this).data('index');          // get index of clicked detail button
            var data = '{!! Session::get('json')!!}';   // get one big json string about all fetched logs
            var logs = JSON.parse(data);                // convert to array of objects
            var obj = logs[index-1];
            var html='';

            $.each(obj.new, function(key) {
                html += '<tr><td>'+key+'</td><td>'+obj.old[key]+'</td><td>'+obj.new[key]+'</td></tr>';
            });

            $('#modal-tbody').html(html);
        });
    });
</script>