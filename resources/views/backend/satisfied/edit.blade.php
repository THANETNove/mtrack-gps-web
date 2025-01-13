@extends('layouts.app')

@section('content')
    <div class="content-body">



        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Satisfied</h4>
                        <form method="POST" action="{{ route('satisfied-update', $dataHeadHomes->id) }}"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                            <div class="basic-form mb-3">

                                <div class="form-group">
                                    <p id="errorMessage" class="mt-3">กรุณาอัปโหลดภาพขนาด 56.01*65*56
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
                                    @if ($dataHeadHomes->image)
                                        <img src="{{ URL::asset($dataHeadHomes->image) }}" alt="Image" id="img-edit"
                                            class="img-fluid" width="200" height="200">
                                    @endif
                                    <div id="imagePreview" style="margin-top: 15px;">
                                        <!-- Preview will be displayed here -->
                                    </div>
                                </div>

                            </div>

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
                document.getElementById('img-edit').style.display = 'none';
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