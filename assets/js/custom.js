$(document).ready(async function () {
  await axiosSample();
  datatableSample();
  dropifySample();
  flatpickrSample();
  formRepeaterSample();
  formValidationSample();
  select2Bootstrap5Sample();
});

async function axiosSample() {
  try {
    const response = await axios.get("https://dummyjson.com/product/1");
    const product = response.data;

    const axiosData = $("#axios-data");
    axiosData.append(`Product Title: ${product.title} <br>`);
    axiosData.append(`Product Description: ${product.description}`);
  } catch (error) {
    console.error("Error fetching data:", error);
  }
}

function blockUiSample() {
  const container = $("#block-ui-sample-container");
  container.block({
    message: '<div class="spinner-border text-primary" role="status"></div>',
    css: {
      backgroundColor: "transparent",
      border: "0",
    },
    overlayCSS: {
      backgroundColor: "#fff",
      opacity: 0.8,
    },
  });
}

function unblockUiSample() {
  const container = $("#block-ui-sample-container");
  container.unblock();
}

function datatableSample() {
  $(".datatable").dataTable();
}

function dropifySample() {
  $(".dropify").dropify({
    messages: {
      default: "Drag and drop or click",
      replace: "Drag and drop or click to replace",
      remove: "Remove",
      error: "",
    },
    error: {
      fileSize: "The file size is too big (5MB max) !",
      fileExtension: "The file extension is invalid (jpg, jpeg, png only) !",
    },
  });
}

function flatpickrSample() {
  $(".datepicker").flatpickr({
    altInput: true,
    altFormat: "j F Y",
    dateFormat: "Y-m-d",
  });
}

function select2Bootstrap5Sample() {
  $(".select2").select2({
    theme: "bootstrap-5",
    width: $(this).data("width") ? $(this).data("width") : $(this).hasClass("w-100") ? "100%" : "style",
    placeholder: "Choose one",
    allowClear: true,
  });
}

function formRepeaterSample() {
  $(".repeater").repeater({
    show: function () {
      $(this).slideDown();
    },
    hide: function (deleteElement) {
      if (confirm("Are you sure you want to delete this element?")) {
        $(this).slideUp(deleteElement);
      }
    },
  });
}

function formValidationSample() {
  const form = document.getElementById("form-validation-sample");

  const fv = FormValidation.formValidation(form, {
    fields: {
      formValidationField: {
        validators: {
          notEmpty: {
            message: "Field cannot be empty !",
          },
        },
      },
    },
    plugins: {
      trigger: new FormValidation.plugins.Trigger(),
      bootstrap5: new FormValidation.plugins.Bootstrap5({
        eleValidClass: "",
        rowSelector: ".mb-3",
      }),

      submitButton: new FormValidation.plugins.SubmitButton(),
      defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
      autoFocus: new FormValidation.plugins.AutoFocus(),
    },
    init: (instance) => {
      instance.on("plugins.message.placed", function (e) {
        if (e.element.parentElement.classList.contains("input-group")) {
          e.element.parentElement.insertAdjacentElement("afterend", e.messageElement);
        }
      });
    },
  }).on("core.form.valid", function () {});
}

function iziToastSample() {
  iziToast.show({
    message: "Hello...",
    color: "blue",
    position: "topRight",
  });
}

function sweetAlertSample() {
  Swal.fire({
    icon: "info",
    text: "Halo...",
  });
}
