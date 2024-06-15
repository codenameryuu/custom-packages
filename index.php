<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Empample Usage
    </title>

    <!-- // * Font Popins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- // * Bootstrap 5.3 -->
    <link rel="stylesheet" href="assets/libraries/bootstrap-5.3/css/bootstrap.css">
    <script src="assets/libraries/bootstrap-5.3/js/bootstrap.bundle.js"></script>

    <!-- // * Jquery -->
    <script src="assets/libraries/jquery/js/jquery.js"></script>

    <!-- // * Animate -->
    <link rel="stylesheet" href="assets/libraries/animate/css/animate.css">

    <!-- // * Axios -->
    <script src="assets/libraries/axios/js/axios.js"></script>

    <!-- // * Block UI -->
    <script src="assets/libraries/block-ui/js/block-ui.js"></script>

    <!-- // * Centrifuge -->
    <script src="assets/libraries/centrifuge/js/centrifuge.js"></script>

    <!-- // * Datatable -->
    <link rel="stylesheet" href="assets/libraries/datatable/css/bootstrap.css">
    <link rel="stylesheet" href="assets/libraries/datatable/css/dataTables.bootstrap5.css">
    <script src="assets/libraries/datatable/js/jquery.dataTables.js"></script>
    <script src="assets/libraries/datatable/js/dataTables.bootstrap5.js"></script>

    <!-- // * Dropify -->
    <link rel="stylesheet" href="assets/libraries/dropify/css/dropify.css">
    <script src="assets/libraries/dropify/js/dropify.js"></script>

    <!-- // * Feather Icon -->
    <script src="assets/libraries/feather-icons/feather.js"></script>

    <!-- // * Flatpickr -->
    <link rel="stylesheet" href="assets/libraries/flatpickr/css/flatpickr.css">
    <link rel="stylesheet" href="assets/libraries/flatpickr/themes/material_blue.css">
    <script src="assets/libraries/flatpickr/js/flatpickr.js"></script>

    <!-- // * Form Repeater -->
    <script src="assets/libraries/form-repeater/js/form-repeater.js"></script>

    <!-- // * Form Validation -->
    <link rel="stylesheet" href="assets/libraries/form-validation/css/formValidation.css">
    <script src="assets/libraries/form-validation/js/FormValidation.js"></script>
    <script src="assets/libraries/form-validation/js/plugins/Bootstrap5.js"></script>
    <script src="assets/libraries/form-validation/js/plugins/AutoFocus.js"></script>

    <!-- // * Izi Toats -->
    <link rel="stylesheet" href="assets/libraries/izitoast/css/iziToast.css">
    <script src="assets/libraries/izitoast/js/iziToast.js"></script>

    <!-- // * Nprogress -->
    <link rel="stylesheet" href="assets/libraries/nprogress/css/nprogress.css">
    <script src="assets/libraries/nprogress/js/nprogress.js"></script>

    <!-- // * Select2 Bootstrap 5 -->
    <link rel="stylesheet" href="assets/libraries/select2-bootstrrap-5/css/select2.css">
    <link rel="stylesheet" href="assets/libraries/select2-bootstrrap-5/css/select2-theme.css">
    <script src="assets/libraries/select2-bootstrrap-5/js/select2.js"></script>

    <!-- // * Sweetalert -->
    <link rel="stylesheet" href="assets/libraries/sweetalert2/css/sweetalert2.css">
    <script src="assets/libraries/sweetalert2/js/sweetalert2.js"></script>

    <!-- // * Custom Css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="container mb-5">
        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center animate__animated animate__fadeIn">
                        Animate Css
                    </h4>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Axios
                    </h4>

                    <p id="axios-data"></p>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Block UI
                    </h4>

                    <div class="mb-2" id="block-ui-sample-container">
                        <input type="text" class="form-control" id="block-ui-sample" value="Some Text...">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary w-100" onclick="blockUiSample()">
                                Block
                            </button>
                        </div>

                        <div class="col-md-6">
                            <button class="btn btn-success w-100" onclick="unblockUiSample()">
                                Unblock
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Datatable
                    </h4>

                    <table class="table table-striped table-hover datatable">
                        <thead class="text-center">
                            <tr>
                                <th>
                                    No
                                </th>

                                <th>
                                    Nama
                                </th>
                            </tr>
                        </thead>

                        <tbody class="text-center">
                            <tr>
                                <td>
                                    1
                                </td>

                                <td>
                                    Tes Data
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Dropify
                    </h4>

                    <input type="file" class="form-control dropify" name="dopifyExample" id="dopifyExample">
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Feather Icon
                    </h4>

                    <h2 class="text-center">
                        <i data-feather="edit"></i>
                    </h2>

                    <script>
                        feather.replace();
                    </script>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Flatpickr
                    </h4>

                    <input type="text" class="form-control datepicker" name="datepickerExample" id="datepickerExample" placeholder="Choose Date" autocomplete="off">
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Form Repeater
                    </h4>

                    <form action="echo.php" class="repeater" enctype="multipart/form-data">
                        <div data-repeater-list="group-a">
                            <div data-repeater-item>
                                <div class="row mb-3">
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="formRepeaterField" id="form-repeater-field" placeholder="Some Text" autocomplete="off">
                                    </div>

                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger" data-repeater-delete>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="button" class="btn btn-primary" data-repeater-create>
                                Add Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Form Validation
                    </h4>

                    <form id="form-validation-sample" action="javascript:void(0)" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="formValidationField" id="form-validation-field" placeholder="Some Text...">
                        </div>

                        <button class="btn btn-primary w-100">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Izi Toast
                    </h4>

                    <button class="btn btn-success w-100" onclick="iziToastSample()">
                        Izi Toats
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Select 2 Bootstrap 5
                    </h4>

                    <select class="form-control select2" name="selectpickerExample" id="selectpickerExample">
                        <option value="Pilihan 1">
                            Pilihan 1
                        </option>

                        <option value="Pilihan 2">
                            Pilihan 2
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Sweetalert
                    </h4>

                    <button class="btn btn-danger w-100" onclick="sweetAlertSample()">
                        Sweetalert
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        NProgress.inc();

        NProgress.start();
        window.onload = function() {
            NProgress.done();
        }
    </script>

    <script src="assets/js/custom.js"></script>
</body>

</html>