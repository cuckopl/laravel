


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
                <?php echo $data->routes->getControllerName() ?> CRUD gen 1.0
            </div>
            <div class="panel-body">
                <ul class="nav nav-pills dataTable_wrapper">
                    <li> <a type="GET" href="{{route('<?php echo $data->routes->aliases['create'] ?>')}}"><i class="glyphicon glyphicon-tower"></i> Add</a></li>
                </ul>


            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-bordered" id="user-activity">
                        <tfoot>
                            <?php foreach ($data->tableColumns as $column): ?>
                            <th></th>
                        <?php endforeach; ?>
                        </tfoot>
                        <thead>
                            <tr>
                                <?php foreach ($data->tableColumns as $column): ?>
                                    <th>  <?php echo $column ?></th>
                                <?php endforeach; ?>
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
            ajax: '{{route('<?php echo $data->routes->getDataTableRoute() ?>')}}',
            columnDefs: [{
            targets: "datatable-nosort",
                    orderable: false, "bFilter": false
            }],
            columns: [
<?php foreach ($data->tableColumns as $column): ?>

                {data: '<?php echo $column ?>', name: '<?php echo $column ?>'},
<?php endforeach; ?>

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
