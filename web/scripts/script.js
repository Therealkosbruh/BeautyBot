document.addEventListener("DOMContentLoaded", () => {

    // Аккордион
    const accordions = document.querySelectorAll('.accordion');

    accordions.forEach((accordion) => {
        const header = accordion.querySelector('.accordionHeader');
        header.addEventListener('click', () => {
            const content = accordion.querySelector('.accordionContent');
            content.classList.toggle('show');
            if (content.classList.contains('show')){
                header.classList.add('rotate');
                const height = content.scrollHeight;
                content.style.height = height + 'px';
                header.style.marginBottom = "20px";
            }else{
                header.classList.remove('rotate');
                header.style.marginBottom = 0;
                content.style.height = 0;
            }
        });
    })

    // Выбор цвета
    const colorsButtons = document.querySelectorAll('[data-color]');
    const colorName = document.querySelector('.colorName');
    colorsButtons.forEach((button) => {
        button.addEventListener('click', (e) => {
            colorsButtons.forEach((color) => {
                color.classList.remove('active');
            })
            e.target.classList.add('active');
            colorName.textContent = e.target.dataset.color;
        })
    });

    // Выбор способа оплаты

    const payMethods = document.querySelectorAll(".payMethod");
    payMethods.forEach((method) => {
        method.addEventListener('click', (e) => {
            payMethods.forEach((slot) => {
                slot.classList.remove('active');
            })
            e.currentTarget.classList.add('active');
        });
    });
});
