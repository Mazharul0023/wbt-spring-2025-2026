const unitPrice = 1000; 
const qtyInput = document.getElementById('quantity');
const totalOutput = document.getElementById('totalPrice');

qtyInput.addEventListener('input', () => { 
    let quantity = parseInt(qtyInput.value) || 0;

    
    if (quantity < 0) {
        quantity = 0;
        qtyInput.value = 0;
    }

    const total = unitPrice * quantity; 
    totalOutput.value = total;


    if (total > 1000) {
        alert("Congratulations! You are now eligible for a gift coupon.");
    }
});