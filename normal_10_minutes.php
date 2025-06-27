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
    <title>TypingTwist.com - Five_Minute_Normal</title>
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
    align-items: center;
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
    margin-top: 4.25rem;
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


}

.toggle-label {
    display: flex;
    align-items: center;
    position: relative;
    cursor: pointer;
    padding: 0.3125rem;
    /* 5px */
    /* 15px */
    transition: background-color 0.3s;
    height: 1.3rem;
    width: 2.5rem;
    left: .27rem;


}

.toggle-checkbox {
    display: none;



}

.toggle-label::after {
    content: "";
    position: absolute;
    top: .1rem;
    /* 5px */
    left: -.1rem;
    /* 5px */
    width: 1.025rem;
    /* 26px */
    height: 1.025rem;
    /* 26px */

    border-radius: 50%;
    transition: left 0.3s;
    background-color: #000000;

}


.toggle-checkbox:checked+.toggle-label::after {
    left: calc(100% - 1.8125rem);
    /* 29px */


}


.toggle-checkbox:checked+.toggle-label::after {
    left: calc(100% - 1.3rem);
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
    width: 13.85rem;
    /* Adjusted from 29rem */
    height: 16.26rem;

    #img {
        width: 13rem;
    }

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
    margin: 0;
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
    justify-content: center;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border: 0.1rem solid #bac8de;
    /* Adjusted from 0.1rem */
    border-radius: 1.06rem;
    /* Adjusted from 1rem */
}

.flip-card-front {
    color: #00bbeb;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
}



#img {
    margin-top: .2rem;
    margin-left: .3rem;
    width: 13rem;
    height: 9.5rem;
    border-radius: 1rem;


}

