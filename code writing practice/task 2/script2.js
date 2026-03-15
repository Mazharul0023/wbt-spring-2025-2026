const taxRate = 0.05; 
const priceInput = document.getElementById('origPrice');
const discInput = document.getElementById('discountPct');
const finalOutput = document.getElementById('finalPrice');

function calculate() {
    let price = parseFloat(priceInput.value) 
    let discount = parseFloat(discInput.value) 

    
    if (price < 0) price = 0;
    if (discount < 0) discount = 0;
    if (discount > 100) discount = 100;

    const discountAmount = price * (discount / 100);
    const taxAmount = (price - discountAmount) * taxRate;
    
   
    const finalPrice = (price - discountAmount) + taxAmount;
    
    finalOutput.value = finalPrice.toFixed(2);

  
    if (finalPrice > 0 && finalPrice < 500) {
        alert("You unlocked a 'Budget Deal'!");
    }
}

priceInput.addEventListener('input', calculate); 
discInput.addEventListener('input', calculate); 