<!--begin::Modal - Update user details-->
<div class="modal fade" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1">
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-15 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_update_details" class="form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Tambah Berita</h1>
                        <div class="text-muted fw-semibold fs-5">Tambahkan buletin sesuai edisi yang terbit.</div>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <div class="row mb-10">
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold form-label mb-2">Judul</label>
                            <!--end::Label-->
                            <!--begin::Row-->
                            <div class="row fv-row">
                                <!--begin::Col-->
                                <div class="col-12">
                                    <input type="text" name="judul" id="judul" class="form-control mb-3"
                                        placeholder="Judul" required autocomplete="judul">
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <div class="col-md-4 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                <span class="required">Penulis</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="text" class="form-control " minlength="1" placeholder="Penulis"
                                    name="penulis" />
                                <!--end::Input-->
                                <!--begin::CVV icon-->
                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                    <i class="ki-outline ki-book fs-1">
                                    </i>
                                </div>
                                <!--end::CVV icon-->
                            </div>
                            <!--end::Input wrapper-->
                        </div>
                        <!--begin::Col-->
                        <div class="col-md-8 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold form-label mb-2">Tanggal Berita</label>
                            <!--end::Label-->
                            <!--begin::Row-->
                            <div class="row fv-row">
                                <!--begin::Col-->
                                <div class="col-12">
                                    <input type="text" name="tanggal_berita" id="tanggal_berita"
                                        class="form-control mb-3" placeholder="Tanggal Berita" required
                                        autocomplete="tanggal_berita">
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <div>
                            <label class="required fs-6 fw-semibold form-label mb-2">Konten</label>
                            <!-- Toolbar -->
                            <div id="kt_docs_ckeditor_document_toolbar"></div>

                            <!-- CKEditor Container -->
                            <div id="kt_docs_ckeditor_document"></div>

                            {{-- <input type="text" class="form-control " minlength="1" placeholder="Konten"
                                name="content" equired autocomplete="content"> --}}
                            <!-- Hidden Textarea (to hold the content) -->

                            <input type="hidden" name="content" id="content-input" class="form-control mb-3"
                                placeholder="Konten" required autocomplete="content" style="display:none;">
                        </div>



                        <!--end::Col-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-12">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Gambar Berita</label>
                            <!--end::Label-->
                            <!--begin::Image placeholder-->
                            <input type="file" name="gambar" id="gambar" class="form-control mb-3 mb-lg-0" required
                                autocomplete="gambar">
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">File memiliki format: pdf.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group-->
                        <div class="text-center">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                            {{-- <button class="btn btn-primary"> --}}
                                <button type="submit" class="btn btn-primary">
                                    <span class="indicator-label">Simpan</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                        </div>
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->

            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - Update user details-->

<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/decoupled-document/ckeditor.js"></script>
<script src="admin/assets/plugins/global/plugins.bundle.js"></script>
<script src="admin/assets/js/custom/utilities/modals/bidding.js"></script>


{{-- <script>
    $("#tanggal").flatpickr({
        dateFormat: "j F Y",
    });
</script> --}}
<script>
    let editor; // Variabel global untuk menyimpan instance editor
DecoupledEditor
.create(document.querySelector('#kt_docs_ckeditor_document'))
.then(editorInstance => {
editor = editorInstance; // Simpan instance editor ke variabel global

const toolbarContainer = document.querySelector('#kt_docs_ckeditor_document_toolbar');
toolbarContainer.appendChild(editor.ui.view.toolbar.element);
})
.catch(error => {
console.error('Error initializing editor:', error);
});
    // Handle form submit
document.querySelector('#kt_modal_update_details').addEventListener('submit', (e) => {

e.preventDefault(); // Hindari submit default untuk testing

if (editor) {
document.querySelector('#content-input').value = editor.getData();
console.log('Editor Data:', editor.getData());
e.target.submit();
} else {
console.error('Editor is not initialized yet!');
}
});
</script>




{{-- @include('sweetalert::alert') --}}
