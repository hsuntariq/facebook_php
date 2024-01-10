<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
"></script>

<script>
    let btn = document.querySelector('.reg');
    let form = document.querySelector('.reg-form');
    let icon = document.querySelector('.bi-x-lg');
    btn.addEventListener('click', (e) => {
        e.preventDefault()
        form.style.display = 'flex'
    })
    icon.addEventListener('click', () => {
        form.style.display = 'none'
    })
</script>