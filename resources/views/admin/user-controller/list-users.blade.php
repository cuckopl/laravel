


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tables</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div id="extradata"></div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Users Table Dynamic Loaded By Ajax
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Avaible options
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-pills">
                                    <li> <a type="GET" href="{{route('addUser')}}"><i class=" fa fa-folder"></i> Add User</a></li>
                                    <li> <a type="GET" href="{{route('addUser')}}"><i class=" fa fa-folder"></i> Add User</a></li>
                                    <li> <a type="GET" href="{{route('addUser')}}"><i class=" fa fa-folder"></i> Add User</a></li>
                                    <li> <a type="GET" href="{{route('addUser')}}"><i class=" fa fa-folder"></i> Add User</a></li>
                                </ul>


                            </div>
                            <!--                            <div class="panel-footer">
                                                            Panel Footer
                                                        </div>-->
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <table class="table table-bordered" id="users-table">
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
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th class="datatable-nosort">  Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.table-responsive -->
                <div class="well">
                    <h4>DataTables Usage Information</h4>
                    <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                    <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                </div>
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
    console.log('Attached Script LISTENER USER');
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{route('getUsersData')}}',
        columnDefs: [{
                targets: "datatable-nosort",
                orderable: false, "bFilter": false
            }],
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', "bSearchable": false}
        ]
    });
    // Setup - add a text input to each footer cell
    $('#users-table tfoot th').each(function () {
        var title = $('#users-table thead th').eq($(this).index()).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    });

    // DataTable
    var table = $('#users-table').DataTable();

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
