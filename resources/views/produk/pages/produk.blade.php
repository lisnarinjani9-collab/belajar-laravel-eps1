@extends('produk.index')
@section('content')
<main class="main">
    <header class="page-header">
                <div>
                    <h1>Produk</h1>
                    <p class="subtitle">Kelola data produk Anda.</p>
                </div>
                <a href="tambah.html" class="btn btn-primary">
                    + Tambah Produk
                </a>
    </header>

            <section class="card">
                <div class="toolbar">
                    <input type="search" id="searchProduk" class="search" placeholder="Cari nama produk...">
                </div>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Kondisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="daftarProduk">
                            @foreach ($produk as $item)
                             <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_produk }}</td>
                                <td>{{ $item->harga_produk }}</td>
                                <td>{{ $item->kondisi_produk }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="update.html?id=1">Edit</a>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
</main>
@endsection

