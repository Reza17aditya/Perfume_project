@extends('layout.main')
@section('container')
    <section class="product-section">
        <div class="product-column product-images">
            <img src="../tugas-2/images/products/woman/woman-2.png" alt="Emerald Glow">
        </div>
        
        <div class="product-column main-image">
            <img src="../tugas-2/images/products/woman/woman-2.png" alt="Emerald Glow">
        </div>

        <div class="product-column">
            <div class="product-details">
                <h4>Emerald Glow</h4>
                <p><strong>Price:</strong>Rp 100.000</p>
                <p><strong>Description:</strong>Emerald Glow captures the essence of freshness and elegance, inspired by the vibrant green hues of nature. This fragrance opens with the crisp zest of citrus, followed by a heart of green florals and a soft base of musk and woods, creating a perfect balance of freshness and sophistication.</p>
                <p><strong>Size:</strong> 150ml</p>
                <p><strong>Made in:</strong> Indonesia</p>
                <a href="../main/cart.blade.php" class="add-to-cart-btn">Add to Cart</a>
            </div>

            <div class="description-box">
                <button class="description-toggle" data-target="#ingredients">
                    Ingredients <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="description-box-content" id="ingredients">
                    <p>PARFUM (FRAGRANCE) • AQUA/WATER • LIMONENE • LINALOOL • CITRAL • JASMINE EXTRACT • MUSK • GERANIOL • COUMARIN</p>
                </div>
            </div>
            <div class="description-box">
                <button class="description-toggle" data-target="#how-to-use">
                    How to Use <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="description-box-content" id="how-to-use">
                    <p>Spray Emerald Glow onto pulse points, such as your wrists, neck, and inner elbows. Allow the fragrance to blossom, releasing its fresh and elegant layers throughout the day.</p>
                </div>
            </div>
            <div class="description-box">
                <button class="description-toggle" data-target="#delivery-return">
                    Delivery & Return <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="description-box-content" id="delivery-return">
                    <p>Complimentary ground shipping within 7 to 10 business days
                        In-store collection available within 7 to 10 business days
                        Express delivery is required for items greater than $5,000
                        Items greater than $25,000 require white glove delivery
                        See the delivery FAQs for details on shipping methods, costs and delivery times
                        Payment methods
                        By card: Visa®, MasterCard®, American Express®, Discover®, Diners Club®, JCB® and China Union Pay®
                        By PayPal® and Apple Pay®
                        Returns and exchanges
                        Easy and complimentary, within 30 days
                        Must be returned unopened, sealed in its transparent film
                        See conditions and procedure in our return FAQs
                        The Hermès Sellier tag must be intact, attached, and free of any alteration or damage.</p>
                </div>
            </div>
            <div class="description-box">
                <button class="description-toggle" data-target="#delivery-return">
                    Gifting <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="description-box-content" id="delivery-return">
                    <p>Your purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of fragrances, makeup and beauty products, books, certain equestrian and bulky items.
                        During checkout, you can include a card with a personalized message and a priceless invoice.
                        The gift recipient can exchange a gift. For more details, please contact Customer Service.</p>
                </div>
            </div>                 
        </div>
    </section>
    <section class="story">
        <div class="story-box">
            <h2>Our Story</h2>
            <p>
                merald Glow is inspired by the vibrant energy of nature’s green beauty. With a refreshing blend of citrus and green florals, this fragrance captures the feeling of a serene walk through lush gardens, bringing an elegant, invigorating glow wherever you go.
            </p>
        </div>
    </section>
@endsection