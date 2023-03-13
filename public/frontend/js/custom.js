/***************************
accordion func in one-occupation & one-occupation-multiple-professions pages
***************************/
const accordion_collapse = document.querySelectorAll(".accordion-collapse");
const wrapper_h_a = document.querySelectorAll(".wrapper-h-a");
if (wrapper_h_a[0]) {
  wrapper_h_a.forEach((e) => {
    e.onclick = function () {
      const s = e.querySelector(".title-ts");
      if (e.classList.contains("collapsed")) {
        s.classList.add("opacity-0");
      } else {
        s.classList.remove("opacity-0");
      }
    };
  });
}

/***************************
show / hide modal in tax-settings page
***************************/
const btn_edit_tax = document.querySelectorAll("[btn-edit-tax]");
const cancel_edit_tax = document.querySelector("[cancel-edit-tax]");
const modal_edit_tax = document.querySelector("[modal-edit-tax]");
if (btn_edit_tax[0]) {
  btn_edit_tax.forEach((e) => {
    e.onclick = () => modal_edit_tax.classList.add("active-modal");
  });

  cancel_edit_tax.onclick = () => cancelEditTaxModal();

  function cancelEditTaxModal() {
    modal_edit_tax.classList.remove("active-modal");
    modal_edit_tax.querySelectorAll("input").forEach((e) => (e.value = ""));
  }

  window.addEventListener("click", function (event) {
    if (event.target.closest("[modal-edit-tax]")) return;
    if (event.target.closest("[btn-edit-tax]")) return;
    cancelEditTaxModal();
  });
}

const btn_addNew_tax = document.querySelector("[btn-addNew-tax]");
const cancel_addNew_tax = document.querySelector("[cancel-addNew-tax]");
const modal_addNew_tax = document.querySelector("[modal-addNew-tax]");

if (btn_addNew_tax) {
  btn_addNew_tax.onclick = function () {
    modal_addNew_tax.classList.add("active-modal");
  };

  cancel_addNew_tax.onclick = () => cancelAddNewTaxModal();

  function cancelAddNewTaxModal() {
    modal_addNew_tax.classList.remove("active-modal");
    modal_addNew_tax.querySelectorAll("input").forEach((e) => (e.value = ""));
  }

  window.addEventListener("click", function (event) {
    if (event.target.closest("[modal-addNew-tax]")) return;
    if (event.target.closest("[btn-addNew-tax]")) return;
    cancelAddNewTaxModal();
  });
}

/***************************
show / hide modal in admin-settings page
***************************/
const btn_addNew_admin = document.querySelector("[btn-addNew-admin]");
const cancel_addNew_admin = document.querySelector("[cancel-addNew-admin]");
const modal_addNew_admin = document.querySelector("[modal-addNew-admin]");

if (btn_addNew_admin) {
  btn_addNew_admin.onclick = function () {
    modal_addNew_admin.classList.add("active-modal");
  };

  cancel_addNew_admin.onclick = () => cancelAdminModal();

  function cancelAdminModal() {
    modal_addNew_admin.classList.remove("active-modal");
    modal_addNew_admin.querySelectorAll("input").forEach((e) => (e.value = ""));
  }

  window.addEventListener("click", function (event) {
    if (event.target.closest("[modal-addNew-admin]")) return;
    if (event.target.closest("[btn-addNew-admin]")) return;
    cancelAdminModal();
  });
}

/***************************
show / hide modal in home
***************************/
const init_add_taxpayer = document.querySelector("[init-add-taxpayer]");
const cancel_taxpayer_modal = document.querySelector("[cancel-taxpayer-modal]");
const addNew_taxpayer_modal = document.querySelector("[addNew-taxpayer-modal]");

if (init_add_taxpayer) {
  init_add_taxpayer.onclick = function () {
    addNew_taxpayer_modal.classList.add("active-modal");
  };

  cancel_taxpayer_modal.onclick = () => cancelTaxpayerModal();

  function cancelTaxpayerModal() {
    addNew_taxpayer_modal.classList.remove("active-modal");
    addNew_taxpayer_modal
      .querySelectorAll("input")
      .forEach((e) => (e.value = ""));
  }

  window.addEventListener("click", function (event) {
    if (event.target.closest("[addNew-taxpayer-modal]")) return;
    if (event.target.closest("[init-add-taxpayer]")) return;
    cancelTaxpayerModal();
  });
}

/***************************
Add new occupation in add-multiple-occupations page
***************************/
HandleAddNewOccupation();
function HandleAddNewOccupation() {
  const btn_addNew_occupation = document.querySelectorAll(
    "[btn-addNew-occupation]"
  );
  const occupations = document.querySelector("#occupations");

  if (btn_addNew_occupation[0]) {
    const count_os = btn_addNew_occupation.length;
    const occupation = `<div class="col-12 col-md-6">
  <div class="wrapper-form">
    <div class="d-flex align-items-center me-4  col-gap-15px form-taxpayer-h">
      <h6 class="me-4 f-a-t-title" style="color: #1e78b4;">بيانات المهنة ${
        count_os + 1
      } للمكلف</h6>
      <button class="f-a-t-action" type="button" btn-addNew-occupation><span class="d-flex align-items-center justify-content-center col-gap-10px"><svg class="d-none" xmlns="http://www.w3.org/2000/svg" width="13.131" height="13.131" viewBox="0 0 13.131 13.131">
  <path id="arrow" d="M0,9.416V0H9.155V.714H.693v8.7Z" transform="translate(6.473 13.131) rotate(-135)" fill="#003d65"/>
  </svg><span>إضافة مهنة؟</span></span></button>
    </div>
    <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
      <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger opacity-0">*</span><span>المهنة:</span></label>
      <input type="text"name="professions[${
        count_os
    }][occupation]">
    </div>
    <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
      <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger opacity-0">*</span><span>العنوان:</span></label>
      <textarea name="professions[${
        count_os
    }][address]"></textarea>
    </div>
    <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
      <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger opacity-0">*</span><span>تاريخ المباشرة:</span></label>
      <input type="text"name="professions[${
        count_os
    }][start_date]">
    </div>
    <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
      <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger opacity-0">*</span><span>تاريخ التبليغ:</span></label>
      <input type="text"name="professions[${
        count_os
    }][notified_date]">
    </div>
  </div>
  </div>`;

    btn_addNew_occupation.forEach((e) => {
      e.onclick = function () {
        occupations.insertAdjacentHTML("beforeend", occupation);
        HandleAddNewOccupation();
      };
    });
  }
}

/***************************
Print functions
***************************/
function printHTML(srcFileHtml) {
  const page = window.open(srcFileHtml, '_blank');
  page.onload = function() {
    page.print();
  };
}