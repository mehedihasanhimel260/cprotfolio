@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row bg-secondary rounded justify-content-center mx-0">

            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Web Settings</h6>
                    <form action="{{ route('web-settings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="text" class="form-label">Title</label>
                            <input type="text" class="form-control" value="{{ $WebSettings->title }}" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Sub Title</label>
                            <input type="text" class="form-control" value="{{ $WebSettings->sub_title }}"
                                name="sub_title">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Description</label>
                            <textarea id="myTextarea" name="description" class="form-control" placeholder="Leave a Description here"
                                id="floatingTextarea">{{ $WebSettings->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Fav Icom</label>
                            <input type="file" class="form-control" name="fav_icon">
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset($WebSettings->fav_icon) }}" width="200px" height="150px">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Logo</label>
                            <input type="file" class="form-control" name="logo">
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset($WebSettings->logo) }}" width="200px" height="150px">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Mobile Logo</label>
                            <input type="file" class="form-control" name="mobile_logo">
                        </div>

                        <div class="mb-3">
                            <img src="{{ asset($WebSettings->mobile_logo) }}" width="200px" height="150px">
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Contact 1</label>
                            <input type="number" class="form-control" value="{{ $WebSettings->contact_1 }}"
                                name="contact_1">
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Contact 2</label>
                            <input type="number" class="form-control" value="{{ $WebSettings->contact_2 }}"
                                name="contact_2">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email 1</label>
                            <input type="email" class="form-control" value="{{ $WebSettings->email_1 }}" name="email_1">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email 2</label>
                            <input type="email" class="form-control" value="{{ $WebSettings->email_2 }}" name="email_2">
                        </div>

                        <div class="mb-3">
                            <label for="text" class="form-label">Map</label>
                            <textarea name="map" class="form-control" placeholder="Leave a Description here" style="height: 150px;"
                                id="floatingTextarea"><iframe src="{{ $WebSettings->map }}"></iframe></textarea>
                        </div>
                        <iframe src="{{ $WebSettings->map }}" width="400" height="150" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="mb-3">
                            <label for="text" class="form-label">Social Link 1</label>
                            <input type="text" class="form-control" value="{{ $WebSettings->social_link_1 }}"
                                name="social_link_1">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Social Link 2</label>
                            <input type="text" class="form-control" value="{{ $WebSettings->social_link_2 }}"
                                name="social_link_2">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Social Link 3</label>
                            <input type="text" class="form-control" value="{{ $WebSettings->social_link_3 }}"
                                name="social_link_3">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Social Link 4</label>
                            <input type="text" class="form-control" value="{{ $WebSettings->social_link_4 }}"
                                name="social_link_4">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Social Link 5</label>
                            <input type="text" class="form-control" value="{{ $WebSettings->social_link_5 }}"
                                name="social_link_5">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Wrking Time</label>
                            <input type="text" class="form-control" value="{{ $WebSettings->working_time }}"
                                name="working_time">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Background image</label>
                            <input type="file" name="bg_image" id="category" class="form-control bg-dark"
                                aria-describedby="category" id="file-ip-1" accept="image/*"
                                onchange="showPreview(event);">
                        </div>
                        <div class="mb-3">
                            <img id="file-ip-1-preview" src="{{ asset($WebSettings->bg_image) }}"  width="200px" height="150px">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
                preview.style.width = "200px";
                preview.style.height = "150px";
            }
        }
    </script>
@endsection
