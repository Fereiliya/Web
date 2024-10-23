document.getElementById('checkPriceBtn').addEventListener('click', function() {
    const weight = parseInt(document.getElementById('weight').value);
    const servicePricePerKilo = parseInt(document.getElementById('service').value);
    const speed = document.getElementById('speed').value;
    const membership = document.getElementById('membership').value;
    const coupon = document.getElementById('coupon').checked;

    let totalPrice = servicePricePerKilo * weight;

    // Add additional cost for express service
    if (speed === 'express') {
        totalPrice += 2000 * weight;
    }

    // Apply coupon for 2 kg discount on the 6th wash
    if (coupon) {
        totalPrice -= servicePricePerKilo * 2;  // Deduct price for 2 kg
    }

    // Apply 10% discount for members
    if (membership === 'member') {
        totalPrice = totalPrice * 0.9;
    }

    // Display the result
    document.getElementById('result').textContent = 'Total yang harus dibayar: Rp ' + totalPrice;
});
