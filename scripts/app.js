const bd = document.getElementsByTagName("body");
// const bdy = document.querySelector(".portfolio_body");
const man = document.querySelector(".main");
const header = document.querySelector(".portfolio_header");
const heading = document.querySelector(".portfolio_heading");
const main_heading = document.querySelector(".portfolio_span");
const nav = document.querySelector(".portfolio_nav");
const portfolio = document.querySelectorAll(".portfolio");
const s1 = document.querySelector(".s1");
const s2 = document.querySelector(".s2");
const s3 = document.querySelector(".s3");

const t1 = new TimelineMax();

t1.fromTo(bd, 1,
{
    width: "0%"
},
{
    width: "100%", 
    ease: Power2.easeInOut 
})

.fromTo(heading, 1, {opacity: 0},{opacity: 1})

.fromTo(portfolio, 1, {opacity: 0},{opacity: 1},"-=1")

.fromTo(main_heading, 1, {y: "100%"},{y: "0%", ease: Power2.easeInOut})

new fullpage("#main",{
    autoScrolling: true,
    navigation: true
})

var i = 0;
var txt = ""