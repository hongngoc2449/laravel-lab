<x-user-layout>
    @section('title', 'Homepage')

    @foreach ($categories as $category)
        <x-product-grids :category="$category" :products="$category['products']" />
    @endforeach

    <x-slot name="components">
        <livewire:checkout.cart-bar />

        <livewire:checkout.add-cart-item-popup />
    </x-slot>

</x-user-layout>