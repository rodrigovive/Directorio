
$("#submit-dependence").on("click",function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data = getDataRegisterDependence();
    ajaxDependence(data);
})

var getDataRegisterDependence = function (){

    var data = {};
    data.name = $("[name='name-dependence']").val();
    data.acronym = $("[name='acronym-dependence']").val();
    data.nature = $("[name='nature-dependence']").val();
    data.manager = $("[name='manager-dependence']").val();
    data.phone = $("[name='phone-dependence']").val();
    data.annex = $("[name='annex-dependence']").val();
    data.category = $("[name='category-dependence']").val();
    data.email = $("[name='email-dependence']").val();
    // data.dependence = $("[name='dependence-dependence']").val();
    data.description = $("[name='description-dependence']").val();
    console.log(data);
    return data;

}

var ajaxDependence = function (data) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/admin/dependencias',
        type: 'POST',
        data: data,
        success: function (response) {
            console.log(response)
        },
        error: function (error) {
            console.log(error)
        },
    })
}

$("#submit-category").on("click",function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data = getDataRegisterCategory();
    ajaxCategory(data);
    console.log(data);
});

var getDataRegisterCategory = function () {
    var data = {};
    data.name = $("[name='name']").val();
    return data;
}

var ajaxCategory = function (data) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/admin/tipos',
        type: 'POST',
        data: data,
        success: function (response) {
            console.log(response)
        },
        error: function (error) {
            console.log(error)
        },
    })
}

var getDataRegisterManager = function () {
    var data = {};
    data.name = $("[name='name-manager']").val();
    data.lastname = $("[name='lastname-manager']").val();
    data.dni = $("[name='dni-manager']").val();
    data.email = $("[name='email-manager']").val();
    data.cellphone = $("[name='cellphone-manager']").val();
    data.phone = $("[name='phone-manager']").val();
    data.occupation = $("[name='occupation-manager']").val();
    data.dependence = $("[name='dependence-manager']").val();

    return data;
}


$("#submit-manager").on("click",function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data = getDataRegisterManager();
    console.log(data);
    ajaxManager(data);
});

var ajaxManager = function(data){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/admin/personal',
        type: 'POST',
        data: data,
        success: function (response) {
            console.log(response)
        },
        error: function (error) {
            console.log(error)
        },
    })
}