<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>

    <!-- Jquery 3.6.0 -->
    <script src="jquery/jquery.min.js"></script>

    <!-- Bootstrap Css -->
    <link href="bootstrap-5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Js -->
    <script src="bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="bootstrap-icon/bootstrap-icons.css">

    <!-- Datatable Css -->
    <link rel="stylesheet" type="text/css" href="datatable/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="datatable/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="datatable/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="datatable/css/rowGroup.bootstrap5.min.css">
    <!-- Datatable JS -->
    <script src="datatable/js/jquery.dataTables.min.js"></script>
    <script src="datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="datatable/js/dataTables.responsive.min.js"></script>
    <script src="datatable/js/responsive.bootstrap5.min.js"></script>
    <script src="datatable/js/datatables.checkboxes.min.js"></script>
    <script src="datatable/js/datatables.buttons.min.js"></script>
    <script src="datatable/js/jszip.min.js"></script>
    <script src="datatable/js/pdfmake.min.js"></script>
    <script src="datatable/js/vfs_fonts.js"></script>
    <script src="datatable/js/buttons.html5.min.js"></script>
    <script src="datatable/js/buttons.print.min.js"></script>
    <script src="datatable/js/dataTables.rowGroup.min.js"></script>

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

    <!-- Flatpickr Css -->
    <link rel="stylesheet" href="flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="flatpickr/dist/themes/material_blue.css">
    <!-- Flatpickr Js -->
    <script src="flatpickr/dist/flatpickr.min.js"></script>

</head>

<style>
    body {
        background-color: #a7a8a8;
    }

    .card {
        border-radius: 20px;
        padding: 20px;
    }

    /* Css untuk input class datepicker */
    .datepicker {
        background-color: white !important;
    }

    /* Css untuk loader block ui */
    .blockMsg {
        background-color: transparent !important;
        color: white !important;
        border: 0 !important;
    }
</style>

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
                        Contoh Texteditor
                    </h4>

                    <label for="texteditorExample">
                        Konten
                    </label>

                    <textarea class="form-control texteditor" name="konten" id="konten"></textarea>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            loadDatatableClientSide();
            loadDatepicker();
            loadSelect2();
            loadDropify();
        });
    </script>

    <script>
        function loadDatatableClientSide() {
            if ($('.datatable').length) {
                $('.datatable').dataTable();
            }
        }

        function loadDatatableServerSide() {
            if ($('.datatable-serverside').length) {
                $('.datatable-serverside').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ url('/master-data/profesi/datatable') }}",
                    columnDefs: [{
                            targets: 0,
                            className: 'control',
                            orderable: false,
                            responsivePriority: 2
                        },

                        {
                            targets: "_all",
                            className: 'text-center',
                        },
                    ],
                    columns: [{
                            data: 'detail',
                            name: 'detail'
                        },

                        {
                            data: 'id',
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },

                        {
                            data: 'name',
                            name: 'name'
                        },

                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],
                    responsive: {
                        details: {
                            display: $.fn.dataTable.Responsive.display.modal(),
                            type: 'column',
                            renderer: function(api, rowIdx, columns) {
                                let data = $.map(columns, function(col, i) {
                                    return col.title !==
                                        '' ?
                                        '<tr data-dt-row="' +
                                        col.rowIdx +
                                        '" data-dt-column="' +
                                        col.columnIndex +
                                        '">' +
                                        '<td>' +
                                        col.title +
                                        ':' +
                                        '</td> ' +
                                        '<td>' +
                                        col.data +
                                        '</td>' +
                                        '</tr>' :
                                        '';
                                }).join('');

                                return data ? $('<table class="table">').append('<tbody>' + data +
                                    '</tbody>') : false;
                            }
                        }
                    }
                });
            }
        }

        function loadDatepicker() {
            if ($('.datepicker').length) {
                $('.datepicker').flatpickr({
                    altInput: true,
                    altFormat: "j F Y",
                    dateFormat: "Y-m-d"
                });
            }
        }

        function loadSelect2() {
            if ($('.select2').length) {
                $('.select2').select2({
                    theme: "bootstrap-5",
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                    placeholder: 'Choose one',
                    allowClear: true
                });
            }
        }

        function loadDropify() {
            if ($('.dropify').length) {
                $('.dropify').dropify({
                    messages: {
                        'default': 'Drag and drop or click',
                        'replace': 'Drag and drop or click to replace',
                        'remove': 'Remove',
                        'error': ''
                    },
                    error: {
                        'fileSize': 'The file size is too big (5MB max) !',
                        'fileExtension': 'The file extension is invalid (jpg, jpeg, png only) !',
                    }
                });
            }
        }

        function blockUi() {
            let loading =
                '<span class="text-white spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';

            $("#inputBlockUiContainer").block({
                message: loading,
            });
        }

        function unblockUi() {
            $("#inputBlockUiContainer").unblock();
        }

        function alertIziToast() {
            iziToast.show({
                message: "Selamat Datang...",
                color: 'blue',
                position: 'topRight'
            });
        }

        function sweetAlert() {
            Swal.fire({
                icon: 'info',
                text: 'Halo...',
            })
        }

        function loadTextEditor(status) {
            let editor = new FroalaEditor('.texteditor', {
                heightMin: 200,
                heightMax: 400,
                attribution: false,
                fileAllowedTypes: ['jpg', 'jpeg', 'png'],
                fontSizeUnit: 'pt',
                imageResizeWithPercent: true,
                placeholderText: 'Type something...',
                quickInsertButtons: [],
                toolbarButtons: {
                    moreMisc: {
                        buttons: ['undo', 'redo', 'fullscreen', 'print', 'getPDF', 'selectAll', 'html'],
                        align: 'left',
                        buttonsVisible: 3
                    },

                    moreText: {
                        buttons: ['bold', 'italic', 'underline', 'fontFamily', 'fontSize', 'textColor',
                            'strikeThrough',
                            'subscript', 'superscript', 'backgroundColor', 'inlineClass', 'inlineStyle',
                            'clearFormatting'
                        ],
                        align: 'left',
                        buttonsVisible: 3
                    },

                    moreParagraph: {
                        buttons: ['alignLeft', 'alignCenter', 'alignRight', 'alignJustify',
                            'formatOL', 'formatUL', 'paragraphFormat', 'paragraphStyle', 'lineHeight',
                            'outdent',
                            'indent'
                        ],
                        align: 'left',
                        buttonsVisible: 4
                    },

                    moreRich: {
                        buttons: ['insertLink', 'insertImage', 'insertVideo', 'insertTable', 'emoticons',
                            'fontAwesome',
                            'specialCharacters', 'embedly', 'insertFile', 'insertHR'
                        ],
                        align: 'left',
                        buttonsVisible: 2
                    },
                }
            }, function() {
                if (status == 'readonly') {
                    editor.edit.off();
                }
            });

        }
    </script>

</body>

</html>