<script>
    $(document).ready(function() {
        loadDatatableClientSide();
        loadDatepicker();
        loadSelect2();
        loadTextEditor();
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
        let froalaTexteditor = new FroalaEditor('.froala-texteditor', {
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
                froalaTexteditor.edit.off();
            }
        });

        $('.summernote-texteditor').summernote({});

        tinymce.init({
            selector: '.tinymce-texteditor',
            height: 400,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount', 'emoticons'
            ],
            menubar: false,
            toolbar: 'undo redo | fontfamily fontsize | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | emoticons link image | fullscreen preview code',
            images_upload_handler: function(blobInfo, success, failure) {
                var xhr, formData;
                var token = '{{ csrf_token() }}';
                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', '/home/profile/about/img');
                xhr.setRequestHeader("X-CSRF-Token", token);
                xhr.onload = function() {
                    var json;
                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }
                    json = JSON.parse(xhr.responseText);

                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }
                    success(json.location);
                };
                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                xhr.send(formData);
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });
    }

    function confirmSubmit(form, buttonId) {
        Swal.fire({
            icon: 'question',
            text: 'Apakah anda yakin ingin menyimpan data ini ?',
            showCancelButton: true,
            buttonsStyling: false,
            customClass: {
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-secondary margin-cancel-button',
            },
            confirmButtonText: 'Simpan',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                let button = 'btnSubmit';
                let loading =
                    '<span class="me-2 text-white spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Simpan';

                if (buttonId) {
                    button = buttonId;
                }

                $('#' + button).attr('disabled', 'disabled');
                $('#' + button).html(loading);
                form.submit();
            }
        });
    }

    function confirmDeleteData(id) {
        Swal.fire({
            icon: 'question',
            text: 'Apakah anda yakin ingin menghapus data ini ?',
            showCancelButton: true,
            buttonsStyling: false,
            customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-secondary margin-cancel-button',
            },
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("deleteForm" + id).submit();
                loadingScreen();
            }
        });
    }

    function inputNumber() {
        return /[0-9]/i.test(event.key);
    }

    function formatNumber(input) {
        let = number = $('#' + input).val();
        number = number.toString();
        number = number.replace(/[^,\d]/g, '').toString();

        let split = number.split(',');
        let temp = split[0].length % 3;

        number = split[0].substr(0, temp);

        let thousand = split[0].substr(temp).match(/\d{3}/gi);

        if (thousand) {
            let separator = temp ? '.' : '';
            number += separator + thousand.join('.');
        }

        number = split[1] != undefined ? number + ',' + split[1] : number;

        $('#' + input).val(number);
    }

    function isEmail(email) {
        let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
</script>