<nav class="navbar navbar-expand-lg navbar-dark bg-danger" style="position:sticky; top:0; z-index:99;">
    <div class="container">
        <a class="navbar-brand pr-5" href="#">MIS MAHASISWA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ ($title == 'Homepage Mahasiswa') ? 'active' : '' }}">
                    <a class="nav-link" href="/">Homepage Mahasiswa</a>
                </li>
                <li class="nav-item {{ ($title == 'List Mahasiswa') ? 'active' : '' }}">
                    <a class="nav-link" href="/listmahasiswa">List Mahasiswa</a>
                </li>
                <li class="nav-item {{ ($title == 'Fasilitas') ? 'active' : '' }}">
                    <a class="nav-link" href="/fasilitas">Fasilitas</a>
                </li>
                <li class="nav-item {{ ($title == 'Pengaturan Mahasiswa') ? 'active' : '' }}">
                    <a class="nav-link" href="/pengaturan">Edit mahasiswa</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
