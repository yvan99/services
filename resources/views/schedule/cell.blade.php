@include('components.dashcss')
@include('celladmin.components.aside')
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
                            <h4 class="card-title">Citizens Service requests Schedule</h4>

                        </div>
                    </div>
                    <div class="card-body">
                        <div id="cellScheduleCalendar"></div>
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
        // Initialize the FullCalendar
        $('#cellScheduleCalendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month'
            },
            defaultView: 'month',
            editable: false,
            events: function(start, end, timezone, callback) {
                // Make an AJAX request to fetch the events data
                $.ajax({
                    url: '{{ route('cell-schedule.events') }}',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        callback(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle error loading events
                    }
                });
            },
            eventClick: function(event) {
                // Handle event click
                console.log(event);
            },
            eventRender: function(event, element) {
                // Customize event rendering if needed
            }
        });
    });
</script>
