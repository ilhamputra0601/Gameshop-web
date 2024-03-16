<x-guest-layout>

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Our Shop</h3>
          <span class="breadcrumb"><a href="#">Home</a> > Our Shop</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        @foreach ($categories as $item)
        <li>
            <a href="#!" data-filter=".{{ $item->name }}">{{ $item->name }}</a>
        </li>
        @endforeach
      </ul>
      <div class="row trending-box">
        @foreach ( $products as $item )
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 {{ $item->category->name }}">
          <div class="item">
            <div class="thumb">
              <a href="shop/{{$item->id}}"><img src="assets/images/trending-01.jpg" alt=""></a>
              <span class="price"><em>$36</em>${{ $item->price }}</span>
            </div>
            <div class="down-content">
              <span class="category">{{ $item->category->name }}</span>
              <h4>{{ $item->title }}</h4>
              <a href=""><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{ $products->links() }}
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
          <li><a href="#"> &lt; </a></li>
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"> &gt; </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</x-guest-layout>
