  <!-- blood_doners -->
  <div class="container-fluid pt-4 px-4">
      <div class="bg-secondary text-center rounded p-4">
          <div class="d-flex align-items-center justify-content-between mb-4">
              <h6 class="mb-0">Blood Doners</h6>
              <a href="">Show All</a>
          </div>
          <div class="table-responsive">
              <table class="table text-start align-middle table-bordered table-hover mb-0">
                  <thead>
                      <tr class="text-white">
                          {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Phone Number</th>
                          <th scope="col">Report</th>
                          <th scope="col">Age</th>
                          <th scope="col">Blood Type</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($bds as $item)
                          <tr> @if ($item->Status == )
                              <td>{{ $item->id }}</td>
                              <td>{{ $item->b_d_name }}</td>
                              <td>{{ $item->b_d_email }}</td>
                              <td>{{ $item->b_d_gender }}</td>
                              <td>{{ $item->b_d_phone }}</td>
                              <td>{{ $item->b_d_reprt }}</td>
                              <td>{{ $item->b_d_age }}</td>
                              <td>{{ $item->b_d_blood_type }}</td>


                                  <td>
                                      <a class="btn btn-sm btn-primary" href="">Delete user</a>
                                      <a class="btn btn-sm btn-success" href="">Make Admin</a>
                                  </td>
                              @endif



                          </tr>
                      @endforeach

                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <!-- blood_doners -->

  <!-- blood_doner_neededs -->
  <div class="container-fluid pt-4 px-4">
      <div class="bg-secondary text-center rounded p-4">
          <div class="d-flex align-items-center justify-content-between mb-4">
              <h6 class="mb-0">Blood Doner Neededs</h6>
              <a href="">Show All</a>
          </div>
          <div class="table-responsive">
              <table class="table text-start align-middle table-bordered table-hover mb-0">
                  <thead>
                      <tr class="text-white">
                          {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Phone Number</th>
                          <th scope="col">Address</th>
                          <th scope="col">Age</th>
                          <th scope="col">Blood Type</th>

                          <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $item)
                          <tr>
                              <td>{{ $item->id }}</td>
                              <td>{{ $item->b_d_n_name }}</td>
                              <td>{{ $item->b_d_n_email }}</td>
                              <td>{{ $item->b_d_n_gender }}</td>
                              <td>{{ $item->b_d_n_phone }}</td>
                              <td>{{ $item->b_d_n_address }}</td>
                              <td>{{ $item->b_d_n_age }}</td>
                              <td>{{ $item->b_d_n_blood_type }}</td>

                              <td>
                                  <a class="btn btn-sm btn-primary" href="">Delete user</a>
                                  <a class="btn btn-sm btn-success" href="">Make Admin</a>
                              </td>

                          </tr>
                      @endforeach

                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <!-- blood_doner_neededs-->
