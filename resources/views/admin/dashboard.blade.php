<x-templates.base
    :title="'Tableau de bord gogo'"
    :active="'dashbord'"
    :agency="false">
    <!-- HEADER -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="bi bi-grip-horizontal"></i> Tableau de board</h1>
    </div>

    <br>
    <livewire:dashbord />
</x-templates.base>