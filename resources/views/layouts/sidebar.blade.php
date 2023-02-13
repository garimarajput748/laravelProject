

@section('sidebar')
<div class="col-md-2 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top pb-sm-0 pb-3">
    <aside>
        <div class="bg-light border rounded-3 p-1 h-100 sticky-top">
            <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between text-truncate">
                <li class="nav-item">
                    <a href="#" class="nav-link px-2"> <i class="bi bi-house fs-5"></i> Home </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-2"> <i class="bi bi-speedometer fs-5"></i> Dashboard </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-2"><i class="bi bi-card-text fs-5"></i> Pages </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-2"><i class="bi bi-bricks fs-5"></i> Menu </a>
                </li>
                <li>
                    <a href="#" class="nav-link dropdown-toggle px-2" data-bs-toggle="dropdown"><i class="bi bi-sliders2-vertical fs-5"></i> Setting </a>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" href="#"> Admin Setting </a></li>
                        <li> <a class="dropdown-item" href="#"> Site Setting </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
</div>
@endsection