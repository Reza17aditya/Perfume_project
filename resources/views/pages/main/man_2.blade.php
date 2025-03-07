@extends('layout.main')
@section('container')
    <section class="product-section">
        <div class="product-column product-images">
            <img src="../tugas-2/images/products/man/man-2.png" alt="Azure Drift">
        </div>
        
        <div class="product-column main-image">
            <img src="../tugas-2/images/products/man/man-2.png" alt="Azure Drift">
        </div>

        <div class="product-column">
            <div class="product-details">
                <h4>Azure Drift</h4>
                <p><strong>Price:</strong>Rp 100.000</p>
                <p><strong>Description:</strong>Azure Drift is a fragrance inspired by the vast ocean and the cool breeze, evoking the spirit of freedom. This scent is crafted for the dynamic man, full of energy, yet calm in every step.</p>
                <p><strong>Size:</strong> 150ml</p>
                <p><strong>Made in:</strong> Indonesia</p>
                <a href="../main/cart.blade.php" class="add-to-cart-btn">Add to Cart</a>
            </div>

            <div class="description-box">
                <button class="description-toggle" data-target="#ingredients">
                    Ingredients <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="description-box-content" id="ingredients">
                    <p>PARFUM (FRAGRANCE) • AQUA/WATER • LIMONENE • LINALOOL • CITRAL • ALPHA-ISOMETHYL IONONE • COUMARIN • HEXYL CINNAMAL • CITRONELLOL • GERANIOL • EUGENOL • BENZYL BENZOATE • BENZYL ALCOHOL</p>
                </div>
            </div>
            <div class="description-box">
                <button class="description-toggle" data-target="#how-to-use">
                    How to Use <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="description-box-content" id="how-to-use">
                    <p>Azure Drift Essence de Parfum can be worn alone or layered with another fragrance to enhance its depth and create a unique signature scent. The matte black bottle embodies elegance and mystery, reflecting the bold and refined character of the fragrance. Essence de Parfum is applied to pulse points with a fingertip, ensuring a sophisticated and intimate experience.</p>
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
                Azure Drift captures the spirit of the open ocean and fresh breezes, crafted for the dynamic man. With a blend of citrus freshness and woodsy warmth, it embodies freedom and confidence, leaving a lasting impression wherever you go.
            </p>
        </div>
    </section>
@endsection