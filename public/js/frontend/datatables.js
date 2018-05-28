$(document).ready(function () {
    // var dependenceTable = $('#dependenceTable').DataTable({
    //     lengthChange: false,
    //     buttons: ['copy', 'excel', 'pdf', 'colvis']
    // });

    $('#dependenceTable').DataTable({
        serverSide: true,
        processing: true,
        data: {
            'name': $("#input-tags").val()
        },
        ajax: {
            url: '/api/dependence/all',
            data: function (d) {
                d.name = $("#input-tags").val();
            }
        },
        columns: [
            {data: 'id'},
            {data: 'name'},
            {data: 'acronym'},
            {data: 'email'},
            {data: 'annex'},

        ]
    });

    $('#search-data').on("click", function (e) {
        e.stopPropagation();
        e.preventDefault();

        console.log(this);
        // var inputData = $("[name='search-data']").val();
        var searchData = $("#input-tags").val();
        if (searchData.length >= 4) {
            $('#dependenceTable').DataTable().ajax.reload();
        }else{
            toastr.warning('Mas de 4 letras!')
        }

    })


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

    // $('#input-tags').selectize({
    //     valueField: 'name',
    //     labelField: 'name',
    //     searchField: 'name',
    //     create: false,
    //     render: {
    //         option: function(item, escape) {
    //             return '<div>' +
    //                 '<span class="title">' +
    //                 '<span class="name"><i class="icon"></i>' + item.name + '</span>' +
    //                 '</span>' +
    //                 '<span class="description"> ' + escape(item.lastname) + '</span>' +
    //                 '</div>';
    //         }
    //     },
    //     load: function(query, callback) {
    //         if (!query.length) return callback();
    //         $.ajax({
    //             url: location.href + '/personal',
    //             type: 'GET',
    //             dataType: 'json',
    //             error: function(err) {
    //                 callback();
    //             },
    //             success: function(res) {
    //                 callback(res);
    //             }
    //         });
    //     }
    // });

})