<x-templates.base :title="'Locations'" :active="'location'" :agency=$agency>

    <!-- HEADER -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="bi bi-radar"></i> Gestion des Locations</h1>
    </div>
    <br>

    <livewire:location :agency="$agency"/>

</x-templates.base>