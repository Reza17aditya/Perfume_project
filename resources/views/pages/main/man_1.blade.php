@extends('layout.main')
@section('container')
    <section class="product-section">
        <div class="product-column product-images">
            <img src="../tugas-2/images/products/man/man-1.png" alt="Midnight Edge">
        </div>
        
        <div class="product-column main-image">
            <img src="../tugas-2/images/products/man/man-1.png" alt="Midnight Edge">
        </div>

        <div class="product-column">
            <div class="product-details">
                <h4>Midnight Edge</h4>
                <p><strong>Price:</strong>Rp 100.000</p>
                <p><strong>Description:</strong>Midnight Edge is a perfume with an elegant and intense masculine scent. Formulated as an Essence de Parfum, 
                its composition offers the perfect balance between strength and luxury. The aroma of dark woods and leather blends with warm spices, creating a bold and 
                captivating character.</p>
                <p><strong>Size:</strong> 150ml</p>
                <p><strong>Made in:</strong> Indonesia</p>
                <a href="../main/cart.blade.php" class="add-to-cart-btn">Add to Cart</a>
            </div>

            <div class="description-box">
                <button class="description-toggle" data-target="#ingredients">
                    Ingredients <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="description-box-content" id="ingredients">
                    <p>PARFUM (FRAGRANCE) • HEXYL CINNAMAL • ALPHA-ISOMETHYL IONONE • ETHYLHEXYL METHOXYCINNAMATE • LINALOOL • HYDROXYCITRONELLAL • EUGENOL • ETHYLHEXYL SALICYLATE • BHT • BUTYL METHOXYDIBENZOYLMETHANE • COUMARIN • ANISE ALCOHOL • BENZYL BENZOATE • ISOEUGENOL • BENZYL ALCOHOL • BENZYL SALICYLATE.
                    This list may change over time. Please refer to the information provided on the packaging of your product to see the most up-to-date list of ingredients.</p>
                </div>
            </div>
            <div class="description-box">
                <button class="description-toggle" data-target="#how-to-use">
                    How to Use <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="description-box-content" id="how-to-use">
                    <p>Midnight Edge Essence de Parfum can be worn alone or layered with another fragrance to enhance its depth and create a unique signature scent. The matte black bottle embodies elegance and mystery, reflecting the bold and refined character of the fragrance. Essence de Parfum is applied to pulse points with a fingertip, ensuring a sophisticated and intimate experience.</p>
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
                    <p class="description-text"></p>
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
            <p>Born from the depths of the night, Midnight Edge embodies mystery, strength, and sophistication. Crafted for the modern man, it blends smoky oud, rich leather, and bold black pepper, creating a scent that commands presence. Encased in a matte black bottle, it is more than a fragrance—it’s a statement of confidence and lasting allure.</p>
        </div>
    </section>
@endsection