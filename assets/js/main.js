/**
 * Shinobi Architect Portfolio JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contact-form');
    const alertBox = document.getElementById('contact-alert');
    const submitBtn = document.getElementById('submit-btn');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const formData = new FormData(contactForm);
            
            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-75');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span>TRANSMITTING...</span>';

            try {
                const response = await fetch('process-contact.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                alertBox.classList.remove('hidden', 'bg-red-100', 'text-red-700', 'bg-green-100', 'text-green-700');

                if (result.status === 'success') {
                    alertBox.classList.add('bg-green-100', 'text-green-800', 'border', 'border-green-300');
                    alertBox.textContent = result.message;
                    contactForm.reset();
                } else {
                    alertBox.classList.add('bg-red-100', 'text-red-800', 'border', 'border-red-300');
                    alertBox.textContent = result.message;
                }
            } catch (error) {
                alertBox.classList.remove('hidden');
                alertBox.classList.add('bg-red-100', 'text-red-800', 'border', 'border-red-300');
                alertBox.textContent = 'An unexpected transmission error occurred.';
            } finally {
                submitBtn.disabled = false;
                submitBtn.classList.remove('opacity-75');
                submitBtn.innerHTML = originalText;
            }
        });
    }
});