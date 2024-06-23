const introBuy = document.querySelector('.intro-buy-item')
const modalOpen = document.querySelector('.intro-more-info')
const modal = document.querySelector('.modal-cart')
const modalTextInner = document.querySelector('.modal__cart-box__inner')
const cartBtnBadge = document.querySelector('.intro__buy-btn')
toggleCartStatus();

window.addEventListener('click', function (event) {
    const introItem = event.target.closest('.intro__inner-item')
    const modalCart = document.querySelector('.modal__cart-inner')
    const buyModal = document.querySelector('.buy-modal-cart')
    if (event.target == cartBtnBadge) {
        buyModal.style.display = 'flex';
    } else if (event.target == buyModal) {
        buyModal.style.display = 'none'
    }
    if (introItem) {
        const introItemInfo = {
            id: introItem.dataset.id,
            title: introItem.querySelector('.intro-title').innerText
        }

        if (event.target.classList.contains('intro-more-info')) {
            // Удаляем элемент с классом modal__cart-title, если он существует
            const deleteTitle = modalCart.querySelector('.modal__cart-title');
            const deleteImg = document.querySelector('.modal__cart-img')
            if (deleteImg) {
                deleteImg.remove();
            }
            if (deleteTitle) {
                deleteTitle.remove();
            }
            const modalText = document.querySelector('.modal__cart-box__inner-text')
            if (modalText) {
                modalText.remove();
            }
            const introItem = `
            <div class="modal__cart-title">${introItemInfo.title}</div>`

            const cartTwo = `<div class="modal__cart-box__inner-text">В постоянной экспозиции Главного здания
            музея представлено зарубежное искусство разных стран и эпох, с древнейших времен
            до начала XIX века. Это обширная коллекция тонированных гипсовых слепков с
            произведений античности, Средних веков и Возрождения, а также собрание
            подлинников живописи, скульптуры, графики и декоративно-прикладного искусства.
            Особое внимание привлекают памятники Древнего Египта, сокровища, обнаруженные
            Генрихом Шлиманом при раскопках Трои, работы выдающихся европейских художников
            Возрождения и Нового времени — Сандро Боттичелли, Рембрандта Харменса ван Рейна,
            Петера Пауля Рубенса, Эль Греко, Никола Пуссена, Антуана Ватто. Главное здание
            музея построено на рубеже XIX–XX веков по проекту архитектора Р.И. Клейна.
            Важную роль в погружении в ту или иную историческую эпоху играют музейные
            интерьеры — архитектурное оформление залов соответствует представленным в них
            экспонатам.</div>`
            const cartFour = `<div class="modal__cart-box__inner-text">Основу постоянной экспозиции Галереи искусства стран Европы и Америки XIX–XX веков составляют шедевры французского импрессионизма, постимпрессионизма и авангардных течений начала XX столетия из коллекций московских собирателей Сергея Щукина и Ивана Морозова. Это всемирно известные произведения Клода Моне, Пьера Огюста Ренуара, Эдгара Дега, Поля Сезанна, Винсента ван Гога, Поля Гогена, Анри Матисса, Пабло Пикассо.
            Здесь также представлены живопись и скульптура романтизма, реализма, академизма, искусство символизма, абстракционизма и других художественных направлений XX века.</div>`
            const cartOneImg = `<img src="img/header/mus2.jpg" alt="" class="modal__cart-img">`
            const cartTwoImg = `<img src="img/header/mus.jpg" alt="" class="modal__cart-img">`
            const cartThreeImg = `<img src="img/header/mus3.jpg" alt="" class="modal__cart-img">`
            const cartFourImg = `<img src="img/header/galer.jpg" alt="" class="modal__cart-img">`
            const cartOne = `
            <div class="modal__cart-box__inner-text">Для взрослых
            Билет дает право осмотра постоянной экспозиции Главного здания с 17:00 в день проведения мероприятия.
            Дискуссия в Итальянском дворике ГМИИ им. А.С. Пушкина будет посвящена осмыслению опыта художественных и творческих резиденций. Участники обсудят специфику и методы работы художников, писателей, исследователей и других резидентов, а также кураторов, и подведут итоги первой художественной резиденции в Мастерской Эдуарда Штейнберга.
            
            Участники дискуссии:
            Сергей Бояринцев, художник, резидент первой художественной резиденции в Мастерской Эдуарда Штейнберга в Тарусе;
            Ася Заславская, художник;
            Анна Зиновьева, искусствовед, куратор художественной резиденции в Мастерской Эдуарда Штейнберга в Тарусе, ведущий специалист отдела региональных проектов ГМИИ им. А.С. Пушкина;
            Роман Романов, директор музея истории ГУЛАГа;
            Алиса Савицкая, главный куратор студии «Тихая», приглашенный куратор Музея Москвы;
            Юлия Вронская, директор по развитию Дома творчества Переделкино;
            Евгения Петровская, куратор резиденций Дома творчества Переделкино.
            Модератор — Дарья Колпашникова, кандидат искусствоведения, начальник отдела региональных проектов ГМИИ им. А.С. Пушкина.</div>`
            modalCart.insertAdjacentHTML('afterbegin', introItem)
            if (introItemInfo.id == '01') {
                modalCart.insertAdjacentHTML("afterbegin", cartOneImg)
                modalTextInner.insertAdjacentHTML('afterbegin', cartOne)
            } else if (introItemInfo.id == '02') {
                modalCart.insertAdjacentHTML("afterbegin", cartTwoImg)
                modalTextInner.insertAdjacentHTML('afterbegin', cartTwo)
            } else if (introItemInfo.id == '03') {
                modalCart.insertAdjacentHTML("afterbegin", cartThreeImg)
                modalTextInner.insertAdjacentHTML('afterbegin', cartTwo)
            } else if (introItemInfo.id == '04') {
                modalCart.insertAdjacentHTML("afterbegin", cartFourImg)
                modalTextInner.insertAdjacentHTML('afterbegin', cartFour)
            }
        }
    }


    if (event.target.classList.contains('intro-more-info')) {
        modal.style.display = 'flex';
    } else if (event.target == modal) {
        modal.style.display = 'none';
    }
    if (event.target.hasAttribute('data-cart')) {
        const bilet = event.target.closest('.intro__inner-item')
        /* ОБЪЕКТ */
        const biletInfo = {
            id: bilet.dataset.id,
            imgSrc: bilet.querySelector('.intro-img').getAttribute('src'),
            title: bilet.querySelector('.intro-title').innerText,
            price: bilet.querySelector('.intro-btn').innerText,
        };

        const itemInBilet = introBuy.querySelector(`[data-id="${biletInfo.id}"]`)
        if (itemInBilet) {
            const counterEl = itemInBilet.querySelector('[data-counter]');
            counterEl.innerText = parseInt(counterEl.innerText) + 1;
        } else {

            /* ШАБЛОНЫЕ СТРОКИ */
            const biletItem = `
        <div class="intro-buy-item bilet-card" data-id="${biletInfo.id}">
        <div class="biletCardOption">
            <img src="${biletInfo.imgSrc}" alt="" class="intro-buy-item-img">
            <div class="intro-buy-close" data-close>X</div>
        </div>
        <div class="intro-buy-item-counter-style">
            <div class="intro-buy-item-title">${biletInfo.title}</div>
            <div class="intro-buy-item-counter" data-counter>1</div>
        </div>    
            <div class="intro-btn-text-inner">
            <div class="intro-btn-text">Стоимость билета:</div>
            <div class="intro__btn-text orange">${biletInfo.price}</div>
            <div class="intro-btn-text orange">Р</div>
            </div>
            </div>`;
            introBuy.insertAdjacentHTML('beforeend', biletItem)

            toggleCartStatus();
            calcBiletPrice();
        }


    }
    /* УДАЛЕНИЕ ТОВАРА */
    if (event.target.hasAttribute('data-close')) {
        if (event.target.closest('.biletCardOption')) {
            event.target.closest('.intro-buy-item').remove();
        }
    }
    calcBiletPrice();
    toggleCartStatus();

})
/* ПУСТАЯ / ПОЛНАЯ КОРЗИНА */
function toggleCartStatus() {
    const introBuy = document.querySelector('.intro-buy-item')
    const cartPriceBadge = document.querySelector('.intro__buy-price')
    const cartPriceInfo = document.querySelector('.intro__buy-total-price-text')
    const cartPriceInfoView = document.querySelector('.intro__buy-total-price')
    if (introBuy.children.length < 1) {
        cartBtnBadge.classList.add('none')
        cartPriceBadge.classList.add('none')
        cartPriceInfo.classList.add('none')
        cartPriceInfoView.classList.add('none')

    } else {
        cartBtnBadge.classList.remove('none')
        cartPriceBadge.classList.remove('none')
        cartPriceInfo.classList.remove('none')
        cartPriceInfoView.classList.remove('none')
    }

};
/* ПОДСЧЕТ СТОИМОСТИ ТОВАРОВ */
function calcBiletPrice() {
    const biletItems = document.querySelectorAll('.bilet-card');
    const totalPriceEl = document.querySelector('.intro__buy-total-price');
    let priceTotal = 0;

    biletItems.forEach(function (item) {
        const priceEL = item.querySelector('.intro__btn-text');
        const counterEl = item.querySelector('[data-counter]')
        const currentPrice = parseInt(priceEL.innerText) * parseInt(counterEl.innerText);
        priceTotal += currentPrice;
    });
    totalPriceEl.innerText = priceTotal;

}






