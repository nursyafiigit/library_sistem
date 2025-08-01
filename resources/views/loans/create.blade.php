@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Peminjaman Buku</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Form untuk mengirim data peminjaman buku -->
        <form method="POST" action="{{ route('loans.store') }}">
            @csrf

            <div class="form-group">
                <label for="member_id">Nama Anggota:</label>
                <select name="member_id" id="member_id" class="form-control" required>
                    <option value="">Pilih Anggota</option>
                    @foreach($members as $member)
                        <option value="{{ $member->id }}">{{ $member->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="book_id">Judul Buku:</label>
                <select name="book_id" id="book_id" class="form-control" required>
                    <option value="">Pilih Buku</option>
                    @foreach($books as $book)
                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="loan_date">Tanggal Peminjaman:</label>
                <input type="date" name="loan_date" id="loan_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="return_date">Tanggal Pengembalian:</label>
                <input type="date" name="return_date" id="return_date" class="form-control" required>
            </div>

            <!-- Tombol untuk mengirimkan form -->
            <button type="submit" class="btn btn-primary">Pinjam Buku</button>
        </form>
    </div>
@endsection