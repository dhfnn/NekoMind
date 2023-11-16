<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>

$(document).ready( function () {
    $('.dataTablefiture').DataTable({
        "lengthMenu": [5, 10, 25, 50],
        "pageLength": 5
    });
} );
</script>