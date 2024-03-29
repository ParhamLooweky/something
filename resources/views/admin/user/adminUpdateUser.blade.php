@extends('admin.layout.adminLayout')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">ویرایش کاربر

                        </header>
                        <div class="panel-body">
                            @include('include.showError')
                            @include('include.validationError')

                            <form class="form-horizontal" action="{{ route('updateuserpost', $user->id) }}"
                                  method="post" enctype="multipart/form-data">
                                  @csrf
                                <fieldset title="اطلاعات پایه" class="step" id="default-step-0">
                                    <legend></legend>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Name</label>
                                        <div class="col-lg-10">
                                            <input value="{{ $user->name }}" type="text" required="required"
                                                   oninvalid="this.setCustomValidity('نمیتواند خالی باشد')"
                                                   onchange="this.setCustomValidity('')" name="name"
                                                   class="form-control"
                                                   placeholder="نام و نام خانوادگی خود را وارد کنید">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Phone Number</label>
                                        <div class="col-lg-10">
                                            <input value="{{ $user->phone }}" type="text" required="required"
                                                   oninvalid="this.setCustomValidity('نمیتواند خالی باشد')"
                                                   onchange="this.setCustomValidity('')" name="phone"
                                                   class="form-control" placeholder="شماره تماس خود را وارد کنید">
                                            <div class="help-block with-errors"></div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">پست الکترونیک</label>
                                        <div class="col-lg-10">
                                            <input value="{{ $user->email }}" type="text"
                                                   name="email"
                                                   class="form-control" placeholder="پست الکترونیک خود را وارد کنید">
                                            <div class="help-block with-errors"></div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Password</label>
                                        <div class="col-lg-10">
                                            <input type="text"  name="password"
                                                   class="form-control"
                                                   placeholder="If you want to change your password enter a new one.">
                                            <div class="help-block with-errors"></div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">User status</label>
                                        <div class="col-lg-10">
                                            <select name="status" class="form-control" style="height: 40px">
                                                <option @if($user->status == 0) selected @endif value="0" selected>Deacitve</option>
                                                <option @if($user->status == 1) selected @endif value="1">Active</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label"> User role</label>
                                        <div class="col-lg-10">
                                            <select name="role" class="form-control" style="height: 40px">
                                                    @foreach ($roles as $role )
                                                        <option value="{{ $role->id }}" @if (\App\Models\Tool::userHasRole($role->id, $user->id)) selected @endif >
                                                            
                                                        {{ $role->name }}</option>

                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </fieldset>
                                <input type="submit" class="finish btn btn-danger" value="Accept"/>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('/adminassets')}}/js/jquery.js"></script>
    <script src="{{asset('/adminassets')}}/js/jquery.scrollTo.min.js"></script>
    <script src="{{asset('/adminassets')}}/js/jquery.nicescroll.js" type="text/javascript"></script>



    <!--script for this page-->
    <script src="{{asset('/adminassets')}}/js/jquery.stepy.js"></script>

    <script type="text/javascript" src="{{asset('/adminassets')}}/js/multiselect.js"></script>
    <script type="text/javascript" src="{{asset('/adminassets')}}/js/multiselect.min.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#search1').multiselect({
                search: {
                    left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
                    right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
                }
            });
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#search2').multiselect({
                search: {
                    left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
                    right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
                }
            });
        });
    </script>
    <script src="{{asset('/adminassets')}}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('/adminassets')}}/js/bootstrap-datepicker.fa.min.js"></script>
    <script src="{{asset('/adminassets')}}/js/upload-image.js"></script>

    <script>
        //step wizard

        $(function () {
            $('#default').stepy({
                backLabel: 'قبلی',
                block: true,
                nextLabel: 'بعدی',
                titleClick: true,
                titleTarget: '.stepy-tab'
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#datepicker0").datepicker();

            $("#datepicker_captive").datepicker();
            $("#datepicker_captivebtn").click(function (event) {
                event.preventDefault();
                $("#datepicker_captive").focus();
            })
            $("#datepicker_captive2").datepicker();
            $("#datepicker_captive2btn").click(function (event) {
                event.preventDefault();
                $("#datepicker_captive2").focus();
            })

            $("#datepicker_war").datepicker();
            $("#datepicker_warbtn").click(function (event) {
                event.preventDefault();
                $("#datepicker_war").focus();
            })
            $("#datepicker_war2").datepicker();
            $("#datepicker_war2btn").click(function (event) {
                event.preventDefault();
                $("#datepicker_war2").focus();
            })

            $("#datepicker2").datepicker({
                showOtherMonths: true,
                selectOtherMonths: true
            });

            $("#datepicker3").datepicker({
                numberOfMonths: 3,
                showButtonPanel: true
            });

            $("#datepicker4").datepicker({
                changeMonth: true,
                changeYear: true
            });

            $("#datepicker5").datepicker({
                minDate: 0,
                maxDate: "+14D"
            });

            $("#datepicker6").datepicker({
                isRTL: true,
                dateFormat: "d/m/yy"
            });
        });


    </script>

    <script>
        function showCity(element) {

            var id = document.getElementById("region_id").options[document.getElementById("region_id").selectedIndex].value;
            var link = "http://localhost/jabo/public/cities/" + id;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                document.getElementById("city_id").innerHTML = xmlhttp.responseText;
            }
            xmlhttp.open("GET", link, true);
            xmlhttp.send();
        }
    </script>
    <script>
        function showZone(element) {

            var id = document.getElementById("city_id").options[document.getElementById("city_id").selectedIndex].value;
            var link = "http://localhost/jabo/public/zones/" + id;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                document.getElementById("zone_id").innerHTML = xmlhttp.responseText;
            }
            xmlhttp.open("GET", link, true);
            xmlhttp.send();
        }
    </script>

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
