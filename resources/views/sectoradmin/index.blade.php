@include('components.dashcss')
@include('superuser.components.aside')
<main class="main-content">
    <div class="position-relative ">
        <!--Nav Start-->
        @include('components.dasheader')
        <!--Nav End-->
    </div>
    <div class="content-inner container-fluid pb-0" id="page_layout">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Sector Admins</h4>

                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#createAdminModal">
                            Create Sector Admin
                        </button>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive border rounded">

                            <table id="datatable" class="table" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Sector</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sectorAdmins as $sectorAdmin)
                                        <tr>
                                            <td>{{ $sectorAdmin->names }}</td>
                                            <td>{{ $sectorAdmin->email }}</td>
                                            <td>{{ $sectorAdmin->telephone }}</td>
                                            <td>{{ $sectorAdmin->sector->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>



                            <div class="modal fade" id="createAdminModal" tabindex="-1" role="dialog"
                                aria-labelledby="createAdminModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="createAdminModalLabel">Create Sector Admin</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('sector-admins.register') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name"
                                                        name="name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="telephone">Telephone</label>
                                                    <input type="text" class="form-control" id="telephone"
                                                        name="telephone" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sector">Sector</label>
                                                    <select class="form-control form-select" id="sector"
                                                        name="sector" required>
                                                        <option value="">Select Sector</option>
                                                        @foreach ($sectors as $sector)
                                                            <option value="{{ $sector->id }}">{{ $sector->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Register</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.dashfooter')
</main>
@include('components.dashjs')
