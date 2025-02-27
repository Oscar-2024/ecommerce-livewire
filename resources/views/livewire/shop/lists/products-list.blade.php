<div class="row">
    @forelse($products as $product)
        <div
            wire:key="product-{{ $product->id }}"
            class="col-3 mb-3"
        >
            <x-product-card :product="$product" />
        </div>
    @empty
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Ups!</strong> No hay productos para mostrar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforelse

    <div class="col-12">
        {{ $products->links() }}
    </div>
</div>
