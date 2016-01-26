


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User Activitis</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div id="extradata"></div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                User Activity
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-bordered" id="user-activity">
                        <tfoot>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        </tfoot>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Have Permission</th>
                                <th>User Id</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- jQuery -->



<!-- Custom Theme JavaScript -->


<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $('#user-activity').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{route('userActivitygetTableData')}}',
        columnDefs: [{
                targets: "datatable-nosort",
                orderable: false, "bFilter": false
            }],
        columns: [
            {data: 'id', name: 'id'},
            {data: 'activity', name: 'activity'},
            {data: 'allowed', name: 'allowed'},
            {data: 'user_id', name: 'user_id'},
            {data: 'description', name: 'description'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
//            {data: 'action', name: 'action', "bSearchable": false}
        ]
    });
    // Setup - add a text input to each footer cell
    $('#user-activity tfoot th').each(function () {
        var title = $('#user-activity thead th').eq($(this).index()).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    });

    var table = $('#user-activity').DataTable();

    // Apply the search
    table.columns().every(function () {
        var that = this;

        $('input', this.footer()).on('keyup change', function () {
            that.search(this.value).draw();
        });
    });
</script>

</body>

</html>
