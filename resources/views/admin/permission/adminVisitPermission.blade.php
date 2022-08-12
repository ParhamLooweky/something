@extends('admin.layout.adminLayout')

@section('content')
    <style type="text/css" class="init">

        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }

    </style>
    <script type="text/javascript" language="javascript" src="{{asset('admin')}}/js/jq.dataTable.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="{{asset('admin')}}/js/dataTables.bootstrap.min.js">
    </script>
    <script>
        $(document).ready(function () {
            // Setup - add a text input to each footer cell
            $('#orderTable tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<input class="form-control input-sm" type="text" placeholder="' + title + '" />');
            });

            // DataTables
            var table = $('#orderTable').DataTable();

            // Apply the search
            table.columns().every(function () {
                var that = this;

                $('input', this.footer()).on('keyup change', function () {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });
    </script>
    <section style="background-color:#181818" id="main-content">
        <section style="background-color:#181818"  class="wrapper">
            <section style="background-color:#181818"   class="panel">
                <header style="background-color:#181818"  class="panel-heading">
                Manage levels of accesss


                </header>
                <div style="background-color:#181818" class="container">


                    <div style="background-color: background-color:#181818  " class="col-xs-12 col-sm-12 col-md-12 table-responsive">
                        <br/>

                        <table style="background-color:#181818"   id="orderTable" class="table table-striped">
                            <thead>
                            <tr style="background-color:#181818" >
                                <th style="text-align: left;background-color:#181818">ID</th>
                                <th style="text-align: left;background-color:#181818">Access name</th>
                                <th class="hidden-phone" style="text-align: left;background-color:#181818">Description</th>
                                <th class="hidden-phone" style="text-align: left;background-color:#181818">Permissions</th>
                            </tr>
                            </thead>
                            <tfoot style="direction: rtl;">
                            <tr>
                                <th style="text-align: left;background-color: rgba(30, 30, 30, 1 )">ID</th>
                                <th style="text-align: left; background-color: rgba(30, 30, 30, 1 )">Access name</th>
                                <th class="hidden-phone" style="text-align: left;background-color: rgba(30, 30, 30, 1 )">Description</th>
                                <th class="hidden-phone" style="text-align: left;background-color: rgba(30, 30, 30, 1 )">Permissions</th>
                            </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td style="background-color:#181818; color:white;" >1</td>
                                    <td style="background-color:#181818; color:white;"   class="hidden-phone">Normal access</td>
                                    <td style="background-color:#181818; color:white;"  class="hidden-phone">free-access</td>
                                    <td style="background-color:#181818; color:white;  >
                                        <a class="label label-danger"" data-toggle="modal"
                                           href="#myModal1">Delete</a>
                                        <a class="label label-success"
                                           href="{{ route('updateperm',[1]) }}">Update</a>
                                    </td>

                                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog"
                                         aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                    <h4 class="modal-title">Deleting Access level</h4>
                                                </div>
                                                <div class="modal-body">
													Are you sure you want to do this?
                                                </div>
                                                <div class="modal-footer">
                                                    <button href="{{ route('permvisit') }}" data-dismiss="modal" class="btn btn-warning" type="button">
															Go back
                                                    </button>
                                                    <a href="{{ route('deletepermission') }}" class="btn btn-danger" type="button">Yes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


            </section>
        </section>
    </section>

    <script>

        //owl carousel

        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

            });
        });

        //custom select box

        $(function () {
            $('select.styled').customSelect();
        });

    </script>
@endsection
