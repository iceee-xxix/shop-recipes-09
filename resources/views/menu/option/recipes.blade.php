@extends('admin.layout')
@section('style')
<style>
    .ck-editor__editable {
        min-height: 400px !important;
    }
</style>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 col-md-12 order-1">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <form action="{{route('menuOptionRecipesSave')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    สูตรอาหาร
                                    <hr>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3 mb-3">
                                        <div class="col-md-12">
                                            <label for="name" class="form-label">รายละเอียดสูตร : </label>
                                            <textarea class="form-control" name="detail" id="detail"><?= ($info) ? $info->detail : '' ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end">
                                    <button type="submit" class="btn btn-outline-primary">บันทึก</button>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?= ($id) ? $id : '' ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        ClassicEditor
            .create(document.querySelector("#detail"))
            .then(editor => {
                editor.ui.view.editable.element.style.minHeight = "400px";
                editor.ui.view.editable.element.style.height = "400px";
            })
            .catch(error => {
                console.error("CKEditor error:", error);
            });
    });
</script>
@endsection