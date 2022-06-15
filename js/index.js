const imagsTwoSlider = document.querySelectorAll("#works_slider img");
const allImgSliderTwo = document.querySelectorAll(
  ".works__slidercontainer img"
);
const parentListService = document.querySelector(".service__sliders");
const firstSliderItems = document.querySelectorAll(".service__slider");
const arrowLeft = document.querySelector(".arrow__left");
const arrowRight = document.querySelector(".arrow__right");
const arrowTop = document.querySelector(".arrow__top");
const arrowBottom = document.querySelector(".arrow__bottom");
const buttonTopMap = document.querySelector(".button__topmap");
const buttonBottomMap = document.querySelector(".button__bottommap");

const sliderBlockTransform = document.querySelector(".slider__items");
const sliderSmallBlockSwaper = document.querySelector(".works__smallfoto");
const sliderMaps = document.querySelector(".footer__maps");

let timeSleepTwoSlider = 4000;
let intervalSlider1 = null;
let intervalSlider2 = null;
let intervalSlider3 = null;
window.onload = function () {
  intervalSlider2 = setInterval(
    () => nextImg(sliderBlockTransform),
    timeSleepTwoSlider < 4000 ? 4000 : timeSleepTwoSlider
  );

  intervalSlider1 = setInterval(
    () => changeFirstSlider(firstSliderItems, parentListService),
    4000
  );

  intervalSlider3 = setInterval(
    () => sliderMapsAuto(sliderMaps),
    timeSleepTwoSlider < 4000 ? 4000 : timeSleepTwoSlider
  );
};

//колво картинок всего
let count = 4;
//переменная для суммирования пикселей
let position = 0;

function clickImgChange(event) {
  const targetUrl = event.target.getAttribute("src");

  allImgSliderTwo.forEach((item, id) => {
    item.getAttribute("src") == targetUrl ? (position = 660 * id) : null;
  });
  handleChangeImg();
}

function handlerScroll() {}

function handleChangeImg() {
  clearInterval(intervalSlider2);

  if (position > 660 * count - 1) position = 0;
  sliderBlockTransform.style.transform = `translateX(${-position + "px"})`;
}

let countSmall = 4;

let positionSmall = 0;
arrowTop.addEventListener("click", () => {
});

arrowBottom.addEventListener("click", () => {
  positionSmall += 100;
  if (positionSmall > sliderSmallBlockSwaper.clientHeight - 300)
    positionSmall = sliderSmallBlockSwaper.clientHeight - 300;
  sliderSmallBlockSwaper.style.transform = `translateY(${
    -positionSmall + "px"
  })`;
});

arrowTop.addEventListener("click", () => {
  positionSmall -= 100;
  if (positionSmall < 0) positionSmall = 0;
  sliderSmallBlockSwaper.style.transform = `translateY(${
    -positionSmall + "px"
  })`;
});

let positionMapSlider = 0;

buttonBottomMap.addEventListener("click", () => {
  clearInterval(intervalSlider3);

  positionMapSlider += 400;
  if (positionMapSlider > 800) positionMapSlider = 0;
  sliderMaps.style.transform = `translateY(${-positionMapSlider + "px"})`;
});

buttonTopMap.addEventListener("click", () => {
  clearInterval(intervalSlider3);
  positionMapSlider -= 400;
  if (positionMapSlider < 0) positionMapSlider = 0;
  sliderMaps.style.transform = `translateY(${-positionMapSlider + "px"})`;
});

document
  .querySelector(".works__smallfoto")
  .addEventListener("click", (event) => clickImgChange(event));


function sliderMapsAuto(sliderMaps) {
  positionMapSlider += 400;
  if (positionMapSlider > 800) positionMapSlider = 0;
  sliderMaps.style.transform = `translateY(${-positionMapSlider + "px"})`;
}

sliderMaps.addEventListener("click", (event) => {
  clearInterval(intervalSlider3);
});

function nextImg(sliderBlockTransform) {
  position += 660;
  if (position > 660 * count - 1) position = 0;
  sliderBlockTransform.style.transform = `translateX(${-position + "px"})`;
}

function changeFirstSlider(arrItems) {
  arrItems.forEach((element) => {
    if (
      element.classList.contains("active__slider") ||
      element.classList.contains("active__sliderback")
    ) {
      element.classList.remove("active__slider");
      element.classList.remove("active__sliderback");

      return element.classList.add("no__activeleft");
    }

    if (
      element.classList.contains("no__activeright") ||
      element.classList.contains("no__activerightback")
    ) {
      element.classList.remove("no__activeright");
      element.classList.remove("no__activerightback");
      return element.classList.add("active__slider");
    }
    if (
      element.classList.contains("no__activeleft") ||
      element.classList.contains("no__activeleftback")
    ) {
      element.classList.remove("no__activeleft");
      element.classList.remove("no__activeleftback");
      return element.classList.add("no__activeright");
    }
  });
}

function changeFirstSliderLeft(arrItems) {
  arrItems.forEach((element) => {
    if (
      element.classList.contains("active__slider") ||
      element.classList.contains("active__sliderback")
    ) {
      element.classList.remove("active__slider");
      element.classList.remove("active__sliderback");

      return element.classList.add("no__activerightback");
    }

    if (
      element.classList.contains("no__activeright") ||
      element.classList.contains("no__activerightback")
    ) {
      element.classList.remove("no__activeright");
      element.classList.remove("no__activerightback");

      return element.classList.add("no__activeleftback");
    }
    if (
      element.classList.contains("no__activeleft") ||
      element.classList.contains("no__activeleftback")
    ) {
      element.classList.remove("no__activeleft");
      element.classList.remove("no__activeleftback");
      return element.classList.add("active__sliderback");
    }
  });
}

arrowLeft.addEventListener("click", () => {
  clearInterval(intervalSlider1);
  changeFirstSliderLeft(firstSliderItems);
});

arrowRight.addEventListener("click", () => {
  changeFirstSlider(firstSliderItems);
  clearInterval(intervalSlider1);
});
