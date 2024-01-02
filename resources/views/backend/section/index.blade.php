@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row bg-secondary rounded justify-content-center mx-0">

            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">Section Create Form</h6>
                    <form action="{{ route('section.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label"> Title </label>
                            <input type="text" class="form-control" name="title" id="category"
                                aria-describedby="category">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Sub Title </label>
                            <input type="text" class="form-control" name="sub_title" id="category"
                                aria-describedby="category">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Description </label>
                            <input type="text" class="form-control" name="description" id="category"
                                aria-describedby="category">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Image</label>
                            <input type="file" name="image" id="category" class="form-control bg-dark"
                                aria-describedby="category" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                        </div>

                        <div class="mb-3">
                            <img id="file-ip-1-preview">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Background Image</label>
                            <input type="file" name="image" id="category" class="form-control bg-dark"
                                aria-describedby="category" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                        </div>
                        <div class="mb-3">
                            <img id="file-ip-1-preview">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">All Category</h6>
                {{-- <a href="">Show All</a> --}}
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">slug</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($pages as $item)
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td><img src="{{ asset($item->image) }} " height="50px" width="100px"></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-primary" href="{{ route('section.edit', $item->id) }}">Edit</a>
                                    <a href="#" class="btn btn-sm btn-primary" onclick="hit(event)">Delete </a>

                                    <form id="delete-form" action="{{ route('section.destroy', $item->id) }}" method="POST"
                                        class="d-none">
                                        @method('DELETE')
                                        @csrf
                                    </form>

                                    <script>
                                        function hit(event) {
                                            event.preventDefault();
                                            document.getElementById('delete-form').submit();
                                        }
                                    </script>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

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
