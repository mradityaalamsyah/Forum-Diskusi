// Elements
const uploadPopup = document.getElementById("upload-popup");
const cancelButton = document.getElementById("cancel-button");
const postButton = document.getElementById("post-button");
const postDescription = document.getElementById("post-description");
const fileInput = document.getElementById("file-input");
const previewImg = document.getElementById("preview-img");
const commentInput = document.getElementById("comment-input");
const commentButton = document.getElementById("comment-button");
const uploadButton = document.getElementById("upload-button");

// Functions
function showUploadPopup() {
    uploadPopup.style.display = "flex";
}

function hideUploadPopup() {
    uploadPopup.style.display = "none";
}

function togglePostButton() {
    const hasText = postDescription.value.trim() !== "";
    postButton.disabled = !hasText;
    postButton.classList.toggle("active", hasText);
}

function adjustTextareaHeight() {
    const maxHeight = 200; // Maximum height in pixels
    this.style.height = "auto";
    this.style.height = Math.min(this.scrollHeight, maxHeight) + "px";
}

function previewImage() {
    const file = this.files[0];
    
    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            previewImg.src = e.target.result;
            previewImg.style.display = "block";
        };
        reader.readAsDataURL(file);
    } else {
        previewImg.style.display = "none";
    }
}

function navigateToPostDetail() {
    const postId = this.getAttribute("data-id");
    window.location.href = `/forum/comment/${postId}`;
}

function toggleCommentButton() {
    commentButton.disabled = this.value.trim() === "";
}

function handleOutsideClick(event) {
    if (event.target === uploadPopup) {
        hideUploadPopup();
    }
}

// Event listeners
uploadButton.addEventListener("click", showUploadPopup);
cancelButton.addEventListener("click", hideUploadPopup);
window.addEventListener("click", handleOutsideClick);
postDescription.addEventListener("input", togglePostButton);
postDescription.addEventListener("input", adjustTextareaHeight);
fileInput.addEventListener("change", previewImage);

// Post navigation
document.querySelectorAll(".post").forEach(post => {
    post.addEventListener("click", navigateToPostDetail);
});

// Comment functionality
if (commentInput && commentButton) {
    commentInput.addEventListener("input", toggleCommentButton);
}