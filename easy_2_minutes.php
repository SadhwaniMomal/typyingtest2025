<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FN6D6DKXMN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FN6D6DKXMN');
</script>
    <meta charset="UTF-8" />
    <title>TypingTwist.com - Two_Minute_Easy</title>
    <link rel="icon" href="logo2.jpg" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/paper/bootstrap.min.css" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>

<style>
html {
    font-size: .94rem;

}

@media (max-width: 940px) {
    html {
        font-size: .9rem;


    }

}

@media (max-width: 880px) {
    html {
        font-size: .84rem;


    }

}

@media (max-width: 820px) {
    html {
        font-size: .77rem;


    }

}


@media (max-width: 730px) {
    html {
        font-size: .77rem;

        .background {
            display: none;
        }
         .background.move-down {
        display: none !important;
    }

    }

}

@media (max-width: 700px) {
    html {
        font-size: .75rem;

        .background {
            display: none;
        }
        .background.move-down {
        display: none !important;
    }
    }

}


@media (max-width: 650px) {
    html {
        font-size: .71rem;



    }

}

@media (max-width: 600px) {
    html {
        font-size: .68rem;



    }

}


@media (max-width: 570px) {
    html {
        font-size: .65rem;


    }

}

@media (max-width: 540px) {
    html {
        font-size: .63rem;

    }

}

@media (max-width: 520px) {
    html {
        font-size: .6rem;

    }

}

@media (max-width: 490px) {
    html {
        font-size: .56rem;


    }




}


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;

}

body {
    min-height: 100vh;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    font-size: 1.25rem;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

/* Default mode background gradient */
body:not(.dark-mode) {
    background: rgb(221, 241, 255);
    background: linear-gradient(90deg, rgba(221, 241, 255, 1) 0%, rgba(209, 242, 255, 1) 47%, rgba(211, 241, 255, 1) 100%);
}

/* Dark mode background color */
body.dark-mode {
    background-color: #222;
    color: #fff;
}



.container {
    background: rgb(243, 252, 255);
    background: linear-gradient(90deg, rgba(243, 252, 255, 1) 0%, rgba(242, 250, 255, 1) 47%, rgba(240, 250, 255, 1) 100%);
    border-radius: 1.25rem;
    padding: 1rem;
    position: absolute;
    margin-top: 20rem;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 0.1rem solid #bac8de;
    width: 48rem;
    align-items: center;
    justify-content: center;
}




.container .input-field {
    z-index: -999;
    opacity: 0;
    position: absolute;
}

.content-box .text-of-typing {
    max-height: 21.875rem;
    /* 350px */
    max-width: 38rem;
    /* 600px */
    overflow: hidden;
}

.content-box .text-of-typing::-webkit-scrollbar {
    width: 0;
}

.dark-mode {
    --blinking-color: white; /* Color for dark mode */

    .container {
        background: #2b2b2b;

    }

    .paragraphsection {
        background: #3f3f40;
        color: white;
    }

    .flip-card-front {
        background: #3f3f40;
    }

    .paragraphtext {
        color: white;
    }

    .paragraphtext1 {
        color: white;
    }

    .subtitle{
        color: white;
    }

    .content-box.noob .text-of-typing p {
        color: white;
    }

    .content-box.pro .text-of-typing p {
        color: white;
    }

    #start-message {
        color: white;
    }

    .background {
        background: #2b2b2b;
    }

    .container button {
        background: #2b2b2b;
    }

    .achievement-box {
        background: #2b2b2b;
    }

    .achievement-chart-box {
        background: #2b2b2b;
    }

    button#home-btn {
        background: #2b2b2b;
    }

    button#try-again-achievement-btn {
        background: #2b2b2b;
    }

    #achievement-remarks {
        color: white;
    }

    .sidebar {
        background: #666666;
    }

    .sidebar li a {
        background: none;
    }

    .sidebar .logo_details #btn {
        background: #666666;
    }

    footer {
        color: white;
    }
    

}

.content-box.noob .text-of-typing p {
    text-align: justify;
    font-size: 2.15625rem;
    /* 34.5px */
    letter-spacing: 0.2rem;
    word-spacing: .9rem;
    /* 2px */
    line-height: 2.5;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: #000;
    margin-top: -.5rem;
}

.content-box.pro .text-of-typing p {
    text-align: justify;
    font-size: 2rem;
    /* 32px */
    line-height: 1.78;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: #000;


}

.content-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.content-box .content {
    display: flex;
    align-items: center;
    flex-direction: column;
    width: 17%;
    text-align: center;
    line-height: 1.25rem;
    /* 20px */
}

.content .result {
    padding: 1.3rem;
    /* 19px */
    border-radius: 3.625rem;
    /* 10px */
    display: block;
    text-shadow: 0 0 0.2rem rgba(0, 0, 0, 0.5);

}

.content .result li {

    /* 1px */
    list-style: none;
}

.content .result li:last-child {
    border-bottom: none;

}

.result li.time,
.result li.errors,
.result li.wpm,
.result li.cpm {
    font-size: 1.16rem;
    color: WHITE;

    /* 20px */
}

.result li.time p,
.result li.errors p,
.result li.wpm p,
.result li.cpm p {

    margin-bottom: .2rem;


}

.container button {
    position: absolute;
    cursor: pointer;
    font-size: .9rem;
    /* 18px */
    letter-spacing: 0.125rem;
    /* 2px */
    text-transform: uppercase;
    display: inline-block;
    text-align: center;
    font-weight: bold;
    padding: 0.4rem 1.3rem;
    border: 0.1rem solid #bac8de;
    /* 3.5px */
    border-radius: 0.125rem;
    /* 2px */
    box-shadow: 0 0.125rem 0.625rem rgba(0, 0, 0, 0.16), 0 0.1875rem 0.375rem rgba(0, 0, 0, 0.1);
    color: #0084ff;
    text-decoration: none;
    transition: 0.3s ease all;
    z-index: 1;
    margin-top: -.4rem;
    /* 20px */

}

.container button:before {
    transition: 0.5s all ease;
    position: absolute;
    top: 0;
    left: 50%;
    right: 50%;
    bottom: 0;
    opacity: 0;
    content: '';
    background-color: #0084ff;
    z-index: -1;
}

.container button:hover,
.container button:focus {
    color: white;
    transform: scale(1.10);
}

.container button:hover:before,
.container button:focus:before {
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1;
}

.container button:active {
    transform: scale(0.9);
}

.text-of-typing p span.correct {
    color: rgb(15, 235, 15);
}

.text-of-typing p span.incorrect {
    color: rgb(236, 25, 25);
}

#page {
    display: flex;
    justify-content: center;
    align-items: center;
}

#container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    margin-top: 15rem;
}

#h3 {
    color: rgb(82, 79, 79);
    font-size: 1.625rem;
    /* 26px */
    margin-top: 1.25rem;
    text-align: center;
    line-height: 2.5rem;
    /* 40px */
}


#ring {
    width: 24.375rem;
    /* 390px */
    height: 24.375rem;
    /* 390px */
    border: 0.0625rem solid transparent;
    /* 1px */
    border-radius: 50%;
    position: absolute;
}


#ring:nth-child(1) {
    border-bottom: 0.5rem solid rgb(240, 42, 230);
    /* 8px */
    animation: rotate1 2s linear infinite;
}


@keyframes rotate1 {
    from {
        transform: rotateX(50deg) rotateZ(110deg);
    }

    to {
        transform: rotateX(50deg) rotateZ(470deg);
    }
}

#ring:nth-child(2) {
    border-bottom: 0.5rem solid rgb(240, 19, 67);
    animation: rotate2 2s linear infinite;
}

@keyframes rotate2 {
    from {
        transform: rotateX(20deg) rotateY(50deg) rotateZ(20deg);
    }

    to {
        transform: rotateX(20deg) rotateY(50deg) rotateZ(380deg);
    }
}

#ring:nth-child(3) {
    border-bottom: 0.5rem solid rgb(3, 170, 170);
    animation: rotate3 2s linear infinite;
}

@keyframes rotate3 {
    from {
        transform: rotateX(40deg) rotateY(130deg) rotateZ(450deg);
    }

    to {
        transform: rotateX(40deg) rotateY(130deg) rotateZ(90deg);
    }
}

#ring:nth-child(4) {
    border-bottom: 0.5rem solid rgb(207, 135, 1);
    animation: rotate4 2s linear infinite;
}

@keyframes rotate4 {
    from {
        transform: rotateX(70deg) rotateZ(270deg);
    }

    to {
        transform: rotateX(70deg) rotateZ(630deg);
    }
}

.achievement-box {
    display: none;
    position: absolute;
    margin-top: 18rem;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 1.8rem;
    border-radius: 1.5625rem;
    color: black;
    text-align: center;
    font-family: Arial, sans-serif;
    border: 0.1rem solid #bac8de;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    width: 45rem;


}

.achievement-box h2 {
    font-size: 2.5rem;
    /* 40px */
}

.achievement-box p {
    font-size: 2rem;
    /* 32px */
    margin: .1rem;
    /* 15px */
}


.achievement-box span {
    font-weight: bold;
    color: #ffc107;
}



button#try-again-achievement-btn {
    position: absolute;
    cursor: pointer;
    font-size: 0.9375rem;
    /* 15px */
    letter-spacing: 0.125rem;
    /* 2px */
    text-transform: uppercase;
    display: inline-block;
    text-align: center;
    font-weight: bold;
    font-style: normal;
    padding: 0.4375rem 1.25rem;
    /* 7px 20px */
    border: 0.1rem solid #bac8de;
    /* 3px */
    border-radius: 0.125rem;
    /* 2px */
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);

    color: #0084ff;
    text-decoration: none;
    transition: 0.3s ease all;
    z-index: 1;
    margin-top: .5rem;
    /* 20px */
    margin-left: 9.5rem;
    /* 115px */
}

button#home-btn {
    position: absolute;
    cursor: pointer;
    font-size: 0.9375rem;
    /* 15px */
    letter-spacing: 0.125rem;
    /* 2px */
    font-style: normal;
    text-transform: uppercase;
    display: inline-block;
    text-align: center;
    font-weight: bold;
    padding: 0.4375rem 1.25rem;
    /* 7px 20px */
    border: 0.1rem solid #bac8de;
    /* 3px */
    border-radius: 0.125rem;
    /* 2px */
    color: #0084ff;
    text-decoration: none;
    transition: 0.3s ease all;
    z-index: 1;
    /* Set the background color to match the achievement box color */
    margin-left: -18.5rem;
    /* -280px */
    margin-top: .5rem;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    /* 20px */
}

/* Pseudo-element for the buttons */
button#try-again-achievement-btn:before {
    transition: 0.5s all ease;
    position: absolute;
    top: 0;
    left: 50%;
    right: 50%;
    bottom: 0;
    opacity: 0;
    content: '';
    background-color: #0084ff;
    z-index: -1;
}

button#home-btn:before {
    transition: 0.5s all ease;
    position: absolute;
    top: 0;
    left: 50%;
    right: 50%;
    bottom: 0;
    opacity: 0;
    content: '';
    background-color: #0084ff;
    z-index: -1;
}


/* Hover and focus styles for the buttons */
button#try-again-achievement-btn:hover,
.button#try-again-achievement-btn:focus {
    color: white;
    transform: scale(1.10);
}

button#home-btn:hover,
.button#home-btn:focus {
    color: white;
    transform: scale(1.10);
}

/* Pseudo-element hover and focus styles */
button#try-again-achievement-btn:hover:before,
.button#try-again-achievement-btn:focus:before {
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1;
}

button#home-btn:hover:before,
.button#home-btn:focus:before {
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1;
}

/* Active style for the buttons */
button#try-again-achievement-btn:active {
    transform: scale(0.9);
}

button#home-btn:active {
    transform: scale(0.9);
}

/* Switch button styles */
.switch {
    font-size: 0.9rem;
    position: relative;
    display: inline-block;
    width: 10rem;
    /* Adjusted from 150px */
    height: 1.4rem;
    margin-left: 16.5rem;
    /* Adjusted from 18rem */
    margin-top: -1rem;
}

/* The slider */
.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fff;
    color: black;
    font-weight: 600;
    border-radius: 3rem;
    /* Adjusted from 30px */
    display: flex;
    justify-content: space-around;
    align-items: center;
    transition: 0.4s;
}

.slider:before {
    position: absolute;
    content: "Expert";
    height: 90%;
    width: 4.8rem;
    /* Adjusted from 48% */
    left: 2%;
    border-radius: 2rem;
    /* Adjusted from 20px */
    background-color: white;
    color: black;
    display: grid;
    align-content: center;
    justify-content: center;
    box-shadow: 0 0.1rem 0.1rem 0 rgba(0, 0, 0, 0.2), 0 0.2rem 0.4rem 0 rgba(0, 0, 0, 0.2), 0 -0.1rem 0 0 rgba(0, 0, 0, 0.1) inset, 0 -1.31rem 1.31rem -1.31rem rgba(0, 0, 0, 0.3) inset, 0 0 0.1rem 0 rgba(0, 0, 0, 0.1);
    text-shadow: 0 -0.1rem 0 rgba(0, 0, 0, 0.15);
    transition: 0.4s;
}

.slider:after {
    content: "";
    position: absolute;
    top: -0.7rem;
    /* Adjusted from -7px */
    left: -0.7rem;
    /* Adjusted from -7px */
    right: -0.7rem;
    /* Adjusted from -7px */
    bottom: -0.7rem;
    /* Adjusted from -7px */
    border-radius: 1.71rem;
    /* Adjusted from 1.71em */
    background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.06), rgba(0, 0, 0, 0.1));
    z-index: -1;
}

