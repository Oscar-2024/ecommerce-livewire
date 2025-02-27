<div class="input-group">
    <input
        type="text"
        class="form-control"
        placeholder="Escribe tu búsqueda"
        wire:model.debounce.500.live="filter.search"
    />
</div>
