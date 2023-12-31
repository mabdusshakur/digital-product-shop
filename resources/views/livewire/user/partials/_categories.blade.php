<section class="product-category mt-5">
    <div class="container">
        <div class="section-title">
            <h5>Our Categories</h5>
        </div>
        <div class="category-section">
            @foreach ($categories as $category)
                <div class="product-wrapper" data-aos="fade-right" data-aos-duration="200">
                    <div class="wrapper-img">
                        <img src="{{ Storage::url($category->image) }}" alt="dress" height="120rem" >
                    </div>
                    <div class="wrapper-info">
                        <a href="javascript:;" wire:click="goToProductsByCategory({{$category->id}})" class="wrapper-details">{{ $category->name }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
