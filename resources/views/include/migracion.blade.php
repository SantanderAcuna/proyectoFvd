<div class="collapse" id="collapseExample">
    <div class="card card-body">
        <form action="{{ route('simcard.manual')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="imsi" id="imsi" class="form-control text-center" required placeholder="Numero">
            </div>



            <button type="submit" class="btn btn-primary">Crear</button>

        </form>
    </div>
</div>