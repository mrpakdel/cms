@if (session('message'))

    <div class="alert alert-{{ session('message')[1] }} alert-dismissible show">

        {{ session('message')[0] }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

            <span aria-hidden="true">&times;</span>

        </button>

    </div>

@endif