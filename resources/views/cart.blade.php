<x-app-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    </x-slot>

    <x-slot name="js">
        <script src="{{ asset('js/cart.js') }}" defer></script>
    </x-slot>
    {{---------------------
            $slot
        --------------------}}

    <main  class="container">
        @if (count($products))
            <table class="table-bordered table table-hover table-bordered mb-0">
                <thead>
                <tr class="text-center">
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Quantity</th>
                    <th>Overall</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @php $overallPrice = 0; @endphp
                @php $overallDiscount = 0; @endphp
                @foreach ($products as $product)
                    @php
                        $overall = $product->price * $product->quantity * (1 - $product->discount / 100);
                        $overall = ceil($overall * 100) / 100;
                        $overallPrice += $overall;
                        $overallDiscount += $product->discount;
                        $total = $overallPrice-($overallPrice*($overallDiscount/100));
                    @endphp
                    <tr class="text-center">
                        <td width="35%"><img class="d-b" src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->title }}"></td>
                        <td width="35%">{{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount}} %</td>
                        <td>
                            @auth
                                <form action="{{ route('uc', ['product' => $product->id, 'quantity' => 0]) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                </form>
                            @endauth
                            <input type="number" min="1" max="20" onchange="updateQuantity({{$product->id}}, this, {{auth()->check()}})" value="{{$product->quantity}}">
                        </td>
                        <td  class="productTotal">$ {{$product->price*$product->quantity}}</td>
                        <td>
                            <a class="btn btn-info btn-sm mb-1"
                               href="{{ route('product', ['product' => $product->id]) }}">
                                More Details
                            </a>
                            <form action="{{ route('rfc', ['product' => $product->id]) }}" method="POST" id="removeForm">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="product" value="{{$product->id}}">
                                <button id="removeBtn"
                                        type="submit" class="btn btn-danger btn-sm">
                                    Remove
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <table class="subtotal-table ml-auto">
                <tr>
                    <td>Subtotal</td>
                    <td id="">{{$overallPrice}}</td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td>{{$overallDiscount}}%</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td id="">{{$total}}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="checkout">
                            <a class="btn btn-success mr-2 ml-auto" href="{{ route('checkout') }}">Proceed to checkout</a>
                        </div>
                    </td>
                </tr>
            </table>
        @else
            <div style="display: grid;place-items:center;padding:2rem 0">
                <img style="max-width: 100%;" src="{{ asset('assets/images/img.png') }}" alt="">
            </div>
        @endif
    </main>
    <x-modal title="Remove Item" ok="REMOVE">
        <x-slot name="description">
            Are you sure you want to remove this item?
        </x-slot>
    </x-modal>

            <x-modal title="Remove Item" ok="REMOVE">
                <x-slot name="description">
                    Are you sure you want to remove this item?
                </x-slot>
            </x-modal>
    {{---------------------
        $slot
    --------------------}}
</x-app-layout>
