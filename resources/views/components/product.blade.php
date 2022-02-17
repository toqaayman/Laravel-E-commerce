

<div class="col-lg-3 col-sm-6  single">



    <div class="f_img ">
        <img href="{{ route('product', ['product' => $product->id]) }}" src="{{ asset('storage/'.$product->image) }}" alt="{{ ucfirst($product->title) }}" class="img-fluid rounded mx-auto d-block image ">
        <span class="label" style="float: right">{{ "$".$product->price }}</span>
        <div class="middle">
            <div class="eye">
                <a href="{{ route('product', ['product' => $product->id]) }}"><i class="fas fa-eye "></i></a>
            </div>
            <div class="discount" >
                <p class="percent_off">{{ $product->discount ."%" }}</p>
            </div>
        </div>
    </div>



    <div class="f_i_text ">
        <h2>{{ ucfirst($product->title) }}</h2>
    </div>



    <div class="f_staricon">
        <a href="#"><i class="fas fa-star"></i></a>
        <a href="#"><i class="fas fa-star"></i></a>
        <a href="#"><i class="fas fa-star"></i></a>
        <a href="#"><i class="fas fa-star"></i></a>
        <a href="#"><span><i class="fas fa-star" ></i></span></a>
    </div>



    <div class="f_purchaseicon ">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fas fa-heart"></i></a></li>
            <li class="list-inline-item">
                <form action="{{ route('atc', ['product'=>$product->id]) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-default add-to-cart" style="color: gray"><i class="fas fa-shopping-cart"></i></button>
            </form>
            </li>
            <li class="list-inline-item"><a href="#"><i class="fas fa-share-alt"></i></a></li>
        </ul>
    </div>

</div>
