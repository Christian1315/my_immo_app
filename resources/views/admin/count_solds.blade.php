<x-templates.base :title="'Count & Soldes'" :active="'count'" :agency="false">
    <!-- HEADER -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="bi bi-wallet"></i> Gestion des Comptes & Soldes</h1>
    </div>
    <br>
    <livewire:account-sold />
</x-templates.base>