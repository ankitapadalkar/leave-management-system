<?php include '../templates/admin-header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Staff Management</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#add">
                Add Staff
              </button>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Ankita Padalkar</td>
                    <td>ankita12@gmail.com</td>
                    <th>3428734734</th>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update">Update</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#View">View</button>
                    </td>
                  </tr>
                  <tr>
                  <td>2</td>
                    <td>Diksha Patil</td>
                    <td>diksha34@gmail.com</td>
                    <th>3742493759</th>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update">Update</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#View">View</button>
                    </td>
                  </tr>
                  <tr>
                  <td>3</td>
                    <td>Anuksha shingate</td>
                    <td>anuksha343@gmail.com</td>
                    <th>5798320349</th>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update">Update</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#View">View</button>
                    </td>
                  </tr>
                  <tr>
                  <td>4</td>
                    <td>Simran Patel</td>
                    <td>simran32@gmail.com</td>
                    <th>3782620349</th>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update">Update</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#View">View</button>
                    </td>
                  </tr>
                  <tr>
                  <td>5</td>
                    <td>Sakshi Kumbhar</td>
                    <td>sakshi@gmail.com</td>
                    <th>2938475249</th>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update">Update</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#View">View</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- add depertmanet modal -->
  <div class="modal fade" id="add" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <!-- Vertical Form -->
            <form class="row g-3 p-3">
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Name</label>
                    <input type="text" class="form-control" id="department_name" name="department_name">
                </div>
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Email</label>
                    <input type="text" class="form-control" id="department_name" name="department_name">
                </div><div class="col-12">
                    <label for="inputNanme4" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="department_name" name="department_name">
                </div>
            </form><!-- Vertical Form -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Add</button>
        </div>
        </div>
    </div>
</div>


  <!-- update depertmanet modal -->
  <div class="modal fade" id="update" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <!-- Vertical Form -->
            <form class="row g-3 p-3">
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Department Name</label>
                    <input type="text" class="form-control" id="department_name" name="department_name">
                </div>
            </form><!-- Vertical Form -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-warning">Update</button>
        </div>
        </div>
    </div>
</div>


  <!-- delete depertmanet modal -->
  <div class="modal fade" id="delete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <!-- Vertical Form -->
            <form class="row g-3 p-3">
                <div class="col-12">
                    <h5>Are you sure? Do you want to delete ? </h5>
                </div>
            </form><!-- Vertical Form -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </div>
        </div>
    </div>
</div>



<!-- End Vertically centered Modal-->

React

Reply








