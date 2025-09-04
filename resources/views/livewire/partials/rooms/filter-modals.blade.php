<!-- FILTRE PAR SUPERVISEUR -->
<div class="modal fade animate__animated animate__fadeInUp" id="filtreBySupervisor" tabindex="-1" aria-labelledby="supervisorFilterLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="supervisorFilterLabel"><i class="bi bi-node-plus"></i> Filtre par superviseur</h5>
                <button type="button" class="btn btn-sm text-red" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('room.FiltreRoomBySupervisor',$current_agency->id)}}" class="border rounded p-3" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label>Choisissez un superviseur</label>
                                <select required name="supervisor" class="form-control agency-modal-select2">
                                    @foreach(supervisors() as $supervisor)
                                    <option value="{{$supervisor['id']}}">{{$supervisor["name"]}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="w-100 btn btn-sm bg-red">
                                <i class="bi bi-funnel"></i> Filtrer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- FILTRE PAR MAISON -->
<div class="modal fade animate__animated animate__fadeInUp" id="filtreByHouse" tabindex="-1" aria-labelledby="houseFilterLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="houseFilterLabel"><i class="bi bi-funnel"></i> Filtre par maison</h5>
                <button type="button" class="btn btn-sm text-red" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('room.FiltreRoomByHouse',$current_agency->id)}}" method="POST" class="p-3 border rounded">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label>Choisissez une maison</label>
                                <select required name="house" class="form-control agency-modal-select2">
                                    @foreach($houses as $house)
                                    <option value="{{$house['id']}}">{{$house["name"]}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="w-100 btn btn-sm bg-red">
                                <i class="bi bi-funnel"></i> Filtrer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 