
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Posted Jobs</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Jobs</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Title</th>
                      <th>Category</th>
                      
                      <th>Location</th>
                      <th>Exp</th>
                      <th>Job Status</th>
                      <th>Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>S.No</th>
                      <th>Title</th>
                      <th>Category</th>
                      
                      <th>Location</th>
                      <th>Exp</th>
                      <th>Job Status</th>
                      <th>Type</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $i=1;?>
                    <?php foreach($postedJobs as $job): ?>
                    <tr>
                      <td><?=$i?></td>
                      <td><?=$job->job_title?></td>
                      <td><?=$job->category_name?></td>
                      
                      <td><?=$job->job_location_?></td>
                      <td><?=$job->exp?> Years</td>
                      <td><?=$job->job_status?></td>
                      <td><?=$job->type_name?></td>
                      <td><a href="">View More</a></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
