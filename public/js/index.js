document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.ingredient-btn')
    const circle = document.getElementById('circle')
    const rotations = {
        'btn-1': 0,
        'btn-2': -90,
        'btn-3': -180,
        'btn-4': -270
    }

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const rotation = rotations[button.id]
            circle.style.transform = `translateX(56%) translateY(55%) rotate(${rotation}deg)`
        })
    })
    circle.style.transform = 'translateX(56%) translateY(55%) rotate(0deg)';
})