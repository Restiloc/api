import './bootstrap';

const switcher = document.querySelector(".theme__switcher");
const indicator = switcher.children[0];

const swap = () => {
  let themeState = {
    previous: indicator.dataset.theme,
    next: indicator.dataset.next,
  };
  switcher.id = themeState.next;
  indicator.dataset.theme = themeState.next;
  indicator.dataset.next = themeState.previous;
  indicator.src = indicator.src.replace(themeState.previous, themeState.next);
  document.body.dataset.theme = themeState.next;
	iphone(themeState.next);
  store(themeState.next);
};

const iphone = (theme) => {
	document.querySelector(".application__illustration").querySelector('img').src = `/static/images/${theme}-iphone.svg`
}

const store = (theme) => {
	console.log(theme);
  document.cookie = "theme=" + theme + ";path=/";
};

window.addEventListener('DOMContentLoaded', () => {
	switcher.addEventListener("click", swap);
})