<p>Buy Property insurance</p>
<button onclick="buyInsurance()" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Buy Insurance
</button>
<div id="payment-iframe-container" class="hidden mt-4"></div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<script>
    function buyInsurance() {
        axios.post('/buy-insurance')
            .then(response => {
                if (response.data.success) {
                    console.log(response.data.paymentUrl);
                    const container = document.getElementById('payment-iframe-container');
                    container.innerHTML = `<iframe src="${response.data.paymentUrl}" style="border: none; outline: none;" width="800" height="800" class="w-full h-96 border-0"></iframe>`;
                    container.classList.remove('hidden');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                const errorMessage = error.response?.data?.message || 'Failed to process insurance purchase. Please try again.';
                alert(errorMessage);
            });
    }
</script>
