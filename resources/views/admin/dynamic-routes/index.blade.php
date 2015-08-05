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
                Dynamic Routes CRUD
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
                        <th></th>
                        </tfoot>
                        <thead>
                            <tr>
                                <th>  id</th>
                                <th>  name</th>
                                <th>  as</th>
                                <th>  code_eval</th>
                                <th>  module_id</th>
                                <th>  created_at</th>
                                <th>  updated_at</th>
                                <th>action</th>
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
        ajax: '{{route('DynamicRoutesDataTable')}}',
        columnDefs: [{
                targets: "datatable-nosort",
                orderable: false, "bFilter": false
            }],
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'code_eval', name: 'code_eval'},
            {data: 'module_id', name: 'module_id'},
            {data: 'as', name: 'as'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', "bSearchable": false}
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
