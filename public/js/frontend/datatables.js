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

    $('#input-tags').selectize({
        valueField: 'name',
        labelField: 'name',
        searchField: 'name',
        create: false,
        render: {
            option: function(item, escape) {
                return '<div>' +
                    '<span class="title">' +
                    '<span class="name"><i class="icon"></i>' + item.name + '</span>' +
                    '</span>' +
                    '<span class="description"> ' + escape(item.lastname) + '</span>' +
                    '</div>';
            }
        },
        load: function(query, callback) {
            if (!query.length) return callback();
            $.ajax({
                url: location.href + '/personal',
                type: 'GET',
                dataType: 'json',
                error: function(err) {
                    callback();
                },
                success: function(res) {
                    callback(res);
                }
            });
        }
    });

})