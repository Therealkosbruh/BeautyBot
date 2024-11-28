document.addEventListener("DOMContentLoaded", () => {
  // Аккордион
  const accordions = document.querySelectorAll(".accordion");

  accordions.forEach((accordion) => {
    const header = accordion.querySelector(".accordionHeader");
    header.addEventListener("click", () => {
      const content = accordion.querySelector(".accordionContent");
      content.classList.toggle("show");
      if (content.classList.contains("show")) {
        header.classList.add("rotate");
        const height = content.scrollHeight;
        content.style.height = height + "px";
        header.style.marginBottom = "20px";
      } else {
        header.classList.remove("rotate");
        header.style.marginBottom = 0;
        content.style.height = 0;
      }
    });
  });

  // Выбор способа оплаты

  const payMethods = document.querySelectorAll(".payMethod");
  payMethods.forEach((method) => {
    method.addEventListener("click", (e) => {
      payMethods.forEach((slot) => {
        slot.classList.remove("active");
      });
      e.currentTarget.classList.add("active");
      let hiddenField = document.querySelector('input[name="payment_method"]');
      hiddenField.value = e.currentTarget.textContent.trim();
    });
  });



    const payType = document.querySelectorAll(".payType");
    payType.forEach((method) => {
      method.addEventListener("click", (e) => {
        payType.forEach((slot) => {
          slot.classList.remove("active");
        });
        e.currentTarget.classList.add("active");
        let hiddenField = document.querySelector('input[name="payment_type"]');
        hiddenField.value = e.currentTarget.textContent.trim();
      });
    });

  // Фильтры на странице товаров

  const currentUrl = window.location.href;
  if (currentUrl.includes("/web/products/index")) {
    const showSearchButton = document.querySelector("#showSearchButton"),
      showFilterButton = document.querySelector("#showFilterButton"),
      showFilterButtonImg = document.querySelector("#showFilterButton img"),
      showSearchButtonImg = document.querySelector("#showSearchButton img");

    showSearchButton.addEventListener("click", function (e) {
      document.querySelector(".search").classList.toggle("hidden");
      showSearchButtonImg.classList.toggle("active");
      document.querySelector(".filterButtons").classList.add("hidden");
      showFilterButtonImg.classList.remove("active");
    });

    showFilterButton.addEventListener("click", function (e) {
      document.querySelector(".filterButtons").classList.toggle("hidden");
      showFilterButtonImg.classList.toggle("active");
      document.querySelector(".search").classList.add("hidden");
      showSearchButtonImg.classList.remove("active");
    });

    let urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has("chip") && urlParams.get("chip") === "1") {
      showFilterButtonImg.classList.add("active");
      document.getElementById("chipLink").classList.add("active");
      document.querySelector(".filterButtons").classList.remove("hidden");
    }
    if (urlParams.has("mark")) {
      document.querySelector(".filterButtons").classList.remove("hidden");
      showFilterButtonImg.classList.add("active");
      switch (urlParams.get("mark")) {
        case "new":
          const newMark = document.getElementById("newLink");
          newMark.classList.add("active");
          newMark.href = "/web/products/index";
          break;
        case "sale":
          const saleMark = document.getElementById("saleLink");
          saleMark.classList.add("active");
          saleMark.href = "/web/products/index";
          break;
        case "hot":
          const hotMark = document.getElementById("hotLink");
          hotMark.classList.add("active");
          hotMark.href = "/web/products/index";
          break;
        default:
          break;
      }
    }
    if (urlParams.has("search")) {
      showSearchButtonImg.classList.add("active");
      document.querySelector(".search").classList.remove("hidden");
    }
  }

  // Мягкий скролл до видео

  document.querySelectorAll(".videoButton").forEach((button) => {
    button.addEventListener("click", function (event) {
      event.preventDefault();

      const videoElement = document.getElementById("video");
      const topPosition = videoElement.offsetTop;

      smoothScroll(topPosition);
    });
  });

  function smoothScroll(targetPosition) {
    let startTime = null;

    function animate(time) {
      if (!startTime) startTime = time;
      const progress = time - startTime;
      const distance =
        Math.min(progress / 500, 1) * (targetPosition - window.scrollY);
      window.scrollBy(0, distance);
      if (progress < 500) {
        requestAnimationFrame(animate);
      }
    }
    requestAnimationFrame(animate);
  }

  // Добавление в корзину и сама корзина

  if (currentUrl.includes("/web/products/product")) {
    let urlParams = new URLSearchParams(window.location.search);
    const addToCartButton = document.querySelector(".addToCartButton");

    function checkDuplicate() {
      let cartItems = JSON.parse(localStorage.getItem("cartItems"));
      if (cartItems) {
        let color = document.querySelector(".colorName") ? document.querySelector(".colorName").textContent : null;
        for (let i in cartItems) {
          if (
            cartItems[i].product_id === urlParams.get("id") &&
            cartItems[i].color ===
            color || null
          ) {
            addToCartButton.style.backgroundColor = "green";
            addToCartButton.textContent = "В корзину";
          } else {
            addToCartButton.style.backgroundColor = "blue";
            addToCartButton.textContent = "Добавить в корзину";
          }
        }
      }
      return false;
    }

    document
      .querySelector(".addToCartButton")
      .addEventListener("click", function (e) {
        if (addToCartButton.textContent === "В корзину") {
          e.preventDefault();
          return (window.location.href = "/web/cart/index");
        }
        let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

        cartItems.push({
          product_id: e.target.dataset.productid,
          name: document.getElementById("productName").textContent,
          color: document.querySelector(".colorName") ? document.querySelector(".colorName").textContent : null,
          price: document.querySelector(".price").textContent,
          image: document.getElementById("productImageMain").src,
          oldPrice: document.querySelector(".productPriceDiscount") ? document.querySelector(".productPriceDiscount").textContent : 0,
          quantity: 1,
        });
        localStorage.setItem("cartItems", JSON.stringify(cartItems));
        checkDuplicate();
      });

    checkDuplicate();
  }

  function displayCartItems() {
    let cartItems = JSON.parse(localStorage.getItem("cartItems"));

    let itemsHtml = "";
    let sum = 0;
    let discount = 0;
    let withoutDiscount = 0;

    if (cartItems) {
      for (let i in cartItems) {
        withoutDiscount += cartItems[i].oldPrice ? (parseInt(cartItems[i].oldPrice.replace(/[^0-9]/g, '')) * cartItems[i].quantity) : parseInt(cartItems[i].price.replace(/[^0-9]/g, ''));
        discount += cartItems[i].oldPrice ? (parseInt(cartItems[i].oldPrice.replace(/[^0-9]/g, '')) * cartItems[i].quantity) - (parseInt(cartItems[i].price.replace(/[^0-9]/g, '')) * cartItems[i].quantity) : 0;
        sum += (parseInt(cartItems[i].price.replace(/[^0-9]/g, ''))) * cartItems[i].quantity;
        itemsHtml +=
        `<div class="productCart">
            <button data-index="${i}" class="removeItem">Удалить</button>
            <div class="leftSide">
                <img src="${cartItems[i].image}" alt="product">
            </div>
            <div class="rightSide flexColumn">
                <span class="productCartName">
                    ${cartItems[i].name}
                </span>
                <div class="productCartColorBlock flexRow">
                    <span class="productCartColor">Цвет: </span>    
                    <span class="productCartColorName">${cartItems[i].color === null ? "Отсутствует" : cartItems[i].color}</span>
                </div>
                <div class="productCartPrice">
                    <span>${(cartItems[i].price.replace(/[^0-9]/g, '') * cartItems[i].quantity).toLocaleString('ru-RU')} ₽</span>
                </div>
                <div class="productCartCount flexRow"> 
                    <button data-index="${i}" class="minusItem">-</button>
                    <span class="countNumber">${cartItems[i].quantity}</span>
                    <button data-index="${i}" class="plusItem">+</button>
                </div>
            </div>
        </div>`
      }



      $(".productsAtCart").html(itemsHtml);
      $(".withoutDiscount").html(withoutDiscount.toLocaleString('ru-RU') + " ₽");
      $(".discount").html(discount.toLocaleString('ru-RU') + " ₽");
      $(".finalPriceSpan").html(sum.toLocaleString('ru-RU') + " ₽");
      $("#summary").val(sum + " рублей");
      $(".splitSpanParts").html((sum / 4).toLocaleString('ru-RU') + " ₽x4");
      $(".splitSpan").html(sum.toLocaleString('ru-RU') + " ₽");
    } else {
      $(".productsAtCart").innerHTML = "Корзина пуста.";
    }
  }

  function minusQuantity(index){
    let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

    if (cartItems[index].quantity > 1) cartItems[index].quantity--;

    localStorage.setItem("cartItems", JSON.stringify(cartItems));
    location.reload()
  }

  function plusQuantity(index){
    let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

    cartItems[index].quantity++;

    localStorage.setItem("cartItems", JSON.stringify(cartItems));
    location.reload()
  }

  window.onload = () => {
    document.querySelectorAll('.removeItem').forEach((e) => {
      e.addEventListener('click', (el) => {
        removeFromCart(el.target.dataset.index)
      })
    })
    document.querySelectorAll('.minusItem').forEach((e) => {
      e.addEventListener('click', (el) => {
        minusQuantity(el.target.dataset.index)
      })
    })
    document.querySelectorAll('.plusItem').forEach((e) => {
      e.addEventListener('click', (el) => {
        plusQuantity(el.target.dataset.index)
      })
    })
    if(document.getElementById('productsData')){
      document.getElementById('productsData').value = JSON.stringify(localStorage.getItem("cartItems"));
    }
  }
  function removeFromCart(index) {
    let cartItems = JSON.parse(localStorage.getItem("cartItems"));
    console.log(index, cartItems)
    cartItems.splice(index, 1);
    console.log(index, cartItems)
    localStorage.setItem("cartItems", JSON.stringify(cartItems));
    location.reload()
  }

  displayCartItems();

  // Выбор цвета
  const colorsButtons = document.querySelectorAll("[data-color]");
  const productImage = document.getElementById("productImageMain");
  const colorName = document.querySelector(".colorName");
  colorsButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      colorsButtons.forEach((color) => {
        color.classList.remove("active");
      });
      e.target.classList.add("active");
      colorName.textContent = e.target.dataset.color;
      productImage.src = e.target.dataset.image;

      checkDuplicate();
    });
  });
});
