/*=========================================================================================
	File Name: sweet-alerts.js
	Description: A beautiful replacement for javascript alerts
	----------------------------------------------------------------------------------------
	Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
	Author: Pixinvent
	Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function () {

  $('#confirm-color').on('click', function () {
    Swal.fire({
      title: 'Yakin?',
      text: " ",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Submit',
      cancelButtonText: 'Batal',
      confirmButtonClass: 'btn btn-primary',
      cancelButtonClass: 'btn btn-danger ml-1',
      buttonsStyling: false,
    }).then(function (result) {
      if (result.value) {
        Swal.fire({
          type: "success",
          title: 'Submit',
          text: 'Rekap Kerja Harian Telah Di Submit',
          confirmButtonClass: 'btn btn-success',
        });  window.setTimeout(function(){
          window.location.replace('detail-rekap.php');
        } ,1000);
      }
      else if (result.dismiss === Swal.DismissReason.cancel) {
        Swal.fire({
          title: 'Batal',
          text: 'Dibatalkan',
          type: 'error',
          confirmButtonClass: 'btn btn-success',
        })
      }
    })
  });

});
