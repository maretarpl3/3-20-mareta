<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container mt-4">
    <h1>Halaman Home</h1>
</div>
    <a class="navbar-brand" href="/">Mareta</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
      <span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{($title === 'Home')? 'active'? ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title === 'about') ? 'active'? ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title ==='gallery') ? 'active'? ''}}" href="/gallery">Gallery</a>
</li>
      <li class="nav-item">
        <a class="nav-link {{ $title ==='contacts') ? 'active'?  ''}}" href="/contacts">Contacts</a>
</li>
   </ul>
    </div>
</div>
<nav>