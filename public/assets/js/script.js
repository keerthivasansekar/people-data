$( document ).ready(function() {

    getPerson();
    $("#add_person").click(function(){
        getPerson();
    });
});

function getPerson(){
    var url = 'http://localhost/people-data/public/get-person';
    $.get(url, function(data){
        if (data != "") {
            $('#people-data').append(data);
            setPeopleCount();
        } else {
            Swal.fire(
                'No more people!',
                'End of Data!',
                'warning'
            )
        }
    });

}

function setPeopleCount(){
    var numPeople = $('.card').length ;
    $('#persons_count').text(numPeople);
}