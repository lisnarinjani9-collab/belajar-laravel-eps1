@extends('produk.index')
@section('content')
        <main class="main">
            <header class="page-header">
                <div>
                    <h1>Update Produk</h1>
                    <p class="subtitle">Perbarui informasi produk Anda.</p>
                </div>
            </header>

            <section class="card form-card">
                <form id="formUpdate" action="{{ route('admin.produk.update', $produk->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="produkId">

                    <div class="form-group">
                        <label for="nama_produk">
                            Nama Produk <span class="required">*</span>
                        </label>
                        <input type="text" id="nama_produk" name="nama_produk" value="{{ $produk->nama_produk }}" required>
                    </div>

                    <div class="form-group">
                        <label for="harga_produk">
                            Harga Produk (Rp) <span class="required">*</span>
                        </label>
                        <input type="number" id="harga_produk" name="harga_produk" min="0" step="1" value="{{ $produk->harga_produk }}" required>
                    </div>

                    <div class="form-group">
                        <label for="kondisi_produk">
                            Kondisi Produk <span class="required">*</span>
                        </label>
                        <select id="kondisi_produk" name="kondisi_produk" required>
                            <option value="Bagus"{{ $produk->kondisi_produk == 'Bagus' ? 'selected' : '' }}>Bagus</option>
                            <option value="Rusak"{{ $produk->kondisi_produk == 'Rusak' ? 'selected' : '' }}>Rusak</option>
                        </select>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('admin.produk.table') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">
                            Update Produk
                        </button>
                    </div>
                </form>
            </section>
        </main>
@endsection
