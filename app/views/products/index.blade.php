<div class="products">
  @foreach ($products as $product)
    <div class="product">
      {{ $product[0] }}
      <span class="price">{{ $product[1] }}</span>
    </div>
  @endforeach
</div>