.switch input:checked+.slider {
    background-color: white;
    color: black;
}

.switch input:checked+.slider:before {
    content: "Normal";
    transform: translateX(100%);
    color: black;
}

.switch input {
    display: none;
}

.circle-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: .25rem;
    /* 20px */
}

.circle {
    width: 11.75rem;
    /* 140px */
    height: 11.75rem;
    /* 140px */
    background-color: black;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    border: 0.1875rem solid #0084ff;
    /* 3px */
}

.circle-label {
    font-size: 2.1rem;
    /* 25px */
    font-weight: bold;

    color: black;
    text-decoration-color: #000;
}

.circle-value {
    font-size: 2rem;
    /* 29px */
    font-weight: bold;
    color: #0084ff;
    margin-top: -.5rem;
}

/* Add this CSS for the symbols */
.symbol {
    display: flex;
    justify-content: center;
    font-size: 1.5rem;
    /* 32px */
    font-weight: bold;
    width: 2.5rem;
    /* 40px */
    height: 2.5rem;
    /* 40px */
    background-color: #0084ff;
    border-radius: 50%;
    color: white;
    margin-right: 0.0625rem;
    /* 1px */
    /* 52px */
}

.equal-symbol {
    font-size: 1.875rem;
    /* 30px */
}


.dark-mode-toggle {
    position: absolute;
    top: .15rem;
    /* 20px */
    right: .1rem;
    /* 20px */
    display: inline-block;
    border: 0.1rem solid #0084ff;
    /* 2px */
    border-radius: 1.9rem;

    height: 1.45rem;
    width: 3rem;
    z-index: 97;
}

.toggle-label {
    display: flex;
    align-items: center;
    position: relative;
    cursor: pointer;
    /* 5px */
    /* 15px */
    transition: background-color 0.3s;
    height: 1.5rem;
        width: 2.5rem;
        left: 0.27rem;
        padding: 0.3125rem;
}

.toggle-checkbox {
    display: none;



}

.toggle-label::after {
    content: "";
    position: absolute;
    top: 0.1rem;
        left: -0.1rem;
        width: 1.025rem;
        height: 1.015rem;
    border-radius: 50%;
    transition: left 0.3s;
    background-color: #000000;

}


.toggle-checkbox:checked+.toggle-label::after {
    left: calc(100% - 1.1rem);
    /* 29px */


}


.toggle-checkbox:checked+.toggle-label::after {
    left: calc(100% - 1.1rem);
    /* 29px */
    background-color: white;
}

.dark-mode {
    background-color: #222;
    color: #fff;
}

#h3 {
    color: #0084ff;
}

#start-message {
    color: black;

    margin-left: -.7rem;
    /* -19px */

    font-size: 0.9375rem;
    /* 15px */
    margin-bottom: -1rem;
    /* -38px */
    border: 0.625rem;
    animation: bounce 1s infinite;
    margin-top: -1rem;
}

@keyframes bounce {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-0.9375rem);
        /* -15px */
    }
}


:root {
    --blinking-color: #00f; /* Default color for light mode */
}

.blinking-line {
    border-bottom: 0.125rem solid var(--blinking-color);
    animation: blink-border 0.5s infinite alternate;
}

@keyframes blink-border {
    0% {
        border-color: transparent;
    }

    100% {
        border-color: var(--blinking-color);
    }
}

#ul1 {
    background: black;
    margin-left: 2.95rem;
    /* 20px */
    height: 11.375rem;
    /* 230px */
    border: 0.1rem solid #0084ff;
    line-height: -3rem;

    /* 2px */
}

#t1 {
    margin-top: 2.8125rem;
    /* 45px */
}

#t2 {
    font-style: bold;
    font-size: 1.25rem;
    /* larger */
}

#Ach1 {
    font-size: 2.8125rem;
    /* 45px */
    color: #0084ff;
    font-weight: bold;
}

.tooltipexp {
    visibility: hidden;
    width: 10rem;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: .4rem;
    padding: .2rem;
    position: absolute;
    z-index: 1;
    bottom: 110%;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    transition: opacity 0.4s;
    font-size: .8rem;
}

.switch:hover .tooltipexp {
    visibility: visible;
    opacity: 1;
}

.tooltipdarkmood {
    visibility: hidden;
    width: 3rem;
    /* Adjust the width as needed */
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 1rem;
    font-size: .8rem;
    position: absolute;
    z-index: 1;
    bottom: -30%;
    left: -40%;
    transform: translateX(-50%);
    opacity: 0;
    transition: opacity 0.4s;
}

.toggle-label:hover .tooltipdarkmood {
    visibility: visible;
    opacity: 1;
}

#achievement-remarks {
    font-size: 1.89rem;
}


:root {
    --color-default: #004f83;
    --color-second: #0067ac;
    --color-white: #fff;
    --color-body: #e4e9f7;
    --color-light: #e0e0e0;
}

.sidebar {
    min-height: 100vh;
    ;
    /* 100vh / 16px = 6.25rem */
    width: 4.875rem;
    /* 78px / 16px = 4.875rem */
    padding: 0.375rem 0.875rem;
    /* 6px / 16px = 0.375rem, 14px / 16px = 0.875rem */
    z-index: 99;
    background-color: #38bcd6;
    transition: all 0.5s ease;
    position: fixed;
    top: 0;
    left: 0;
}

.side-bar-spacing {
        min-height: inherit;
        max-height: 100%;
        width: 4.875rem;
      }

.sidebar.open {
    width: 14.375rem;
    /* 230px / 16px = 14.375rem */
}

.sidebar .logo_details {
    height: 3.75rem;
    /* 60px / 16px = 3.75rem */
    display: flex;
    align-items: center;
    position: relative;
}

.sidebar .logo_details .icon {
    opacity: 0;
    transition: all 0.5s ease;
}

.sidebar .logo_details .logo_name {
    color: var(--color-white);
    font-size: 1.375rem;
    /* 22px / 16px = 1.375rem */
    font-weight: 600;
    opacity: 0;
    transition: all 0.5s ease;


}

.sidebar.open .logo_details .icon,
.sidebar.open .logo_details .logo_name {
    opacity: 1;
}

.sidebar .logo_details #btn {
    position: absolute;
    margin-top: 3rem;
    right: 0;
    transform: translateY(-50%);
    font-size: 2.4375rem;
    /* 23px / 16px = 1.4375rem */
    text-align: center;
    cursor: pointer;
    transition: all 0.5s ease;
}

.sidebar.open .logo_details #btn {
    text-align: right;
    font-size: 2rem;
}

.sidebar i {
    color: var(--color-white);
    height: 3.75rem;
    /* 60px / 16px = 3.75rem */
    line-height: 3.75rem;
    min-width: 3.125rem;
    /* 50px / 16px = 3.125rem */
    font-size: 1.5625rem;
    /* 25px / 16px = 1.5625rem */
    text-align: center;

}

.sidebar .nav-list {
    margin-top: 1.25rem;
    /* 20px / 16px = 1.25rem */
    height: 100%;
}

.sidebar li {
    position: relative;
    margin: 0.5rem 0;
    /* 8px / 16px = 0.5rem */
    list-style: none;
    margin-top: 1.7rem;
}

.sidebar li .tooltip {
    position: absolute;
    top: -1.25rem;
    /* -20px / 16px = -1.25rem */
    left: calc(100% + 0.9375rem);
    /* 15px / 16px = 0.9375rem */
    z-index: 3;
    background-color: var(--color-white);
    box-shadow: 0 0.3125rem 0.625rem rgba(0, 0, 0, 0.3);
    /* 5px / 16px = 0.3125rem, 10px / 16px = 0.625rem */
    padding: 0.375rem 0.875rem;
    /* 6px / 16px = 0.375rem, 14px / 16px = 0.875rem */
    font-size: 0.9375rem;
    /* 15px / 16px = 0.9375rem */
    font-weight: 400;
    border-radius: 0.3125rem;
    /* 5px / 16px = 0.3125rem */
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    color: #000;
    border: solid #38bcd6 .1rem;
}

.sidebar li:hover .tooltip {
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
    top: 50%;
    transform: translateY(-50%);
}

.sidebar.open li .tooltip {
    display: none;
}

.sidebar input {
    font-size: 0.9375rem;
    /* 15px / 16px = 0.9375rem */
    color: var(--color-white);
    font-weight: 400;
    outline: none;
    height: 2.1875rem;
    /* 35px / 16px = 2.1875rem */
    width: 2.1875rem;
    /* 35px / 16px = 2.1875rem */
    border: none;
    border-radius: 0.3125rem;
    /* 5px / 16px = 0.3125rem */
    background-color: var(--color-second);
    transition: all 0.5s ease;
}

.sidebar input::placeholder {
    color: var(--color-light);
}



.sidebar.open input {
    width: 100%;
    padding: 0 1.25rem 0 3.125rem;
    /* 20px / 16px = 1.25rem, 50px / 16px = 3.125rem */
}

.sidebar li a {
    display: flex;
    height: 100%;
    width: 100%;
    align-items: center;
    text-decoration: none;
    background-color: var(--color-default);
    position: relative;
    transition: all 0.5s ease;
    z-index: 12;
    background-color: #38bcd6;
}

.sidebar li a::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    transform: scaleX(0);
    background-color: var(--color-white);
    border-radius: 0.3125rem;
    /* 5px / 16px = 0.3125rem */
    transition: transform 0.3s ease-in-out;
    transform-origin: left;
    z-index: -2;
}

.sidebar li a:hover::after {
    transform: scaleX(1);
    color: var(--color-default);
}

.sidebar li a .link_name {
    color: var(--color-white);
    font-size: 1.4375rem;
    /* 15px / 16px = 0.9375rem */
    font-weight: 500;
    white-space: nowrap;
    pointer-events: auto;
    transition: all 0.4s ease;
    pointer-events: none;
    opacity: 0;
}

.sidebar li a:hover .link_name,
.sidebar li a:hover i {
    transition: all 0.5s ease;
    color: var(--color-default);
}

.sidebar.open li a .link_name {
    opacity: 1;
    pointer-events: auto;
}

.sidebar li i {
    height: 2.1875rem;
    /* 35px / 16px = 2.1875rem */
    line-height: 2.1875rem;
    font-size: 1.7rem;
    /* 18px / 16px = 1.125rem */
    border-radius: 0.3125rem;

    /* 5px / 16px = 0.3125rem */
}


@media (max-width: 730px) {

    /* Adjust the max-width value based on your design requirements */
    .sidebar {
        width: 0;
        padding: 0;
        transition: all 0.5s ease;

    }

    .side-bar-spacing {
          display: none;
        }

    .sidebar.open {
        width: 13.375rem;
        /* or any width you want for the opened sidebar */

    }

    .sidebar .logo_details {
        display: flex;
        justify-content: space-between;
        padding: .375rem 1.75rem;

    }

    .logo_details {
        font-size: 2rem;
    }

    .sidebar .logo_details #btn {

        font-size: 3.5rem;
        color: white;
        background-color: #38bcd6;
    }

    .sidebar .logo_details .logo_name {

        display: none;

    }



    .sidebar.open .logo_details .logo_name {
        display: block;

    }

    .sidebar .nav-list {
        display: none;
    }

    .sidebar.open .nav-list {
        display: block;
    }

    .sidebar.open .logo_details #btn {
        text-align: right;
        font-size: 3rem;
    }
}

.achievement-chart-box {
    display: none;
    position: absolute;
    margin-top: 46rem;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 1.8rem;
    border-radius: 1.5625rem;
    color: black;
    text-align: center;
    font-family: Arial, sans-serif;
    border: 0.1rem solid #bac8de;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    width: 45rem;
    height: 22rem;

}

.flip-card.move-down {
    margin-top: 65rem;

}

.background.move-down {
    height: 181rem;
}



.flip-card {

    width: 13.85rem;
    /* Adjusted from 29rem */
    height: 16.26rem;
    /* Adjusted from 25.4rem */

    /* Adjusted from 100rem */
    font-family: sans-serif;
    font-style: normal;
    position: absolute;
    left: 50%;
    margin-top: 48.2rem;
    /* Adjusted from 35rem */


}

.title {
    font-size: 1.59rem;
    /* Adjusted from 1.5rem */
    text-align: center;
    margin: 10px 0px 0px 0px;
    line-height: 1.5;
    color: #2a91d1;
}

.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
    pointer-events: auto; /* Ensure the hover effect works on the card itself */

}

.flip-card:hover .flip-card-inner {
    transform: scale(0.9);
}

.flip-card-front {
    /* Adjusted from 0.8rem 1.4rem */
    position: absolute;
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border: 0.1rem solid #bac8de;
    /* Adjusted from 0.1rem */
    border-radius: 1.06rem;
    overflow: hidden;
    /* Adjusted from 1rem */
}

.flip-card-front {
    color: #00bbeb;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
}



#img {
    width: 100%;
    height: 8.5rem;
}

.text3 {
         margin-left: -22.3rem;
        margin-top: -6rem;
        position: absolute;
        color: #2a91d1;
        font-weight: bold;
        font-size: 1.7rem;
        z-index: 1;
        border: 1rem solid none;
        border-style: none;
        font-family: 'Arial Black', Gadget, sans-serif;
        text-transform: capitalize;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        pointer-events: none; /* Prevent the heading from triggering any hover effects */
        font-style: normal;
        display: flex;
        align-items: center;
        justify-content: center;

}
.paragraphsection.move-down{
    margin-top: 90rem !important;
}
.paragraphsection {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    margin-top: 77rem;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    height: 63.5rem;
    width: 48rem;
    border-radius: 1rem;
    box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
    background-color: #dfe8e5;
   
    padding: 1rem;
  
}

