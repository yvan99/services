@include('components.home.css')
@include('components.home.navbar')
<section class="pxp-page-header-simple" style="background-color: var(--pxpMainColor);max-height:240px !important">
    <div class="pxp-container mt-4">
        <h1 class="text-white">Service Requests List</h1>
        <div class="pxp-hero-subtitle pxp-text-light text-white mt-3">view dhuidahidh</div>

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
                    </thead>

                    @foreach ($sectorRequests as $request)
                        <tr>
                        <td style="width: 3%;"><div class="pxp-candidate-dashboard-job-avatar pxp-cover" style="background-image: url(../home/images/company-logo-5.png);"></div></td>
                           <td>{{ $request->id }}</td>
                           <td>{{ $request->code }}</td>
                           <td>{{ $request->sector->name }}</td>
                           <td>{{ $request->preferred_date }}</td>
                           <td>{{ $request->preferred_hour }}</td>
                           <td> {{ $request->description }}</td>
                           <td></td>
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
                        <th>Request ID</th>
                        <th>Code</th>
                        {{-- <th>Sector</th> --}}
                        <th>Cell</th>
                        <th>Preferred Date</th>
                        <th>Preferred Hour</th>
                        <th>Description</th>
                        <th>Status</th>
                    </thead>

                    @foreach ($cellRequests as $requeste)
                        <tr>
                           <td>{{ $requeste->id }}</td>
                           <td>{{ $requeste->code }}</td>
                           {{-- <td>{{ $requeste->sector->name }}</td> --}}
                           <td>{{ $requeste->cell->name }}</td>
                           <td>{{ $requeste->preferred_date }}</td>
                           <td>{{ $requeste->preferred_hour }}</td>
                           <td> {{ $requeste->description }}</td>
                           <td></td>
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
