
/* call this function when window load */
$(document).ready(function () {
    // buildUserContent('#ResidentTableBody')
    // buildRequestContent('#RequestTableBody')
    // buildVisitorContent('#VisitorTableBody')

    buildTable('#ResidentTable')
    buildTable('#RequestTable')
    buildTable('#VisitorTable')
})

// // Resident Data List
// var residents = [
//     { photo: "assets/images/admin.png", unit: "A-01-03", name: "Lim Ah Tong", IC: "010201-07-0111", contact: "016-1286028", emergency: "012-1286028", gender: 'F', dateIn: Date(), password: "unit" },
//     { photo: "assets/images/biolab.jpg", unit: "B-01-03", name: "Lim Mah Tong", IC: "010201-07-0231", contact: "012-1286028", emergency: "012-1286023", gender: 'F', dateIn: Date(), password: "unit" },
//     { photo: "assets/images/profile-image.png", unit: "D-02-13", name: "Kee Jia Tong", IC: "010228-07-0111", contact: "014-1286028", emergency: "012-1286497", gender: 'F', dateIn: Date(), password: "unit" },
//     { photo: "assets/images/logo.png", unit: "A-01-09", name: "Bee Jia Ying", IC: "011201-07-0141", contact: "010-21286028", emergency: "012-1286666", gender: 'F', dateIn: Date(), password: "unit" },
//     { photo: "assets/images/admin.png", unit: "C-01-03", name: "Ahmad Ali", IC: "981010-07-0211", contact: "018-3126028", emergency: "012-1286322", gender: 'M', dateIn: Date(), password: "unit" }
// ]

// // Request Data List
// var requests = [{ unit: "B-01-03", debt: 1050, date: "27/04/2022"}, { unit: "A-01-09", debt: 0, date: "26/04/2022"}]

// // Vistor Data List
// var visitors = [{ date: "28/04/2022", name: "Mr Suddenly", unit: "D-01-09", car:"PNG3117", contact:"012-9876543"},
// { date: "28/04/2022", name: "Mr Handsome", unit: "A-01-10", car:"PNK3117", contact:"016-9123543"},
// { date: "29/04/2022", name: "Ms Beauty", unit: "C-10-10", car:"WAP3228", contact:"012-9877293"},]

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

// function rebuildTable(tableID) {
//     $(tableID).DataTable().destroy();
//     if (tableID === '#ResidentTable') {
//         buildUserContent('#ResidentTableBody')
//     } else {
//         buildRequestContent('#RequestTableBody')
//     }
//     buildTable(tableID)
// }


// function buildUserContent(tableBody) {
//     $(tableBody).empty() //clear the html first
//     console.log(residents.length)
//     for (resident of residents) {
//         //用template literal (``) 来一次过include所有html 和 string. 用${} 来写 variable
//         newRow =
//             `<tr onclick="editRow('${resident.unit}')">
//                 <td> ${resident.unit} </td>
//                 <td> ${resident.name} </td>
//                 <td> ${resident.gender} </td>
//                 <td> ${resident.IC} </td>
//                 <td> ${resident.contact} </td>                    
//                 <td> ${resident.emergency} </td>
//                 <td><button type="button" class="btn" onclick="editRow('${resident.unit}')"><i class="bi bi-pencil-square text-primary"></i></button>
//                 <button type="button" class="btn" onclick="deleteUser('${resident.unit}')"><i class="bi bi-trash3 text-danger"></i></button>
//                 </td>
//             </tr>
//             `
//         $(tableBody).append(newRow)
//     }
// }


// function buildRequestContent(tableBody) {
//     $(tableBody).empty() //clear the html first
//     console.log(requests.length)
//     for (request of requests) {
//         //match id to get residents data
//         for (resident of residents) {
//             if (resident.unit === request.unit) {
//                 var name = resident.name
//                 var contact = resident.contact
//             }
//         }
//         newRow =
//             `<tr onclick="editRow('${request.unit}')">
//                 <td> ${request.unit} </td>
//                 <td> ${name} </td>
//                 <td> ${request.debt} </td>
//                 <td> ${request.date} </td>
//                 <td> ${contact} </td>                   
//                 <td><button type="button" class="btn" onclick="approveDeletion('${request.unit}')"><i class="bi bi-check-square text-primary"></i></button>
//                 </td>
//             </tr>
//             `
//         $(tableBody).append(newRow)
//     }
// }

// function buildVisitorContent(tableBody) {
//     $(tableBody).empty() //clear the html first
//     console.log(visitors.length)
//     for (visitor of visitors) {
//         //用template literal (``) 来一次过include所有html 和 string. 用${} 来写 variable
//         newRow =
//             `<tr>
//                 <td> ${visitor.date} </td>
//                 <td> ${visitor.name} </td>
//                 <td> ${visitor.unit} </td>
//                 <td> ${visitor.car} </td>
//                 <td> ${visitor.contact} </td>
//             </tr>
//             `
//         $(tableBody).append(newRow)
//     }
// }

