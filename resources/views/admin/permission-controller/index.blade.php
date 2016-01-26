


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User Roles</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div id="extradata"></div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Permissions
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
                                    <li> <a type="GET" href="{{route('addUser')}}"><i class="glyphicon glyphicon-user"></i> Add User</a></li>
                                    <li> <a type="GET" href="{{route('getAclRole')}}"><i class="glyphicon glyphicon-tower"></i> Add Role</a></li>
                                    <li> <a type="GET" href="{{route('getAclPremission')}}"><i class="glyphicon glyphicon-tower"></i> Add Permission</a></li>
                                    <li> <a type="GET" href="{{route('refreshPermissionRoutes')}}"><i class="glyphicon glyphicon-tower"></i> Refresh Routes</a></li>
                                </ul>


                            </div>
                            <!--                            <div class="panel-footer">
                                                            Panel Footer
                                                        </div>-->
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <table class="table table-bordered" id="acl-premission-table">
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
                                <th>Id</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th class="datatable-nosort">  Action</th>
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
    $('#acl-premission-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{route('aclGetPremissionTable')}}',
        columnDefs: [{
                targets: "datatable-nosort",
                orderable: false, "bFilter": false
            }],
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'slug', name: 'slug'},
            {data: 'description', name: 'description'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', "bSearchable": false}
        ]
    });
    // Setup - add a text input to each footer cell
    $('#acl-premission-table tfoot th').each(function () {
        var title = $('#acl-role-table thead th').eq($(this).index()).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    });

    // DataTable
    var table = $('#acl-premission-table').DataTable();

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
