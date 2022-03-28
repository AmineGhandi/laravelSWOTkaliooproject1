
$(document).ready(function () {
    $('#table_id').DataTable({
        "searching": true,
        "paging": true,
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        "language": {
            "lengthMenu": "Afficher _MENU_ élément",
            "search": "Recherche"
        }
    });

    $('#year').on('change',function(){
        $('#yearForm').submit();
    });
    $('#export_example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
    

});

$('#export').on('change', function(){
    location.href='/export/?format='+$(this).val();
});