// /* Build modal functions */
// function buildModal() {
//     $('#ModalBody').empty() //clear the html first
//     newBody =
//         `<form method="POST" action="admin-manageuser.php">
//             <div class="mb-3">
//                 <label for="unit" class="col-form-label">Unit:</label>
//                 <input type="text" name="unit" class="form-control" id="unit" placeholder="A-10-13" >
//             </div>
//             <div class="mb-3">
//                 <label for="name" class="col-form-label">Resident Name:</label>
//                 <input type="text" name="name" class="form-control" id="name" >
//             </div>
//             <div class="mb-3">
//                 <label for="gender" class="col-form-label">Gender:</label>
//                 <input type="radio" id="F" name="gender" value="F" >
//                 <label for="F">Female</label>
//                 <input type="radio" id="M" name="gender" value="M">
//                 <label for="M">Male</label>
//             </div>
//             <div class="mb-3">
//                 <label for="ic" class="col-form-label">IC Number: (YYMMDD-XX-XXXX)</label>
//                 <input type="text" class="form-control" name="ic" id="ic" placeholder="010616-14-1303">
//             </div>
//             <div class="mb-3">
//                 <label for="contact" class="col-form-label">Phone Number:</label>
//                 <input type="text" class="form-control" id="contact" >
//             </div>
//                 <div class="mb-3">
//                 <label for="date-move-in" class="col-form-label">Date Move In:</label>
//                 <input type="datetime-local" class="form-control" id="date-move-in" >
//             </div>
//             <div class="mb-3">
//                 <label for="emergency" class="col-form-label">Emergency Phone Number: </label>
//                 <input type="text" class="form-control" id="emergency" >
//             </div>
//             <div class="mb-3">
//                 <label for="password" class="col-form-label">Password: </label>
//                 <input type="password" class="form-control" id="password" >
//             </div>
//             <input type="submit"  class="me-lg-3 btn btn-primary" id="submit" name="create_resident">
//         </form> `
//     $('#ModalBody').append(newBody)
// }

// function buildAlert(action, unit, string) {
//     $('#alert-content').empty() 
//     $('#alert-footer').empty() 
//     if(action==="update"){ //update modal alert
//         newBody= `
//         <div class="modal-body d-flex flex-column align-items-center">
//             <div class="mx-auto">
//                 <img src="https://cdn.dribbble.com/users/251873/screenshots/9289747/13540-sign-for-success-alert.gif"
//                     alt="success-image" width="200">
//             </div>
//             <div class="alert" role="alert">
//                 Information updated!
//             </div>
//         </div>`

//         newFooter = `
//         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
//         `
//     }else{ //delete modal alert
//         newBody= `
//         <div class="modal-body d-flex flex-column align-items-center">
//             <p> ${string} ${unit} ?</p>
//         </div>`

//         newFooter = `
//         <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="confirm">OK</button>
//         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
//         `
//     }
//     $('#alert-content').append(newBody) 
//     $('#alert-footer').append(newFooter) 
// }

// /* CRUD functions  */
// function deleteUser(unit) {
//     event.stopPropagation();
//     buildAlert(null, unit, "Delete user account with id: ");
//     $('#alertModal').modal('show')
//     $('#confirm').click(function(){
//         deleteRow(unit, residents, '#ResidentTable');
//     });
// }

// function approveDeletion(unit) {
//     event.stopPropagation();
//     buildAlert(null, unit, "Stop rental with: ");
//     $('#alertModal').modal('show')
//     $('#confirm').click(function(){
//         deleteRow(unit, residents, '#ResidentTable');
//         deleteRow(unit, requests, '#RequestTable');
//     });
// }

// function deleteRow(unit, array, tableID) {
//     event.stopPropagation();//stop the propagation (按了editbuton后，不会再trigger Row 的onclick)
//     console.log(array);
//     console.log("unit is: " + unit);
//     array.forEach(function (resident, index) {
//         console.log('index:' + index + ' resident' + resident.unit);
//         if (resident.unit == unit) {
//             array.splice(index, 1); //remove the object from array
//             rebuildTable(tableID)
//         }
//     });

// }

// function getGender(gender, selection) {
//     if (gender === 'F') {
//         selection += ' input[id="F"]'
//         $(selection).prop('checked', true);
//     }
//     else {
//         selection += ' input[id="M"]'
//         $(selection).prop('checked', true);
//     }
// }

// function editRow(unit) {
//     event.stopPropagation();

//     //building and showing modal
//     buildModal();
//     $('#Modal').on('show.bs.modal', function () {
//         $('#AddModalLabel').text('Update Resident: ');
//     });
//     $('#Modal').modal('show');

