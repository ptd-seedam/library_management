@extends('librarian.layout.layout')
@section('title', 'Tạo Sách Mới')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tạo sách mới</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thông tin sách</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('librarian.books.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="B_TITLE">Tiêu đề sách</label>
                        <input type="text" class="form-control" id="B_TITLE" name="B_TITLE" required>
                    </div>
                    @error('B_TITLE')
                        <div class="alert alert-danger">{{ $message }}</div>

                    @enderror
                    <div class="form-group">
                        <label for="B_PUBLIC_DATE">Ngày xuất bản</label>
                        <input type="date" class="form-control" id="B_PUBLIC_DATE" name="B_PUBLIC_DATE" required>
                    </div>
                    @error('B_PUBLIC_DATE')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="hidden" name="B_RATE" value="1">
                    <div class="form-group">
                        <label for="B_TOTAL_COPIES">Tổng số sách</label>
                        <input type="number" class="form-control" id="B_TOTAL_COPIES" name="B_TOTAL_COPIES" required>
                    </div>
                    @error('B_TOTAL_COPIES')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="B_AVAILABLE_COPIES">Sách còn trong kho</label>
                        <input type="number" class="form-control" id="B_AVAILABLE_COPIES" name="B_AVAILABLE_COPIES" required>
                    </div>
                    @error('B_AVAILABLE_COPIES')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="B_TOTAL_READ">Lượt đọc</label>
                        <input type="number" class="form-control" id="B_TOTAL_READ" name="B_TOTAL_READ" value="0" required>
                    </div>
                    @error('B_TOTAL_READ')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="A_ID">Tác giả</label>
                        <select class="form-control" id="A_ID" name="A_ID" required>
                            @foreach ($authors as $author)
                                <option value="{{ $author->A_ID }}">{{ $author->A_NAME }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('A_ID')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="P_ID">Nhà xuất bản</label>
                        <select class="form-control" id="P_ID" name="P_ID" required>
                            @foreach ($publishers as $publisher)
                                <option value="{{ $publisher->P_ID }}">{{ $publisher->P_NAME }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('P_ID')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="C_ID">Thể loại</label>
                        <select class="form-control" id="C_ID" name="C_ID" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->C_ID }}">{{ $category->C_NAME }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('C_ID')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="B_IMAGE">Hình ảnh bìa sách</label>
                        <input type="file" class="form-control-file" id="B_IMAGE" name="B_IMAGE" accept="image/*">
                    </div>
                    @error('B_IMAGE')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary">Tạo sách</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
