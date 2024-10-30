window.onscroll = function() {
    var body = document.body;
    if (window.scrollY > 70) {
        body.classList.add("fix-body");
    } else {
        body.classList.remove("fix-body");
    }
};

document.addEventListener('DOMContentLoaded', function() {
    const alert = document.querySelector('.alert-success');
    if (alert) {
        setTimeout(() => {
            alert.style.opacity = '0';
            setTimeout(() => {
                alert.remove();
            }, 500); 
        }, 3000);
    }
});                                 