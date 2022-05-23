$(document).ready(function(){
    $("#denah-select").on("change", function() {
      let denah = $('#denah-select option:selected').val();

      if(denah == '1') {
        $('.denah_lt1-img').removeClass('d-none');
        $('.denah_lt2-img').addClass('d-none');
        $('.denah_lt3-img').addClass('d-none');
      }

      if(denah == '2') {
        $('.denah_lt1-img').addClass('d-none');
        $('.denah_lt2-img').removeClass('d-none');
        $('.denah_lt3-img').addClass('d-none');
      }
      if(denah == '3') {
        $('.denah_lt1-img').addClass('d-none');
        $('.denah_lt2-img').addClass('d-none');
        $('.denah_lt3-img').removeClass('d-none');
      }
    });
  });