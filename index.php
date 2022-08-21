<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Example</title>

    <!-- Jquery 3.6.0 -->
    <script src="jquery/jquery.min.js"></script>

    <!-- Nprogress Css -->
    <link rel="stylesheet" href="nprogress/nprogress.css">
    <!-- Nprogress Js -->
    <script src="nprogress/nprogress.js"></script>

    <!-- Bootstrap Css -->
    <link href="bootstrap-5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Js -->
    <script src="bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="bootstrap-icon/bootstrap-icons.css">

    <!-- Datatable Css -->
    <link href="datatable/css/bootstrap.css" rel="stylesheet">
    <link href="datatable/css/dataTables.bootstrap5.css" rel="stylesheet">
    <!-- Datatable JS -->
    <script src="datatable/js/jquery.dataTables.js"></script>
    <script src="datatable/js/dataTables.bootstrap5.js"></script>

    <!-- Select2 Css -->
    <link href="select2/css/select2.css" rel="stylesheet">
    <link href="select2/css/select2-theme.css" rel="stylesheet">
    <!-- Select2 Js -->
    <script src="select2/js/select2.min.js"></script>

    <!-- Seetalert -->
    <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Izitoast Css -->
    <link rel="stylesheet" href="izitoast/dist/css/iziToast.min.css">
    <!-- Izitoast Js -->
    <script src="izitoast/dist/js/iziToast.min.js"></script>

    <!-- Dropify Css -->
    <link rel="stylesheet" href="dropify/dist/css/dropify.min.css">
    <!-- Dropify Js -->
    <script src="dropify/dist/js/dropify.min.js"></script>

    <!-- Block UI -->
    <script src="block-ui/block-ui.js"></script>

    <!-- Froala PDF Export Js -->
    <script type="text/javascript" src="froala-editor/js/export-pdf.js"></script>
    <!-- Froala Css -->
    <link href="froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <!-- Froala Js -->
    <script type="text/javascript" src="froala-editor/js/froala_editor.pkgd.min.js"></script>

    <!-- Summernote Css -->
    <link href="summernote/summernote-lite.css" rel="stylesheet" type="text/css">
    <!-- Summernote Js -->
    <script type="text/javascript" src="summernote/summernote-lite.js"></script>

    <!-- TinyMCE -->
    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>

    <!-- Flatpickr Css -->
    <link rel="stylesheet" href="flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="flatpickr/dist/themes/material_blue.css">
    <!-- Flatpickr Js -->
    <script src="flatpickr/dist/flatpickr.min.js"></script>

    <!-- Form Repeater -->
    <script src="form-repeater/jquery.repeater.js"></script>
</head>

<?php
include_once('customCss.php');
?>

<body>
    <div class="container mb-5">
        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Contoh Data Table
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
                        Contoh Datepicker
                    </h4>

                    <label for="datepickerExample">
                        Datepicker
                    </label>

                    <input type="text" class="form-control datepicker" name="datepickerExample" id="datepickerExample" placeholder="Pilih tanggal" autocomplete="off">
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Contoh Selectpicker
                    </h4>

                    <label for="selectpickerExample">
                        Selectpicker
                    </label>

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
                        Contoh Dropify
                    </h4>

                    <label for="dopifyExample">
                        Dropify
                    </label>

                    <input type="file" class="form-control dropify" name="dopifyExample" id="dopifyExample">
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Contoh Block UI
                    </h4>

                    <div class="rounded mb-3" id="inputBlockUiContainer">
                        <input type="nama" class="form-control" name="nama" id="nama" placeholder="Masukan Nama" autocomplete="off">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary w-100" onclick="blockUi()">
                                Block UI
                            </button>
                        </div>

                        <div class="col-md-6">
                            <button class="btn btn-primary w-100" onclick="unblockUi()">
                                Unlock UI
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
                        Contoh Toast
                    </h4>

                    <button class="mt-3 btn btn-success w-100" onclick="alertIziToast()">
                        <i class="bi bi-image"></i>
                        Toats
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Contoh Sweetalert
                    </h4>

                    <button class="mt-3 btn btn-danger w-100" onclick="sweetAlert()">
                        Sweetalert
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Froala Texteditor
                    </h4>

                    <textarea class="form-control froala-texteditor" name="froalaTexteditor" id="froalaTexteditor"></textarea>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        Summernote Texteditor
                    </h4>

                    <textarea class="form-control summernote-texteditor" name="summernoteTexteditor" id="summernoteTexteditor"></textarea>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">
                        TinyMCE Texteditor
                    </h4>

                    <textarea class="form-control tinymce-texteditor" name="tinymceTexteditor" id="tinymceTexteditor"></textarea>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">
                        Contoh Form Repeater
                    </h2>

                    <form action="echo.php" class="repeater" enctype="multipart/form-data">
                        <div data-repeater-list="group-a">
                            <div data-repeater-item>
                                <div class="row mb-3">
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="name" id="name" value="Paijo" placeholder="Masukan Nama" autocomplete="off">
                                    </div>

                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger" data-repeater-delete>
                                            Hapus
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="button" class="btn btn-primary" data-repeater-create>
                                Tambah Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.repeater').repeater({
            show: function() {
                $(this).slideDown();
            },
            hide: function(deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            }
        });
    </script>

    <?php
    include_once('nprogress.php');
    include_once('customJs.php');
    ?>

</body>

</html>