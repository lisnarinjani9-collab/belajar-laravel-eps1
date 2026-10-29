@extends('produk.index')
@section('content')
<main class="main">
            <header class="page-header">
                <div>
                    <h1>Tambah Produk</h1>
                    <p class="subtitle">Masukkan informasi produk baru.</p>
                </div>
            </header>

            <section class="card form-card">
                <form id="formTambah">
                    <div class="form-group">
                        <label for="nama_produk">
                            Nama Produk <span class="required">*</span>
                        </label>
                        <input type="text" id="nama_produk" placeholder="Contoh: Pasta Gigi" required>
                    </div>

                    <div class="form-group">
                        <label for="harga_produk">
                            Harga Produk (Rp) <span class="required">*</span>
                        </label>
                        <input type="number" id="harga_produk" placeholder="Contoh: 15000" min="0"
                            step="1" required>
                    </div>

                    <div class="form-group">
                        <label for="kondisi_produk">
                            Kondisi Produk <span class="required">*</span>
                        </label>
                        <select id="kondisi_produk" required>
                            <option value="">Pilih kondisi</option>
                            <option value="Bagus">Bagus</option>
                            <option value="Rusak">Rusak</option>
                        </select>
                    </div>

                    <div class="form-actions">
                        <a href="{{ route('produk.table') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">
                            Simpan Produk
                        </button>
                    </div>
                </form>
            </section>
</main>
@endsection
