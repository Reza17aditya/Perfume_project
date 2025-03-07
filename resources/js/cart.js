let hasItemsInCart = true;  // Change this value to false to simulate empty cart

        if (hasItemsInCart) {
            document.getElementById('defaultCart').style.display = 'none';
            document.getElementById('filledCart').style.display = 'block';
        } else {
            document.getElementById('defaultCart').style.display = 'block';
            document.getElementById('filledCart').style.display = 'none';
        }