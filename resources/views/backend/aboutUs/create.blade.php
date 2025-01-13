@extends('layouts.app')

@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">AboutUs</h4>
                        <form method="POST" action="{{ route('about-us-store') }}" enctype="multipart/form-data">

                            @csrf
                            <div class="basic-form mb-3">

                                <div class="form-group">
                                    <p id="errorMessage" class="mt-3">กรุณาอัปโหลดภาพขนาด 510*636
                                        เท่านั้น</p>
                                    <input type="file" id="imageInput"
                                        class="form-control-file @error('image') is-invalid @enderror" name="image"
                                        placeholder="image" accept="image/*">
                                    @error('image')
                                        <span class="invalid-feedback mt-3" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <div id="imagePreview" style="margin-top: 15px;">
                                        <!-- Preview will be displayed here -->
                                    </div>
                                </div>

                            </div>
                            <textarea class="form-control editor @error('details') is-invalid @enderror" style="height: 500px;"
                                placeholder="รายละเอียด เขียนอิสระ เช่น สถานที่สำคัญ ใกล้เคียง หรือรายละเอียดอื่น ๆ ที่ไม่ได้กรอกไว้"
                                name="details">{{ old('details') }} </textarea>
                            @error('details')
                                <span class="invalid-feedback mt-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-group mt-4">
                                <button class="btn login-form__btn submit">Save</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>

    <script>
        document.getElementById('imageInput').addEventListener('change', function(event) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.innerHTML = ''; // Clear previous preview

            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '200px'; // Adjust as needed
                    img.style.maxHeight = '200px'; // Adjust as needed
                    img.alt = 'Uploaded Image Preview';
                    imagePreview.appendChild(img);
                };

                reader.readAsDataURL(file);
            }
        });

        document.getElementById('imageInput').addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                const img = new Image();
                img.onload = function() {
                    const width = img.width;
                    const height = img.height;

                    // ตรวจสอบขนาดภาพ
                    if (width === 1900 && height === 1253) {
                        document.getElementById('errorMessage').style.display = 'none';
                        console.log('ภาพมีขนาดถูกต้อง');
                    }
                    /* else {
                                           document.getElementById('errorMessage').style.display = 'block';
                                           event.target.value = ''; // ล้างค่าถ้าขนาดไม่ถูกต้อง
                                       } */
                };

                img.src = URL.createObjectURL(file); // โหลดภาพเพื่อตรวจสอบขนาด
            }
        });

        /*  document.getElementById('uploadForm').addEventListener('submit', function(event) {
             if (document.getElementById('imageInput').value === '') {
                 event.preventDefault(); // ป้องกันการอัปโหลดถ้าภาพไม่ถูกต้อง
                 alert('กรุณาเลือกภาพที่มีขนาด 1900x1253');
             }
         }); */
    </script>
@endsection