.text3 {
    margin-left: -19rem;
        margin-top: -6rem;
        position: absolute;
        color: #2a91d1;
        font-weight: bold;
        font-size: 1.7rem;
        z-index: 1;
        border: 1rem solid none;
        border-style: none;
        width: 28rem;
        font-family: 'Arial Black', Gadget, sans-serif;
        text-transform: capitalize;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        pointer-events: none; /* Prevent the heading from triggering any hover effects */



}
.paragraphsection.move-down{
    margin-top: 90rem;
}
.paragraphsection {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    margin-top: 76rem;
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
    height: 166.5rem;
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
    z-index: 1;
    opacity: 0; /* Initially hidden */
    transition: width 1s ease-in-out, opacity 0.3s ease-in-out;
    box-shadow: 0px .5rem .5rem rgba(0, 0, 0, 0.20);
}
@media screen and (min-width: 344px) and (max-width: 767px) {
.container {
    padding: 4rem;
    
    }
    
.container button {
  
    margin-top: 2rem;

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
    <div>
        <footer class="ftt" id="ft">
        <p>&copy; 2024 Typing Twist. All rights reserved.</p>
        </footer>
    </div>
    <div class="background" id="bg1"></div>
    <div class="container">

        <div class="myclass">
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
                        <span id="time">5:00</span>
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

    <div class="flip-card" id="card" style="margin-left: 9rem;">
        <div class="text3" style="font-weight:italic" >Time for typing games!

        <img src="./image/svg/game1.svg"
        style="height:3.2rem; width:3.2rem; position:absolute; top:-.1rem; margin-left:-25.6rem" alt="">

        </div>
        <div class="flip-card-inner" id="card">
        <a href="typinggame.php">
            <div class="flip-card-front">
            <img src="./image/car.jpg" id="img" style="height:8.5rem;" alt="">
                    <p class="title">CAR RACING</p>
                    <p style="font-size:1rem; color: #2a91d1;">Race Around the Typing Track.</p>
            </div>
            </a>
        </div>
    </div>
    <div class="flip-card" id="card2" style="margin-left: -7rem;">
        <div class="flip-card-inner">
        <a href="typinggame.php">
                <div class="flip-card-front">
                    <img src="./image/balloon.jpg" id="img" style="height:8.5rem;" alt="">
                    <p class="title">BALLOON KEY</p>
                    <p style="font-size:1rem; color: #2a91d1;">Balloon Key Float Up with Fast Fingers</p>
                </div>
                </a>

        </div>
    </div>

    <div class="flip-card" id="card3" style="margin-left: -23rem">
        <div class="flip-card-inner">
        <a href="typinggame.php">
                <div class="flip-card-front">
                    <img src="./image/BALLS.jpg" id="img" style="height:8.5rem;" alt="">
                    <p class="title">KEY BALLS</p>
                    <p style="font-size:1rem; color: #2a91d1; ">Unleash Speed, Control the Balls.</p>
                </div>
                </a>
        </div>
        </div>

        <div class="paragraphsection" id="para2">
            <img src="./image/svg/tip.svg" alt=""
                style="height:2.9rem; width:2.9rem; position:absolute; top:-6.5rem; margin-left:9.9rem">
            <H4 style="margin-top:-7rem; margin-left:13rem;  position: absolute;color: #2a91d1;font-weight: bold;font-size: 1.7rem;z-index: 1; border: 1rem solid none; border-style: none;
        width: 35rem;  font-family: 'Arial Black', Gadget, sans-serif; 
     text-transform: capitalize
     ; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2); font-style:normal;">Typing Tips For Learner... </H4>
            <img src="./image/sad.png" alt=""
                style="height: 18rem; width: 18rem; margin-left: 28rem; margin-top:2rem; position:absolute ">
            <p class="paragraphtext">
            <span class="headingtext" style="font-size:1.3rem; margin-bottom: .1rem; display:block; font-weight: bold;">
            Why can't typists speed up Easily?</span> Many people struggle to improve their typing speed and typing test results because they don't practice
             regularly or focus on accuracy. They might not learn the right finger positions or use typing exercises 
             that can help. Without these important steps, it's hard to get better at typing quickly and smoothly. 
             But with consistent practice and the right techniques, anyone can improve their typing speed and 
             efficiency. Remember to take breaks to avoid fatigue, use typing games to make practice fun, and 
             gradually challenge yourself with more difficult texts.</p>
            <img src="./image/happy.png" alt=""
                style="height: 18rem; width: 18rem; margin-top: 35rem; margin-left:1rem; position:absolute ">
            <p class="paragraphtext1">
            <span class="headingtext" style="font-size:1.3rem; margin-top:-1rem; display:block; font-weight: bold;">
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


        <script>

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
                "Music, the universal language of emotion and expression, transcends boundaries of culture, language, and time. Its power lies in its ability to evoke feelings, stir memories, and communicate thoughts without the need for words. From the rhythmic beating of drums in ancient tribal ceremonies to the intricate melodies of classical symphonies, music has been an integral part of human existence for millennia, shaping cultures, influencing societies, and touching the hearts of individuals across the globe. One of the most remarkable aspects of music is its versatility. It spans a vast spectrum of genres, styles, and forms, catering to the diverse tastes and preferences of listeners. Whether it's the soulful strains of blues, the energetic beats of hip-hop, or the ethereal melodies of classical music, there is something for everyone in the world of music. Each genre carries its own unique characteristics, drawing inspiration from different cultural traditions, historical contexts, and artistic movements. Yet, despite these differences, all forms of music share a common goal: to connect with the human spirit and convey meaning beyond words. Music has the power to evoke a wide range of emotions, from joy and excitement to sadness and nostalgia. A haunting melody can transport listeners to distant memories, evoking feelings of longing and reflection. Similarly, an upbeat rhythm can energize and uplift, inspiring movement and dance. Through its emotional resonance, music provides an outlet for self-expression and catharsis, allowing individuals to process their feelings and connect with others on a deeper level. In times of celebration, music serves as a unifying force, bringing people together in shared moments of joy and festivity. Conversely, during times of sorrow, music offers solace and comfort, providing a means of healing and healing. Moreover, music plays a crucial role in shaping cultural identity and fostering social cohesion. Across cultures and civilizations, music has been used to preserve traditions, celebrate heritage, and reinforce communal bonds. Whether through folk songs, religious hymns, or national anthems, music serves as a powerful tool for transmitting values, beliefs, and narratives from one generation to the next. In this way, music becomes more than just entertainment; it becomes a symbol of identity and belonging, reflecting the collective experiences and aspirations of a society. Beyond its cultural significance, music also has profound implications for cognitive development and well-being. Research has shown that engaging with music can have a positive impact on various aspects of mental health, including stress reduction, mood enhancement, and cognitive function. Whether through active participation, such as playing an instrument or singing, or passive listening, music has the ability to stimulate the brain, evoke memories, and promote emotional regulation. In therapeutic settings, music therapy has emerged as an effective intervention for individuals with various mental health conditions, ranging from depression and anxiety to autism and dementia. By harnessing the therapeutic power of music, therapists can help clients express themselves, process emotions, and achieve a greater sense of well-being. Furthermore, music has the capacity to transcend barriers of language and communication, serving as a universal medium for expression and connection. Regardless of linguistic differences or cultural backgrounds, people from all walks of life can find common ground through music. In an increasingly globalized world, where diversity is celebrated and intercultural exchange is commonplace, music serves as a bridge that brings people together, fostering understanding, empathy, and mutual respect. Through collaborative musical endeavors, artists from different parts of the world can come together to create something beautiful and meaningful, transcending geopolitical boundaries and cultural divides. In conclusion, music is a powerful force that shapes our lives in profound and meaningful ways. From its ability to evoke emotions and foster social cohesion to its therapeutic benefits and capacity for cross-cultural communication, music enriches our existence and connects us to something greater than ourselves. As we continue to navigate the complexities of the modern world, let us never underestimate the transformative power of music to inspire, heal, and unite us all. Music's influence extends far beyond individual experiences; it permeates every aspect of society, leaving an indelible mark on history, politics, and social movements. Throughout the ages, music has been intertwined with major historical events, serving as a catalyst for change and a voice for the oppressed. From protest songs of the civil rights movement to anthems of revolution, music has played a pivotal role in mobilizing communities, galvanizing support, and amplifying voices that might otherwise go unheard. Moreover, the evolution of music mirrors the evolution of society itself, reflecting shifting attitudes, values, and ideologies. As societies progress and cultures interact, musical styles blend and evolve, giving rise to new genres and movements. The emergence of jazz in early 20th-century America, for example, not only revolutionized the music industry but also challenged prevailing notions of race and identity, paving the way for greater inclusivity and cultural exchange. Similarly, the rise of rock and roll in the 1950s and 60s provided a platform for young people to express themselves and challenge authority, sparking a cultural revolution that reverberated around the world. In addition to its cultural and historical significance, music also holds economic importance, driving industries and fueling innovation. The music industry, encompassing everything from record labels and streaming platforms to live concerts and merchandise, generates billions of dollars in revenue each year and employs millions of people worldwide. Beyond its economic value, music also contributes to tourism, urban development, and job creation, serving as a driving force for economic growth and prosperity. Furthermore, the democratization of music production and distribution has empowered artists to reach audiences on a global scale, bypassing traditional gatekeepers and intermediaries. With the advent of digital technology and social media, aspiring musicians can now create, promote, and distribute their music with relative ease, enabling greater diversity and accessibility within the industry. This democratization has also fostered new forms of artistic expression and collaboration, as artists from different backgrounds and disciplines come together to explore innovative sounds and styles. Despite its many benefits, however, the music industry also faces significant challenges, including issues of copyright infringement, piracy, and fair compensation for artists. As digital technology continues to reshape the landscape of the music industry, policymakers and industry stakeholders must work together to ensure that artists receive fair compensation for their work and that copyright laws are effectively enforced in the digital age. In conclusion, music is more than just entertainment; it is a powerful force that shapes our culture, influences our behavior, and drives social change. From its ability to inspire activism and mobilize communities to its economic impact and technological innovation, music permeates every aspect of our lives, leaving an enduring legacy that transcends time and space. As we continue to explore the depths of human creativity and expression, let us never forget the transformative power of music to unite us, inspire us, and move us forward as a society. Music is a fundamental aspect of human experience, woven into the fabric of our lives from birth to death. It accompanies us through moments of joy and sorrow, celebration and mourning, shaping our emotions and memories along the way. Whether it's the lullabies sung to us as infants, the songs played at weddings and funerals, or the melodies that soundtrack our daily routines, music holds a special place in our hearts and minds. One of the most remarkable qualities of music is its ability to evoke emotions and trigger memories. Certain songs have the power to transport us back in time, evoking vivid recollections of people, places, and experiences long past. The opening chords of a favorite childhood song can instantly bring back memories of carefree days spent playing in the sun, while the melancholy strains of a ballad can evoke feelings of nostalgia and longing for times gone by. Music has a unique ability to bypass the rational mind and speak directly to our emotions, tapping into the deepest recesses of our subconscious and unlocking a flood of memories and feelings. Moreover, music has the power to bring people together, transcending barriers of language, culture, and ideology. In an increasingly divided world, music serves as a universal language that unites us in shared moments of joy, sorrow, and celebration. Whether it's the rhythmic drumming of a West African dance troupe, the soaring vocals of an opera singer, or the infectious beats of a pop song, music has the power to connect us on a primal level, bypassing the need for words and fostering a sense of common humanity. In this way, music has the capacity to bridge divides, foster empathy, and promote understanding between people of different backgrounds and beliefs. Furthermore, music has the power to heal, both physically and emotionally. In ancient cultures around the world, music has been used as a form of medicine, believed to possess the power to cure illness, alleviate pain, and restore balance to the body and mind. In modern times, music therapy has emerged as a recognized form of treatment for a wide range of physical and mental health conditions, including depression, anxiety, and chronic pain. Through the use of music improvisation, songwriting, and guided listening exercisess",

                "Sports, an integral part of human culture and society, encompass a vast array of activities ranging from individual pursuits to team competitions. Throughout history, sports have served various purposes, including entertainment, physical fitness, social cohesion, and even political symbolism. The significance of sports transcends geographical boundaries and cultural differences, uniting people from diverse backgrounds under a common passion. One of the primary roles of sports is entertainment. From ancient times to the modern era, people have engaged in sports as spectators and participants alike, drawn to the excitement and drama that unfold on the field, court, or track. Whether it's the adrenaline rush of a close match, the awe-inspiring displays of athleticism, or the underdog's triumph against all odds, sports offer a captivating form of entertainment that captivates audiences worldwide. Moreover, sports play a crucial role in promoting physical fitness and overall well-being. Participation in sports encourages individuals to lead active lifestyles, fostering habits of exercise and healthy living. Whether through structured team sports like soccer or basketball or individual pursuits like running or swimming, sports provide opportunities for people to engage in physical activity, improving cardiovascular health, muscular strength, and coordination. Beyond the realm of personal health, sports also contribute to social cohesion and community bonding. Team sports, in particular, foster camaraderie, communication, and teamwork among players, promoting a sense of belonging and shared purpose. Furthermore, sports events serve as platforms for social interaction, bringing together individuals from different backgrounds to celebrate a common passion and forge new connections. Sports have also been intertwined with politics and culture throughout history, serving as symbols of national identity, pride, and unity. Major sporting events such as the Olympic Games and the FIFA World Cup showcase the power of sports to transcend geopolitical boundaries and foster international cooperation. Additionally, athletes often become cultural icons and ambassadors for their countries, representing values and aspirations that extend beyond the realm of sports. However, the world of sports is not without its controversies and challenges. Issues such as doping, corruption, and unethical behavior tarnish the integrity of sports and undermine the spirit of fair play. Furthermore, the commercialization of sports has led to concerns about inequality, as lucrative contracts and endorsements often favor elite athletes while grassroots programs struggle for funding. Despite these challenges, the enduring popularity of sports underscores their profound impact on society. Whether as a source of entertainment, a promoter of physical fitness, a catalyst for social cohesion, or a symbol of cultural identity, sports hold a unique place in human civilization. As we navigate the complexities of the modern world, sports continue to inspire and unite us, reminding us of the enduring power of the human spirit. Sports have a rich and diverse history that spans millennia, evolving alongside human societies and cultures. Ancient civilizations such as the Greeks, Romans, and Mayans valued sports not only for their physical benefits but also for their cultural and religious significance. From the Olympic Games of ancient Greece to the ball games of Mesoamerica, sports have been deeply intertwined with rituals, ceremonies, and beliefs, reflecting the values and priorities of different societies. The modern era has seen a proliferation of sports at both the amateur and professional levels, with countless disciplines and variations practiced around the globe. Traditional sports like soccer, basketball, and cricket have gained worldwide popularity, while newer sports and alternative forms of competition continue to emerge, catering to diverse interests and preferences. The advent of modern technologies has revolutionized the way sports are played, watched, and experienced. Television broadcasts, live streaming, and digital platforms have transformed sports into a multi-billion-dollar industry, with major events attracting millions of viewers and generating substantial revenue through advertising, sponsorship, and media rights. Moreover, advances in sports science, training methods, and equipment have pushed the boundaries of human performance, leading to record-breaking achievements and extraordinary feats of athleticism. Athletes continually strive for excellence, pushing themselves to the limit in pursuit of victory and glory. At the same time, sports serve as a platform for social change and activism, allowing athletes to raise awareness about important issues and advocate for positive change. From Muhammad Ali's stance against racial injustice to Colin Kaepernick's protest against police brutality, athletes have used their platforms to speak out against discrimination, inequality, and systemic injustice, inspiring others to join the fight for social justice. In recent years, there has been a growing recognition of the importance of diversity, inclusion, and accessibility in sports. Efforts to promote gender equality, support LGBTQ+ athletes, and create opportunities for people with disabilities reflect a broader commitment to making sports more equitable and inclusive for all. In conclusion, sports occupy a central place in human society, encompassing a wide range of activities that entertain, inspire, and unite people around the world. From the ancient rituals of the past to the high-tech spectacles of the present, sports continue to evolve and adapt to the changing needs and aspirations of humanity. As we look to the future, sports will undoubtedly remain a source of joy, passion, and inspiration for generations to com. Sports have also become a significant driver of economic growth and development, contributing to job creation, infrastructure investment, and tourism revenue in many regions. Major sporting events such as the FIFA World Cup, the Olympic Games, and the Super Bowl attract millions of visitors and generate billions of dollars in economic activity, stimulating local economies and providing opportunities for businesses and entrepreneurs. Furthermore, sports have the power to transcend language and cultural barriers, serving as a universal language that brings people together across borders and continents. Whether through friendly competitions between neighboring communities or global tournaments that attract participants from around the world, sports foster connections and understanding among people of different backgrounds, fostering a sense of global citizenship and solidarity. On a personal level, sports can have profound impacts on individuals' lives, shaping character, instilling values, and providing opportunities for personal growth and fulfillment. Participation in sports teaches valuable lessons about teamwork, discipline, resilience, and sportsmanship, preparing individuals to face challenges and overcome adversity both on and off the field. For many young people, sports offer a pathway to education, employment, and social mobility, providing scholarships, training programs, and career opportunities in coaching, administration, and sports management. By investing in grassroots development programs and infrastructure initiatives, governments and organizations can harness the power of sports to promote social inclusion, youth empowerment, and community development. In conclusion, sports occupy a unique and multifaceted role in society, encompassing entertainment, physical fitness, social cohesion, cultural expression, economic development, and personal development. As we navigate an increasingly complex and interconnected world, the importance of sports as a unifying force and a source of inspiration and joy cannot be overstated. Whether as players, spectators, or advocates, people of all ages and backgrounds continue to embrace sports as an integral part of their lives, enriching communities and bringing people together in pursuit of common goals and shared dreams. Sports have also been instrumental in promoting diplomacy and fostering international relations. Through sports diplomacy, nations have used athletic competitions as a means of building bridges, resolving conflicts, and promoting peace. Events like the Ping Pong Diplomacy between the United States and China in the 1970s and the historic cricket matches between India and Pakistan have helped thaw diplomatic tensions and pave the way for dialogue and cooperation. Moreover, sports serve as a powerful tool for cultural exchange and mutual understanding, allowing people to share traditions, customs, and values across borders. International sports events bring together athletes and fans from diverse backgrounds, providing opportunities for cross-cultural interaction and dialogue that transcend political and ideological differences. In addition to promoting physical health and well-being, sports also have significant mental and emotional benefits. Participation in sports can boost self-esteem, reduce stress, and improve mental resilience, helping individuals develop coping strategies and skills to navigate life's challenges. Furthermore, the camaraderie and social support networks forged through sports can enhance mental health and contribute to overall happiness and well-being. Sports also play a critical role in education, teaching important life skills such as goal-setting, time management, and teamwork. School sports programs provide valuable opportunities for students to develop leadership skills, build character, and cultivate healthy habits that last a lifetime. Additionally, sports offer a platform for academic and personal achievement, motivating students to excel both on and off the field.Furthermore, sports have the power to inspire future generations and drive innovation in technology, design, and performance. Breakthroughs in sports",

                "Artificial Intelligence (AI) is a rapidly evolving field that encompasses a wide range of technologies and applications aimed at creating intelligent systems capable of performing tasks that typically require human intelligence. From its inception to its current state, AI has undergone significant advancements, driven by breakthroughs in algorithms, computing power, and data availability. This essay explores the history, current state, challenges, and future prospects of AI. The roots of AI can be traced back to ancient times, with myths and stories featuring artificial beings endowed with intelligence. However, the modern era of AI began in the mid-20th century with the development of the first neural networks and the birth of the field of computer science. In 1950, Alan Turing proposed the Turing Test as a measure of machine intelligence, sparking interest and debate about the possibility of creating machines that can think. The 1950s and 1960s saw early AI research focused on symbolic reasoning and problem-solving. Researchers developed programs capable of playing games like chess and checkers, as well as performing symbolic manipulation tasks. However, progress was slow due to limitations in computing power and the complexity of representing real-world knowledge in computer systems. The 1970s and 1980s brought a shift towards knowledge-based systems and expert systems, which attempted to encode human expertise in specific domains. Expert systems achieved some success in applications such as medical diagnosis and industrial automation but were limited by their reliance on explicit rules and the difficulty of acquiring and maintaining knowledge bases. The emergence of connectionism in the late 1980s and 1990s revitalized interest in neural networks and machine learning. Researchers developed algorithms capable of learning from data, leading to breakthroughs in pattern recognition, speech recognition, and natural language processing. The rise of the internet and the availability of vast amounts of data further fueled progress in AI, enabling the training of more powerful and complex models. The 21st century has witnessed unprecedented advancements in AI, driven by the convergence of big data, cloud computing, and deep learning. Deep learning, a subfield of machine learning inspired by the structure and function of the human brain, has revolutionized AI by enabling the training of neural networks with multiple layers of abstraction. Deep learning has led to breakthroughs in image recognition, language translation, and autonomous vehicles, among other applications. In recent years, AI has permeated nearly every aspect of society, transforming industries, economies, and daily life. AI-powered technologies are used in healthcare for diagnosing diseases, in finance for fraud detection and risk assessment, in transportation for route optimization, and in entertainment for content recommendation. AI has also raised concerns about job displacement, privacy, bias, and the ethical implications of autonomous systems. Despite its tremendous potential, AI still faces significant challenges and limitations. One major challenge is the lack of robustness and reliability in AI systems, which can be vulnerable to adversarial attacks, biases in training data, and unexpected inputs. Another challenge is the ethical and societal implications of AI, including issues of fairness, accountability, transparency, and the impact on employment and inequality. Addressing these challenges will require interdisciplinary collaboration and thoughtful regulation to ensure that AI technologies are developed and deployed responsibly. It will also require continued research into areas such as explainable AI, robust AI, and AI safety, as well as efforts to promote diversity and inclusion in the AI workforce. Looking ahead, the future of AI holds both promise and uncertainty. On the one hand, AI has the potential to solve some of the world's most pressing challenges, from climate change to healthcare. On the other hand, there are concerns about the concentration of power and wealth in the hands of a few tech giants, the erosion of privacy and autonomy, and the potential for AI to be used for malicious purposes. Ultimately, the trajectory of AI will depend on the choices we make as individuals, organizations, and societies. By harnessing the power of AI responsibly and ethically, we can unlock its full potential to improve lives and create a more equitable and sustainable future for all. However, doing so will require careful consideration of the risks and trade-offs involved, as well as a commitment to ensuring that AI benefits humanity as a whole. AI's trajectory hinges on advancements in several key areas. One crucial aspect is the development of explainable AI (XAI), which aims to make AI systems more transparent and interpretable. XAI seeks to bridge the gap between AI's black-box nature and human understanding, enabling users to trust and understand the decisions made by AI systems. By providing explanations for AI decisions, XAI can enhance accountability, facilitate regulatory compliance, and mitigate the potential negative consequences of AI failures. Additionally, ensuring the robustness and reliability of AI systems is paramount. Robust AI refers to systems that can operate effectively in diverse and dynamic environments, adapting to changes and uncertainties without compromising performance or safety. Achieving robust AI requires robust optimization techniques, robustness-aware training procedures, and rigorous testing and validation methods to identify and mitigate vulnerabilities and failure modes. AI safety is another critical area of research and development. AI safety aims to ensure that AI systems behave safely and predictably, even in unforeseen circumstances or adversarial environments. This includes designing AI systems with built-in safeguards, developing mechanisms for detecting and mitigating emergent behaviors, and establishing protocols for handling unexpected outcomes or errors. Ethical considerations are also central to the future of AI. As AI becomes increasingly integrated into society, it is essential to address ethical issues such as fairness, bias, privacy, and accountability. Fairness-aware algorithms, privacy-preserving techniques, and ethical guidelines and frameworks can help mitigate these concerns and ensure that AI benefits everyone equitably. Furthermore, interdisciplinary collaboration is crucial for advancing AI responsibly. AI development requires expertise from diverse fields, including computer science, mathematics, psychology, philosophy, ethics, law, and social science. By fostering collaboration and dialogue across disciplines, we can harness the collective wisdom and perspectives needed to address the complex challenges and opportunities posed by AI. In conclusion, the future of AI holds tremendous promise, but it also presents significant challenges and uncertainties. By prioritizing transparency, robustness, safety, ethics, and interdisciplinary collaboration, we can navigate the complexities of AI development and deployment responsibly. Ultimately, the goal is to harness the transformative potential of AI to create a better future for humanity, one that is equitable, inclusive, and sustainable. In addition to the technical and ethical considerations, the future of AI will also be shaped by its integration with other emerging technologies. One such area is the Internet of Things (IoT), which refers to the network of interconnected devices and sensors capable of collecting and exchanging data. By combining AI with IoT, we can create intelligent systems that can analyze vast amounts of sensor data in real-time, enabling applications such as smart cities, industrial automation, and personalized healthcare. Another key technology is robotics, which involves the development of intelligent machines capable of performing tasks autonomously. AI-powered robots have the potential to revolutionize industries such as manufacturing, logistics, and healthcare by increasing efficiency, productivity, and safety. Collaborative robots, or cobots, are designed to work alongside humans, augmenting human capabilities and improving workplace safety and ergonomics. Blockchain technology is also poised to impact the future of AI by providing secure and transparent data sharing and storage mechanisms. Blockchain can enhance the trustworthiness and integrity of AI systems by enabling decentralized data marketplaces, verifiable AI models, and tamper-resistant audit trails. By leveraging blockchain, we can address concerns related to data privacy, ownership, and authenticity in AI applications. Quantum computing represents another frontier for AI research and development. Quantum computers have the potential to exponentially increase computing power and enable breakthroughs in AI algorithms, optimization problems, and simulation tasks. Quantum AI promises to unlock new capabilities in areas such as drug discovery, materials science, and cryptography, revolutionizing industries and scientific research. The convergence of AI with biotechnology is also opening up new possibilities for healthcare, agriculture, and environmental conservation. AI-driven biotech innovations, such as precision medicine, gene editing, and synthetic biology, have the potential to transform healthcare delivery, personalized medicine, and disease prevention. AI can analyze genomic data to identify genetic risk factors, optimize drug discovery pipelines, and accelerate the development of novel therapies. Furthermore, advances in AI are driving progress in autonomous vehicles and transportation systems. Self-driving cars, drones, and intelligent transportation networks have the potential to improve road safety, reduce traffic congestion, and lower carbon emissions. AI-powered mobility services, such as ride-sharing and on-demand transit, are reshaping urban transportation landscapes and improving access to mobility for underserved",

                "Computers have become an integral part of modern society, revolutionizing the way we work, communicate, and live. From their humble beginnings as room-sized machines with limited capabilities to the sleek, powerful devices we carry in our pockets today, computers have undergone a remarkable evolution, shaping the world in profound ways. One of the most significant contributions of computers is their ability to process vast amounts of information at incredible speeds. This capability has transformed industries ranging from finance to healthcare, allowing organizations to analyze data more efficiently and make informed decisions. For example, in finance, high-frequency trading algorithms use computers to execute trades in milliseconds, capitalizing on small fluctuations in the market to generate profits. Similarly, in healthcare, computer-aided diagnosis systems assist doctors in interpreting medical images and identifying potential health issues. The advent of the internet has further expanded the reach and impact of computers, connecting people from all corners of the globe and facilitating the exchange of information on an unprecedented scale. Social media platforms, online marketplaces, and streaming services are just a few examples of how the internet has transformed communication, commerce, and entertainment. Moreover, the rise of cloud computing has enabled individuals and businesses to access computing resources and storage capacity on demand, reducing the need for costly infrastructure and allowing for greater flexibility and scalability. In addition to their practical applications, computers have also revolutionized creative pursuits such as art, music, and design. Digital art software allows artists to experiment with new techniques and mediums, while music production software empowers musicians to compose, record, and edit music with ease. Furthermore, computer-aided design (CAD) software has revolutionized architecture, engineering, and manufacturing, streamlining the design process and enabling the creation of complex structures and products with precision. However, the widespread adoption of computers has also raised concerns about privacy, security, and the ethical implications of artificial intelligence. The collection and analysis of vast amounts of personal data by corporations and governments have raised questions about individual privacy rights and the potential for abuse. Moreover, the increasing reliance on interconnected systems and the internet of things (IoT) has heightened concerns about cybersecurity, with cyberattacks becoming more sophisticated and pervasive. Furthermore, the rise of artificial intelligence (AI) and machine learning has sparked debates about the ethical implications of autonomous systems and their potential impact on society. Issues such as algorithmic bias, job displacement, and the concentration of power in the hands of a few tech giants have led to calls for greater transparency, accountability, and regulation in the development and deployment of AI systems. Despite these challenges, the future of computing holds immense promise, with emerging technologies such as quantum computing, augmented reality, and blockchain poised to further revolutionize the way we interact with technology. Quantum computing, in particular, has the potential to solve complex problems that are currently intractable for classical computers, such as simulating molecular structures for drug discovery or optimizing supply chain logistics. In conclusion, computers have transformed nearly every aspect of our lives, from how we work and communicate to how we create and interact with the world around us. While the widespread adoption of computers has brought about unprecedented opportunities for innovation and progress, it has also raised important questions about privacy, security, and ethics that must be addressed as we continue to harness the power of technology to shape the future. Computers have become an integral part of modern society, revolutionizing the way we work, communicate, and live. From their humble beginnings as room-sized machines with limited capabilities to the sleek, powerful devices we carry in our pockets today, computers have undergone a remarkable evolution, shaping the world in profound ways. One of the most significant contributions of computers is their ability to process vast amounts of information at incredible speeds. This capability has transformed industries ranging from finance to healthcare, allowing organizations to analyze data more efficiently and make informed decisions. For example, in finance, high-frequency trading algorithms use computers to execute trades in milliseconds, capitalizing on small fluctuations in the market to generate profits. Similarly, in healthcare, computer-aided diagnosis systems assist doctors in interpreting medical images and identifying potential health issues. The advent of the internet has further expanded the reach and impact of computers, connecting people from all corners of the globe and facilitating the exchange of information on an unprecedented scale. Social media platforms, online marketplaces, and streaming services are just a few examples of how the internet has transformed communication, commerce, and entertainment. Moreover, the rise of cloud computing has enabled individuals and businesses to access computing resources and storage capacity on demand, reducing the need for costly infrastructure and allowing for greater flexibility and scalability. In addition to their practical applications, computers have also revolutionized creative pursuits such as art, music, and design. Digital art software allows artists to experiment with new techniques and mediums, while music production software empowers musicians to compose, record, and edit music with ease. Furthermore, computer-aided design (CAD) software has revolutionized architecture, engineering, and manufacturing, streamlining the design process and enabling the creation of complex structures and products with precision. However, the widespread adoption of computers has also raised concerns about privacy, security, and the ethical implications of artificial intelligence. The collection and analysis of vast amounts of personal data by corporations and governments have raised questions about individual privacy rights and the potential for abuse. Moreover, the increasing reliance on interconnected systems and the internet of things (IoT) has heightened concerns about cybersecurity, with cyberattacks becoming more sophisticated and pervasive. Furthermore, the rise of artificial intelligence (AI) and machine learning has sparked debates about the ethical implications of autonomous systems and their potential impact on society. Issues such as algorithmic bias, job displacement, and the concentration of power in the hands of a few tech giants have led to calls for greater transparency, accountability, and regulation in the development and deployment of AI systems. Despite these challenges, the future of computing holds immense promise, with emerging technologies such as quantum computing, augmented reality, and blockchain poised to further revolutionize the way we interact with technology. Quantum computing, in particular, has the potential to solve complex problems that are currently intractable for classical computers, such as simulating molecular structures for drug discovery or optimizing supply chain logistics. In conclusion, computers have transformed nearly every aspect of our lives, from how we work and communicate to how we create and interact with the world around us. While the widespread adoption of computers has brought about unprecedented opportunities for innovation and progress, it has also raised important questions about privacy, security, and ethics that must be addressed as we continue to harness the power of technology to shape the future. Computers have revolutionized the way businesses operate, streamlining processes, improving efficiency, and opening up new opportunities for growth. Small businesses can now compete on a global scale, thanks to the internet and cloud-based services that provide access to tools and resources once reserved for large corporations. E-commerce platforms have democratized retail, allowing entrepreneurs to reach customers worldwide without the need for a physical storefront. Moreover, computers have transformed education, providing students and teachers with access to a wealth of information and resources. Online learning platforms offer courses on virtually any topic imaginable, making education more accessible and flexible than ever before. Additionally, interactive educational software engages students in immersive learning experiences, catering to different learning styles and abilities. The entertainment industry has also been transformed by computers, with digital streaming services revolutionizing how we consume media. From music and movies to video games and virtual reality experiences, computers have enabled a new era of entertainment that is personalized, immersive, and interactive. Furthermore, social media platforms have reshaped how we connect with others, fostering communities based on shared interests and experiences.In healthcare, computers play a crucial role in research, diagnosis, and treatment. Medical imaging technologies such as MRI and CT scans rely on computer algorithms to generate detailed images of the body, aiding in the detection and diagnosis of diseases. Electronic health records (EHRs) have digitized patient information, improving coordination of care and reducing medical errors. Additionally, wearable devices and health monitoring apps empower individuals to take control of their health and well-being.However, the widespread integration of computers into nearly every aspect of our lives has also raised concerns about digital dependence and its impact on mental health and well-being. The constant connectivity afforded by smartphones and other devices has blurred",

                "The role of youth in nation-building is of paramount importance in shaping the destiny of a country. Youth, defined as individuals in the age range of 15 to 24 years, represent not only the future but also the present of a nation. Their energy, creativity, idealism, and passion are vital assets that can be harnessed to drive progress, innovation, and positive change in society. This essay will delve into the multifaceted role of youth in nation-building, exploring their contributions in various spheres such as economic development, social cohesion, political participation, and cultural preservation.Economically, youth play a crucial role as both producers and consumers. As producers, they constitute a significant portion of the workforce, bringing fresh ideas, technological savvy, and adaptability to the table. Their entrepreneurship and innovation drive economic growth by creating new industries, businesses, and job opportunities. Moreover, youth-led startups and initiatives often focus on solving pressing societal problems, thereby contributing to sustainable development and poverty alleviation. By embracing digital technologies and embracing global markets, young entrepreneurs can catalyze economic transformation and enhance competitiveness on the global stage.Furthermore, as consumers, youth influence market trends and consumer preferences, shaping industries ranging from fashion and entertainment to technology and healthcare. Their purchasing power drives demand for goods and services, influencing businesses to adapt and innovate to meet their needs. Moreover, youth represent a demographic with distinct consumption patterns, preferences, and values, thereby influencing the development of new products, brands, and marketing strategies. Harnessing the purchasing power of youth can thus fuel economic growth and market expansion, creating a virtuous cycle of prosperity.Socially, youth are the agents of change and progress. With their idealism, passion, and commitment to social justice, young people are often at the forefront of movements advocating for human rights, equality, and justice. From civil rights movements to environmental activism, youth-led initiatives have historically played a pivotal role in driving social change and challenging entrenched power structures. Their willingness to question norms, challenge authority, and push boundaries can catalyze social transformation and foster a more inclusive and equitable society.Moreover, youth engagement in community service, volunteerism, and philanthropy fosters social cohesion and solidarity. By actively participating in grassroots initiatives, youth forge bonds of empathy, compassion, and solidarity with marginalized communities, contributing to social cohesion and resilience. Through initiatives such as community clean-up drives, youth-led workshops, and educational programs, young people not only address local challenges but also foster a sense of belonging and collective responsibility. By nurturing a culture of civic engagement and social responsibility, youth contribute to the building of resilient and cohesive communities.Politically, youth represent the future of democracy and governance. With their idealism, energy, and passion for social change, young people have the potential to revitalize democratic institutions and processes. Youth participation in electoral politics, advocacy campaigns, and grassroots organizing can amplify their voices and influence decision-making at local, national, and international levels. By mobilizing peers, leveraging social media, and organizing protests and demonstrations, young people have the power to hold governments and leaders accountable, advocate for policy reforms, and shape the political agenda.Furthermore, youth engagement in governance and policymaking ensures that their perspectives, priorities, and concerns are taken into account in the formulation and implementation of policies. By representing diverse constituencies and bringing fresh perspectives to the table, young policymakers can drive innovation, foster accountability, and promote inclusive decision-making processes. Moreover, youth involvement in political parties, civil society organizations, and youth-led movements strengthens democratic institutions and promotes a culture of civic participation and empowerment.Culturally, youth are the custodians of tradition and agents of cultural innovation. With their dynamic blend of tradition and modernity, young people bridge the past and the future, preserving cultural heritage while embracing new forms of expression and creativity. Through art, music, literature, and other cultural expressions, youth contribute to the richness and diversity of cultural landscapes, fostering intercultural dialogue, understanding, and appreciation. Moreover, youth-led cultural initiatives promote cultural exchange, collaboration, and cooperation across borders, transcending differences and building bridges of understanding and solidarity.Economically, youth serve as a dynamic force for innovation and entrepreneurship, driving economic growth and prosperity. With their fresh perspectives and digital fluency, young entrepreneurs are at the forefront of technological advancements, creating disruptive solutions and pioneering new industries. Startups founded by youth often focus on addressing pressing societal challenges, such as environmental sustainability, healthcare access, and social inequality. By fostering an ecosystem that supports youth entrepreneurship through access to finance, mentorship, and training programs, nations can unlock the full potential of young innovators to drive economic diversification and job creation.Moreover, youth employment is critical for ensuring inclusive growth and reducing poverty rates. However, youth unemployment remains a significant challenge in many countries, particularly in regions with high youth populations. Addressing this issue requires concerted efforts to enhance education and skills training, promote youth-friendly labor policies, and create opportunities for meaningful employment. By investing in quality education, vocational training, and apprenticeship programs, governments can equip young people with the skills and competencies needed to succeed in the labor market and contribute to economic development.Socially, youth are catalysts for social cohesion and community resilience. Through their active participation in civic and community activities, young people foster a sense of belonging and solidarity, strengthening social bonds and building resilient communities. Youth-led initiatives in areas such as education, healthcare, and environmental conservation not only address local needs but also promote social inclusion and empowerment. By engaging youth as partners in community development and decision-making processes, societies can harness their energy and creativity to tackle complex social challenges and build a more equitable and cohesive society.Furthermore, youth are instrumental in driving cultural innovation and preserving cultural heritage. With their embrace of diversity and openness to new ideas, young people enrich cultural landscapes and promote intercultural dialogue and understanding. Youth-led cultural initiatives, such as festivals, exhibitions, and artistic collaborations, celebrate cultural diversity and promote cultural exchange and cooperation. By empowering youth to express their cultural identity and creativity, nations can foster a sense of pride and belonging among young people and preserve cultural heritage for future generations.Politically, youth represent a potent force for democratic renewal and social change. With their idealism and commitment to justice and equality, young people are at the forefront of movements advocating for political reform, human rights, and social justice. Through grassroots organizing, advocacy campaigns, and electoral participation, youth mobilize their peers and amplify their voices to demand accountability and transparency from governments and institutions. By engaging youth in political processes and decision-making, nations can harness their energy and enthusiasm to revitalize democratic institutions and promote good governance.Moreover, youth participation in peacebuilding and conflict resolution is crucial for building sustainable peace and stability in conflict-affected regions. As victims and survivors of conflict, young people have unique insights and perspectives on the root causes of violence and the pathways to peace. By empowering youth as agents of peace and reconciliation, societies can tap into their resilience and creativity to promote dialogue, bridge divides, and prevent the recurrence of conflict. Investing in youth-led peacebuilding initiatives, education, and leadership development can help build a more peaceful and inclusive society.Economically, youth are not only job seekers but also job creators. With their innovative ideas and entrepreneurial spirit, young people are driving economic growth and innovation in various sectors. Startups founded by youth contribute to job creation, technological advancement, and market disruption. By fostering an ecosystem that supports youth entrepreneurship through access to finance, mentorship, and supportive policies, nations can unleash the potential of young innovators to drive economic development. Moreover, youth are key contributors to the digital economy. Growing up in the age of technology, young people are adept at leveraging digital tools and platforms for business, education, and social interaction. Their digital skills and fluency make them valuable assets in industries such as information technology, digital marketing, and e-commerce. By investing in digital literacy programs and infrastructure, governments can empower youth to harness the opportunities offered by the digital economy and bridge the digital divide. Socially, youth are agents of social change and community development. Through",

                "the heart of bustling Neo-Tokyo, amidst the neon-drenched skyscrapers and the ceaseless hum of holographic advertisements, lived Hana Mori, a young woman with eyes that held the quiet defiance of a storm brewing beneath the surface. Orphaned at a young age and raised in the labyrinthine underbelly of the city, she knew hardship intimately. Her days were a constant battle for survival, scavenging discarded tech from overflowing waste dumps and bartering for scraps with hardened street vendors. Yet, amidst the grime and the despair, Hana clung to a spark – a passion for music that burned brighter than the neon lights above. The source of this passion was a battered, forgotten music box she found hidden within a rusty bin. Its faded melody, a melancholic yet strangely hopeful tune, resonated deep within Hana's soul. Obsessed, she spent countless nights tinkering, scouring abandoned workshops for spare parts, her nimble fingers coaxing life back into the ailing contraption. With each repaired gear and tightened spring, the music box's melody grew richer, more vibrant, mimicking the burgeoning symphony within Hana herself. But Neo-Tokyo had little time for dreams. The city thrived on efficiency, its music a cacophony of automated traffic alerts and the monotonous hum of corporate propaganda. The elite, ensconced in their sky-high apartments, had no interest in the melancholic tunes of a street urchin. Yet, Hana refused to be silenced. Every night, she would climb to the abandoned rooftop of her makeshift home, the cityscape sprawling beneath her like a glittering tapestry. Under the vast expanse of the Tokyo night sky, with the city's symphony serving as a strange counterpoint, Hana poured her heart into the music box. One such night, as the melody rose into the air, a figure emerged from the shadows – Ren Sato, a renowned music producer, his ears catching the hauntingly beautiful tune that defied the city's rigid rhythm. Intrigued, he ascended the dilapidated fire escape, drawn by the raw emotion emanating from the rooftop. There he found Hana, her back to him, her fingers dancing across the weathered music box. As the final note faded, Ren stood mesmerized – not by the ornate box itself, but by the powerful emotions woven into its simple melody. Hana turned, startled, fear flickering in her eyes. But Ren, his face etched with genuine awe, saw not a hardened street kid but a budding artist with a voice that resonated on a deeply human level. He saw a talent that could shake the very foundations of the city's rigid musical landscape. An unlikely partnership was born that night. Ren, disillusioned with the manufactured pop that dominated the industry, saw in Hana's music a chance to create something real, something that spoke to the hidden struggles and aspirations of the city's underbelly. The road to success wasn't easy. Hana's lack of formal training and her unconventional style clashed with the industry's expectations. But Ren, his faith unwavering, became her mentor, guiding her raw talent into a powerful artistic force. Hana poured her experiences onto the music, her lyrics a tapestry of city life, the grit and the grime, the dreams and the despair. Her songs, imbued with the melancholic melody of the music box, resonated with a generation yearning for a voice that spoke their truth. Hana Mori, the once-invisible girl from the undercity, became a cultural phenomenon. Her music, stripped of artifice, resonated across the city, weaving a new melody into the relentless cacophony of Neo-Tokyo. It was a melody of hope, a testament to the power of dreams that bloom even in the darkest corners. Hana's journey became an inspiration to countless others, a beacon guiding them to believe that even amidst the harsh realities of the city, there was room for beauty, for defiance, and for the quiet, hopeful symphony of the human spirit. Years flowed like the neon lights reflecting off the rain-slick streets of Neo-Tokyo. Hana Mori, no longer the wide-eyed street urchin, had become an icon. Her rise to fame hadn't erased the city's harsh realities, the underbelly still thrummed with poverty and despair. Yet, Hana, ever the voice of the voiceless, used her platform to advocate for change. Her concerts, once held in dingy underground clubs, transformed into massive charity events, raising funds for education programs and community centers in the city's forgotten corners. However, fame brought its own set of challenges. The relentless media scrutiny chipped away at Hana's privacy, twisting her past struggles into sensationalized narratives. The music industry, initially captivated by her raw talent, began pressuring her to conform, to dilute her message for mass appeal. Collaborations with other artists became a battlefield, a constant tug-of-war between artistic integrity and commercial success. Disillusionment gnawed at Hana. The music that was once a pure expression of her soul began to feel manufactured, the hopeful melody of the music box fading amidst the cacophony of industry demands. Doubts crept in, the fear of becoming a cog in the very machine she once sought to dismantle. It was during this period of creative stagnation that Hana rediscovered her roots. One rainy night, she found herself drawn back to the abandoned rooftop where it all began. The city sprawled beneath her, a shimmering labyrinth of indifference. Yet, amidst the neon glow, she saw flickers of life – a lone violinist practicing on a fire escape, a group of teenagers huddled around a crackling boombox, their faces illuminated by the music. It was a reminder that her music, even in its rawest form, had touched lives, ignited a spark of defiance in the hearts of the city's forgotten. The encounter reignited a fire within Hana. She retreated from the spotlight, taking a sabbatical from the relentless demands of the industry. She returned to the streets, not as a celebrity, but as an observer, immersing herself in the city's undercurrents. She spent time with the underprivileged youth, their struggles mirroring her own. The music box, long relegated to a dusty corner of her apartment, became her constant companion once more. Its simple melody, a reminder of her journey, served as a wellspring of inspiration. When Hana finally emerged from her self-imposed exile, she did so not with a carefully crafted comeback album, but with a revolutionary project – a music school for the underprivileged youth of Neo-Tokyo. The school, housed in a renovated rooftop space overlooking the city, became a haven for budding artists. Here, amidst the backdrop of the city's relentless symphony, a new melody began to take shape. It wasn't just about music; it was about empowering the next generation to find their voice, to use art as a tool for social change. Hana Mori, the once-invisible girl, had become a beacon, not just for artistic expression, but for social justice. Her story transcended the confines of Neo-Tokyo, inspiring countless others to fight for their dreams, to never let the city's relentless rhythm drown out the quiet symphony of their own souls. The melody of the music box, a testament to hope and resilience, continued to echo through the city's labyrinthine streets, a reminder that even in the heart of a cold, unforgiving metropolis, the human spirit could still find its song. Decades danced by, the neon glow of Neo-Tokyo fading into a warm nostalgia for Hana Mori's generation. The city itself had transformed. Hana's music school, once a beacon in a forgotten corner, had blossomed into a prestigious arts academy, nurturing generations of artists who dared to challenge the status quo. Hana herself, her hair streaked with silver, remained a guiding force, her eyes still holding the spark of youthful defiance. Yet, the city's underbelly persisted, a constant reminder of the struggles that birthed her music. Poverty and inequality remained a stubborn stain, new challenges emerging from the ever-evolving technological landscape. Virtual reality pods threatened to become the new opiate of the masses, further isolating individuals within simulated realities. Corporations, wielding ever-increasing control over information, sought to manipulate public perception with disconcerting ease. The fight, Hana realized, was far from over. The music industry, once her adversary, now embraced her as a legend. But relevance, she knew, couldn't be earned through nostalgia. She needed to find a new voice, a new melody to address the anxieties of a generation raised on digital dreams. The answer, she discovered, lay not in the glittering cityscape, but in the quiet solace of nature. A forgotten community garden, tucked away amidst the towering skyscrapers, became her sanctuary. Here, amidst the fragrant blooms and verdant patches of vegetables, she reconnected with the organic rhythm of life, a stark contrast to the city's relentless artificial pulse. Inspired by the gentle hum of bees and the rustling of leaves in the wind, Hana began composing a new symphony. It was a fusion of her old and new, the melancholic melody of the music box intertwined with electronic beats that mirrored the city's digital heartbeat. The lyrics spoke of a yearning for connection, a plea to break free from the virtual shackles and reconnect with the tangible world. Her comeback all the grime, the dreams and the despair. Her songs, imbued with the melancholic melody of the music box, resonated with a generation yearning for a voice that spoke their truth. Hana Mori, the once-invisible girl from the undercity, became a cultural phenomenon. Her music, stripped of artifice, resonated across the city, weaving a new melody into the relentless cacophony of Neo-Tokyo. It was a melody of hope, a testament to the power of dreams that bloom even in the darkest corners. Hana's journey became an inspiration to countless others, a beacon guiding them to believe that even amidst the harsh realities of the city, there was room for beauty, for defiance, and for the quiet,",

                "vast expanse of the digital frontier, the future of technology unfolds with the promise of boundless innovation and transformative change. As we stand on the precipice of a new era defined by exponential growth and unprecedented connectivity, the landscape of tomorrow is poised to be shaped by emerging technologies that will redefine the very fabric of our existence. From the proliferation of artificial intelligence and machine learning to the advent of quantum computing and blockchain technology, the possibilities are as vast as they are awe-inspiring. Artificial intelligence, once the realm of science fiction, has emerged as a powerful force driving progress across a myriad of industries. With algorithms that can learn and adapt, AI systems are revolutionizing everything from healthcare and finance to transportation and entertainment. As these technologies continue to mature, we can expect to see increasingly sophisticated applications that augment human capabilities and unlock new realms of possibility. Similarly, the dawn of quantum computing heralds a paradigm shift in the way we process information and solve complex problems. By harnessing the unique properties of quantum mechanics, quantum computers have the potential to perform calculations at speeds that far surpass those of classical computers. From simulating molecular structures to optimizing supply chains, the impact of quantum computing on society promises to be profound, ushering in a new era of discovery and innovation. Meanwhile, blockchain technology is revolutionizing the way we think about trust and transparency in the digital age. By enabling decentralized, tamper-proof record-keeping, blockchain has the power to reshape industries ranging from finance and logistics to healthcare and voting systems. As blockchain networks continue to mature and scale, we can expect to see an explosion of new applications that leverage the power of distributed ledger technology to create more equitable and efficient systems. However, with these unprecedented advancements come complex ethical and societal implications that must be carefully navigated. As technology becomes increasingly intertwined with every aspect of our lives, questions of privacy, security, and algorithmic bias loom large. It is imperative that we approach the development and deployment of these technologies with a keen awareness of their potential risks and pitfalls, striving always to mitigate harm and promote the greater good. In the grand tapestry of human progress, the future of technology is a thread woven with the aspirations and ingenuity of countless individuals striving to push the boundaries of what is possible. As we journey forward into this brave new world, let us embrace the opportunities that lie before us with humility and foresight, mindful always of the profound impact that our actions today will have on the world of tomorrow. For in the crucible of innovation, we have the power to shape a future that is not only technologically advanced, but also equitable, inclusive, and just. At the heart of this technological renaissance lies the inexorable march of artificial intelligence (AI) and machine learning (ML), poised to transform every aspect of our lives in ways both profound and pervasive. From autonomous vehicles navigating city streets to smart assistants managing our daily routines, AI systems are becoming increasingly integrated into the fabric of society, augmenting human capabilities and revolutionizing industries with unprecedented efficiency and insight. Yet, as we marvel at the wonders of AI and ML, we must also grapple with the ethical and societal implications of their proliferation. Questions of algorithmic bias, data privacy, and the displacement of human labor loom large, challenging us to navigate the complex terrain of technological advancement with wisdom and foresight. It is incumbent upon us to ensure that these powerful tools are wielded responsibly, with a steadfast commitment to equity, transparency, and social good. Meanwhile, the convergence of vast expanse of the digital frontier, the future of technology unfolds with the promise of boundless innovation and transformative change. As we stand on the precipice of a new era defined by exponential growth and unprecedented connectivity, the landscape of tomorrow is poised to be shaped by emerging technologies that will redefine the very fabric of our existence. From the proliferation of artificial intelligence and machine learning to the advent of quantum computing and blockchain technology, the possibilities are as vast as they are awe-inspiring. Artificial intelligence, once the realm of science fiction, has emerged as a powerful force driving progress across a myriad of industries. With algorithms that can learn and adapt, AI systems are revolutionizing everything from healthcare and finance to transportation and entertainment. As these technologies continue to mature, we can expect to see increasingly sophisticated applications that augment human capabilities and unlock new realms of possibility. Similarly, the dawn of quantum computing heralds a paradigm shift in the way we process information and solve complex problems. By harnessing the unique properties of quantum mechanics, quantum computers have the potential to perform calculations at speeds that far surpass those of classical computers. From simulating molecular structures to optimizing supply chains, the impact of quantum computing on society promises to be profound, ushering in a new era of discovery and innovation. Meanwhile, blockchain technology is revolutionizing the way we think about trust and transparency in the digital age. By enabling decentralized, tamper-proof record-keeping, blockchain has the power to reshape industries ranging from finance and logistics to healthcare and voting systems. As blockchain networks continue to mature and scale, we can expect to see an explosion of new applications that leverage the power of distributed ledger technology to create more equitable and efficient systems. However, with vast expanse of the digital frontier, the future of technology unfolds with the promise of boundless innovation and transformative change. As we stand on the precipice of a new era defined by exponential growth and unprecedented connectivity, the landscape of tomorrow is poised to be shaped by emerging technologies that will redefine the very fabric of our existence. From the proliferation of artificial intelligence and machine learning to the advent of quantum computing and blockchain technology, the possibilities are as vast as they are awe-inspiring. Artificial intelligence, once the realm of science fiction, has emerged as a powerful force driving progress across a myriad of industries. With algorithms that can learn and adapt, AI systems are revolutionizing everything from healthcare and finance to transportation and entertainment. As these technologies continue to mature, we can expect to see increasingly sophisticated applications that augment human capabilities and unlock new realms of possibility. Similarly, the dawn of quantum computing heralds a paradigm shift in the way we process information and solve complex problems. By harnessing the unique properties of quantum mechanics, quantum computers have the potential to perform calculations at speeds that far surpass those of classical computers. From simulating molecular structures to optimizing supply chains, the impact of quantum computing on society promises to be profound, ushering in a new era of discovery and innovation. Meanwhile, blockchain technology is revolutionizing the way we think about trust and transparency in the digital age. By enabling decentralized, tamper-proof record-keeping, blockchain has the power to reshape industries ranging from finance and logistics to healthcare and voting systems. As blockchain networks continue to mature and scale, we can expect to see an explosion of new applications that leverage the power of distributed ledger technology to create more equitable and efficient systems. However, with these unprecedented advancements come complex ethical and societal implications that must be carefully navigated. As technology becomes increasingly intertwined with every aspect of our lives, questions of privacy, security, and algorithmic bias loom large. It is imperative that we approach the development and deployment of these technologies with a keen awareness of their potential risks and pitfalls, striving always to mitigate harm and promote the greater good. In the grand tapestry of human progress, the future of technology is a thread woven with the aspirations and ingenuity of countless individuals striving to push the boundaries of what is possible. As we journey forward into this brave new world, let us embrace the opportunities that lie before us with humility and foresight, mindful always of the profound impact that our actions today will have on the world of tomorrow. For in the crucible of innovation, we have the power to shape a future that is not only technologically advanced, but also equitable, inclusive, and just. At the heart of this technological renaissance lies the inexorable march of artificial intelligence (AI) and machine learning (ML), poised to transform every aspect of our lives in ways both profound and pervasive. From autonomous vehicles navigating city streets to smart assistants managing our daily routines, AI systems are becoming increasingly integrated into the fabric of society, augmenting human capabilities and revolutionizing industries with unprecedented efficiency and insight. Yet, as we marvel at the wonders of AI and ML, we must also grapple with the ethical and societal implications of their proliferation. Questions of algorithmic bias, data privacy, and the displacement of human labor loom large, challenging us to navigate the complex terrain of technological advancement with wisdom and foresight. It is incumbent upon us to ensure that these powerful tools are wielded responsibly, with a steadfast commitment to equity, transparency, and social good.",

                "heart of a bustling city, amidst the cacophony of urban life, there dwelled a young woman named Maya, whose journey through the labyrinth of existence was a testament to the indomitable spirit of the human soul. Born into the harsh embrace of poverty in a neglected corner of the metropolis, Maya's childhood was a tapestry woven with threads of struggle and adversity, yet amid the shadows of deprivation, there flickered a flame of resilience that refused to be extinguished. From the tender embrace of her hardworking parents, Maya imbibed the timeless wisdom of perseverance, learning that the fiercest storms could be weathered with unwavering determination and an unyielding resolve to carve a path toward the light. It was within the faded confines of a forgotten library that Maya's destiny intertwined with the pages of a weathered tome, the autobiography of a towering figure whose life story echoed with the strains of triumph over tribulation. Inspired by the tales of resilience and fortitude contained ithin its well-worn pages, Maya made a solemn vow to herself—a pledge to defy the gravitational pull of circumstance and ascend to the lofty heights of her dreams. Thus, armed with little more than a heart pulsating with hope and a mind ablaze with possibility, Maya embarked upon a quest that would forever alter the course of her existence. In the labyrinthine corridors of academia, Maya found sanctuary and solace, her thirst for knowledge propelling her toward the hallowed halls of higher learning. Despite the formidable barriers erected by poverty and privation, Maya refused to relinquish her dreams, toiling tirelessly beneath the weight of adversity to secure a scholarship that would serve as the keystone to her aspirations. With each lecture attended and each assignment conquered, Maya's resolve only grew stronger, her spirit undimmed by the shadows that sought to obscure her path. Yet Maya's journey was not one traversed in solitude, for she was buoyed by the unwavering support of kindred spirits who believed in her vision with a fervor that mirrored her own. Together, they forged a fellowship bound by a shared commitment to effecting change, their collective efforts coalescing into a force for good that reverberated throughout the corridors of time. With each act of kindness and each gesture of generosity, Maya and her companions illuminated the darkness that cloaked their world, casting aside the shadows of despair and igniting the flames of hope in the hearts of those who had long languished in obscurity. It was amidst the crucible of adversity that Maya's true calling revealed itself, beckoning her toward a destiny intertwined with the welfare of others. In the crucible of her soul, Maya forged a resolve as unyielding as tempered steel, vowing to dedicate her life to the service of those in need. With the fervor of a missionary and the tenacity of a warrior, Maya embarked upon a noble crusade to uplift the downtrodden and empower the disenfranchised, her footsteps echoing through the annals of history as a testament to the enduring power of the human spirit. And so, as the sun sets on the horizon of Maya's odyssey, casting its golden rays upon a world forever altered by her presence, we are reminded of the boundless potential that resides within each and every one of us. For Maya's story is not merely a chronicle of one woman's triumph over adversity; it is a clarion call to arms—a rallying cry for all who dare to dream and strive for greatness in a world fraught with uncertainty. In the tapestry of Maya's life, we find the threads of our own destinies woven, beckoning us toward a future illuminated by the radiant light of hope and possibility. In the labyrinth of life, Maya's tale unfolds as a symphony of resilience, echoing across the expanse of time with the resonance of a thousand triumphs. Born into the crucible of poverty, Maya's childhood was a crucible where adversity forged the steel of her spirit. Yet, amidst the shadows of deprivation, Maya found solace in the embrace of her hardworking parents heart of a bustling city, amidst the cacophony of urban life, there dwelled a young woman named Maya, whose journey through the labyrinth of existence was a testament to the indomitable spirit of the human soul. Born into the harsh embrace of poverty in a neglected corner of the metropolis, Maya's childhood was a tapestry woven with threads of struggle and adversity, yet amid the shadows of deprivation, there flickered a flame of resilience that refused to be extinguished. From the tender embrace of her hardworking parents, Maya imbibed the timeless wisdom of perseverance, learning that the fiercest storms could be weathered with unwavering determination and an unyielding resolve to carve a path toward the light. It was within the faded confines of a forgotten library that Maya's destiny intertwined with the pages of a weathered tome, the autobiography of a towering figure whose life story echoed with the strains of triumph over tribulation. Inspired by the tales of resilience and fortitude contained ithin its well-worn pages, Maya made a solemn vow to herself—a pledge to defy the gravitational pull of circumstance and ascend to the lofty heights of her dreams. Thus, armed with little more than a heart pulsating with hope and a mind ablaze with possibility, Maya embarked upon a quest that would forever alter the course of her existence. In the labyrinthine corridors of academia, Maya found sanctuary and solace, her thirst for knowledge propelling her toward the hallowed halls of higher learning. Despite the formidable barriers erected by poverty and privation, Maya refused to relinquish her dreams, toiling tirelessly beneath the weight of adversity to secure a scholarship that would serve as the keystone to her aspirations. With each lecture attended and each assignment conquered, Maya's resolve only grew stronger, her spirit undimmed by the shadows that sought to obscure her path. Yet Maya's journey was not one traversed in solitude, for she was buoyed by the unwavering support of kindred heart of a bustling city, amidst the cacophony of urban life, there dwelled a young woman named Maya, whose journey through the labyrinth of existence was a testament to the indomitable spirit of the human soul. Born into the harsh embrace of poverty in a neglected corner of the metropolis, Maya's childhood was a tapestry woven with threads of struggle and adversity, yet amid the shadows of deprivation, there flickered a flame of resilience that refused to be extinguished. From the tender embrace of her hardworking parents, Maya imbibed the timeless wisdom of perseverance, learning that the fiercest storms could be weathered with unwavering determination and an unyielding resolve to carve a path toward the light. It was within the faded confines of a forgotten library that Maya's destiny intertwined with the pages of a weathered tome, the autobiography of a towering figure whose life story echoed with the strains of triumph over tribulation. Inspired by the tales of resilience and fortitude contained ithin its well-worn pages, Maya made a solemn vow to herself—a pledge to defy the gravitational pull of circumstance and ascend to the lofty heights of her dreams. Thus, armed with little more than a heart pulsating with hope and a mind ablaze with possibility, Maya embarked upon a quest that would forever alter the course of her existence. In the labyrinthine corridors of academia, Maya found sanctuary and solace, her thirst for knowledge propelling her toward the hallowed halls of higher learning. Despite the formidable barriers erected by poverty and privation, Maya refused to relinquish her dreams, toiling tirelessly beneath the weight of adversity to secure a scholarship that would serve as the keystone to her aspirations. With each lecture attended and each assignment conquered, Maya's resolve only grew stronger, her spirit undimmed by the shadows that sought to obscure her path. Yet Maya's journey was not one traversed in solitude, for she was buoyed by the unwavering support of kindred spirits who believed in her vision with a fervor that mirrored her own. Together, they forged a fellowship bound by a shared commitment to effecting change, their collective efforts coalescing into a force for good that reverberated throughout the corridors of time. With each act of kindness and each gesture of generosity, Maya and her companions illuminated the darkness that cloaked their world, casting aside the shadows of despair and igniting the flames of hope in the hearts of those who had long languished in obscurity. It was amidst the crucible of adversity that Maya's true calling revealed itself, beckoning her toward a destiny intertwined with the welfare of others. In the crucible of her soul, Maya forged a resolve as unyielding as tempered steel, vowing to dedicate her life to the service of those in need. With the fervor of a missionary and the tenacity of a warrior, Maya embarked upon a noble crusade to uplift the downtrodden and empower the disenfranchised, her footsteps echoing through the annals of history as a testament to the enduring power of the human spirit. And so, as the sun sets on the horizon of Maya's odyssey, casting its golden rays upon a world forever altered by her presence, we are reminded of the boundless potential that resides within each and every one of us. For Maya's story is not merely a chronicle of one woman's triumph over adversity; it is a clarion call to arms—a rallying cry for all who dare to dream and strive for greatness in a world fraught with uncertainty. In the tapestry of Maya's life, we find the threads of our own destinies woven, beckoning us toward a future illuminated by the radiant light of hope and possibility. In the labyrinth of life, Maya's tale unfolds as a symphony of resilience, echoing across the expanse of time with the resonance of a thousand triumphs. Born into the crucible of poverty, Maya's childhood was a crucible where adversity forged the steel of her spirit. Yet, amidst the shadows of deprivation, Maya found solace in the",

                "The history of technology is a story of constant evolution, from the basic tools of our ancestors to the sophisticated devices we use today. It began with simple inventions like the wheel and fire, which transformed our ability to travel, cook, and stay warm. Over time, advancements like the printing press revolutionized communication, while the steam engine ushered in the Industrial Age. The 20th century saw an explosion of technological innovation with the rise of computers, the internet, and space exploration. These advancements have shrunk distances, connected people across the globe, and given us the tools to explore the universe. However, technology's impact goes beyond convenience. It has revolutionized medicine, agriculture, and manufacturing, improving our quality of life and shaping the way we live and work. As we move forward, the focus continues to be on developing new technologies like artificial intelligence and robotics, constantly pushing the boundaries of what's possible. The future of technology holds both immense potential and challenges, and its story continues to unfold. Our story with technology stretches back millions of years, beginning with the first chipped stones used by our early ancestors. These basic tools marked the dawn of human ingenuity, laying the foundation for future advancements. Fire, another early innovation, transformed our ability to survive, keeping us warm, cooking food, and warding off predators. The wheel, invented around 3500 BC, revolutionized transportation and trade, allowing for the movement of goods and ideas on a grander scale. Fast forward to the Renaissance, where the printing press spurred a communication revolution, democratizing knowledge and fueling cultural exchange. The Industrial Revolution, powered by the steam engine, ushered in an era of mass production and transformed societies. The 20th century witnessed an unparalleled acceleration in technological development. From the birth of the airplane to the rise of computers and the internet, these advancements shrunk the world, connecting people and information at breakneck speed. spoke volumes, and the way their hands brushed, sending a jolt of electricity through them both. In the heart of a bustling city, amidst the ordinary chaos of daily life, they had found an extraordinary connection, a love story blooming amidst the aroma of freshly brewed coffee and the quiet hum of unspoken promises. Their Parisian love story wasn't confined to cozy cafes. They explored the city hand-in-hand, their laughter echoing through the timeless halls of the Louvre and their shoulders brushing beneath the twinkling lights of the Eiffel Tower. Etienne captured Amelia sketching the Notre Dame, her brow furrowed in concentration, a captivating contrast to the city's grandeur. Amelia, in turn, filled notebooks with poems inspired by Etienne's photographs, each image a window into a stranger's life, a story waiting to be told. They bickered playfully over forgotten croissants and debated the merits of Hemingway versus Fitzgerald in hidden bookstores. Rainy afternoons were spent curled up under a shared The history of technology is a story of constant evolution, from the basic tools of our ancestors to the sophisticated devices we use today. It began with simple inventions like the wheel and fire, which transformed our ability to travel, cook, and stay warm. Over time, advancements like the printing press revolutionized communication, while the steam engine ushered in the Industrial Age. The 20th century saw an explosion of technological innovation with the rise of computers, the internet, and space exploration. These advancements have shrunk distances, connected people across the globe, and given us the tools to explore the universe. However, technology's impact goes beyond convenience. It has revolutionized medicine, agriculture, and manufacturing, improving our quality of life and shaping the way we live and work. As we move forward, the focus continues to be on developing new technologies like artificial intelligence and roboti The history of technology is a story of constant evolution, from the basic tools of our ancestors to the sophisticated devices we use today. It began with simple inventions like the wheel and fire, which transformed our ability to travel, cook, and stay warm. Over time, advancements like the printing press revolutionized communication, while the steam engine ushered in the Industrial Age. The 20th century saw an explosion of technological innovation with the rise of computers, the internet, and space exploration. These advancements have shrunk distances, connected people across the globe, and given us the tools to explore the universe. However, technology's impact goes beyond convenience. It has revolutionized medicine, agriculture, and manufacturing, improving our quality of life and shaping the way we live and work. As we move forward, the focus continues to be on developing new technologies like artificial intelligence and robotics, constantly pushing the boundaries of what's possible. The future of technology holds both immense potential and challenges, and its story continues to unfold. Our story with technology stretches back millions of years, beginning with the first chipped stones used by our early ancestors. These basic tools marked the dawn of human ingenuity, laying the foundation for future advancements. Fire, another early innovation, transformed our ability to survive, keeping us warm, cooking food, and warding off predators. The wheel, invented around 3500 BC, revolutionized transportation and trade, allowing for the movement of goods and ideas on a grander scale. Fast forward to the Renaissance, where the printing press spurred a communication revolution, democratizing knowledge and fueling cultural exchange. The Industrial Revolution, powered by the steam engine, ushered in an era of mass production and transformed societies. The 20th century witnessed an unparalleled acceleration in technological development. From the birth of the airplane to the rise of computers and the internet, these advancements shrunk the world, connecting people and information at breakneck speed. spoke volumes, and the way their hands brushed, sending a jolt of electricity through them both. In the heart of a bustling city, amidst the ordinary chaos of daily life, they had found an extraordinary connection, a love story blooming amidst the aroma of freshly brewed coffee and the quiet hum of unspoken promises. Their Parisian love story wasn't confined to cozy cafes. They explored the city hand-in-hand, their laughter echoing through the timeless halls of the Louvre and their shoulders brushing beneath the twinkling lights of the Eiffel Tower. Etienne captured Amelia sketching the Notre Dame, her brow furrowed in concentration, a captivating contrast to the city's grandeur. Amelia, in turn, filled notebooks with poems inspired by Etienne's photographs, each image a window into a stranger's life, a story waiting to be told. They bickered playfully over forgotten croissants and debated the merits of Hemingway versus Fitzgerald in hidden bookstores. Rainy afternoons were spent curled up under a shared The history of technology is a story of constant evolution, from the basic tools of our ancestors to the sophisticated devices we use today. It began with simple inventions like the wheel and fire, which transformed our ability to travel, cook, and stay warm. Over time, advancements like the printing press revolutionized communication, while the steam engine ushered in the Industrial Age. The 20th century saw an explosion of technological innovation with the rise of computers, the internet, and space exploration. These advancements have shrunk distances, connected people across the globe, and given us the tools to explore the universe. However, technology's impact goes beyond convenience. It has revolutionized medicine, agriculture, and manufacturing, improving our quality of life and shaping the way we live and work. As we move forward, the focus continues to be on developing new technologies like artificial intelligence and roboti The history of technology is a story of constant evolution, from the basic tools of our ancestors to the sophisticated devices we use today. It began with simple inventions like the wheel and fire, which transformed our ability to travel, cook, and stay warm. Over time, advancements like the printing press revolutionized communication, while the steam engine ushered in the Industrial Age. The 20th century saw an explosion of technological innovation with the rise of computers, the internet, and space exploration. These advancements have shrunk distances, connected people across the globe, and given us the tools to explore the universe. However, technology's impact goes beyond convenience. It has revolutionized medicine, agriculture, and manufacturing, improving our quality of life and shaping the way we live and work. As we move forward, the focus continues to be on developing new technologies like artificial intelligence and robotics, constantly pushing the boundaries of what's possible. The future of technology holds both immense potential and challenges, and its story continues to unfold. Our story with technology stretches back millions of years, beginning with the first chipped stones used by our early ancestors. These basic tools marked the dawn of human ingenuity, laying the foundation for future advancements. Fire, another early innovation, transformed our ability to survive, keeping us warm, cooking food, and warding off predators. The wheel, invented around 3500 BC, revolutionized transportation and trade, allowing for the movement of goods and ideas on a grander scale. Fast forward to the Renaissance, where the printing press spurred a communication revolution, democratizing knowledge and fueling cultural exchange. The Industrial Revolution, powered by the steam engine, ushered in an era of mass production and transformed societies. The 20th century witnessed an unparalleled acceleration in technological development",

                "Romania's history is a blend of ancient heritage and tumultuous change. Dacian tribes, ancestors of modern Romanians, fiercely resisted Roman conquest for centuries before finally succumbing in 105 AD. Roman influence left a lasting mark, shaping language, culture, and even the country's name (Romania). Following the Roman withdrawal, the region faced waves of migrations and shifting empires. Medieval Romanian principalities emerged under Ottoman control, with periods of autonomy and struggle for independence. A key turning point came in 1859 when Wallachia and Moldavia united, forming the foundation for the modern Romanian state. The fight for independence culminated in 1877, and Romania emerged as a kingdom. World War I saw Romania switch sides, ultimately achieving unification with Transylvania, Bessarabia, and other regions. The 20th century brought further upheaval with World War II, communist rule under the harsh dictator Nicolae Ceaușescu, and finally, the revolution of 1989 that toppled the regime. Since then, Romania has transitioned to democracy and a market economy, striving for integration with Europe. Today, Romania stands as a country shaped by its complex past, looking towards a future as part of the modern world. Before the Roman conquest, Dacia was a powerful kingdom known for its skilled warriors and impressive fortifications. While eventually succumbing to Roman might, the Dacians didn't disappear entirely. Many assimilated into Roman society, laying the groundwork for the unique Romanian language, a Romance language with strong Slavic influences. The 20th century, however, brought its share of turmoil. Romania entered World War I on the side of the Central Powers but ultimately switched allegiance, achieving a historic unification with Transylvania and other regions with significant Romanian populations. The interwar period was marked by political instability and rising nationalism. World War II brought further devastation, with Romania initially siding with the Axis before switching sides again. Despite facing challenges like the loss of Bessarabia to Russia and navigating the complex politics of the Great Powers spoke volumes, and the way their hands brushed, sending a jolt of electricity through them both. In the heart of a bustling city, amidst the ordinary chaos of daily life, they had found an extraordinary connection, a love story blooming amidst the aroma of freshly brewed coffee and the quiet hum of unspoken promises. Their Parisian love story wasn't confined to cozy cafes. They explored the city hand-in-hand, their laughter echoing through the timeless halls of the Louvre and their shoulders brushing beneath the twinkling lights of the Eiffel Tower. Etienne captured Amelia sketching the Notre Dame, her brow furrowed in concentration, a captivating contrast to the city's grandeur. Amelia, in turn, filled notebooks with poems inspired by Etienne's photographs, each image a window into a stranger's life, a story waiting to be told. They bickered playfully over forgotten croissants and debated the merits of Hemingway versus Fitzgerald in hidden bookstores. Rainy afternoons were spent curled up under a shared Romania's history is a blend of ancient heritage and tumultuous change. Dacian tribes, ancestors of modern Romanians, fiercely resisted Roman conquest for centuries before finally succumbing in 105 AD. Roman influence left a lasting mark, shaping language, culture, and even the country's name (Romania). Following the Roman withdrawal, the region faced waves of migrations and shifting empires. Medieval Romanian principalities emerged under Ottoman control, with periods of autonomy and struggle for independence. A key turning point came in 1859 when Wallachia and Moldavia united, forming the foundation for the modern Romanian state. The fight for independence culminated in 1877, and Romania emerged as a kingdom. World War I saw Romania switch sides, ultimately achieving unification with Transylvania, Bessarabia, and other regions. The 20th century brought further upheaval with World Romania's history is a blend of ancient heritage and tumultuous change. Dacian tribes, ancestors of modern Romanians, fiercely resisted Roman conquest for centuries before finally succumbing in 105 AD. Roman influence left a lasting mark, shaping language, culture, and even the country's name (Romania). Following the Roman withdrawal, the region faced waves of migrations and shifting empires. Medieval Romanian principalities emerged under Ottoman control, with periods of autonomy and struggle for independence. A key turning point came in 1859 when Wallachia and Moldavia united, forming the foundation for the modern Romanian state. The fight for independence culminated in 1877, and Romania emerged as a kingdom. World War I saw Romania switch sides, ultimately achieving unification with Transylvania, Bessarabia, and other regions. The 20th century brought further upheaval with World War II, communist rule under the harsh dictator Nicolae Ceaușescu, and finally, the revolution of 1989 that toppled the regime. Since then, Romania has transitioned to democracy and a market economy, striving for integration with Europe. Today, Romania stands as a country shaped by its complex past, looking towards a future as part of the modern world. Before the Roman conquest, Dacia was a powerful kingdom known for its skilled warriors and impressive fortifications. While eventually succumbing to Roman might, the Dacians didn't disappear entirely. Many assimilated into Roman society, laying the groundwork for the unique Romanian language, a Romance language with strong Slavic influences. The 20th century, however, brought its share of turmoil. Romania entered World War I on the side of the Central Powers but ultimately switched allegiance, achieving a historic unification with Transylvania and other regions with significant Romanian populations. The interwar period was marked by political instability and rising nationalism. World War II brought further devastation, with Romania initially siding with the Axis before switching sides again. Despite facing challenges like the loss of Bessarabia to Russia and navigating the complex politics of the Great Powers spoke volumes, and the way their hands brushed, sending a jolt of electricity through them both. In the heart of a bustling city, amidst the ordinary chaos of daily life, they had found an extraordinary connection, a love story blooming amidst the aroma of freshly brewed coffee and the quiet hum of unspoken promises. Their Parisian love story wasn't confined to cozy cafes. They explored the city hand-in-hand, their laughter echoing through the timeless halls of the Louvre and their shoulders brushing beneath the twinkling lights of the Eiffel Tower. Etienne captured Amelia sketching the Notre Dame, her brow furrowed in concentration, a captivating contrast to the city's grandeur. Amelia, in turn, filled notebooks with poems inspired by Etienne's photographs, each image a window into a stranger's life, a story waiting to be told. They bickered playfully over forgotten croissants and debated the merits of Hemingway versus Fitzgerald in hidden bookstores. Rainy afternoons were spent curled up under a shared Romania's history is a blend of ancient heritage and tumultuous change. Dacian tribes, ancestors of modern Romanians, fiercely resisted Roman conquest for centuries before finally succumbing in 105 AD. Roman influence left a lasting mark, shaping language, culture, and even the country's name (Romania). Following the Roman withdrawal, the region faced waves of migrations and shifting empires. Medieval Romanian principalities emerged under Ottoman control, with periods of autonomy and struggle for independence. A key turning point came in 1859 when Wallachia and Moldavia united, forming the foundation for the modern Romanian state. The fight for independence culminated in 1877, and Romania emerged as a kingdom. World War I saw Romania switch sides, ultimately achieving unification with Transylvania, Bessarabia, and other regions. The 20th century brought further upheaval with World Romania's history is a blend of ancient heritage and tumultuous change. Dacian tribes, ancestors of modern Romanians, fiercely resisted Roman conquest for centuries before finally succumbing in 105 AD. Roman influence left a lasting mark, shaping language, culture, and even the country's name (Romania). Following the Roman withdrawal, the region faced waves of migrations and shifting empires. Medieval Romanian principalities emerged under Ottoman control, with periods of autonomy and struggle for independence. A key turning point came in 1859 when Wallachia and Moldavia united, forming the foundation for the modern Romanian state. The fight for independence culminated in 1877, and Romania emerged as a kingdom. World War I saw Romania switch sides, ultimately achieving unification with Transylvania, Bessarabia, and other regions. The 20th century brought further upheaval with World War II, communist rule under the harsh dictator Nicolae Ceaușescu, and finally, the revolution of 1989 that toppled the regime. Since then, Romania has transitioned to democracy and a market economy, striving for integration with Europe. Today, Romania stands as a country shaped by its complex past, looking towards a future as part of the modern world. Before the Roman conquest, Dacia was a powerful kingdom known for its skilled warriors and impressive fortifications. While eventually succumbing to Roman might, the Dacians didn't disappear entirely. Many assimilated into Roman society, laying the groundwork for the unique Romanian language, a Romance language with strong Slavic influences. The 20th century, however, brought its share of turmoil. Romania entered World War I on the side of the Central Powers but ultimately switched allegiance, achieving a historic unification with Transylvania and other regions with significant Romanian populations. The interwar period was marked by political instability and rising nationalism. World War II brought",

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
        let maxTime = 300;
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
        const maxCharactersDisplayed = 10000; // Adjust this value as needed


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