.paragraphtext {
    width: 25rem;
    position: absolute;
    margin-left: 1rem;
    font-size: 1.2rem;
    color: #000;
    font-weight: 500;
    font-style:normal;
}

.paragraphtext1 {
    width: 25rem;
    position: absolute;
    margin-left: 1rem;
    margin-top: 31.6rem;
    margin-left: 21rem;
    font-size: 1.2rem;
    color: #000;
    font-weight: 500;
    font-style:normal;
}

.btt {
    width: 12rem;
    height: 4rem;
    border: .1rem solid #343a40;
    border-radius: 3rem;
    transition: all 0.3s;
    margin-left: 16rem;
    background: white;
    font-size: 1rem;
    position: absolute;
    font-family: "Montserrat", sans-serif;
    margin-top: 65rem;
    color: black;
    font-style:normal;
}

.btt:hover {
    background: #343a40;
    color: white;
    font-size: 1.3rem;
}

.background {
    position: absolute;
    left: 50%;
    width: 57rem;
    height: 167.5rem;
    transform: translateX(-50%);
    z-index: -1;
    margin-top: -15rem;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    border: solid .1rem #32323233;

}
footer.move-down{
    margin-top: 161rem;
}
footer {

    color: black;
    padding: 20px;
    text-align: center;
    margin-top: 147rem;
    margin-left: -1.5rem;
    width: 100%;
    position: absolute;
    font-size: 1rem;
    font-weight: normal;
    font-style: normal;
}

footer p {
    margin: 0;
}
.progress-bar {
    position: fixed;
    top: 0;
    left: 0;
    width: 0%;
    height: .17rem; /* Adjust height as needed */
    background-color: #007bff; /* Progress bar color */
    z-index: 110;
    opacity: 0; /* Initially hidden */
    transition: width 1s ease-in-out, opacity 0.3s ease-in-out;
    box-shadow: 0px .5rem .5rem rgba(0, 0, 0, 0.20);
}

.paragraphtext .headingtext{
    font-size: 1.3rem;
    margin-bottom: .1rem;
    display: block;
    font-weight: bold;
}

.paragraphtext1 .headingtext{
    font-size: 1.3rem;
    margin-top: -1rem;
    display: block;
    font-weight: bold;
}

.subtitle {
        font-size: 1rem;
        color: #2a91d1;
        font-weight: normal;
        line-height: 1.5;
      }

#card{
    margin-left: 9rem;
}

#card2{
    margin-left: -7rem;
}

#card3{
    margin-left: -23rem;
}

.tips-heading-container {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        gap: 3px;
        width: 100%;
        left: 50%;
        transform: translateX(-50%);
        margin-top: -7.1rem;
      }

      .tip-icon {
        height: 2.9rem;
        width: 2.9rem;
      }

      .tips-heading {
        color: #2a91d1;
        font-weight: bold;
        font-size: 1.7rem;
        font-family: "Arial Black", Gadget, sans-serif;
        text-transform: capitalize;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        margin: 0px;
        font-style:normal
      }

@media (max-width: 520px) {
    .loader{
        margin-top: 100px;
    }
    .sad-icon {
          display: none;
        }
        .happy-icon {
          display: none;
        }
        .paragraphsection {
          width: 85%;
          text-align: center;
          height: fit-content;
          position: relative;
        }

        .paragraphtext {
        width: 100%;
        font-size: 14px;
        position: relative;
        margin-bottom: 30px;
        margin-left: 0rem;

    }

    .paragraphtext1 .headingtext{
          margin-left: 0px;
          position: relative;
          font-size: 17px;
        }
        .paragraphtext .headingtext {
          font-size: 17px;
          margin-top: 10px;
        }
        .paragraphtext1 {
          margin-left: 0px;
          margin-top: 0px;
          font-size: 14px;
          width: 100%;
          position: relative;
        }

        .btt {
          position: relative;
          margin-top: 0px;
          font-size: 13px;
          height: 45px;
          margin: 10px auto;
        }

        footer {
margin-top: 0rem;
margin-left: 0px;
}

footer.move-down{
    margin-top: 0rem;
}

.tips-heading-container {
          top: 10px;
        }

        .achievement-box{
            margin-top: 19rem;
        }

        .achievement-chart-box {
            margin-top: 48rem;
        }

        .flip-card.move-down {
    margin-top: 68rem;
}

.paragraphsection.move-down {
    margin-top: 94rem !important;
}

.dark-mode-toggle {
          height: 2rem;
          width: 4rem;
        }
        .toggle-label {
          left: 0.27rem;
          height: 1.6rem;
          width: 3.5rem;
        }
        .toggle-label::after {
          width: 1.3rem;
          height: 1.25rem;
          top: 0.25rem;
          left: 0rem;
        }

        .toggle-checkbox:checked + .toggle-label::after {
          left: calc(100% - 1.5rem);
        }

}

@media screen and (max-width: 480px) {
    .paragraphsection{
        margin-top: 11rem;
    }
    .sidebar {
        height: 300px;
        min-height: 300px;
        transition: none;
    }
    .sidebar.open {
        max-height: 500px;
        width: 100%;
        position: fixed;
        min-height: 480px;
        transition: none;
    }
    .sidebar .logo_details {
        height: 60px;
        width: 100vw;
        background-color: #38bcd6;
    }
    .sidebar .logo_details #btn {
        color: white;
        font-size: 35px;
        font-weight: 600;
        margin-right: 20px;
        background-color: #38bcd6;
    }
    .sidebar .logo_details .logo_name {
          opacity: 1 !important;
          color: white;
          font-family: "Rubik", sans-serif;
          font-optical-sizing: auto;
          font-weight: 600;
          font-size: 18px;
          font-style: normal;
        }
        .sidebar li {
        position: relative;
        margin: 0px;
        list-style: none;
        display: flex;
        margin-top: 10px;
        font-size: 20px;
        align-items: center;
        height: 47px;
    }
    .sidebar li a {
        display: flex;
        padding-left: 30px;
        border-radius: 0.3125rem;
    }
    .sidebar li i {
        height: 2.1875rem;
        line-height: 2.1875rem;
        font-size: 26px;
        margin-right: 15px;
        border-radius: 0.3125rem;
    }
    .sidebar li a .link_name {
        font-size: 16px;
        font-family: inherit;
    }
    .dark-mode {
          .sidebar .logo_details {
            background: #666666;
          }
        }
    .dark-mode-toggle {
          position: absolute;
          top: 70px;
          right: 20px;
          display: inline-block;
          border: 0.1rem solid #0084ff;
          border-radius: 1.9rem;
        
        }
        .toggle-label {
          display: flex;
          align-items: center;
          position: relative;
          transition: background-color 0.3s;
        }
        .container{
            margin-top: 27rem;
            width: 95%;
        }
.experience-switch-parent{
    text-align: center;
}

.switch{
    margin-left: 0px;
}

.content-box.noob .text-of-typing p, .content-box.pro .text-of-typing p{
    font-size: 13px;
}
.content-box {
gap: 1rem;
}
.content-box .content {
   align-items: end;
   width: fit-content;
}
.content-box .text-of-typing {
flex: 1;
max-width: unset;
}

.content .result {
    padding: 7px;
}
#ul1 {
height: fit-content;
margin-left: 0px;
}
#t1{
    margin-bottom: 2.8125rem;
}
    #card {
        width: 90%;
        height: 230px;
        max-width: 320px;
        margin: auto;
        position: relative;
        margin-top: 50.2rem;
        margin-left: auto !important;
    }
    #card3 {
        width: 90%;
        height: 230px;
        max-width: 320px;
        margin: auto;
        position: relative;
        margin-top: 20px;
    }
    #card2 {
        width: 90%;
        height: 230px;
        max-width: 320px;
        margin: auto;
        position: relative;
        margin-top: 75px;
    }
    .flip-card {
        font-family: sans-serif;
        font-style: normal;
        left: 0;
    }

    .text3 {
        margin-left: 0px;
        margin-top: -4rem;
        position: relative;
        font-size: 18px;
        width: 100%;
    }

    .card {
        margin-top: 20px;
    }

    .flip-card-front {
        background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    }

    #img {
        height: 160px;
    }

    .title {
        font-size: 20px;
    }
    .subtitle {
        font-size: 1.5rem;
        color: #222;
    }

        .tips-heading {
          font-size: 1.7rem;
        }
        #Ach1{
            font-size: 2rem;
        }
        #achievement-remarks{
            font-size: 1.3rem;
            margin-top: 10px;
        }
        .circle-container{
gap: 3px;       }
      
        .circle{
        
            width: 33%;
            aspect-ratio: 1 / 1;
            height: unset !important;
        }
        .circle-label{
            font-size: 1.5rem;
        }
        .circle-value{
            font-size: 1rem;
        }
        .achievement-box{
            margin-top: 25.5rem;
            width: 95%;
        }

        .achievement-chart-box{
            margin-top: 54rem;
            width: 95%;
        }

        button#home-btn{
            margin-left: 0px;
            left: 2rem;
        }

        button#try-again-achievement-btn{
            margin-left: 0px;
            right: 2rem;
        }

         #card.move-down{
    margin-top: 75rem !important;
}

.paragraphsection.move-down{
    margin-top: 10rem !important;
}

footer.move-down {
    margin-top: 5px !important;
}

}
@media screen and (min-width: 344px) and (max-width: 767px) {
.container {
    padding: 3rem;
    
    }
    
.container button {
  
    margin-top: 1.6rem;

}   
}
</style>

