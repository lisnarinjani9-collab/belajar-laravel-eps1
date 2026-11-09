@extends('produk.index')
@section('content')
<main class="main">
    <header class="page-header">
                <div>
                    <h1>Produk</h1>
                    <p class="subtitle">Kelola data produk Anda.</p>
                </div>
                <a href="{{ route('produk.tambah') }}" class="btn btn-primary">
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
                                    <a class="btn btn-secondary" href="{{ route ('produk.edit', $item->id) }}">Edit</a>
                                    <form action="{{ route('produk.delete', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
</main>
@endsection

