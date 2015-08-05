<!--data table wraper makes all hrefs are added jquery-->
<div class="dataTable_wrapper"> 

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Code Builder</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div id="extradata"></div>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="huge"><i class="fa fa-comments fa-1x"></i></div>
                            <div>Add Module</div>
                        </div>
                    </div>
                </div>
                <a href="{{route('codeBuilderCreate')}}">
                    <div class="panel-footer">
                        <span class="col-md-12 text-center"><i class="fa fa-plus "></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="huge"><i class="fa fa-comments fa-1x"></i></div>
                            <div>Add Module</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="col-md-12 text-center"><i class="fa fa-plus "></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="huge"><i class="fa fa-comments fa-1x"></i></div>
                            <div>Add Module</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="col-md-12 text-center"><i class="fa fa-plus "></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="huge"><i class="fa fa-comments fa-1x"></i></div>
                            <div>Add Module</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="col-md-12 text-center"><i class="fa fa-plus "></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
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
                            Installed Modules
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
                                            <th>  id</th>
                                            <th>  name</th>
                                            <th>  table_name</th>
                                            <th>  description</th>
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
                    ajax: '{{route('codebuilderDataTable')}}',
                    columnDefs: [{
                            targets: "datatable-nosort",
                            orderable: false, "bFilter": false
                        }],
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'name', name: 'name'},
                        {data: 'table_name', name: 'table_name'},
                        {data: 'description', name: 'description'},
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

        </div>
        <!-- /.col-lg-12 -->
    </div>

</div>