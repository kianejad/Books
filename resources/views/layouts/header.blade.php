<div class="header">
    <div class="container">
        <nav
            class="navbar navbar-expand-lg navbar-light"
            style="background-color: #e3f2fd;"
        >
            <div class="container-fluid">
                <a class="navbar-brand" href="">
                    <img
                        src="{{ asset('images/bolbol.jpg') }}"
                        alt="logo"
                        width="100"
                        height="100"
                    />
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul
                        class="navbar-nav ms-auto mb-2 mb-lg-0"
                        style="font-size: 20px;"
                    >
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('books.index') }}"
                            ><i class="fas fa-home"></i> Books</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="{{ route('books.create') }}"
                            ><i class="fas fa-plus"></i> Add Book</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
