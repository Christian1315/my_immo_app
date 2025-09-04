<x-templates.base :title="'Locataires'" :active="'locator'" :agency=$agency>

    <!-- HEADER -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="bi bi-person-plus"></i> Gestion des Locataires</h1>
    </div>
    <br>

    <livewire:locator :agency="$agency" />

</x-templates.base>