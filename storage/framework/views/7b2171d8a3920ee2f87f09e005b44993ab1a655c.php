<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Events</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

  <style>
    body{

        background-color:#7FFF00;
      }
    </style>
</head>

<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Events</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_employee_form" >
        <?php echo csrf_field(); ?>
        <div class="modal-body p-4 bg-light">
           <div class="row">
            <div class="col-lg">
              <label for="	title">Title</label>
              <input type="text" name="	title" class="form-control" placeholder="	title" >
              </div>

            <div class="col-lg">
              <label for="small_desc">small description</label>
              <input type="text" name="small_desc" class="form-control" placeholder="Small description" >
            </div>
          </div>
          <div class="my-2">
            <label for="detail_desc">detail description</label>
            <input type="text" name="	detail_desc" class="form-control" placeholder="detail description">
          </div>
          <div class="my-2">
            <label for="galleryid">Galleryid</label>
            <input type="number" name="galleryid" class="form-control" placeholder="galleryid" max="11">
          </div>
          <div class="my-2">
            <label for="photo_url">Photo_url</label>
            <input type="text" name="photo_url" class="form-control" placeholder="Photo url" >
          </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="add_employee_btn" class="btn btn-outline-primary">Add Employee</button>
          </div>
        </form>
    </div>
  </div>
</div>



<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_employee_form" >
        <?php echo csrf_field(); ?>
        <input type="hidden" name="emp_id" id="emp_id">
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="	title" >
              </div>
            <div class="col-lg">
                <label for="small_desc">small description</label>
                <input type="text" name="small_desc" id="small_desc" class="form-control" placeholder="Small description" >
     </div>
          </div>
          <div class="my-2">
            <label for="detail_desc">detail description</label>
            <input type="text" name="detail_desc" id="detail_desc" class="form-control" placeholder="detail description">
          </div>
          <div class="my-2">
            <label for="galleryid">Galleryid</label>
            <input type="number" name="galleryid" id="galleryid" class="form-control" placeholder="galleryid" max="11">
          </div>
          <div class="my-2">
            <label for="photo_url">Photo_url</label>
            <input type="text" name="photo_url" id="photo_url" class="form-control" placeholder="Photo url" >
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="edit_employee_btn" class="btn btn-outline-success">Update Employee</button>
        </div>
      </form>
    </div>
  </div>
</div>


<body class="bg-dark">
  <div class="container">
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-danger d-flex justify-content-between align-items-center">
            <h3 class="text-light">Manage Events</h3>
            <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                class="bi-plus-circle me-2"></i>Add New Events</button>
          </div>
          <div class="card-body" id="show_all_employees">
            <h1 class="text-center text-secondary my-5">Loading...</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
      $(function() {

      // add new employee ajax request
      $("#add_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_employee_btn").text('Adding...');
        $.ajax({
          url: '<?php echo e(route('store')); ?>',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Added!',
                'Employee Added Successfully!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#add_employee_btn").text('Add Employee');
            $("#add_employee_form")[0].reset();
            $("#addEmployeeModal").modal('hide');
          }
        });
      });

      // edit employee ajax request
      $(document).on('click', '.editIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '<?php echo e(route('edit')); ?>',
          method: 'get',
          data: {
            id: id,
            _token: '<?php echo e(csrf_token()); ?>'
          },
          success: function(response) {
            $("#title").val(response.title);
            $("#small_desc").val(response.small_desc);
            $("#detail_desc").val(response.detail_desc);
            $("#galleryid").val(response.galleryid);
            $("#photo_url").val(response.photo_url);
            $("#emp_id").val(response.id);

          }
        });
      });

      // update employee ajax request
      $("#edit_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_employee_btn").text('Updating...');
        $.ajax({
          url: '<?php echo e(route('update')); ?>',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Updated!',
                'Employee Updated Successfully!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#edit_employee_btn").text('Update Employee');
            $("#edit_employee_form")[0].reset();
            $("#editEmployeeModal").modal('hide');
          }
        });
      });

      // delete employee ajax request
      $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '<?php echo e(csrf_token()); ?>';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '<?php echo e(route('delete')); ?>',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                fetchAllEmployees();
              }
            });
          }
        })
      });

      // fetch all employees ajax request
      fetchAllEmployees();

      function fetchAllEmployees() {
        $.ajax({
          url: '<?php echo e(route('fetchAll')); ?>',
          method: 'get',
          success: function(response) {
            $("#show_all_employees").html(response);
            $("table").DataTable({
              order: [0, 'desc']
            });
          }
        });
      }
    });
  </script>
</body>

</html>
<?php /**PATH C:\Users\admin\Desktop\tutorial13\yash\resources\views/index.blade.php ENDPATH**/ ?>