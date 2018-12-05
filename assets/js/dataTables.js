$(document).ready(function() {
    $('#example').DataTable( {
        "columnDefs": [
            {
                "targets": [ 2 ],
                "visible": false,
                "searchable": false
            }
        ],
        responsive: true,
        buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'copy', 'csv', 'excel', 'pdf','colvis'
        ],
        "scrollX": true,
        "autoWidth": false,
        dom: 'Bfrtip',
        "lengthChange": true
    } );
} );


























