$('#denah-select').change(function() {
    //Use $option (with the "$") to see that the variable is a jQuery object
    let denah = $('#denah-select option:selected').val();
    
});


$(document).ready(function(){
    $("#denah-select").on("change", function() {
        let denah = $('#denah-select option:selected').val();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
// var denah = $('#denah-select option:selected').val();
// console.log(denah)