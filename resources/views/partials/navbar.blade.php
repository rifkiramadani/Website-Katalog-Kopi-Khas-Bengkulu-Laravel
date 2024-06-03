<nav class="navbar bg-dark navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand">Kopi Kito</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          @guest
            <li class="nav-item">
              <a class="nav-link {{ ($navtitle === "home") ? "active" : '' }}" aria-current="page" href="/">Home</a>
            </li>
          @endguest
          @auth
            <li class="nav-item">
              <a class="nav-link {{ ($navtitle === "produk") ? "active" : '' }}" href="/produk">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($navtitle === "pesanan") ? "active" : '' }}" href="/lihatpesanan">Pesanan Anda</a>
            </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link {{ ($navtitle === "tentangkami") ? "active" : '' }}" href="/about">Tentang Kami</a>
          </li>
        </ul>
      </div>
      @auth
      <ul class="navbar-nav">
        <p class="text-white mx-3 mt-2">Selamat Datang Kembali, {{ auth()->user()->name }}</p>
        <li class="nav-item">
          <form action="/logout" method="post">
          @csrf
            <button class="btn btn-light w-100">Logout</button>
          </form>
        </li>
      </ul>
      @endauth
    </div>
  </nav>