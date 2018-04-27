$(document).ready(function () {
    var dependenceTable = $('#dependenceTable').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
    });

    dependenceTable.buttons().container()
        .appendTo('#dependenceTable_wrapper .col-md-6:eq(0)');



    var personalTable = $('#personalTable').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
    });

    personalTable.buttons().container()
        .appendTo('#personalTable_wrapper .col-md-6:eq(0)');


    var categoryTable = $("categoryTable").DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
    });

    categoryTable.buttons().container()
        .appendTo('#categoryTable_wrapper .col-md-6:eq(0)');
})