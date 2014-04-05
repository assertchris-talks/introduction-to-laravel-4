@extends("layout")

@section("content")

  <div class="products">
    @foreach (range(0, count($products) - 1) as $i)
      <div class="product">
        {{ $products[$i][0] }}
        <span class="price">{{ $products[$i][1] }}</span>
      </div>
    @endforeach
  </div>

@stop

@section("sidebar")
  foo bar
@stop