<body>
<div class="progress-bar" id="top-progress-bar"></div>
<div class="dark-mode-toggle" style="margin-top:.2rem;">
        <input type="checkbox" id="darkModeToggle" class="toggle-checkbox">
        <label for="darkModeToggle" class="toggle-label">
            <div class="tooltipdarkmood">Mood</div>
        </label>
    </div>
    <div class="sidebar">
        <div class="logo_details">

            <div class="logo_name">Typing Twist</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">

            <li>
                <a href="index.php">
                    <i class="bx bx-laptop"></i>
                    <span class="link_name">Typing Test</span>
                </a>
                <span class="tooltip">TYPING TEST</span>
            </li>
            <li>
                <a href="learntyping.php">
                    <i class="bx bx-search"></i>
                    <span class="link_name">Typing Lab</span>
                </a>
                <span class="tooltip">TYPING LAB</span>
            </li>
            <li>
                <a href="typinggame.php">
                    <i class="bx bx-joystick"></i>
                    <span class="link_name">Typing Games</span>
                </a>
                <span class="tooltip">TYPING GAMES</span>
            </li>
            <li>
                <a href="typingtips.php">
                    <i class="bx bx-star"></i>
                    <span class="link_name">Typing Tips</span>
                </a>
                <span class="tooltip">TYPING TIPS</span>
            </li>
            <li>
                <a href="feedback.php">
                    <i class="bx bx-comment"></i>
                    <span class="link_name">Feedback</span>
                </a>
                <span class="tooltip">FEEDBACK</span>
            </li>
            <li>
                <a href="contact.php">
                    <i class="bx bx-map-pin"></i>
                    <span class="link_name">Contact us</span>
                </a>
                <span class="tooltip">CONTACT US</span>
            </li>
            <li>
                <a href="blog.php">
                    <i class="bx bx-link"></i>
                    <span class="link_name">Blog</span>
                </a>
                <span class="tooltip">BLOG</span>
            </li>
        </ul>
    </div>
    <div
    style="
      display: flex;
      width: 100%;
      min-height: 100vh;
      max-height: fit-content;
    "
  >
    <div class="side-bar-spacing"></div>
    <div style="flex: 1; position: relative">
        <div class="background" id="bg1"></div>
        <div class="container">
    
            <div class="experience-switch-parent">
                <label class="switch" for="switchMode">
                    <input type="checkbox" id="switchMode" checked>
                    <div class="slider">
                        <span>Expert</span>
                        <span>Normal</span>
                    </div>
                    <div class="tooltipexp">Select your Experience</div>
                </label>
            </div>
    
            <div id="start-message" class="fa-bounce">Start Here</div>
            <input type="text" class="input-field">
    
            <div class="content-box">
    
                <div class="text-of-typing" id="text-container">
                    <p></p>
    
                </div>
                <div class="content">
                    <ul id="ul1" class="result">
                        <li class="time" id="t1">
                            <p id="t2" title="Time">Time</p>
                            <span id="time">2:00</span>
                        </li>
                        <li class="errors" style="display:none;">
                            <p>Errors</p>
                            <span>0</span>
                        </li>
                        <li class="wpm" style="display:none;">
                            <p>WPM</p>
                            <span>0</span>
                        </li>
                        <li class="cpm" style="display:none;">
                            <p>CPM</p>
                            <span>0</span>
                        </li>
                    </ul>
    
                </div>
            </div>
    
            <button id="try-again-btn" title="Try Again">Try Again</button>
        </div>
        <div class="loader" style="display: none;">
            <div id="page">
                <div id="container">
                    <div id="ring"></div>
                    <div id="ring"></div>
                    <div id="ring"></div>
                    <div id="ring"></div>
                    <div id="h3"><B><I>WAIT FOR <BR>YOUR ACHIEVEMENT..</div>
                </div>
            </div>
        </div>
        <div class="achievement-box" style="display: none;">
            <span class="close-btn" id="close-achievement" title="close"></span>
            <p id="Ach1"><i class="fa-solid" style="color: #edfd77;"></i>
                Achievement Unlocked!</p>
            <div class="circle-container">
                <div class="circle accuracy-circle">
                    <span class="circle-label" title="Accuracy Erros">Accuracy</span>
                    <span class="circle-value" id="achievement-accuracy">100%</span>
                </div>
                <div class="symbol">X</div>
                <div class="circle cpm-circle">
                    <span class="circle-label" title="Count Per Minute">CPM</span>
                    <span class="circle-value" id="achievement-cpm">0</span>
                </div>
                <div class="symbol">=</div>
                <div class="circle wpm-circle">
                    <span class="circle-label" Title="Word Per Minute">WPM</span>
                    <span class="circle-value" id="achievement-wpm">0</span>
                </div>
    
            </div>
            <p id="achievement-remarks"></p>
            <button id="try-again-achievement-btn" title="Try Again">Try Again</button>
            <button id="home-btn" title="Home">Home</button>
        </div>
    
        <div class="achievement-chart-box" style="display: none;" title="Your Achievement Chart">
    
            <canvas id="achievement-chart"></canvas>
    
        </div>
    
        <div class="flip-card" id="card">
            <div class="text3" >Time for typing games!
    
            <img src="./image/svg/game1.svg"
            style="height:3.2rem; width:3.2rem" alt="">
    
            </div>
            <div class="flip-card-inner card">
            <a href="typinggame.php">
                <div class="flip-card-front">
                <img src="./image/car.jpg" id="img" alt="">
                        <p class="title">CAR RACING</p>
                        <p class="subtitle">Race Around the Typing Track.</p>
                </div>
                </a>
            </div>
        </div>
        <div class="flip-card" id="card2">
            <div class="flip-card-inner">
            <a href="typinggame.php">
                    <div class="flip-card-front">
                        <img src="./image/balloon.jpg" id="img" alt="">
                        <p class="title">BALLOON KEY</p>
                        <p class="subtitle">Balloon Key Float Up with Fast Fingers</p>
                    </div>
                    </a>
    
            </div>
        </div>
    
        <div class="flip-card" id="card3">
            <div class="flip-card-inner">
            <a href="typinggame.php">
                    <div class="flip-card-front">
                        <img src="./image/BALLS.jpg" id="img" alt="">
                        <p class="title">KEY BALLS</p>
                        <p class="subtitle">Unleash Speed, Control the Balls.</p>
                    </div>
                    </a>
            </div>
            </div>
    
            <div class="paragraphsection" id="para2">
          <div class="tips-heading-container">
              <h4 class="tips-heading">Typing Tips For Learner</h4>
              <img src="./image/svg/tip.svg" alt="" class="tip-icon" />
          </div>
                <img src="./image/sad.png" class="sad-icon" alt=""
                    style="height: 18rem; width: 18rem; margin-left: 28rem; margin-top:2rem; position:absolute ">
                <p class="paragraphtext">
                <span class="headingtext">
                Why can't typists speed up Easily?</span> Many people struggle to improve their typing speed and typing test results because they don't practice
                 regularly or focus on accuracy. They might not learn the right finger positions or use typing exercises 
                 that can help. Without these important steps, it's hard to get better at typing quickly and smoothly. 
                 But with consistent practice and the right techniques, anyone can improve their typing speed and 
                 efficiency. Remember to take breaks to avoid fatigue, use typing games to make practice fun, and 
                 gradually challenge yourself with more difficult texts.</p>
                <img src="./image/happy.png" class="happy-icon" alt=""
                    style="height: 18rem; width: 18rem; margin-top: 35rem; margin-left:1rem; position:absolute ">
                <p class="paragraphtext1">
                <span class="headingtext">
                What makes some Typists Successful?</span>That makes typists successful? Successful typists practice
                     regularly, focusing on typing both fast and accurately. They learn how to place their fingers 
                     correctly and use typing exercises, typing speed tests, and typing tests to get better. 
                     They take breaks to stay fresh, play typing games for fun, and keep challenging themselves 
                     with harder texts and typing speed tests. By incorporating various typing tests into their 
                     routine and being dedicated and patient, they steadily improve their typing speed and accuracy,
                    reaching their goals step by step.
                </p>
                <button class="btt" onclick="window.location.href='blog.php'">More</button>
            </div>
                <footer class="ftt" id="ft">
                <p>&copy; 2024 Typing Twist. All rights reserved.</p>
                </footer>
    </div>


        <script>
            // Replace the current URL without reloading the page

document.addEventListener("DOMContentLoaded", function() {
    const progressBar = document.getElementById('top-progress-bar');
    
    // Show progress bar on page load
    progressBar.style.opacity = '1';

    // Animate progress bar to 100% width over 2 seconds
    progressBar.style.width = '100%';
    
    // Hide progress bar after 2 seconds
    setTimeout(function() {
        progressBar.style.opacity = '0';
    }, 2000);
});