//     //show 本来的value
//     console.log("EDIT ROW called")
//     for (resident of residents) {
//         if (resident.unit === unit) {
//             $('#Modal input[id="unit"]').val(resident.unit)
//             $('#Modal input[id="unit"]').prop("disabled", true)
//             $('#Modal input[id="name"]').val(resident.name)
//             $('#Modal input[id="ic"]').val(resident.IC)
//             $('#Modal input[id="contact"]').val(resident.contact)
//             $('#Modal input[id="emergency"]').val(resident.emergency)
//             $('#Modal input[id="date-move-in"]').val(resident.dateIn)
//             $('#Modal input[id="date-move-in"]').prop("disabled", true)
//             $('#Modal input[id="password"]').val(resident.password)
//             getGender(resident.gender, '#Modal')
//         }
//     }

//     $("#form").submit(function (e) {
//         console.log("editRow called")
//         updateResident(unit)
//         e.preventDefault();
//         $("#Modal").modal('hide');
//     })
// }

// function updateResident(unit) {
//     var name = $('#Modal input[id="name"]').val()
//     var IC = $('#Modal input[id="ic"]').val()
//     var contact = $('#Modal input[id="contact"]').val()
//     var emergency = $('#Modal input[id="emergency"]').val()
//     var gender = $("#Modal input[name='gender']:checked").val();
//     var password = $('#Modal input[id="password"]').val();

//     for (resident of residents) {

//         if (resident.unit === unit) {
//             resident.name = name
//                 resident.IC = IC
//                 resident.gender = gender
//                 resident.contact = contact
//                 resident.emergency = emergency
//                 resident.password = password
//                 buildAlert("update",null,null)
//                 $('#alertModal').modal('show')

//             rebuildTable('#ResidentTable')
//             rebuildTable('#RequestTable')
//         }
//     }
// }


// function addRow() {
//     console.log("addRow called")

//     //building and showing modal
//     buildModal();
//     $('#Modal').on('show.bs.modal', function () {
//         $('#AddModalLabel').text('Add New Resident: ');
//     });
//     $('#Modal').modal('show');

//     // Submit Form
//     $("#form").submit(function (e) {

//         var newResident = {}

//         var photo = "assets/images/profile-image.png"
//         var unit = $('input[id="unit"]').val()
//         var name = $('input[id="name"]').val()
//         var IC = $('input[id="ic"]').val()
//         var contact = $('input[id="contact"]').val()
//         var emergency = $('input[id="emergency"]').val()
//         var gender = $("input[name='gender']:checked").val();
//         var password = $('input[id="password"]').val();

//         var dateIn = new Date();



//         if (photo === '' || unit === '' || name === '' || IC === '' || contact === '' || emergency === '' || gender === '' || dateIn === '' || password === '') {
//             alert("All fields must have a valid value.");
//         } else {
//             //create new object
//             newResident = {
//                 photo: photo,
//                 unit: unit,
//                 name: name,
//                 IC: IC,
//                 contact: contact,
//                 emergency: emergency,
//                 gender: gender,
//                 dateIn: dateIn,
//                 password: password
//             }

//             //insert into main list
//             residents.push(newResident)
//             //call build row
//             rebuildTable('#ResidentTable')
//             $("#form").trigger("reset");
//         }
//         e.preventDefault();
//     });

// }


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
                    // alertify.set('notifier','position', 'top-right');
                    // alertify.success(res.message);
                    
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
                    
                    $('.toast-container').append(toastr)
                    $('.toast').toast('show');


                    $('#ResidentTable').load(location.href + " #ResidentTable");
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

                $('#editResident-ic').val(res.data.ic);
                $('#editResident-name').val(res.data.name);
                // $('#editResident-dob').val(res.data.dob);
                $('#editResident-gender').val(res.data.gender);
                $('#editResident-race').val(res.data.race);
                $('#editResident-contact').val(res.data.contact);
                $('#editResident-emergencycontact').val(res.data.emergency_contact);
                $('#editResident-email').val(res.data.email);
                $('#editResident-checkindate').val(res.data.check_in_date);
                $('#editResident-profile_pic').val(res.data.profile_pic);
                $('#editResident-status').val(res.data.status);
                $('#editResident-password').val(res.data.password);
                $('#editResident-vaccinestatus').val(res.data.vaccine_status);
                
                $('#editResidentModal').modal('show');
            }

        }
    });

});

// Update The Resident Data from Edit popup on submit
$(document).on('submit', '#updateResident', function (e) {
    e.preventDefault();

    var formData = new FormData(this);
    formData.append("update_student", true);

    $.ajax({
        type: "POST",
        url: "includes/controllers/resident_controller.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            
            var res = jQuery.parseJSON(response);
            if(res.status == 422) {
                $('#errorMessageUpdate').removeClass('d-none');
                $('#errorMessageUpdate').text(res.message);

            }else if(res.status == 200){

                $('#errorMessageUpdate').addClass('d-none');

                // alertify.set('notifier','position', 'top-right');
                // alertify.success(res.message);
                
                $('#editResidentModal').modal('hide');
                $('#updateResident')[0].reset();

                $('#ResidentTable').load(location.href + " #ResidentTable");

            }else if(res.status == 500) {
                alert(res.message);
            }
        }
    });

});