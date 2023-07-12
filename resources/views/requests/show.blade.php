@include('components.home.css')
@include('components.home.navbar')
<section class="pxp-page-header-simple" style="background-color: var(--pxpMainColor);max-height:200px !important">
    <div class="pxp-container mt-4">
        <h1 class="text-white">Service Requests List</h1>
        {{-- <div class="pxp-hero-subtitle pxp-text-light text-white mt-3">view dhuidahidh</div> --}}

    </div>
</section>

<section class="mt-3">
    <div class="pxp-container">
        <div class="mt-4 mt-lg-5">
            <h5 class="mb-4 text-muted">Sector Based Service Requests</h5>
            <div class="table-responsive mt-4">
                <table class="table align-middle">
                    <thead>
                        <th></th>
                        <th>Code</th>
                        <th>Sector</th>
                        <th>Preferred Date</th>
                        <th>Preferred Hour</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th></th>
                    </thead>

                    @foreach ($sectorRequests as $request)
                        <tr>
                            <td style="width: 3%;">
                                <div class="pxp-candidate-dashboard-job-avatar pxp-cover"
                                    style="background-image: url(../home/images/company-logo-3.png);"></div>
                            </td>

                            <td>{{ $request->code }}</td>
                            <td>{{ $request->sector->name }}</td>
                            <td>{{ $request->preferred_date }}</td>
                            <td>{{ $request->preferred_hour }}</td>
                            <td> {{ $request->description }}</td>
                            <td>

                                @if ($request->status == 'pending')
                                    <button class="btn btn-warning btn-sm">Pending</button>
                                @else
                                    <button class="btn btn-warning btn-sm">Scheduled</button>
                                @endif
                            </td>

                            <td>
                                <div class="pxp-dashboard-table-options">
                                    <ul class="list-unstyled">
                                        <li><button title="View job details"><span class="fa fa-eye"></span></button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>


        <div class="mt-4 mt-lg-5">
            <h5 class="mb-4 text-muted">Sector Based Service Requests</h5>
            <div class="table-responsive mt-4">
                <table class="table align-middle">
                    <thead>
                        <th></th>
                        <th>Code</th>
                        {{-- <th>Sector</th> --}}
                        <th>Cell</th>
                        <th>Preferred Date</th>
                        <th>Preferred Hour</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th></th>
                    </thead>

                    @foreach ($cellRequests as $requeste)
                        <tr>
                            <td style="width: 3%;">
                                <div class="pxp-candidate-dashboard-job-avatar pxp-cover"
                                    style="background-image: url(../home/images/company-logo-6.png);"></div>
                            </td>

                            <td>{{ $requeste->code }}</td>
                            {{-- <td>{{ $requeste->sector->name }}</td> --}}
                            <td>{{ $requeste->cell->name }}</td>
                            <td>{{ $requeste->preferred_date }}</td>
                            <td>{{ $requeste->preferred_hour }}</td>
                            <td> {{ $requeste->description }}</td>
                            <td>
                                @if ($request->status == 'pending')
                                    <button class="btn btn-warning btn-sm">Pending</button>
                                @else
                                    <button class="btn btn-warning btn-sm">Scheduled</button>
                                @endif
                            </td>
                            <td>
                                <div class="pxp-dashboard-table-options">
                                    <ul class="list-unstyled">
                                        <li><button title="View job details"><span class="fa fa-eye"></span></button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
</section>


@include('components.home.footer')
@include('components.home.js')
