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

            // DataTable
            var table = $('#orderTable').DataTable({
                "order": [[0, "desc"]]
            });

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
    <section id="main-content">
        <section class="wrapper">
            <section class="panel">
                <header class="panel-heading">
                    Manage users


                </header>
                <div class="container">


                    <div class="col-xs-12 col-sm-12 col-md-12 table-responsive">
                        <br/>
                        <table id="orderTable" class="table table-striped">
                            <thead>
                            <tr>
                                <th style="text-align: right">ID</th>
                                <th style="text-align: right">First and last name</th>
                                <th style="text-align: right">Phone</th>
                                <th style="text-align: right">Gmail</th>
                                <th style="text-align: right">Role</th>
                                <th style="text-align: right">Status</th>
                                <th style="text-align: right;width: 15%">Possibilities</th>
                            </tr>
                            </thead>
                            <tfoot style="direction: rtl;">
                            <tr>
                                <th style="text-align: right">ID</th>
                                <th style="text-align: right">First and last name</th>
                                <th style="text-align: right">Phone</th>
                                <th style="text-align: right">Gmail</th>
                                <th style="text-align: right">Role</th>
                                <th style="text-align: right">Status</th>
                                <th style="text-align: right;width: 15%">Possibilities</th>
                            </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mahdi Ghiasy</td>
                                    <td>09398932183</td>
                                    <td>##############</td>
                                    <td><p class="label label-default" style="background-color: gold">Admin</p></td>
                                    <td><p class="label label-danger" style="width: 250px">Disabled</p></td>
                                    <td><a class="label label-warning" href="{{ route('updateuser',[1]) }}">Edit</a>
                                    </td>
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
