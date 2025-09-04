@can("room.add.type")
<div class="modal fade animate__animated animate__fadeInUp" id="room_type" aria-labelledby="room_type" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5"><i class="bi bi-node-plus"></i> Type de chambre</h5>
                <button type="button" class="btn btn-sm text-red" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle"></i>
                </button>
            </div>
            <form action="{{route('room.AddType')}}" method="POST" class="p-3 rounded border">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <input type="text" required name="name" placeholder="Le label ...." class="form-control">
                            </div>
                            <div class="mb-3">
                                <textarea required name="description" class="form-control" placeholder="Description ...."></textarea>
                            </div>
                            <button class="w-100 btn btn-sm bg-red">
                                <i class="bi bi-building-check"></i> Enregistrer
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endcan 