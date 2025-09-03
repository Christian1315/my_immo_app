<!-- Filter by Supervisor Modal -->
<div class="modal fade animate__animated animate__fadeInUp" id="filtreBySupervisor" tabindex="-1" aria-labelledby="supervisorFilterLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="supervisorFilterLabel"><i class="bi bi-funnel"></i> Filtrer par superviseur</h5>
                <button type="button" class="btn btn-sm text-red" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('house.FiltreHouseBySupervisor', $current_agency->id) }}" method="POST" class="needs-validation p-3 border rounded" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="supervisor" class="form-label">Choisissez un superviseur</label>
                        <select class="form-select form-control agency-modal-select2" id="supervisor" name="supervisor" required>
                            @foreach(supervisors() as $supervisor)
                            <option value="{{ $supervisor['id'] }}">{{ $supervisor["name"] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="w-100 btn btn-sm bg-red">
                        <i class="bi bi-funnel"></i> Filtrer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Filter by Period Modal -->
<div class="modal fade animate__animated animate__fadeInUp" id="filtreByPeriod" tabindex="-1" aria-labelledby="periodFilterLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="periodFilterLabel"><i class="bi bi-funnel"></i> Filtrer par période</h5>
                <button type="button" class="btn btn-sm text-red" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('house.FiltreHouseByPeriode', $current_agency->id) }}" method="POST" class="needs-validation p-3 border rounded" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="debut" class="form-label">Date de début</label>
                                <input type="date" class="form-control" id="debut" name="debut" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="fin" class="form-label">Date de fin</label>
                                <input type="date" class="form-control" id="fin" name="fin" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="w-100 btn btn-sm bg-red">
                        <i class="bi bi-funnel"></i> Filtrer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>