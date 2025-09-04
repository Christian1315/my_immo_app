<!-- SHOW AVALISOR MODAL -->
<div class="modal fade animate__animated animate__fadeInUp" id="showAvalisor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <p class=""><i class="bi bi-person-plus"></i> Avaliseur du locataire : <strong><em class="text-red" id="ava_locator_fullmneme"></em></strong></p>
            </div>
            <div class="modal-body">
                <h6 class="mx-3">Nom : <strong><em class="text-red" id="avar_nom"></em></strong></h6>
                <h6 class="mx-3">Prénom : <strong><em class="text-red" id="avar_prenom"></em></strong></h6>
                <h6 class="mx-3">Phone : <strong><em class="text-red" id="avar_phone"></em></strong></h6>
                <h6 class="mx-3">Lien parental : <strong><em class="text-red" id="avar_link"></em></strong></h6>
            </div>
        </div>
    </div>
</div>

<!-- SHOW HOUSES MODAL -->
<div class="modal fade animate__animated animate__fadeInUp" id="showHouses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <p class="" id="exampleModalLabel"><i class="bi bi-house-add-fill"></i> Liste des maisons du locataire : <strong><em class="text-red" id="locator_fullname"></em></strong></p>
            </div>
            <div class="modal-body">
                <h6 class="mx-3">Total : <strong><em class="text-red" id="locator_houses_count"></em></strong></h6>
                <ul class="list-group" id="locator_houses"></ul>
            </div>
        </div>
    </div>
</div>

<!-- SHOW ROOMS MODAL -->
<div class="modal fade animate__animated animate__fadeInUp" id="showRooms" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <p class="" id="exampleModalLabel"><i class="bi bi-person-fill"></i> Liste des chambres du locataire : <strong><em class="text-red" id="room_locator_fullname"></em></strong></p>
            </div>
            <div class="modal-body">
                <h6 class="mx-3">Total : <strong><em class="text-red" id="locator_rooms_count"></em></strong></h6>
                <ul class="list-group" id="locator_rooms"></ul>
            </div>
        </div>
    </div>
</div> 