document.getElementById("openModal").onclick = function() {
    document.getElementById("modal").style.display = "flex";
};

document.getElementById("closeModal").onclick = function() {
    document.getElementById("modal").style.display = "none";
};

// Close the modal if the user clicks outside the modal content
window.onclick = function(event) {
    let modal = document.getElementById("modal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
};
