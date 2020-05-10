<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-info ">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('getHome')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('getAbout')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('getProduct')}}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('getContact')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('getPost')}}">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shopping Cart</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
