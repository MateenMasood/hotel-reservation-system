
// ********* providde convenient CSRF protection for your AJAX based applications *****
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
// ****************************************************************
$(document).ready(function () {
  $('#datatable').DataTable(); //Buttons examples

  var table = $('#tblHotels').DataTable({
    lengthChange: false,
    dom: 'Bfrtip',
    buttons: ['copy', 'excel', 'pdf', 'csv' , 'colvis' , 'print'],

    ajax: {
        "url": "/admin/rbac/users/datatable",
        "dataSrc": ""
    },
    columns: [
      { data : 'id'},
      { data: "employee_id"},
      { render : function(data, type, row , full) {

            return row.user.first_name +" "+row.user.last_name

        },
      },
      { data: "user.email" },
      { data: "user.contact" },
    //   { data: "user.roles.name" },
    { render : function(data, type, row , full) {
        return `<span class="badge badge-pill badge-dark">`+row.user.roles[0]['name']+`</span>`
         },
      },
      { render : function(data, type, row , full) {
        // console.log(row)
        if (row.status == '1') {
            return `<a href="javascript:void(0)" onclick="change_status('`+row.id+`' , '0')" class="badge badge-pill badge-success">active</a>`
        }else{
            return `<a href="javascript:void(0)" onclick="change_status('`+row.id+`' , '1')" class="badge badge-pill badge-danger">deactive</a>`
        }
         },
      },
     { render : function(data, type, row , full) {
       // console.log(row)
         return `
         <div class="glyph">
             <a href="/admin/rbac/users/`+row.id+`/edit"> <i class="mdi mdi-home-edit"></i> </a>
             <a class="deleteRecord" href="#" onclick="deleteRecord('`+row.user.id+`')"> <i class="mdi mdi-delete-alert"></i> </a>
         </div>


         `
        },
     },
    ],
    "rowCallback": function (nRow, aData, iDisplayIndex) {
        var oSettings = this.fnSettings ();
        $("td:first", nRow).html(oSettings._iDisplayStart+iDisplayIndex +1);
        return nRow;
        },
    "drawCallback": function( settings ) {

    }

    // "drawCallback": funcrion
  });

  table.buttons().container().appendTo('#tblHotels_wrapper .col-md-6:eq(0)');
});

// ******************* delete record *********************

function deleteRecord($id) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Yes, delete it!"
      }).then(function (result) {

        if (result.value) {

            // **************** delete record ajax **************
            $.ajax({
                url: '/admin/rbac/users/'+$id,
                type: 'DELETE',
                processData: false,

                success: (response)=>{


                        Swal.fire({
                            title: "Deleted!",
                            text: response,
                            type: "success"
                        }).then(function() {
                            window.location.href = window.location.protocol + '//' + window.location.hostname +":"+window.location.port+"/admin/rbac/users/";

                        });

                        // Swal.fire("", "Your file has been deleted.", "success");
                        // window.location.href = window.location.protocol + '//' + window.location.hostname +":"+window.location.port+"/admin/hotel/";
                },
                error: (errorResponse)=>{
                    $.notify( errorResponse.error, 'error'  );


                }
            })

        }
      });
}

// ******************************* deactive record *****************************
// *************************** for future in case we need to change the status of record ********
function change_status(id , status) {
    Swal.fire({
        title: "Are you sure?",
        text: "You want to change the status of coupon code!",
        type: "question",
        showCancelButton: true,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "change status"
      }).then(function (result) {

        if (result.value) {

            // **************** delete record ajax **************
            $.ajax({
                url: '/admin/rbac/users/change-status',
                type: 'POST',
                data: {id: id , status: status},



                success: (response)=>{


                        Swal.fire({
                            title: "success!",
                            text: response,
                            type: "success"
                        }).then(function() {

                            window.location.href = window.location.protocol + '//' + window.location.hostname +":"+window.location.port+"/admin/rbac/users/";

                        });

                        // Swal.fire("", "Your file has been deleted.", "success");
                        // window.location.href = window.location.protocol + '//' + window.location.hostname +":"+window.location.port+"/admin/hotel/";
                },
                error: (errorResponse)=>{
                    $.notify( errorResponse, 'error'  );


                }
            })

        }
    });
}


