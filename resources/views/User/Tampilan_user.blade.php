@extends('layouts.app')

@section('konten')
    <div class="container mt-5 pt-5">
        <div class="mb-4">
            <input class="cari form-control" type="search" placeholder="Pencarian" aria-label="Search">
        </div>
        <h4 class="bukuK">Kategori</h4>
        <div class="bukukategori">
            <div class="bukuk">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">Harry Potter</p>
                <p class="penulis-buku">J.K. Rowling</p>
            </div>
            <div class="bukuk">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">The Hobbit</p>
                <p class="penulis-buku">J.R.R. Tolkien</p>
            </div>
            <div class="bukuk">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">To Kill a Mockingbird</p>
                <p class="penulis-buku">Harper Lee</p>
            </div>
            <div class="bukuk">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">To Kill a Mockingbird</p>
                <p class="penulis-buku">Harper Lee</p>
            </div>
            <div class="bukuk">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">To Kill a Mockingbird</p>
                <p class="penulis-buku">Harper Lee</p>
            </div>
            <div class="bukuk">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">To Kill a Mockingbird</p>
                <p class="penulis-buku">Harper Lee</p>
            </div>
            <div class="bukuk">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">To Kill a Mockingbird</p>
                <p class="penulis-buku">Harper Lee</p>
            </div>
        </div>
        <h4 class="bukuF">Buku Favorite</h4>
        <div class="bukutengah">
            <div class="buku">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">Harry Potter'</p>
                <p class="penulis-buku">J.K. Rowling</p>
            </div>
            <div class="buku">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">Harry Potter'</p>
                <p class="penulis-buku">J.K. Rowling</p>
            </div>
            <div class="buku">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">Harry Potter'</p>
                <p class="penulis-buku">J.K. Rowling</p>
            </div>
            <div class="buku">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">Harry Potter'</p>
                <p class="penulis-buku">J.K. Rowling</p>
            </div>
            <div class="buku">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">Harry Potter'</p>
                <p class="penulis-buku">J.K. Rowling</p>
            </div>
            <div class="buku">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">Harry Potter'</p>
                <p class="penulis-buku">J.K. Rowling</p>
            </div>
            <div class="buku">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">Harry Potter'</p>
                <p class="penulis-buku">J.K. Rowling</p>
            </div>
        </div>

        <h4 class="bukuTerbaru">Buku Terbaru</h4>
        <div class="buku2">
            <div class="bukuT">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">The Midnight Library</p>
                <p class="penulis-buku">Matt Haig</p>
            </div>
            <div class="bukuT">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">The Midnight Library</p>
                <p class="penulis-buku">Matt Haig</p>
            </div>
            <div class="bukuT">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">The Midnight Library</p>
                <p class="penulis-buku">Matt Haig</p>
            </div>
            <div class="bukuT">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">The Midnight Library</p>
                <p class="penulis-buku">Matt Haig</p>
            </div>
            <div class="bukuT">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">The Midnight Library</p>
                <p class="penulis-buku">Matt Haig</p>
            </div>
            <div class="bukuT">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">The Midnight Library</p>
                <p class="penulis-buku">Matt Haig</p>
            </div>
            <div class="bukuT">
                <img class="buku1" src="https://picsum.photos/300/200" alt="">
                <p class="judul-buku">The Midnight Library</p>
                <p class="penulis-buku">Matt Haig</p>
            </div>
            <div></div>
        </div>
        <footer class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="#" class="mb-3 d-block">
                            {{-- <img src="/api/placeholder/50/50" alt="Logo" class="mb-2"> --}}
                            Perpustakaan Digital
                        </a>
                        <a href="#">Informasi</a>
                        <a href="#">Layanan</a>
                        <a href="#">Pustakawan</a>
                        <a href="#">Area Anggota</a>
                    </div>
                    <div class="col-md-9">
                        <h5>Tentang Kami</h5>
                        <p>As a complete Library Management System, SLiMS (Senayan Library Management System) has many
                            features that will help libraries and librarians to do their job easily and quickly. Follow this
                            link to show some features provided by SLiMS.</p>
                        <p>© 2024 — Senayan Developer Community</p>
                        <p>Ditenagai oleh SLiMS</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
