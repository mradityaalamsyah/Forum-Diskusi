document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const replyButton = document.getElementById('reply-button');
    const replyPopup = document.getElementById('reply-popup');
    const cancelReply = document.getElementById('cancel-reply');
    const replyDescription = document.getElementById('reply-description');
    const submitReply = document.getElementById('submit-reply');
    const replyFileInput = document.getElementById('reply-file-input');
    const replyPreviewImg = document.getElementById('reply-preview-img');
    const replyForm = document.getElementById('reply-form');
    
    // Functions
    function showReplyPopup() {
        replyPopup.style.display = 'flex';
    }
    
    function resetAndHideReplyPopup() {
        replyPopup.style.display = 'none';
        replyDescription.value = '';
        replyPreviewImg.style.display = 'none';
        replyPreviewImg.src = '';
        replyDescription.style.height = 'auto'; // Reset textarea height
    }
    
    function toggleSubmitButton() {
        const hasText = replyDescription.value.trim() !== '';
        submitReply.disabled = !hasText;
        submitReply.classList.toggle('active', hasText);
    }
    
    function adjustTextareaHeight() {
        const maxHeight = 200; // Maximum height in pixels
        this.style.height = 'auto';
        this.style.height = Math.min(this.scrollHeight, maxHeight) + 'px';
    }
    
    function previewReplyImage() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                replyPreviewImg.src = e.target.result;
                replyPreviewImg.style.display = 'block';
                submitReply.disabled = false;
                submitReply.classList.add('active');
            };
            reader.readAsDataURL(file);
        }
    }
    
    function handleFormSubmit(e) {
        e.preventDefault();
        alert('Fungsi reply akan diimplementasikan nanti');
        resetAndHideReplyPopup();
    }
    
    // Event listeners
    replyButton.addEventListener('click', showReplyPopup);
    cancelReply.addEventListener('click', resetAndHideReplyPopup);
    replyDescription.addEventListener('input', toggleSubmitButton);
    replyDescription.addEventListener('input', adjustTextareaHeight); // Added textarea auto-height
    replyFileInput.addEventListener('change', previewReplyImage);
    replyForm.addEventListener('submit', handleFormSubmit);
});