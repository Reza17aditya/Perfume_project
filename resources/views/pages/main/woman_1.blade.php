@extends('layout.main')
@section('container')
    <section class="product-section">
        <div class="product-column product-images">
            <img src="../tugas-2/images/products/woman/woman-1.png" alt="Crimson Desire">
        </div>
        
        <div class="product-column main-image">
            <img src="../tugas-2/images/products/woman/woman-1.png" alt="Crimson Desire">
        </div>

        <div class="product-column">
            <div class="product-details">
                <h4>Crimson Desire</h4>
                <p><strong>Price:</strong>Rp 100.000</p>
                <p><strong>Description:</strong>Crimson Desire is a fragrance that embodies the allure and passion of a woman who knows her power. The scent opens with the rich warmth of red fruits, followed by a heart of floral elegance and a touch of oriental spices. It’s a bold, seductive blend that lingers with a sense of mystery.</p>
                <p><strong>Size:</strong> 150ml</p>
                <p><strong>Made in:</strong> Indonesia</p>
                <a href="../main/cart.blade.php" class="add-to-cart-btn">Add to Cart</a>
            </div>

            <div class="description-box">
                <button class="description-toggle" data-target="#ingredients">
                    Ingredients <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="description-box-content" id="ingredients">
                    <p>PARFUM (FRAGRANCE) • AQUA/WATER • LIMONENE • LINALOOL • CITRAL • ALPHA-ISOMETHYL IONONE • EUGENOL • VANILLIN • COUMARIN • GERANIOL</p>
                </div>
            </div>
            <div class="description-box">
                <button class="description-toggle" data-target="#how-to-use">
                    How to Use <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="description-box-content" id="how-to-use">
                    <p>Apply Crimson Desire to pulse points such as the wrists, neck, and behind the ears. Let the fragrance envelop you, enhancing your natural allure throughout the day and evening.</p>
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
                rimson Desire is inspired by the passionate energy of a woman who embraces her strength and elegance. With a blend of red fruits, floral notes, and warm spices, this fragrance is a tribute to femininity that is both bold and refined, leaving a trail of desire in her wake.
            </p>
        </div>
@endsection