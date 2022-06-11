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
                        <th scope="col">Account create date</th>
                        <th scope="col">Account update date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at}}</td>
                            <td>{{$item->updated_at}}</td>
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
                <th scope="col">Account create date</th>
                <th scope="col">Account update date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->updated_at}}</td>
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
