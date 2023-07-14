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
                            <h4 class="card-title">Cell Admins</h4>

                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#createAdminModal">
                            Create Cell Administrator
                        </button>


                    </div>
                    <div class="card-body">

                        @include('components.alert')
                        <div class="table-responsive border rounded">

                            <table id="datatable" class="table" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Sector</th>
                                        <th>Cell</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cellAdmins as $cellAdmin)
                                        <tr>
                                            <td>{{ $cellAdmin->names }}</td>
                                            <td>{{ $cellAdmin->email }}</td>
                                            <td>{{ $cellAdmin->telephone }}</td>
                                            <td>{{ $cellAdmin->cell->sector->name }}</td>
                                            <td>{{ $cellAdmin->cell->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>



                            <div class="modal fade" id="createAdminModal" tabindex="-1" role="dialog"
                                aria-labelledby="createAdminModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="createAdminModalLabel">Create Cell Administrator</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('cell-admins.register') }}" method="POST">
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
                                                <div class="form-group mt-4">
                                                    <label class="mb-2 text-muted">Choose Sector</label>
                                                    <select name="sector_id" id="sectorSelect"
                                                        class="form-control form-select" required>

                                                        @foreach ($sectors as $sector)
                                                            <option value="{{ $sector->id }}">{{ $sector->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group mt-4">
                                                    <label class="mb-2 text-muted">Choose Cell</label>

                                                    <select name="cell" id="cellSelect"
                                                        class="form-control form-select" required>

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
<script>
    $(document).ready(function() {
        $('#sectorSelect').change(function() {
            let sectorId = $(this).val();
            $('#cellSelect').empty();

            $.ajax({
                url: '/cells/' + sectorId,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    let selectInput = $('#cellSelect');
                    response.forEach(function(cell) {
                        let option = '<option value="' + cell.id + '">' + cell
                            .name + '</option>';
                        selectInput.append(option);
                    });
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });
    });
</script>