</script>

        <script>
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }

        // Reset scroll position on page load
        window.onload = function() {
            window.scrollTo(0, 0);
        };
        window.onload = function() {
            const sidebar = document.querySelector(".sidebar");
            const closeBtn = document.querySelector("#btn");
            const searchBtn = document.querySelector(".bx-search");

            closeBtn.addEventListener("click", function() {
                toggleSidebar();
            });

            searchBtn.addEventListener("click", function() {
                toggleSidebar();
            });

            function toggleSidebar() {
                sidebar.classList.toggle("open");
                menuBtnChange();
            }

            function menuBtnChange() {
                if (sidebar.classList.contains("open")) {
                    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                    // Add event listener to close sidebar on body click
                    document.body.addEventListener("click", closeSidebarOnClick);
                } else {
                    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
                    // Remove event listener when sidebar is closed
                    document.body.removeEventListener("click", closeSidebarOnClick);
                }
            }

            function closeSidebarOnClick(event) {
                // Close the sidebar if the click is outside the sidebar
                if (!sidebar.contains(event.target)) {
                    sidebar.classList.remove("open");
                    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
                    document.body.removeEventListener("click", closeSidebarOnClick);
                }
            }
        }
        </script>
        <script>
         const paragraphs = [
                "first civilizations emerged in fertile river valleys like the nile tigris and euphrates rivers around 3500 bc these early societies developed agriculture complex social structures and writing systems empires rose and fell throughout history including the egyptian mesopotamian persian greek roman chinese and islamic empires each leaving behind a legacy of art architecture and philosophy the middle ages in europe saw the rise of feudalism and the dominance of the catholic church the renaissance brought a renewed interest in classical learning and the development of new artistic styles the age of exploration led to european colonization of the americas and increased global trade the scientific revolution transformed our understanding of the universe the enlightenment emphasized reason and individualism the industrial revolution brought about profound changes in society with the rise of factories and machinery the 18th and 19th centuries saw revolutions in america france and haiti that challenged the legitimacy of monarchy and aristocracy the 20th century was a period of great upheaval withtwo world wars the rise of communism the cold war the civil rights movement and the process of decolonization the 21st century has been marked by globalization the rise of information technology the threat of climate change and ongoing social and political struggles the story of humanity is one of constant change and adaptation we have built great civilizations and witnessed their collapse we have waged wars and strived for peace we have created art and knowledge that has enriched our lives the future is uncertain but the study of history helps us to understand the present and make informed choices about the path we want to take  furthermore the development of science and technology continues to accelerate with fields like artificial intelligence genetics and space exploration holding immense potential for the future however these advancements also present challenges such as the ethical implications of ai the possibility of nuclear proliferation and the environmental impact of our activities as we move forward we must grapple with these complex issues and strive to create a more just sustainable and equitable world for all the first civilizations emerged in fertile river valleys like the nile tigris and euphrates rivers around 3500 bc these early societies developed agriculture complex social structures and writing systems empires rose and fell throughout history including the egyptian mesopotamian persian greek roman chinese and islamic empires each leaving behind a legacy of art architecture and philosophy the middle ages in europe saw the rise of feudalism and the dominance of the catholic church the renaissance brought a renewed interest in classical learning and the development of new artistic styles the age of exploration led to european colonization of the americas and increased global trade the scientific revolution transformed our understanding of the universe the enlightenment emphasized reason and individualism the industrial revolution brought about profound changes in society with the rise of factories and machinery the 18th and 19th centuries saw revolutions in america france and haiti that challenged the legitimacy of monarchy and aristocracy the 20th century was a period of great upheaval withtwo world wars the rise of communism the cold war the civil rights movement and the process of decolonization the 21st century has been marked by globalization the rise of information technology the threat of climate change and ongoing social and political struggles the story of humanity is one of constant change and adaptation we have built great civilizations and witnessed their collapse we have waged wars and strived for peace we have created art and knowledge that has enriched our lives the future is uncertain but the study of history helps us to understand the present and make informed choices about the path we want to take  furthermore the development of science and technology continues to accelerate with fields like artificial",
                "universe emerged in a fiery big bang nearly 14 billion years ago elementary particles condensing into stars and galaxies over eons heavier elements formed within these stars eventually exploding and scattering the ingredients for life across the cosmos on a young earth conditions were ripe for the spark of life simple organisms emerging in the oceans roughly 3.8 billion years ago through natural selection life diversified eventually leading to the cambrian explosion a burst of complex life forms around 540 million years back dinosaurs dominated the planet for millions of years before a cataclysmic asteroid impact around 66 million years ago led to their extinction this opened the door for mammals to rise with primates eventually evolving in africa around 55 million years ago our own genus homo emerged roughly 2.8 million years back early humans developing tools and using fire the last ice age sculpted our planet and shaped human migration with homo sapiens eventually becoming the sole surviving human species around 300 000 years ago the development of complex language and symbolic thought around 50 000 years back marked a turning point leading to cave paintings sophisticated tools and the beginnings of art and culture the agricultural revolution around 12 000 years ago transformed human society with the domestication of plants and animals allowing for permanent settlements and the rise of civilizations the first complex societies emerged in mesopotamia and egypt around 3500 bc characterized by advanced agriculture social hierarchies writing systems and monumental architecture empires rose and fell throughout history each leaving behind a legacy of art literature philosophy and technological advancements the interconnectedness of civilizations grew through trade routes leading to the exchange of ideas and innovations meanwhile in the americas sophisticated civilizations like the maya aztecs and incas flourished developing unique calendars writing systems and impressive architecture the classical world of greece and rome laid the groundwork for western philosophy mathematics and law the spread of christianity and islam profoundly influenced cultures and societies across vast regions the middle ages in europe saw the decline of the roman empire the rise of feudalism and the development of universities the black death devastated europe in the 14th century leading to social and economic upheaval the renaissance a period of renewed interest in classical learning and art flourished in the 14th to 16th centuries the age of exploration sparked by european advancements in navigation led to the discovery of new continents and the establishment of global trade networks the scientific revolution with figures like galileo and newton transformed our understanding of the physical world the invention of the printing press revolutionized communication and the spread of knowledge the enlightenment emphasized reason individualism and scientific inquiry shaping political and social movements the industrial revolution beginning in the 18th century brought about dramatic changes in manufacturing transportation and urbanization revolutions in america and france challenged traditional social orders and inspired movements for democracy and liberty the 19th century saw the rise of nationalism imperialism and social reforms slavery was abolished in many countries and new technologies like electricity and the internal combustion engine reshaped societies the 20th century witnessed devastating world wars the rise of totalitarian regimes the cold war standoff and the development of nuclear weapons the civil rights movement fought for racial equality and technological advancements continued at a rapid pace the invention of the transistor ushered in the computer age and space exploration expanded our understanding of the universe the 21st century has been marked by the rise of the internet globalization terrorism and the ever present challenge of climate change as we continue to explore the cosmos and grapple with global challenges the story of humanity remains one of constant change innovation and the pursuit of a better future",
                "in a land far far away okay maybe not that far it was actually ancient egypt where giant pyramids cast long shadows lived a pharaoh named ramenhotep the magnificent well not that magnificent actually he was a bit of a klutz constantly tripping over his royal sandals bumping into priceless artifacts and once even managing to get his head stuck in a sacred scarab beetle statue much to the amusement of his advisors his most loyal servant cleopatra a sassy young woman with a quick wit and even quicker reflexes spent most of her days untangling him from embarrassing situations one sunny afternoon ramenhotep decided to impress visiting dignitaries from babylon with a display of his royal hunting prowess he donned his finest linen hunting garb grabbed a rather rusty spear and clattered out of the palace gates cleopatra following with a basket of bandages and a flask of what she claimed was courage potion they arrived at the hunting grounds a vast expanse of desert dotted with the occasional scrawny rabbit ramenhotep brimming with confidence eyed a particularly plump one and charged with all the grace of a runaway chariot completely missing the rabbit and faceplanting spectacularly into a patch of prickly cacti ow he bellowed cleopatra rushed over swatting away the cacti with her fan and muttering something about pharaohs with the coordination of a drunken hippopotamus after extracting a few dozen needle with surprising skill she administered a generous dose of the courage potion which judging by the pharaohs sudden burst of energy seemed to be a potent mix of strong coffee and fermented grapes thus emboldened ramenhotep spotted a majestic gazelle a creature so graceful it seemed to float across the sand he lunged again the spear whistling harmlessly past the gazelle which stopped briefly blinked at the spectacle then continued its elegant stroll cleopatra buried her face in her hands stifling laughter meanwhile the babylonian dignitaries struggled to maintain diplomatic expressions one particularly por ly ambassador finally burst out oh your majesty your hunting skills are truly legendary indeed ramenhotep puffed out his chest yes yes quite so next time ill bring back a lion or perhaps a hippopotamus or maybe just some takeout the dignitaries exchanged horrified glances and beat a hasty retreat back to babylon leaving cleopatra to help the pharaoh disentangle himself from a rather stubborn tumbleweed another successful hunt she sighed rolling her eyes as ramenhotep dusted himself off well at least i provided entertainment once upon a time in a land far far away okay maybe not that far it was actually ancient egypt where giant pyramids cast long shadows lived a pharaoh named ramenhotep the magnificent well not that magnificent actually he was a bit of a klutz constantly tripping over his royal sandals bumping into priceless artifacts and once even managing to get his head stuck in a sacred scarab beetle statue much to the amusement of his advisors his most loyal servant cleopatra a sassy young woman with a quick wit and even quicker reflexes spent most of her days untangling him from embarrassing situations one sunny afternoon ramenhotep decided to impress visiting dignitaries from babylon with a display of his royal hunting prowess he donned his finest linen hunting garb grabbed a rather rusty spear and clattered out of the palace gates cleopatra following with a basket of bandages and a flask of what she claimed was courage potion they arrived at the hunting grounds a vast expanse of desert dotted with the occasional scrawny rabbit ramenhotep brimming with confidence eyed a particularly plump one and charged with all the grace of a runaway chariot completely missing the rabbit and faceplanting spectacularly into a patch of prickly cacti ow he bellowed cleopatra rushed over swatting away the cacti with her fan and muttering something about pharaohs with the coordination of a drunken hippopotamus after extracting a few dozen needles with surprising skill she administered a generous dose of the courage potion",
                "kingdom perpetually shrouded in mist merlin the magnificent well not that magnificent more like merlin the mildly competent resided in a ramshackle tower overflowing with dusty tomes and questionable potions his apprentice arthur a wide eyed youth with an unfortunate allergy to pointy hats spent his days fetching dubious ingredients for merlin's experiments which more often than not resulted in minor explosions singed eyebrows and the occasional talking toad one particularly gloomy tuesday merlin announced a grand quest to retrieve the legendary chalice of charisma hidden deep within the treacherous swamp of perpetual awkwardness armed with a rusty sword a moldy loaf of bread and a dubious map scrawled on a napkin they set off arthur tripping over his own feet every other step merlin muttering incantations that mostly summoned butterflies and the occasional grumpy badger after hours of wading through knee deep swamp muck they stumbled upon a shimmering castle guarded by a rather bored looking troll oh hello greeted the troll in a monotone voice password please arthur fumbled for the napkin oh right the password stammered merlin it's uh banana pancakes the troll raised an eyebrow banana pancakes he repeated then shrugged whatever comes in after a quick lunch break filled with soggy bread and suspicious berries they entered the castle a labyrinth of echoing hallways and dusty portraits that seemed to follow their every move finally they reached a grand hall where a shimmering chalice sat upon a pedestal guarded by a knight in rusty armor who upon closer inspection turned out to be a very grumpy librarian shhh she hissed silence in the library the librarian knight brandished a feather duster menacingly merlin with surprising agility for a man his age launched into a dramatic monologue about the importance of charisma the librarian knight listened skeptically then sighed look folks this chalice doesn't grant charisma it's just a really ornate cup of tea arthur blinked oh well that explains the Earl Grey stains merlin sheepishly scratched his beard perhaps we misunderstood the legend the librarian knight snorted legend more like a bad grocery list anyway fancy a cuppa they emerged from the swamp defeated but strangely zen arthur clutching a chipped cup of tea and merlin contemplating the merits of a good librarian as they set off for another, hopefully less swampy, adventure once upon a time in a kingdom perpetually shrouded in mist merlin the magnificent well not that magnificent more like merlin the mildly competent resided in a ramshackle tower overflowing with dusty tomes and questionable potions his apprentice arthur a wide eyed youth with an unfortunate allergy to pointy hats spent his days fetching dubious ingredients for merlin's experiments which more often than not resulted in minor explosions singed eyebrows and the occasional talking toad one particularly gloomy tuesday merlin announced a grand quest to retrieve the legendary chalice of charisma hidden deep within the treacherous swamp of perpetual awkwardness armed with a rusty sword a moldy loaf of bread and a dubious map scrawled on a napkin they set off arthur tripping over his own feet every other step merlin muttering incantations that mostly summoned butterflies and the occasional grumpy badger after hours of wading through knee deep swamp muck they stumbled upon a shimmering castle guarded by a rather bored looking troll oh hello greeted the troll in a monotone voice password please arthur fumbled for the napkin oh right the password stammered merlin it's uh banana pancakes the troll raised an eyebrow banana pancakes he repeated then shrugged whatever comes in after a quick lunch break filled with soggy bread and suspicious berries they entered the castle a labyrinth of echoing hallways and dusty portraits that seemed to follow their every move finally they reached a grand hall where a shimmering chalice sat upon a pedestal guarded by a knight in rusty armor who upon closer inspection turned out to be a very grumpy librarian shhh she hissed silence in the library",
                "old lighthouse keeper warned us about staying on the island past dusk the fog rolled in thick and soupy like pea soup visibility dropped to mere feet the rhythmic crashing of waves against the jagged rocks became an oppressive soundtrack to our growing unease a low mournful cry echoed through the mist sending shivers down our spines the rickety wooden stairs leading to the lighthouse beacon creaked ominously with each hesitant step the air grew colder a clammy coldness that seeped into our bones the lighthouse itself loomed into view a skeletal silhouette against the churning grey a single weak beam of light pierced the suffocating fog casting grotesque dancing shadows on the weathered stone walls the heavy iron door creaked open with a rusty groan revealing a spiral staircase leading upwards the stale air inside smelled of mildew and something else something metallic and faintly sweet the higher we climbed the more intense the metallic tang became a metallic tang laced with the unmistakable scent of decay the final door at the top swung open with a deafening bang a gust of icy wind slammed against us whipping our hair and clothes into a frenzy in the center of the room bathed in the sickly green glow of an emergency lantern stood a figure tall and gaunt its back to us a long dark braid snaked down its spine a ragged cough tore through the silence the figure slowly turned its head revealing a face contorted in a grotesque rictus a single milky white eye stared out from a hollow socket the other eye socket gaped black and empty a horrifying grin stretched across its decaying lips in a raspy voice like sandpaper on bone it rasped welcome to your doom the old lighthouse keeper warned us about staying on the island past dusk the fog rolled in thick and soupy like pea soup visibility dropped to mere feet the rhythmic crashing of waves against the jagged rocks became an oppressive soundtrack to our growing unease a low mournful cry echoed through the mist sending shivers down our spines the rickety wooden stairs leading to the lighthouse beacon creaked ominously with each hesitant step the air grew colder a clammy coldness that seeped into our bones the lighthouse itself loomed into view a skeletal silhouette against the churning grey a single weak beam of light pierced the suffocating fog casting grotesque dancing shadows on the weathered stone walls the heavy iron door creaked open with a rusty groan revealing a spiral staircase leading upwards the stale air inside smelled of mildew and something else something metallic and faintly sweet the higher we climbed the more intense the metallic tang became a metallic tang laced with the unmistakable scent of decay the final door at the top swung open with a deafening bang a gust of icy wind slammed against us whipping our hair and clothes into a frenzy in the center of the room bathed in the sickly green glow of an emergency lantern stood a figure tall and gaunt its back to us a long dark braid snaked down its spine a ragged cough tore through the silence the figure slowly turned its head revealing a face contorted in a grotesque rictus a single milky white eye stared out from a hollow socket the other eye socket gaped black and empty a horrifying grin stretched across its decaying lips in a raspy voice like sandpaper on bone it rasped welcome to your doom through knee deep swamp muck they stumbled upon a shimmering castle guarded by a rather bored looking troll oh hello greeted the troll in a monotone voice password please arthur fumbled for the napkin oh right the password stammered merlin it's uh banana pancakes the troll raised an eyebrow banana pancakes he repeated then shrugged whatever comes in after a quick lunch break filled with soggy bread and suspicious berries they entered the castle a labyrinth of echoing hallways and dusty portraits that seemed to follow their every move finally they reached a grand hall where a shimmering chalice sat upon a pedestal guarded by a knight in rusty armor who upon closer inspection turned out to be a very grumpy librarian shhh she hissed silence in the library",
                "expedition team trekked deeper into the uncharted Amazon rainforest the emerald canopy overhead filtering the sunlight into an eerie green twilight the air hung heavy with the buzzing of unseen insects and the unsettling calls of unfamiliar birds the guide a wizened old man with eyes like obsidian beads spoke in hushed tones of a lost civilization a city of gold hidden deep within the jungle his warnings of ancient curses and vengeful spirits fell on deaf ears greed a more potent poison than any jungle concoction days blurred into each other a monotonous march through a labyrinth of suffocating foliage the oppressive humidity sapped their strength and morale frayed tempers flared arguments erupted accusations of deceit flew back and forth then one by one they began to disappear a strangled cry a bloodcurdling scream followed by an unsettling silence no trace no remains just a chilling emptiness where their companions once stood paranoia festered suspicion turned to accusations whispers of a malevolent entity a shadowy presence stalking them through the dense undergrowth nights became a symphony of unsettling sounds rustling leaves snapping twigs the unsettling glow of unseen eyes reflecting back from the darkness sleep became a luxury they couldn't afford fear a constant companion gnawing at their sanity the guide vanished too swallowed by the very jungle he promised to lead them through a single tattered boot their only clue left behind desperation fueled their steps they stumbled upon a clearing in the heart of the rainforest a sight that sent chills down their spines a magnificent city of gold gleamed in the dappled sunlight but something was terribly wrong the intricate carvings on the buildings depicted scenes of unimaginable suffering the streets were littered with skeletal remains the air thick with the cloying stench of decay a horrifying realization dawned upon them this wasn't a city of gold it was a tomb a monument to a civilization consumed by their insatiable greed a monstrous roar shattered the silence a hulking creature emerged from the jungle its form obscured by shadows but its glowing red eyes burned with unholy hunger they turned to flee but every path was blocked the creature advanced with terrifying speed its fetid breath washing over them in a sickening wave screams ripped through the air as the creature tore into them with a savagery that defied description the last survivor a young woman named Anya fueled by a primal terror stumbled upon a hidden passage a desperate gamble for survival she squeezed through the narrow opening the sounds of the carnage fading behind her she crawled blindly through the suffocating darkness emerging hours later into a sun dappled clearing blinking back tears she looked upon a sight that filled her with a cold dread a familiar emerald canopy stretched as far as the eye could see the same oppressive humidity the same cacophony of unseen insects the same horrifying realization she wasn't free she was back at the beginning the jungle had claimed its prize another victim lost to its insatiable hunger another story whispered on the wind a cautionary tale for those who dared to disturb its secrets through knee deep swamp muck they stumbled upon a shimmering castle guarded by a rather bored looking troll oh hello greeted the troll in a monotone voice password please arthur fumbled for the napkin oh right the password stammered merlin it's uh banana pancakes the troll raised an eyebrow banana pancakes he repeated then shrugged whatever comes in after a quick lunch break filled with soggy bread and suspicious berries they entered the castle a labyrinth of echoing hallways and dusty portraits that seemed to follow their every move finally they reached a grand hall where a shimmering chalice sat upon a pedestal guarded by a knight in rusty armor who upon closer inspection turned out to be a very grumpy librarian shhh she hissed silence in the library the path we want to take  furthermore the development of science and technology continues to accelerate with fields like artificial",
                "once upon a time there was a small village nestled in the hills surrounded by lush greenery the villagers lived happily in harmony with nature children played in the meadows while adults tended to their crops one sunny day a traveling circus arrived filling the village with laughter and excitement townsfolk gathered to watch performers showcase their talents the air was filled with joy as the circus entertained everyone with their tricks and stunts as the sun set the circus bid farewell leaving behind memories of a magical day the village returned to its peaceful rhythm but the echoes of laughter lingered in their hearts once upon a time in a faraway land there existed a beautiful kingdom surrounded by rolling hills and sparkling rivers in this kingdom lived a wise king a kind queen and their beloved daughter the princess the kingdom was known for its lush forests where magical creatures roamed freely and its bustling markets where merchants from distant lands traded exotic goods every morning the kingdom would awaken to the cheerful chirping of birds and the gentle rustling of leaves the villagers would go about their daily routines tending to their fields and caring for their families life was peaceful and harmonious and the people of the kingdom lived in unity and contentment however one day dark clouds began to gather on the horizon threatening to disrupt the tranquility of the kingdom rumors spread of an evil sorcerer who sought to conquer the land and seize control of its riches fearing for the safety of their kingdom the king and queen called upon their bravest knights to defend their homeland as the kingdom prepared for battle the princess volunteered to join the fight determined to protect her home and her people with courage in their hearts and swords in hand the knights marched forth to confront the sorcerer and his dark forces the battle was fierce and intense with both sides fighting valiantly for victory in the end it was the bravery and determination of the kingdom's defenders that prevailed driving the sorcerer and his minions away and restoring peace to the land routines tending to their fields and caring for their families life was peaceful and harmonious and the people of the kingdom lived in unity and contentment however one day dark clouds began to gather on the horizon threatening to disrupt the tranquility of the kingdom rumors spread of an evil sorcerer who sought to conquer the land and seize control of its riches fearing for the safety of their kingdom the king and queen called upon their bravest knights to defend their homeland as the kingdom prepared for battle the princess volunteered to join the fight determined to protect her home and her people with courage in their hearts and swords in hand the knights marched forth to confront the sorcerer and his dark forces the battle was fierce and intense with both sides fighting valiantly for victory in the end it was the bravery and determination of the kingdom's defenders that prevailed driving the sorcerer and his minions away and restoring peace to the land to the land routines tending to their fields and caring for their families life was peaceful and harmonious and the people of the kingdom lived in unity and contentment however one day dark clouds began to gather on the horizon threatening to disrupt the tranquility of the kingdom rumors spread of an evil sorcerer who sought to conquer the land and seize control of its riches fearing for the safety of their kingdom the king and queen called upon their bravest knights to defend their homeland as the kingdom prepared for battle the princess volunteered to join the fight determined to protect her home and her people with courage in their hearts and swords in hand the knights marched forth to confront the sorcerer and his dark forces the battle was fierce and intense with both sides fighting valiantly for victory in the end it was the bravery and determination of the kingdom's defenders that prevailed driving the sorcerer and his minions away and restoring peace to the land",
                "cinderella lived with her stepmother and stepsisters they were very unkind to her making her do all the chores while they lounged around the house one day an invitation to the royal ball arrived at their doorstep cinderella's stepmother and stepsisters were thrilled but they refused to let cinderella go instead they left her behind to clean the house and prepare their outfits as they attended the ball alone cinderella sat by the fireplace feeling sad suddenly a fairy godmother appeared and with a wave of her wand transformed cinderella's rags into a beautiful gown and her old shoes into glass slippers she warned cinderella to return home before midnight as the magic would wear off at the ball cinderella captivated everyone with her beauty and grace including the prince who asked her to dance the night away as the clock struck midnight cinderella remembered the fairy godmother's warning and hurriedly fled leaving behind one of her glass slippers the prince searched the kingdom for the mysterious maiden whose foot would fit the slipper when he found cinderella they were reunited and she was whisked away to the palace where they lived happily ever after snow white was a kind-hearted princess who lived in a castle with her wicked stepmother the queen jealous of snow white's beauty the queen ordered a huntsman to take snow white into the forest and kill her instead the huntsman took pity on snow white and let her go deep into the forest snow white stumbled upon a small cottage belonging to seven dwarfs they welcomed her with open arms and she began to live with them meanwhile the queen discovered that snow white was still alive and disguised herself as an old woman offering snow white a poisoned apple snow white took a bite and fell into a deep sleep the dwarfs found her and placed her in a glass coffin one day a prince passing by saw snow white and kissed her awakening her from the spell they were married and snow white became the queen while the evil queen faced her demise for her wicked deeds snow white and the prince ruled the kingdom with kindness and justice forever after routines tending to their fields and caring for their families life was peaceful and harmonious and the people of the kingdom lived in unity and contentment however one day dark clouds began to gather on the horizon threatening to disrupt the tranquility of the kingdom rumors spread of an evil sorcerer who sought to conquer the land and seize control of its riches fearing for the safety of their kingdom the king and queen called upon their bravest knights to defend their homeland as the kingdom prepared for battle the princess volunteered to join the fight determined to protect her home and her people with courage in their hearts and swords in hand the knights marched forth to confront the sorcerer and his dark forces the battle was fierce and intense with both sides fighting valiantly for victory in the end it was the bravery and determination of the kingdom's defenders that prevailed driving the sorcerer and his minions away and restoring peace to the land cinderella lived with her stepmother and stepsisters they were very unkind to her making her do all the chores while they lounged around the house one day an invitation to the royal ball arrived at their doorstep cinderella's stepmother and stepsisters were thrilled but they refused to let cinderella go instead they left her behind to clean the house and prepare their outfits as they attended the ball alone cinderella sat by the fireplace feeling sad suddenly a fairy godmother appeared and with a wave of her wand transformed cinderella's rags into a beautiful gown and her old shoes into glass slippers she warned cinderella to return home before midnight as the magic would wear off at the ball cinderella captivated everyone with her beauty and grace including the prince who asked her to dance the night away as the clock struck midnight cinderella remembered the fairy godmother's warning and hurriedly fled leaving behind one of her glass slippers the prince searched the kingdom for the mysterious mai",
                "little red riding hood was a young girl who lived in a village with her mother one day her mother asked her to take a basket of goodies to her grandmother who lived on the other side of the forest she warned little red riding hood not to stray from the path as there were dangers lurking in the woods little red riding hood promised to be careful as she ventured into the forest she met a sly wolf who tricked her into revealing where she was going the wolf ran ahead and arrived at grandmother's house first he disguised himself as grandmother and waited for little red riding hood when she arrived she was surprised by how different her grandmother looked but she didn't suspect a thing until the wolf revealed himself and tried to eat her luckily a woodcutter passing by heard her screams and rescued her he chased the wolf away and little red riding hood learned to always listen to her mother's warnings goldilocks was a curious little girl who stumbled upon a cozy cottage in the woods belonging to three bears she entered the cottage and found three bowls of porridge on the table the first bowl was too hot the second bowl was too cold but the third bowl was just right she ate it all up then she found three chairs the first chair was too big the second chair was too small but the third chair was just right as she sat down it broke into pieces tired from her adventures goldilocks went upstairs and found three beds the first bed was too hard the second bed was too soft but the third bed was just right she fell asleep in it just as the three bears returned home they found goldilocks sleeping in baby bear's bed she woke up startled and ran out of the cottage never to return again she was going the wolf ran ahead and arrived at grandmother's house first he disguised himself as grandmother and waited for little red riding hood when she arrived she was surprised by how different her grandmother looked but she didn't suspect a thing until the wolf revealed himself and tried to eat her luckily a woodcutter passing by heard her screams and rescued her he chased the wolf away and little red riding hood routines tending to their fields and caring for their families life was peaceful and harmonious and the people of the kingdom lived in unity and contentment however one day dark clouds began to gather on the horizon threatening to disrupt the tranquility of the kingdom rumors spread of an evil sorcerer who sought to conquer the land and seize control of its riches fearing for the safety of their kingdom the king and queen called upon their bravest knights to defend their homeland as the kingdom prepared for battle the princess volunteered to join the fight determined to protect her home and her people with courage in their hearts and swords in hand the knights marched forth to confront the sorcerer and his dark forces the battle was fierce and intense with both sides fighting valiantly for victory in the end it was the bravery and determination of the kingdom's defenders that prevailed driving the sorcerer and his minions away and restoring peace to the land little red riding hood was a young girl who lived in a village with her mother one day her mother asked her to take a basket of goodies to her grandmother who lived on the other side of the forest she warned little red riding hood not to stray from the path as there were dangers lurking in the woods little red riding hood promised to be careful as she ventured into the forest she met a sly wolf who tricked her into revealing where she was going the wolf ran ahead and arrived at grandmother's house first he disguised himself as grandmother and waited for little red riding hood when she arrived she was surprised by how different her grandmother looked but she didn't suspect a thing until the wolf revealed himself and tried to eat her luckily a woodcutter passing by heard her screams and rescued her he chased the wolf away and little red riding hood learned to always listen to her mother's warnings goldilocks was a curious little girl who stumbled upon a cozy cottage in the woods belonging to",
                "nestled between rolling hills lived a young baker named elara known for her delicate pastries and kind smile but elara harbored a secret dream she longed to become a sculptor her passion ignited by the weathered stones scattered around her village whispering stories of forgotten times every spare moment elara would steal away to the riverbank her fingers coaxing formless clay into creatures both whimsical and grand yet self doubt gnawed at her a relentless critic in her mind her fear of failure a heavy stone in her chest one crisp autumn morning elara stumbled upon an old sculptor hunched over a block of marble in the village square his weathered hands danced with a precision that left her breathless for the first time elara confessed her dream the sculptor a man with eyes that held the wisdom of ages simply smiled and said the only way to sculpt your dreams is to pick up the chisel  elara hesitated fear threatening to paralyze her but the sculptor s gentle encouragement and the fire in her own heart propelled her forward that very day she bought a modest block of stone and some basic tools the first tentative chips sent shivers down her spine but with each determined swing of the hammer a sliver of self doubt chipped away as well days bled into weeks frustration mingled with moments of exhilarating progress where formless stone began to reveal the shapes taking root in her mind the villagers watched with curiosity some with amusement whispering behind cupped hands but elara was oblivious lost in the dance of creation one day a traveling merchant with eyes as keen as a hawk stopped in his tracks before elara s work his weathered face creased in surprise then admiration he offered to buy the unfinished piece a life changing sum elara gasped but the sculptor s wise voice echoed in her mind this is not for sale he said your dreams are priceless the merchant s praise fueled elara s determination and soon her sculptures became a village treasure each imbued with a story a whisper of the emotions that poured from her heart as elara s fame spread beyond the village walls commissions poured in her hands that once trembled with doubt now wielded the chisel with the unwavering confidence of a master sculptor years later elara stood before a towering marble statue in the grand city square a culmination of her life s journey tears welled in her eyes not of sadness but of gratitude for the sculptor who dared her to chase her dreams and for the journey that had transformed her from a self doubting baker into an artist who sculpted not just stone but hope inspiration and most importantly her own magnificent destiny once upon a time in a small village nestled between rolling hills lived a young baker named elara known for her delicate pastries and kind smile but elara harbored a secret dream she longed to become a sculptor her passion ignited by the weathered stones scattered around her village whispering stories of forgotten times every spare moment elara would steal away to the riverbank her fingers coaxing formless clay into creatures both whimsical and grand yet self doubt gnawed at her a relentless critic in her mind her fear of failure a heavy stone in her chest one crisp autumn morning elara stumbled upon an old sculptor hunched over a block of marble in the village square his weathered hands danced with a precision that left her breathless for the first time elara confessed her dream the sculptor a man with eyes that held the wisdom of ages simply smiled and said the only way to sculpt your dreams is to pick up the chisel  elara hesitated fear threatening to paralyze her but the sculptor s gentle encouragement and the fire in her own heart propelled her forward that very day she bought a modest block of stone and some basic tools the first tentative chips sent shivers down her spine but with each determined swing of the hammer a sliver of self doubt chipped away as well days bled into weeks frustration mingled with moments of exhilarating progress where formless stone began to reveal the shapes taking root in her mind the villagers watched with curiosity some with amusement whispering behind cupped hands but elara was oblivious lost in the dance of creation one day a traveling merchant with eyes as keen as a hawk stopped in his tracks before elara s work his weathered face creased in surprise then admiration he offered to buy the unfinished piece a life changing sum elara gasped but the sculptor s wise voice echoed in her mind this is not for sale he said your dreams are priceless the merchant s praise fueled elara s determination and soon her sculptures became a village treasure each imbued with a story a whisper of the emotions that poured from her heart as elara s fame spread beyond the village walls commissions poured in her hands that once trembled with doubt now wielded the chisel with the unwavering confidence of a master sculptor years later elara stood before a towering marble statue in the grand city square a culmination of her life s journey tears welled in her eyes not of sadness but of gratitude for the sculptor who dared her to chase her dreams and for the journey that had transformed her from a self doubting baker into an artist who sculpted not just stone but hope inspiration and most importantly her own magnificent destiny time in a small village nestled between rolling hills lived a young baker named elara known for her delicate pastries and kind smile but elara harbored a secret dream she longed to become a sculptor her passion ignited by the weathered stones scattered around her village whispering stories of forgotten times every spare moment elara would steal away to the riverbank her fingers coaxing formless clay into creatures both whimsical and grand yet self doubt gnawed at her a relentless critic in her mind her fear of failure a heavy stone in her chest one crisp autumn morning elara stumbled upon an old sculptor hunched over a block of marble in the village square his weathered",
                "across vast plains cradled by mighty mountains simmers a land of vibrant colors and ancient traditions india a cradle of civilization whispers tales of a rich and multifaceted past in the fertile lands of the indus valley flourished the enigmatic indus civilization with its planned cities and precocious understanding of urban life empires rose and fell like the tides the mighty mauryan empire under ashoka the great spreading peace and buddhist dharma across the land leaving behind towering sandstone pillars etched with edicts of tolerance and compassion in the bustling lanes of medieval india a confluence of cultures blossomed hindu temples with intricate carvings reaching for the heavens majestic mosques a testament to the faith of emperors and traders majestic forts standing guard on windswept hills powerful empires like the cholas and the mughals left behind a legacy of art literature and architectural marvels the arrival of european traders forever changed the course of history the british raj ushered in an era of colonialism a struggle for independence a fight for self rule a yearning for a nation where ancient traditions could flourish alongside modern progress the 20th century witnessed the birth of a free india a nation grappling with the complexities of democracy poverty and social change yet the spirit of resilience endures a land where ancient customs coexist with bustling metropolises a vibrant tapestry woven with countless threads of language religion and ethnicity india's story is an ongoing saga a testament to the enduring human spirit its past a wellspring of inspiration its future brimming with potential across vast plains cradled by mighty mountains simmers a land of vibrant colors and ancient traditions india a cradle of civilization whispers tales of a rich and multifaceted past in the fertile lands of the indus valley flourished the enigmatic indus civilization with its planned cities and precocious understanding of urban life empires rose and fell like the tides the mighty mauryan empire under ashoka the great spreading peace and buddhist dharma across the land leaving behind towering sandstone pillars etched with edicts of tolerance and compassion in the bustling lanes of medieval india a confluence of cultures blossomed hindu temples with intricate carvings reaching for the heavens majestic mosques a testament to the faith of emperors and traders majestic forts standing guard on windswept hills powerful empires like the cholas and the mughals left behind a legacy of art literature and architectural marvels the arrival of european traders forever changed the course of history the british raj ushered in an era of colonialism a struggle for independence a fight for self rule a yearning for a nation where ancient traditions could flourish alongside modern progress the 20th century witnessed the birth of a free india a nation grappling with the complexities of democracy poverty and social change yet the spirit of resilience endures a land where ancient customs coexist with bustling metropolises a vibrant tapestry woven with countless threads of language religion and ethnicity india's story is an ongoing saga a testament to the enduring human spirit its past a wellspring of inspiration its future brimming with potential across vast plains cradled by mighty mountains simmers a land of vibrant colors and ancient traditions india a cradle of civilization whispers tales of a rich and multifaceted past in the fertile lands of the indus valley flourished the enigmatic indus civilization with its planned cities and precocious understanding of urban life empires rose and fell like the tides the mighty mauryan empire under ashoka the great spreading peace and buddhist dharma across the land leaving behind towering sandstone pillars etched with edicts of tolerance and compassion in the bustling lanes of medieval india a confluence of cultures blossomed hindu temples with intricate carvings reaching for the heavens majestic mosques a testament to the faith of emperors and traders majestic forts standing guard on w",
                "amidst the towering skyscrapers of a bustling metropolis lived a young violinist named kai his melodies echoed through the concrete canyons, a soulful escape for the hurried masses yet kai dreamt of grand concert halls, of sharing his music with the world but fear held him captive the stage lights a terrifying inferno, the audience a sea of judgmental eyes his music remained confined to the quiet corners of the city park one rainy afternoon an old woman with eyes that held the tint of distant storms stopped to listen to kai s music as the last note faded she spoke her voice a gentle rasp  your music it has wings she said but they are clipped by fear  her words struck a chord deep within kai that night he wrestled with his trepidation but the old woman s belief flickered like a hopeful ember the next day kai stood at the entrance of a grand concert hall his heart a frantic drum solo but a newfound determination steeled his nerves with trembling fingers he signed up for an open mic night the stage lights were blinding the audience a blur but as kai drew the bow across his violin a hush fell over the room the melody soared, a testament to his passion and perseverance the final note hung in the air, followed by a thunderous applause tears welled in kai s eyes not of fear but of triumph he had taken flight, his music reaching hearts far beyond the confines of the park that night marked the beginning of kai s journey as a renowned violinist his music a testament to the power of conquering fear and the transformative potential of a single step towards a dream amidst the towering skyscrapers of a bustling metropolis lived a young violinist named kai his melodies echoed through the concrete canyons, a soulful escape for the hurried masses yet kai dreamt of grand concert halls, of sharing his music with the world but fear held him captive the stage lights a terrifying inferno, the audience a sea of judgmental eyes his music remained confined to the quiet corners of the city park one rainy afternoon an old woman with eyes that held the tint of distant storms stopped to listen to kai s music as the last note faded she spoke her voice a gentle rasp  your music it has wings she said but they are clipped by fear  her words struck a chord deep within kai that night he wrestled with his trepidation but the old woman s belief flickered like a hopeful ember the next day kai stood at the entrance of a grand concert hall his heart a frantic drum solo but a newfound determination steeled his nerves with trembling fingers he signed up for an open mic night the stage lights were blinding the audience a blur but as kai drew the bow across his violin a hush fell over the room the melody soared, a testament to his passion and perseverance the final note hung in the air, followed by a thunderous applause tears welled in kai s eyes not of fear but of triumph he had taken flight, his music reaching hearts far beyond the confines of the park that night marked the beginning of kai s journey as a renowned violinist his music a testament to the power of conquering fear and the transformative potential of a single step towards a dream amidst the towering skyscrapers of a bustling metropolis lived a young violinist named kai his melodies echoed through the concrete canyons, a soulful escape for the hurried masses yet kai dreamt of grand concert halls, of sharing his music with the world but fear held him captive the stage lights a terrifying inferno, the audience a sea of judgmental eyes his music remained confined to the quiet corners of the city park one rainy afternoon an old woman with eyes that held the tint of distant storms stopped to listen to kai s music as the last note faded she spoke her voice a gentle rasp  your music it has wings she said but they are clipped by fear  her words struck a chord deep within kai that night he wrestled with his trepidation but the old woman s belief flickered like a hopeful ember the next day kai stood at the entrance of a grand concert hall his heart a frantic drum solo but a newfound determination steeled his nerves with trembling",
                "history is the study of the past it encompasses a wide range of human activities and events these events are recorded and analyzed to understand their significance and impact on society history helps us understand how societies have evolved over time how they have interacted with each other and how they have shaped the world we live in today history provides us with valuable insights into the human experience it tells us about the triumphs and failures of individuals and civilizations it teaches us about the decisions and actions that have led to great achievements and catastrophic disasters by studying history we can learn from the mistakes of the past and avoid repeating them in the future one of the key aspects of history is its focus on change over time history examines how societies have evolved from ancient times to the present day it looks at the factors that have influenced social political and economic change such as technological advancements cultural shifts and environmental factors history also helps us understand the diversity of human experience it tells the stories of people from different cultures backgrounds and walks of life by studying the history of different societies we can gain a greater appreciation for the richness and complexity of human civilization in addition to its academic importance history also plays a crucial role in shaping our identities and collective memory it provides us with a sense of belonging and continuity connecting us to our ancestors and the traditions they have passed down to us history helps us understand who we are and where we come from providing us with a sense of context and perspective furthermore history serves as a tool for social and political change by studying the struggles and triumphs of past movements and revolutions we can gain insights into effective strategies for bringing about positive change history is not just about memorizing dates and facts it is about understanding the forces that have shaped the world and the people who inhabit it it is about asking questions and seeking answers it is about learning from the past so that we can create a better future history is the study of the past it encompasses a wide range of human activities and events these events are recorded and analyzed to understand their significance and impact on society history helps us understand how societies have evolved over time how they have interacted with each other and how they have shaped the world we live in today history provides us with valuable insights into the human experience it tells us about the triumphs and failures of individuals and civilizations it teaches us about the decisions and actions that have led to great achievements and catastrophic disasters by studying history we can learn from the mistakes of the past and avoid repeating them in the future one of the key aspects of history is its focus on change over time history examines how societies have evolved from ancient times to the present day it looks at the factors that have influenced social political and economic change "

            ]
        const typing_text = document.querySelector('.text-of-typing p');
        const inputField = document.querySelector('.container .input-field');
        const errorTag = document.querySelector('.errors span');
        const timeTag = document.querySelector('.time span');
        const wpmTag = document.querySelector('.wpm span');
        const cpmTag = document.querySelector('.cpm span');
        const button = document.querySelector('button');
        const switchMode = document.getElementById('switchMode');
        const contentBox = document.querySelector('.content-box');
        const typingText = document.querySelector('.content-box .text-of-typing p');

        let characterIndex = 0;
        let wordIndex = 0; // Track the current word index
        let errors = 0;
        let timer;
        let maxTime = 120;
        let timeLeft = maxTime;
        let isTyping = false; // Change to boolean value
        let characters;
        let currentWord = ""; // Track the current word being typed
        let currentWordIndex = 0; // Track the current word index
        const paragraphChunks = []
        let currentChunkIndex = 0;
        let chunk = "";


        function fetchRandomParagraph() {
            let randomIndex = Math.floor(Math.random() * paragraphs.length);
            let paragraph = paragraphs[randomIndex];
            paragraph = paragraph.substring(0, maxCharactersDisplayed);
            let chunkSize = paragraph.length / 12;
            for (let i = 0; i < paragraph.length; i += chunkSize) {
                paragraphChunks.push(paragraph.substring(i, i + chunkSize));
            }
            document.addEventListener('keydown', () => inputField.focus());
            typing_text.addEventListener('click', () => inputField.focus());
            document.getElementById('text-container').scrollTop = 0;
        }

        function displayRandomParagraph() {
            if (currentChunkIndex < paragraphChunks.length) {
                let chunk = paragraphChunks[currentChunkIndex];
                typing_text.innerHTML = "";
                chunk.split("").forEach((char) => {
                    let spanTag = `<span>${char}</span>`;
                    typing_text.innerHTML += spanTag;
                });
                currentChunkIndex++;
            } else {
                console.log("Paragraph completed");
            }
            characters = typing_text.querySelectorAll('span');
        }

        document.addEventListener("DOMContentLoaded", function() {
            const darkModeToggle = document.getElementById("darkModeToggle");
            const body = document.body;
            // Check if the user's preference is stored
            const userPreference = localStorage.getItem("darkMode");
            // Set the initial mode based on the stored preference
            if (userPreference === "dark") {
                darkModeToggle.checked = true;
                body.classList.add("dark-mode");
            }

            darkModeToggle.addEventListener("change", function() {
                if (darkModeToggle.checked) {
                    body.classList.add("dark-mode");
                    localStorage.setItem("darkMode", "dark");
                } else {
                    body.classList.remove("dark-mode");
                    localStorage.setItem("darkMode", "light");
                }
            });
            fetchRandomParagraph();
            displayRandomParagraph()
            inputField.focus(); // Focus the input field when the page loads

        });
        const userPreference = localStorage.getItem("darkMode");
        const toggleCheckbox = document.getElementById("darkModeToggle");
        const tooltipdarkmood = document.querySelector(".tooltipdarkmood");

        toggleCheckbox.addEventListener("change", function() {
            if (toggleCheckbox.checked) {
                tooltipdarkmood.style.visibility = "hidden";
                tooltipdarkmood.style.opacity = 0;
            }
        });
        // Set the initial mode based on the stored preference
        if (userPreference === "dark") {
            document.body.classList.add("dark-mode");
        }
        const maxCharactersDisplayed = 6000; // Adjust this value as needed


        let isFirstKeyPress = true;
        inputField.addEventListener('keypress', function() {
            if (isFirstKeyPress) {
                isFirstKeyPress = false;
                switchMode.disabled = true;
            }
        });

        const tooltipexp = document.querySelector(".tooltipexp");

        switchMode.addEventListener("change", function() {
            if (switchMode.checked) {
                tooltipexp.style.visibility = "hidden";
                tooltipexp.style.opacity = 0;
            }
        });

        // Set the default mode to "noob"
        const defaultMode = 'noob';

        // Check if the user's preference is stored
        const userPreference1 = localStorage.getItem('typingTestMode');

        // Set the initial mode based on the stored preference
        if (userPreference1 === 'pro') {
            contentBox.classList.remove('noob');
            contentBox.classList.add('pro');
            switchMode.checked = false; // Set switch button to "pro" position
        } else {
            contentBox.classList.remove('pro');
            contentBox.classList.add('noob');
            switchMode.checked = true; // Set switch button to "noob" position
        }

        // Event listener for the switch button
        switchMode.addEventListener('change', function() {
            if (this.checked) {
                // Switch to noob mode
                contentBox.classList.remove('pro');
                contentBox.classList.add('noob');
                // Store user preference in localStorage
                localStorage.setItem('typingTestMode', 'noob');
            } else {
                // Switch to pro mode
                contentBox.classList.remove('noob');
                contentBox.classList.add('pro');
                // Store user preference in localStorage
                localStorage.setItem('typingTestMode', 'pro');
            }
        });



        function initTyping() {
            let typedCharacter = inputField.value.split("")[characterIndex];
            const lastIndexOfCharacters = characters.length - 1;
            const preloadThreshold = 100; // Adjust this threshold as needed
            const remainingCharacters = lastIndexOfCharacters - characterIndex;
            if (remainingCharacters <= preloadThreshold && currentChunkIndex < paragraphChunks.length - 1) {
                const nextChunk = paragraphChunks[currentChunkIndex + 1];
                const fragment = document.createDocumentFragment();
                nextChunk.split("").forEach((char) => {
                    let span = document.createElement('span');
                    span.textContent = char;
                    fragment.appendChild(span);
                });
                // Append the fragment to the typing_text container
                typing_text.appendChild(fragment);
                // Update the characters NodeList
                characters = typing_text.querySelectorAll('span');
                currentChunkIndex++;
            }
            if (characterIndex < characters.length && timeLeft > 0) {
                if (characterIndex === 0) {
                    const startMessage = document.getElementById('start-message');
                    startMessage.style.display = 'none';
                }
                if (!isTyping) {
                    timer = setInterval(initTimer, 1000);
                    isTyping = true;
                }
                if (typedCharacter == null) {
                    characterIndex--;
                    if (characters[characterIndex].classList.contains('incorrect')) {
                        errors--;
                        characters[currentWordIndex].classList.remove('incorrect-word');
                    }
                    characters[characterIndex].classList.remove('correct', 'incorrect');
                } else {
                    if (characters[characterIndex].innerText === typedCharacter) {
                        characters[characterIndex].classList.add('correct');
                    } else {
                        errors++;
                        characters[characterIndex].classList.add('incorrect');
                        characters[currentWordIndex].classList.add('incorrect-word');
                    }
                    characterIndex++;
                }
                characters.forEach((span, index) => {
                    if (index === characterIndex) {
                        span.classList.add('blinking-line');
                    } else {
                        span.classList.remove('blinking-line');
                    }
                });
                updateScroll();

                // Check if a word is complete
                if (typedCharacter === ' ' || characterIndex === characters.length - 1) {
                    currentWord = ""; // Reset the current word
                    currentWordIndex = characterIndex + 1; // Update the current word index
                } else {
                    currentWord += typedCharacter; // Build the current word
                }

                errorTag.innerText = errors;
                cpmTag.innerText = characterIndex - errors;
                let wpm = Math.round((((characterIndex - errors) / 5) / (maxTime - timeLeft)) * 60);
                wpm = wpm < 0 || !wpm || wpm === Infinity ? 0 : wpm;
                wpmTag.innerText = wpm;
            } else {
                inputField.value = "";
                clearInterval(timer);

            }
        }

        inputField.addEventListener('input', initTyping);

        function updateScroll() {
            const textContainer = document.getElementById('text-container');
            const lastCharacter = characters[characterIndex - 1];
            const bottomLine = textContainer.getBoundingClientRect().bottom;
            const lastCharacterBottom = lastCharacter.getBoundingClientRect().bottom;
            if (lastCharacterBottom > bottomLine - 3.6 * characters[0].offsetHeight) {
                textContainer.scrollTop += lastCharacterBottom - bottomLine + 3.6 * characters[0].offsetHeight;
            } else if (lastCharacterBottom < textContainer.getBoundingClientRect().top) {
                textContainer.scrollTop = lastCharacter.offsetTop - textContainer.offsetTop;
            }
        }

        function showLoadingLoader() {
            // Show the loading loader
            const loadingLoader = document.querySelector('.loader');
            loadingLoader.style.display = 'block';
            document.body.classList.add('waiting-for-achievement');
            document.querySelector('.container').style.display = 'none';

            // Show the card
            const card = document.getElementById('card');
            const card2 = document.getElementById('card2');
            const card3 = document.getElementById('card3');
            const bg1 = document.getElementById('bg1');
            const ft = document.getElementById('ft');
            const para2 = document.getElementById('para2')
            card.style.display = 'none';
            card2.style.display = 'none';
            card3.style.display = 'none';
            bg1.style.display = 'none';
            ft.style.display = 'none';
            para2.style.display = 'none';



            // Hide it after 3 seconds and show the achievement box
            setTimeout(() => {
                card.style.display = 'block';
                card2.style.display = 'block';
                card3.style.display = 'block';
                bg1.style.display = 'block';
                ft.style.display = 'block';
                para2.style.display = 'block';
            

                loadingLoader.style.display = 'none';
                document.body.classList.remove('waiting-for-achievement');
                showAchievementBox();
                // Add a class to move the card down below the achievement box
                card.classList.add('move-down');
                card2.classList.add('move-down');
                card3.classList.add('move-down');
                bg1.classList.add('move-down');
                ft.classList.add('move-down');
                para2.classList.add('move-down');

            }, 3000);
        }

        function getRandomRemark(remarksArray) {
            const randomIndex = Math.floor(Math.random() * remarksArray.length);
            return remarksArray[randomIndex];
        }

        function initAchievementChart() {
            const achievementChartBox = document.querySelector('.achievement-chart-box');
            const achievementChartCanvas = document.getElementById('achievement-chart');
            const ctx = achievementChartCanvas.getContext('2d');
            const data = {
                labels: ['Accuracy', 'CPM', 'WPM'],
                datasets: [{
                    data: [0, 0, 0],
                    backgroundColor: ['rgba(196, 52, 33, 0.8)', 'rgba(78, 78, 194, 0.8)',
                        'rgba(212, 209, 32, 0.8)'
                    ],
                    barPercentage: 0.9,
                    categoryPercentage: 0.8,
                    borderRadius: 10,
                }],
            };
            const options = {

                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },

                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        },
                    }],
                },
            };

            const achievementChart = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: options,
            });

            achievementChartBox.style.display = 'block';

            return achievementChart;
        }

        function showAchievementBox() {
            // Show the achievement box
            const closeAchievementBtn = document.getElementById('close-achievement');
            closeAchievementBtn.addEventListener('click', function() {
                const achievementBox = document.querySelector('.achievement-box');
                achievementBox.style.display = 'none';
            });

            // Add event listener to the "Try Again" button inside the achievement box to restart the game
            const tryAgainAchievementBtn = document.getElementById('try-again-achievement-btn');
            tryAgainAchievementBtn.addEventListener('click', function() {
                location.reload();
            });

            // Add event listener to the "Home" button to go back to the typing page
            const homeBtn = document.getElementById('home-btn');
            homeBtn.addEventListener('click', function() {
                // Navigate back to the typing page (you can customize this based on your specific setup)
                window.location.href = "index.php";
            });

            const achievementBox = document.querySelector('.achievement-box');
            achievementBox.style.display = 'block';

            // Update achievement box content with the values
            const achievementAccuracy = document.getElementById('achievement-accuracy');
            const achievementWpm = document.getElementById('achievement-wpm');
            const achievementCpm = document.getElementById('achievement-cpm');
            const achievementRemarks = document.getElementById('achievement-remarks');

            const totalCharactersTyped = characterIndex + errors;
            const accuracy = (totalCharactersTyped === 0) ? '0%' : (((characterIndex - errors) /
                    totalCharactersTyped) *
                100).toFixed(2) + "%";
            achievementAccuracy.textContent = accuracy;
            achievementWpm.textContent = wpmTag.innerText;
            achievementCpm.textContent = cpmTag.innerText;

            // Show the achievement chart
            const achievementChart = initAchievementChart();
            achievementChart.data.datasets[0].data = [parseFloat(accuracy), parseInt(cpmTag.innerText), parseInt(
                wpmTag
                .innerText)];
            achievementChart.update();
            // Show remarks based on the achieved WPM value
            const wpmValue = parseInt(wpmTag.innerText, 10);
            let remarks = '';

            // Remarks for WPM values above 100
            if (wpmValue >= 100) {
                const remarksAbove100 = [
                    'Remarks: You have reached an absolutely outstanding typing speed!',
                    'Remarks: Your typing speed is exceptional! Keep up the great work!',
                    'Remarks: Wow! You are typing at a professional level.!',
                    // Add more remarks above 100 if needed
                ];
                remarks = getRandomRemark(remarksAbove100);
            } else if (wpmValue >= 95) {
                const remarksAbove95 = [
                    'Remarks: Excellent speed! You are impressive!',
                    'Remarks: Your typing speed is top-notch! Keep it up!',
                    'Remarks: Fantastic job! You are doing remarkably well!',
                    // Add more remarks above 95 if needed
                ];
                remarks = getRandomRemark(remarksAbove95);
            } else if (wpmValue >= 90) {
                const remarksAbove90 = [
                    'Remarks: Fantastic job! Your typing speed is outstanding!',
                    'Remarks: Great effort! You are really fast!',
                    'Remarks: You are doing exceptionally well with your typing!',
                    // Add more remarks above 90 if needed
                ];
                remarks = getRandomRemark(remarksAbove90);
            } else if (wpmValue >= 85) {
                const remarksAbove85 = [
                    'Remarks: Superb performance! Your typing speed is outstanding!',
                    'Remarks: Incredible! Your typing is in a class of its own.!',
                    'Remarks: Your typing is stellar and stands out prominently!',
                    // Add more remarks above 85 if needed
                ];
                remarks = getRandomRemark(remarksAbove85);
            } else if (wpmValue >= 80) {
                const remarksAbove80 = [
                    'Remarks: Impressive! Your typing stands out!',
                    'Remarks: You are on fire! Your typing speed is impressive!',
                    'Remarks: Exceptional! Your typing is in a class by itself!',
                    // Add more remarks above 80 if needed
                ];
                remarks = getRandomRemark(remarksAbove80);
            } else if (wpmValue >= 75) {
                const remarksAbove75 = [
                    'Remarks: You have a truly exceptional typing style!',
                    'Remarks: Your typing is superb — truly exceptional!',
                    'Remarks: The way you type is truly extraordinary!',
                    // Add more remarks above 75 if needed
                ];
                remarks = getRandomRemark(remarksAbove75);
            } else if (wpmValue >= 70) {
                const remarksAbove70 = [
                    'Remarks: Exceptional typing! You\'re setting a high standard!',
                    'Remarks: Your typing skills are top-notch!',
                    'Remarks: Exceptional typing! You\'re setting a high standard!',
                    // Add more remarks above 70 if needed
                ];
                remarks = getRandomRemark(remarksAbove70);
            } else if (wpmValue >= 65) {
                const remarksAbove65 = [
                    'Remarks: Fantastic job! Your skills are truly extraordinary!',
                    'Remarks: Outstanding! Your typing is of the highest caliber!',
                    'Remarks: Exceptional typing! You\'re doing very, very well!',
                    // Add more remarks above 65 if needed
                ];
                remarks = getRandomRemark(remarksAbove65);
            } else if (wpmValue >= 60) {
                const remarksAbove60 = [
                    'Remarks: Bravo! You\'re consistently demonstrating greatness!',
                    'Remarks: Astounding work! You\'re doing exceptionally well!',
                    'Remarks: Splendid! Your skills and dedication are outstanding!',
                    // Add more remarks above 60 if needed
                ];
                remarks = getRandomRemark(remarksAbove60);
            } else if (wpmValue >= 55) {
                const remarksAbove55 = [
                    'Remarks: Well done! Your achievements are truly remarkable!',
                    'Remarks: Impressive typing skills! Your proficiency is notable!',
                    'Remarks: Excellent! Your skills and efforts are truly praiseworthy!',
                    // Add more remarks above 55 if needed
                ];
                remarks = getRandomRemark(remarksAbove55);
            } else if (wpmValue >= 50) {
                const remarksAbove50 = [
                    'Remarks: Marvelous work! You\'re truly making a positive impact!',
                    'Remarks: Amazing job! Your excellence is truly admirable!',
                    'Remarks: Impressive performance! You\'re excelling in every way!',
                    // Add more remarks above 50 if needed
                ];
                remarks = getRandomRemark(remarksAbove50);
            } else if (wpmValue >= 45) {
                const remarksAbove45 = [
                    'Remarks: Your typing is superbly impressive — truly outclassing.',
                    'Remarks: Your typing is stellar and stands out prominently',
                    'Remarks: Your typing is incredibly exceptional and stands out.',
                    // Add more remarks above 45 if needed
                ];
                remarks = getRandomRemark(remarksAbove45);
            } else if (wpmValue >= 40) {
                const remarksAbove40 = [
                    'Remarks: Outstanding! You\'re doing exceptionally!',
                    'Remarks: Well done! You\'re making valuable progress, keep it up!',
                    'Remarks: You\'re doing wonderfully! Keep building on your success!',
                    // Add more remarks above 40 if needed
                ];
                remarks = getRandomRemark(remarksAbove40);
            } else if (wpmValue >= 35) {
                const remarksAbove35 = [
                    'Remarks: Fantastic effort! You\'re making a difference, keep it up!',
                    'Remarks: Impressive effort! Keep building on the good work!',
                    'Remarks: Bravo! You\'re moving forward, keep going!',
                    // Add more remarks above 35 if needed
                ];
                remarks = getRandomRemark(remarksAbove35);
            } else if (wpmValue >= 30) {
                const remarksAbove30 = [
                    'Remarks: Superb! You\'re doing a little more than before!',
                    'Remarks: Well done! You\'re making little strides, keep it going!',
                    'Remarks: Great progress! Keep doing a little more each day!',
                    // Add more remarks above 30 if needed
                ];
                remarks = getRandomRemark(remarksAbove30);
            } else if (wpmValue >= 25) {
                const remarksAbove25 = [
                    'Remarks: Keep practicing! You can do it better!',
                    'Remarks: You have the potential! Keep pushing yourself!',
                    'Remarks: Keep pushing your limits! Improvement comes with practice!',
                    // Add more remarks above 25 if needed
                ];
                remarks = getRandomRemark(remarksAbove25);
            } else if (wpmValue >= 20) {
                const remarksAbove20 = [
                    'Remarks: Not bad for a start! Keep improving!',
                    'Remarks: Keep practicing! You are making progress!',
                    'Remarks: Nice effort! Improvement takes time and dedication!',
                    // Add more remarks above 20 if needed
                ];
                remarks = getRandomRemark(remarksAbove20);
            } else if (wpmValue >= 15) {
                const remarksAbove15 = [
                    'Remarks: You\'re improving! Keep pushing yourself!',
                    'Remarks: You can do better! Keep pushing yourself!',
                    'Remarks: Keep going! You are capable of more!',
                    // Add more remarks above 15 if needed
                ];
                remarks = getRandomRemark(remarksAbove15);
            } else {
                const remarksBelow15 = [
                    'Remarks: Slow progress! Keep trying!',
                    'Remarks: For improvement, more practice is needed',
                    'Remarks: Improvement needed! Keep practicing!',
                    // Add more remarks below 15 if needed
                ];
                remarks = getRandomRemark(remarksBelow15);
            }

            // Display the selected remark in the achievement box
            achievementRemarks.textContent = remarks;
        }

        function initTimer() {
            timeLeft--;
            switchMode.disabled = true;

            if (timeLeft <= 0) {
                clearInterval(timer);
                characters.forEach(span => span.classList.remove('blinking'));
                inputField.disabled = true;
                inputField.classList.add('disabled');

                // Hide the entire container when time is over
                document.querySelector('.container').style.display = 'none';

                // Show the loading loader
                showLoadingLoader();
            }

            // Convert the time from seconds to minutes and seconds format
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            const formattedTime = `${minutes}:${seconds.toString().padStart(2, '0')}`;

            timeTag.innerText = formattedTime;
            updateTimerColor();
        }

        function updateTimerColor() {
            const timerElement = document.querySelector('.time span');
            const timeRemaining = (timeLeft / maxTime) * 100;

            if (timeRemaining > 50) {
                timerElement.style.color = 'white';
            } else if (timeRemaining > 10) {
                timerElement.style.color = 'green';
            } else {
                timerElement.style.color = 'red';
            }
        }

        function resetGame() {
            location.reload();
            randomParagraph();
            updateTimerColor();
            inputField.value = "";
            clearInterval(timer);
            timeLeft = maxTime;
            characterIndex = 0;
            errors = 0;
            isTyping = 0;
            timeTag.innerText = timeLeft;
            errorTag.innerText = errors;
            wpmTag.innerText = 0;
            cpmTag.innerText = 0;
            document.querySelector('.achievement-box').style.display = 'none';

        }
        const tryAgainBtn = document.getElementById('try-again-btn');

        tryAgainBtn.addEventListener('click', function() {

            location.reload();
        });
        </script>
</body>

</html>