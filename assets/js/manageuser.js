
/* call this function when window load */
$(document).ready(function () {
    buildTable('#ResidentTable')
    buildTable('#RequestTable')
    buildTable('#VisitorTable')
})

/* Build tables functions  */
function buildTable(tableID) {
    //initialize datatable
    $(tableID).DataTable({
        "initComplete": function (settings, json) {
            $(tableID).wrap("<div style='overflow:auto; width:100%;position:relative;'></div>");
        },
        "scrollCollapse": true,
        language: {
            paginate: {
                next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
            }
        }
    })
}

//BS Button to put inside Sweet Confirm
const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-primary mx-1',
      cancelButton: 'btn btn-danger mx-1'
    },
    buttonsStyling: false
})

//trigger sweet Alert
async function sweetConfirmation(){
    await swalWithBootstrapButtons.fire({
      title: 'Are you sure to delete this data?',
      text: "You might not be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
          swalWithBootstrapButtons.fire(
              'Deleted!',
              'The Data will be deleted.',
              'success'
        )
        return true
    } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelled',
          'No Action is Performed :)',
          'error'
        )
        return false
      }
      return false
    })
}



// ########################################
        // After Change To PHP

// Delete Resident Function
$(document).on('click', '.deleteResidentBtn', async function (e) {//when clicked delete button
    e.preventDefault();

    if(confirm('Are you sure you want to delete this data?')){
        var resident_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "includes/controllers/resident_controller.php",
            data: {
                'delete_resident': true,
                'resident_id': resident_id
            },
            success: function (response) {

                var res = jQuery.parseJSON(response);
                if(res.status == 500) {

                    alert(res.message);
                }else{
                    $('.toast-container').empty()
                    var toastr = `
                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="6000">
                            <div class="toast-header">
                                <span class="bg-primary px-2 rounded">&nbsp;</span>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                ${res.message}
                            <button class="btn text-decoration-underline text-muted" onclick="alert('Undo Clicked')">UNDO</button>
                            </div>
                        </div>
                    `
                    $('.toast-container').append(toastr);
                    $('.toast').toast('show');

                    $('#ResidentTable').load(location.href + " #ResidentTable");
                    setTimeout(function(){ window.location="admin-manageuser.php";}, 2000);
                }
            }
        });
    }
});
// Delete Function Ends

// When Edit Button Clicked
$(document).on('click', '.editResidentBtn', function () {
    var resident_id = $(this).val();
    $.ajax({
        type: "GET",
        url: "includes/controllers/resident_controller.php?resident_id=" + resident_id,
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 404) {

                alert(res.message);
            }else if(res.status == 200){
                
                document.getElementById("editResident-dob").value = res.data.dob;
                document.getElementById("editResident-gender").value = res.data.gender;
                $('#editResident-ic').val(res.data.ic);
                $('#editResident-name').val(res.data.name);
                $("#editResident-race select").val(res.data.race);
                $('#editResident-contact').val(res.data.contact);
                $('#editResident-emergencycontact').val(res.data.emergency_contact);
                $('#editResident-email').val(res.data.email);
                $('#editResident-status').val(res.data.rental_status);
                $('#editResident-checkindate').val(res.data.check_in_date);
                $('#editResident-profile_pic').val(res.data.profile_pic);
                $('#editResident-password').val(res.data.password);
                document.getElementById("editResident-vaccinestatus").value = res.data.vaccine_status;
                
                document.getElementById("editResident-ic").readOnly = true;
                document.getElementById("editResident-checkindate").readOnly = true;
                $('#editResidentModal').modal('show');
            }

        }
    });

});
